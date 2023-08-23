<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {

    // Directiva para cantidades monetarias
    Blade::directive('money', function ($amount) {
      return "<?php echo number_format($amount, 2, ',', '.'); ?>";
    });

    // Mostrar fechas en formato d/m/y
    Blade::directive('date', function ($date) {
      return "<?php echo date('d/m/Y', strtotime($date)); ?>";
    });
  }
}
