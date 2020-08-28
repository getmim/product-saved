<?php

return [
    'ProductSaved\\Model\\ProductSaved' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'product' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false 
                ],
                'index' => 3000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ],
        'indexes' => [
            'by_user_product' => [
                'fields' => [
                    'user' => [],
                    'product' => []
                ]
            ],
            'by_product' => [
                'fields' => [
                    'product' => []
                ]
            ]
        ]
    ]
];