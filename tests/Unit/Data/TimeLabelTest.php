<?php

declare(strict_types=1);

namespace Tests\Unit\Data;

use BaseCodeOy\LivewireCalendar\Data\TimeLabel;
use Carbon\Carbon;
use ReflectionClass;

it('can convert to string', function (): void {
    $dateTime = Carbon::create(2023, 4, 22, 12, 0, 0);
    $timeLabel = new TimeLabel($dateTime, 'g:i A');

    expect($timeLabel->toString())->toBe('12:00 PM');
});

it('can be initialized with properties', function (): void {
    $dateTime = Carbon::create(2023, 4, 22, 12, 0, 0);
    $timeLabel = new TimeLabel($dateTime, 'g:i A');

    // Use reflection to access the private properties for testing
    $reflection = new ReflectionClass(TimeLabel::class);
    $dateTimeFormatProperty = $reflection->getProperty('dateTimeFormat');
    $dateTimeFormatProperty->setAccessible(true);
    $dateTimeProperty = $reflection->getProperty('dateTime');
    $dateTimeProperty->setAccessible(true);

    expect($dateTimeFormatProperty->getValue($timeLabel))->toBe('g:i A');
    expect($dateTimeProperty->getValue($timeLabel))->toBe($dateTime);
});
