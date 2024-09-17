<?php

return [
	/**
	 * frontend
	 */

	'index-block.navigation.next' => '→',
	'index-block.navigation.previous' => '←',

	'index-block.no-results' => 'No results found.',
 
 
	/**
	 * panel
	 */
 
	// common
	'index-block.block.name' => 'Index',
	'index-block.tab.main.label' => 'General',

	// pages
	'index-block.fields._pages_headline.label' => 'Pages',

	'index-block.fields.pages.label' => 'Pages',
	'index-block.fields.pages.help' => 'If no pages are selected, the root folder of the website will be used',

	'index-block.fields.include_child_pages.label' => 'Child pages',
	'index-block.fields.include_child_pages.text' => 'Include',

	'index-block.fields.templates.label' => 'Limit to templates',

	'index-block.fields.use_filter_file.label' => 'Apply filter file',
	'index-block.fields.use_filter_file.text' => 'Yes',

	'index-block.fields.filter_file.label' => 'File',
	'index-block.fields.filter_file.placeholder' => '(Please select)',
	'index-block.fields.filter_file.help' => 'Create a PHP file in the folder "%path", apply custom methods to the variable "$entries" (Kirby\\Cms\\Pages), and return the variable (Kirby\\Cms\\Pages or Kirby\\Cms\\Files).',

	// list
	'index-block.fields._index_headline.label' => 'List',

	'index-block.fields.page_size.label' => 'Entries/Page',

	'index-block.fields.offset.label' => 'Offset',

	'index-block.fields.sort.label' => 'Sorting',
	'index-block.fields.sort.placeholder' => '(Please select)',
	'index-block.fields.sort.option.none' => 'None',
	'index-block.fields.sort.option.field' => 'By Field',
	'index-block.fields.sort.option.random' => 'Random',

	'index-block.fields.sort_field.label' => 'Field',
	'index-block.fields.sort_field.placeholder' => 'Field Key',

	'index-block.fields.sort_order.label' => 'Order',
	'index-block.fields.sort_order.placeholder' => '(Please select)',
	'index-block.fields.sort_order.option.asc' => 'Ascending',
	'index-block.fields.sort_order.option.desc' => 'Descending',
	'index-block.fields.sort_order.option.random' => 'Random',

	'index-block.fields.custom_list_tags.label' => 'HTML Tags',
	'index-block.fields.custom_list_tags.text' => 'Custom',

	'index-block.fields.list_tag.label' => 'List',
	'index-block.fields.list_tag.placeholder' => 'Tag name, e.g., "ol"',

	'index-block.fields.entry_tag.label' => 'Entry',
	'index-block.fields.entry_tag.placeholder' => 'Tag name, e.g., "li"',

	// entries
	'index-block.fields._entries_headline.label' => 'Entries',

	'index-block.fields.show_entry_number.label' => 'Numbering',
	'index-block.fields.show_entry_number.text' => 'Show',

	'index-block.fields.show_parent_page_link.label' => 'Parent Page Links',
	'index-block.fields.show_parent_page_link.text' => 'Show',

	'index-block.fields.show_page_link.label' => 'Page Links',
	'index-block.fields.show_page_link.text' => 'Show',

	// pagination/navigation
	'index-block.fields._pagination_navigation_headline.label' => 'Pagination/Navigation',

	'index-block.fields.show_pagination.label' => 'Pagination',
	'index-block.fields.show_pagination.text' => 'Show',

	'index-block.fields.pagination_iterations.label' => 'Max. Number of Links',

	'index-block.fields.show_navigation.label' => 'Navigation',
	'index-block.fields.show_navigation.text' => 'Show',

	'index-block.fields.navigation_text_previous_page.label' => 'Link Text: Previous Page',
	'index-block.fields.navigation_text_next_page.label' => 'Link Text: Next Page',
	'index-block.fields.pagination_page_url_argument.label' => 'URL Argument',

	// snippets
	'index-block.fields._snippets_headline.label' => 'Snippets',

	'index-block.fields.overwrite_snippet_file.label' => 'Block',
	'index-block.fields.overwrite_snippet_file.text' => 'Overwrite',

	'index-block.fields.snippet_file.label' => 'File',
	'index-block.fields.snippet_file.placeholder' => '(Please select)',
	'index-block.fields.snippet_file.help' => 'Create a PHP file in the folder "%path" and apply a custom view for the block.',

	'index-block.fields.overwrite_entry_snippet_file.label' => 'Entry',
	'index-block.fields.overwrite_entry_snippet_file.text' => 'Overwrite',

	'index-block.fields.entry_snippet_file.label' => 'File',
	'index-block.fields.entry_snippet_file.placeholder' => '(Please select)',
	'index-block.fields.entry_snippet_file.help' => 'Create a PHP file in the folder "%path" and apply a custom view for entries.'
];