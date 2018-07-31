<?php

trait StringTuning {
protected $requiresTuning;

public function getRequiresTuning(): bool {
return($this->requiresTuning);
}

public function setRequiresTuning(bool $newRequiresTuning): void {
$this->requiresTuning = $newRequiresTuning;
}

public function tuned(): void {
if($this->requiresTuning === false) {
echo "Ahhh Bellissimo!" . PHP_EOL;
} else {
echo "Il tuo strumento è un incubo terribile!" . PHP_EOL;
}
}
}
