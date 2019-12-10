/* global algoliasearch instantsearch */

const searchClient = algoliasearch(
  'JBY4H547QZ',
  '133c145ebb78c84a04aefb61c32dba1d'
);

const search = instantsearch({
  indexName: 'goml_DEMO',
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
      item: function (item) {
        cpl = item["Credit for Prior Learning"] === "TRUE" ? "inherit" : "none";
        aos = abbrv(item["Area of Study"]);
        hours = item["Total Credit Hours"] ? item["Total Credit Hours"] : 'N/A';
        favoritedIcon = itemFavorited(item['objectID']) ? `<i class="fas fa-heart" onclick="favoriteDegree(this, ${item["objectID"]}, ${item["favorited_count"]});"></i>` : `<i class="far fa-heart" onclick="favoriteDegree(this, ${item["objectID"]}, ${item["favorited_count"]})"></i>`;
        favoritedCount = item['favorited_count']
        switch (item['Area of Study']) {
          case 'Healthcare':
            icon = 'fa-notes-medical'
            break;
          case 'Business':
            icon = 'fa-briefcase'
            break;
          case 'Social Sciences':
            icon = 'fa-brain'
            break;
          case 'Technology/Computer Science':
            icon = 'fa-laptop-code'
            break;
          case 'Performing Arts':
            icon = 'fa-theater-masks'
            break;
          case 'Physical Sciences':
            icon = 'fa-leaf'
            break;
          case 'History':
            icon = 'fa-landmark'
            break;
          case 'English':
            icon = 'fa-book'
            break;
          case 'Education':
            icon = 'fa-apple-alt'
            break;
          default:
            icon = 'fa-briefcase'
            break;
        }
        return `
          <div class="list-content">
              <i class="fas ${icon} column-left__icon"></i>
              <div class="courses__top">
                 <div class="courses__top__wrapper"><img class="courses__top__image align-self-center" src="/assets/img/institutions/${item['Institution'].replace(/\s+/g, '-').toLowerCase()}.svg" alt="">${favoritedIcon}</div>
              </div>
            <div class="courses__content">
               <a class="courses__content__title" href="/program-single.php?id=${item["objectID"]}">${item["Program Name"]}</a>
                <a href="/program-listing.php?refinementList%5BInstitution%5D%5B0%5D=${item["Institution"]}"><span class="courses__content__institutions">${item["Institution"]}</span></a>
               <div class="courses__bottom">
                  <a href="/program-listing.php?refinementList%5BArea%20of%20Study%5D%5B0%5D=${item["Area of Study"]}">
                   <div class="area-of-study">
                      ${item["Area of Study"]}
                    <div>
                    </a>
                </div>
          </div>  
          </div>`;
      },
    },
    cssClasses: {
      list: '',
      item: ''
    },
  })
);

function favoriteDegree(el, id, count) {
  if (itemFavorited(id)) {
    removeFavorite(id);
    el.classList.remove('fas');
    el.classList.add('far');
    newCount = `${count - 1}`;
    console.log(newCount);
  } else {
    addFavorite(id);
    el.classList.remove('far');
    el.classList.add('fas');
    newCount = `${count + 1}`;
  }
};

function abbrv(str) {
  return str.replace(/\w{4,}/g, function (s) {
    var l = s.length;
    return s[0] + s[l - 6];
  });
};

function itemFavorited(id) {
  return !(localStorage.getItem(id) == null);
};

function removeFavorite(id) {
  localStorage.removeItem(id);
};

function addFavorite(id) {
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
    attribute: 'Degree Level',
    operator: 'or',
    limit: 5,
    showMore: true,
    searchForFacetValues: true,
    // searchable: true,
    searchablePlaceholder: 'Refine by Level...',
    sortBy: ['name:asc'],
    cssClasses: {
      count: 'badge select__number',
      showMore: 'see-more-button-text',
      label: 'list-categories__link',
      checkbox: 'filter__checkbox'
    }
  })
);

search.addWidget(
  instantsearch.widgets.refinementList({
    container: '#aos__filter',
    attribute: 'Area of Study',
    operator: 'or',
    limit: 5,
    showMore: true,
    searchablePlaceholder: 'Refine by Discipline...',
    sortBy: ['name:asc'],
    cssClasses: {
      count: 'badge select__number',
      showMore: 'see-more-button-text',
      label: 'list-categories__link',
      checkbox: 'filter__checkbox'
    }
  })
);


search.addWidget(
  instantsearch.widgets.refinementList({
    container: '#collab__filter',
    attribute: 'Collaborative',
    operator: 'or',
    limit: 5,
    showMore: true,
    searchablePlaceholder: 'Refine by Collaborative...',
    sortBy: ['name:asc'],
    cssClasses: {
      count: 'badge select__number',
      showMore: 'see-more-button-text',
      label: 'list-categories__link',
      checkbox: 'filter__checkbox'
    }
  })
);

search.addWidget(
  instantsearch.widgets.refinementList({
    container: '#institution__filter',
    attribute: 'Institution',
    operator: 'or',
    limit: 5,
    showMore: true,
    searchablePlaceholder: 'Choose School',
    sortBy: ['name:asc'],
    cssClasses: {
      count: 'badge select__number',
      showMore: 'see-more-button-text',
      label: 'list-categories__link',
      checkbox: 'filter__checkbox'
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
      resetLabel: '<i class="fas fa-redo-alt"></i>Clear All'
    },
  })
);

search.addWidget(
  instantsearch.widgets.toggleRefinement({
    container: '#cpl__filter',
    attribute: 'Credit for Prior Learning',
    templates: {
      labelText: 'CPL',
    },
    cssClasses: {
      count: 'badge select__number',
      showMore: 'see-more-button-text',
      label: 'list-categories__link',
      checkbox: 'filter__checkbox'
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
