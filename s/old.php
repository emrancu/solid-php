<?php


class DocumentOLD
{
	protected $title;
	protected $content;

	public function __construct(string $title, string $content)
	{
		$this->title = $title;
		$this->content= $content;
	}

	public function getTitle(): string
	{
		return $this->title;
	}

	public function getContent(): string
	{
		return $this->content;
	}

	public function exportHtml() {
		echo "DOCUMENT EXPORTED TO HTML".PHP_EOL;
		echo "Title: ".$this->getTitle().PHP_EOL;
		echo "Content: ".$this->getContent().PHP_EOL.PHP_EOL;
	}

	public function exportPdf() {
		echo "DOCUMENT EXPORTED TO PDF".PHP_EOL;
		echo "Title: ".$this->getTitle().PHP_EOL;
		echo "Content: ".$this->getContent().PHP_EOL.PHP_EOL;
	}
}