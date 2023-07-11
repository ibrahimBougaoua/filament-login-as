<?php

namespace IbrahimBougaoua\FilamentLoginAs\Traits;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

trait LoginAs
{
    public static function login($user_id)
    {
        $user = User::find($user_id);

        if($user)
        {
            self::storeCurrentUserId();
            Auth::guard(self::getCurrentGuard())->login($user);
            Notification::make()
            ->title('Login As : ' . $user->name)
            ->success()
            ->send();
            
            return redirect()->route('filament.pages.dashboard');
        } else {
            return back();
        }
    }

    public static function logout()
    {
        if(self::isLogged())
        {
            $user = User::find(self::getCurrentUserIdStored());
            Auth::guard(self::getCurrentGuard())->login($user);
            self::clear();
            
            Notification::make()
            ->title('Login As : ' . $user->name)
            ->success()
            ->send();

            return redirect()->route('filament.pages.dashboard');
        }
    }

    public static function getCurrentGuard(): string
    {
        return Auth::getDefaultDriver();
    }

    public static function storeCurrentGuard() : void
    {
        session()->put('current_guard', self::getCurrentGuard());
    }

    public static function getCurrentUserId() : int
    {
        return auth()->user()->id;
    }

    public static function storeCurrentUserId() : void
    {
        session()->put('current_user_id', self::getCurrentUserId());
    }

    public static function getCurrentUserIdStored() : int
    {
        return session()->get('current_user_id');
    }

    public static function isLogged() : bool
    {
        return session()->has('current_user_id');
    }

    public static function clear()
    {
        session()->forget('current_user_id');
        session()->forget('current_guard');
    }
}