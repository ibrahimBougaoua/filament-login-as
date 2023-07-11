<?php

namespace IbrahimBougaoua\FilamentLoginAs\Http\Livewire;

use IbrahimBougaoua\FilamentLoginAs\Traits\LoginAs;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class LoginAsLeave extends Component
{
    public $leave = false;

    protected $listeners = ['login-as-logout' => 'logout'];

    public function mount()
    {
        $this->leave = LoginAs::isLogged();
    }

    public function logout()
    {
        LoginAs::logout();
    }

    public function render(): View
    {
        return view('filament-login-as::login-as')
            ->layout('filament::components.layouts.base');
    }
}
