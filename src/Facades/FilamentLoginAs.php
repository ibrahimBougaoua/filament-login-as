<?php

namespace IbrahimBougaoua\FilamentLoginAs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IbrahimBougaoua\FilamentLoginAs\FilamentLoginAs
 */
class FilamentLoginAs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \IbrahimBougaoua\FilamentLoginAs\FilamentLoginAs::class;
    }
}
