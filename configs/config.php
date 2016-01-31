<?php
global $AoWoWconf;

// -- MaNGOS Database --
$AoWoWconf['mangos']['host']	= '127.0.0.1';
$AoWoWconf['mangos']['user']	= 'trinity';
$AoWoWconf['mangos']['pass']	= 'trinity';
$AoWoWconf['mangos']['db']		= '_a';
$AoWoWconf['mangos']['aowow']	= 'aowow_';

// -- Realmd Database --
$AoWoWconf['realmd']['host']	= '127.0.0.1';
$AoWoWconf['realmd']['user']	= 'trinity';
$AoWoWconf['realmd']['pass']	= 'trinity';
$AoWoWconf['realmd']['db']		= '_r';

// Site Configuration
$AoWoWconf['aowow']['name'] = 'AoWoW';
$AoWoWconf['aowow']['template'] = 'wowhead';
$AoWoWconf['aowow']['cache_time'] = 0; //(60*60*24*7); // Time to keep cache in seconds (Default: 1 week)
$AoWoWconf['locale'] = 3;
$AoWoWconf['register'] = false;
$AoWoWconf['limit'] = 300;
$AoWoWconf['debug'] = true;
?>
