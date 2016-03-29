<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class metodosDeCalculo extends Eloquent {
	public static function cuotaMensualNivelado($capital, $cuotas, $tasa){
		$I = $tasa / 12 / 100 ;
		$I2 = $I + 1 ;
		$I2 = pow($I2,-$cuotas);
		$cuotaNivelada = ($I * $capital) / (1 - $I2) ;
		return $cuotaNivelada;
	}
}