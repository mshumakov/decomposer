# decomposer

[![start with why](https://img.shields.io/badge/start%20with-why%3F-brightgreen.svg?style=flat)]()
[![build](https://github.com/mshumakov/decomposer/workflows/build/badge.svg)](https://github.com/mshumakov/decomposer/actions)
[![coverage](https://codecov.io/gh/mshumakov/decomposer/branch/master/graph/badge.svg)](https://codecov.io/gh/mshumakov/decomposer)

This package is for big data fragmentation.

## Installation

To install, download the package using the following command.

```shell script
composer require mshumakov/decomposer
```

## Example

A basic example of using a package to break data into fragments.

```shell script
<?php
declare(strict_types=1);

use MShumakov\Helper\Decomposer;

require __DIR__ . '/../vendor/autoload.php';

$data = [
    [...],
    [...],
    [...],
];

$batchSize = 10; // Fragment size
$totalCount = count($data); // Total amount of data

/**
 * In the response, we return the passed parameters 
 * ($params) and a list of fragments (key - 'list').
 * 
 * p.s.: More information in the tests.
 */
$fragments = Decomposer::decompose(
    $batchSize, 
    $totalCount,
    $params
);
```