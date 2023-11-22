<?php
use Ts\Tsvalidator\Validator;

test('checarData', function () {
    $check = new Validator();
    $result = $check->isDate('20/04/2023', 'd/m/Y');
    expect($result)->toBeTrue();
});
