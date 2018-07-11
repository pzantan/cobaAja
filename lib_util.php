<?php
/*
 * DO NOT modify this file as it represents the database.
 */

/**
 * Fake database access
 *
 * @return array customer info
 */
function getCustomerInfo() {
    return [
        1 => [
            'customer_id' => 1,
            'username' => 'george',
            'address_id' => 3,
            'created_on' => '2005-01-28',
            'company_name' => 'Foo Inc.',
        ],
        2 => [
            'customer_id' => 2,
            'username' => 'sam',
            'address_id' => 1,
            'created_on' => '2005-10-09',
            'company_name' => 'Foo Inc.',
        ],
        3 => [
            'customer_id' => 3,
            'username' => 'harrison',
            'address_id' => 2,
            'created_on' => '2005-07-21',
            'company_name' => 'Bar Inc.',
        ]
    ];
}

function getAddresses() {
    return [
        1 => [
            'address_id' => 1,
            'street' => '123 Main St.',
            'city' => 'Some City',
            'state' => 'PA',
            'zip' => '12345'
        ],
        2 => [
            'address_id' => 5,
            'street' => '345 Garden Dr.',
            'city' => 'Manhatten',
            'state' => 'NY',
            'zip' => '55555'
        ],
        3 => [
            'address_id' => 3,
            'street' => '876 Over There BLVD',
            'city' => 'Atlanta',
            'state' => 'GA',
            'zip' => '88899'
        ],
        4 => [
        'address_id' => 2,
        'street' => '543 Jungle Way',
        'city' => 'San Diego',
        'state' => 'CA',
        'zip' => '65432'
        ]
    ];
}

/**
 * Fake database access
 *
 * @return array customer info
 */
function getOrderInfo() {
    return [
        1 => [
            'order_id' => 1,
            'ordered_on' => '2006-11-17',
            'ordered_by' => 1,
            'order_total' => '47.00',
            'products' => [
                ['product_id' => 5, 'qty' => 2],
                ['product_id' => 6, 'qty' => 1],
                ['product_id' => 7, 'qty' => 3]
            ]
        ],

        2 => [
            'order_id' => 2,
            'ordered_on' => '2006-10-17',
            'ordered_by' => 1,
            'order_total' => '44.00',
            'products' => [
                ['product_id' => 1, 'qty' => 3],
                ['product_id' => 2, 'qty' => 1],
                ['product_id' => 7, 'qty' => 2]
            ]
        ],

        3 => [
            'order_id' => 3,
            'ordered_on' => '2006-11-12',
            'ordered_by' => 3,
            'order_total' => '43.00',
            'products' => [
                ['product_id' => 5, 'qty' => 1],
                ['product_id' => 6, 'qty' => 2]
            ]
        ]
    ];
}

/**
 * Fake database access
 *
 * @return array customer info
 */
function getProducts() {
    return [
        1 => [
            'product_id' => 1,
            'name' => 'Product A',
            'description' => 'Fancy Product with options',
            'price' => '10.00',
        ],
        2 => [
            'product_id' => 2,
            'name' => 'Product B',
            'description' => 'Fancy Product with options',
            'price' => '10.00',
        ],
        3 => [
            'product_id' => 3,
            'name' => 'Product C',
            'description' => 'Fancy Product with options',
            'price' => '20.00',
        ],
        4 => [
            'product_id' => 4,
            'name' => 'Product D',
            'description' => 'Fancy Product with options',
            'price' => '5.00',
        ],
        5 => [
            'product_id' => 8,
            'name' => 'Product E',
            'description' => 'Fancy Product with options',
            'price' => '13.00',
        ],
        9 => [
            'product_id' => 5,
            'name' => 'Product H',
            'description' => 'Fancy Product with options',
            'price' => '13.00',
        ],
        6 => [
            'product_id' => 6,
            'name' => 'Product F',
            'description' => 'Fancy Product with options',
            'price' => '15.00',
        ],
        7 => [
            'product_id' => 7,
            'name' => 'Product G',
            'description' => 'Fancy Product with options',
            'price' => '2.00',
        ]
    ];
}

function print_array($a) {
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}