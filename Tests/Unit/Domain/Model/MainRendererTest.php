<?php
namespace T3sci\Cssjsrendering\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class MainRendererTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \T3sci\Cssjsrendering\Domain\Model\MainRenderer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \T3sci\Cssjsrendering\Domain\Model\MainRenderer();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
