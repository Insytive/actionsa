<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStationRequest;
use App\Http\Requests\UpdateStationRequest;
use App\Http\Resources\Admin\StationResource;
use App\Models\Station;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StationsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('station_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StationResource(Station::with(['ward'])->get());
    }

    public function store(StoreStationRequest $request)
    {
        $station = Station::create($request->all());

        return (new StationResource($station))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Station $station)
    {
        abort_if(Gate::denies('station_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StationResource($station->load(['ward']));
    }

    public function update(UpdateStationRequest $request, Station $station)
    {
        $station->update($request->all());

        return (new StationResource($station))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Station $station)
    {
        abort_if(Gate::denies('station_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $station->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
