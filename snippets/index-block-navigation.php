<?php

/**
 * Available variables:
 * $pagination object pagination-object (Kirby\Cms\Pagination)
 * $textNextPage string
 * $textPreviousPage string
 */

?>
<?php snippet('index-block-menu-item', [
	'tagName' => $pagination->hasPrevPage() ? 'a' : 'span',
	'text' => $textPreviousPage,
	'url' => $pagination->hasPrevPage() ? $pagination->prevPageURL() : false
]) ?>
<?= $slot ?>
<?php snippet('index-block-menu-item', [
	'tagName' => $pagination->hasNextPage() ? 'a' : 'span',
	'text' => $textNextPage,
	'url' => $pagination->hasNextPage() ? $pagination->nextPageURL() : false
]) ?>