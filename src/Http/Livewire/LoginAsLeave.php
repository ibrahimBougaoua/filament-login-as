<?php

namespace IbrahimBougaoua\FilamentLoginAs\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class LoginAsLeave extends Component
{
    protected $listeners = ['impersonate-leave' => 'leave'];

    public function leave()
    {
        dd(2023);
    }

    public function render(): View
    {
        return view('filament-login-as::login-as')
            ->layout('filament::components.layouts.base');
    }
}
