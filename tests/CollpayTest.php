<?php

namespace CollPay\CollpayPhpSdk\Tests;

use PHPUnit\Framework\TestCase;
use CollPay\CollpayPhpSdk\Collpay;

class CollpayTest extends TestCase
{
    private $collpay;
    public function setUp()
    {
        parent::setUp();
        $this->collpay = new Collpay('xxxxxxxxxxxxxx', COLLPAY_ENV_SANDBOX);
    }

    public function test_env_production_will_be_1() {
        $this->assertEquals(1, COLLPAY_ENV_PRODUCTION);
    }

    public function test_env_sandbox_will_be_2() {
        $this->assertEquals(2, COLLPAY_ENV_SANDBOX);
    }

    public function test_collpay_v1_will_be_v1() {
        $this->assertEquals('v1', COLLPAY_V1);
    }

    public function test_getExchangeRate_basic_error() {
        $response = $this->collpay->getExchangeRate('USD', 'BTC');
        $this->assertEquals(false, $response->success);
    }

    public function test_createTransaction_basic_error() {
        $response = $this->collpay->createTransaction([]);
        $this->assertEquals(false, $response->success);
    }

    public function test_getTransaction_basic_error() {
        $response = $this->collpay->getTransaction('xxxxxxxxxxxxxx');
        $this->assertEquals(false, $response->success);
    }
}
