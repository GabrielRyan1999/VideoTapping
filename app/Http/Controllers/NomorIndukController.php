<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\NomorIndukModel;
use App\ModelUser;

class NomorIndukController extends Controller
{
    //
    public function cekNIS(request $request){
        $nomorinduk = $request->NIS;

        $data = NomorIndukModel::where('NIS', $nomorinduk)->first();
        if($data){
            Session::put('NIS', $data->NIS);
            return redirect('/register');
        }else{
            return redirect()->back();
        }
    }

    public function cekNIP(request $request){
        $nomorinduk = $request->NIP;

        $data = NomorIndukModel::where('NIP', $nomorinduk)->first();
        if($data){
            Session::put('NIP', $data->NIP);
            return redirect('/registerguru');
        }else{
            return redirect()->back();
        }
    }
    
     public function update(Request $request, $id)
    {
      $passbaru=$request->pass;
      ModelUser::where('id', $id)->update(['password' => $passbaru]);
      
        return redirect()->back();
    }
}