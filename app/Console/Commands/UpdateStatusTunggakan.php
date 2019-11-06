<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\transaksi;
use DB;

class UpdateStatusTunggakan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'status:tunggakan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scheduler Update Status Tunggakan';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        // $schedule->call(function(){
        //   $transaksi = DB::table('transaksis')->select('transaksis.*')->get();
        //
        //   foreach ($transaksi as $key =>  $trans) {
        //     // code...
        //     DB::table('transaksis')->update(['status_tunggakan' => $trans-> 'Macet']);
        //   }
        // });
        // $day = 30;
        // $date = Carbon::create(2019, 1, 28, 0, 0, 0);
        // $date = addMonthsNoOverflow(1);
        $transaksis = transaksi::all();
        foreach ($transaksis as $key => $value) {
          // code...
            $value->tanggal_kredit = Carbon::now()->addMonths(1);
            $value->save();
        }
        DB::table('transaksis')->where('tanggal_kredit', '<', $value->tanggal_kredit)->update(['status_tunggakan'=>'Macet']);
    }
}
