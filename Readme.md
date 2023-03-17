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
 Donejeh\Nuban\NubanServiceProvider::class

```


## Response JSON

``` 
{
    "account_number": "0080******",
    "account_name": "Jane Doe",
    "Bank_name": "ACCESS BANK PLC",
    "bank_code": "044",
    "requests": "Free",
    "execution_time": "0.17 secs",
    "status": "success"
}
```

## Usage 1 with bank code (recommended)
 In your app controller 
```

$nubanApi = app(NubanApi::class);
$response = $nubanApi->getAccountDetails('1056684123', '013');

print_r($response);


```

## Usage 2 without bank code
 In yoyr app controller 
```

$nubanApi = app(NubanApi::class);
$response = $nubanApi->getAccountDetails('1052222890', null);

print_r($response);


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

