<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Http\Resources\Admin\MemberResource;
use App\Models\Member;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MembersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('member_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MemberResource(Member::all());
    }

    public function store(StoreMemberRequest $request)
    {
        $member = Member::create($request->all());

        return (new MemberResource($member))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Member $member)
    {
        abort_if(Gate::denies('member_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MemberResource($member);
    }

    public function update(UpdateMemberRequest $request, Member $member)
    {
        $member->update($request->all());

        return (new MemberResource($member))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Member $member)
    {
        abort_if(Gate::denies('member_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
