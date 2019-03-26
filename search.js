/* global algoliasearch instantsearch */

const searchClient = algoliasearch(
  'JBY4H547QZ',
  '133c145ebb78c84a04aefb61c32dba1d'
);

const search = instantsearch({
  indexName: 'EC_courses',
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
    container: '#courses',
    templates: {
      item: `
        <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
           <div class="courses__wrapper h-100">
              <div class="courses__top">
                 <div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/course-single/header-img-3.jpg" alt=""></div>
              </div>
              <div class="courses__content">
                 <a class="courses__content__title" href="#">{{#helpers.highlight}}{ "attribute": "coursePrefix" }{{/helpers.highlight}}</a>
                 <div class="courses__bottom">
                    <a class="courses__col-left" href="#"><span class="courses__content__institutions">Kennesaw State University</span></a>
                    <ul class="list-tags pb-1">
                       <li>
                          <button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study">aos</button>
                       </li>
                       <li>
                          <button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning">cpl</button>
                       </li>
                       <li>
                          <button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program">em</button>
                       </li>
                    </ul>
                 </div>
              </div>
              <div class="courses__icon bt-circle-fill-red"><i class="fas fa-flask"></i></div>
           </div>
        </div>
      `,
    },
  })
);

search.addWidget(
  instantsearch.widgets.pagination({
    container: '.pagination__list',
  })
);

search.start();
