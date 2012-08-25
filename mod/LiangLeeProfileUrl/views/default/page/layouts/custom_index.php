<?php
$mod_params = array('class' => 'elgg-module-highlight');
?>

<div class="custom-index elgg-main elgg-grid clearfix">
	<div class="elgg-col elgg-col-1of2">
		<div class="elgg-inner pvm prl">
<?php

if (elgg_is_logged_in()) {
	$top_box = "<h2>" . elgg_echo("welcome") . " ";
	$top_box .= elgg_get_logged_in_user_entity()->name;
	$top_box .= "</h2>";
} else {
	$top_box = $vars['login'];
}
echo elgg_view_module('featured',  '', $top_box, $mod_params);

// a view for plugins to extend
echo elgg_view("index/lefthandside");

// files
if (elgg_is_active_plugin('file')) {
	echo elgg_view_module('featured',  elgg_echo("lee:purl:files"), $vars['files'], $mod_params);
}

// groups
if (elgg_is_active_plugin('groups')) {
	echo elgg_view_module('featured',  elgg_echo("lee:purl:groups"), $vars['groups'], $mod_params);
}
?>
		</div>
	</div>
	<div class="elgg-col elgg-col-1of2">
		<div class="elgg-inner pvm">
<?php
echo elgg_view("index/righthandside");

echo elgg_view_module('featured',  elgg_echo("lee:purl:members"), $vars['members'], $mod_params);

if (elgg_is_active_plugin('blog')) {
	echo elgg_view_module('featured',  elgg_echo("lee:purl:blogs"), $vars['blogs'], $mod_params);
}


if (elgg_is_active_plugin('bookmarks')) {
	echo elgg_view_module('featured',  elgg_echo("lee:purl:bookmarks"), $vars['bookmarks'], $mod_params);
}
?>
		</div>
	</div>
</div>
