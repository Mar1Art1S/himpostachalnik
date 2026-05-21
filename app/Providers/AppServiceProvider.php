<?php

namespace App\Providers;

use App\Models\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
      Blade::anonymousComponentPath(resource_path('views/layouts'), 'layouts');

      if (app()->environment('production')) {
          URL::forceScheme('https');
      }

      // Додаємо захист від помилок бази даних під час завантаження
      if (!app()->runningInConsole()) {
          try {
              if (Schema::hasTable((new Language())->getTable())) {
                  $this->setDefaultLanguage();
                  $this->setFallbackLanguage();
                  $this->setCarbon();
              }
          } catch (\Exception $e) {
              // Якщо база даних недоступна, сайт не повинен "падати"
              \Log::warning('Database connection failed in AppServiceProvider: ' . $e->getMessage());
          }
      }
    }
    private function setDefaultLanguage(): void {
      $language = Language::findDefault();

      $language && app()->setLocale($language->code);
    }
    private function setFallbackLanguage(): void {
      $language = Language::findFallback();

      $language && app()->setFallbackLocale($language->code);
    }
    private function setCarbon(): void {
        Carbon::setLocale(config('app.locale'));
    }



}
