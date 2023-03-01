@extends('admin.layouts.app')

@section('title')
    All Mails
@endsection

@section('content')
    <table class="table mt-4 table-bordered table-striped">
        <tr>
            <th>
                #
            </th>
            <th>
                {{__("Name")}}
            </th>
            <th>
                {{__("email")}}
            </th>
            <th>
                {{__("company")}}
            </th>
            <th>
                {{__("Phone")}}
            </th>
            <th>
                {{__("Action")}}
            </th>
        </tr>
        @foreach($mail as $key => $item)
            <tr>
                <td>
                    {{$key + 1}}
                </td>
                <td>
                    {{$item->name}}
                </td>
                <td>
                    {{$item->email}}
                </td>
                <td>
                    {{$item->company}}
                </td>
                <td>
                    {{$item->phone}}
                </td>

                <td>
                    <a class="btn btn-danger btn-sm" href="{{route('admin.mail.destroy' , $item->id)}}">Delete</a>
                    <a class="btn btn-warning btn-sm" href="{{route('admin.mail.view' , $item->id)}}">View</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
