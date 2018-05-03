<?php

namespace App\Http\Controllers;
use Input;
use App\Models\Item;
use DB;
use Auth;
use App\Models\Region;
use App\Models\Country;
use App\Models\City;
use App\Models\Port;
use App\Models\Rates;
use App\Models\Freight;
use App\Models\Ratesurcharge;
use App\Models\Origincharges;
use App\Exports\InvoicesExport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Traits\CaptureIpTrait;

class MaatwebsiteDemoController extends Controller
{
	
	public function importExport()
	{
		return view('importExport');
	}
	public function downloadExcel($type)
	{
	
		return Excel::download(new InvoicesExport, 'invoices.csv');
	}

	public function importExcel(Request $request)
	{
		
//create directly an object instance of the IOFactory class, and load the xlsx file
$fxls =$request->file('import_file')->getRealPath();
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fxls);
$worksheet = $spreadsheet->getActiveSheet();
// Get the highest row and column numbers referenced in the worksheet
$highestRow = $worksheet->getHighestRow(); // e.g. 10
$highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
$headings = $worksheet->rangeToArray('AX3:'.$highestColumn.''.$highestRow,
                                            NULL,
                                            TRUE,
                                            FALSE);
											
											foreach ($headings as $heading)
    {

print implode("", $heading); 
								

}


//read excel data and store it into an array
$xls_data = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
$dataArray = $spreadsheet->getActiveSheet()->rangeToArray(
        'C3:E5',     // The worksheet range that we want to retrieve
        NULL,        // Value that should be returned for empty cells
        TRUE,        // Should formulas be calculated (the equivalent of getCalculatedValue() for each cell)
        TRUE,        // Should values be formatted (the equivalent of getFormattedValue() for each cell)
        TRUE         // Should the array be indexed by cell row and cell column
    );
/* $xls_data contains this array:
[1=>['A'=>'Domain', 'B'=>'Category', 'C'=>'Nr. Pages'], 2=>['A'=>'CoursesWeb.net', 'B'=>'Web Development', 'C'=>4000], 3=>['A'=>'MarPlo.net', 'B'=>'Courses & Games', 'C'=>15000]]
*/



//now it is created a html table with the excel file data
$html_tb ='<table border="1"><tr><th>'. implode('</th><th>', $xls_data[1]) .'</th></tr><tr><th>'. implode('</th><th>', $xls_data[2]) .'</th></tr>';
$nr = count($xls_data); //number of rows
$currentUser= Auth::user()->name;
$currentId= Auth::user()->id;
 $ipAddress = new CaptureIpTrait();
 

for($i=3; $i<=$nr; $i++){
	if(!empty($xls_data[$i]['A'])){
		 $string = str_replace(' ', '', $xls_data[$i]['A']);
		$Orginports = Port::where('port', 'like','%'.trim(strtoupper($string)).'%')->first();
		
		if(!empty($Orginports)){
			$OrginPortID=$Orginports->id;
		}else{
			$OrginPortID="0";
		}
	
		
	}else{
		
$OrginPortID="0";
	}
	
	if(!empty($xls_data[$i]['C'])){
		 $string2 = str_replace(' ', '', $xls_data[$i]['C']);
		$Destinationports = Port::where('port', 'like','%'.trim(strtoupper($string2)).'%')->first();
		
		if(!empty($Destinationports)){
			$DestinationPortID=$Destinationports->id;
		}else{
			$DestinationPortID="0";
		}
	
		
	}else{
		
$DestinationPortID="0";
	}
	
  $html_tb .='<tr><td>'. implode('</td><td>', $xls_data[$i]) .'</td></tr>';

   
 $rates = Rates::create([
	'OrginPort'					=>$OrginPortID,
	'DestinationPort'			=>$DestinationPortID,
	'OrginPortName'				=>$xls_data[$i]['A'],
	'DestinationPortName'		=>$xls_data[$i]['C'],
	'EquipmentType'				=>$xls_data[$i]['E'],
	'ServiceOrigin'				=>$xls_data[$i]['F'],
	'ServiceDestination'		=>$xls_data[$i]['G'],
	'CommodityId'				=>'0',
	'CommodityName'				=>$xls_data[$i]['H'],
	
	'Effective'					=>$xls_data[$i]['I'],
	'Expiry'					=>$xls_data[$i]['J'],
	'SurgchareExpiry'			=>$xls_data[$i]['J'],
	'EntryType'					=>"Excel Upload",
	
	
	'Route'						=>$xls_data[$i]['CZ'],
	'Remarks'					=>$xls_data[$i]['DA'],
	'Days'						=>$xls_data[$i]['CY'],
	
	'updated_ip_address'		=>$ipAddress->getClientIp(),
	'userId'					=>$currentId,
	'createdBy'					=>$currentUser,
	'updatedBy'					=>$currentUser,
	'status'					=>"0",
]);
$rates->save();

 $RateMasterID=$rates->id;

	$freights = Freight::create([
 'masterid'=> $RateMasterID,
 'BAS'=>$xls_data[$i]['K'],
'BASCurrency'=>$xls_data[$i]['L'],
'ERS'=>$xls_data[$i]['M'],
'ERSCurrency'=>$xls_data[$i]['N'],
'FRO'=>$xls_data[$i]['O'],
'FROCurrency'=>$xls_data[$i]['P'],
'LSS'=>$xls_data[$i]['Q'],
'LSSCurrency'=>$xls_data[$i]['R'],
'PSS'=>$xls_data[$i]['S'],
'PSSCurrency'=>$xls_data[$i]['T'],
'SBF'=>$xls_data[$i]['U'],
'SBFCurrency'=>$xls_data[$i]['V'],
'SOC'=>$xls_data[$i]['W'],
'SOCCurrency'=>$xls_data[$i]['X'],
'WSC'=>$xls_data[$i]['Y'],
'WSCCurrency'=>$xls_data[$i]['Z'],

     ]);
$freights->save();

   $originchargess = Origincharges::create([
   'masterid'=> $RateMasterID,
'DPS'=>$xls_data[$i]['AA'],
'DPSCurrency'=>$xls_data[$i]['AB'],
'EDI'=>$xls_data[$i]['AC'],
'EDICurrency'=>$xls_data[$i]['AD'],
'EXP'=>$xls_data[$i]['AE'],
'EXPCurrency'=>$xls_data[$i]['AF'],
'IHE'=>$xls_data[$i]['AG'],
'IHECurrency'=>$xls_data[$i]['AH'],
'GTE'=>$xls_data[$i]['AI'],
'GTECurrency'=>$xls_data[$i]['AJ'],
'RHE'=>$xls_data[$i]['AK'],
'RHECurrency'=>$xls_data[$i]['AL'],
'OPA'=>$xls_data[$i]['AM'],
'OPACurrency'=>$xls_data[$i]['AN'],
'CFO'=>$xls_data[$i]['AO'],
'CFOCurrency'=>$xls_data[$i]['AP'],
'ODF'=>$xls_data[$i]['AQ'],
'ODFCurrency'=>$xls_data[$i]['AR'],
'OHC'=>$xls_data[$i]['AS'],
'OHCCurrency'=>$xls_data[$i]['AT'],  
       ]);
$originchargess->save();

 $ratesurcharge = Ratesurcharge::create([
'masterid'=>$RateMasterID,
'ULI'=>$xls_data[$i]['AU'],
'ULICurrency'=>$xls_data[$i]['AV'],
'CCI'=>$xls_data[$i]['AW'],
'CCICurrency'=>$xls_data[$i]['AX'],
'CSI'=>$xls_data[$i]['AY'],
'CSICurrency'=>$xls_data[$i]['AZ'],
'DSI'=>$xls_data[$i]['BA'],
'DSICurrency'=>$xls_data[$i]['BB'],
'EMI'=>$xls_data[$i]['BC'],
'EMICurrency'=>$xls_data[$i]['BD'],
'FTI'=>$xls_data[$i]['BE'],
'FTICurrency'=>$xls_data[$i]['BF'],
'GTI'=>$xls_data[$i]['BG'],
'GTICurrency'=>$xls_data[$i]['BH'],
'IFS'=>$xls_data[$i]['BI'],
'IFSCurrency'=>$xls_data[$i]['BJ'],
'IMP'=>$xls_data[$i]['BK'],
'IMPCurrency'=>$xls_data[$i]['BL'],
'PHI'=>$xls_data[$i]['BM'],
'PHICurrency'=>$xls_data[$i]['BN'],
'PAI'=>$xls_data[$i]['BO'],
'PAICurrency'=>$xls_data[$i]['BP'],
'PSI'=>$xls_data[$i]['BQ'],
'PSICurrency'=>$xls_data[$i]['BR'],
'DPA'=>$xls_data[$i]['BS'],
'DPACurrency'=>$xls_data[$i]['BT'],
'CFD'=>$xls_data[$i]['BU'],
'CFDCurrency'=>$xls_data[$i]['BV'],
'DCG'=>$xls_data[$i]['BW'],
'DCGCurrency'=>$xls_data[$i]['BX'],
'FDH'=>$xls_data[$i]['BY'],
'FDHCurrency'=>$xls_data[$i]['BZ'],
'DDF'=>$xls_data[$i]['CA'],
'DDFCurrency'=>$xls_data[$i]['CB'],
'DHC'=>$xls_data[$i]['CC'],
'DHCCurrency'=>$xls_data[$i]['CD'],
'AGS'=>$xls_data[$i]['CE'],
'AGSCurrency'=>$xls_data[$i]['CF'],
'BSC'=>$xls_data[$i]['CG'],
'BSCCurrency'=>$xls_data[$i]['CH'],
'CAF'=>$xls_data[$i]['CI'],
'CAFCurrency'=>$xls_data[$i]['CJ'],
'CDR'=>$xls_data[$i]['CK'],
'CDRCurrency'=>$xls_data[$i]['CL'],
'DDC'=>$xls_data[$i]['CM'],
'DDCCurrency'=>$xls_data[$i]['CN'],
'IMS'=>$xls_data[$i]['CO'],
'IMSCurrency'=>$xls_data[$i]['CP'],
'PAN'=>$xls_data[$i]['CQ'],
'PANCurrency'=>$xls_data[$i]['CR'],
'SUZ'=>$xls_data[$i]['CS'],
'SUZCurrency'=>$xls_data[$i]['CT'],
'IHI'=>$xls_data[$i]['CU'],
'IHICurrency'=>$xls_data[$i]['CV'],
'PAE'=>$xls_data[$i]['CW'],
'PAECurrency'=>$xls_data[$i]['CX'],
  ]);
$ratesurcharge->save();

}
$html_tb .='</table>';

echo implode('<br>', $dataArray[$i]);

 echo $html_tb; 


	}
	
}