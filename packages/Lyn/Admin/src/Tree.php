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
    private $tree;

    private $parentIDField;

    private $data;

    public function __construct(array $data, $parentIDField)
    {
        $this->data = $data;
        $this->parentIDField = $parentIDField;

        $this->buildTree();
    }

    private function buildTree()
    {
        $tree = new TreeNode();

        foreach ($this->data as $key => $value) {
            //该结点还没创建
            if (!$node = $tree->findNode($key)) {
                //没有父结点的，为第一层结点
                if (!$value[$this->parentIDField]) {
                    $tree->appendChild(new TreeNode($key, 0, $value));
                }
                //父结点还没创建, 先创建一个空的父结点在根下
                if (!$parent = $tree->findNode($value[$this->parentIDField])) {
                    $parent = new TreeNode($value[$this->parentIDField], 0);
                    $tree->appendChild($parent);
                }
                //创建子结点
                $parent->appendChild(new TreeNode($key, $value[$this->parentIDField], $value));
            } else {
                //结点是提前创建的（空结点）
                $parent = $tree;
                if ($value[$this->parentIDField] and $node->parent_id == 0) {
                    //结点存在父节点，从根上移除这个节点
                    $node = $tree->removeNode($key);
                    if (!$parent = $tree->findNode($value[$this->parentIDField])) {
                        $parent = new TreeNode($value[$this->parentIDField], 0);
                        $tree->appendChild($parent);
                    }
                }
                //为空结点填充数据
                $node->node_id = $key;
                $node->parent_id = $value[$this->parentIDField];
                $node->node_data = $value;
                $parent->appendChild($node);
            }
        }

        $this->tree = $tree;
    }

}