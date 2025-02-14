<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Foreach_\SimplifyForeachToArrayFilterRector;
use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersionFeature;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(SimplifyForeachToArrayFilterRector::class);

    $rectorConfig->phpVersion(PhpVersionFeature::ARROW_FUNCTION - 1);
};
