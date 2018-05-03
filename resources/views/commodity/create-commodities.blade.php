@extends('layouts.app')

@section('template_title')
  Create New Commodity
@endsection

@section('template_fastload_css')
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

            Create New Commodity

            <a href="/commodity" class="btn btn-info btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              Back <span class="hidden-xs">to</span><span class="hidden-xs"> Full Lists</span>
            </a>

          </div>
          <div class="panel-body">

            {!! Form::open(array('action' => 'CommodityManagementController@storecommodities')) !!}

              <div class="form-group has-feedback row {{ $errors->has('section') ? ' has-error ' : '' }}">
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
              
              <div class="form-group has-feedback row {{ $errors->has('chapter') ? ' has-error ' : '' }}">
               {!! Form::label('chapter', trans('forms.create_chapter_label_name'), array('class' => 'col-md-3 control-label')); !!}
              <div class="col-md-9">
                  <div class="input-group">
                
                   {!! Form::select('chapter', $chapterselect, null, array('id' => 'chapter','class'=>'form-control')) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('chapter'))
                    <span class="help-block">
                        <strong>{{ $errors->first('chapter') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              
               <div class="form-group has-feedback row {{ $errors->has('region') ? ' has-error ' : '' }}">
               {!! Form::label('subchapter', trans('forms.create_subchapter_label_name'), array('class' => 'col-md-3 control-label')); !!}
              <div class="col-md-9">
                  <div class="input-group">
                
                   {!! Form::select('subchapter', $subchapterselect, null, array('id' => 'subchapter','class'=>'form-control')) !!}
                    <label class="input-group-addon" for="name"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                  </div>
                  @if ($errors->has('subchapter'))
                    <span class="help-block">
                        <strong>{{ $errors->first('subchapter') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              
 <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
                {!! Form::label('commodity', trans('forms.create_commodity_label_name'), array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                  <div class="input-group">
                    {!! Form::text('commodity', NULL, array('id' => 'commodity', 'class' => 'form-control', 'placeholder' => trans('forms.create_commodity_name'))) !!}
                     <label class="input-group-addon" for="port"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                     
                
                  @if ($errors->has('commodity'))
                    <span class="help-block">
                        <strong>{{ $errors->first('commodity') }}</strong>
                    </span>
                  @endif
                  
                  
                    {!! Form::text('commoditycode', NULL, array('id' => 'commoditycode', 'class' => 'form-control', 'placeholder' => trans('forms.create_commodity_code'))) !!}
                     <label class="input-group-addon" for="port"><i class="fa fa-fw {{ trans('forms.create_region_icon_name') }}" aria-hidden="true"></i></label>
                     
                  </div>
                  @if ($errors->has('commoditycode'))
                    <span class="help-block">
                        <strong>{{ $errors->first('commoditycode') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

             

              {!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;' . trans('forms.create_commodity_button_text'), array('class' => 'btn btn-success btn-flat margin-bottom-1 pull-right','type' => 'submit', )) !!}

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('footer_scripts')
@endsection
