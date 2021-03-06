<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Guard;
use App\Model\BodyAttribute;
use App\Model\GovernmentExam;
use App\Http\Controllers\Controller;
use Validator;
use Input;
use DB;
use Carbon\Carbon;

class GuardViewController extends Controller
{
    
    public function index(){
    
        $guards = Guard::where('deleted_at', null)
            ->get();
        
        $bodyAttributes = BodyAttribute::where('deleted_at', null)
            ->where('boolFlag', 1)
            ->get();
        
        $governmentExams = GovernmentExam::where('deleted_at', null)
            ->where('boolFlag', 1)
            ->get();
            
        
        return view('adminList.guardView')
            ->with('guards', $guards)
            ->with('bodyAttributes', $bodyAttributes)
            ->with('governmentExams', $governmentExams);
    }
    
    public function getInformationGuard(){
        $guardID = Input::get('guardID');
        $now = Carbon::now();

        $guard = Guard::where('intGuardID', $guardID)
            ->first();

        $guard->guardClient = 'No Client';

        $guardStatus = DB::table('tblguardstatus')
            ->select('intStatusIdentifier')
            ->where('intGuardID', $guardID)
            ->where('dateEffectivity', '<', $now)
            ->orderBy('dateEffectivity', 'desc')
            ->first();

        if ($guardStatus->intStatusIdentifier == 2 || $guardStatus->intStatusIdentifier == 3 || $guardStatus->intStatusIdentifier == 4){
            $guardClient = DB::table('tblclientguard')
                ->join('tblcontract', 'tblcontract.intContractID', '=', 'tblclientguard.intContractID')
                ->join('tblclient', 'tblclient.intClientID', '=', 'tblcontract.intClientID')
                ->select('tblclient.strClientName')
                ->where('tblclientguard.intGuardID', $guard->intGuardID)
                ->where('tblclientguard.created_at', '<', $now)
                ->where(function ($query) {
                    $query->where('tblclientguard.boolStatus', 1)
                          ->orWhere('tblclientguard.boolStatus', 3);
                })
                ->orderBy('tblclientguard.created_at', 'desc')
                ->first();
            $guard->guardClient = $guardClient->strClientName;
        }
        
        $licenseNumber = DB::table('tblguardlicense')
            ->select('strLicenseNumber')
            ->where('intGuardID', $guardID)
            ->first();
        
        $address = DB::table('tblguard')
            ->join('tblguardaddress', 'tblguard.intGuardID', '=', 'tblguardaddress.intGuardID')
            ->join('tblprovince', 'tblguardaddress.intProvinceID', '=', 'tblprovince.intProvinceID')
            ->join('tblcity', 'tblguardaddress.intCityID', '=', 'tblcity.intCityID')
            ->select('tblguard.intGuardID', 'tblguardaddress.strAddress', 'tblprovince.strProvinceName', 'tblcity.strCityName')
            ->where('tblguard.intGuardID', '=', $guardID)
            ->first();
        
        $bodyAttributesGuard = DB::table('tblguard')
            ->join('tblguardbodyattribute', 'tblguard.intGuardID', '=', 'tblguardbodyattribute.intGuardID')
            ->join('tblbodyattribute', 'tblguardbodyattribute.intBodyAttributeID', '=', 'tblbodyattribute.intBodyAttributeID')
            ->join('tblmeasurement', 'tblbodyattribute.intMeasurementID', '=', 'tblmeasurement.intMeasurementID')
            ->select('tblmeasurement.strMeasurement', 'tblguardbodyattribute.strValue', 'tblguardbodyattribute.intBodyAttributeID', 'tblbodyattribute.strBodyAttributeName')
            ->where('tblguard.intGuardID', '=', $guardID)
            ->get();
        
        $bodyAttributes = DB::table('tblbodyattribute')
            ->select('intBodyAttributeID', 'strBodyAttributeName')
            ->where('boolFlag', '=', 1)
            ->get();
        
        $armedService = DB::table('tblguard')
            ->join('tblguardarmedservice', 'tblguard.intGuardID', '=', 'tblguardarmedservice.intGuardID')
            ->join('tblarmedservice', 'tblguardarmedservice.intArmedServiceID', '=', 'tblarmedservice.intArmedServiceID')
            ->join('tblrank', 'tblguardarmedservice.intRankID', '=', 'tblrank.intRankID')
            ->select('tblarmedservice.strArmedServiceName', 'tblrank.strRank')->where('tblguard.intGuardID', '=', $guardID)
            ->first();
        
        $governmentExamGuard = DB::table('tblguard')
            ->join('tblguardgovernmentexam', 'tblguard.intGuardID', '=', 'tblguardgovernmentexam.intGuardID')
            ->join('tblgovernmentexam', 'tblgovernmentexam.intGovernmentExamID', '=', 'tblguardgovernmentexam.intGovernmentExamID')
            ->select('tblguardgovernmentexam.strRating', 'tblgovernmentexam.strGovernmentExam', 'tblgovernmentexam.intGovernmentExamID')->where('tblguard.intGuardID', '=', $guardID)
            ->get();
        
        $governmentExam = DB::table('tblgovernmentexam')
            ->select('intGovernmentExamID', 'strGovernmentExam')
            ->where('boolFlag', '=', 1)
            ->get();
        
        $guard->licenseNumber = $licenseNumber;
        $guard->address = $address;
        $guard->bodyAttributesGuard = $bodyAttributesGuard;
        $guard->bodyAttributes = $bodyAttributes;
        $guard->armedService = $armedService;
        $guard->governmentExamGuard = $governmentExamGuard;
        $guard->governmentExam = $governmentExam;
        $guard->guardStatus = $guardStatus->intStatusIdentifier;
        
        
        return response()->json($guard);
    }
}