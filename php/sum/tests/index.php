<?php

require_once dirname(dirname(__FILE__)) .'/vendor/autoload.php';

it('Must return 20', function () {
    assertTrue(function_exists('sum'));
});

it('11 + 9 must return 20', function () {
    assertEquals('20', sum('11', '9'));
});

it('111111111111111111111111111111111 + 222 must return 111111111111111111111111111111333', function () {
    assertEquals('111111111111111111111111111111333', sum('111111111111111111111111111111111', '222'));
});