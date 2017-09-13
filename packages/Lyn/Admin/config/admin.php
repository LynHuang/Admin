<?php

return [

    /*
     * admin name.
     */
    'name' => '内容分发平台管理后台',

    /*
     * Logo in admin panel header.
     */
    'logo' => '<i class="fa fa-leaf"></i>Lyn Admin',

    /*
     * Laravel-admin url prefix.
     */
    'prefix' => 'admin',

    /*
     * Laravel-admin install directory.
     */
    'directory' => app_path('Admin'),

    /*
     * Laravel-admin html title.
     */
    'title' => '内容分发平台管理后台',

    /*
     * Laravel-admin auth setting.
     */
    'auth' => [
        'driver' => 'session',
        'provider' => '',
        'model' => Encore\Admin\Auth\Database\Administrator::class,
    ],

    /*
     * Laravel-admin upload setting.
     */
    'upload' => [

        'disk' => 'oss',

        'directory' => [
            'image' => 'content-distribution-platform/images/' . date('Y-m'),
            'file' => 'content-distribution-platform/videos/' . date('Y-m'),
        ],

        'host' => 'http://static.zookingsoft.com',
    ],

    /*
     * Laravel-admin database setting.
     */
    'database' => [

        // Database connection for following tables.
        'connection' => '',

        // User tables and model.
        'users_table' => 'admin_users',
        'users_model' => Encore\Admin\Auth\Database\Administrator::class,

        // Role table and model.
        'roles_table' => 'admin_roles',
        'roles_model' => Encore\Admin\Auth\Database\Role::class,

        // Permission table and model.
        'permissions_table' => 'admin_permissions',
        'permissions_model' => Encore\Admin\Auth\Database\Permission::class,

        // Menu table and model.
        'menu_table' => 'admin_menu',
        'menu_model' => Encore\Admin\Auth\Database\Menu::class,

        // Pivot table for table above.
        'operation_log_table' => 'admin_operation_log',
        'user_permissions_table' => 'admin_user_permissions',
        'role_users_table' => 'admin_role_users',
        'role_permissions_table' => 'admin_role_permissions',
        'role_menu_table' => 'admin_role_menu',
    ],

    /*
     * By setting this option to open or close operation log in laravel-admin.
     */
    'operation_log' => true,

    /*
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
     */
    'skin' => 'skin-blue',

    /*
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
     */
    'layout' => ['sidebar-mini'],

    /*
     * Version displayed in footer.
     */
    'version' => '1.0',
];
