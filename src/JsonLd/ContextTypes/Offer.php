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
        'itemOffered' => __NAMESPACE__ . '\Product',
        'price' => null,
        'priceCurrency' => null,
        'priceValidUntil' => null,
        'url' => null,
        'itemOffered' => null,
        'itemCondition' => null,
        'availability' => null
    ];
}
