# Eolymp PHP SDK

Eolymp PHP SDK provides development kit for interacting with Eolymp API.

## Usage

Install package using following command:

```bash
composer require eolymp/php-sdk
```

Create client object and send a request:

```go
$cognito = new \Eolymp\Cognito\CognitoClient($invoker);
$response = $cognito->DescribeUser(new DescribeUserInput(["UserId" => "1234"]));
```
