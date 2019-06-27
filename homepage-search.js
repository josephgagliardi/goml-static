// /* global algoliasearch instantsearch */

const searchClient = algoliasearch(
  'JBY4H547QZ',
  '133c145ebb78c84a04aefb61c32dba1d'
);


const autocomplete = instantsearch.connectors.connectAutocomplete(
  ({ indices, refine, widgetParams }, isFirstRendering) => {
    const { container, onSelectChange } = widgetParams;

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
          return function() {
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
    container: '.list-icons',

    templates: {
      item: function (item) {
        return `
        <div class="list-content">
            <div class="courses__top">
               <div class="courses__top__wrapper">
               <img class="courses__top__image" src="/assets/img/program-single/header-img-1.jpg" alt=""></div>
            </div>
          <div class="courses__content">
             <a class="courses__content__title" href="/program-single.php?id=${item.objectID}">
             ${item['Program Name']}
             </a>
              <span class="courses__content__institutions">${item.Institution}</span>
             <div class="courses__bottom">
                 <div class="area-of-study">
                    ${item['Area of Study']}
                  <div>
              </div>
        </div>  
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