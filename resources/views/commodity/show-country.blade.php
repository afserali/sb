@extends('layouts.app')

@section('template_title')
  Showing All Countries
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
         
<a href="master" class="btn btn-primary " >All Ports</a>
</div>
          <div class="col-sm-3">
         
<a href="showregion" class="btn btn-primary" >View Region</a>
</div>
<div class="col-sm-3">
         
<a href="showcountry" class="btn btn-primary" >View Countries</a>
</div>
<div class="col-sm-3">
         
<a href="showcity" class="btn btn-primary " >View Cities</a>
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

                            Showing All Countries
 <div class="btn-group pull-right btn-group-xs">

                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v fa-fw" aria-hidden="true"></i>
                                    <span class="sr-only">
                                        Show All Countries
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
                            <table class="table table-striped table-condensed data-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Region</th>
                                        <th class="hidden-xs">Country Name  </th>
                                        <th class="hidden-xs">Country Code</th>
                                       
                                        <th class="hidden-sm hidden-xs hidden-md">Created</th>
                                        <th class="hidden-sm hidden-xs hidden-md">Updated</th>
                                         <th class="hidden-sm hidden-xs hidden-md">Edit</th>
                                          <th class="hidden-sm hidden-xs hidden-md">Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    @foreach($codes as $code)
                                        <tr>
                                            <td>{{$code->id}}</td>
                                          
                                            <td>{{$regions->find($code->rid)->name}}</td>
                                            <td class="hidden-xs">{{$code->country}}  </td>
                                            <td class="hidden-xs">{{$code->code}}</td>
                                          
                                            <td class="hidden-sm hidden-xs hidden-md">{{$code->created_at}}</td>
                                            <td>
                                               {{$code->updated_at}}
                                            </td>
                                            <td>
                                            <a href="editcountry" class="btn btn-info" >Edit</a>
                                            </td>
                                            <td>
                                              <a href="deletecountry" class="btn btn-danger" >Delete</a>
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

 @include('modals.modal-delete')

@endsection

@section('footer_scripts')

    @include('scripts.delete-modal-script')
    @include('scripts.save-modal-script')
    {{--
        @include('scripts.tooltips')
    --}}
@endsection