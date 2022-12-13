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
    
                DB::table('vacations')->where('id', $user->id)->update(['vacation_pointer' => carbon::now()]);
    
                $start = Carbon::createMidnightDate($user->vacation_start);
                $end = Carbon::createMidnightDate($user->vacation_end);
    
                if($user->vacation_end == $user->vacation_pointer){
                    
                    $days_diff= $start->diffInDays($end);
    
                    $days_available = $user->days_available - $days_diff;
    
                    DB::table('vacations')->where('id', $user->id)->update([
    
                        'days_available' => $days_available,
                        'vacation_status' => 'ended'
                    ]);
                }
                
                if($user->vacation_status == 'ended'){
    
                    if($end->diffInDays($user->vacation_pointer) == 2){
    
                        DB::table('vacations')->where('id', $user->id)->update([
    
                            'days_available' => $user->days_available + 2
                        ]);
                    }
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
