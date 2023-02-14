<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class sendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        // uno de los incremos de para empezar a desarrollar desarrollar en los rpocesos de los aprencis de los mediso el o cuaels som aprendic
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // para ejecutar el procesos envio de correo en cola para determinar un Jobs
        sleep(5);
        echo "Job despache";
        Log::info("message");
    }
}
