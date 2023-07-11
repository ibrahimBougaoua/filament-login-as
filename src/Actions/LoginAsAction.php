<?php

namespace IbrahimBougaoua\FilamentLoginAs\Actions;

use App\Models\User;
use Closure;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

class LoginAsAction extends Action
{
    protected string|Closure|null $icon = "heroicon-o-login";

    public static function make(?string $name = 'login'): static
    {
        return parent::make($name);
    }

    protected function setUp(): void
    {
        $this->modalWidth = 'sm';
        $this->action($this->handle(...));
    }

    protected function handle(Model $record, array $data)
    {
        $user = User::find($record->id);
        Auth::login($user);
        dd(Auth::user()->id);
        return redirect()->route('filament.pages.dashboard');
    }
}
