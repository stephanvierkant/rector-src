<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\DowngradePhp72\Rector\ClassMethod\DowngradeParameterTypeWideningRector;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(DowngradeParameterTypeWideningRector::class);
};
