<?php

use Kirby\Cms\Block;

class BlockIndex extends Block
{
	/**
	 * Extends the default controller with parameter-variables
	*/
	public function controller($data = null): array
	{
		return $data ? array_merge($data, parent::controller()) : parent::controller();
	}


	public function snippetFile()
	{
		if (
			$this->content()->get('overwrite_snippet_file')->toBool()
			&& ($s = (string) $this->content()->get('snippet_file')->value())
		) {
			$name = str_replace(
				kirby()->root('snippets') .'/',
				'',
				kirby()->option('swiegmann.block-index.snippetPath')
					.'/'. $s
			);

			return $name;
		}
	}


	public function entrySnippetFile()
	{
		if (
			$this->content()->get('overwrite_entry_snippet_file')->toBool()
			&& ($s = (string) $this->content()->get('entry_snippet_file')->value())
		) {
			$name = str_replace(
				kirby()->root('snippets') .'/',
				'',
				kirby()->option('swiegmann.block-index.snippetPath')
					.'/'. $s
			);

			return $name;
		}
	}


	public function entries(): Kirby\Cms\Pages|Kirby\Cms\Files
	{
		// select current page/selected pages
		if ($this->content()->get('pages')->isEmpty()) {
			$result = kirby()->site()->pages();
		} else {
			$result = $this->content()->get('pages')->toPages();
		}

		if ($result) {
			$result = $result->listed();
		}
		
		// add descendants
		if ($result && $this->content()->get('include_child_pages')->toBool()) {
			$ancestorPages = $result;

			$result = $result->children()->index();
		
			foreach($ancestorPages as $page) {
				$result->add($page->id());
			};
		
			$result = $result->listed();

			// filter by templates
			if ($result) {
				$templates = $this->content()->get('templates');

				if (!is_null($templates->value()) && strlen($templates->value())) {
					$result = $result->filterBy('template', 'in', $templates->split(', '));					
				}
			}
		}

		// filter-file
		if ($result && $this->content()->get('use_filter_file')->toBool() && ($s = (string) $this->content()->get('filter_file')->value())) {
			$includePath = kirby()->site()->_blockIndexCorrectPath(
				kirby()->site()->blockIndexGetOption('filterPath', kirby()->root('site') . '/helpers/plugins/block-index/filters') .'/'. $s
			);

			$fnInclude = function($file, $block, $entries) {
				return include $file;
			};

			$var = $fnInclude($includePath, $this, $result);

			if (is_a($var, 'Kirby\Cms\Pages') || is_a($var, 'Kirby\Cms\Files')) {
				$result = $var;
			} else {
				throw new Exception($includePath .': Object $entries of Kirby\Cms\Pages or Kirby\Cms\Files not returned');
			}
		}

		// offset
		if ($result && ($offset = (int) $this->content()->get('offset')->value())) {
			$result = $result->offset($offset);
		}

		// sort
		if ($result) {
			$method = (string) $this->content()->get('sort')->value();

			if ($method == 'random') {
				$result = $result->random(
					count: $result->count(),
					shuffle: true
				);
			} else if ($method == 'field') {
				$sortField = (string) $this->content()->get('sort_field')->value();
	
				$sortOrder = (string) $this->content()->get('sort_order')->value();
				if (!in_array($sortOrder, ['asc', 'desc'])) {
					$sortOrder = '';
				}

				if ($sortField && $sortOrder) {
					$result = $result->sortBy($sortField, $sortOrder, SORT_LOCALE_STRING);
				}
			}
		}

		// paginate or limit
		if ($result) {
			$limit = (int) $this->content()->get('page_size')->value();
			if ($limit < 1) {
				$limit = 1;
			}

			if ($result->count() > $limit) {
				if (
					$this->content()->get('show_pagination')->toBool()
					|| $this->content()->get('show_navigation')->toBool()
				) {
					if (($o = $this->content()->get('pagination_page_url_argument'))
						&& ($s = $o->value())
						&& strlen($s)
					) {
						$urlArgument = $s;
					} else {
						$urlArgument = kirby()->site()->blockIndexGetOption('paginationUrlArgument', 'p');
					}

					$result = $result->paginate([
						'limit'		=> $limit,
						'variable' => $urlArgument
					]);
				} else {
					$result = $result->limit($limit);
				}
			}
		}

		return $result;
	}


	public function entryTag(): string
	{
		return (
			$this->content()->get('custom_list_tags')->toBool()
			&& ($s = $this->content()->get('entry_tag')->value())
			&& strlen($s)
		)
			? $s
			: 'li';
	}


	public function listTag(): string
	{
		return (
			$this->content()->get('custom_list_tags')->toBool()
			&& ($s = $this->content()->get('list_tag')->value())
			&& strlen($s)
		)
			? $s
			: ($this->content()->get('show_entry_number')->toBool()
					? 'ol'
					: 'ul'
			);
	}	


	public function paginationOffset(Kirby\Cms\Pagination $pagination = null)
	{
		return ($pagination && $this->content()->get('show_entry_number')->toBool())
			? $pagination->offset()
			: null;
	}


	public function paginationTextNextPage(Kirby\Cms\Pagination $pagination = null)
	{
		if (!$pagination || !$this->content()->get('show_navigation')->toBool()) {
			return '';
		}

		return ($s = $this->content()->get('navigation_text_next_page')->value()) && strlen($s)
			? $s
			: t('block-index.navigation.next');
	}			
	

	public function paginationTextPreviousPage(Kirby\Cms\Pagination $pagination = null)
	{
		if (!$pagination || !$this->content()->get('show_navigation')->toBool()) {
			return '';
		}

		return ($s = $this->content()->get('navigation_text_previous_page')->value()) && strlen($s)
			? $s
			: t('block-index.navigation.previous');
	}
};