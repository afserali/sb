@extends('layouts.app')

@section('template_title')
  Create New Country
@endsection

@section('template_fastload_css')
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

            Create New Country

            <a href="/master" class="btn btn-info btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              Back <span class="hidden-xs">to</span><span class="hidden-xs"> Full Lists</span>
            </a>

          </div>
          <div class="panel-body">

            {!! Form::open(array('action' => 'MasterManagementController@storecountry')) !!}

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
 <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
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

             

              {!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;' . trans('forms.create_country_button_text'), array('class' => 'btn btn-success btn-flat margin-bottom-1 pull-right','type' => 'submit', )) !!}

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('footer_scripts')
@endsection
