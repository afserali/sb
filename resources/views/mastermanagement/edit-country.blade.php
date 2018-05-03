@extends('layouts.app')

@section('template_title')
  Editing Country {{ $country->country }}
@endsection

@section('template_fastload_css')
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

           <strong>Editing Country:</strong> {{ $country->country }}
            <a href="/showcountry" class="btn btn-primary btn-xs pull-right" style="margin-left: 1em;">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
             Back  <span class="hidden-xs">to Countries</span>
            </a>

            <a href="/master" class="btn btn-info btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              <span class="hidden-xs">Back to </span>Ports
            </a>

          </div>
          <div class="panel-body">

           {!! Form::model($country, array('action' => array('MasterManagementController@updatecountry', $country->id), 'method' => 'PUT')) !!}

            {!! csrf_field() !!}

              <div class="form-group has-feedback row {{ $errors->has('region') ? ' has-error ' : '' }}">
                {!! Form::label('region', trans('forms.create_region_label_name'), array('class' => 'col-md-3 control-label')); !!}
                 <div class="col-md-9">
                  <div class="input-group">
                    <select class="form-control" name="region" id="region">
                     
                      
                        @foreach($region as $regio)
                          <option value="{{ $regio->id }}" {{ $country->rid == $regio->id ? 'selected="selected"' : '' }}>{{ $regio->name }}</option>
                        @endforeach
                     
                    </select>
                    <label class="input-group-addon" for="role"><i class="fa fa-fw {{ trans('forms.create_user_icon_role') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('region'))
                    <span class="help-block">
                        <strong>{{ $errors->first('region') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              
              
 <div class="form-group has-feedback row {{ $errors->has('country') ? ' has-error ' : '' }}">
                {!! Form::label('country', trans('forms.create_country_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('country', NULL, array('id' => 'country', 'class' => 'form-control', 'placeholder' => trans('forms.create_country_name'))) !!}
                     <label class="input-group-addon" for="country"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                      {!! Form::text('code', NULL, array('id' => 'code', 'class' => 'form-control', 'placeholder' => trans('forms.create_country_code'))) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              
              <div class="form-group has-feedback row {{ $errors->has('currency') ? ' has-error ' : '' }}">
                {!! Form::label('currency', trans('forms.create_currency_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('currency', NULL, array('id' => 'currency', 'class' => 'form-control', 'placeholder' => trans('forms.create_currency_name'))) !!}
                     <label class="input-group-addon" for="country"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                      {!! Form::text('currencyFull', NULL, array('id' => 'currencyFull', 'class' => 'form-control', 'placeholder' => trans('forms.create_country_currencyFull'))) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('currency'))
                    <span class="help-block">
                        <strong>{{ $errors->first('currency') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

<div class="form-group has-feedback row {{ $errors->has('time_zone') ? ' has-error ' : '' }}">
                {!! Form::label('time_zone', trans('forms.create_time_zone_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('time_zone', NULL, array('id' => 'time_zone', 'class' => 'form-control', 'placeholder' => trans('forms.create_time_zone_name'))) !!}
                     <label class="input-group-addon" for="country"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                      {!! Form::text('timeUTC', NULL, array('id' => 'timeUTC', 'class' => 'form-control', 'placeholder' => trans('forms.create_country_timeUTC'))) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('time_zone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('time_zone') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
             

              {!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;' . trans('forms.update_country_button_text'), array('class' => 'btn btn-success btn-flat margin-bottom-1 pull-right','type' => 'submit', )) !!}

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('footer_scripts')
@endsection
