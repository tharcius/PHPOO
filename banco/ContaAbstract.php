<?php
/**
 * Created by PhpStorm.
 * User: Tharcius
 * Date: 19/11/2015
 * Time: 16:52
 */

abstract class ContaAbstract{
    use ProcessoTrait;
    protected $saldo;


    public final function depositar($valor){
        $this->iniciaProcesso();
        $this->saldo += $this->calculoDeposito($valor);
        $this->finalizaProcesso();
        return true;
    }

    public function sacar($valor){
        $this->iniciaProcesso();
        if($this->saldo >= $valor) {
            $this->saldo -= $valor;
            $this->finalizaProcesso();
            return true;
        }
        $this->finalizaProcesso();
        return false;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function calculoDeposito($valor);
}