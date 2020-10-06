<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVolunteerRequest;
use App\Http\Requests\StoreVolunteerRequest;
use App\Http\Requests\UpdateVolunteerRequest;
use App\Models\Volunteer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VolunteersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('volunteer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $volunteers = Volunteer::all();

        return view('admin.volunteers.index', compact('volunteers'));
    }

    public function create()
    {
        abort_if(Gate::denies('volunteer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.volunteers.create');
    }

    public function store(StoreVolunteerRequest $request)
    {
        $volunteer = Volunteer::create($request->all());

        return redirect()->route('admin.volunteers.index');
    }

    public function edit(Volunteer $volunteer)
    {
        abort_if(Gate::denies('volunteer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.volunteers.edit', compact('volunteer'));
    }

    public function update(UpdateVolunteerRequest $request, Volunteer $volunteer)
    {
        $volunteer->update($request->all());

        return redirect()->route('admin.volunteers.index');
    }

    public function show(Volunteer $volunteer)
    {
        abort_if(Gate::denies('volunteer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.volunteers.show', compact('volunteer'));
    }

    public function destroy(Volunteer $volunteer)
    {
        abort_if(Gate::denies('volunteer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $volunteer->delete();

        return back();
    }

    public function massDestroy(MassDestroyVolunteerRequest $request)
    {
        Volunteer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
