<?php

namespace Gnu\Scafy\Core\Ports;
/*
*
* Methods that return boolean values tell if the function completed successfully or not.
* A good idea would also be to throw an error, but let's leave it as a bool for now.
*
*/

interface FrameworkPort
{
	// NOTE: I don't know yet. Let's say it's an array for now.
	function getAllTables(string $schema): array;

	// NOTE: I don't know yet. Let's say it's an array for now.
	function getTableColumns(string $tableName, string $schema): array;
	function generateModel(string $tableName, string $schema): bool;
	function getModelName(string $tableName): string;
	function getFillableArray(array $columns): array;
	function generateModelContent(string $modelName, string $tableName, array $fillable, string $schema): string;
	function saveModelFile(string $modelName, string $content): bool;
}
