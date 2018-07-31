<?php

class Bowed extends Instrument {
	use StringTuning;
	protected $technique;

	public function __construct(string $tone, string $newTechnique) {
		parent::__construct($tone);
		$this->setTechnique($newTechnique);
	}

	public function getTechnique(): string {
		return($this->technique);
	}

	public function setTechnique(string $newTechnique): void {
		$this->technique = $newTechnique;
	}
}