<?php

declare(strict_types=1);

namespace BaseCodeOy\LivewireCalendar\Http\Livewire\Concerns;

use Carbon\Carbon;

trait ManagesConfiguration
{
    public int $weekStartsAt = Carbon::MONDAY;

    public int $weekEndsAt = Carbon::SUNDAY;

    public string $formatEventTime = 'g:i A';

    public string $formatTimeLabel = 'gA';
}
