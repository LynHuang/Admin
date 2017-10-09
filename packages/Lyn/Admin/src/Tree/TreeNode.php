<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/10/9
 * Time: 13:44
 */

namespace Lyn\Admin;


class TreeNode
{
    public $node_id;
    public $parent_id;
    public $node_data;
    private $children = [];

    public function __construct($node_id = 0, $parent_id = null, $node_data = [])
    {
        $this->node_id = $node_id;
        $this->parent_id = $parent_id;
        $this->node_data = $node_data;
    }

    public function appendChild(TreeNode $child)
    {
        $this->children[$child->node_id] = $child;
    }

    public function findNode($node_id)
    {
        if (!empty($this->children)) {
            if (in_array($node_id, array_keys($this->children))) {
                return $this->children[$node_id];
            }
            foreach ($this->children as $child) {
                if ($parent = $child->findNode($node_id)) {
                    return $parent;
                }
            }
        }
        return false;
    }

    public function removeNode($node_id)
    {
        if (array_key_exists($node_id, $this->children)) {
            $node = $this->children[$node_id];
            unset($this->children[$node_id]);
            return $node;
        }
        return false;
    }
}