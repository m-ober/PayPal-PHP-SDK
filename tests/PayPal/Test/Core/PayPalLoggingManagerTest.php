<?php
use PayPal\Core\PayPalLoggingManager;
use PHPUnit\Framework\TestCase;

/**
 * Test class for PayPalLoggingManager.
 *
 */
class PayPalLoggingManagerTest extends TestCase
{
    /**
     * @var PayPalLoggingManager
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = PayPalLoggingManager::getInstance('InvoiceTest');
    }

    /**
     * @test
     */
    public function testError()
    {
        $this->object->error('Test Error Message');

        $this->expectNotToPerformAssertions();
    }

    /**
     * @test
     */
    public function testWarning()
    {
        $this->object->warning('Test Warning Message');

        $this->expectNotToPerformAssertions();
    }

    /**
     * @test
     */
    public function testInfo()
    {
        $this->object->info('Test info Message');

        $this->expectNotToPerformAssertions();
    }

    /**
     * @test
     */
    public function testFine()
    {
        $this->object->fine('Test fine Message');

        $this->expectNotToPerformAssertions();
    }
}
