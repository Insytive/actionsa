<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Leads Report',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Models\\Lead',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'month',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'd/m/Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
        ];

        $chart1 = new LaravelChart($settings1);

        $settings2 = [
            'chart_title'        => 'Leads by Area',
            'chart_type'         => 'pie',
            'report_type'        => 'group_by_relationship',
            'model'              => 'App\\Models\\Lead',
            'group_by_field'     => 'name',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'filter_days'        => '7',
            'column_class'       => 'col-md-6',
            'entries_number'     => '5',
            'relationship_name'  => 'station',
        ];

        $chart2 = new LaravelChart($settings2);

        $settings3 = [
            'chart_title'           => 'Latest Leads',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Models\\Lead',
            'group_by_field'        => 'birthdate',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'd/m/Y',
            'column_class'          => 'col-md-6',
            'entries_number'        => '10',
            'fields'                => [
                'first_name' => '',
                'last_name'  => '',
                'id_number'  => '',
                'province'   => 'name',
            ],
        ];

        $settings3['data'] = [];

        if (class_exists($settings3['model'])) {
            $settings3['data'] = $settings3['model']::latest()
                ->take($settings3['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings3)) {
            $settings3['fields'] = [];
        }

        $settings4 = [
            'chart_title'        => 'Top Recruiters',
            'chart_type'         => 'bar',
            'report_type'        => 'group_by_relationship',
            'model'              => 'App\\Models\\Lead',
            'group_by_field'     => 'name',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'filter_days'        => '7',
            'column_class'       => 'col-md-6',
            'entries_number'     => '5',
            'relationship_name'  => 'created_by',
        ];

        $chart4 = new LaravelChart($settings4);

        return view('home', compact('chart1', 'chart2', 'settings3', 'chart4'));
    }
}
