<?php

declare(strict_types=1);

namespace BaseCodeOy\LivewireCalendar\Data;

use BaseCodeOy\LivewireCalendar\Contracts\WeekInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Traits\Macroable;

final class Week implements WeekInterface
{
    use Macroable;

    /**
     * @param Collection<int, Day> $days
     */
    public function __construct(
        public Collection $days,
    ) {
        //
    }
}
