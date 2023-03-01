@extends('admin.layouts.app')

@section('title')
    Home|Create a project
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <p>
                    {{$mail->name}}
                </p>
                <p>
                    {{$mail->company}}
                </p>
                <p>
                    {{$mail->email}}
                </p>
            </div>
            <hr>
            <div class="card-body">
                {{$mail->message}}
            </div>
            <div class="card-footer">
                {{$mail->created_at->diffForHumans()}}
            </div>
        </div>
    </div>
@endsection
