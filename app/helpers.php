<?php

function getTree($list)
{
    $tree = [];
    $list = array_column($list, null, 'id');
    foreach ($list as $k => $row) {
        if (isset($list[$row['parent_id']])) {
            $list[$row['parent_id']]['son'][] = &$list[$k];
        } else {
            $tree[] = &$list[$k];
        }
    }
    return $tree;
}
