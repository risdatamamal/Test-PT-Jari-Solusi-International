<?php
function fibonacci($jumlahInput) {
    $fibonacci = [0, 1]; // Menyimpan angka Fibonacci pertama

    // deret Fibonacci
    for ($outputFibonacci = 2; $outputFibonacci < $jumlahInput; $outputFibonacci++) {
        $fibonacci[$outputFibonacci] = $fibonacci[$outputFibonacci - 1] + $fibonacci[$outputFibonacci - 2];
    }

    return $fibonacci;
}

echo "Input: " . "\n";
$input = intval(trim(fgets(STDIN)));

echo "Output: " . "\n";
$fibonacciSequence = fibonacci($input);
echo implode(", ", $fibonacciSequence);
