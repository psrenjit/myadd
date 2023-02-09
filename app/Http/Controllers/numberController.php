<?php

namespace App\Http\Controllers;

use App\Models\myadresstables;
use Illuminate\Http\Request;

class numberController extends Controller
{
    public function getData(Request $request){
        $mNumber=$request->input('num');
        $address=myadresstables::whereIn('tnumber', [$mNumber])->get();
        //return $address;
        return view('numberview',['rhs'=>$address]);
    }
    public function getData1(Request $request){
        $mNumber=$request->input('ad');
        $address=myadresstables::whereIn('tnumber', [$mNumber])->get();
        //return $address;
        return view('numberview',['rhs'=>$address]);
    }
    public function aadhaarShow(){
        return view('aadhaar');
    }
    public function aadhaarResult(Request $request){
        $mNumber=$request->input('num');
        $address=myadresstables::whereIn('aadhaar',[$mNumber])->get();
        //return $address;
        return view('aadhaars',['rhs'=>$address]);
    }
    public function fnnameShow(){
        return view('flname');
    }
    public function flnameResult(Request $request){
        $fname=$request->input('fname');
        $sname=$request->input('sname');
        //print_r($fname);
        $address=myadresstables::where('subscribername','ILIKE',"%{$fname}%")
        ->Where('fatherhusname','ILIKE','%'.$sname.'%')->get();
        //return $address;
        return view('fnames',['rhs'=>$address]);
    }
    public function addressShow(){
        return view('address');
    }
    public function addressResult(Request $request){
        $address=$request->input('fname');
        $address1=myadresstables::where('ad1','LIKE',"%{$address}%")
        ->orWhere('ad2','ILIKE','%'.$address.'%')
        ->orWhere('ad3','ILIKE','%'.$address.'%')
        ->orWhere('ad4','ILIKE','%'.$address.'%')
        ->get();
        //return $address1;
        return view('add',['rhs'=>$address1]);
    }




    public function havesShow(){
        return view('haves');
    }
    public function havesResult(Request $request){
        $fname=$request->input('fname');
        $ser=explode(",", $fname);

        $ar='';
        foreach( $ser as $ser1)
        {
                $ar.="'".$ser1."',";
        }

        $address=myadresstables::whereIn('tnumber',$ser)->get();
        //return $address;
        return view('havesresult',['rhs'=>$address]);
    }


}
