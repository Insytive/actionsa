<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyWardRequest;
use App\Http\Requests\StoreWardRequest;
use App\Http\Requests\UpdateWardRequest;
use App\Models\Area;
use App\Models\Ward;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WardsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ward_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wards = Ward::all();

        return view('admin.wards.index', compact('wards'));
    }

    public function create()
    {
        abort_if(Gate::denies('ward_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $areas = Area::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.wards.create', compact('areas'));
    }

    public function store(StoreWardRequest $request)
    {
        $ward = Ward::create($request->all());

        return redirect()->route('admin.wards.index');
    }

    public function edit(Ward $ward)
    {
        abort_if(Gate::denies('ward_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $areas = Area::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $ward->load('area');

        return view('admin.wards.edit', compact('areas', 'ward'));
    }

    public function update(UpdateWardRequest $request, Ward $ward)
    {
        $ward->update($request->all());

        return redirect()->route('admin.wards.index');
    }

    public function show(Ward $ward)
    {
        abort_if(Gate::denies('ward_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ward->load('area', 'wardStations');

        return view('admin.wards.show', compact('ward'));
    }

    public function destroy(Ward $ward)
    {
        abort_if(Gate::denies('ward_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ward->delete();

        return back();
    }

    public function massDestroy(MassDestroyWardRequest $request)
    {
        Ward::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
