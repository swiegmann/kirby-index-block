# Kirby Index Block

## 1.0.3

- **BREAKING:** Replaced wrong usage of ARIA-Attribute `aria-current` with a CSS-Class.
  *Requires adjustments in your CSS-Rules.*
  - New: Option `paginationCurrentPageCssClass` (default: `active`), field and HTML-Output applied to pagination `li`
  - Change: Moved the ARIA-Attribute/Value `aria-current="page"` to the pagination link-tag `a` (instead of `li`)
- README.MD
  - New: Git-Submodule, composer installation

## 1.0.2

- Added french translation (thanks [@joachimesque](https://github.com/joachimesque))

## 1.0.1

- Refactored plugin name from 'Kirby Block Index' to 'Kirby Index Block'
  - Name, pathes, filenames, descriptions, repo, etc.
- CHANGELOG.MD  
  - add file
- README.MD:
  - miscellaneous
  - fix wrong path in section "Appy filters, sorting, etc. to the results"

## 1.0.0

- Initial release