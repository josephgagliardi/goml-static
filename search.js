/* global algoliasearch instantsearch */

const searchClient = algoliasearch(
  'JBY4H547QZ',
  '133c145ebb78c84a04aefb61c32dba1d'
);

const search = instantsearch({
  indexName: 'dev_PROGRAMS',
  searchClient,
  routing: true
});

search.addWidget(
  instantsearch.widgets.searchBox({
    container: '#searchBox',
    showSubmit: true,
    showReset: false,
    searchAsYouType: true,
    placeholder: 'Your future is merely a search away...',
    cssClasses: {
      item: 'form-search__input-group',
      input: 'form-control form-search__input',
      submit: 'btn form-search__button'
    }
  })
);

search.addWidget(
  instantsearch.widgets.hits({
    container: '#courses',
    templates: {
      empty: 'No results for <q>{{ query }}</q>',
      item: function(item) {
      cpl = item["credit for prior learning"] === "TRUE" ? "inherit" : "none";
      favoritedIcon = itemFavorited(item['objectID']) ? `<i class="fas fa-heart" onclick="favoriteDegree(this, ${item["objectID"]}, ${item["favorited_count"]});"></i>` : `<i class="far fa-heart" onclick="favoriteDegree(this, ${item["objectID"]}, ${item["favorited_count"]})"></i>`;
      favoritedCount = item['favorited_count']
      return `
            <div class="courses__top">
               <div class="courses__top__wrapper"><img class="courses__top__image" src="${item["logo"]}" alt=""></div>
            </div>
            ${favoritedIcon}
            <div class="courses__content">
               <a class="courses__content__title" href="/course-single.php?id=${item["objectID"]}">${item["program title"]}</a>
               <div class="courses__bottom">
               ${item["university"]}
                  <a class="courses__col-left" href="#"><span class="courses__content__institutions">${item["area of study"]}</span></a>
                  <ul class="list-tags pb-1">
                     <li>
                        <button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study" data-original-title="" title="">aos</button>
                     </li>
                     <li style="display: ${cpl}">
                        <button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning" data-original-title="" title="">cpl</button>
                     </li>
                     <li>
                        <button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program" data-original-title="" title="">120</button>
                     </li>
                  </ul>
                  ${item["program desc"].substring(1, 175) + '...'}
               </div>
            </div>
            <div class="row">
            <div class="courses__icon bt-circle-fill-red col-sm-6"><i class="fas fa-flask"></i></div>`;
      },
    },
    cssClasses: {
      list: 'row',
      item: '"col-lg-3 col-md-4 col-sm-6 courses__item'
    },
  })
);

function abbrv(str) {
    return str.replace(/\w{4,}/g, function (s) {
        var l = s.length;
        return s[0] + (l - 2) + s[l - 1];
    });
};

function itemFavorited(id){
  return !(localStorage.getItem(id) == null);
};

function removeFavorite(id){
  localStorage.removeItem(id);
};

function addFavorite(id){
  localStorage.setItem(id, id);
};

search.addWidget(
  instantsearch.widgets.pagination({
    container: '.pagination',
    showNext: true,
    showPrevious: false,
    showFirst: false,
    scrollTo: 'header',
    cssClasses: {
      root: 'pagination mx-auto',
      list: 'pagination pagination__list text-center',
      item: 'page-item pagination__item',
      link: 'page-link pagination__link',
      pageItem: 'pagination__item'
    }
  })
);


search.addWidget(
  instantsearch.widgets.refinementList({
    container: '#level__filter',
    attribute: 'program level',
    operator: 'or',
    limit: 5,
    showMore: true,
    searchForFacetValues: true,
    // searchable: true,
    searchablePlaceholder: 'Refine by Level...',
    sortBy: ['name:asc'],
    cssClasses: {
      // item: 'list-categories__item',
      list: 'select__list',
      item: 'select__item',
      count: 'select__number',
      active: 'active',
      label: 'list-categories__link',
      checkbox: 'filter__checkbox',
      showMore: 'see-more-button-text'
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
    searchablePlaceholder: 'Refine by Discipline...',
    sortBy: ['name:asc'],
    cssClasses: {
      item: 'list-categories__item',
      count: 'badge pull-right select__number',
      active: 'active',
      label: 'list-categories__link',
      checkbox: 'filter__checkbox',
      showMore: 'see-more-button-text'
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
    searchablePlaceholder: 'Choose School',
    sortBy: ['name:asc'],
    cssClasses: {
      list: 'select__list',
      item: 'select__item',
      count: 'select__number',
      active: 'active',
      label: 'list-categories__link',
      checkbox: 'filter__checkbox',
      showMore: 'see-more-button-text'
    }
  })
);

search.addWidget(
  instantsearch.widgets.stats({
    container: '.header-filter__number',
  })
);

search.addWidget(
  instantsearch.widgets.clearRefinements({
    container: '.clear__filters',
    cssClasses: {
      button: 'button-outline tags__item clear__button tags__item'
    },
    templates: {
      resetLabel: 'Clear All',
      item: `<div class="tags__item"><span class="button-outline">Clear All</span></div>`
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
    cssClasses: {
      list: 'select__list',
      item: 'select__item',
      count: 'select__number',
      active: 'active',
      label: 'list-categories__link',
      checkbox: 'filter__checkbox',
      showMore: 'see-more-button-text'
    },
  })
);
search.addWidget(
  instantsearch.widgets.currentRefinements({
    container: '.tags',
    cssClasses: {
      label: 'tags__item',
      delete: 'filter__delete far fa-times-circle tags__icon',
      categoryLabel: 'tags__text',
      category: 'tags__text',
    },
  })
);


search.start();

