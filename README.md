# decomposer

[![start with why](https://img.shields.io/badge/start%20with-why%3F-brightgreen.svg?style=flat)](https://telegra.ph/Why-decomposer-06-04)
[![build](https://github.com/mshumakov/decomposer/workflows/build/badge.svg)](https://github.com/mshumakov/decomposer/actions)
[![Codacy Badge](https://app.codacy.com/project/badge/Coverage/8a2d09a4dfcf45f6a52eb9d24c5b5be6)](https://www.codacy.com/manual/ms.profile.dev/decomposer?utm_source=github.com&utm_medium=referral&utm_content=mshumakov/decomposer&utm_campaign=Badge_Coverage)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/5962abcc33e04b8a8041bdb94f7ad4d6)](https://app.codacy.com/manual/ms.profile.dev/decomposer?utm_source=github.com&utm_medium=referral&utm_content=mshumakov/decomposer&utm_campaign=Badge_Grade_Dashboard)

This package is for big data fragmentation.

## Installation

To install, download the package using the following command.

```shell script
composer require mshumakov/decomposer
```

## Example

A basic example of using a package to break data into fragments.

```php
<?php
declare(strict_types=1);

use MSdev\Helper\Decomposer;

require __DIR__ . '/../vendor/autoload.php';

$data = [
    [...],
    [...],
    [...],
];

$batchSize = 10; // Fragment size
$totalCount = count($data); // Total amount of data
$params = [
    'hello' => 'world'
];

/**
 * In the response, we return the passed parameters 
 * ($params) and a list of fragments (key - 'list').
 * 
 * p.s.: More information in the tests.
 */
$decomposer = new Decomposer();
$fragments = $decomposer->decompose(
    $batchSize, 
    $totalCount,
    $params
);
```
