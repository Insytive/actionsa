<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\Lead;
use App\Models\Province;
use App\Models\User;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leadCount = Lead::count();
        $leads = Lead::latest()->paginate(5);
        $stations = Station::count();
        $total_leads_by_provinces = Lead::totalLeadsByProvince();
        $totalSelfRegistered = Lead::totalSelfRegistered();
        $totalRecruited = Lead::totalRecruited();
        $totalRecruitedLastMonth = Lead::totalRecruitedByPeriod(
            date('Y-m-01', strtotime('last month')),
            date('Y-m-01')
        );
        $totalRecruitedMTD = Lead::totalRecruitedByPeriod(
            date('Y-m-01'),
            date('Y-m-d')
        );
        $totalRecruitedLastWeek = Lead::totalRecruitedByPeriod(
            date('Y-m-d',strtotime('last monday -7 days')),
            date('Y-m-d',strtotime('last monday -1 days'))
        );
        $totalRecruitedWTD = Lead::totalRecruitedByPeriod(
            date('Y-m-d',strtotime('last monday')),
            date('Y-m-d')
        );

        return view('dashboard.dashboardv1', compact(
            'leads',
            'stations',
            'total_leads_by_provinces',
            'totalSelfRegistered',
            'totalRecruited',
            'totalRecruitedLastMonth',
            'totalRecruitedLastWeek'
        ));

//        echo '<pre>';
//        print_r($stations);
//        print_r($total_leads_by_provinces);
//        print_r($totalSelfRegistered);
//        print_r($totalRecruited);
//        print_r($totalRecruitedLastMonth);
//        print_r($totalRecruitedLastWeek);
//        print_r($totalRecruitedWTD);
//        print_r($totalRecruitedMTD);
//        dd($leads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
