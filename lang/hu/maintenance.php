<?php

return [
	/*
	|--------------------------------------------------------------------------
	| Update Page
	|--------------------------------------------------------------------------
	*/
	'title' => 'Karbantartás',
	'description' => 'Ezen az oldalon találsz minden olyan beavatkozási lehetőséget amik naprakészen tarthatják a Lychee galériádat.',
	'cleaning' => [
		'title' => 'Tisztítás %s',
		'result' => '%s törölve.',
		'description' => 'Minden tartalom eltávolítása <span class="font-mono">%s</span>',
		'button' => 'Tisztítás',
	],
	'fix-jobs' => [
		'title' => 'Folyamatelőzmények rendezése',
		'description' => 'Folyamatok kijelölése <span class="text-ready-400">%s</span> vagy <span class="text-primary-500">%s</span> mint <span class="text-danger-700">%s</span>állapotban.',
		'button' => 'Rendrakás',
	],
	'gen-sizevariants' => [
		'title' => 'Eltűnt %s',
		'description' => 'Találat %d %s amely előállítható.',
		'button' => 'Csináld!',
		'success' => 'Sikeres létrehozás %d %s.',
	],
	'fill-filesize-sizevariants' => [
		'title' => 'hiányzó fájlméretek',
		'description' => 'Talált %d kis méretű variánsok.',
		'button' => 'Adatgyüjtés!',
		'success' => 'Sikeresen létrehozott %d variánsok.',
	],
	'fix-tree' => [
		'title' => 'Fájl-fa statisztikák',
		'Oddness' => 'Furcsaságok',
		'Duplicates' => 'Duplikátumok',
		'Wrong parents' => 'Rossz szülők',
		'Missing parents' => 'Eltűnt szülők',
		'button' => 'Fájl-fa helyreállítása',
	],
	'optimize' => [
		'title' => 'Adatbázis optimalizálás',
		'description' => 'Ha lassulást veszel észre a működésben, akkor az adatbázisok valószínüleg indexelésre szorulnak.',
		'button' => 'Adatbázisok optimalizálása',
	],
	'update' => [
		'title' => 'Frissítések',
		'check-button' => 'Új frissítések keresése',
		'update-button' => 'Frissítés',
		'no-pending-updates' => 'Nincs függő frissítés.',
	],
];
