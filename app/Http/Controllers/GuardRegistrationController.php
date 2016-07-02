<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ArmedService;
use App\Model\Province;
use App\Model\City;
use App\Model\GovernmentExam;
use App\Model\Requirements;
use App\Model\BodyAttribute;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Carbon;
class GuardRegistrationController extends Controller
{
	
    public function personalDataBC(Request $request){
        $bodyAttributes = BodyAttribute::
                where('deleted_at', null)
                    ->where('boolFlag', 1)
                    ->get();
        
        $provinces = Province::
            where('deleted_at', null)
                ->where('boolFlag',1)
                ->get();
        
        $counter = BodyAttribute::count();
        //$request->session()->flush();
        if ($request->session()->has('personalDataSession')) {
            
            $firstName = $request->session()->get('firstName');
            $middleName = $request->session()->get('middleName');
            $lastName = $request->session()->get('lastName');
            $address = $request->session()->get('address');
            $dateOfbirth = $request->session()->get('dateOfbirth');
            $placeofbirth = $request->session()->get('placeofbirth');
            $contactCp = $request->session()->get('contactCp');
            $contactLandline = $request->session()->get('contactLandline');
            $civilStatus = $request->session()->get('civilStatus');
            $gender = $request->session()->get('gender');
            $bodyAttributeValue = $request->session()->get('bodyAttributeValue');
            $province = $request->session()->get('province');
            $city = $request->session()->get('city');
            
            
            $data = collect(['firstName' => $firstName,
                             'middleName' => $middleName,
                             'lastName' => $lastName,
                             'address' => $address,
                             'dateOfbirth' => $dateOfbirth,
                             'placeofbirth' => $placeofbirth,
                             'contactCp' => $contactCp,
                             'contactLandline' => $contactLandline,
                             'civilStatus' => $civilStatus,
                             'gender' => $gender,
                             'province' => $province,
                             'city' => $city]);
            
            return view ('/guardAdmin/personalData')
                ->with ('bodyAttributes', $bodyAttributes)
                ->with ('data', $data)
                ->with ('counter', $counter)
                ->with ('bodyAttributeValues', $bodyAttributeValue)
                ->with ('provinces', $provinces);
            
        }else{
            return view ('/guardAdmin/personalData')
                    ->with ('bodyAttributes', $bodyAttributes)
                    ->with ('counter', $counter)
                    ->with('provinces', $provinces);
        }
    }
    
    public function educationalBackgroundBC(Request $request){
        
        $schoolNamePrimary = $request->session()->get('schoolNamePrimary');
        $fromPrimary = $request->session()->get('fromPrimary');
        $toPrimary = $request->session()->get('toPrimary');
        $schoolNameSecondary = $request->session()->get('schoolNameSecondary');
        $fromSecondary = $request->session()->get('fromSecondary');
        $toSecondary = $request->session()->get('toSecondary');
        $schoolNameTertiary = $request->session()->get('schoolNameTertiary');
        $fromTertiary = $request->session()->get('fromTertiary');
        $toTertiary = $request->session()->get('toTertiary');

        $data = collect(['schoolNamePrimary' => $schoolNamePrimary,
                         'fromPrimary' => $fromPrimary,
                         'toPrimary' => $toPrimary,
                         'schoolNameSecondary' => $schoolNameSecondary,
                         'fromSecondary' => $fromSecondary,
                         'toSecondary' => $toSecondary,
                         'schoolNameTertiary' => $schoolNameTertiary,
                         'fromTertiary' => $fromTertiary,
                         'toTertiary' => $toTertiary]);
        
        
        return view ('/guardAdmin/educbackGround')
            ->with('data',$data);    
        
        
    }
    
    public function sgBackgroundBC(){
        $armedservices = ArmedService::
            where('deleted_at', null)
            ->where('boolFlag', 1)
            ->orderBy('strArmedServiceName', 'asc')
            ->get();
        
        $governmentExams = GovernmentExam::
            where('deleted_at', null)
            ->where('boolFlag', 1)
            ->orderBy('strGovernmentExam', 'asc')
            ->get();
        
        return view ('/guardAdmin/sgBackground')
            ->with ('armedservices', $armedservices)
            ->with ('governmentExams', $governmentExams);
    }
    
    public function requirementBC(){
        $requirements = Requirements::
            where('deleted_at', null)
            ->where('boolFlag', 1)
            ->where('intIdentifier','>=', 2)
            ->get();
        
        return view('/guardAdmin/requirement')
            ->with ('requirements', $requirements);
    }
    
    public function licenseBC(){
        return view('/guardAdmin/sgLicense');
    }
    
    public function accountBC(){
        return view('/guardAdmin/accountForm');
    }
    
    public function personalDataSession(Request $request){
        
        $array = array(); 
        
        $arrBodyAttributeID = $request->bodyAttributeID;
        $arrValue = $request->value;
        $arrBodyAttribute = $request->bodyAttribute;
        
        for ($intLoop = 0; $intLoop < count($arrBodyAttributeID); $intLoop ++){
            $value = new \stdClass();
            $value->intBodyAttributeID = $arrBodyAttributeID[$intLoop];
            $value->strValue = $arrValue[$intLoop];
            $value->strBodyAttribute = $arrBodyAttribute[$intLoop];
            
            array_push($array, $value);
        }   
        
        $request->session()->put('personalDataSession', 'active');
        $request->session()->put('firstName', $request->strFirstName);
        $request->session()->put('middleName', $request->strMiddleName);
        $request->session()->put('lastName', $request->strLastName);
        $request->session()->put('address', $request->strAddress);
        $request->session()->put('dateOfbirth', $request->dateBirth);
        $request->session()->put('placeofbirth', $request->placeofbirth);
        $request->session()->put('contactCp', $request->strMobileNumber);
        $request->session()->put('contactLandline', $request->strLandlineNumber);
        $request->session()->put('civilStatus', $request->strCivilStatus);
        $request->session()->put('gender', $request->strGender);
        $request->session()->put('bodyAttributeValue', $array);
        $request->session()->put('province', $request->province);
        $request->session()->put('city', $request->city);
        
        
    }
    
    public function educationalBackgroundSession(Request $request){
        $request->session()->put('educationalBackgroundSession', 'active');
        
        $request->session()->put('schoolNamePrimary', $request->schoolNamePrimary);
        $request->session()->put('fromPrimary', $request->fromPrimary);
        $request->session()->put('toPrimary', $request->toPrimary);
        $request->session()->put('schoolNameSecondary', $request->schoolNameSecondary);
        $request->session()->put('fromSecondary', $request->fromSecondary);
        $request->session()->put('toSecondary', $request->toSecondary);
        $request->session()->put('schoolNameTertiary', $request->schoolNameTertiary);
        $request->session()->put('fromTertiary', $request->fromTertiary);
        $request->session()->put('toTertiary', $request->toTertiary);
    }
    
}
