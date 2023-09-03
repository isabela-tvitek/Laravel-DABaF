<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void {
        $this->assertTrue(true);
    }

    public function testELista() {
        $lista = [1, 2, 3, 4, 5];
        $this->assertIsList($lista);
    }

    public function testIdadeIgual() {
        $anoNascimento = 2002;
        $anoAtual = 2023;
        $idade = $anoAtual - $anoNascimento;
        $this->assertGreaterThan(10, $idade);
    }

    public function testMedia(){
        $lista = [1, 2, 3, 4, 5];
        $soma = array_sum($lista);
        $quantidade = count($lista);
        $resultado = $soma / $quantidade;
        $this->assertEquals(3.0, $resultado);
    }

    public function testConcatenacaoDeStrings() {
        $string1 = "Olá ";
        $string2 = "Mundo!";
        $resultado = $string1 . $string2;
        $this->assertSame("Olá Mundo!", $resultado);
    }

    public function testTamanhoDaStringMaiorQue() {
        $string = "Esta é uma string interessante!";
        $tamanho = strlen($string);
        $this->assertGreaterThan(10, $tamanho);
    }

    public function testTamanhoString() {
        $string = "Hello";
        $tamanho = strlen($string);
        $this->assertEquals(5, $tamanho);
    }
}
