<?php

namespace Hilyahtech\Ui\Presets;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Laravel\Ui\Presets\Preset;

class Bulma extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        static::updateSass();
        static::updateBootstrapping();
        static::addBladeTemplate();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            'bulma' => '^0.9.0',
        ] + Arr::except($packages, ['bootstrap', 'jquery', 'popper.js']);
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        $file = new Filesystem;

        $file->delete(resource_path('sass/_variables.scss'));

        copy(__DIR__ . '/bulma/app.scss', resource_path('sass/app.scss'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        $file = new Filesystem;

        $file->delete(resource_path('js/bootstrap.js'));
        $file->delete(resource_path('js/app.js'));

        copy(__DIR__ . '/bulma/app.js', resource_path('js/app.js'));
    }

    /**
     * Copy Bulma Auth blade templates.
     *
     * @return void
     */
    protected static function addBladeTemplate()
    {
        (new Filesystem)->copyDirectory(__DIR__ . '/bulma/views', resource_path('views'));
    }
}