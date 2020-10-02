<?php

namespace App\Http\Controllers;

use App\Gamify\Points\LeadCreated;
use App\Mail\SupporterWelcome;
use App\Models\Lead;
use App\Models\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        $postData = $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'id_number' => 'required',
            'lead_email' => 'string|nullable',
            'phone' => 'required',
            'first_time_voter' => 'required',
            'address' => 'required',
            'interest' => 'required',
            'station_id' => 'required'
        ]);

        $duplicateIDnumber = Lead::where('id_number', $postData['id_number'])->first();

        if ($duplicateIDnumber) {
            return redirect()->route('registration-error', ['msg' => 'A record with that ID number already exists!']);
        }

        // check interest
        $interest = 2;
        if ((boolean)$postData['interest']) {
            $interest = 1;
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

        Lead::create([
            'first_name' => $postData['first_name'],
            'last_name' => $postData['last_name'],
            'lead_email' => $postData['lead_email'],
            'id_number' => $postData['id_number'],
            'phone' => $postData['phone'],
            'address' => $postData['address'],
            'first_time_voter' => $postData['first_time_voter'],
            'station_id' => $postData['station_id'],
            'interest' => $interest,
            'created_by' => $created_by,
        ]);

//        $user = $request->user();
//        $user->givePoint(new LeadCreated($postData));

//        Mail::to(request('lead_email'))
//            ->send(new SupporterWelcome());

        return redirect()->route('dashboard');
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
