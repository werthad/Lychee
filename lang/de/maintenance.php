<?php

return [
	/*
	|--------------------------------------------------------------------------
	| Update Page
	|--------------------------------------------------------------------------
	*/
	'title' => 'Maintenance',
	'description' => 'You will find on this page, all the required actions to keep your Lychee installation running smooth and nicely.',
	'cleaning' => [
		'title' => 'Cleaning %s',
		'result' => '%s deleted.',
		'description' => 'Remove all contents from <span class="font-mono">%s</span>',
		'button' => 'Clean',
	],
	'optimize' => [
		'title' => 'Optimize Database',
		'description' => 'If you notice slowdown in your installation, it may be because your database does not
		have all its needed index.',
		'button' => 'Optimize Database',
	],
	'update' => [
		'title' => 'Updates',
		'check-button' => 'auf Updates prüfen',
		'update-button' => 'Update',
		'no-pending-updates' => 'No pending update.',
	],
];