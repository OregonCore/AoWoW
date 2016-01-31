<?
function d($d,$v)
{
	define($d,$v);
}
switch($_SESSION['locale'])
{
	// --- RUSSIAN LOCALE ---
	case '8':
		// quest
		d('LOCALE_REQUIREMENTS', 'Требования');
		// classes
		d('LOCALE_WARRIOR',		'Воин');
		d('LOCALE_PALADIN',		'Паладин');
		d('LOCALE_HUNTER',		'Охотник');
		d('LOCALE_ROGUE',		'Разбойник');
		d('LOCALE_PRIEST',		'Жрец');
		d('LOCALE_DEATH_KNIGHT','Рыцарь Смерти');
		d('LOCALE_SHAMAN',		'Шаман');
		d('LOCALE_MAGE',		'Маг');
		d('LOCALE_WARLOCK',		'Чернокнижник');
		d('LOCALE_DRUID',		'Друид');
		// races
		d('LOCALE_HUMAN',		'Человек');
		d('LOCALE_ORC',			'Орк');
		d('LOCALE_DWARF',		'Дворф');
		d('LOCALE_NIGHT_ELF',	'Ночной Эльф');
		d('LOCALE_UNDED',		'Нежить');
		d('LOCALE_TAUREN',		'Таурен');
		d('LOCALE_GNOME',		'Гном');
		d('LOCALE_TROLL',		'Троль');
		d('LOCALE_BLOOD_ELF',	'Эльф Крови');
		d('LOCALE_DRAENEI',		'Дреней');
		// side
		d('LOCALE_BOTH',		'Обе');
		d('LOCALE_HORDE',		'Орда');
		d('LOCALE_ALLIANCE',	'Альянс');
		// reputation
		d('LOCALE_NEUTRAL',		'Равнодушие');
		d('LOCALE_FRIENDLY',	'Дружелюбие');
		d('LOCALE_HONORED',		'Уважение');
		d('LOCALE_REVERED',		'Почтение');
		d('LOCALE_EXALTED',		'Превознесение');
		// resistances
		d('LOCALE_FIRE_RESISTANCE',		'Сопротивляемость магии Огня');
		d('LOCALE_FROST_RESISTANCE',	'Сопротивляемость магии Льда');
		d('LOCALE_ARCANE_RESISTANCE',	'Сопротивляемость тайной магии');
		d('LOCALE_SHADOW_RESISTANCE',	'Сопротивляемость темной магии');
		d('LOCALE_NATURE_RESISTANCE',	'Сопротивляемость природной магии');
		d('LOCALE_HOLY_RESISTANCE',		'RESISTANCE DOES NOT EXIST');
		// binds
		d('LOCALE_BIND_PICKUP',		'Становится персональным при нахождении');
		d('LOCALE_BIND_EQUIP',		'Становится персональным при надевании');
		d('LOCALE_BIND_USE',		'Становится персональным при использовании');
		d('LOCALE_BIND_SOULBOUND',	'Soulbound');
		d('LOCALE_BIND_QUEST_ITEM',	'Quest Item');
		// bags
		d('LOCALE_BAG',			'Сумка');
		d('LOCALE_BAG_QUIVER',	'Колчан');
		d('LOCALE_BAG_AMMO',	'Подсумок');
		d('LOCALE_BAG_SOUL',	'Сумка душ');
		d('LOCALE_BAG_LEATHER',	'Сумка кожевника');
		d('LOCALE_BAG_HERB',	'Сумка травника');
		d('LOCALE_BAG_ENCHANT',	'Сумка зачаровывателя');
		d('LOCALE_BAG_ENGINEER','Сумка инженера');
		d('LOCALE_BAG_GEM',		'Сумка ювелира');
		d('LOCALE_BAG_MINING',	'Шахтерская сумка');
		// equip slots
		d('LOCALE_EQUIP_HEAD',			'Голова');
		d('LOCALE_EQUIP_NECK',			'Шея');
		d('LOCALE_EQUIP_SHOULDER',		'Плечи');
		d('LOCALE_EQUIP_SHIRT',			'Рубашка');
		d('LOCALE_EQUIP_CHEST',			'Грудь');
		d('LOCALE_EQUIP_WAIST',			'Пояс');
		d('LOCALE_EQUIP_LEGS',			'Ноги');
		d('LOCALE_EQUIP_FEET',			'Ступни');
		d('LOCALE_EQUIP_WRIST',			'Запястья');
		d('LOCALE_EQUIP_HANDS',			'Кисть руки');
		d('LOCALE_EQUIP_FINGER',		'Палец');
		d('LOCALE_EQUIP_TRINKET',		'Аксессуар');
		d('LOCALE_EQUIP_ONEHAND',		'Одноручный');
		d('LOCALE_EQUIP_OFFHAND',		'Под левую руку');
		d('LOCALE_EQUIP_RANGED',		'Для дальнего боя');
		d('LOCALE_EQUIP_BACK',			'Спина');
		d('LOCALE_EQUIP_TWOHAND',		'Двуручный');
		d('LOCALE_EQUIP_UNK0',			''); // bag
		d('LOCALE_EQUIP_TABARD',		'Гербовая накидка');
		d('LOCALE_EQUIP_MAINHAND',		'Под правую руку');
		d('LOCALE_EQUIP_CHEST2',		'Грудь');
		d('LOCALE_EQUIP_OFFHAND2',		'Под левую руку');
		d('LOCALE_EQUIP_HELDINOFFHAND',	'Держится в левой руке');
		d('LOCALE_EQUIP_PROJECTILE',	'Снаряд');
		d('LOCALE_EQUIP_THROWN',		'Метательное оружие');
		d('LOCALE_EQUIP_RANGED2',		'Для дальнего боя');
		d('LOCALE_EQUIP_UNK1',			''); // quiver
		d('LOCALE_EQUIP_RELIC',			'Реликвия');
		// armor type
		d('LOCALE_ARMOR_CLOTH',			'Ткань');
		d('LOCALE_ARMOR_LEATHER',		'Кожа');
		d('LOCALE_ARMOR_MAIL',			'Кольчуга');
		d('LOCALE_ARMOR_PLATE',			'Латы');
		d('LOCALE_ARMOR_BUCKLER',		'');
		d('LOCALE_ARMOR_SHIELD',		'Щит');
		d('LOCALE_ARMOR_LIBRAM',		'Манускрипт');
		d('LOCALE_ARMOR_IDOL',			'Идол');
		d('LOCALE_ARMOR_TOTEM',			'Тотем');
		// weapon type
		d('LOCALE_WEAPON_AXE1H',		'Топор');
		d('LOCALE_WEAPON_AXE2H',		'Топор');
		d('LOCALE_WEAPON_BOW',			'Лук');
		d('LOCALE_WEAPON_GUN',			'Огнестрельное');
		d('LOCALE_WEAPON_MACE1H',		'Ударное');
		d('LOCALE_WEAPON_MACE2H',		'Ударное');
		d('LOCALE_WEAPON_POLEARM',		'Древковое');
		d('LOCALE_WEAPON_SWORD1H',		'Меч');
		d('LOCALE_WEAPON_SWORD2H',		'Меч');
		d('LOCALE_WEAPON_OBSOLETE',		'');
		d('LOCALE_WEAPON_STAFF',		'Посох');
		d('LOCALE_WEAPON_EXOTIC',		'');
		d('LOCALE_WEAPON_EXOTIC2',		'');
		d('LOCALE_WEAPON_FIST',			'Кистевое');
		d('LOCALE_WEAPON_MISC',			'');
		d('LOCALE_WEAPON_DAGGER',		'Кинжал');
		d('LOCALE_WEAPON_THROWN',		'Метательное');
		d('LOCALE_WEAPON_SPEAR',		'');
		d('LOCALE_WEAPON_CROSSBOW',		'Арбалет');
		d('LOCALE_WEAPON_WAND',			'Жезл');
		d('LOCALE_WEAPON_FISHINGPOLE',	'Удочка');
		// projectile type
		d('LOCALE_PROJECTILE_WAND',		'');
		d('LOCALE_PROJECTILE_BOLT',		'');
		d('LOCALE_PROJECTILE_ARROW',	'Стрелы');
		d('LOCALE_PROJECTILE_BULLET',	'Пули');
		d('LOCALE_PROJECTILE_THROWN',	'');
		// damage
		d('LOCALE_DAMAGE_PRE',			' Урон ');
		d('LOCALE_DAMAGE_POST',			'');
		d('LOCALE_DAMAGE_HOLY', 		'');
		d('LOCALE_DAMAGE_FIRE', 		'от магии Огня');
		d('LOCALE_DAMAGE_FROST', 		'от магии Льда');
		d('LOCALE_DAMAGE_ARCANE', 		'от тайной магии');
		d('LOCALE_DAMAGE_SHADOW', 		'от темной магии');
		d('LOCALE_DAMAGE_NATURE', 		'');
		// stats
		d('LOCALE_STAT_STRENGTH',		' Сила');
		d('LOCALE_STAT_STAMINA',		' Выносливость');
		d('LOCALE_STAT_INTELLECT',		' Интеллект');
		d('LOCALE_STAT_SPIRIT',			' Дух');
		d('LOCALE_STAT_AGILITY',		' Ловкость');
		// green bonuses
		d('LOCALE_GBONUS_DEFENCE',				'При надевании: Увеличение рейтинга защиты на %d ед.');
		d('LOCALE_GBONUS_DODGE',				'При надевании: повышает уровень уворачивания на %d.');
		d('LOCALE_GBONUS_PARRY',				'При надевании: повышает уровень парирования ударов на %d.');
		d('LOCALE_GBONUS_SHIELDBLOCK',			'При надевании: повышает уровень отражения ударов на %d.');
		d('LOCALE_GBONUS_SPELLHIT_RATING',		'При надевании: повышает уровень меткости при использовании заклинания на %d.');
		d('LOCALE_GBONUS_MELEECRIT_RATING',		'bonusCritMeleeRating %d');		// eu armory uses this
		d('LOCALE_GBONUS_RANGEDCRIT_RATING',	'bonusCritRangedRating %d');
		d('LOCALE_GBONUS_SPELLCRIT_RATING',		'При надевании: повышает уровень вероятности критического удара при использовании заклинания на %d.');
		d('LOCALE_GBONUS_SPELLHASTE_RATING',	'При надевании: повышает частоту ударов при использования заклинания на %d.');
		d('LOCALE_GBONUS_HIT_RATING',			'При надевании: Увеличение рейтинга меткости на %d ед.');
		d('LOCALE_GBONUS_CRIT_RATING',			'При надевании: повышает уровень вероятности критического удара на %d.');
		d('LOCALE_GBONUS_RESILIENCE_RATING',	'При надевании: повышает уровень стойкости на %d.');
		d('LOCALE_GBONUS_HASTE_RATING',			'При надевании: повышает частоту ударов на %d.');
		d('LOCALE_GBONUS_EXPERTISE_RATING',		'При надевании: повышает уровень мастерства на %d.');
		d('LOCALE_GBONUS_UNKNOWN',				'<span class="q7">Неизвестный Бонус</span>');
		d('LOCALE_GBONUS_CHANCEONHIT',			'Вероятность попадания при ударе: ');
		d('LOCALE_GBONUS_EQUIP',				'При надевании: ');
		d('LOCALE_GBONUS_USE',					'Использование: ');
		// sockets
		d('LOCALE_SOCKET_META',		'Мета-оправа');
		d('LOCALE_SOCKET_RED',		'Красная оправа');
		d('LOCALE_SOCKET_YELLOW',	'Желтая оправа');
		d('LOCALE_SOCKET_BLUE',		'Синяя оправа');

		// misc
		d('LOCALE_SPEED',				'Скорость');
		d('LOCALE_UNIQUE',				'Уникальный');
		d('LOCALE_START_QUEST',			'Позволяет получить новое задание');
		d('LOCALE_SLOT',				' Ячейка ');
		d('LOCALE_DPS',					'Единиц урона в секунду');
		d('LOCALE_DPS2',				'урон в секунду');
		d('LOCALE_DPS_ADDS',			'Увеличивает');
		d('LOCALE_ARMOR',				'Броня');
		d('LOCALE_BLOCK',				'Способность отражать удары');
		d('LOCALE_REQUIRES',			'Требует');
		d('LOCALE_REQUIRES_LEVEL',		'Требует уровень');
		d('LOCALE_DURABILITY',			'Прочность:');
		d('LOCALE_CLASSES',				'Классы');

		break;
	// --- GERMAN LOCALE ---
	case '3':
		// quest
		d('LOCALE_REQUIREMENTS','Anforderungen');
		// classes
		d('LOCALE_WARRIOR'	,'Krieger');
		d('LOCALE_PALADIN'	,'Paladin');
		d('LOCALE_HUNTER'		,'Jäger');
		d('LOCALE_ROGUE'		,'Schurke');
		d('LOCALE_PRIEST'		,'Priester');
		d('LOCALE_DEATH_KNIGHT','Todesritter');
		d('LOCALE_SHAMAN'		,'Schamane');
		d('LOCALE_MAGE'		,'Magier');
		d('LOCALE_WARLOCK'	,'Hexenmeister');
		d('LOCALE_DRUID'		,'Druide');
		// races
		d('LOCALE_HUMAN'		,'Mensch');
		d('LOCALE_ORC'		,'Orc');
		d('LOCALE_DWARF'		,'Zwerg');
		d('LOCALE_NIGHT_ELF'	,'Nachtelf');
		d('LOCALE_UNDED'		,'Untoter');
		d('LOCALE_TAUREN'		,'Taure');
		d('LOCALE_GNOME'		,'Gnom');
		d('LOCALE_TROLL'		,'Troll');
		d('LOCALE_BLOOD_ELF'	,'Butelf');
		d('LOCALE_DRAENEI'	,'Draenei');
		// side
		d('LOCALE_BOTH','Beide');
		d('LOCALE_HORDE'		,'Horde');
		d('LOCALE_ALLIANCE'	,'Allianz');
		// reputation
		d('LOCALE_NEUTRAL','Neutral');
		d('LOCALE_FRIENDLY','Freundlich');
		d('LOCALE_HONORED','Wohlwollend');
		d('LOCALE_REVERED','Respektvoll');
		d('LOCALE_EXALTED','Ehrfürchtig');
		// resistances
		d('LOCALE_FIRE_RESISTANCE','Feuerwiderstand');
		d('LOCALE_FROST_RESISTANCE','Frostwiderstand');
		d('LOCALE_ARCANE_RESISTANCE','Arkanwiderstand');
		d('LOCALE_SHADOW_RESISTANCE','Schattenwiderstand');
		d('LOCALE_NATURE_RESISTANCE','Naturwiderstand');
		d('LOCALE_HOLY_RESISTANCE','RESISTANCE DOES NOT EXIST');
		// binds
		d('LOCALE_BIND_PICKUP'	,'Beim Aufheben gebunden');
		d('LOCALE_BIND_EQUIP'		,'Beim Anlegen gebunden');
		d('LOCALE_BIND_USE'		,'Bei Benutzung gebunden');
		d('LOCALE_BIND_SOULBOUND'	,'Seelengebunden');
		d('LOCALE_BIND_QUEST_ITEM','Questitem');
		// bags
		d('LOCALE_BAG'		,'Tasche');
		d('LOCALE_BAG_QUIVER'	,'Köcher');
		d('LOCALE_BAG_AMMO'	,'Munitionsbeutel');
		d('LOCALE_BAG_SOUL'	,'Seelentasche');
		d('LOCALE_BAG_LEATHER','Lederertasche');
		d('LOCALE_BAG_HERB'	,'Kräutertasche');
		d('LOCALE_BAG_ENCHANT','Verzauberertasche');
		d('LOCALE_BAG_ENGINEER','Ingenieurstasche');
		d('LOCALE_BAG_GEM'	,'Edelsteintasche');
		d('LOCALE_BAG_MINING'	,'Bergbautasche');
		// equip slots
		d('LOCALE_EQUIP_HEAD'			,'Kopf');
		d('LOCALE_EQUIP_NECK'			,'Hals');
		d('LOCALE_EQUIP_SHOULDER'		,'Schulter');
		d('LOCALE_EQUIP_SHIRT'		,'Hemd');
		d('LOCALE_EQUIP_CHEST'		,'Brust');
		d('LOCALE_EQUIP_WAIST'		,'Taille');
		d('LOCALE_EQUIP_LEGS'			,'Beine');
		d('LOCALE_EQUIP_FEET'			,'Füße');
		d('LOCALE_EQUIP_WRIST'		,'Handgelenke');
		d('LOCALE_EQUIP_HANDS'		,'Hände');
		d('LOCALE_EQUIP_FINGER'		,'Finger');
		d('LOCALE_EQUIP_TRINKET'		,'Schmuck');
		d('LOCALE_EQUIP_ONEHAND'		,'Einhändig');
		d('LOCALE_EQUIP_OFFHAND'		,'Schildhand');
		d('LOCALE_EQUIP_RANGED'		,'Distanz');
		d('LOCALE_EQUIP_BACK'			,'Rücken');
		d('LOCALE_EQUIP_TWOHAND'		,'Zweihändig');
		d('LOCALE_EQUIP_UNK0'			,'');
		d('LOCALE_EQUIP_TABARD'		,'Wappenrock');
		d('LOCALE_EQUIP_MAINHAND'		,'Waffenhand');
		d('LOCALE_EQUIP_CHEST2'		,'Brust');
		d('LOCALE_EQUIP_OFFHAND2'		,'Schildhand');
		d('LOCALE_EQUIP_HELDINOFFHAND','In der Schildhand getragen');
		d('LOCALE_EQUIP_PROJECTILE'	,'Projektil');
		d('LOCALE_EQUIP_THROWN'		,'Wurfwaffe');
		d('LOCALE_EQUIP_RANGED2'		,'Distanz');
		d('LOCALE_EQUIP_UNK1'			,'');
		d('LOCALE_EQUIP_RELIC'		,'Relikt');
		// armor type
		d('LOCALE_ARMOR_CLOTH','Stoff');
		d('LOCALE_ARMOR_LEATHER','Leder');
		d('LOCALE_ARMOR_MAIL'	,'Schwere Rüstung');
		d('LOCALE_ARMOR_PLATE','Platte');
		d('LOCALE_ARMOR_BUCKLER','');
		d('LOCALE_ARMOR_SHIELD','Schild');
		d('LOCALE_ARMOR_LIBRAM','Buchband');
		d('LOCALE_ARMOR_IDOL'	,'Götze');
		d('LOCALE_ARMOR_TOTEM','Totem');
		// weapon type
		d('LOCALE_WEAPON_AXE1H'	,'Einhandaxt');
		d('LOCALE_WEAPON_AXE2H'	,'Zweihandaxt');
		d('LOCALE_WEAPON_BOW'		,'Bogen');
		d('LOCALE_WEAPON_GUN'		,'Schusswaffe');
		d('LOCALE_WEAPON_MACE1H'	,'Einhandstreitkolben');
		d('LOCALE_WEAPON_MACE2H'	,'Zweihandstreitkolben');
		d('LOCALE_WEAPON_POLEARM'	,'Stangenwaffe');
		d('LOCALE_WEAPON_SWORD1H'	,'Einhandschwert');
		d('LOCALE_WEAPON_SWORD2H'	,'Zweihandschwert');
		d('LOCALE_WEAPON_OBSOLETE','');
		d('LOCALE_WEAPON_STAFF'	,'Stab');
		d('LOCALE_WEAPON_EXOTIC'	,'');
		d('LOCALE_WEAPON_EXOTIC2'	,'');
		d('LOCALE_WEAPON_FIST'	,'Faustwaffe');
		d('LOCALE_WEAPON_MISC'	,'Diverse');
		d('LOCALE_WEAPON_DAGGER'	,'Dolche');
		d('LOCALE_WEAPON_THROWN'	,'Wurfwaffe');
		d('LOCALE_WEAPON_SPEAR'	,'');
		d('LOCALE_WEAPON_CROSSBOW','Armbrust');
		d('LOCALE_WEAPON_WAND'	,'Zauberstab');
		d('LOCALE_WEAPON_FISHINGPOLE','Angelrute');
		// projectile type
		d('LOCALE_PROJECTILE_WAND','');
		d('LOCALE_PROJECTILE_BOLT','');
		d('LOCALE_PROJECTILE_ARROW','Pfeil');
		d('LOCALE_PROJECTILE_BULLET','Kugel');
		d('LOCALE_PROJECTILE_THROWN','');
		// damage
		d('LOCALE_DAMAGE_PRE'	,' ');
		d('LOCALE_DAMAGE_POST','schaden');
		d('LOCALE_DAMAGE_HOLY','Heilig');
		d('LOCALE_DAMAGE_FIRE','Feuer');
		d('LOCALE_DAMAGE_FROST','Frost');
		d('LOCALE_DAMAGE_ARCANE','Arkan');
		d('LOCALE_DAMAGE_SHADOW','Schatten');
		d('LOCALE_DAMAGE_NATURE','Natur');
		// stats
		d('LOCALE_STAT_STRENGTH',' Stärke');
		d('LOCALE_STAT_STAMINA',' Ausdauer');
		d('LOCALE_STAT_INTELLECT',' Intelligenz');
		d('LOCALE_STAT_SPIRIT',' Willenskraft');
		d('LOCALE_STAT_AGILITY',' Beweglichkeit');
		// green bonuses
		d('LOCALE_GBONUS_DEFENCE'			,'Erhöht Verteidigungswertung um %d.');
		d('LOCALE_GBONUS_DODGE'			,'Erhöht Eure Ausweichwertung um %d.');
		d('LOCALE_GBONUS_PARRY'			,'Erhöht Eure Parierwertung um %d.');
		d('LOCALE_GBONUS_SHIELDBLOCK'		,'Erhöht Eure Blockwertung um %d.');
		d('LOCALE_GBONUS_SPELLHIT_RATING'	,'Erhöht Zaubertrefferwertung um %d.');
		d('LOCALE_GBONUS_MELEECRIT_RATING','Erhöht kritische Nahkampftrefferwertung um %d.');
		d('LOCALE_GBONUS_RANGEDCRIT_RATING','Erhöht kritische Fernkampftrefferwertung um %d.');
		d('LOCALE_GBONUS_SPELLCRIT_RATING','Erhöht kritische Zaubertrefferwertung um %d.');
		d('LOCALE_GBONUS_SPELLHASTE_RATING','Erhöht Zaubertempowertung um %d.');
		d('LOCALE_GBONUS_HIT_RATING'		,'Erhöht Eure Trefferwertung um %d.');
		d('LOCALE_GBONUS_CRIT_RATING'		,'Erhöht Eure kritische Trefferwertung um %d.');
		d('LOCALE_GBONUS_RESILIENCE_RATING','Erhöht Eure Abhärtungswertung um %d.');
		d('LOCALE_GBONUS_HASTE_RATING'	,'Erhöht Tempowertung um %d.');
		d('LOCALE_GBONUS_EXPERTISE_RATING','Erhöht Eure Waffenkundewertung um %d.');
		d('LOCALE_GBONUS_UNKNOWN'			,'Unbekannter Bonus #%d');
		d('LOCALE_GBONUS_CHANCEONHIT'		,'Chance bei Treffer: ');
		d('LOCALE_GBONUS_EQUIP'			,'Anlegen: ');
		d('LOCALE_GBONUS_USE'				,'Benutzen: ');
		// sockets
		d('LOCALE_SOCKET_META','Metasockel');
		d('LOCALE_SOCKET_RED'	,'Roter Sockel');
		d('LOCALE_SOCKET_YELLOW','Gelber Sockel');
		d('LOCALE_SOCKET_BLUE','Blauer Sockel');
		
		// misc
		d('LOCALE_SPEED'		,'Geschwindigkeit');
		d('LOCALE_UNIQUE'		,'Einzigartig');
		d('LOCALE_START_QUEST','Dieser Gegenstand startet eine Quest');
		d('LOCALE_SLOT'		,' Platz ');
		d('LOCALE_DPS'		,'Schaden pro Sekunde');
		d('LOCALE_DPS2'		,'Schaden pro Sekunde');
		d('LOCALE_DPS_ADDS'	,'Adds');
		d('LOCALE_ARMOR'		,'Rüstung');
		d('LOCALE_BLOCK'		,'Blocken');
		d('LOCALE_REQUIRES'	,'Benötigt');
		d('LOCALE_REQUIRES_LEVEL','Benötigt Stufe');
		d('LOCALE_DURABILITY'	,'Haltbarkeit');
		d('LOCALE_CLASSES'	,'Klassen');
		break;
	// --- ENGLISH default LOCALE ---
	default:
		// quest
		d('LOCALE_REQUIREMENTS', 'Requirements');
		// classes
		d('LOCALE_WARRIOR',		'Warrior');
		d('LOCALE_PALADIN',		'Paladin');
		d('LOCALE_HUNTER',		'Hunter');
		d('LOCALE_ROGUE',		'Rogue');
		d('LOCALE_PRIEST',		'Priest');
		d('LOCALE_DEATH_KNIGHT','Death Knight');
		d('LOCALE_SHAMAN',		'Shaman');
		d('LOCALE_MAGE',		'Mage');
		d('LOCALE_WARLOCK',		'Warlock');
		d('LOCALE_DRUID',		'Druid');
		// races
		d('LOCALE_HUMAN',		'Human');
		d('LOCALE_ORC',			'Orc');
		d('LOCALE_DWARF',		'Dwarf');
		d('LOCALE_NIGHT_ELF',	'Night Elf');
		d('LOCALE_UNDED',		'Undead');
		d('LOCALE_TAUREN',		'Tauren');
		d('LOCALE_GNOME',		'Gnome');
		d('LOCALE_TROLL',		'Troll');
		d('LOCALE_BLOOD_ELF',	'Blood Elf');
		d('LOCALE_DRAENEI',		'Draenei');
		// side
		d('LOCALE_BOTH',		'Both');
		d('LOCALE_HORDE',		'Horde');
		d('LOCALE_ALLIANCE',	'Alliance');
		// reputation
		d('LOCALE_NEUTRAL',		'Neutral');
		d('LOCALE_FRIENDLY',	'Friendly');
		d('LOCALE_HONORED',		'Honored');
		d('LOCALE_REVERED',		'Revered');
		d('LOCALE_EXALTED',		'Exalted');
		// resistances
		d('LOCALE_FIRE_RESISTANCE',		'Fire Resistance');
		d('LOCALE_FROST_RESISTANCE',	'Frost Resistance');
		d('LOCALE_ARCANE_RESISTANCE',	'Arcane Resistance');
		d('LOCALE_SHADOW_RESISTANCE',	'Shadow Resistance');
		d('LOCALE_NATURE_RESISTANCE',	'Nature Resistance');
		d('LOCALE_HOLY_RESISTANCE',		'RESISTANCE DOES NOT EXIST');
		// binds
		d('LOCALE_BIND_PICKUP',		'Binds when picked up');
		d('LOCALE_BIND_EQUIP',		'Binds when equipped');
		d('LOCALE_BIND_USE',		'Binds when used');
		d('LOCALE_BIND_SOULBOUND',	'Soulbound');
		d('LOCALE_BIND_QUEST_ITEM',	'Quest Item');
		// bags
		d('LOCALE_BAG',			'Bag');
		d('LOCALE_BAG_QUIVER',	'Quiver');
		d('LOCALE_BAG_AMMO',	'Ammo Pouch');
		d('LOCALE_BAG_SOUL',	'Soul Bag');
		d('LOCALE_BAG_LEATHER',	'Leatherworking Bag');
		d('LOCALE_BAG_HERB',	'Herb Bag');
		d('LOCALE_BAG_ENCHANT',	'Enchanting bag');
		d('LOCALE_BAG_ENGINEER','Engineering Bag');
		d('LOCALE_BAG_GEM',		'Gem Bag');
		d('LOCALE_BAG_MINING',	'Mining Bag');
		// equip slots
		d('LOCALE_EQUIP_HEAD',			'Head');
		d('LOCALE_EQUIP_NECK',			'Neck');
		d('LOCALE_EQUIP_SHOULDER',		'Shoulder');
		d('LOCALE_EQUIP_SHIRT',			'Shirt');
		d('LOCALE_EQUIP_CHEST',			'Chest');
		d('LOCALE_EQUIP_WAIST',			'Waist');
		d('LOCALE_EQUIP_LEGS',			'Legs');
		d('LOCALE_EQUIP_FEET',			'Feet');
		d('LOCALE_EQUIP_WRIST',			'Wrist');
		d('LOCALE_EQUIP_HANDS',			'Hands');
		d('LOCALE_EQUIP_FINGER',		'Finger');
		d('LOCALE_EQUIP_TRINKET',		'Trinket');
		d('LOCALE_EQUIP_ONEHAND',		'One-hand');
		d('LOCALE_EQUIP_OFFHAND',		'Off Hand');
		d('LOCALE_EQUIP_RANGED',		'Ranged');
		d('LOCALE_EQUIP_BACK',			'Back');
		d('LOCALE_EQUIP_TWOHAND',		'Two-hand');
		d('LOCALE_EQUIP_UNK0',			'');
		d('LOCALE_EQUIP_TABARD',		'Tabard');
		d('LOCALE_EQUIP_MAINHAND',		'Main Hand');
		d('LOCALE_EQUIP_CHEST2',		'Chest');
		d('LOCALE_EQUIP_OFFHAND2',		'Off Hand');
		d('LOCALE_EQUIP_HELDINOFFHAND',	'Held In Off-Hand');
		d('LOCALE_EQUIP_PROJECTILE',	'Projectile');
		d('LOCALE_EQUIP_THROWN',		'Thrown');
		d('LOCALE_EQUIP_RANGED2',		'Ranged');
		d('LOCALE_EQUIP_UNK1',			'');
		d('LOCALE_EQUIP_RELIC',			'Relic');
		// armor type
		d('LOCALE_ARMOR_CLOTH',			'Cloth');
		d('LOCALE_ARMOR_LEATHER',		'Leather');
		d('LOCALE_ARMOR_MAIL',			'Mail');
		d('LOCALE_ARMOR_PLATE',			'Plate');
		d('LOCALE_ARMOR_BUCKLER',		'');
		d('LOCALE_ARMOR_SHIELD',		'Shield');
		d('LOCALE_ARMOR_LIBRAM',		'Libram');
		d('LOCALE_ARMOR_IDOL',			'Idol');
		d('LOCALE_ARMOR_TOTEM',			'Totem');
		// weapon type
		d('LOCALE_WEAPON_AXE1H',		'Axe');
		d('LOCALE_WEAPON_AXE2H',		'Axe');
		d('LOCALE_WEAPON_BOW',			'Bow');
		d('LOCALE_WEAPON_GUN',			'Gun');
		d('LOCALE_WEAPON_MACE1H',		'Mace');
		d('LOCALE_WEAPON_MACE2H',		'Mace');
		d('LOCALE_WEAPON_POLEARM',		'Polearm');
		d('LOCALE_WEAPON_SWORD1H',		'Sword');
		d('LOCALE_WEAPON_SWORD2H',		'Sword');
		d('LOCALE_WEAPON_OBSOLETE',		'');
		d('LOCALE_WEAPON_STAFF',		'Staff');
		d('LOCALE_WEAPON_EXOTIC',		'');
		d('LOCALE_WEAPON_EXOTIC2',		'');
		d('LOCALE_WEAPON_FIST',			'Fist Weapon');
		d('LOCALE_WEAPON_MISC',			'Miscellaneous');
		d('LOCALE_WEAPON_DAGGER',		'Dagger');
		d('LOCALE_WEAPON_THROWN',		'Thrown');
		d('LOCALE_WEAPON_SPEAR',		'');
		d('LOCALE_WEAPON_CROSSBOW',		'Crossbow');
		d('LOCALE_WEAPON_WAND',			'Wand');
		d('LOCALE_WEAPON_FISHINGPOLE',	'Fishing Pole');
		// projectile type
		d('LOCALE_PROJECTILE_WAND',		'');
		d('LOCALE_PROJECTILE_BOLT',		'');
		d('LOCALE_PROJECTILE_ARROW',	'Arrow');
		d('LOCALE_PROJECTILE_BULLET',	'Bullet');
		d('LOCALE_PROJECTILE_THROWN',	'');
		// damage
		d('LOCALE_DAMAGE_PRE',			' ');
		d('LOCALE_DAMAGE_POST',			' Damage');
		d('LOCALE_DAMAGE_HOLY', 		'Holy');
		d('LOCALE_DAMAGE_FIRE', 		'Fire');
		d('LOCALE_DAMAGE_FROST', 		'Frost');
		d('LOCALE_DAMAGE_ARCANE', 		'Arcane');
		d('LOCALE_DAMAGE_SHADOW', 		'Shadow');
		d('LOCALE_DAMAGE_NATURE', 		'Nature');
		// stats
		d('LOCALE_STAT_STRENGTH',		' Strength');
		d('LOCALE_STAT_STAMINA',		' Stamina');
		d('LOCALE_STAT_INTELLECT',		' Intellect');
		d('LOCALE_STAT_SPIRIT',			' Spirit');
		d('LOCALE_STAT_AGILITY',		' Agility');
		// green bonuses
		d('LOCALE_GBONUS_DEFENCE',				'Equip: Increases defense rating by %d.');
		d('LOCALE_GBONUS_DODGE',				'Equip: Increases your dodge rating by %d.');
		d('LOCALE_GBONUS_PARRY',				'Equip: Increases your parry rating by %d.');
		d('LOCALE_GBONUS_SHIELDBLOCK',			'Equip: Increases your shield block rating by %d.');
		d('LOCALE_GBONUS_SPELLHIT_RATING',		'Equip: Improves spell hit rating by %d.');
		d('LOCALE_GBONUS_MELEECRIT_RATING',		'Equip: Improves melee critical strike rating by %d.');
		d('LOCALE_GBONUS_RANGEDCRIT_RATING',	'Equip: Improves ranged critical strike rating by $d.');
		d('LOCALE_GBONUS_SPELLCRIT_RATING',		'Equip: Improves spell critical strike rating by %d.');
		d('LOCALE_GBONUS_SPELLHASTE_RATING',	'Equip: Improves spell haste rating by %d.');
		d('LOCALE_GBONUS_HIT_RATING',			'Equip: Increases your hit rating by %d.');
		d('LOCALE_GBONUS_CRIT_RATING',			'Equip: Increases your critical strike rating by %d.');
		d('LOCALE_GBONUS_RESILIENCE_RATING',	'Equip: Improves your resilience rating by %d.');
		d('LOCALE_GBONUS_HASTE_RATING',			'Equip: Improves haste rating by %d.');
		d('LOCALE_GBONUS_EXPERTISE_RATING',		'Equip: Increases your expertise rating by %d.');
		d('LOCALE_GBONUS_UNKNOWN',				'Unknown Bonus');
		d('LOCALE_GBONUS_CHANCEONHIT',			'Chance on hit: ');
		d('LOCALE_GBONUS_EQUIP',				'Equip: ');
		d('LOCALE_GBONUS_USE',					'Use: ');
		// sockets
		d('LOCALE_SOCKET_META',		'Meta Socket');
		d('LOCALE_SOCKET_RED',		'Red Socket');
		d('LOCALE_SOCKET_YELLOW',	'Yellow Socket');
		d('LOCALE_SOCKET_BLUE',		'Blue Socket');
		
		// misc
		d('LOCALE_SPEED',				'Speed');
		d('LOCALE_UNIQUE',				'Unique');
		d('LOCALE_START_QUEST',			'This Item Begins a Quest');
		d('LOCALE_SLOT',				' Slot ');
		d('LOCALE_DPS',					'damage per second');
		d('LOCALE_DPS2',				'damage per second');
		d('LOCALE_DPS_ADDS',			'Adds');
		d('LOCALE_ARMOR',				'Armor');
		d('LOCALE_BLOCK',				'Block');
		d('LOCALE_REQUIRES',			'Requires');
		d('LOCALE_REQUIRES_LEVEL',		'Requires Level');
		d('LOCALE_DURABILITY',			'Durability');
		d('LOCALE_CLASSES',				'Classes');
}
?>