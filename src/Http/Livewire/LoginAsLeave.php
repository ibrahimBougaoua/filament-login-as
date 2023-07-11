<?php

namespace IbrahimBougaoua\FilamentLoginAs\Http\Livewire;

use App\Models\User;
use Auth;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Redirect;
use Session;

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
