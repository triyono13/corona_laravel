<?php

namespace App\Console;

use App\Corona;
use App\Indonesia;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //$schedule->command('inspire')->hourly();
        $schedule->call(function(){
            $response = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/'));
            foreach ($response as $sku) {
                $corona_data = [
                    'kasus_positif' => $sku->attributes->Kasus_Posi,
                    'sembuh' => $sku->attributes->Kasus_Semb,
                    'meninggal' => $sku->attributes->Kasus_Meni
                ];
                $id = $sku->attributes->FID;
                $model = Corona::where('FID', $id)->update($corona_data);
                echo "berhasil di Update";
            }
        })->hourly();

        $schedule->call(function(){
            $response = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'));
            foreach ($response as $sku) {
                $corona_data = [
                    'positif' => filter_var($sku->positif, FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND),
                    'sembuh' => $sku->sembuh,
                    'meninggal' => $sku->meninggal
                ];
                $model = Indonesia::where('id', 1)->update($corona_data);
                echo "berhasil di Update";
            }
        })->hourly();
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
