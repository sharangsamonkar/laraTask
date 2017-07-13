<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use League\Csv\Reader;

use App\emailInfo;
use App\financeInfo;
use App\genderInfo;
use App\personalInfo;

class csvController extends Controller
{
    public function index() {
      return view('uploadFile');
    }

    public function upload(Request $request) {
      $csv_path = $request->file('file')->store('csv');
      $reader = Reader::createFromPath('/home/aj-sharangsa/laraTask/storage/app/'.$csv_path);
      $results = $reader->fetch();
      $first = true;  //to ignore the first record
      foreach($results as $row) {
        if($first) {
          $first = false;
          continue;
        }
        //processing
        $month = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $mi = explode('/',$row[4]);
        $ei = emailInfo::create(['id' => $row[0],'first' => $row[1],'last' => $row[2],'email' => $row[6]]);
        $pi = personalInfo::create(['id' => $row[0],'age' => $row[3][0].'0s','dob' => $month[$mi[0] - 1],'gender' => $row[5]]);
        $fi = financeInfo::create(['id' => $row[0],'state' => $row[7].'0s','phone' => $row[8],'dollar' => $row[9]]);
        $gi = genderInfo::create(['id' => $row[0],'first' => $row[1].'0s','last' => $row[2],'gender' => $row[5]]);
        $ei->save();
        $pi->save();
        $fi->save();
        $gi->save();
      }
    }
}
