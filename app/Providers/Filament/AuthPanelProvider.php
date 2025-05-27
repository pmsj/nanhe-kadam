<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Http\Middleware\Authenticate;
use Jeffgreco13\FilamentBreezy\BreezyCore;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AuthPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('auth')
            ->path('auth')
            ->registration()
            ->login()
            // ->profile()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->plugin(
                BreezyCore::make()
                ->myProfile(
                shouldRegisterUserMenu: true, // Sets the 'account' link in the panel User Menu (default = true)
                userMenuLabel: 'My Profile', // Customizes the 'account' link label in the panel User Menu (default = null)
                shouldRegisterNavigation: false, // Adds a main navigation item for the My Profile page (default = false)
                navigationGroup: 'Settings', // Sets the navigation group for the My Profile page (default = null)
                hasAvatars: true, // Enables the avatar upload form component (default = false)
                slug: 'my-profile' // Sets the slug for the profile page (default = 'my-profile')
            )
             ->enableTwoFactorAuthentication(
                force: false, // force the user to enable 2FA before they can use the application (default = false)
               // action: CustomTwoFactorPage::class  optionally, use a custom 2FA page
               //  authMiddleware: MustTwoFactor::class optionally, customize 2FA auth middleware or disable it to register manually by setting false
            )
             ->enableBrowserSessions(condition: true) // Enable the Browser Sessions feature (default = true)
             ->enableSanctumTokens(
                permissions: ['my','custom','permissions'] // optional, customize the permissions (default = ["create", "view", "update", "delete"])
            )
            )
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
