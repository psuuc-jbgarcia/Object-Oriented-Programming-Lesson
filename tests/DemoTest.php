<?php
use PHPUnit\Framework\TestCase;
class DemoTest extends TestCase{
public function testEqualityString(){
    $string1='jerico';
    $string2='jerico';
    $this->assertSame($string1,$string2);

}
public function testSum(){
    require 'calcu.php';
    $sum=sum(1,6);
    $this->assertEquals(7,$sum);
}
}
