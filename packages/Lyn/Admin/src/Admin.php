<?php

namespace Lyn\Admin;

use Illuminate\Support\Facades\Facade;

class Admin extends Facade
{
    protected static $stylesheets;

    protected static $scripts;

    public static function getFacadeAccessor()
    {
        return 'lin/admin';
    }

    /**
     * Add css or get all css.
     *
     * @param null $stylesheets
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public static function css($stylesheets = null)
    {
        if (!is_null($stylesheets)) {
            self::$stylesheets = array_merge(self::$stylesheets, (array) $stylesheets);

            return;
        }

        $stylesheets = array_get(Form::collectFieldAssets(), 'css', []);

        static::$stylesheets = array_merge(static::$stylesheets, $stylesheets);

        return view('admin::partials.css', ['css' => array_unique(static::$stylesheets)]);
    }

    /**
     * Add js or get all javascript.
     *
     * @param null $scripts
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public static function js($scripts = null)
    {
        if (!is_null($scripts)) {
            self::$scripts = array_merge(self::$scripts, (array) $scripts);

            return;
        }

        $scripts = array_get(Form::collectFieldAssets(), 'js', []);

        static::$js = array_merge(static::$scripts, $scripts);

        return view('admin::partials.js', ['js' => array_unique(static::$scripts)]);
    }



    /**
     * Get Admin title config
     *
     * @return mixed
     */
    public function title()
    {
        return config('admin.title');
    }

    /**
     * Get Admin logo config
     *
     * @return mixed
     */
    public function logo()
    {
        return config('admin.logo');
    }
}