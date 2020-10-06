<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWardRequest;
use App\Http\Requests\UpdateWardRequest;
use App\Http\Resources\Admin\WardResource;
use App\Models\Ward;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WardsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ward_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WardResource(Ward::with(['area'])->get());
    }

    public function store(StoreWardRequest $request)
    {
        $ward = Ward::create($request->all());

        return (new WardResource($ward))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Ward $ward)
    {
        abort_if(Gate::denies('ward_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WardResource($ward->load(['area']));
    }

    public function update(UpdateWardRequest $request, Ward $ward)
    {
        $ward->update($request->all());

        return (new WardResource($ward))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Ward $ward)
    {
        abort_if(Gate::denies('ward_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ward->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
