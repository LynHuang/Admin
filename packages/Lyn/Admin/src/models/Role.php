<?php

namespace Lyn\Admin\models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = ['name', 'slug'];

    public function __construct(array $attributes = [])
    {
        $connection = config('admin.database.connection') ?: config('database.default');

        $this->setConnection($connection);

        $this->setTable(config('admin.database.admin_roles'));

        parent::__construct($attributes);
    }


    public function administrators()
    {
        $pivotTable = config('admin.database.role_users_table');

        $relatedModel = config('admin.database.users_model');

        return $this->belongsToMany($relatedModel, $pivotTable, 'role_id', 'user_id');
    }


    public function permissions()
    {
        $pivotTable = config('admin.database.admin_role_permissions');

        $relatedModel = config('admin.database.permissions_model');

        return $this->belongsToMany($relatedModel, $pivotTable, 'role_id', 'permission_id');
    }

    public function menus(){
        $pivotTable = config('admin.database.admin_role_menu');

        $relatedModel = config('admin.database.admin_menu');

        return $this->belongsToMany($relatedModel, $pivotTable, 'role_id', 'menu_id');
    }
}