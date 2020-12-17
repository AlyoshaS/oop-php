<?php

/**
 * Regras de negócio:
 * atributos:
 * publico numConta
 * protegido tipo
 * privado dono
 * privado saldo
 * privado status
 * 
 * construtores:
 * Quando uma conta for criada, o status será definido como falso
 * saldo definido como 0
 * 
 * métodos:
 * tipo da conta: poupança(cp) ou conta corrente(cc)
 * abrir conta muda status pra true
 * se abrir uma cc ganha 50 reais
 * se abrir uma cp ganha 150 reais
 * fecharConta() -> não pode ter débito(pagar) e não pode ter dinheiro(sacar)
 * 
 * abrirConta()
 * fecharConta()
 * depositar() -> status tem que ser true(ela precisa ser uma conta aberta)
 * sacar() -> status tem que ser true e o saldo maior que 0 e/ou igual ou menor ao saldo
 * pagarMensal() -> será retirado direto do saldo. cc paga R$12 e cp R$20
 * 
 * getNumConta() {}
 * setNumConta() {}
 * getTipo() {}
 * setTipo() {}
 * getDono() {}
 * setDono() {}
 * getSaldo() {}
 * setSaldo() {}
 * getStatus() {}
 * setStatus()  {}
 */

?>