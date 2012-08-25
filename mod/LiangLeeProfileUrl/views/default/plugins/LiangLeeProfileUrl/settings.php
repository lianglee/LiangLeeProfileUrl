<?php
/* LiangLee Zhuye
 * FrameWork for Liang Lee Plugins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework( LEFW )
 * @subpackage LiangLee Zhuye
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File settings.php
 */
/**
* Get Version
**/
$plug_ver = LiangLee_version('LiangLeeProfileUrl');
$plug_rel = LiangLee_release('LiangLeeProfileUrl');


/**
* Load Languages
**/
$lleesettings = elgg_echo('lee:settings:own:index');
$liang_lee_copytights = elgg_Echo('lianglee:copyr:12');

/**
* Save settings
**/
$liang_lee_purl = elgg_view('input/dropdown', array(
    'name' => 'params[liang_lee_purl]',
    'value' => $vars['entity']->liang_lee_purl,
    'options_values' => array(1 => 'Enable', '2' => 'Disable')));		
		
/**
* Setting Page
**/
$settings = <<<__HTML
    <div>
	
        <p><i>$lleesettings</i><br>$liang_lee_purl</p>
		<hr>
		<p><i>$liang_lee_copytights</i>
		<p>Release: $plug_rel</p>
		<p>Version: $plug_ver</p>
    </div>
    
</div>
__HTML;
echo $settings;