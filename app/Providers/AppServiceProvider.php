<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;
use App\User;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('b2Config', function () {
            $config = json_encode(getB2Config());

            return "<?php echo '<script>window.b2Systems = $config</script>'; ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Passport::ignoreMigrations();
    }
}
