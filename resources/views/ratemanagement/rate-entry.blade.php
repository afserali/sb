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
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            Rate Entry Individual - For Default Liner
	</div>
    </div>
                      

                    <div class="panel-body">
			<form id="data-rate-entry-individual-get-result-form">
				<div class="col-xs-12 col-md-6 left-form-content rate-filter-left">
					<p class="form-header">Origin</p>
					<div class="form-group col-xs-12 col-md-6">
						<!-- 						<label for="originCountry">Country :</label>  -->
						<select class="form-control" id="originRegion"
							name="originCountry">
							<option value="">Select Region</option>
                             @foreach($regions as $region)
                             <option value=" {{$region->id}}">{{$region->name}}</option>
							 @endforeach

						</select>
					</div>

					<div class="form-group col-xs-12 col-md-6">
						<!-- 						<label for="originCountry">Country :</label>  -->
						<select class="form-control" id="originCountry"
							name="originCountry">
							<option value="">Select Country</option>

						</select>
					</div>
					<div class="form-group col-xs-12 col-md-6">
						<!-- 						<label for="originCity">City :</label>  -->
						<select class="form-control" id="originCity" name="orgCityId">
							<option value="">Select City</option>
						</select>
					</div>
					<div class="form-group col-xs-12 col-md-6">
						<!-- 						<label for="originPort">Port :</label>  -->
						<select class="form-control" id="originPort"
							name="orgPortId">
							<option value="">Select Port</option>
						</select>
					</div>
					
				</div>
				<div class="col-xs-12 col-md-6 right-form-content rate-filter-right">
					<p class="form-header">Destination</p>
                    <div class="form-group col-xs-12 col-md-6">
						<!-- 						<label for="originCountry">Country :</label>  -->
						<select class="form-control" id="destinationRegion"
							name="destinationRegion">
							<option value="">Select Region</option>
                             @foreach($regions as $region)
                             <option value=" {{$region->id}}">{{$region->name}}</option>
							 @endforeach
						</select>
					</div>

					<div class="form-group col-xs-12 col-md-6">
						<!-- 						<label for="destinationCountry">Country :</label>  -->
						<select class="form-control" id="destinationCountry"
							name="destinationCountry">
							<option value="">Select Country</option>
						</select>
					</div>
					<div class="form-group col-xs-12 col-md-6">
						<!-- 						<label for="destinationCity">City :</label>  -->
						<select class="form-control" id="destinationCity"
							name="destinationCity">
							<option value="">Select City</option>
						</select>
					</div>
					<div class="form-group col-xs-12 col-md-6">
						<!-- 						<label for="destinationPort">Port :</label>  -->
						<select class="form-control" id="destinationPort"
							name="destPortId">
							<option value="">Select Port</option>
						</select>
					</div>
					


				</div>



				<input type="hidden" name="reqType" value="individual" id="reqType">
				<input type="hidden" name="reqFor" value="rate" id="reqFor">
				<div class="rate-filter-btn-content">
					<button type="button" class="btn btn-default"
						id="data-rate-entry-individual-get-record-btn">GET Record</button>
					<button type="button"
						class="btn btn-default data-rate-entry-individual-clear">Clear</button>

				</div>

			</form>
		</div>
	</div>
	<!--Area Add End-->

	<!--Banner start-->
<div class="container">
	<div class="row ">
 <div class="panel panel-default">
  <div class="panel-heading">
Rate Entry Form
</div>
 <div class="panel-body">

		<form id="data-rate-entry-individual-form">
			<input type="hidden" name="serviceMappingId" id="serviceMappingId" />

			

			<div class="col-xs-12 col-md-12 rate-content">
				<div class="rate-entry col-xs-12 col-md-12">
					<div class="rate-entry-form-content">
					
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="minimum"
								id="minimum" placeholder="Equipment Type">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="normal" id="normal"
								placeholder="Normal">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="plus45" id="plus45"
								placeholder="+45">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="plus50" id="plus50"
								placeholder="+50">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="plus100"
								id="plus100" placeholder="+100">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="plus101"
								id="plus101" placeholder="+101">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="plus150"
								id="plus150" placeholder="+150">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="plus250"
								id="plus250" placeholder="+250">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="plus300"
								id="plus300" placeholder="+300">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="plus301"
								id="plus301" placeholder="+301">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="plus500"
								id="plus500" placeholder="+500">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="plus501"
								id="plus501" placeholder="+501">
						</div>
						<div class="form-group col-xs-2 col-md-1">
							<input type="text" class="form-control" name="plus1000"
								id="plus1000" placeholder="+1000">
						</div>
						<div class="form-group col-xs-12 col-md-3">
							<input type="text" class="form-control" name="remark" id="remark"
								placeholder="Remark">
						</div>
						<div class="form-group col-xs-2 col-md-2">
							<select class="form-control" id="currency" name="currencyId">
								<option value="">Select Currency</option>
							</select>
						</div>

						<div class="rate-action-btn-content col-md-12">
							<input type="hidden" id="rateId" name="rateId" /> <input
								type="hidden" id="effDate" name="effDate" />
							<button type="button" class="btn btn-default"
								id="data-rate-entry-individual-submit-btn">Submit</button>
							<button type="button"
								class="btn btn-default data-single-rate-form-clear">Clear</button>
						</div>
						<!-- 				</form> -->
					</div>
				</div>

			</div>

		</form>
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