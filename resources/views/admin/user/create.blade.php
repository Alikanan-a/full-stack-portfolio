@extends('admin.layouts.app')

@section('title')
    Home|Edit {{$user->name}}
@endsection

@section('content')
    <form method="POST" action="{{route('admin.profile.update' , Auth()->id())}}">
        @csrf
        <div class="row">
            <div class="col-12">
                <h4 class="mt-3">{{__("Edit User ") . $user->name}}</h4>
            </div>
        </div>
        <div class="row mt-5">
            <div class="form-group mb-3 col-md-6">
                <label for="name">
                    Name
                </label>
                <input type="text" id="name" name="name" value="{{old('name' , $user->name??null)}}" placeholder="Name"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md-6">
                <label for="job">
                    {{__("Job")}}
                </label>
                <input type="text" id="job" name="job" value="{{old('job' , $user->job??null)}}" placeholder="{{__("Job")}}"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md-6">
                <label for="password">
                    {{__("Password")}}
                </label>
                <input type="password" id="password" name="password" placeholder="password"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md-6">
                <label for="password_confirmation">
                    {{__("Password Confirmation")}}
                </label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="{{__("password_confirmation")}}"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md-4">
                <label for="years_of_work">
                    {{__("Years of work")}}
                </label>
                <input type="text" id="years_of_work" name="years_of_work" value="{{old('years_of_work' , $user->years_of_work??null)}}" placeholder="Name"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md-4">
                <label for="project_done">
                    {{__("Project done")}}
                </label>
                <input type="text" id="project_done" name="project_done" value="{{old('project_done' , $user->project_done??null)}}" placeholder="Name"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md-4">
                <label for="colab_with_company">
                    {{__("Colab with company")}}
                </label>
                <input type="text" id="colab_with_company" name="colab_with_company" value="{{old('colab_with_company' , $user->colab_with_company??null)}}" placeholder="Name"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md">
                <label for="instagram">
                    {{__("Instagram")}}
                </label>
                <input type="text" id="instagram" name="instagram" value="{{old('instagram' , $user->instagram??null)}}" placeholder="Name"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md">
                <label for="telegram">
                    {{__("Telegram")}}
                </label>
                <input type="text" id="telegram" name="telegram" value="{{old('telegram' , $user->telegram??null)}}" placeholder="Name"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md">
                <label for="whatsapp">
                    {{__("Whatsapp")}}
                </label>
                <input type="text" id="whatsapp" name="whatsapp" value="{{old('whatsapp' , $user->whatsapp??null)}}" placeholder="Name"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md">
                <label for="phone">
                    {{__("Phone")}}
                </label>
                <input type="text" id="phone" name="phone" value="{{old('phone' , $user->phone??null)}}" placeholder="Phone"
                       class="form-control">
            </div>

            <div class="form-group mb-3 col-md">
                <label for="linkedin">
                    {{__("Linkedin")}}
                </label>
                <input type="text" id="linkedin" name="linkedin" value="{{old('linkedin' , $user->linkedin??null)}}" placeholder="Linkedin"
                       class="form-control">
            </div>

            <div class="col-md-12 text-center">
                <button class="btn w-100 btn-outline-primary">{{__("Save")}}</button>
            </div>
        </div>
    </form>
@endsection
