<?php

namespace Donejeh\Nuban\Services;

class NubanApi{

    public function getAccountDetails($accountNumber, $bankCode) {

        try{

            $url = 'https://maylancer.org/api/nuban/api.php';

            $params = $bankCode !==null? http_build_query([
                'account_number' => $accountNumber,
                'bank_code' => $bankCode
            ]) : http_build_query([
                'account_number' => $accountNumber
            ]);

            $fullUrl = "{$url}?{$params}";

            $response = file_get_contents($fullUrl);
            return json_decode($response, true);


        }catch(\Exception $e){

        return json_decode("Account Number not Found", true);
        }

    }
}


?>
