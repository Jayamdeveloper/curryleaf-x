<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Userdata;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::select("select * from users");
        return view("users.alluser", ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.adduser");
    }
    public function deleteuser($id)
    {

        $user = DB::table('users')->where('id', $id)->delete();
        if ($user) {
            return redirect()->back()->with('success', 'User Data Has been Deleted');
        } else {
            return redirect()->back()->with('error', 'Failed to delete the user data');
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function editsaveuser(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'id' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'dob' => 'required',

        ]);
        DB::update("UPDATE users SET fname='" . $data['fname'] . "',lname='" . $data['lname'] . "',phone='" . $data['phone'] . "',email='" . $data['email'] . "',dob='" . $data['dob'] . "'  WHERE id='" . $data['id'] . "'");

        return redirect()->route('users.index')->with('success', 'Successfully updated!');

    }
    public function storeuser(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:users',
            // 'password' => 'required|min:8',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',

        ]);

        if ($validator->fails()) {


            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Userdata::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => "",
            'phone' => $request->input('phone'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),

        ]);
        if ($user) {
            // Successful registration

            return redirect()->route('users.index')->with('success', 'User registration successful!');
        } else {
            // Unsuccessful registration

            return redirect()->route('users.index')->with('error', 'Registration failed. Please try again.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edituser($id)
    {

        $dataa = DB::selectOne("SELECT * FROM users where id=$id");

        return view('users.edit_page', ['user' => $dataa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
