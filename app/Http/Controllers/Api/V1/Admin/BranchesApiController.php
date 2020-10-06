<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use App\Http\Resources\Admin\BranchResource;
use App\Models\Branch;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BranchesApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('branch_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BranchResource(Branch::all());
    }

    public function store(StoreBranchRequest $request)
    {
        $branch = Branch::create($request->all());

        if ($request->input('photo', false)) {
            $branch->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        return (new BranchResource($branch))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Branch $branch)
    {
        abort_if(Gate::denies('branch_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BranchResource($branch);
    }

    public function update(UpdateBranchRequest $request, Branch $branch)
    {
        $branch->update($request->all());

        if ($request->input('photo', false)) {
            if (!$branch->photo || $request->input('photo') !== $branch->photo->file_name) {
                if ($branch->photo) {
                    $branch->photo->delete();
                }

                $branch->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($branch->photo) {
            $branch->photo->delete();
        }

        return (new BranchResource($branch))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Branch $branch)
    {
        abort_if(Gate::denies('branch_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $branch->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
