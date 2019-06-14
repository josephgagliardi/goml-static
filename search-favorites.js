

var client = algoliasearch('JBY4H547QZ', '133c145ebb78c84a04aefb61c32dba1d');
var index = client.initIndex('goml_DEMO');


var favoritePrograms = index.getObjects(Object.keys(localStorage));

index.getObjects(Object.keys(localStorage), function(err, content) {
  if (err) throw err;
  var favoritePrograms = content['results'];
  $.each(favoritePrograms, function(element) {
    var item = favoritePrograms[element]
    if (item !== null) {
      var block = `
      <div class="col-lg-3 col-md-4 col-sm-6 courses__item">
            <div class="courses__top">
               <div class="courses__top__wrapper"><img class="courses__top__image" src="${item["logo"]}" alt=""></div>
            </div>
            <div class="courses__content">
               <a class="courses__content__title" href="/course-single.php?id=${item["objectID"]}">${item["Program Name"]}</a>
               <div class="courses__bottom">
               ${item["Institution"]}
                  <a class="courses__col-left" href="#"><span class="courses__content__institutions">${item["Area of Study"]}</span></a>
                  <ul class="list-tags pb-1">
                     <li>
                        <button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study" data-original-title="" title="">aos</button>
                     </li>
                     <li style="display:">
                        <button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning" data-original-title="" title="">cpl</button>
                     </li>
                     <li>
                        <button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program" data-original-title="" title="">120</button>
                     </li>
                  </ul>
                  ${item["Program Description"].substring(1, 175) + '...'}
               </div>
            </div>
            <div class="row">
            <div class="courses__icon bt-circle-fill-red col-sm-6"><i class="fas fa-flask"></i></div></div>`;
            $('#courses').append(block);
      };
    });
  });
