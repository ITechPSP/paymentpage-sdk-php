<?php

namespace itechpsp\tests;

use itechpsp\Callback;
use itechpsp\SignatureHandler;

class CallbackFormatTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var array
     */
    private $cases;

    protected function setUp()
    {
        $this->cases = require __DIR__ . '/data/callbackFormats.php';
    }

    public function testFormats()
    {
        foreach ($this->cases as $callbackData) {
            $callback = (new Callback($callbackData, new SignatureHandler('123')));

            $callback->getPayment();
            $callback->getPaymentId();
            $callback->getPaymentStatus();
        }
    }
}
