<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\DowngradePhp74\Rector\Array_\DowngradeArraySpreadRector;
use Rector\DowngradePhp74\Rector\ArrowFunction\ArrowFunctionToAnonymousFunctionRector;
use Rector\DowngradePhp74\Rector\ClassMethod\DowngradeContravariantArgumentTypeRector;
use Rector\DowngradePhp74\Rector\ClassMethod\DowngradeCovariantReturnTypeRector;
use Rector\DowngradePhp74\Rector\Coalesce\DowngradeNullCoalescingOperatorRector;
use Rector\DowngradePhp74\Rector\FuncCall\DowngradeArrayMergeCallWithoutArgumentsRector;
use Rector\DowngradePhp74\Rector\FuncCall\DowngradeStripTagsCallWithArrayRector;
use Rector\DowngradePhp74\Rector\Identical\DowngradeFreadFwriteFalsyToNegationRector;
use Rector\DowngradePhp74\Rector\Interface_\DowngradePreviouslyImplementedInterfaceRector;
use Rector\DowngradePhp74\Rector\LNumber\DowngradeNumericLiteralSeparatorRector;
use Rector\DowngradePhp74\Rector\MethodCall\DowngradeReflectionGetTypeRector;
use Rector\DowngradePhp74\Rector\Property\DowngradeTypedPropertyRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->phpVersion(PhpVersion::PHP_73);

    $services = $rectorConfig->services();
    $services->set(DowngradeTypedPropertyRector::class);
    $services->set(ArrowFunctionToAnonymousFunctionRector::class);
    $services->set(DowngradeCovariantReturnTypeRector::class);
    $services->set(DowngradeContravariantArgumentTypeRector::class);
    $services->set(DowngradeNullCoalescingOperatorRector::class);
    $services->set(DowngradeNumericLiteralSeparatorRector::class);
    $services->set(DowngradeStripTagsCallWithArrayRector::class);
    $services->set(DowngradeArraySpreadRector::class);
    $services->set(DowngradeArrayMergeCallWithoutArgumentsRector::class);
    $services->set(DowngradeFreadFwriteFalsyToNegationRector::class);
    $services->set(DowngradePreviouslyImplementedInterfaceRector::class);
    $services->set(DowngradeReflectionGetTypeRector::class);
};
