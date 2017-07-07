<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_data;
use App\user_profile;

class dataController extends Controller
{
    //
    public function index() {
      return view('index');
    }

    public function create() {
      return view('insert_data');
    }

    public function store(Request $request) {
      //model objects
      $ud = new user_data;
      $udp = new user_profile;

      $ud->id = $request->input('id');
      $ud->email = $request->input('email');
      $ud->password = $request->input('password');
      $udp->id = $request->input('id');
      $udp->name = $request->input('name');
      $udp->age = $request->input('age');
      $udp->dob = $request->input('dob');
      $udp->country = $request -> input('country');

      $ud->save();
      $udp->save();

      echo 'Record inserted successfully!';
    }

    public function show($id) {
      $ud = user_data::find($id);
      $udp = user_profile::find($id);
      $count = user_data::where('id',$id)->count();

      return view('user_profiles',compact('ud','udp','count'));
    }

    public function edit($id) {

    }

    public function update(Request $request,$id) {

    }

    public function destroy($id) {

    }

    public function showAll() {
      $ud = user_data::all();
      $udp = user_profile::all();
      $count = user_data::all()->count();

      return view('user_profiles',compact('ud','udp','count'));
    }
}
