<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Input;

class ContractExtensionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('/contractExtension');
    }

    public function getContractExtension(){
        $unpaidBillDate = new Carbon();
        $contractExtension = (new Carbon())->addDays(14);

        $arrClient = DB::table('tblclient')
            ->join('tblcontract', 'tblcontract.intClientID', '=', 'tblclient.intClientID')
            ->select('tblclient.strClientName', 'tblcontract.dateEnd', 'tblclient.strPersonInCharge', 'tblcontract.intContractID')
            ->where('tblcontract.boolStatus', 1)
            ->where('tblcontract.dateEnd', '<=', $contractExtension)
            ->get();
        
        return response()->json($arrClient);
    }

    public function getContractInfo(Request $request){
        $contractID = Input::get('contractID');
        $now = new Carbon();

        $result = DB::table('tblcontract')
            ->join('tblcontractrate', 'tblcontractrate.intContractID', '=', 'tblcontract.intContractID')
            ->join('tbltypeofcontract', 'tbltypeofcontract.intTypeOfContractID', '=', 'tblcontract.intTypeOfContractID')
            ->select('tblcontractrate.deciRate', 'tbltypeofcontract.strTypeOfContractName', 'tblcontract.*')
            ->where('tblcontract.intContractID', $contractID)
            ->where('tblcontractrate.datetimeEffectivity', '<=', $now)
            ->orderBy('tblcontractrate.datetimeEffectivity', 'desc')
            ->first();

        return response()->json($result);
    }

    public function extendContract(Request $request){
        try{
            DB::beginTransaction();
            $deciNewRate = $request->deciNewRate;
            $arrDate = $request->arrDate;
            $extensionDate = (new Carbon($request->extensionDate))->toDateString();
            $contractID = $request->contractID;
            $now = new Carbon();
            $result = DB::table('tblcontractrate')
                ->select('deciRate')
                ->where('intContractID', $contractID)
                ->where('datetimeEffectivity', '<=', $now)
                ->orderBy('datetimeEffectivity', 'desc')
                ->first();
            $deciOldRate = $result->deciRate;

            // Process
                DB::table('tblcontract')
                    ->where('intContractID', $contractID)
                    ->update([
                        'dateEnd' => $extensionDate
                    ]);//extend date of contract


                if ($deciNewRate != $deciOldRate){
                    DB::table('tblcontractrate')->insert([
                        'intContractID' => $contractID,
                        'deciRate' => $deciNewRate,
                    ]);
                }

                foreach($arrDate as $value){
                    DB::table('tblclientbillingdate')->insert([
                        'intContractID' => $contractID,
                        'boolStatus' => 1,
                        'dateBill' => $value
                    ]);
                }
                
            // Process
            
            DB::commit();
        }catch(Exception $e){
            DB::rollback();
        }//try catch
    }
}
