<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Assign\SplitListAssignToSeparateLineRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(SplitListAssignToSeparateLineRector::class);
};
