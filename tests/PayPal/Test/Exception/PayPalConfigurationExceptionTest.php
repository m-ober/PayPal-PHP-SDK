<?php
use PayPal\Exception\PayPalConfigurationException;
use PHPUnit\Framework\TestCase;

/**
 * Test class for PayPalConfigurationException.
 *
 */
class PayPalConfigurationExceptionTest extends TestCase
{
    /**
     * @var PayPalConfigurationException
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new PayPalConfigurationException('Test PayPalConfigurationException');
    }

    public function testPPConfigurationException()
    {
        $this->assertEquals('Test PayPalConfigurationException', $this->object->getMessage());
    }
}
