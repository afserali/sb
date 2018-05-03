@extends('layouts.app')

@section('template_title')
  Showing All Ports with Country, City and Region
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

                            Showing All ports
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
                            <table id="master2" class="table table-striped table-bordered datatable2" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Region</th>
                                        <th class="hidden-xs">Country Name and code </th>
                                        <th class="hidden-xs">CITY</th>
                                        <th class="hidden-xs">PortName and code</th>
                                        <th>Locode</th>
                                        <th class="hidden-sm hidden-xs hidden-md">Created</th>

                                         <th class="hidden-sm hidden-xs hidden-md">Edit</th>
                                          <th class="hidden-sm hidden-xs hidden-md">Delete</th>

                                    </tr>
                                </thead>
                                <tbody>



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

	<script
		src="https://cdn.datatables.net/1.10.12/js/dataTables.material.min.js"></script>
	<script>
    $(document).ready(function(){
var csrf=window.Laravel;

      $('.datatable2').DataTable({
		  dom: 'lfrtip',
      fnCreatedRow: function (row, data, index) {
                  $('td', row).eq(0).html(index + 1);
              },
            processing: true,
            serverSide: true,
              "ajax": "{{ route('ajaxdata.getdata') }}",
			"columns": [
{data: 'id'},
{data: 'name'},
{data: 'country'},
{data: 'city'},
{  data: null,
                render: function ( data, type, row ) {
                    // Combine the first and last names into a single table field
                    return data.port+' - '+data.portcode;
                },
                editField: ['port', 'portcode']},

				{  data: null,
                render: function ( data, type, row ) {
                    // Combine the first and last names into a single table field
                    return data.code+''+data.portcode;
                },
                editField: ['code', 'portcode']},
				{data: 'created_at'},
				{data: null,
                render:function(data, type, full) {
    return '<a class="btn btn-info btn-sm" href=editport/' + data.id + '>' + 'Edit' + '</a>';
  },},
  {data: null,
                render:function(data, type, full) {
    return '<form method="POST" action="master/'+data.id+'" accept-charset=UTF-8 class="" data-toggle="tooltip" title="Delete">'
    +'<input name="_token" type="hidden" value="'+csrf.csrfToken+'">'
    +'<input name="_method" type="hidden" value="DELETE">'
    +'<button class="btn btn-danger btn-sm" type="button"'
    +'style="width: 100%;" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Section"'
    +'data-message="Are you sure you want to delete this Port ?"><i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>'
    +'<span class="hidden-xs hidden-sm">Delete</span><span class="hidden-xs hidden-sm hidden-md"> Section</span></button>'
      +'</form>';
  },}

],

columnDefs: [
{targets: 'no_sort', orderable: false}
],

        });
    });
  </script>
 @include('modals.modal-delete')

@endsection

@section('footer_scripts')

    @include('scripts.delete-modal-script')
    @include('scripts.save-modal-script')
    @include('scripts.datatables')
    {{--
        @include('scripts.tooltips')
    --}}
@endsection
