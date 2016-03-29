<?php

return [
    'blogThumb' => [
        'fit' => [
            'width' => '150',
            'height' => '150',
            'callback' => function ($constraint) {
                $constraint->upsize();
            }
        ],
    ],
    'smallThumb' => [
        'crop' => [
            'width' => '100',
            'height' => '200'
        ],
        'blur' => [
            'amount' => '15'
        ],
    ]
];
