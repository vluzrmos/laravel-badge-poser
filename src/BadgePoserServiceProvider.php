<?php

namespace Vluzrmos\BadgePoser;

use Illuminate\Support\ServiceProvider;
use PUGX\Poser\Poser;
use PUGX\Poser\Render\SvgFlatRender;
use PUGX\Poser\Render\SvgRender;
use Vluzrmos\BadgePoser\Poser as BadgePoser;

class BadgePoserServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('badges.poser', function () {

            $renders = [
                new SvgFlatRender(),
                new SvgRender(),
            ];

            return new Poser($renders);
        });

        $this->app->singleton('Vluzrmos\BadgePoser\Contracts\Poser', function () {
            return new BadgePoser($this->app['badges.poser']);
        });
    }
}
