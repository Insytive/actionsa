<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStationRequest;
use App\Http\Requests\StoreStationRequest;
use App\Http\Requests\UpdateStationRequest;
use App\Models\Station;
use App\Models\Ward;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StationsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('station_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stations = Station::all();

        return view('admin.stations.index', compact('stations'));
    }

    public function create()
    {
        abort_if(Gate::denies('station_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wards = Ward::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.stations.create', compact('wards'));
    }

    public function store(StoreStationRequest $request)
    {
        $station = Station::create($request->all());

        return redirect()->route('admin.stations.index');
    }

    public function edit(Station $station)
    {
        abort_if(Gate::denies('station_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wards = Ward::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $station->load('ward');

        return view('admin.stations.edit', compact('wards', 'station'));
    }

    public function update(UpdateStationRequest $request, Station $station)
    {
        $station->update($request->all());

        return redirect()->route('admin.stations.index');
    }

    public function show(Station $station)
    {
        abort_if(Gate::denies('station_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $station->load('ward', 'stationLeads');

        return view('admin.stations.show', compact('station'));
    }

    public function destroy(Station $station)
    {
        abort_if(Gate::denies('station_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $station->delete();

        return back();
    }

    public function massDestroy(MassDestroyStationRequest $request)
    {
        Station::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
