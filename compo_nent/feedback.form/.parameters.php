<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = [
    "PARAMETERS" => [
        "USE_CAPTCHA" => [
            "NAME" => "Использовать CAPTCHA",
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
        ],
        "CACHE_TIME" => [
            "DEFAULT" => 0,
        ],
    ]
];