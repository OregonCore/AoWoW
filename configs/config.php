<?php
global $AoWoWconf;

// -- Oregon Database --
$AoWoWconf['oregon']['host']	= '127.0.0.1';
$AoWoWconf['oregon']['user']	= 'oregon_user';
$AoWoWconf['oregon']['pass']	= 'oregon_passwd';
$AoWoWconf['oregon']['db']		= 'world';
$AoWoWconf['oregon']['aowow']	= 'aowow_';

// -- Realmd Database --
$AoWoWconf['realmd']['host']	= '127.0.0.1';
$AoWoWconf['realmd']['user']	= 'oregon_user';
$AoWoWconf['realmd']['pass']	= 'oregon_passwd';
$AoWoWconf['realmd']['db']		= 'realmd';

// Site Configuration
$AoWoWconf['aowow']['name'] = 'AoWoW';
$AoWoWconf['aowow']['template'] = 'wowhead';
$AoWoWconf['aowow']['cache_time'] = 0; //(60*60*24*7); // Time to keep cache in seconds (Default: 1 week)
$AoWoWconf['locale'] = 0;
$AoWoWconf['register'] = false;
$AoWoWconf['limit'] = 300;
$AoWoWconf['debug'] = true;
?>
