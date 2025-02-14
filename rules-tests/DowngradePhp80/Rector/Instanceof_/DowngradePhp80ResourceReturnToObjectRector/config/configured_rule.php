<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\DowngradePhp80\Rector\Instanceof_\DowngradePhp80ResourceReturnToObjectRector;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(DowngradePhp80ResourceReturnToObjectRector::class);
};
