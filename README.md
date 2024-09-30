# Kirby Index Block

This plugin displays individual index-pages with a variety of options such as:

* page(s)-selection
  * w/o including children
  * limiting to templates
  * applying custom filters (using $pages-methods)
  * transforming to files is possible with filters
* sorting
  * asc/desc by any field
  * randomizing
* pagination
* navigation
* custom html-tags
* custom snippets
* custom fields
* extend blueprint with own tabs

Current translations:

- English
- French (thanks [@joachimesque](https://github.com/joachimesque))
- German

<a href="kirby-index-block.png">
    <img src="kirby-index-block.png" align="center" alt="Block preview">
</a>

## Prerequisites

* Kirby 4.3+

## Installation

Download and unzip to `/site/plugins`.

## Usage

Add the block-type `index` to your layout/block-blueprints.
Add a block, select "Index".
The frontend should display already an unformatted index. You can start applying css to it, and that may already be sufficient to your needs.

However, you can read on and customize the plugin.

## Options

| Property              | Default                           | Description                                                        |
| --------------------- | --------------------------------- | ------------------------------------------------------------------ |
| filterPath            | /site/helpers/index-block/filters | (string) path to custom filter files                               |
| snippetPath           | /site/snippets/index-block        | (string) path to custom snippet files                              |
| paginationUrlArgument | p                                 | (string) url-argument for generated navigation- & pagination-links |

Overwrite all values in `/site/config/config.php`.

## Appy filters, sorting, etc. to the results

1. Create a php-file in: `/site/helpers/index-block/filters`.
   *Note: This path is a plugin-option, you can override it.*

2. The file will receive the current result-set of pages with the variable name `$entries`. It is an instance of `Kirby\Cms\Pages`, you can apply all methods of `$pages` to it.
   The file must return the variable, it must end with: `return $entries`.
   *Note: You can return also a variable type of* `Kirby\Cms\Files` *by using the relevant* `$pages`*-methods. So the result can be regular files or images.*

3. In the block-section "Pages" click "Apply filter file" and select the file from the list.
   *Note: The result-set that the filter-file receives is from the exact position in the panel, which is the actual "Apply filter file"-field. Everything below that field can override your filter again (especially sorting).*

## Customize the default view of list and entries

Copy the snippet-files from:

```
/site/plugins/kirby-index-block/snippets/index-block.php
/site/plugins/kirby-index-block/snippets/index-block-entry.php
```

to:

```
/site/snippets
```

and edit it.

## Customize the view of a single block instance

Copy the snippet-files from:

```
/site/plugins/kirby-index-block/snippets/index-block.php
/site/plugins/kirby-index-block/snippets/index-block-entry.php
```

to:

```
/site/snippets/index-block/index-block-[your-custom-name].php
/site/snippets/index-block/index-block-entry-[your-custom-name].php
```

*Note: The destination path is a plugin-option, you can override it.*

Edit the files.
In the block-section "Snippet" enable "overwrite" and select the files.

## Add own list and entry fields to the block

Copy the blueprint-files from:

```
/site/plugins/kirby-index-block/blueprints/groups/index-block-custom-list-fields.yml
/site/plugins/kirby-index-block/blueprints/groups/index-block-custom-entry-fields.yml
```

to:

```
/site/blueprints/groups
```

and add your own fields to the blueprints.
The new fields appear below the default list/entry fields.

## Add own tabs to the block

Copy the blueprint-file from:

```
/site/plugins/kirby-index-block/blueprints/blocks/index.yml
```

to:

```
/site/blueprints/blocks
```

and add your own tabs to the blueprint.