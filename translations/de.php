<?php

return [
	/**
	 * frontend
	 */

	'block-index.navigation.next' => '&#8594;',
	'block-index.navigation.previous' => '&#8592;',

	'block-index.no-results' => 'Es wurden keine Ergebnisse gefunden.',


	/**
	 * panel
	 */

	// common
	'block-index.block.name' => 'Index',
	'block-index.tab.main.label' => 'Allgemein',

	// pages
	'block-index.fields._pages_headline.label' => 'Seiten',

	'block-index.fields.pages.label' => 'Seiten',
	'block-index.fields.pages.help' => 'Falls keine Seiten ausgewählt wurden, wird der Stammordner der Website verwendet',

	'block-index.fields.include_child_pages.label' => 'Untergeordnete Seiten',
	'block-index.fields.include_child_pages.text' => 'mit einbeziehen',

	'block-index.fields.templates.label' => 'Auf Vorlagen begrenzen',

	'block-index.fields.use_filter_file.label' => 'Filter-Datei anwenden',
	'block-index.fields.use_filter_file.text' => 'Ja',

	'block-index.fields.filter_file.label' => 'Datei',
	'block-index.fields.filter_file.placeholder' => '(Bitte wählen)',
	'block-index.fields.filter_file.help' => 'Erstelle eine PHP-Datei im Ordner "%path", wende eigene Methoden auf die Variable "$entries" (Kirby\\Cms\\Pages) an und gebe die Variable (Kirby\\Cms\\Pages oder Kirby\Cms\Files) zurück.',

	// list
	'block-index.fields._index_headline.label' => 'Liste',

	'block-index.fields.page_size.label' => 'Einträge/Seite',

	'block-index.fields.offset.label' => 'Offset',

	'block-index.fields.sort.label' => 'Sortierung',
	'block-index.fields.sort.placeholder' => '(Bitte wählen)',
	'block-index.fields.sort.option.none' => 'Keine',
	'block-index.fields.sort.option.field' => 'Nach Feld',
	'block-index.fields.sort.option.random' => 'Zufällig',

	'block-index.fields.sort_field.label' => 'Feld',
	'block-index.fields.sort_field.placeholder' => 'Feld-Key',

	'block-index.fields.sort_order.label' => 'Reihenfolge',
	'block-index.fields.sort_order.placeholder' => '(Bitte wählen)',
	'block-index.fields.sort_order.option.asc' => 'Aufsteigend',
	'block-index.fields.sort_order.option.desc' => 'Absteigend',
	'block-index.fields.sort_order.option.random' => 'Zufällig',

	'block-index.fields.custom_list_tags.label' => 'HTML-Tags',
	'block-index.fields.custom_list_tags.text' => 'Benutzerdefiniert',

	'block-index.fields.list_tag.label' => 'Liste',
	'block-index.fields.list_tag.placeholder' => 'Tagname, z.B. "ol"',

	'block-index.fields.entry_tag.label' => 'Eintrag',
	'block-index.fields.entry_tag.placeholder' => 'Tagname, z.B. "li"',

	// entries
	'block-index.fields._entries_headline.label' => 'Einträge',

	'block-index.fields.show_entry_number.label' => 'Nummerierung',
	'block-index.fields.show_entry_number.text' => 'Anzeigen',

	'block-index.fields.show_parent_page_link.label' => 'Übergeordnete Seitenlinks',
	'block-index.fields.show_parent_page_link.text' => 'Anzeigen',

	'block-index.fields.show_page_link.label' => 'Seitenlinks',
	'block-index.fields.show_page_link.text' => 'Anzeigen',

	// pagination/navigation
	'block-index.fields._pagination_navigation_headline.label' => 'Pagination/Navigation',

	'block-index.fields.show_pagination.label' => 'Pagination',
	'block-index.fields.show_pagination.text' => 'Anzeigen',

	'block-index.fields.pagination_iterations.label' => 'Max. Anzahl der Links',

	'block-index.fields.show_navigation.label' => 'Navigation',
	'block-index.fields.show_navigation.text' => 'Anzeigen',

	'block-index.fields.navigation_text_previous_page.label' => 'Link-Text: vorherige Seite',
	'block-index.fields.navigation_text_next_page.label' => 'Link-Text: nächste Seite',
	'block-index.fields.pagination_page_url_argument.label' => 'URL-Argument',

	// snippets
	'block-index.fields._snippets_headline.label' => 'Snippets',

	'block-index.fields.overwrite_snippet_file.label' => 'Block',
	'block-index.fields.overwrite_snippet_file.text' => 'Überschreiben',

	'block-index.fields.snippet_file.label' => 'Datei',
	'block-index.fields.snippet_file.placeholder' => '(Bitte wählen)',
	'block-index.fields.snippet_file.help' => 'Erstelle eine PHP-Datei im Ordner "%path" und wende eine eigene Ansicht für den Block an.',

	'block-index.fields.overwrite_entry_snippet_file.label' => 'Eintrag',
	'block-index.fields.overwrite_entry_snippet_file.text' => 'Überschreiben',

	'block-index.fields.entry_snippet_file.label' => 'Datei',
	'block-index.fields.entry_snippet_file.placeholder' => '(Bitte wählen)',
	'block-index.fields.entry_snippet_file.help' => 'Erstelle eine PHP-Datei im Ordner "%path" und wende eine eigene Ansicht für Einträge an.'
];