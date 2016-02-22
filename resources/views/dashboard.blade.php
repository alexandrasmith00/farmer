@extends('layouts.sidebar')

@section('content')
 
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">Dash!</div>

        <div class="panel-body">
            Here is your dashboard.<br/><br/>
            
            <b>ToDos</b>
            
            <ul>
                <li>Add a care recipient</li>
                <li>Add caregivers to network</li>
                <li>Purchase devices (or join waitlist for device)</li>
                <li>When logging in, see if they need to add additional information</li>
            </ul>
            
            <b> Schema:</b> 
            <p>
                <u>Users</u>
                    Users have accounts (associated with email & password)
                    They also have additional settings
                    Can be care recipients or care givers

                <u>Care recipients</u>
                    Have a number of caregivers taking care of them
                    May or may not be a user on the site

                <u>Caregivers</u>
                    May or may not be a user on the site
                    Have a number of care recipients
                    Have LOTS of metrics associated with him/her

                Care networks
                    A network is a care recipient together with all his/her caregivers
            </p>

            <b>Things that need to go here:</b>
            
            <ul>
                <li>If you don't have a person to care for, you should be prompted to add</li>
                <li>Are there additional caregivers?</li>

                <li>Here are some metrics (most important being sleep, activity, heart rate)</li>

            </ul>
            
            @if (Auth::guest())
                You can see this because you aren't logged in.
            @else
                You can see this because you are logged in.
            @endif
        </div>
    </div>
</div>

@stop
