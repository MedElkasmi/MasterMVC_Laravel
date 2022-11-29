<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        $schedule->call(function () {

            $data = DB::table('vacations')->get();

            foreach ($data as $user) {

                $update_pointed = DB::table('vacations')
                ->where('id', $user->id)->update(['vacation_pointer' => carbon::now()]);

                if($user->vacation_end == $user->vacation_pointer){
                    
                    $vacation_start = Carbon::createMidnightDate($user->vacation_start);
                    $vacation_end = Carbon::createMidnightDate($user->vacation_end);

                    $days_diff= $vacation_start->diffInDays($vacation_end);

                    $days_available = $user->days_available - $days_diff;

                    $update_status = DB::table('vacations')->where('id', $user->id)
                    ->update(
                        ['days_available' => $days_available,'vacation_status' => 'ended']
                    );
                }      
            }

        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
