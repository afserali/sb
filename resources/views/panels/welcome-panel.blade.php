@php

    $levelAmount = 'level';

    if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

    }

@endphp


<div class="panel panel-primary @role('admin', true) panel-info  @endrole">
    <div class="panel-heading">

        Welcome {{ Auth::user()->name }}

        @role('admin', true)
            <span class="pull-right label label-primary" style="margin-top:4px">
            Admin Access
            </span>
         @endrole
          @role('user', true)
            <span class="pull-right label label-warning" style="margin-top:4px">
            User Access
            </span>
        @endrole
        @role('vendor', true)
            <span class="pull-right label label-info" style="margin-top:4px">
            Vendor Access
            </span>
        @endrole

    </div>
    <div class="panel-body">
        <h2 class="lead">
            {{ trans('auth.loggedIn') }}
        </h2>
        <p>
            <em>Thank you</em> for checking this project out. 
        </p>

       

        <p>
            This pages is protected by <code>activated</code> . Only accounts with activated emails are able pass this page.
        </p>
        <p>
            <small>
                Users registered via Social providers are by default activated.
            </small>
        </p>

        <hr>

        <h4>
            You have
                @role('admin')
                   Admin
                @endrole
                @role('user')
                   User
                @endrole
                @role('vendor')
                  Vendor
                @endrole
            Access
        </h4>

        <hr>

        <h4>
            You have access to {{ $levelAmount }}:
            @level(5)
                <span class="label label-primary margin-half">5</span>
            @endlevel

            @level(4)
                <span class="label label-info margin-half">4</span>
            @endlevel

            @level(3)
                <span class="label label-success margin-half">3</span>
            @endlevel

            @level(2)
                <span class="label label-warning margin-half">2</span>
            @endlevel

            @level(1)
                <span class="label label-default margin-half">1</span>
            @endlevel
        </h4>

        @role('admin')

            <hr>

           
        @endrole

    </div>
</div>
