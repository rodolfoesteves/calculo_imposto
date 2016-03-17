<?php

class Salario{

	//-- Valores fixos
	private $tetoINSS = 5189.82;
	private $salario_minimo = 880;
	//--
	private $salario_bruto;
	private $salario_liquido;
	private $alicotaINSS;
	private $descontoINSS;
	private $alicotaIRRF;
	private $deducaoIRRF;
	private $descontoIRRF;

	function __construct($salario) { 
		if ($salario >= $this->salario_minimo){
			$this->salario_bruto = $salario;
		}
	}

	function calcularINSS(){
		if ($this->salario_bruto >= $this->salario_minimo && $this->salario_bruto <= 1556.94){
			$this->alicotaINSS = 0.08;
		}
		elseif ($this->salario_bruto > 1556.94 && $this->salario_bruto <= 2594.92){
			$this->alicotaINSS = 0.09;
		}
		elseif ($this->salario_bruto > 2594.92){
			$this->alicotaINSS = 0.11;
		}
		if ($this->salario_bruto < $this->tetoINSS){
			$this->descontoINSS = $this->salario_bruto * $this->alicotaINSS;
		}
		else{
			$this->descontoINSS = $this->tetoINSS * $this->alicotaINSS;
		}
		$this->salario_liquido = $this->salario_bruto - $this->descontoINSS;
	}

	function calcularIRRF(){
		if ($this->salario_liquido > 1903.98 && $this->salario_liquido <= 2826.65){
			$this->alicotaIRRF = 0.075;
			$this->deducaoIRRF = 142.8;
		}
		elseif ($this->salario_liquido > 2826.65 && $this->salario_liquido <= 3751.05){
			$this->alicotaIRRF = 0.15;
			$this->deducaoIRRF = 354.8;
		}
		elseif ($this->salario_liquido > 3751.05 && $this->salario_liquido <= 4664.68){
			$this->alicotaIRRF = 0.225;
			$this->deducaoIRRF = 636.13;
		}
		elseif ($this->salario_liquido > 4664.68){
			$this->alicotaIRRF = 0.275;
			$this->deducaoIRRF = 869.36;
		}
		$this->descontoIRRF = ($this->salario_liquido * $this->alicotaIRRF) - $this->deducaoIRRF;
		$this->salario_liquido = $this->salario_liquido - $this->descontoIRRF;
	}

	function get_salario_bruto(){
		return $this->salario_bruto;
	}

	function get_salario_liquido(){
		return $this->salario_liquido;
	}

	function get_descontoINSS(){
		return $this->descontoINSS;
	}

	function get_alicotaINSS(){
		return $this->alicotaINSS;
	}

	function get_alicotaIRRF(){
		return $this->alicotaIRRF;
	}

	function get_descontoIRRF(){
		return $this->descontoIRRF;
	}

}

?>
