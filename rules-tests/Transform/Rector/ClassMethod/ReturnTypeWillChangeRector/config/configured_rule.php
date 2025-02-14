<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Transform\Rector\ClassMethod\ReturnTypeWillChangeRector;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(ReturnTypeWillChangeRector::class);
};
