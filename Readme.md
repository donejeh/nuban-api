# Nigeria-Bank-Account-Number-API Laravel Package
You can use it to get the account name of any bank account in Nigeria


- Lifetime Access. Unlimited Account Lookups

- Enter account number and get the name and bank

- Enter account number and bank code to get the account name


## install via composer
```
composer require donejeh/nuban
```

## Application Service Providers...
```
 Donejeh\Nuban\NubapiServiceProvider::class

```

## Publish the config file
```cmd
php artisan vendor:publish --provider="Donejeh\Nuban\NubapiServiceProvider" --tag="config"
```

## Default config file contents 

```php
<?php

return [


    // The Host of the API.
    'host' => env('NUB_API_HOST', 'https://nubapi.com/api'),


    /**
     * Your API Token from (https://nubapi.com/user/api-tokens)
     *
     */
    'api_token' => env('NUB_API_TOKEN', ''),



     'options' => [
            // Validate number on your server without making an APi request.
            'validate_number_locally' => true,

             //This timeout applies to client connections and determine when
             //The whole response must be read before it exceeded
             'request_timeout' => 5,

        ]



];

```



## API Usage
Sign up for a developer account by selecting the [Sign Up](https://nubapi.com/register) button.
After signing up, access your account dashboard.

You can follow these steps to obtain your API key and configure it in your application:

1. Go to the [API Create Access Tokens](https://nubapi.com/user/api-tokens) page.

2. Generate your unique API key.

3. Once you have your API key, insert it into either your `.env` file or the configuration file.


 In your app controller 
```
use Donejeh\Nuban\Nubapi;


$nubanApi = app(NubApi::class);
$response = $nubanApi->getAccountDetails('1056684123', '013');

print_r($response);


```


## Response JSON

``` 
{
    "account_number": "0080******",
    "account_name": "Jane Doe",
    "first_name: : "Jane"
    "last_name: : "Doe"
    "Bank_name": "ACCESS BANK PLC",
    "bank_code": "044",
    "requests": "Free",
    "status": "success"
}
```




## Useful links 
  - Bank list Codes https://gist.github.com/donejeh/591f2739d986d7ae6338ea2921d03cf4
  - Bank list JSON  https://gist.github.com/donejeh/5dd73ca4e2c8c94527219af52a5f53b8
 

For support and inquiry Whatsapp Me https://twitter.com/don_ejeh

A wrap and Special thank to https://github.com/olakunlevpn/Nigeria-Bank-Account-Number-API
## Legal
Its very legal & safe

## Security
Our API is highly secure and our system do not store any bank record

