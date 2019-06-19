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
      item: function(item) {
      cpl = item["Credit for Prior Learning"] === "TRUE" ? "inherit" : "none";
      aos = abbrv(item["Area of Study"]);
      hours = item["Total Credit Hours"] ? item["Total Credit Hours"] : 'N/A';
      favoritedIcon = itemFavorited(item['objectID']) ? `<i class="fas fa-heart" onclick="favoriteDegree(this, ${item["objectID"]}, ${item["favorited_count"]});"></i>` : `<i class="far fa-heart" onclick="favoriteDegree(this, ${item["objectID"]}, ${item["favorited_count"]})"></i>`;
      favoritedCount = item['favorited_count']
      return `
            <div class="courses__top">
               <div class="courses__top__wrapper"><img class="courses__top__image" src="/assets/img/program-single/header-img-1.jpg" alt="">${favoritedIcon}</div>
            </div>
            <div class="courses__content">
               <a class="courses__content__title" href="/program-single.php?id=${item["objectID"]}">${item["Program Name"]}</a>
               <div class="courses__bottom">
               ${item["Institution"]}
                  <a class="courses__col-left" href="#"><span class="courses__content__institutions">${item["Area of Study"]}</span></a>
                  
               </div>
            </div>
            <div class="row">
            <div class="courses__icon bt-circle-fill-red col-sm-6"><i class="fas fa-flask"></i></div>`;
			},
		},
		cssClasses: {
			list: 'row',
			item: 'col-lg-4 col-md-6 col-xs-12 courses__item'
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
    attribute: 'Area of Study',
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
    attribute: 'Institution',
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
    attribute: 'Credit for Prior Learning',
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
