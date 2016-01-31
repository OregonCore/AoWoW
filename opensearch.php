<?php

// Настройки
error_reporting(2039);
require_once 'configs/config.php';
// Для Ajax отключаем debug
$AoWoWconf['debug'] = false;
// Для Ajax ненужен реалм
$AoWoWconf['realmd'] = false;
// Настройка БД
global $DB;
require_once('includes/db.php');

echo '["'.$_GET['search'].'", [';

function SideByRace($race)
{
	switch ($race)
	{
		case '0':
			// Для всех?
			return 3;
		case '690':
			// Орда?
			return 2;
		case '1101':
			// Альянс?
			return 1;
		default:
			return 0;
	}
}

// Ищем вещи:
$rows = $DB->select('
	SELECT entry, name, iconname, quality
	FROM item_template i, ?_icons a
	WHERE
		((i.name LIKE ?)
		AND a.id=i.displayid)
	ORDER BY i.quality DESC, i.name
	LIMIT 3
	',
	'%'.$_GET['search'].'%');

foreach ($rows as $i => $row)
	$found[$row['name'].' (Item)'] = array(
		'type'		=> 3,
		'entry'		=> $row['entry'],
		'iconname'	=> $row['iconname'],
		'quality'	=> $row['quality']
	);

// Ищем объекты:
$rows = $DB->select('
	SELECT entry, name
	FROM gameobject_template
	WHERE
		(name LIKE ?)
	ORDER BY name
	LIMIT 3
	',
	'%'.$_GET['search'].'%'
);

foreach ($rows as $i => $row)
	$found[$row['name'].' (Object)'] = array(
		'type' => 2,
		'entry'=>$row['entry'],
	);

// Ищем квесты:
$rows = $DB->select('
	SELECT entry, Title, RequiredRaces
	FROM quest_template
	WHERE
		(Title LIKE ?)
	ORDER BY Title
	LIMIT 3
	',
	'%'.$_GET['search'].'%'
);

foreach ($rows as $i => $row)
	$found[$row['Title'].' (Quest)'] = array(
		'type' => 5,
		'entry'=> $row['entry'],
		'side' => SideByRace($row['RequiredRaces'])
	);

// Ищем creature:
$rows = $DB->select('
	SELECT entry, name
	FROM creature_template
	WHERE
		(name LIKE ?)
	ORDER BY name
	LIMIT 3
	',
	'%'.$_GET['search'].'%'
);

foreach ($rows as $i => $row)
	$found[$row['name'].' (NPC)'] = array(
		'type' => 1,
		'entry'=> $row['entry']
	);

// Если ничего не найдено...
if (!IsSet($found))
{
	echo ']]';
	die();
}

ksort($found);

$found = array_slice($found, 0, 10);

$i=0;
foreach ($found as $name => $fitem)
{
	echo '"'.str_replace('"','\"',$name).'"';
	if ($i<count($found)-1)
		echo ', ';
	$i++;
}

echo '], [], [], [], [], [], [';

$i=0;
foreach ($found as $name => $fitem)
{
	echo '['.$fitem['type'].', '.$fitem['entry'];
	if (IsSet($fitem['iconname'])) echo ', "'.$fitem['iconname'].'"';
	if (IsSet($fitem['quality'])) echo ", ".$fitem['quality'];
	if (IsSet($fitem['side'])) echo ", ".$fitem['side'];
	echo ']';
	if ($i<count($found)-1)
		echo ',';
	$i++;
}

echo ']]';

?>
