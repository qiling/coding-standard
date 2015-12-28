<?php

/**
 * This file is part of Symotion
 * Copyright (c) 2012 Tomas Votruba (http://tomasvotruba.cz)
 */

namespace Symotion\CodingStandard\Composer;


final class ScriptHandler
{

	public static function addPhpCsToPreCommitHook()
	{
		$originFile = getcwd() . '/.git/hooks/pre-commit';
		$templateContent = file_get_contents(__DIR__ . '/templates/git/hooks/pre-commit-phpcs');
		if (file_exists($originFile)) {
			$originContent = file_get_contents($originFile);
			if (strpos($originContent, '# run phpcs') === FALSE) {
				$newContent = $originContent . PHP_EOL . PHP_EOL . $templateContent;
				file_put_contents($originFile, $newContent);
			}

		} else {
			file_put_contents($originFile, $templateContent);
		}
		chmod($originFile, 0755);
	}

}
