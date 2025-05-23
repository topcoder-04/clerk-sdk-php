<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


/**
 * Actor - The actor payload. It needs to include a sub property which should contain the ID of the actor.
 *
 * This whole payload will be also included in the JWT session token.
 */
class Actor
{
    /**
     * The ID of the actor.
     *
     * @var string $sub
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub')]
    public string $sub;

    /**
     * $additionalProperties
     *
     * @var ?array<string, mixed> $additionalProperties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('additionalProperties')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $additionalProperties = null;

    /**
     * @param  string  $sub
     * @param  ?array<string, mixed>  $additionalProperties
     * @phpstan-pure
     */
    public function __construct(string $sub, ?array $additionalProperties = null)
    {
        $this->sub = $sub;
        $this->additionalProperties = $additionalProperties;
    }
}