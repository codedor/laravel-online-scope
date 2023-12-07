<?php

namespace Codedor\OnlineScope\Model\Traits;

trait HasOnlineScope
{
    public static function bootHasOnlineScope()
    {
        static::addGlobalScope(new \Codedor\OnlineScope\Model\Scopes\OnlineScope());
    }
}
