<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use mysqli;

class DbCleaner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $connect = new mysqli(env('DB_CONNECTION', 'mysql'));
        $sql = "DELETE * FROM users WHERE  isActive = 0";
        $connect->query($sql);
        $connect->close();
//        $terms = ['isActive' => 0, 'created_at' => ];
//        DB::table('users')
//            ->where('isActive', '=', '0')->delete();
////        created_at < DATE_SUB(NOW(), INTERVAL 7 DAY)
    }
}
