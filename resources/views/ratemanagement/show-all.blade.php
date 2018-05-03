@extends('layouts.app')

@section('template_title')
  Showing All Rates
@endsection

@section('template_linked_css')

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <style type="text/css" media="screen">
        .users-table {
            border: 0;
        }
        .users-table tr td:first-child {
            padding-left: 15px;
        }
        .users-table tr td:last-child {
            padding-right: 15px;
        }
        .users-table.table-responsive,
        .users-table.table-responsive table {
            margin-bottom: 0;
        }

    </style>
@endsection

@section('content')


<div class="container">
        <div class="row">
         <div class="col-sm-12" style="padding-bottom: 20px;">
         <div class="col-sm-3">
         
<a href="rates" class="btn btn-primary " >All Rates</a>
</div>
          <div class="col-sm-3">
         
<a href="rates/entry" class="btn btn-primary" >Add New Rate</a>
</div>
<div class="col-sm-3">
<a href="rates/bulk" class="btn btn-primary" >Bulk Rate Upload</a>
</div>

</div>
</div>
</div>
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            Showing All Rates
 <div class="btn-group pull-right btn-group-xs">

                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v fa-fw" aria-hidden="true"></i>
                                    <span class="sr-only">
                                        Show All Rates
                                    </span>
                                </button>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/rates/create">
                                            <i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
                                            Create New Rate
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/rates/deleted">
                                            <i class="fa fa-fw fa-group" aria-hidden="true"></i>
                                            Show Deleted Rate
                                        </a>
                                    </li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="table-responsive users-table">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Orgin Port</th>
                                        <th class="hidden-xs">Destination Port</th>
                                        <th class="hidden-xs">Equipment</th>
                                        <th class="hidden-xs">Commodity</th>
                                        <th>Effective Date</th>
                                        <th class="hidden-sm hidden-xs hidden-md">Expiry Date</th>
                                        <th class="hidden-sm hidden-xs hidden-md">BAS rate and Currency</th>
                                         
                                          <th class="hidden-sm hidden-xs hidden-md">Delete</th>
                                          <th class="hidden-sm hidden-xs hidden-md">Show</th>
                                          <th class="hidden-sm hidden-xs hidden-md">Edit</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($rates as $rate)
                                    <tr>
                                        <td>{{$rate->id}}</td>
                                        <td>{{$rate->OrginPortName}}</td>
                                        <td class="hidden-xs">{{$rate->DestinationPortName}}</td>
                                        <td class="hidden-xs">{{$rate->EquipmentType}}</td>
                                        <td class="hidden-xs">{{$rate->CommodityName}}</td>
                                        <td>{{$rate->Effective}}</td>
                                        <td class="hidden-sm hidden-xs hidden-md">{{$rate->Expiry}}</td>
                                        <td class="hidden-sm hidden-xs hidden-md">{{$freights->where('masterid','=',$rate->id)->first()->BAS}}</td>
                                         <td>
                                                {!! Form::open(array('url' => 'rates/' . $rate->id, 'class' => '', 'data-toggle' => 'tooltip', 'title' => 'Delete')) !!}
                                                    {!! Form::hidden('_method', 'DELETE') !!}
                                                    {!! Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Delete</span><span class="hidden-xs hidden-sm hidden-md"> Rate</span>', array('class' => 'btn btn-danger btn-sm','type' => 'button', 'style' =>'width: 100%;' ,'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete Rate', 'data-message' => 'Are you sure you want to delete this Rate ?')) !!}
                                                {!! Form::close() !!}
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-success btn-block" href="{{ URL::to('rates/' . $rate->id) }}" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Show</span><span class="hidden-xs hidden-sm hidden-md"> rate</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-info btn-block" href="{{ URL::to('rates/' . $rate->id . '/edit') }}" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Edit</span><span class="hidden-xs hidden-sm hidden-md"> Rate</span>
                                                </a>
                                            </td>
                                        
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
        <!-- Sidebar Menu end -->
        <script src="admin/js/portarea.js"></script>
 @include('modals.modal-delete')

@endsection

@section('footer_scripts')

    @include('scripts.delete-modal-script')
    @include('scripts.save-modal-script')
    {{--
        @include('scripts.tooltips')
    --}}
@endsection