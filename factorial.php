<?php
class factorial {
	private $result = 1;
	private $number;

	function __controller($number)
	{
		$this->number = $number;
		for ($i=2; $i<$this->number; $i++) { 
			# code...
			$this->result*=$i;
		}
		echo "__controller() executed. ";
	}

	function factorial()
	{
		$this->number = $number;
		for ($i=2; $i < $number; $i++) { 
			# code...
			$this->result*=$i;
		}
		echo "factorial() executed. ";
	}

	public function showResult(){
		echo "Factorial of {$this->number} is {$this->result}";
	}
}