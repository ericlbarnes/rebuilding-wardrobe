<?php

/**
 * CSS and HTML Style Guide
 */
Route::get('/styleguide/{theme?}', function($theme = 'light') {

	$modules = [];

	foreach (new DirectoryIterator(__DIR__.'/views/admin/modules') as $file)
	{
		if ($file->isDot()) continue;
		$modules[] = str_replace('.blade.php', '', $file->getFilename());
	}

	return view('wardrobe::admin.styleguide.index', compact('theme', 'modules'));
});