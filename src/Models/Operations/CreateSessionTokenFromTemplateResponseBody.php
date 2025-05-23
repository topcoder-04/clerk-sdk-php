<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


/** CreateSessionTokenFromTemplateResponseBody - OK */
class CreateSessionTokenFromTemplateResponseBody
{
    /**
     *
     * @var ?CreateSessionTokenFromTemplateObject $object
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Operations\CreateSessionTokenFromTemplateObject|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateSessionTokenFromTemplateObject $object = null;

    /**
     *
     * @var ?string $jwt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('jwt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $jwt = null;

    /**
     * @param  ?CreateSessionTokenFromTemplateObject  $object
     * @param  ?string  $jwt
     * @phpstan-pure
     */
    public function __construct(?CreateSessionTokenFromTemplateObject $object = null, ?string $jwt = null)
    {
        $this->object = $object;
        $this->jwt = $jwt;
    }
}