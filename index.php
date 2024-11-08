<?php

load([
		'IndexBlock' => __DIR__ . '/models/index-block.php'
]);

Kirby::plugin('swiegmann/index-block', [
	'options' => [
		'filterPath' => kirby()->root('site') . '/helpers/index-block/filters',
		'snippetPath' => kirby()->root('snippets') .'/index-block',
		'paginationCurrentPageCssClass' => 'active',
		'paginationUrlArgument' => 'p'
	],


	'blockModels' => [
		'index' => IndexBlock::class
	],


	'blueprints' => [
		'blocks/index' => __DIR__ . '/blueprints/blocks/index.yml',
		'tabs/index-block' => __DIR__ . '/blueprints/tabs/index-block.yml',
		'groups/index-block-entries' => __DIR__ . '/blueprints/groups/index-block-entries.yml',
		'groups/index-block-custom-entry-fields' => __DIR__ . '/blueprints/groups/index-block-custom-entry-fields.yml',
		'groups/index-block-list' => __DIR__ . '/blueprints/groups/index-block-list.yml',
		'groups/index-block-custom-list-fields' => __DIR__ . '/blueprints/groups/index-block-custom-list-fields.yml',
		'groups/index-block-pages' => __DIR__ . '/blueprints/groups/index-block-pages.yml',
		'groups/index-block-pagination' => __DIR__ . '/blueprints/groups/index-block-pagination.yml',
		'groups/index-block-snippets' => __DIR__ . '/blueprints/groups/index-block-snippets.yml'
	],


	'snippets' => [
		'blocks/index' => __DIR__ . '/snippets/blocks/index.php',
		'index-block' => __DIR__ . '/snippets/index-block.php',
		'index-block-entry' => __DIR__ . '/snippets/index-block-entry.php',
		'index-block-navigation' => __DIR__ . '/snippets/index-block-navigation.php',
		'index-block-pagination' => __DIR__ . '/snippets/index-block-pagination.php',
		'index-block-menu-item' => __DIR__ . '/snippets/index-block-menu-item.php'
	],


	'translations' => [
		'en' => require_once __DIR__ . '/translations/en.php',
		'de' => require_once __DIR__ . '/translations/de.php'
	],


	'siteMethods' => [
		'indexBlockGetOption' => function(string $key = null, mixed $default = null) {
			return kirby()->option('swiegmann.index-block' . ($key ? '.'. $key : ''), $default);
		},


		'_indexBlockPanelGetFilterFileHelpTranslation' => function() {
			$path = str_replace(
				kirby()->root(),
				'..',
				kirby()->site()->indexBlockGetOption('filterPath'),
			);

			return str_replace(
				'%path',
				$path,
				t('index-block.fields.filter_file.help')
			);
		},


		'_indexBlockPanelGetSnippetFileHelpTranslation' => function($key) {
			$path = str_replace(
				kirby()->root(),
				'..',
				kirby()->site()->indexBlockGetOption('snippetPath'),
			);

			return str_replace(
				'%path',
				$path,
				t($key)
			);
		},


		'_indexBlockCorrectPath' => function(string $src) {
			return str_replace(
				array('\\', '/'),
				DIRECTORY_SEPARATOR,
				$src
			);
		},


		'_indexBlockPanelGetBlueprints' => function() {
			$result = [];

			$blueprints = kirby()->blueprints();

			foreach ($blueprints as $name) {
				$blueprint = Kirby\Cms\Blueprint::load('pages/'. $name);

				$result[] = [
					'value' => $name,
					'title' => $blueprint['title']
				];
			}

			return $result;
		},


		'_indexBlockPanelGetFilterFiles' => function() {
			$result = [];

			$rootPath = $this->_indexBlockCorrectPath(
				kirby()->site()->indexBlockGetOption('filterPath')
			);

			$files = glob($rootPath .'/*.php');

			foreach($files as $src) {
				$filename = pathinfo($src)['basename'];

				$result[] = [
					'value' => $filename,
					'title' => $filename
				];
			}

			return $result;
		},


		'_indexBlockPanelGetSnippetFiles' => function() {
			$result = [];

			$rootPath = $this->_indexBlockCorrectPath(
				kirby()->site()->indexBlockGetOption('snippetPath')
			);

			$files = glob($rootPath .'/*.php');

			foreach($files as $src) {
				$pathinfo = pathinfo($src);

				$result[] = [
					'value' => $pathinfo['filename'],
					'title' => $pathinfo['basename']
				];
			}

			return $result;
		}
	]
]);