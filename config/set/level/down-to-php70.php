<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\DowngradeLevelSetList;
use Rector\Set\ValueObject\DowngradeSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(DowngradeLevelSetList::DOWN_TO_PHP_71);
    $rectorConfig->import(DowngradeSetList::PHP_71);
};
