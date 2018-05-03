@extends('layouts.app')

@section('template_title')
  Editing City {{ $city->city }}
@endsection

@section('template_fastload_css')
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

             <strong>Editing City:</strong> {{ $city->city }}
            <a href="/showcity" class="btn btn-primary btn-xs pull-right" style="margin-left: 1em;">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
             Back  <span class="hidden-xs">to Cities</span>
            </a>

            <a href="/master" class="btn btn-info btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              <span class="hidden-xs">Back to </span>Ports
            </a>

          </div>
          <div class="panel-body">

            {!! Form::model($city, array('action' => array('MasterManagementController@updatecity', $city->id), 'method' => 'PUT')) !!}

              <div class="form-group has-feedback row {{ $errors->has('region') ? ' has-error ' : '' }}">
                {!! Form::label('region', trans('forms.create_region_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                <select class="form-control" name="region" id="region">
                     
                      
                        @foreach($region as $regio)
                          <option value="{{ $regio->id }}" {{ $city->rid == $regio->id ? 'selected="selected"' : '' }}>{{ $regio->name }}</option>
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
                <select class="form-control" name="country" id="country">
                     
                      
                        @foreach($country as $countr)
                          <option value="{{ $countr->id }}" {{ $city->cid == $countr->id ? 'selected="selected"' : '' }}>{{ $countr->country }}</option>
                        @endforeach
                     
                    </select>
                    <label class="input-group-addon" for="role"><i class="fa fa-fw {{ trans('forms.create_user_icon_role') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('country'))
                    <span class="help-block">
                        <strong>{{ $errors->first('country') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              
 <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
                {!! Form::label('city', trans('forms.create_city_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('city', NULL, array('id' => 'city', 'class' => 'form-control', 'placeholder' => trans('forms.create_city_name'))) !!}
                     <label class="input-group-addon" for="city"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                     
                  </div>
                  @if ($errors->has('city'))
                    <span class="help-block">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

             

              {!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;' . trans('forms.update_city_button_text'), array('class' => 'btn btn-success btn-flat margin-bottom-1 pull-right','type' => 'submit', )) !!}

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('footer_scripts')
@endsection
