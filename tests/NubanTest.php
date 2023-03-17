<?php

use Donejeh\Nuban\Services\NubanApi;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class NubanTest extends TestCase
{
    public function testGetAccountDetails()
    {

        $nuban = app(NubanApi::class);
        $details = $nuban->getAccountDetails('101777444', '033'); //put valid account number

        $this->assertArrayHasKey('account_number', $details);
        $this->assertArrayHasKey('bank_code', $details);
        $this->assertArrayHasKey('Bank_name', $details);
        // add more assertions as needed
    }
}
