<?php

return [
	/**
	 * frontend
	 */

	'index-block.navigation.next' => '→',
	'index-block.navigation.previous' => '←',

	'index-block.no-results' => 'Aucun résultat.',
 
 
	/**
	 * panel
	 */
 
	// common
	'index-block.block.name' => 'Index',
	'index-block.tab.main.label' => 'Général',

	// pages
	'index-block.fields._pages_headline.label' => 'Pages',

	'index-block.fields.pages.label' => 'Pages',
	'index-block.fields.pages.help' => 'Si aucune page n’est sélectionnée, le répertoire racine du site sera utilisé',

	'index-block.fields.include_child_pages.label' => 'Pages enfant',
	'index-block.fields.include_child_pages.text' => 'Inclure',

	'index-block.fields.templates.label' => 'Limiter aux gabarits',

	'index-block.fields.use_filter_file.label' => 'Appliquer un fichier de filtre',
	'index-block.fields.use_filter_file.text' => 'Activer',

	'index-block.fields.filter_file.label' => 'Fichier',
	'index-block.fields.filter_file.placeholder' => '(Sélectionner)',
	'index-block.fields.filter_file.help' => 'Créez un fichier PHP dans le répertoire “%path”, appliquez des méthodes personnalisées à la variable “$entries” (Kirby\\Cms\\Pages), et retournez la variable (Kirby\\Cms\\Pages ou Kirby\\Cms\\Files).',

	// list
	'index-block.fields._index_headline.label' => 'Liste',

	'index-block.fields.page_size.label' => 'Éléments par page',

	'index-block.fields.offset.label' => 'Décalage',

	'index-block.fields.sort.label' => 'Tri',
	'index-block.fields.sort.placeholder' => '(Sélectionnez)',
	'index-block.fields.sort.option.none' => 'Aucun',
	'index-block.fields.sort.option.field' => 'Par champ',
	'index-block.fields.sort.option.random' => 'Au hasard',

	'index-block.fields.sort_field.label' => 'Champ',
	'index-block.fields.sort_field.placeholder' => 'Clé du champ',

	'index-block.fields.sort_order.label' => 'Ordre',
	'index-block.fields.sort_order.placeholder' => '(Sélectionnez)',
	'index-block.fields.sort_order.option.asc' => 'Croissant',
	'index-block.fields.sort_order.option.desc' => 'Décroissant',
	'index-block.fields.sort_order.option.random' => 'Au hasard',

	'index-block.fields.custom_list_tags.label' => 'Éléments HTML',
	'index-block.fields.custom_list_tags.text' => 'Personnaliser',

	'index-block.fields.list_tag.label' => 'Liste',
	'index-block.fields.list_tag.placeholder' => 'Nom de la balise, ex. : "ol"',

	'index-block.fields.entry_tag.label' => 'Élément',
	'index-block.fields.entry_tag.placeholder' => 'Nom de la balise, ex. : "li"',

	// entries
	'index-block.fields._entries_headline.label' => 'Éléments',

	'index-block.fields.show_entry_number.label' => 'Numérotation',
	'index-block.fields.show_entry_number.text' => 'Activer',

	'index-block.fields.show_parent_page_link.label' => 'Liens des pages parentes',
	'index-block.fields.show_parent_page_link.text' => 'Activer',

	'index-block.fields.show_page_link.label' => 'Liens des pages',
	'index-block.fields.show_page_link.text' => 'Activer',

	// pagination/navigation
	'index-block.fields._pagination_navigation_headline.label' => 'Pagination et Navigation',

	'index-block.fields.show_pagination.label' => 'Pagination',
	'index-block.fields.show_pagination.text' => 'Activer',

	'index-block.fields.pagination_iterations.label' => 'Nombre max. de liens',

	'index-block.fields.show_navigation.label' => 'Navigation',
	'index-block.fields.show_navigation.text' => 'Activer',

	'index-block.fields.navigation_text_previous_page.label' => 'Texte du lien : Page précédente',
	'index-block.fields.navigation_text_next_page.label' => 'Texte du lien : Page suivante',
	'index-block.fields.pagination_page_url_argument.label' => 'Argument de l’URL',

	// snippets
	'index-block.fields._snippets_headline.label' => 'Fragments de code',

	'index-block.fields.overwrite_snippet_file.label' => 'Bloc',
	'index-block.fields.overwrite_snippet_file.text' => 'Remplacer',

	'index-block.fields.snippet_file.label' => 'Fichier',
	'index-block.fields.snippet_file.placeholder' => '(Sélectionner)',
	'index-block.fields.snippet_file.help' => 'Créez un fichier PHP dans le répertoire “%path” et appliquez une vue personnalisée pour le bloc.',

	'index-block.fields.overwrite_entry_snippet_file.label' => 'Élément',
	'index-block.fields.overwrite_entry_snippet_file.text' => 'Remplacer',

	'index-block.fields.entry_snippet_file.label' => 'Fichier',
	'index-block.fields.entry_snippet_file.placeholder' => '(Sélectionner)',
	'index-block.fields.entry_snippet_file.help' => 'Créez un fichier PHP dans le répertoire “%path” et appliquez une vue personnalisée pour les éléments.'
];
