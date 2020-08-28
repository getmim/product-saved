<?php
/**
 * ProductSaved
 * @package product-saved
 * @version 0.0.1
 */

namespace ProductSaved\Model;

class ProductSaved extends \Mim\Model
{

    protected static $table = 'product_saved';

    protected static $chains = [
    	'product' => [
            'model' => 'Product\\Model\\Product',
            'field' => 'id'
        ]
    ];

    protected static $q = [];
}