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
        'itemReviewed' => '\JsonLd\ContextTypes\Thing',
        'reviewRating' => '\JsonLd\ContextTypes\Rating',
        'aggregateRating' => '\JsonLd\ContextTypes\AggregateRating',
        'name' => null,
        'author' => '\JsonLd\ContextTypes\Person',
        'reviewBody' => null,
        'publisher' => '\JsonLd\ContextTypes\Organization',
        'datePublished' => null,
    ];
}