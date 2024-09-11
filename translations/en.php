<?php

return [
	/**
	 * frontend
	 */

	'block-index.navigation.next' => '→',
	'block-index.navigation.previous' => '←',

	'block-index.no-results' => 'No results found.',
 
 
	/**
	 * panel
	 */
 
	// common
	'block-index.block.name' => 'Index',
	'block-index.tab.main.label' => 'General',

	// pages
	'block-index.fields._pages_headline.label' => 'Pages',

	'block-index.fields.pages.label' => 'Pages',
	'block-index.fields.pages.help' => 'If no pages are selected, the root folder of the website will be used',

	'block-index.fields.include_child_pages.label' => 'Child pages',
	'block-index.fields.include_child_pages.text' => 'Include',

	'block-index.fields.templates.label' => 'Limit to templates',

	'block-index.fields.use_filter_file.label' => 'Apply filter file',
	'block-index.fields.use_filter_file.text' => 'Yes',

	'block-index.fields.filter_file.label' => 'File',
	'block-index.fields.filter_file.placeholder' => '(Please select)',
	'block-index.fields.filter_file.help' => 'Create a PHP file in the folder "%path", apply custom methods to the variable "$entries" (Kirby\\Cms\\Pages), and return the variable (Kirby\\Cms\\Pages or Kirby\\Cms\\Files).',

	// list
	'block-index.fields._index_headline.label' => 'List',

	'block-index.fields.page_size.label' => 'Entries/Page',

	'block-index.fields.offset.label' => 'Offset',

	'block-index.fields.sort.label' => 'Sorting',
	'block-index.fields.sort.placeholder' => '(Please select)',
	'block-index.fields.sort.option.none' => 'None',
	'block-index.fields.sort.option.field' => 'By Field',
	'block-index.fields.sort.option.random' => 'Random',

	'block-index.fields.sort_field.label' => 'Field',
	'block-index.fields.sort_field.placeholder' => 'Field Key',

	'block-index.fields.sort_order.label' => 'Order',
	'block-index.fields.sort_order.placeholder' => '(Please select)',
	'block-index.fields.sort_order.option.asc' => 'Ascending',
	'block-index.fields.sort_order.option.desc' => 'Descending',
	'block-index.fields.sort_order.option.random' => 'Random',

	'block-index.fields.custom_list_tags.label' => 'HTML Tags',
	'block-index.fields.custom_list_tags.text' => 'Custom',

	'block-index.fields.list_tag.label' => 'List',
	'block-index.fields.list_tag.placeholder' => 'Tag name, e.g., "ol"',

	'block-index.fields.entry_tag.label' => 'Entry',
	'block-index.fields.entry_tag.placeholder' => 'Tag name, e.g., "li"',

	// entries
	'block-index.fields._entries_headline.label' => 'Entries',

	'block-index.fields.show_entry_number.label' => 'Numbering',
	'block-index.fields.show_entry_number.text' => 'Show',

	'block-index.fields.show_parent_page_link.label' => 'Parent Page Links',
	'block-index.fields.show_parent_page_link.text' => 'Show',

	'block-index.fields.show_page_link.label' => 'Page Links',
	'block-index.fields.show_page_link.text' => 'Show',

	// pagination/navigation
	'block-index.fields._pagination_navigation_headline.label' => 'Pagination/Navigation',

	'block-index.fields.show_pagination.label' => 'Pagination',
	'block-index.fields.show_pagination.text' => 'Show',

	'block-index.fields.pagination_iterations.label' => 'Max. Number of Links',

	'block-index.fields.show_navigation.label' => 'Navigation',
	'block-index.fields.show_navigation.text' => 'Show',

	'block-index.fields.navigation_text_previous_page.label' => 'Link Text: Previous Page',
	'block-index.fields.navigation_text_next_page.label' => 'Link Text: Next Page',
	'block-index.fields.pagination_page_url_argument.label' => 'URL Argument',

	// snippets
	'block-index.fields._snippets_headline.label' => 'Snippets',

	'block-index.fields.overwrite_snippet_file.label' => 'Block',
	'block-index.fields.overwrite_snippet_file.text' => 'Overwrite',

	'block-index.fields.snippet_file.label' => 'File',
	'block-index.fields.snippet_file.placeholder' => '(Please select)',
	'block-index.fields.snippet_file.help' => 'Create a PHP file in the folder "%path" and apply a custom view for the block.',

	'block-index.fields.overwrite_entry_snippet_file.label' => 'Entry',
	'block-index.fields.overwrite_entry_snippet_file.text' => 'Overwrite',

	'block-index.fields.entry_snippet_file.label' => 'File',
	'block-index.fields.entry_snippet_file.placeholder' => '(Please select)',
	'block-index.fields.entry_snippet_file.help' => 'Create a PHP file in the folder "%path" and apply a custom view for entries.'
];