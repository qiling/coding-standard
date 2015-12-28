<?php

namespace Symotion\CodingStandard\Tests\Sniffs\Commenting\MethodCommentReturnTag;

use PHPUnit_Framework_TestCase;
use Symotion\CodingStandard\Tests\CodeSnifferRunner;


/**
 * @covers SymotionCodingStandard\Sniffs\Commenting\MethodCommentReturnTagSniff
 */
final class MethodCommentReturnTagSniffTest extends PHPUnit_Framework_TestCase
{

	public function testDetection()
	{
		$codeSnifferRunner = new CodeSnifferRunner('SymotionCodingStandard.Commenting.MethodCommentReturnTag');

		$this->assertSame(1, $codeSnifferRunner->getErrorCountInFile(__DIR__ . '/wrong.php'));
		$this->assertSame(1, $codeSnifferRunner->getErrorCountInFile(__DIR__ . '/wrong2.php'));
		$this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__ . '/correct.php'));
		$this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__ . '/correct2.php'));
		$this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__ . '/correct3.php'));
		$this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__ . '/correct4.php'));
		$this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__ . '/correct5.php'));
		$this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__ . '/correct6.php'));
	}

}
