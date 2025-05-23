<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


/** The type of template to toggle delivery for */
enum ToggleTemplateDeliveryPathParamTemplateType: string
{
    case Email = 'email';
    case Sms = 'sms';
}
