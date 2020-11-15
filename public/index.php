<?php

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

try {
    $contents = (new Client())
        ->get(
            'https://6767c1c8-ed47-4847-86f3-36a340c8374d.mock.pstmn.io/api/cats'
        )
        ->getBody()
        ->getContents();

    echo "<pre>$contents</pre>";
} catch (Exception | GuzzleException $exception) {
    echo "<b>Exception</b>: {$exception->getMessage()}";
}
