@extends('layouts.app')

@section('template_title')
  Create New Surcharge
@endsection

@section('template_fastload_css')
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

            Create New Surcharge

            <a href="/surcharges" class="btn btn-info btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              Back <span class="hidden-xs">to</span><span class="hidden-xs"> Surcharges</span>
            </a>

          </div>
          <div class="panel-body">

            {!! Form::open(array('action' => 'SurchargeManagementController@store')) !!}

              <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
                {!! Form::label('name', trans('forms.create_surcharge_label_username'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('name', NULL, array('id' => 'name', 'class' => 'form-control', 'placeholder' => trans('forms.create_surcharge_ph_username'))) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_user_icon_username') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group has-feedback row {{ $errors->has('code') ? ' has-error ' : '' }}">
                {!! Form::label('code', trans('forms.create_surcharge_label_code'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('code', NULL, array('id' => 'code', 'class' => 'form-control', 'placeholder' => trans('forms.create_surcharge_ph_code'))) !!}
                    <label class="input-group-addon" for="code"><i class="fa fa-fw {{ trans('forms.create_user_icon_code') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('code'))
                    <span class="help-block">
                        <strong>{{ $errors->first('code') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group has-feedback row {{ $errors->has('description') ? ' has-error ' : '' }}">
                {!! Form::label('description', trans('forms.create_surcharge_label_description'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::textarea('description', NULL, array('id' => 'description', 'class' => 'form-control', 'placeholder' => trans('forms.create_surcharge_ph_description'))) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_surcharge_icon_description') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              

              {!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;' . trans('forms.create_surcharge_button_text'), array('class' => 'btn btn-success btn-flat margin-bottom-1 pull-right','type' => 'submit', )) !!}

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('footer_scripts')
@endsection
