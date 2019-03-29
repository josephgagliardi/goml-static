/* global algoliasearch instantsearch */

const searchClient = algoliasearch(
  'JBY4H547QZ',
  '133c145ebb78c84a04aefb61c32dba1d'
);

const search = instantsearch({
  indexName: 'dev_PROGRAMS',
  searchClient
});

search.addWidget(
  instantsearch.widgets.searchBox({
    container: '#searchbox',
    showSubmit: true,
    showReset: true,
    searchAsYouType: true,
    placeholder: 'Your future is merely a search away...'
  })
);

search.addWidget(
  instantsearch.widgets.hits({
    container: '#courses__list__wrapper',
    templates: {
      empty: 'No results for <q>{{ query }}</q>',
      item: function(item) {
      cpl = item["credit for prior learning"] === "TRUE" ? "inherit" : "none";
      return `
      <div class="courses__wrapper h-100">
            <div class="courses__top">
               <div class="courses__top__wrapper"><img class="courses__top__image" src="${item["logo"]}" alt=""></div>
            </div>
            <div class="courses__content">
               <a class="courses__content__title" href="#">${item["program title"]}</a>
               <div class="courses__bottom">
                  <a class="courses__col-left" href="#"><span class="courses__content__institutions">${item["area of study"]}</span></a>
                  <ul class="list-tags pb-1">
                     <li>
                        <button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study" data-original-title="" title="">${item["area of study"]}</button>
                     </li>
                     <li style="display: ${cpl}">
                        <button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning" data-original-title="" title="">cpl</button>
                     </li>
                     <li>
                        <button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program" data-original-title="" title="">${item["total hours"]}</button>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="courses__icon bt-circle-fill-red"><i class="fas fa-flask"></i></div>
         </div>`;
    }
    },
    cssClasses: {
      root: 'courses__list',
      item: 'col-lg-3 col-md-4 col-sm-6 courses__item'
    },
  })
);

search.addWidget(
  instantsearch.widgets.pagination({
    container: '#pagination__wrapper',
    showNext: true,
    showPrevious: true,
    padding: 2,
    scrollTo: 'header',

    cssClasses: {
      root: 'pagination mx-auto',
      list: 'pagination__list',
      item: 'page-item pagination__item',
      previousPageItem: 'pagination__item',
      nextPageItem: 'pagination__item',
      link: 'pagination__link page-link'
    }
  })
);

// See documentation: https://community.algolia.com/instantsearch.js/v2/widgets/refinementList.html
// search.addWidget(
//   instantsearch.widgets.refinementList({
//     container: '#filter2',
//     attribute: 'university',
//     operator: 'or',
//     limit: 4,
//     showMore: true,
//     cssClasses: {
//       list: 'select__list',
//       checkbox: 'select__checkmark',
//       item: 'select__item select',
//       // count: 'badge pull-right',
//       active: 'active',
//       // root: 'select__item',
//       root: 'column-left__item',
//       label: 'label',
//       count: 'select__number'
//     }
//   })
// );

// search.addWidget(
//   instantsearch.widgets.refinementList({
//     container: '#level__filter',
//     attribute: 'program level',
//     operator: 'or',
//     limit: 4,
//     showMore: true,
//     cssClasses: {
//       list: 'select__list',
//       item: 'select__item',
//       // count: 'badge pull-right',
//       active: 'active',
//       // root: 'select__item',
//       root: 'column-left__item',
//       label: 'label',
//       count: 'select__number'
//     }
//   })
// );

search.addWidget(
  instantsearch.widgets.refinementList({
    container: '#level__filter',
    attribute: 'program level',
    operator: 'or',
    limit: 5,
    showMore: true,
    searchForFacetValues: true,
    searchable: true,
    searchablePlaceholder: 'Refine by Level...',
    sortBy: ['name:asc'],
    cssClasses: {
      item: 'list-categories__item',
      count: 'badge pull-right select__number',
      active: 'active',
      label: 'list-categories__link',
      checkbox: 'filter__checkbox'
    }
  })
);

search.addWidget(
  instantsearch.widgets.refinementList({
    container: '#aos__filter',
    attribute: 'area of study',
    operator: 'or',
    limit: 5,
    showMore: true,
    searchable: true,
    searchablePlaceholder: 'Refine by Discipline...',
    sortBy: ['name:asc'],
    cssClasses: {
      item: 'list-categories__item',
      count: 'badge pull-right select__number',
      active: 'active',
      label: 'list-categories__link',
      checkbox: 'filter__checkbox'
    }
  })
);

search.addWidget(
  instantsearch.widgets.refinementList({
    container: '#institution__filter',
    attribute: 'university',
    operator: 'or',
    limit: 5,
    showMore: true,
    searchable: true,
    searchablePlaceholder: 'Choose School',
    sortBy: ['name:asc'],
    cssClasses: {
      item: 'list-categories__item',
      count: 'badge pull-right',
      active: 'active',
      label: 'list-categories__link',
      checkbox: 'checkbox'
      // showMore: 'button-text'
    }
  })
);

// search.addWidget(
//   instantsearch.widgets.refinementList({
//     container: '#hours__filter',
//     attribute: 'total hours',
//     operator: 'or',
//     limit: 5,
//     showMore: true,
//     cssClasses: {
//       item: 'list-categories__item',
//       count: 'badge pull-right',
//       active: 'active',
//       label: 'list-categories__link',
//       checkbox: 'checkbox'
//     }
//   })
// );

search.addWidget(
  instantsearch.widgets.stats({
    container: '.header-filter__result',
    cssClasses: {
      body: 'header-filter__number'
    }
  })
);

search.addWidget(
  instantsearch.widgets.clearRefinements({
    container: '.clear__filters',
    cssClasses: {
      button: 'button-outline tags__item clear__button'
    },
    templates: {
      // resetLabel: 'Clear All'
      item: `<div class="tags__item"><span class="button-outline">Clear All</span></div>`,
    },
  })
);
search.addWidget(
  instantsearch.widgets.toggleRefinement({
    container: '#cpl__filter',
    attribute: 'credit for prior learning',
    templates: {
      labelText: 'CPL',
    },
  })
);
search.addWidget(
  instantsearch.widgets.currentRefinements({
    container: '.tags',
    showMore: true,
    padding: 20,
    cssClasses: {
      item: 'tags__item button-outline',
      label: 'tags__text',
    },
  })
);
search.addWidget(
  instantsearch.widgets.rangeSlider({
    container: '#hours__filter',
    attribute: 'total hours',
    precision: 10
  })
);

search.start();
