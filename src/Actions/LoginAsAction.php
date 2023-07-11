<?php

namespace IbrahimBougaoua\FilamentLoginAs\Actions;

use Closure;
use Filament\Tables\Actions\Action;
use IbrahimBougaoua\FilamentLoginAs\Traits\LoginAs;
use Illuminate\Database\Eloquent\Model;

class LoginAsAction extends Action
{
    protected string|Closure|null $icon = 'heroicon-o-login';

    public static function make(?string $name = 'login-as'): static
    {
        return parent::make($name);
    }

    protected function setUp(): void
    {
        $this->requiresConfirmation();
        $this->modalWidth = 'sm';
        $this->action($this->handle(...));
    }

    protected function handle(Model $record, array $data)
    {
        LoginAs::login($record->id);
    }
}
