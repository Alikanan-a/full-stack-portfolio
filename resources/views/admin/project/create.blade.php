@extends('admin.layouts.app')

@section('title')
    Home|Create a project
@endsection

@section('content')
    <form method="POST"
          @if(isset($project))
          action="{{route('admin.project.update' , $project->id)}}"
          @else
          action="{{route('admin.project.store')}}"
          @endif
          enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <h4 class="mt-3">{{__("Create a new project")}}</h4>
            </div>
        </div>
        @if(isset($project))
            <img src="{{url('Upload/' . $project->image)}}" class="mx-auto img-fluid text-center d-block" alt="">
        @endif
        <div class="row mt-5">
            <div class="form-group mb-3 col-md-6">
                <label for="name">
                    {{__("Name")}}
                </label>
                <input type="text" id="name" name="name" value="{{old('name' , $project->name??null)}}"
                       placeholder="Name"
                       class="form-control">
            </div>
            <div class="form-group mb-3 col-md-6">
                <label for="short_description">
                    {{__("Short description")}}
                </label>
                <input type="text" id="short_description" name="short_description"
                       value="{{old('short_description' , $project->description??null)}}"
                       placeholder="{{__("Short_description")}}"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md-12">
                <label for="image">
                    {{__("Select image")}}
                </label>
                <input type="file" id="image" name="image" value="{{old('image' , $project->image??null)}}"
                       placeholder="{{__("image")}}"
                       class="form-control">
            </div>

            <div class="col-md-12 text-center">
                <button class="btn w-100 btn-outline-primary">{{__("Save")}}</button>
            </div>


        </div>
    </form>
@endsection
