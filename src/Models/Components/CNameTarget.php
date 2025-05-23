<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class CNameTarget
{
    /**
     *
     * @var string $host
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('host')]
    public string $host;

    /**
     *
     * @var string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    public string $value;

    /**
     * Denotes whether this CNAME target is required to be set in order for the domain to be considered deployed.
     *
     *
     *
     * @var bool $required
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('required')]
    public bool $required;

    /**
     * @param  string  $host
     * @param  string  $value
     * @param  bool  $required
     * @phpstan-pure
     */
    public function __construct(string $host, string $value, bool $required)
    {
        $this->host = $host;
        $this->value = $value;
        $this->required = $required;
    }
}