<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\DowngradePhp71\Rector\Array_\SymmetricArrayDestructuringToListRector;
use Rector\DowngradePhp80\Rector\MethodCall\DowngradeNamedArgumentRector;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(SymmetricArrayDestructuringToListRector::class);
    $services->set(DowngradeNamedArgumentRector::class);
};
