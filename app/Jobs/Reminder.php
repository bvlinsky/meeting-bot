<?php

namespace App\Jobs;

use App\Services\Contracts\MeetingServiceContract;

class Reminder extends Job
{
    public function handle(MeetingServiceContract $meetingService): void
    {
        $meetingService->remind();
    }
}
