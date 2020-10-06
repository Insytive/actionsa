<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMunicipalityRequest;
use App\Http\Requests\StoreMunicipalityRequest;
use App\Http\Requests\UpdateMunicipalityRequest;
use App\Models\Municipality;
use App\Models\Province;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MunicipalitiesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('municipality_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $municipalities = Municipality::all();

        return view('admin.municipalities.index', compact('municipalities'));
    }

    public function create()
    {
        abort_if(Gate::denies('municipality_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $provinces = Province::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.municipalities.create', compact('provinces'));
    }

    public function store(StoreMunicipalityRequest $request)
    {
        $municipality = Municipality::create($request->all());

        return redirect()->route('admin.municipalities.index');
    }

    public function edit(Municipality $municipality)
    {
        abort_if(Gate::denies('municipality_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $provinces = Province::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $municipality->load('province');

        return view('admin.municipalities.edit', compact('provinces', 'municipality'));
    }

    public function update(UpdateMunicipalityRequest $request, Municipality $municipality)
    {
        $municipality->update($request->all());

        return redirect()->route('admin.municipalities.index');
    }

    public function show(Municipality $municipality)
    {
        abort_if(Gate::denies('municipality_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $municipality->load('province', 'municipalityAreas');

        return view('admin.municipalities.show', compact('municipality'));
    }

    public function destroy(Municipality $municipality)
    {
        abort_if(Gate::denies('municipality_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $municipality->delete();

        return back();
    }

    public function massDestroy(MassDestroyMunicipalityRequest $request)
    {
        Municipality::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
