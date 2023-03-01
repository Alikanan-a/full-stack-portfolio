<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $project = Project::orderByDesc('id')->get();
        return view('admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => ['required', 'string'],
            'short_description' => ['required', 'string'],
            'image' => ['required']
        ]);

        $project = new Project();
        $project->name = $data['name'];
        $project->description = $data['short_description'];
        if ($data['image']) {
            $primaryImage = $request->file('image');
            $image_name = date('Y-m-d-H-i:s') . "_" . uniqid() . $request->file('image')->getClientOriginalName();
            $primaryImage->move(public_path(env('PRODUCT_IMAGE_PATH')), $image_name);
            $project->image = $image_name;
        }

        $project->save();

        toast('اطلاعات با موفقیت ویرایش ثبت شد', 'success');

        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //

        return view('admin.project.create', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'name' => ['nullable', 'string'],
            'short_description' => ['nullable', 'string'],
            'image' => ['nullable']
        ]);

        $project->name = $data['name'];
        $project->description = $data['short_description'];
        if ($data['image']) {
            $primaryImage = $request->file('image');
            $image_name = date('Y-m-d-H-i:s') . "_" . uniqid() . $request->file('image')->getClientOriginalName();
            $primaryImage->move(public_path(env('PRODUCT_IMAGE_PATH')), $image_name);
            $project->image = $image_name;
        }
        $project->update();

        toast('اطلاعات با موفقیت ویرایش ویرایش شد', 'success');

        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->back();
        //
    }
}
