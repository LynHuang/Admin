<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/10/9
 * Time: 11:18
 */

namespace Lyn\Admin;


class Tree
{
    public $tree;

    public function __construct(array $data, $parentIDField)
    {
        $treeBuilder = new TreeBuilder($data, $parentIDField);
        $this->tree = $treeBuilder->builder();
    }

}