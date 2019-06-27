// /* global algoliasearch instantsearch */

const searchClient = algoliasearch(
  'JBY4H547QZ',
  '133c145ebb78c84a04aefb61c32dba1d'
);

const search = instantsearch({
  indexName: 'goml_DEMO',
  searchClient,
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
      submit: 'button button-outline float-md-right'
    }
  })
);

search.addWidget(
  instantsearch.widgets.hits({
    container: '.hit-container',
    templates: {
      empty: '<p class="info">No results were found with your current filters. Try to remove some filters or change the search query.</p>',
      item: function (item) {
        
        var instLink = `<a href="/program-listing.php?query="${item['Institution']}>`;
        var programLink = `<a href="/program-single.php?id=${item['objectID']}">`;
        return `
        <div class="inst-list-wrapper">
        <figure>
        ${instLink}
            <img class="inst-icon" src="/assets/img/institutions/icons/${item['Institution'].replace(/\s+/g, '-').toLowerCase()}.svg" alt="">
        </a>
            <figcaption>
            ${programLink}
            <p class="inst">${item['Program Name']}</p></a>
            ${instLink}
            <p class="prog-name">${item.Institution}</p></a>
            </figcaption>
        </figure>
        </div>
      `;
      },
    },
  })
);


search.start();

