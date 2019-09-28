<?php declare(strict_types=1);

namespace Rector\Symfony\Tests\Rector\MethodCall\SimplifyWebTestCaseAssertionsRector;

use Iterator;
use Rector\Symfony\Rector\MethodCall\SimplifyWebTestCaseAssertionsRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class SimplifyWebTestCaseAssertionsRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideDataForTest(): Iterator
    {
        yield [__DIR__ . '/Fixture/fixture.php.inc'];
        yield [__DIR__ . '/Fixture/response_code_same.php.inc'];
    }

    protected function getRectorClass(): string
    {
        return SimplifyWebTestCaseAssertionsRector::class;
    }
}
