// /* global algoliasearch instantsearch */

const searchClient = algoliasearch(
  'JBY4H547QZ',
  '133c145ebb78c84a04aefb61c32dba1d'
);


const autocomplete = instantsearch.connectors.connectAutocomplete(
  ({
    indices,
    refine,
    widgetParams
  }, isFirstRendering) => {
    const {
      container,
      onSelectChange
    } = widgetParams;

    if (isFirstRendering) {
      container.html('<select id="ais-autocomplete"></select>');

      container.find('input').selectize({
        options: [],
        valueField: 'Program Name',
        labelField: 'Program Name',
        highlight: false,
        onType: refine,
        onBlur() {
          refine(this.getValue());
        },
        score() {
          return function () {
            return 1;
          };
        },
        onChange(value) {
          onSelectChange(value);
          refine(value);
        },
      });

      return;
    }

    const [select] = container.find('select');

    // indices.forEach(index => {
    //   select.selectize.clearOptions();
    //   index.results.hits.forEach(h => select.selectize.addOption(h));
    //   select.selectize.refreshOptions(select.selectize.isOpen);
    // });
  }
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
      item: function (item) {
        return `
        <div class="inst-list-wrapper">
        <figure>
            <img class="inst-icon" src="/assets/img/institutions/icons/${item['Institution'].replace(/\s+/g, '-').toLowerCase()}.svg" alt="">
            <figcaption>
            <p class="inst">${item.Institution}</p>
            <p class="prog-name">${item['Program Name']}</p>
            </figcaption>
        </figure>
        </div>
      `;
      },
    },
  })
);

// search.addWidget(
//   autocomplete({
//     container: $('.list-icons'),
//     onSelectChange(value) {
//       search.helper.setQuery(value).search();
//     },
//   })
// );


// search.addWidget(
//   instantsearch.widgets.refinementList({
//     container: '#selectLevel',
//     attribute: 'Degree Level',
//     operator: 'or',
//     limit: 5,
//     showMore: true,
//     searchForFacetValues: true,
//     // searchable: true,
//     searchablePlaceholder: 'Refine by Level...',
//     sortBy: ['name:asc'],
//     cssClasses: {
//       item: '',
//     }
//   })
// );

search.start();



/* global $ instantsearch algoliasearch */


// const autocomplete = instantsearch.connectors.connectAutocomplete(
//   ({ indices, refine, widgetParams }, isFirstRendering) => {
//     const { container, onSelectChange } = widgetParams;

//     if (isFirstRendering) {
//       container.html('<select id="ais-autocomplete"></select>');

//       container.find('select').selectize({
//         options: [],
//         valueField: 'name',
//         labelField: 'name',
//         highlight: false,
//         onType: refine,
//         onBlur() {
//           refine(this.getValue());
//         },
//         score() {
//           return function() {
//             return 1;
//           };
//         },
//         onChange(value) {
//           onSelectChange(value);
//           refine(value);
//         },
//       });

//       return;
//     }

//     const [select] = container.find('select');

//     indices.forEach(index => {
//       select.selectize.clearOptions();
//       index.results.hits.forEach(h => select.selectize.addOption(h));
//       select.selectize.refreshOptions(select.selectize.isOpen);
//     });
//   }
// );

// const suggestions = instantsearch({
//   indexName: 'goml_DEMO',
//   searchClient,
// });

// suggestions.addWidget(
//   instantsearch.widgets.configure({
//     hitsPerPage: 5,
//   })
// );

// suggestions.addWidget(
//   autocomplete({
//     container: $('#autocomplete'),
//     onSelectChange(value) {
//       search.helper.setQuery(value).search();
//     },
//   })
// );

// const search = instantsearch({
//   indexName: 'goml_DEMO',
//   searchClient,
// });

// search.addWidget(
//   instantsearch.widgets.configure({
//     hitsPerPage: 10
//   })
// );

// search.addWidget(
//   instantsearch.widgets.hits({
//     container: '#hits',
//     templates: {
//       item: `
//         <div>
//           <header class="hit-name">
//             {{#helpers.highlight}}{ "attribute": "Program Name" }{{/helpers.highlight}}
//           </header>
//           <p class="hit-description">
//             {{#helpers.highlight}}{ "attribute": "Area of Study" }{{/helpers.highlight}}
//           </p>
//           <p class="hit-description">
//             {{#helpers.highlight}}{ "attribute": "Institution" }{{/helpers.highlight}}
//           </p>
//         </div>
//       `,
//     },
//   })
// );

// suggestions.start();
// search.start();
