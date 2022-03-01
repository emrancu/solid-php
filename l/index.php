<?php

require __DIR__.'/vendor/autoload.php';

use App\Document;
use App\Export\HtmlExport;

$document =  new  Document(
	"Single Responsibility Principle(SRP)",
	"A class should only have one reason to change, which means it should only have one responsibility.",
);


$exportHTMl = new HtmlExport($document);
$exportHTMl->make();
$exportHTMl->export();