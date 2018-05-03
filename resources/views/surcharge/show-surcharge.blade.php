@extends('layouts.app')

@section('template_title')
  Showing Surcharge {{ $surcharge->name }}
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="panel @if ($surcharge->activated == 1) panel-success @else panel-danger @endif">

          <div class="panel-heading">
            <a href="/surcharges/" class="btn btn-primary btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              <span class="hidden-xs">{{ trans('surcharge.surchargesBackBtn') }}</span>
            </a>
            {{ trans('surcharge.surchargesPanelTitle') }}
          </div>
          <div class="panel-body">

            <div class="well">
              <div class="row">
               
                <div class="col-sm-6">
                  <h4 class="margin-top-sm-1 text-center text-left-tablet">
                    {{ $surcharge->code }}  / {{ $surcharge->name }}
                  </h4>
                  </div>
                   <div class="col-sm-6">
               @if ($surcharge->code)
                   <div class="col-sm-6">

                     

                      <a href="/surcharges/{{$surcharge->id}}/edit" class="btn btn-sm btn-warning">
                        <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md"> {{ trans('surcharge.editSurcharge') }} </span>
                      </a>
</div>
 <div class="col-sm-6">
                      {!! Form::open(array('url' => 'surcharges/' . $surcharge->id, 'class' => 'form-inline')) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md">' . trans('surcharge.deleteSurcharge') . '</span>' , array('class' => 'btn btn-danger btn-sm','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this surcharge?')) !!}
                      {!! Form::close() !!}

                    </div>
                  @endif
             

                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>

            @if ($surcharge->name)

              <div class="col-sm-5 col-xs-6 text-larger">
                <strong>
                  {{ trans('surcharge.labelSurchargeName') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $surcharge->name }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($surcharge->code)

            <div class="col-sm-5 col-xs-6 text-larger">
              <strong>
                {{ trans('surcharge.labelCode') }}
              </strong>
            </div>

            <div class="col-sm-7">
              {{ $surcharge->code}}
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>

            @endif
            
             @if ($surcharge->description)

            <div class="col-sm-5 col-xs-6 text-larger">
              <strong>
                {{ trans('surcharge.labelDescription') }}
              </strong>
            </div>

            <div class="col-sm-7">
              {{ $surcharge->description}}
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>

            @endif

          


            <div class="clearfix"></div>
            <div class="border-bottom"></div>

            <div class="col-sm-5 col-xs-6 text-larger">
              <strong>
                {{ trans('surcharge.labelStatus') }}
              </strong>
            </div>

            <div class="col-sm-7">
              @if ($surcharge->activated == 1)
                <span class="label label-success">
                  Activated
                </span>
              @else
                <span class="label label-danger">
                  Not-Activated
                </span>
              @endif
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>

           


            @if ($surcharge->created_at)

              <div class="col-sm-5 col-xs-6 text-larger">
                <strong>
                  {{ trans('surcharge.labelCreatedAt') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $surcharge->created_at }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($surcharge->updated_at)

              <div class="col-sm-5 col-xs-6 text-larger">
                <strong>
                  {{ trans('surcharge.labelUpdatedAt') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $surcharge->updated_at }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

           

            @if ($surcharge->updated_ip_address)

              <div class="col-sm-5 col-xs-6 text-larger">
                <strong>
                  {{ trans('surcharge.labelIpUpdate') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $surcharge->updated_ip_address }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

          </div>

        </div>
      </div>
    </div>
  </div>

  @include('modals.modal-delete')

@endsection

@section('footer_scripts')

  @include('scripts.delete-modal-script')

@endsection
