<?php
namespace JsonLd\ContextTypes;
class Product extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'name' => null,
        'description' => null,
        'brand' => null,
        'image' => null,
        'sku' => null,
        'url' => null,
        'description' => null,
        'brand' => null,
        'review' => '\JsonLd\ContextTypes\Review',
        'aggregateRating' => '\JsonLd\ContextTypes\AggregateRating',
        'offers' => '\JsonLd\ContextTypes\Offer',
        'gtin8' => null,
        'gtin13' => null,
        'gtin14' => null,
        'mpn' => null,
        'category' => null,
        'model' => null
    ];

}
