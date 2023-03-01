@extends('admin.layouts.app')

@section('title')
    All Project
@endsection

@section('content')
    <a class="btn btn-primary btn-sm" href="{{route('admin.project.create')}}">add new project</a>
    <table class="table mt-4 table-bordered table-striped">
        <tr>
            <th>
                #
            </th>
            <th>
                {{__("Name")}}
            </th>
            <th>
                {{__("Description")}}
            </th>
            <th>
                {{__("Action")}}
            </th>
        </tr>
        @foreach($project as $key => $item)
            <tr>
                <td>
                    {{$key + 1}}
                </td>
                <td>
                    {{$item->name}}
                </td>
                <td>
                    {{$item->description}}
                </td>
                <td>
                    <a class="btn btn-danger btn-sm" href="{{route('admin.project.destroy' , $item->id)}}">Delete</a>
                    <a class="btn btn-warning btn-sm" href="{{route('admin.project.edit' , $item->id)}}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
