@extends('layouts.app')

@section('template_title')
  Create New Chapter
@endsection

@section('template_fastload_css')
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

            Create New Chapter

            <a href="/commodity" class="btn btn-info btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              Back <span class="hidden-xs">to</span><span class="hidden-xs"> Full Lists</span>
            </a>

          </div>
          <div class="panel-body">

            {!! Form::open(array('action' => 'CommodityManagementController@storechapter')) !!}

              <div class="form-group has-feedback row {{ $errors->has('region') ? ' has-error ' : '' }}">
                {!! Form::label('section', trans('forms.create_section_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                
                   {!! Form::select('section', $select, null, array('id' => 'section','class'=>'form-control')) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('section'))
                    <span class="help-block">
                        <strong>{{ $errors->first('section') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
 <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
                {!! Form::label('chapter', trans('forms.create_chapter_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('chapter', NULL, array('id' => 'country', 'class' => 'form-control', 'placeholder' => trans('forms.create_chapter_name'))) !!}
                     <label class="input-group-addon" for="country"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                      {!! Form::text('code', NULL, array('id' => 'code', 'class' => 'form-control', 'placeholder' => trans('forms.create_chapter_code'))) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('chapter'))
                    <span class="help-block">
                        <strong>{{ $errors->first('chapter') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

             

              {!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;' . trans('forms.create_chapter_button_text'), array('class' => 'btn btn-success btn-flat margin-bottom-1 pull-right','type' => 'submit', )) !!}

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('footer_scripts')
@endsection
