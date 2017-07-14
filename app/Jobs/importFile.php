<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use League\Csv\Reader;
use App\emailInfo;
use App\financeInfo;
use App\genderInfo;
use App\personalInfo;

class importFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $reader;
    /**
     * Create a new job instance.
     *
     * @return void
     */
     public function __construct(Reader $reader)
     {
         //
         $this->reader = $reader;
     }

    /**
     * Execute the job.
     *
     * @return void
     */
     public function handle()
     {
         //
         $results = $this->reader->fetch();
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
           $fi = financeInfo::create(['id' => $row[0],'state' => $row[7],'phone' => $row[8],'dollar' => $row[9]]);
           $gi = genderInfo::create(['id' => $row[0],'first' => $row[1],'last' => $row[2],'gender' => $row[5]]);
           $ei->save();
           $pi->save();
           $fi->save();
           $gi->save();
         }
     }
}
