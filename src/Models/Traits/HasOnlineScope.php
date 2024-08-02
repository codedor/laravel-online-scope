<?php

namespace Codedor\OnlineScope\Models\Traits;

use Codedor\OnlineScope\Models\Scopes\OnlineScope;

trait HasOnlineScope
{
    public static function bootHasOnlineScope()
    {
        static::addGlobalScope(new OnlineScope);
    }
}
