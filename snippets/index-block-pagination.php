<?php

/**
 * Available variables:
 * $pagination object pagination-object (Kirby\Cms\Pagination)
 * $range int
 */

$i = 1;

?>
<ul>
	<?php foreach ($pagination->range($range) as $r): ?>
		<?php if ($i == 1): // Custom 1st links ?>
			<?php if ($i !== $r): // Ensure a link to 1st page ?>
				<?php snippet('index-block-menu-item', [
					'isCurrentPage' => ($pagination->page() === $i),
					'isListItem' => true,
					'text' => $i,
					'url' => $pagination->pageUrl($i),
				]) ?>
			<?php endif ?>
			<?php if ($r > 3): // Item '...' after link to 1st page ?>
				<?php snippet('index-block-menu-item', [
					'isListItem' => true,
					'tagName' => 'span',
					'text' => '&#8230;'
				]) ?>
			<?php elseif ($r > 2): // Show link to 2nd page, because '...' does not make sense here ?>
				<?php snippet('index-block-menu-item', [
					'isCurrentPage' => ($pagination->page() === $i + 1),
					'isListItem' => true,
					'text' => $i + 1,
					'url' => $pagination->pageUrl($i + 1)
				]) ?>
			<?php endif ?>
		<?php endif ?>
		<?php snippet('index-block-menu-item', [
			'isCurrentPage' => ($r === $pagination->page()),
			'isListItem' => true,
			'text' => $r,
			'url' => $pagination->pageUrl($r)
		]) ?>
		<?php $i++; ?>
	<?php endforeach ?>
	<?php if ($r !== $pagination->lastPage()): ?>
		<?php if ($r < $pagination->lastPage() - 2): ?>
			<?php snippet('index-block-menu-item', [ // Item '...' before link to last page
				'isListItem' => true,
				'tagName' => 'span',
				'text' => '&#8230;'
			]) ?>
		<?php elseif ($r < $pagination->lastPage() - 1): ?>
			<?php snippet('index-block-menu-item', [
				'isCurrentPage' => ($pagination->page() === $pagination->lastPage() - 1),
				'isListItem' => true,
				'text' => $pagination->lastPage() - 1,
				'url' => $pagination->pageUrl($pagination->lastPage() - 1)
			]) ?>
		<?php endif ?>
		<?php snippet('index-block-menu-item', [ // Ensure link to last page
			'isCurrentPage' => ($pagination->page() === $pagination->lastPage()),
			'isListItem' => true,
			'text' => $pagination->lastPage(),
			'url' => $pagination->pageUrl($pagination->lastPage())
		]) ?>
	<?php endif ?>
</ul>
