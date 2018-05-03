@extends('layouts.app')

@section('template_title')
  Showing Commodities
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
@include('commodity/menu')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            Showing All Commodities
 <div class="btn-group pull-right btn-group-xs">

                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v fa-fw" aria-hidden="true"></i>
                                    <span class="sr-only">
                                        Show All Commodities
                                    </span>
                                </button>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/commodity/create">
                                            <i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
                                            Create New User
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/commodity/deleted">
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
                                        <th>Section</th>
                                        <th class="hidden-xs">Chapter</th>
                                        <th class="hidden-xs">Sub Chapter</th>
                                        <th class="hidden-xs">Commodities</th>
                                        <th>Commodity Code</th>
                                        <th class="hidden-sm hidden-xs hidden-md">Created</th>
                                        <th class="hidden-sm hidden-xs hidden-md">Updated</th>
                                         <th class="hidden-sm hidden-xs hidden-md">Edit</th>
                                          <th class="hidden-sm hidden-xs hidden-md">Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    @foreach($commodities as $commodity)
                                        <tr>
                                            <td>{{$commodity->id}}</td>
                                          
                                            <td>{{$sections->find($commodity->sid)->sectionName}}</td>
                                            <td class="hidden-xs">{{$chapters->find($commodity->cid)->chapter}} / {{$chapters->find($commodity->cid)->code}}</td>
                                            <td class="hidden-xs">{{$subchapters->find($commodity->chapterid)->subchapter}}</td>
                                            <td class="hidden-xs">{{$commodity->commodity}} / {{$commodity->commoditycode}}</td>
                                           
                                            <td class="hidden-sm hidden-xs hidden-md">{{$chapters->find($commodity->cid)->code}}{{$commodity->commoditycode}}</td>
                                            <td class="hidden-sm hidden-xs hidden-md">{{$commodity->created_at}}</td>
                                            <td>
                                               {{$commodity->updated_at}}
                                            </td>
                                            <td>
                                            <a href="editcommodity" class="btn btn-info" >Edit</a>
                                            </td>
                                            <td>
                                              <a href="deletecommodity" class="btn btn-danger" >Delete</a>
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