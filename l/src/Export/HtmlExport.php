<?php

namespace App\Export;

use App\Document;
use App\Export\Base\DocumentExport;

class HtmlExport implements DocumentExport {


	/**
	 * @var Document
	 */
	private Document $document;

	private string $html;

	/**
	 * @param Document $document
	 */
	public function __construct( Document $document ) {
		$this->document = $document;
	}

	public function export() {
		echo $this->html;
	}

	public function make() {
		$this->html = "<h1>" . $this->document->getTitle() . "</h1>";
		$this->html .= "<div class='content'>" . $this->document->getContent() . "</div>";
	}
}