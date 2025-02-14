<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Privatization\Rector\MethodCall\ReplaceStringWithClassConstantRector;
use Rector\Privatization\ValueObject\ReplaceStringWithClassConstant;
use Rector\Tests\Privatization\Rector\MethodCall\ReplaceStringWithClassConstantRector\Source\Order;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(ReplaceStringWithClassConstantRector::class)
        ->configure([
            new ReplaceStringWithClassConstant(
                'Rector\Tests\Privatization\Rector\MethodCall\ReplaceStringWithClassConstantRector\FixtureCaseInsensitive\ReplaceWithConstant',
                'call',
                0,
                Order::class,
                true
            ),
        ]);
};
