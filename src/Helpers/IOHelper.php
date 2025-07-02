<?php

namespace Gnu\Scaffy\Core\Helpers;

use RecursiveDirectoryIterator;

class IOHelper
{

	/*
	* Return the root directory of the project. This is, wherever the composer.json exists.
	*/
	static function findRootDirectory(string $suffix = ""): string
	{
		$dir = __DIR__;

		while (!file_exists($dir . "/composer.json") || str_contains(dirname($dir), "vendor")) {
			$parent = dirname($dir);

			if ($parent === $dir) {
				throw new \RuntimeException("Could not find project root (composer.json not found)");
			}

			$dir = $parent;
		}

		return $dir . $suffix;
	}
}
