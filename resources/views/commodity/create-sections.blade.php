@extends('layouts.app')

@section('template_title')
  Create New Section
@endsection

@section('template_fastload_css')
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

            Create New Section

            <a href="/commodity" class="btn btn-info btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              Back <span class="hidden-xs">to</span><span class="hidden-xs"> Full Lists</span>
            </a>

          </div>
          <div class="panel-body">

            {!! Form::open(array('action' => 'CommodityManagementController@storesection')) !!}
             <div class="form-group has-feedback row {{ $errors->has('sectionid') ? ' has-error ' : '' }}">
                {!! Form::label('sectionid', trans('forms.create_sectionid_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('sectionid', NULL, array('id' => 'sectionid', 'class' => 'form-control', 'placeholder' => trans('forms.create_sectionid_ph_name'))) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('sectionid'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sectionid') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group has-feedback row {{ $errors->has('sectionname') ? ' has-error ' : '' }}">
                {!! Form::label('sectionname', trans('forms.create_section_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('sectionname', NULL, array('id' => 'sectionname', 'class' => 'form-control', 'placeholder' => trans('forms.create_section_ph_name'))) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('sectionname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sectionname') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

             

              {!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;' . trans('forms.create_section_button_text'), array('class' => 'btn btn-success btn-flat margin-bottom-1 pull-right','type' => 'submit', )) !!}

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('footer_scripts')
@endsection
