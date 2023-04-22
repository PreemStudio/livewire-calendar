<?php

declare(strict_types=1);

namespace Tests\Unit\Data;

use Illuminate\Support\Collection;
use PreemStudio\LivewireCalendar\Data\Month;
use PreemStudio\LivewireCalendar\Data\Week;

it('can get name', function (): void {
    $week = new Week(new Collection());
    $month = new Month(4, new Collection([$week]));

    expect($month->name())->toBe('April');
});

it('can be initialized with properties', function (): void {
    $week = new Week(new Collection());
    $weeks = new Collection([$week]);
    $month = new Month(4, $weeks);

    expect($month->number)->toBe(4);
    expect($month->weeks)->toBe($weeks);
});