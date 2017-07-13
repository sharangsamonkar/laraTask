<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_data;
use App\user_profile;

use Illuminate\Support\Facades\DB;

class dataController extends Controller
{
    //
    public function index() {
      $userd = DB::table('user_datas')
                    ->join('user_profiles','user_datas.id','=','user_profiles.id')
                    ->select('user_datas.email','user_profiles.*')
                    ->get();
      $count = count($userd);
      return view('user_profiles',compact('userd','count'));
    }

    public function create() {
      return view('insert_data');
    }

    public function store(Request $request) {
      //model objects
      // $ud = new user_data;
      // $udp = new user_profile;

      // $ud->id = $request->input('id');
      // $ud->email = $request->input('email');
      // $ud->password = $request->input('password');
      // $udp->id = $request->input('id');
      // $udp->name = $request->input('name');
      // $udp->dob = $request->input('dob');
      //
      // $dofb = strtotime($udp->dob);
      // $dofb = date('Y-m-d',$dofb);
      // $udp->age = (date_diff(date_create($dofb),date_create('today')))->format("%Y");
      //
      // $udp->country = $request -> input('country');

      $ud = user_data::create(['id' => $request->input('id'),'email' => $request->input('email'),'password' => $request->input('password')]);
      $udp = user_profile::create(['id' => $request->input('id'),'name' => $request->input('name'),'dob' => $request->input('dob'),'country' => $request->input('country')]);

      $ud->save();
      $udp->save();

      echo 'Record inserted successfully!';
    }

    public function show($id) {
      // $ud = user_data::find($id);
      // $udp = user_profile::find($id);
      // $count = user_data::where('id',$id)->count();

      $userd = DB::table('user_datas')
                  ->join('user_profiles','user_datas.id','=','user_profiles.id')
                  ->select('user_datas.email','user_profiles.*')
                  ->where('user_datas.id','=',$id)
                  ->get();
      $count = count($userd);
      return view('user_profiles',compact('userd','count'));
    }

    public function edit($id) {

    }

    public function update(Request $request,$id) {
      $udp = user_profile::find($id);
      $udp->dob = $request->dob;
      $udp->save();
    }

    public function destroy($id) {

    }

    public function order() {
      $userd = DB::table('user_datas')
                  ->join('user_profiles','user_datas.id','=','user_profiles.id')
                  ->select('user_datas.email','user_profiles.*')
                  ->orderBy('user_profiles.dob')
                  ->get();
      $count = count($userd);

      return view('user_profiles',compact('userd','count'));
    }

    public function agesort(Request $request) {
      $op = $request->age_grp;
      $limits = explode(',',$op);
      $userd = DB::table('user_datas')
                  ->join('user_profiles','user_datas.id','=','user_profiles.id')
                  ->select('user_datas.email','user_profiles.*')
                  ->where(DB::raw('datediff(curdate(),user_profiles.dob)'),'>', $limits[0] * 365)
                  ->where(DB::raw('datediff(curdate(),user_profiles.dob)'),'<', $limits[1] * 365)
                  ->get();
      $count = count($userd);
      return view('user_profiles',compact('userd','count'));
    }

    public function search(Request $request) {
      $name = $request->input('query');
      $userd = DB::table('user_datas')
                  ->join('user_profiles','user_datas.id','=','user_profiles.id')
                  ->select('user_datas.email','user_profiles.*')
                  ->where('user_profiles.name','LIKE','%'.$name.'%')
                  ->get();
      $count = count($userd);
      return view('user_profiles',compact('userd','count'));
    }
}
