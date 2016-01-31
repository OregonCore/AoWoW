<?php

error_reporting(2039);
set_time_limit(600);
ini_set('serialize_precision', 4);

require_once 'configs/config.php';
require_once 'includes/db.php';
require_once 'includes/smarty.php';

// Таблица соответствия номеров переводов
global $languages;
$languages = array(
	0 => 'enus',
	3 => 'dede',
	//8 => 'ruru',
);
function str_normalize($str)
{
		return str_replace("'", "\'", $str);
}

// Функция разделения строки по точке, например
//  15.12 -> {15,12}
function point_delim(&$str, &$a, &$b)
{
	@list($a, $b) = explode('.', $str, 2);
	return;
}

function CheckPwd($username, $shapass)
{
	// Проверка пароля пользователя
	// -1: пользователя не существует
	//  0: пароли не совпадают
	// >0: id пользователя
	require_once 'includes/DbSimple/Generic.php';
	global $rDB;
	global $AoWoWconf;
	$user_row = $rDB->selectRow('SELECT id, sha_pass_hash, gmlevel FROM account WHERE username=? LIMIT 1', $username);
	if ($user_row)
	{
		if ($shapass==$user_row['sha_pass_hash'])
		{
			$user = array();
			$user['id'] = $user_row['id'];
			$user['name'] = $username;
			$user['roles'] = ($user_row['gmlevel']>0)? 2: 0;
			$user['perms'] = 1;
			return $user;
		} else {
			return 0;
		}
	} else {
		// такого пользователя не существует
		return -1;
	}
}

function create_usersend_pass($user, $pass)
{
	// Хеш-код в зависимости от имени аккаунта и пароля
	return sha1(strtoupper($user).':'.strtoupper($pass));
}

function del_user_cookie()
{
	setcookie ('remember_me', '', time() - 3600);
}
?>
