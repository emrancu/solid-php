<?php
namespace App\Export;

use App\Export\Base\DocumentExport;
use App\Document;

class PdfExport implements  DocumentExport {


	/**
	 * @var Document
	 */
	private Document $document;

	private string $pdf;

	/**
	 * @param Document $document
	 */
	public function __construct(Document $document) {
		$this->document = $document;
	}

	public function export() {
		 echo $this->pdf ;
	}

	public function make() {
		$this->pdf =  "<h1>".$this->document->getTitle()."</h1>";
		$this->pdf .=  "<div class='content'>".$this->document->getContent()."</div>";
	}
}