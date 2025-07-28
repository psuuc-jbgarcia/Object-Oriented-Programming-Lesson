<? php
// Use PHPunit Framework
use PHPUnit\Framework\TestCase;


// Extend the test case class of phpunit
class StackTest extends TestCase
{
    public function testPushAndPop()
   {

// create an empty vector
$vector = new \Ds\Vector();

// assert the size of vector
$this->assertSame(0, count($vector));
$vector->insert(0, "first");
// assert the value of vector 
$this->assertSame('first', $vector[count($vector)-1]);

// assert the size of vector
$this->assertSame(1, count($vector));

// pop and assert the popped element
$this->assertSame('first', $vector->pop());
$this->assertSame(0, count($vector));
    }
}
?>