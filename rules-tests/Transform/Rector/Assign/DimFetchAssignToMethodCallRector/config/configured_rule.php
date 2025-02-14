<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Tests\Transform\Rector\Assign\DimFetchAssignToMethodCallRector\Source\SomeRoute;
use Rector\Tests\Transform\Rector\Assign\DimFetchAssignToMethodCallRector\Source\SomeRouteList;
use Rector\Transform\Rector\Assign\DimFetchAssignToMethodCallRector;
use Rector\Transform\ValueObject\DimFetchAssignToMethodCall;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(DimFetchAssignToMethodCallRector::class)
        ->configure([new DimFetchAssignToMethodCall(SomeRouteList::class, SomeRoute::class, 'addRoute')]);
};
