<?php
namespace App\Export\Base;

interface DocumentExport {
	public function export();
	public function make();
}