<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Fixer\Commenting\RemoveEndOfFunctionCommentFixer;

use Iterator;
use Symplify\CodingStandard\Fixer\Commenting\RemoveEndOfFunctionCommentFixer;
use Symplify\EasyCodingStandardTester\Testing\AbstractCheckerTestCase;

final class RemoveEndOfFunctionCommentFixerTest extends AbstractCheckerTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFiles([$file]);
    }

    public function provideDataForTest(): Iterator
    {
        yield [__DIR__ . '/Fixture/wrong.php.inc'];
        yield [__DIR__ . '/Fixture/wrong2.php.inc'];
    }

    protected function getCheckerClass(): string
    {
        return RemoveEndOfFunctionCommentFixer::class;
    }
}
