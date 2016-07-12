<?php

namespace JsonLd\ContextTypes;

class Review extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'itemReviewed' => __NAMESPACE__ . '\Thing',
        'reviewRating' => __NAMESPACE__ . '\Rating',
        'aggregateRating' => __NAMESPACE__ . '\AggregateRating',
        'name' => null,
        'author' => __NAMESPACE__ . '\Person',
        'reviewBody' => null,
        'publisher' => __NAMESPACE__ . '\Organization',
        'datePublished' => null,
    ];
}