@extends('layouts.app')

@section('template_title')
  Editing Surcharge {{ $surcharge->name }}
@endsection

@section('template_linked_css')
  <style type="text/css">
    .btn-save,
    .pw-change-container {
      display: none;
    }
  </style>
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

            <strong>Editing Surcharge:</strong> {{ $surcharge->name }}

            <a href="/surcharges/{{$surcharge->id}}" class="btn btn-primary btn-xs pull-right" style="margin-left: 1em;">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
             Back  <span class="hidden-xs">to Surcharge</span>
            </a>

            <a href="/surcharges" class="btn btn-info btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              <span class="hidden-xs">Back to </span>Surcharges
            </a>

          </div>

          {!! Form::model($surcharge, array('action' => array('SurchargeManagementController@update', $surcharge->id), 'method' => 'PUT')) !!}

            {!! csrf_field() !!}

            <div class="panel-body">

              <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
                {!! Form::label('name', 'Surchargename' , array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('name', old('name'), array('id' => 'name', 'class' => 'form-control', 'placeholder' => trans('forms.ph-surchargename'))) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw fa-user }}" aria-hidden="true"></i></label>
                  </div>
                </div>
              </div>

              <div class="form-group has-feedback row {{ $errors->has('code') ? ' has-error ' : '' }}">
                {!! Form::label('code', 'Code' , array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('code', old('code'), array('id' => 'code', 'class' => 'form-control', 'placeholder' => trans('forms.ph-code'))) !!}
                    <label class="input-group-addon" for="code"><i class="fa fa-fw fa-envelope " aria-hidden="true"></i></label>
                  </div>
                </div>
              </div>


              <div class="form-group has-feedback row {{ $errors->has('description') ? ' has-error ' : '' }}">
                {!! Form::label('description', trans('forms.create_surcharge_label_description'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::textarea('description', NULL, array('id' => 'description', 'class' => 'form-control', 'placeholder' => trans('forms.create_surcharge_ph_description'))) !!}
                    <label class="input-group-addon" for="description"><i class="fa fa-fw {{ trans('forms.create_surcharge_icon_firstname') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

             

             

            </div>
            <div class="panel-footer">

              <div class="row">

                
                <div class="col-xs-6">
                  {!! Form::button('<i class="fa fa-fw fa-save" aria-hidden="true"></i> Save Changes', array('class' => 'btn btn-success btn-block margin-bottom-1 btn-save','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmSave', 'data-title' => trans('modals.edit_surcharge__modal_text_confirm_title'), 'data-message' => trans('modals.edit_surcharge__modal_text_confirm_message'))) !!}
                </div>
              </div>
            </div>

          {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>

  @include('modals.modal-save')
  @include('modals.modal-delete')

@endsection

@section('footer_scripts')

  @include('scripts.delete-modal-script')
  @include('scripts.save-modal-script')
  @include('scripts.check-changed')

@endsection