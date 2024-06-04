<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use LaravelReady\LicenseServer\Events\LicenseChecked;

class LicenseCheckedListener
{
    public function __construct()
    {
        //
    }

    public function handle(LicenseChecked $event)
    {
        Log::info('license check event listener result', [
            $event->license,
            $event->data,
        ]);
    }
}
