<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use mysqli;
/*
 * Контроллер для удаления аккаунтов не получивших подтверждение мэйла втечении суток.
 * На сервере крутится демон который дергает этот класс каждую минуту. В будущем можем произвести более гибкую настройку крона
 */

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
        $connect = mysqli_connect(
                env('DB_HOST'),
                env('DB_USERNAME'),
                env('DB_PASSWORD'),
                env('DB_DATABASE')
                    );
        mysqli_query($connect ,"DELETE FROM users WHERE created_at < DATE_SUB(NOW(), INTERVAL 1 DAY) and isActive = 0");
        $connect->close();
    }
}
