<?php
namespace JsonLd\ContextTypes;
class Offer extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'itemOffered' => '\JsonLd\ContextTypes\Product',
        'price' => null,
        'priceCurrency' => null,
        'priceValidUntil' => null,
        'url' => null,
        'itemOffered' => null,
        'itemCondition' => null,
        'availability' => null
    ];
}
