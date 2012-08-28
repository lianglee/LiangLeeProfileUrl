<?php
/* LiangLee Profile Url
 * FrameWork for Liang Lee Plugins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework
 * @subpackage LiangLee Profile Url
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File settings.php
 */
$backup = LiangLee_url(array('connection' => "http",'url' => "admin/plugin_settings/LiangLeeProfileUrl?backup"));

if($backup){		
LiangLee_backup(array(
'path' => $CONFIG->path,
'file' => ".htaccess",
'newfile'    => ".htaccess.lianglee~backup",));	
system_message(elgg_echo('lee:purl:backup:ok'));
forward('admin/plugin_settings/LiangLeeProfileUrl');
}	
$params = LiangLee_url(array('connection' => "http",'url' => "admin/plugin_settings/LiangLeeProfileUrl?configure"));

if($params){

$data = file_get_contents(elgg_get_plugins_path().'LiangLeeProfileUrl/views/default/LiangLeeProfileUrl/htaccess/htaccess.php');

LiangLee_putconents($CONFIG->path.'.htaccess',$data);
	
system_message(elgg_echo('lee:purl:ok'));
forward('admin/plugin_settings/LiangLeeProfileUrl');
}	
function LiangLeeProfileurl_lib(){

global $redirect;

$page = elgg_get_plugin_setting("lee_purl_redir", "LiangLeeProfileUrl");

if(!elgg_get_plugin_setting("lee_purl_redir", "LiangLeeProfileUrl")){
	$redirect = "activity/";
	} else {
	$redirect = $page;
	}
}