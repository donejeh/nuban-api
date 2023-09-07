<?php

use Donejeh\Nuban\Nubapi;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class NubanTest extends TestCase
{
    public function testGetAccountDetails()
    {

        $nuban = app(Nubapi::class);
        $details = $nuban->getAccountDetails('9036604001', '999992'); //put valid account number

        $this->assertArrayHasKey('account_number', $details);
        $this->assertArrayHasKey('bank_code', $details);
        $this->assertArrayHasKey('Bank_name', $details);
        // add more assertions as needed
    }
}
