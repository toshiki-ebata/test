<?php
require_once (dirname(__FILE__). '/../Calculation.php');
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testPlus($a, $b, $expected)
    {
        $result=Calculation::Plus($a,$b);
        self::assertSame($expected, $result);
    }

    /**
     * @dataProvider additionProvider2
     */
    public function testMinus($a,$b,$expected){
        $result=Calculation::Minus($a,$b);
        self::assertSame($expected, $result);
    }

    public function additionProvider()
    {
        return [
            'テスト1' =>[1,2,4],
            'テスト2'=>[2,2,4]
        ];
    }
    public function additionProvider2()
    {
        return [
            'テスト3' =>[2,1,1],
            'テスト4'=>[4,2,5]
        ];
    }
}