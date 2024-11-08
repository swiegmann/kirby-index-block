<?php

return [
	/**
	 * frontend
	 */

	'index-block.navigation.next' => '&#8594;',
	'index-block.navigation.previous' => '&#8592;',

	'index-block.no-results' => 'Es wurden keine Ergebnisse gefunden.',


	/**
	 * panel
	 */

	// common
	'index-block.block.name' => 'Index',
	'index-block.tab.main.label' => 'Allgemein',

	// pages
	'index-block.fields._pages_headline.label' => 'Seiten',

	'index-block.fields.pages.label' => 'Seiten',
	'index-block.fields.pages.help' => 'Falls keine Seiten ausgewählt wurden, wird der Stammordner der Website verwendet',

	'index-block.fields.include_child_pages.label' => 'Untergeordnete Seiten',
	'index-block.fields.include_child_pages.text' => 'mit einbeziehen',

	'index-block.fields.templates.label' => 'Auf Vorlagen begrenzen',

	'index-block.fields.use_filter_file.label' => 'Filter-Datei anwenden',
	'index-block.fields.use_filter_file.text' => 'Ja',

	'index-block.fields.filter_file.label' => 'Datei',
	'index-block.fields.filter_file.placeholder' => '(Bitte wählen)',
	'index-block.fields.filter_file.help' => 'Erstelle eine PHP-Datei im Ordner "%path", wende eigene Methoden auf die Variable "$entries" (Kirby\\Cms\\Pages) an und gebe die Variable (Kirby\\Cms\\Pages oder Kirby\Cms\Files) zurück.',

	// list
	'index-block.fields._index_headline.label' => 'Liste',

	'index-block.fields.page_size.label' => 'Einträge/Seite',

	'index-block.fields.offset.label' => 'Offset',

	'index-block.fields.sort.label' => 'Sortierung',
	'index-block.fields.sort.placeholder' => '(Bitte wählen)',
	'index-block.fields.sort.option.none' => 'Keine',
	'index-block.fields.sort.option.field' => 'Nach Feld',
	'index-block.fields.sort.option.random' => 'Zufällig',

	'index-block.fields.sort_field.label' => 'Feld',
	'index-block.fields.sort_field.placeholder' => 'Feld-Key',

	'index-block.fields.sort_order.label' => 'Reihenfolge',
	'index-block.fields.sort_order.placeholder' => '(Bitte wählen)',
	'index-block.fields.sort_order.option.asc' => 'Aufsteigend',
	'index-block.fields.sort_order.option.desc' => 'Absteigend',
	'index-block.fields.sort_order.option.random' => 'Zufällig',

	'index-block.fields.custom_list_tags.label' => 'HTML-Tags',
	'index-block.fields.custom_list_tags.text' => 'Benutzerdefiniert',

	'index-block.fields.list_tag.label' => 'Liste',
	'index-block.fields.list_tag.placeholder' => 'Tagname, z.B. "ol"',

	'index-block.fields.entry_tag.label' => 'Eintrag',
	'index-block.fields.entry_tag.placeholder' => 'Tagname, z.B. "li"',

	// entries
	'index-block.fields._entries_headline.label' => 'Einträge',

	'index-block.fields.show_entry_number.label' => 'Nummerierung',
	'index-block.fields.show_entry_number.text' => 'Anzeigen',

	'index-block.fields.show_parent_page_link.label' => 'Übergeordnete Seitenlinks',
	'index-block.fields.show_parent_page_link.text' => 'Anzeigen',

	'index-block.fields.show_page_link.label' => 'Seitenlinks',
	'index-block.fields.show_page_link.text' => 'Anzeigen',

	// pagination/navigation
	'index-block.fields._pagination_navigation_headline.label' => 'Pagination/Navigation',

	'index-block.fields.show_pagination.label' => 'Pagination',
	'index-block.fields.show_pagination.text' => 'Anzeigen',

	'index-block.fields.pagination_iterations.label' => 'Max. Anzahl der Links',

	'index-block.fields.show_navigation.label' => 'Navigation',
	'index-block.fields.show_navigation.text' => 'Anzeigen',

	'index-block.fields.navigation_text_previous_page.label' => 'Link-Text: vorherige Seite',
	'index-block.fields.navigation_text_next_page.label' => 'Link-Text: nächste Seite',
	'index-block.fields.pagination_page_url_argument.label' => 'URL-Argument',
	'index-block.fields.pagination_current_page_css_class.label' => 'Aktuelle Seite: CSS-Klasse',

	// snippets
	'index-block.fields._snippets_headline.label' => 'Snippets',

	'index-block.fields.overwrite_snippet_file.label' => 'Block',
	'index-block.fields.overwrite_snippet_file.text' => 'Überschreiben',

	'index-block.fields.snippet_file.label' => 'Datei',
	'index-block.fields.snippet_file.placeholder' => '(Bitte wählen)',
	'index-block.fields.snippet_file.help' => 'Erstelle eine PHP-Datei im Ordner "%path" und wende eine eigene Ansicht für den Block an.',

	'index-block.fields.overwrite_entry_snippet_file.label' => 'Eintrag',
	'index-block.fields.overwrite_entry_snippet_file.text' => 'Überschreiben',

	'index-block.fields.entry_snippet_file.label' => 'Datei',
	'index-block.fields.entry_snippet_file.placeholder' => '(Bitte wählen)',
	'index-block.fields.entry_snippet_file.help' => 'Erstelle eine PHP-Datei im Ordner "%path" und wende eine eigene Ansicht für Einträge an.'
];