<?php

load([
		'BlockIndex' => __DIR__ . '/models/block-index.php'
]);

Kirby::plugin('swiegmann/block-index', [
	'options' => [
		'filterPath' => kirby()->root('site') . '/helpers/block-index/filters',
		'snippetPath' => kirby()->root('snippets') .'/block-index',
		'paginationUrlArgument' => 'p'
	],


	'blockModels' => [
		'index' => BlockIndex::class
	],


	'blueprints' => [
		'blocks/index' => __DIR__ . '/blueprints/blocks/index.yml',
		'tabs/block-index' => __DIR__ . '/blueprints/tabs/block-index.yml',
		'groups/block-index-entries' => __DIR__ . '/blueprints/groups/block-index-entries.yml',
		'groups/block-index-custom-entry-fields' => __DIR__ . '/blueprints/groups/block-index-custom-entry-fields.yml',
		'groups/block-index-list' => __DIR__ . '/blueprints/groups/block-index-list.yml',
		'groups/block-index-custom-list-fields' => __DIR__ . '/blueprints/groups/block-index-custom-list-fields.yml',
		'groups/block-index-pages' => __DIR__ . '/blueprints/groups/block-index-pages.yml',
		'groups/block-index-pagination' => __DIR__ . '/blueprints/groups/block-index-pagination.yml',
		'groups/block-index-snippets' => __DIR__ . '/blueprints/groups/block-index-snippets.yml'
	],


	'snippets' => [
		'blocks/index' => __DIR__ . '/snippets/blocks/index.php',
		'block-index' => __DIR__ . '/snippets/block-index.php',
		'block-index-entry' => __DIR__ . '/snippets/block-index-entry.php',
		'block-index-navigation' => __DIR__ . '/snippets/block-index-navigation.php',
		'block-index-pagination' => __DIR__ . '/snippets/block-index-pagination.php',
		'block-index-menu-item' => __DIR__ . '/snippets/block-index-menu-item.php'
	],


	'translations' => [
		'en' => require_once __DIR__ . '/translations/en.php',
		'de' => require_once __DIR__ . '/translations/de.php'
	],


	'siteMethods' => [
		'blockIndexGetOption' => function(string $key = null, mixed $default = null) {
			return kirby()->option('swiegmann.block-index' . ($key ? '.'. $key : ''), $default);
		},


		'_blockIndexPanelGetFilterFileHelpTranslation' => function() {
			$path = str_replace(
				kirby()->root(),
				'..',
				kirby()->site()->blockIndexGetOption('filterPath'),
			);

			return str_replace(
				'%path',
				$path,
				t('block-index.fields.filter_file.help')
			);
		},


		'_blockIndexPanelGetSnippetFileHelpTranslation' => function($key) {
			$path = str_replace(
				kirby()->root(),
				'..',
				kirby()->site()->blockIndexGetOption('snippetPath'),
			);

			return str_replace(
				'%path',
				$path,
				t($key)
			);
		},


		'_blockIndexCorrectPath' => function(string $src) {
			return str_replace(
				array('\\', '/'),
				DIRECTORY_SEPARATOR,
				$src
			);
		},


		'_blockIndexPanelGetBlueprints' => function() {
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


		'_blockIndexPanelGetFilterFiles' => function() {
			$result = [];

			$rootPath = $this->_blockIndexCorrectPath(
				kirby()->site()->blockIndexGetOption('filterPath')
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


		'_blockIndexPanelGetSnippetFiles' => function() {
			$result = [];

			$rootPath = $this->_blockIndexCorrectPath(
				kirby()->site()->blockIndexGetOption('snippetPath')
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