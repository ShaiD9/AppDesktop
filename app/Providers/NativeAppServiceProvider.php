<?php

namespace App\Providers;

use Native\Laravel\Facades\Window;
use Native\Laravel\Contracts\ProvidesPhpIni;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Menu::new()
            ->appMenu()
            ->submenu('Taches', Menu::new()
                ->link('http://localhost:8000/taches', 'Taches index')
                ->link('http://localhost:8000/taches/creation', 'Créer une tache')
            )
            ->register();
        Window::open();
    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [
        ];
    }
}
