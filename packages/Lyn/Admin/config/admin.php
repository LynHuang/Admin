<?php

return [

    /*
     * admin name.
     */
    'name' => 'Lyn Admin',

    /*
     * Logo in admin panel header.
     */
    'logo' => '<i class="fa fa-leaf"></i>Lyn Admin',

    /*
     * Laravel-admin install directory.
     */
    'directory' => app_path('Http\Admin'),

    /*
     * Laravel-admin html title.
     */
    'title' => 'Lyn Admin',

    /*
     * Laravel-admin auth setting.
     */
    'User' => [
        'driver' => 'session',
        'provider' => '',
        'model' => Lyn\Admin\src\models\User::class,
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
        'users_model' => Lyn\Admin\src\models\User::class,

        // Role table and model.
        'roles_table' => 'admin_roles',
        'roles_model' => Lyn\Admin\src\models\Role::class,

        // Permission table and model.
        'permissions_table' => 'admin_permissions',
        'permissions_model' => Lyn\Admin\src\models\Permission::class,

        // Menu table and model.
        'menu_table' => 'admin_menu',
        'menu_model' => Lyn\Admin\src\models\Menu::class,

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
