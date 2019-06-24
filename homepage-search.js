/* global algoliasearch instantsearch */

const searchClient = algoliasearch(
  'JBY4H547QZ',
  '133c145ebb78c84a04aefb61c32dba1d'
);

const search = instantsearch({
  indexName: 'goml_DEMO',
  searchClient
});

search.addWidget(
	instantsearch.widgets.searchBox({
		container: '#searchBox',
		showSubmit: true,
		showReset: false,
		searchAsYouType: true,
		placeholder: 'Your future is merely a search away...',
		cssClasses: {
			item: 'main-search-input-item',
			input: 'typed-words',
			submit: 'btn form-search__button'
		}
	})
);


search.start();
