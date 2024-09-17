<?php

/**
 * Available variables:
 * $cssClass string|false css-class of list item
 * $cssClassListItem|false string css-class of list item
 * $currentPageAttribute string
 * $currentPageAttributeValue string
 * $isCurrentPage bool
 * $isListItem bool
 * $tagName string
 * $text string
 * $url string|false
 */

// Set defaults:
$cssClass = $cssClass ?? false;
$cssClassListItem = $cssClassListItem ?? false;
$currentPageAttribute = $currentPageAttribute ?? 'aria-current';
$currentPageAttributeValue = $currentPageAttributeValue ?? 'page';
$isCurrentPage = $isCurrentPage ?? false;
$isListItem = $isListItem ?? false;
$tagName = $tagName ?? 'a';
$text = $text ?? '';
$url = $url ?? false;


if ($isListItem) { // open list-item
	echo '<li'
		. Html::attr([
			'class' => $cssClassListItem,
			$currentPageAttribute => $currentPageAttribute && $isCurrentPage ? ($currentPageAttributeValue ?? true) : false
		], false, ' ')
		.'>';
}

if ($tagName) { // open tag
	echo '<'. $tagName 
		. Html::attr([
			'class' => $cssClass,
			'href' => $url
		], false, ' ')
		.'>';
}

echo $text;

if ($tagName) { // close tag
	echo '</'. $tagName .'>';
}

if ($isListItem) { // close list-item
	echo '</li>';
}