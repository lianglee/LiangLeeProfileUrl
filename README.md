LiangLee ProfileUrl
=====================

Make Profile Url Like facebook example http:// or https://website.com/username

Installation

* Download LiangLeeFramework 1.1.3

* Extract to mod dir

* Enable Framework

* Download LiangLee ProfileUrl

* Extract to mod dir

* Enable LiangLee ProfileUrl

* Go to http://yourwebsite.com/admin/plugin_settings/LiangLeeProfileUrl

* Save Settings According to your need

* Run Upgrade.php


There is built in Index plugin if you have own custom index plugin you can disable it using LiangLeeProfileUrl Settings Panel

before you disable the index from settings you must enable your own index plugin other wise you got errors beucase you disable the rid_error hook.

**To replace default profile url links to faebook like url you need follow steps**

* Go start.php of profile plugin
* Find

function profile_url1($user) {
return elgg_get_site_url() . "profile/" . $user->username;
}

* Replace With

function profile_url1($user) {
return elgg_get_site_url() . $user->username;

}


More Plugin found here http://community.elgg.org/plugins/developer/arsalanlee

Any problem in installing or any Bug Please Report it on https://github.com/lianglee/LiangLeeProfileUrl/issues
