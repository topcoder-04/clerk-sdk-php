<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class ClerkError
{
    /**
     *
     * @var string $message
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message')]
    public string $message;

    /**
     *
     * @var string $longMessage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('long_message')]
    public string $longMessage;

    /**
     *
     * @var string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    public string $code;

    /**
     *
     * @var ?Meta $meta
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meta')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\Meta|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Meta $meta = null;

    /**
     *
     * @var ?string $clerkTraceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('clerk_trace_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $clerkTraceId = null;

    /**
     * @param  string  $message
     * @param  string  $longMessage
     * @param  string  $code
     * @param  ?Meta  $meta
     * @param  ?string  $clerkTraceId
     * @phpstan-pure
     */
    public function __construct(string $message, string $longMessage, string $code, ?Meta $meta = null, ?string $clerkTraceId = null)
    {
        $this->message = $message;
        $this->longMessage = $longMessage;
        $this->code = $code;
        $this->meta = $meta;
        $this->clerkTraceId = $clerkTraceId;
    }
}