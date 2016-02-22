@extends('layouts.app')

@section('stylesheets')
@stop


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Here is a single user account</div>

                <div class="panel-body">
                    <h3>{{$user->first}} {{$user->last}} ({{$user->email}})</h3>
                    Roles: @include('format.roles')

    
                </div>
            </div>
        </div>
    </div>
</div>

@stop
