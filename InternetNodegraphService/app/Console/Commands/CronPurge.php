<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CronPurge extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'purge:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Purge records with destruction timestamps';

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
        $q1='DELETE FROM paths WHERE destroy_on < \''.now().'\';';
        $q2='DELETE FROM queries WHERE destroy_on < \''.now().'\';';
        $q3='DELETE FROM servers WHERE destroy_on < \''.now().'\';';
        $affectedPaths = DB::delete($q1);
        $affectedQueries = DB::delete($q2);
        $affectedServers = DB::delete($q3);
        $this->info('Purge cron complete (' . now()  . '): '
                    .$affectedPaths.' path(s) deleted; '
                    .$affectedQueries.' querie(s) affected; '
                    .$affectedServers.' server(s) affected.');
    }
}
