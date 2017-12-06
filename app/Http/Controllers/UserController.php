<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Session;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::paginate(10);
        return view('admin.users.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|max:255',
           'email' => 'required|email|unique:users'
        ]);

        if (!empty($request->password)) {
           $password = trim($request->password);
        } else {
           $length = 10;
           $keyspace = '1234567890abcdefghjikmnpqrstuvwxyvABCDEFGHJKLMNPQRSTUVWXYZ';
           $str = '';
           $max = mb_strlen($keyspace, '8bit') -1;
           for ($i=0; $i < $length; $i++) {
              $str = $keyspace[random_int(0, $max)];
           }
           $password = $str;
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($password);
        $user->save();

        return redirect()->route('users.show', $user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("admin.users.show")->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::findOrFail($id);
      return view("admin.users.edit")->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'name' => 'required|max:255',
          'email' => 'required|email|unique:users,email,'.$id
      ]);

      $user = User::findOrFail($id);
      $user->name = $request->name;
      $user->email = $request->email;
      if ($request->password_options == 'auto') {
         $length = 15;
         $keyspace = '1234567890abcdefghjikmnpqrstuvwxyvABCDEFGHJKLMNPQRSTUVWXYZ';
         $str = '';
         $max = mb_strlen($keyspace, '8bit') -1;
         for ($i=0; $i < $length; $i++) {
            $str = $keyspace[random_int(0, $max)];
         }
         $user->password = Hash::make($str);
      } else if ($request->password_options == 'manual') {
         $user->password = Hash::make($request->password);
      }
      $user->save();
      
      if ($user->save()) {
         return redirect()->route('users.show', $id);
      } else {
         Session::flash('error', 'There was a problem saving the updated user');
         return redirect()->route('users.show', $id);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
