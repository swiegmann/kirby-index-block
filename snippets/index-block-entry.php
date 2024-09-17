<?php

/**
 * Available variables:
 * Block-variables
 * $entry Kirby\Cms\Page
 * $tag
 */

// build html-attributes
$attrs = Html::attr(
	name: [],
	value: false,
	before: ' '
);

?>
<<?= $tag ?><?= $attrs ?>>
	<?php	
		// parent page link
		if (
			$content->get('include_child_pages')->toBool()
			&& $content->get('show_parent_page_link')->toBool()
			&& $entry->parent()
			&& ($entry->parent() !== $page)
		):
	?>
		<a href="<?= $entry->parent()->url() ?>" class="parent-page-link">
			<?= htmlspecialchars($entry->parent()->title()) ?>
		</a>
		<br>
	<?php endif ?>
	<?php	
		// page link
		if ($content->get('show_page_link')->toBool()):
	?>
		<a href="<?= $entry->url() ?>" class="page-link">
			<?= htmlspecialchars($entry->content()->get('title')->value()) ?>
		</a>
	<?php endif ?>
</<?= $tag ?>>