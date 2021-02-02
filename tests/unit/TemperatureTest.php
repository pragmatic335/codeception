<?php 
class TemperatureTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
//        $t = $this->make(\app\services\Temperature::class, [
//            'now' => function() {
//                return 0;
//            }
//        ]);
        $t = $this->make(\app\services\Temperature::class, [
            'now' => \Codeception\Util\Stub::consecutive(22,11,22,13,4,0)
        ]);

        $this->assertSame(22, $t->now());
        $this->assertSame(11, $t->now());
        $this->assertSame(22, $t->now());
        $this->assertSame(13, $t->now());
        $this->assertSame(4, $t->now());
        $this->assertSame(0, $t->now());
    }
}