<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAreaRequest;
use App\Http\Requests\StoreAreaRequest;
use App\Http\Requests\UpdateAreaRequest;
use App\Models\Area;
use App\Models\Municipality;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AreasController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('area_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $areas = Area::all();

        return view('admin.areas.index', compact('areas'));
    }

    public function create()
    {
        abort_if(Gate::denies('area_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $municipalities = Municipality::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.areas.create', compact('municipalities'));
    }

    public function store(StoreAreaRequest $request)
    {
        $area = Area::create($request->all());

        return redirect()->route('admin.areas.index');
    }

    public function edit(Area $area)
    {
        abort_if(Gate::denies('area_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $municipalities = Municipality::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $area->load('municipality');

        return view('admin.areas.edit', compact('municipalities', 'area'));
    }

    public function update(UpdateAreaRequest $request, Area $area)
    {
        $area->update($request->all());

        return redirect()->route('admin.areas.index');
    }

    public function show(Area $area)
    {
        abort_if(Gate::denies('area_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $area->load('municipality', 'areaWards');

        return view('admin.areas.show', compact('area'));
    }

    public function destroy(Area $area)
    {
        abort_if(Gate::denies('area_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $area->delete();

        return back();
    }

    public function massDestroy(MassDestroyAreaRequest $request)
    {
        Area::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
