<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/9/28
 * Time: 13:44
 */

namespace Lyn\Admin\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return 'Hello Lyn Admin';
    }

}