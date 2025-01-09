<?php

namespace Atekushi\Env\Facades;

use Atekushi\Env\Env as BaseClass;
use Atekushi\Env\Interfaces\ParserInterface;
use Atekushi\Support\Facade;

/**
 * @package Atekushi/Env
 *
 * @method static mixed getEnv(string $key, mixed $default = null)
 * @method static BaseClass addEnv(string $key, mixed $value)
 * @method static BaseClass local_only(bool $local_only = true)
 * @method static BaseClass immutable(bool $immutable = true)
 * @method static ParserInterface parser(?string $parser = null)
 *
 * @mixin BaseClass
 */
class Env extends Facade
{
    /**
     * @inheritDoc
     */
    protected static function getClassSubject(): string
    {
        return BaseClass::class;
    }
}