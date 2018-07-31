<?php

class Trumpet extends Instrument {
	protected $technique;

	public function __construct(string $newTone, string $newTechnique) {
		parent::__construct($newTone);
		$this->setTechnique($newTechnique);
	}

	public function getTechnique(): string {
		return($this->technique);
	}

	public function setTechnique(string $newTechnique): void {
		$this->technique = $newTechnique;
	}
}