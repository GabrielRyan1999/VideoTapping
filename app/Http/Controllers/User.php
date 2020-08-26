<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Auth;
use Image;


class User extends Controller
{
    //
    public function index()
    {
        if (!Session::get('/login')) {
            return redirect('/login')->with('alert', 'Login dulu');
        } else {
            return view('/home');
        }
    }
    public function login()
    {
        return redirect('/login');
    }

    public function loginAdmin(){
        return view('admin.loginAdmin');
    }

    public function loginAdminPost(Request $request) {
       
        $nomorinduk = $request->nomorinduk;
        $password = $request->password;
        $name = $request->name;
        $status = $request->status;
        $avatar = $request->avatar;
         
        $admin="admin";
          $dataadmin = ModelUser::where('nomorinduk', $admin)->first();
        if ($dataadmin) { //apakah Nomor Induk admin tersebut ada atau tidak
            if ($password===$admin) {
                Session::put('id', $dataadmin->id);
                Session::put('name', $dataadmin->name);
                
                Session::put('status', $dataadmin->status);
                Session::put('nomorinduk', $dataadmin->nomorinduk);
                Session::put('avatar', $dataadmin->avatar);
                Session::put('login', TRUE);
                return redirect('/defaultadmin');
            } else {
                return redirect()->back()->with('alert', 'Password Salah !');
            }
        } else {
            return redirect()->back()->with('alert', 'Nomor Induk Salah !');
        }
    }
    
    public function loginPost(Request $request)
    {

        $nomorinduk = $request->nomorinduk;
        $password = $request->password;
        $name = $request->name;
        $status = $request->status;
        $avatar = $request->avatar;

        $data = ModelUser::where('nomorinduk', $nomorinduk)->first();
          if ($data) { //apakah Nomor Induk tersebut ada atau tidak
            if (Hash::check($password, $data->password)) {
                Session::put('id', $data->id);
                Session::put('name', $data->name);
                
                Session::put('status', $data->status);
                Session::put('nomorinduk', $data->nomorinduk);
                Session::put('avatar', $data->avatar);
                Session::put('login', TRUE);
                return redirect('/home');
            } else {
                return redirect()->back()->with('alert', 'Password Salah !');
            }
        } else {
            return redirect()->back()->with('alert', 'Nomor Induk Salah !');
        }
    
        
    
    }

    public function logout()
    {
        Session::flush();
        return redirect('/')->with('alert', 'Kamu sudah logout');
    }

    public function Register(Request $request)
    {
        return view('templates.register');
   }

   public function RegisterGuru(Request $request)
   {
       return view('templates.registerguru');
  }

    public function RegisterPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'nomorinduk' => 'required|min:5|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->nomorinduk = $request->nomorinduk;
        $data->status = $request->status;
        $data->password = bcrypt($request->password);
        $data->save();
        return view('templates.login')->with('alert-success', 'Kamu berhasil Register');
    }


    

    public function edit($id)
    {
        $avatar = ModelUser::findOrFail($id);
        return view('templates.foto')->with(compact('avatar', $avatar));
    }



    public function uploads_pic($id)
    {
        $avatar = ModelUser::findOrFail($id);
        return view('templates.foto')->with(compact('avatar', $avatar));

        //$avatar = DB::table('users')->where('id', '=', $id)->first();
        // $avatar = ModelUser::get();
        //$avatar = ModelUser::where('avatar',$data)->get();
        // return view('templates.foto')->with(compact('avatar', $avatar));
    }

    public function update(Request $request, $id)
    {
        $usrs = ModelUser::findOrFail($id);
        if ($request->hasFile('avatar')) {
            $this->validate($request, [
                'avatar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $avatar = $request->file('avatar');
            $filename = time() . "_" . $avatar->getClientOriginalName();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars' . $filename));
            $avatar->move(public_path('/uploads/avatars'), $filename);
            $usrs->avatar = $filename;

            $usrs->save();
            Session::put('avatar', $usrs->avatar);
            // ModelUser::create(['avatar' => $filename]);
            //Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars' . $filename));
            //$filename = time() . '.' . $avatar->getClientOriginalExtension();
            //$user = Auth::User();
            // $user->avatar = $filename;
            // $user->save();
        }

        //return view('templates.profile',array('user'=>Auth::user()));
        return redirect()->back();
    }
    public function showData()
    {
        
      $user=ModelUser::select('id','name','nomorinduk','status','password')->get();
        return view('templates.edit')->with(compact('user', $user));
    }
    
     public function destroy($id)
    {
        ModelUser::where('id',$id)->delete();
        return redirect()->back();
    }

}