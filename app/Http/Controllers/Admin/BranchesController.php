<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyBranchRequest;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use App\Models\Branch;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class BranchesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('branch_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $branches = Branch::all();

        return view('admin.branches.index', compact('branches'));
    }

    public function create()
    {
        abort_if(Gate::denies('branch_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.branches.create');
    }

    public function store(StoreBranchRequest $request)
    {
        $branch = Branch::create($request->all());

        if ($request->input('photo', false)) {
            $branch->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $branch->id]);
        }

        return redirect()->route('admin.branches.index');
    }

    public function edit(Branch $branch)
    {
        abort_if(Gate::denies('branch_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.branches.edit', compact('branch'));
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

        return redirect()->route('admin.branches.index');
    }

    public function show(Branch $branch)
    {
        abort_if(Gate::denies('branch_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $branch->load('branchDepartments');

        return view('admin.branches.show', compact('branch'));
    }

    public function destroy(Branch $branch)
    {
        abort_if(Gate::denies('branch_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $branch->delete();

        return back();
    }

    public function massDestroy(MassDestroyBranchRequest $request)
    {
        Branch::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('branch_create') && Gate::denies('branch_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Branch();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
