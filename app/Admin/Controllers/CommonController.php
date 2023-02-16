<?php

namespace App\Admin\Controllers;

use App\Models\Appearance;
use App\Models\AttributeCategory;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Nav;
use Dcat\Admin\Http\Controllers\AdminController;

class CommonController extends AdminController
{
    /**
     * 导航树形结构
     * @return array
     */
    public function getNavTree()
    {
        $nodes = Nav::all(['id', 'parent_id', 'title'])->toArray();
        $options = self::buildSelect($nodes);

        if (!empty($options)) {
            $result = [];
            foreach ($options as $key => $option)
            {
                $result[] = [
                    'id' => $key,
                    'text' => $option
                ];
            }
            return $result;
        }

        return [];
    }

    /**
     * 属性分类
     * @return mixed
     */
    public function getAttributeCategory()
    {
        return AttributeCategory::all(['id', 'name as text']);
    }

    /**
     * 分类一级列表
     * @return mixed
     */
    public function getCategoryList()
    {
        return Category::where('parent_id', '=', 0)->get(['id', 'parent_id', 'name as text'])->toArray();
    }

    /**
     * 分类二级列表
     * @return array
     */
    public function getCategoryListTwo()
    {
        $data = Category::get(['id', 'parent_id', 'name as text'])->toArray();
        $result = [];
        foreach ($data as $k => $v)
        {
            if ($v['parent_id'] == 0) {
                $result[] = $v;
                unset($data[$k]);

                foreach ($data as $key => $val)
                {
                    if ($val['parent_id'] == $v['id']) {
                        $val['text'] = '---- ' . $val['text'];
                        $result[] = $val;
                    }
                }
            }
        }

        return $result;
    }

    public function getBrandList()
    {
        return Brand::all(['id', 'name as text']);
    }

    public function getAppearanceList()
    {
        return Appearance::all(['id', 'name as text']);
    }

    /**
     * @param array $nodes
     * @param $parentId
     * @param $prefix
     * @return array
     */
    protected static function buildSelect(array $nodes = [], $parentId = 0, $prefix = '')
    {
        $prefix = $prefix ?: '├─';
        $options = [];
        foreach ($nodes as $index => $node) {
            if ($node['parent_id'] == $parentId) {
                $node['title'] = $prefix . ' ' .$node['title'];
                $childrenPrefix = $prefix . '─';
                $children = self::buildSelect($nodes, $node['id'], $childrenPrefix);
                $options[$node['id']] = $node['title'];
                if ($children) {
                    $options += $children;
                }
            }
        }

        return $options;
    }
}
