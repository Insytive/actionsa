<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMunicipalityRequest;
use App\Http\Requests\UpdateMunicipalityRequest;
use App\Http\Resources\Admin\MunicipalityResource;
use App\Models\Municipality;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MunicipalitiesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('municipality_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MunicipalityResource(Municipality::with(['province'])->get());
    }

    public function store(StoreMunicipalityRequest $request)
    {
        $municipality = Municipality::create($request->all());

        return (new MunicipalityResource($municipality))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Municipality $municipality)
    {
        abort_if(Gate::denies('municipality_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MunicipalityResource($municipality->load(['province']));
    }

    public function update(UpdateMunicipalityRequest $request, Municipality $municipality)
    {
        $municipality->update($request->all());

        return (new MunicipalityResource($municipality))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Municipality $municipality)
    {
        abort_if(Gate::denies('municipality_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $municipality->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
