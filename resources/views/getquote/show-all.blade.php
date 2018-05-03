@extends('layouts.app')

@section('template_title')
  Showing All Get a Quotes
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
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            Showing Get a Quotes
 <div class="btn-group pull-right btn-group-xs">

                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v fa-fw" aria-hidden="true"></i>
                                    <span class="sr-only">
                                        Show All ports
                                    </span>
                                </button>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/master/create">
                                            <i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
                                            Create New User
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/master/deleted">
                                            <i class="fa fa-fw fa-group" aria-hidden="true"></i>
                                            Show Deleted User
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
                                        <th>Orgin</th>
                                        <th class="hidden-xs">Destination</th>
                                        <th class="hidden-xs">Tonnage</th>
                                        <th class="hidden-xs">Commodity</th>
                                        <th>Equipment Type</th>
                                        <th>Contact name</th>
                                        <th>Conatact Mobile</th>
                                        <th>Conatact Email</th>
                                         <th>User Type</th>
                                        <th class="hidden-sm hidden-xs hidden-md">Submitted</th>
                                         <th class="hidden-sm hidden-xs hidden-md">Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $number = 1; ?>
                                    @foreach($getquotes as $getquote)
                                        <tr>
                                            <td>{{$number}}</td>
                                          
                                            <td>{{$getquote->orgin}}</td>
                                            <td class="hidden-xs">{{$getquote->destination}}</td>
                                            <td class="hidden-xs">{{$getquote->weight}}</td>
                                            <td class="hidden-xs">{{$getquote->type_of_commodity}}</td>
                                           
                                            <td class="hidden-sm hidden-xs hidden-md">{{$getquote->measurement_type}}</td>
                                             <td class="hidden-sm hidden-xs hidden-md">{{$getquote->contact_name}}</td>
                                             <td class="hidden-sm hidden-xs hidden-md">{{$getquote->contact_no}}</td>
                                              <td class="hidden-sm hidden-xs hidden-md">{{$getquote->email}}</td>
                                               <td class="hidden-sm hidden-xs hidden-md">@if ($getquote->user_type === 1)Regitered @else
    New User
@endif</td>
                                           
                                            
                                            
                                           
                                            <td class="hidden-sm hidden-xs hidden-md">{{$getquote->created_at}}</td>
                                           
                                            <td>
                                               {!! Form::open(array('url' => 'getquotes/' . $getquote->id, 'class' => '', 'data-toggle' => 'tooltip', 'title' => 'Delete')) !!}
                                                    {!! Form::hidden('_method', 'DELETE') !!}
                                                    {!! Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Delete</span><span class="hidden-xs hidden-sm hidden-md"> Quote</span>', array('class' => 'btn btn-danger btn-sm','type' => 'button', 'style' =>'width: 100%;' ,'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete Section', 'data-message' => 'Are you sure you want to delete this quote ?')) !!}
                                                {!! Form::close() !!}
                                            </td>
                                           
                                           
                                        </tr>
                                         <?php $number++; ?>
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