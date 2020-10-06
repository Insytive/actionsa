<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVolunteerRequest;
use App\Http\Requests\UpdateVolunteerRequest;
use App\Http\Resources\Admin\VolunteerResource;
use App\Models\Volunteer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VolunteersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('volunteer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VolunteerResource(Volunteer::all());
    }

    public function store(StoreVolunteerRequest $request)
    {
        $volunteer = Volunteer::create($request->all());

        return (new VolunteerResource($volunteer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Volunteer $volunteer)
    {
        abort_if(Gate::denies('volunteer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VolunteerResource($volunteer);
    }

    public function update(UpdateVolunteerRequest $request, Volunteer $volunteer)
    {
        $volunteer->update($request->all());

        return (new VolunteerResource($volunteer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Volunteer $volunteer)
    {
        abort_if(Gate::denies('volunteer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $volunteer->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
