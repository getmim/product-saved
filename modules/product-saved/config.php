<?php

return [
    '__name' => 'product-saved',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/product-saved.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-saved' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'product' => NULL
            ],
            [
                'lib-user' => NULL 
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ProductSaved\\Model' => [
                'type' => 'file',
                'base' => 'modules/product-saved/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'product-saved' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'product' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Product\\Model\\Product',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'product'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];