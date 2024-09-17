<?php

/**
 * Available variables:
 * Block-variables
 */

// setup
$entries = $block->entries();
$entryTag = $block->entryTag();
$entrySnippetFile = $block->entrySnippetFile();
$listTag = $block->listTag();
$paginationOffset = $block->paginationOffset($entries->pagination());
$paginationTextNextPage = $block->paginationTextNextPage($entries->pagination());
$paginationTextPreviousPage = $block->paginationTextPreviousPage($entries->pagination());


// build root html-attributes
$rootAttrs = Html::attr([
	'class' => 'index'
], false, ' ');


// build list html-attributes
$listAttrs = Html::attr([
	'start' => ($listTag == 'ol' && !is_null($paginationOffset)) ? $paginationOffset + 1 : false,
	'style' => !is_null($paginationOffset) ? '--start:'. $paginationOffset + 1 : false
], false, ' ');

?>
<div<?= $rootAttrs ?>>
	<?php if ($entries->count()): ?>
		<<?= $listTag ?><?= $listAttrs ?>>
			<?php foreach ($entries as $entry): ?>
				<?php snippet([
						$entrySnippetFile,
						'index-block-entry'
					],
					$block->controller([
						'entry' => $entry,
						'tag' => $entryTag
					])
				) ?>
			<?php endforeach ?>
		</<?= $listTag ?>>
		
		<?php if ($entries->pagination()): ?>
			<nav>
				<?php if ($content->get('show_navigation')->toBool()): ?>
					<?php snippet('index-block-navigation', [
						'pagination' => $entries->pagination(),
						'textNextPage' => $paginationTextNextPage,
						'textPreviousPage' => $paginationTextPreviousPage
					], slots: $content->get('show_pagination')->toBool()); ?>
						<?php snippet('index-block-pagination', [
							'pagination' => $entries->pagination(),
							'range' => $content->get('pagination_iterations')->value() ?? 5
						]) ?>
					<?php endsnippet() ?>
				<?php else: ?>
					<?php snippet('index-block-pagination', [
						'pagination' => $entries->pagination(),
						'range' => $content->get('pagination_iterations')->value() ?? 5
					]) ?>
				<?php endif ?>
			</nav>
		<?php endif ?>
	<?php else: ?>
		<p>
			<?= t('index-block.no-results') ?>
		</p>
	<?php endif ?>
</div>
