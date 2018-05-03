@if(Session::has('message'))
    <div class="alert alert-{{ Session::get('status') }} status-box"  role="alert" data-auto-dismiss="2000">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        {{ Session::get('message') }}
    </div>
@endif
