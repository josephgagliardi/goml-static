// /* global algoliasearch instantsearch */
const searchClient = algoliasearch(
  'JBY4H547QZ',
  '133c145ebb78c84a04aefb61c32dba1d'
);

const search = instantsearch({
  indexName: 'goml_DEMO',
  searchClient,
  searchParameters: {
    hitsPerPage: 4
  },
  searchFunction(helper) {
    const container = document.querySelector('.hit-container');

    if (helper.state.query === '') {
      container.style.display = 'none';
    } else {
      container.style.display = '';
    }

    helper.search();
  }
});



search.addWidget(
  instantsearch.widgets.searchBox({
    container: '#searchBox',
    showSubmit: true,
    showReset: false,
    searchAsYouType: true,
    placeholder: 'Your future is merely a search away...',
    cssClasses: {
      item: 'border-left',
      input: 'typed-words',
      submit: 'float-right d-flex'
    },
    templates: {
      submit: '<i class="fas fa-search"></i>',
    }
  })
);


search.addWidget(
  instantsearch.widgets.hits({
    container: '.hit-container',
    templates: {
      empty: '<p class="no-results"><i class="fas fa-exclamation-triangle"></i> No results were found. Try to remove some filters or change the search query.</p>',
      item: function (item) {
        var instLink = `<a href="/program-listing.php?query=${item['Institution']}">`;
        // Alternatively - link inst logo to inst info page?
        // var instLink = `<a href="/institutions-single.php">`;
        var programLink = `<a href="/program-single.php?id=${item['objectID']}">`;
        return `
        <div class="inst-list-wrapper">
        ${programLink}
        <figure>
            <img class="inst-icon" src="/assets/img/institutions/icons/${item['Institution'].replace(/\s+/g, '-').toLowerCase()}.svg" alt="">
            <figcaption>
            <p class="inst">${item['Program Name']}</p>
            <p class="prog-name">${item.Institution}</p>
            </figcaption>
          </figure>
        </a>
        </div>
      `;
      },
    },
  })
);


search.addWidget(
  instantsearch.widgets.menuSelect({
    container: '#menu-select',
    attribute: 'Degree Level',
    templates: {
      defaultOption: 'Degree Levels',
    },
    cssClasses: {
      root: '',
      select: [
      'select'
    ],
    },
  })
);





search.start();
