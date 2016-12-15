<?php
/**
 * User: guoxiaonan
 * DateTime: 16/12/11 下午6:58
 * description:
 */

namespace tests\unit;

/**
 * Class myTest
 * @package tests\unit
 * description:
 */
class myTest extends \Codeception\Test\Unit
{
//    public static function setUpBeforeClass()
//    {
//        fwrite(STDOUT, __METHOD__."\n");
//    }
//
//    protected function setUp()
//    {
//        fwrite(STDOUT, __METHOD__."\n");
//    }
//
//    protected function assertPreConditions()
//    {
//        fwrite(STDOUT, __METHOD__."\n");
//    }
//
//    protected function assertPostConditions()
//    {
//        fwrite(STDOUT, __METHOD__."\n");
//    }
//
//    protected function tearDown()
//    {
//        fwrite(STDOUT, __METHOD__."\n");
//    }
//
//    public static function tearDownAfterClass()
//    {
//        fwrite(STDOUT, __METHOD__."\n");
//    }

//    protected function onNotSuccessfulTest($e)
//    {
//        fwrite(STDOUT, __METHOD__."\n");
//    }

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 2);
        $this->assertEquals(2, $stack[count($stack) - 1]);

        return $stack;
    }

    /**
     * @depends testEmpty
     * @depends testPush
     */
    public function testPop(array $stack1, array $stack2)
    {
        $this->assertEquals(2, array_pop($stack2));
        $this->assertEmpty($stack2);
        $this->assertEmpty($stack1);
    }

    public function additionProvider()
    {
        return [
            '6+1' => [6,1,7],
            '3+5' => [3,5,8],
            '2+8' => [2,8,10]
        ];
    }

    /**
     * @depends testEmpty
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected, $stack)
    {
        $this->assertEmpty($stack);
        $this->assertEquals($expected, $a + $b);
    }

    public function testException()
    {
//        $this->expectException(InvalidArgumentException::class);
        //expectExceptionCode(),
        // expectExceptionMessage(),
        // expectExceptionMessageRegExp()
    }

    /**
     * expectedException InvalidArgumentException
     */
    public function testException2()
    {

    }

    /**
     * @expectedException yii\base\ErrorException
     */
    //PHPUnit_Framework_Error_Notice, PHPUnit_Framework_Error_Warning
    public function testFailingInclude()
    {
        include 'not_existing_file.php';
    }

    public function testOutputString()
    {
        $this->expectOutputString('testString');
        echo 'testString';
    }

    public function testechosubject()
    {
        $str = observer::$str;
        $this->expectOutputString('test');
        echo $str;
    }


}

class observer
{
    static $str = 'test';
}