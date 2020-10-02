<?php
ini_set("auto_detect_line_endings", true);

$db = new mysqli('localhost', 'root', '', 'actionsa_app');

if ($db->connect_error) {
    die('DB Connect Error (' . $mysqli->connect_errno . ') ' . $db->connect_error);
}

$total = 22924;

$curTime = new \DateTime();
$created_at = $curTime->format("Y-m-d H:i:s");
$updateTime = new \DateTime();
$updated_at = $updateTime->format("Y-m-d H:i:s");

if (($input = fopen("districts.csv", "r")) !== FALSE) {

    $line = 0;

    while (($data = fgetcsv($input, 0, ";")) !== FALSE) {
        $line++;

        show_status($line, $total);

        if( 1 === $line){
            continue;
        }

        list($province, $municipality, $area, $ward, $station) = $data;

        $province_id = getProvinceByName($province);

        $municipality_id = getMunicipalityByName($municipality, $province_id);

        $area_id = getAreaByName($area, $municipality_id);

        $ward_id = getWardByName($ward, $area_id);

        $query = $db->query("INSERT INTO `stations` (`name`, `ward_id`, `created_at`, `updated_at`) VALUES ('{$db->real_escape_string($station)}', '{$db->real_escape_string($ward_id)}', '{$db->real_escape_string($created_at)}', '{$db->real_escape_string($updated_at)}')");

    }
    fclose($input);
}

function getProvinceByName($name){
    global $db;
    global $curTime;
    global $created_at;
    global $updateTime;
    global $updated_at;

    $query = $db->query("SELECT `id` FROM `provinces` WHERE `name`='{$db->real_escape_string($name)}' LIMIT 1");

    if ( 1 === $query->num_rows){
        $data = $query->fetch_assoc();
        return $data['id'];
    }

    $db->query("INSERT INTO `provinces` (`name`, `created_at`, `updated_at`) VALUES ('{$db->real_escape_string($name)}', '{$db->real_escape_string($created_at)}', '{$db->real_escape_string($updated_at)}')");

    return $db->insert_id;
}

function getMunicipalityByName($name, $province_id){
    global $db;
    global $curTime;
    global $created_at;
    global $updateTime;
    global $updated_at;

    $query = $db->query("SELECT `id` FROM `municipalities` WHERE `name`='{$db->real_escape_string($name)}' AND `province_id`='{$db->real_escape_string($province_id)}' LIMIT 1");

    if ( 1 === $query->num_rows){
        $data = $query->fetch_assoc();
        return $data['id'];
    }

    $db->query("INSERT INTO `municipalities` (`name`, `province_id`, `created_at`, `updated_at`) VALUES ('{$db->real_escape_string($name)}', '{$db->real_escape_string($province_id)}', '{$db->real_escape_string($created_at)}', '{$db->real_escape_string($updated_at)}')");

    return $db->insert_id;
}

function getAreaByName($name, $municipality_id){
    global $db;
    global $curTime;
    global $created_at;
    global $updateTime;
    global $updated_at;

    $query = $db->query("SELECT `id` FROM `areas` WHERE `name`='{$db->real_escape_string($name)}' AND `municipality_id`='{$db->real_escape_string($municipality_id)}' LIMIT 1");

    if ( 1 === $query->num_rows){
        $data = $query->fetch_assoc();
        return $data['id'];
    }

    $db->query("INSERT INTO `areas` (`name`, `municipality_id`, `created_at`, `updated_at`) VALUES ('{$db->real_escape_string($name)}', '{$db->real_escape_string($municipality_id)}', '{$db->real_escape_string($created_at)}', '{$db->real_escape_string($updated_at)}')");

    return $db->insert_id;
}

function getWardByName($name, $area_id){
    global $db;
    global $curTime;
    global $created_at;
    global $updateTime;
    global $updated_at;

    $query = $db->query("SELECT `id` FROM `wards` WHERE `name`='{$db->real_escape_string($name)}' AND `area_id`='{$db->real_escape_string($area_id)}' LIMIT 1");

    if ( 1 === $query->num_rows){
        $data = $query->fetch_assoc();
        return $data['id'];
    }

    // var_dump($db->error);
    // exit();

    $db->query("INSERT INTO `wards` (`name`, `area_id`, `created_at`, `updated_at`) VALUES ('{$db->real_escape_string($name)}', '{$db->real_escape_string($area_id)}', '{$db->real_escape_string($created_at)}', '{$db->real_escape_string($updated_at)}')");

    return $db->insert_id;
}

/**
 * show a status bar in the console
 *
 * <code>
 * for($x=1;$x<=100;$x++){
 *
 *     show_status($x, 100);
 *
 *     usleep(100000);
 *
 * }
 * </code>
 *
 * @param   int     $done   how many items are completed
 * @param   int     $total  how many items are to be done total
 * @param   int     $size   optional size of the status bar
 * @return  void
 *
 */

function show_status($done, $total, $size=30) {
    static $start_time;

    // if we go over our bound, just ignore it
    if($done > $total) return;

    if(empty($start_time)) $start_time=time();
    $now = time();

    $perc=(double)($done/$total);

    $bar=floor($perc*$size);

    $status_bar="\r[";
    $status_bar.=str_repeat("=", $bar);
    if($bar<$size){
        $status_bar.=">";
        $status_bar.=str_repeat(" ", $size-$bar);
    } else {
        $status_bar.="=";
    }

    $disp=number_format($perc*100, 0);

    $status_bar.="] $disp%  $done/$total";

    $rate = ($now-$start_time)/$done;
    $left = $total - $done;
    $eta = round($rate * $left, 2);

    $elapsed = $now - $start_time;

    $status_bar.= " remaining: ".number_format($eta)." sec.  elapsed: ".number_format($elapsed)." sec.";

    echo "$status_bar  ";

    flush();

    // when done, send a newline
    if($done == $total) {
        echo "\n";
    }
}
