<?php

namespace IbrahimBougaoua\FilamentLoginAs;
use Filament\Facades\Filament;
use IbrahimBougaoua\FilamentLoginAs\Http\Livewire\LoginAsLeave;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;

class FilamentLoginAs
{
    public static function callLoginAsComponent() : void
    {
        Livewire::component("login-as", LoginAsLeave::class);
        Filament::registerRenderHook(
            'global-search.end',
            fn (): string => Blade::render("@livewire('login-as')")
        );
    }
}
