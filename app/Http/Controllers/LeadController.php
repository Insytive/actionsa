<?php

namespace App\Http\Controllers;

use App\Gamify\Points\LeadCreated;
use App\Mail\SupporterWelcome;
use App\Models\Lead;
use App\Models\Station;
use App\Notifications\LeadAdded;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!is_null($user)) {
            $leads = Lead::where('created_by', '=', $user->id)->orderBy('id', 'desc')->get();
            return Inertia::render('Dashboard', [
                'leads' => $leads,
                'user_id' => $user->id
            ]);
        }

        return Inertia::render('Dashboard', [
            'leads' => [],
            'user_id' => null
        ]);
    }

    public function create()
    {
        return Inertia::render('Leads/Create');
    }

    public function store(Request $request)
    {
//        Notification::send(request()-user(), new LeadAdded());

        $postData = $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'id_number' => 'required',
            'lead_email' => 'string|nullable',
            'phone' => 'required',
            'first_time_voter' => 'required',
            'address' => 'required',
            'is_member' => 'boolean|nullable',
            'station_id' => 'required'
        ]);

        $duplicateIDnumber = Lead::where('id_number', $postData['id_number'])->first();

        $leadEmail = $postData['lead_email'];


        $membership = $postData['is_member'];
      

        if ($duplicateIDnumber) {
            return redirect()->route('registration-error', ['msg' => 'A record with that ID number already exists!']);
        }

//        $station_id = null;

//        if ( isset($postData['station_id']) && !empty($postData['station_id']) ) {
//            $station_id = $postData['station_id'];
//        } else {
//            if( isset($postData['reported_station']) && !empty($postData['reported_station'])){
//                $reported_station = $this->customStation($postData['reported_station']);
//
//                if (false !== $reported_station) {
//                    $station_id = $reported_station;
//                }
//            }
//        }
//
//        if ( is_null($station_id)) {
//            return redirect()->route('registration-error', ['msg' => 'There was a problem processing the voting station info.']);
//        }

        $created_by = null;

        if (Auth::check())
        {
            $created_by = Auth::id();
        }

        elseif ($request->has('referrer_id')) {
            $created_by = $request->input('referrer_id');
        }

        $lead = Lead::create([
            'first_name' => $postData['first_name'],
            'last_name' => $postData['last_name'],
            'lead_email' => $postData['lead_email'],
            'id_number' => $postData['id_number'],
            'phone' => $postData['phone'],
            'address' => $postData['address'],
            'first_time_voter' => $postData['first_time_voter'],
            'station_id' => $postData['station_id'],
            'is_member' => $membership,
            'created_by' => $created_by,
        ]);

        // var_dump($lead);
        // exit();


        if (!is_null($leadEmail)) {
            Mail::to(request('lead_email'))
                ->send(new SupporterWelcome());
        }

        

        if (Auth::check())
        {
            
            $user = Auth::user();
            $user->givePoint(new LeadCreated($postData));
            
            return redirect()->route('dashboard');

        } else {

            return redirect()->route('success');
        }
    }

    public function view (Lead $lead)

    {
        return $lead;
    }

    public function customStation($name)
    {
        // Validate the request

        $station = new Station;

        $station->name      = $name;
        $station->ward_id   = 0;
        $station->approved  = 0;

        if ($station->save()) {
            return $station->id;
        }

        return false;
    }

}
