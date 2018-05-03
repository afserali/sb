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
         
<a href="/rates/entry" class="btn btn-primary" >Add New Rate</a>
</div>
<div class="col-sm-3">
         
<a href="/rates/bulk" class="btn btn-primary" >Bulk Rate Upload</a>
</div>

</div>
</div>
</div>

	
<div class="container">

<div class="panel panel-primary">

 <div class="panel-heading">ShippingBazaar Bulk Rate Upload</div>

  <div class="panel-body"> 

  <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">
		<a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Sample Excel xls</button></a>
		<a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Sample xlsx</button></a>

 
		<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download Sample CSV</button></a>
        
            </div>

   </div>  
		<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
			<input type="file" name="import_file" />
			<button class="btn btn-primary">Import File</button>
		</form>
	 </div>

</div>

</div>
	<!--Banner end-->

 @include('modals.modal-delete')

@endsection

@section('footer_scripts')

    @include('scripts.delete-modal-script')
    @include('scripts.save-modal-script')
    {{--
        @include('scripts.tooltips')
    --}}
@endsection