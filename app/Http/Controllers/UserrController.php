<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userss = User::all();
    //dd($users);
        $perms=Permission::all();

        return view('users',compact('userss','perms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $requestObj)
    {
        $requestData=$requestObj->all();


        $requestObj->validate([
                'name' => 'required|min:3' ,
                'email' => 'required |email |unique:users',
                'username' => 'required',
                'phone' => 'required',
                // 'permission_id' => 'required',

            ],[
                'name.required' => 'please enter your name',
                'name.min' => 'this field must be greater than 3 letters',
                'email.unique'=>"this email already existed",
            ]);


       $user= User::create([
            'name' =>$requestObj->name,
            'email' =>$requestObj->email,
            'username' =>$requestObj->username,
            'phone'=>$requestObj->phone,
            'password'=> Hash::make($requestObj->password),
            // 'confirmation_password'=>$requestObj->confirmation_password,
            // 'permission_id'=>$requestObj->permission_id,
            //'user_id'=> $requestObj->post_creator
        ]);
       // dd($requestData);

      // return view('users.store');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= User::find($id);
      //  dd($data);
     // $perms=Permission::all();
        return view('users.edituser',["userinfo"=>$data,]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userid)
    {
       // dd($request);
        $request->validate([
            'name' => 'required|min:3' ,
            'email' => 'required |email',
            'username' => 'required',
            'phone' => 'required',
            // 'permission_id' => 'required',

        ],[
            'name.required' => 'please enter your name',
            'name.min' => 'this field must be greater than 3 letters',
            'email.unique'=>"this email already existed",
        ]);
//dd($request);
      //  $user = User::find($userid);
    //    $userid->update($request->all());
    //   dd ($userid);
    //    return redirect()->route('users.store')->with(["updatemessage"=>"category has been updated sucessfuly"]);

        $user = User::find($userid);
        // $input = $request->all();
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->name=$request->name;
        $user->username=$request->username;
        $user->password=Hash::make($request->password);

        $user->update();
        return redirect('users')->with('flash_message', 'Contact Updated!');


}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function destroy($userid)
    {
      //  dd($userid);
       User::destroy($userid);

         return redirect('users')->with("comment has been deleted sucessfuly");
    }
}
