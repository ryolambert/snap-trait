<?php

class Instrument {
	protected $tone;

	public function __construct(string $tone) {
		$this->setTone($newTone);
	}

	public function getTone(): string {
		return($this->tone);
	}

	public function setTone(string $newTone): void {
		$this->tone = $newTone;
	}
}




