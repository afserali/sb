@extends('layouts.app')

@section('template_title')
  Create New Port
@endsection

@section('template_fastload_css')
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

            Create New Port

            <a href="/master" class="btn btn-info btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              Back <span class="hidden-xs">to</span><span class="hidden-xs"> Full Lists</span>
            </a>

          </div>
          <div class="panel-body">

            {!! Form::open(array('action' => 'MasterManagementController@storeport')) !!}

              <div class="form-group has-feedback row {{ $errors->has('region') ? ' has-error ' : '' }}">
                {!! Form::label('region', trans('forms.create_region_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                
                   {!! Form::select('region', $select, null, array('id' => 'region','class'=>'form-control')) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('region'))
                    <span class="help-block">
                        <strong>{{ $errors->first('region') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              
              <div class="form-group has-feedback row {{ $errors->has('region') ? ' has-error ' : '' }}">
               {!! Form::label('country', trans('forms.create_country_label_name'), array('class' => 'col-md-3 control-label')); !!}
              <div class="col-md-9">
                  <div class="input-group">
                
                   {!! Form::select('country', $countryselect, null, array('id' => 'country','class'=>'form-control')) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('country'))
                    <span class="help-block">
                        <strong>{{ $errors->first('country') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              
               <div class="form-group has-feedback row {{ $errors->has('region') ? ' has-error ' : '' }}">
               {!! Form::label('city', trans('forms.create_city_label_name'), array('class' => 'col-md-3 control-label')); !!}
              <div class="col-md-9">
                  <div class="input-group">
                
                   {!! Form::select('city', $cityselect, null, array('id' => 'city','class'=>'form-control')) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('city'))
                    <span class="help-block">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              
 <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
                {!! Form::label('port', trans('forms.create_port_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('port', NULL, array('id' => 'port', 'class' => 'form-control', 'placeholder' => trans('forms.create_port_name'))) !!}
                     <label class="input-group-addon" for="port"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                     
                
                  @if ($errors->has('port'))
                    <span class="help-block">
                        <strong>{{ $errors->first('port') }}</strong>
                    </span>
                  @endif
                  
                  
                    {!! Form::text('portcode', NULL, array('id' => 'portcode', 'class' => 'form-control', 'placeholder' => trans('forms.create_port_code'))) !!}
                     <label class="input-group-addon" for="port"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                     
                  </div>
                  @if ($errors->has('portcode'))
                    <span class="help-block">
                        <strong>{{ $errors->first('portcode') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

             

              {!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;' . trans('forms.create_port_button_text'), array('class' => 'btn btn-success btn-flat margin-bottom-1 pull-right','type' => 'submit', )) !!}

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('footer_scripts')
@endsection
