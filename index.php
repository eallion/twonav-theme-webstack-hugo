<?php 

if($c == 'click'){
    //主题配置(用户)
    $theme_config_db = get_db('user_config','v',['t'=>'theme_home','k'=>'WebStack-Hugo','uid'=>UID]);
    $theme_config_db = unserialize($theme_config_db);
    //合并配置数据
    $theme_config = empty($theme_config_db) ? $theme_config : array_merge ($theme_config,$theme_config_db);
}

$lazyload = $theme_config['lazyload'] == 1 ? 'data-src':'src';
$theme_config['logo_light'] = empty($theme_config['logo_light']) ? "{$theme_dir}/assets/images/bt8-expand-light.png" : $theme_config['logo_light'];
$theme_config['logo_dark'] = empty($theme_config['logo_dark']) ? "{$theme_dir}/assets/images/bt8-expand-dark.png" : $theme_config['logo_dark'];
$theme_config['logo_collapsed'] = empty($theme_config['logo_collapsed']) ? "{$theme_dir}/assets/images/bt.png" : $theme_config['logo_collapsed'];
$link_extend = $global_config['link_extend'] && check_purview('link_extend',1);
$js_config['bg_img'] = $theme_config['bg_img'];$js_config['bg_img_night'] = $theme_config['bg_img_night'];

if($c == 'click'){
    require 'transit.php';
}else{
    require 'home.php';
}

//左侧分类A标签
function echo_category_a($category){ 
    $icon = empty($category['icon']) ? "<i class=\"{$category['font_icon']} fa-lg icon-fw icon-lg mr-2\"></i>" : '<img class="icon" src="' . get_category_icon($category['icon']) . '">';
    $more = $category['subitem_count'] > 0 ? '<i class="iconfont icon-arrow-r-m sidebar-more text-sm"></i>' : '';
    echo "<a href=\"{$GLOBALS['urls']['home2']}#category-{$category['id']}\" class=\"smooth\">{$icon}<span>{$category['name']}</span>{$more}</a>";
}
