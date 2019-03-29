<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
<?php include("includes/header.php"); ?>
<main>
   <div class="courseListing">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-3 column-left filters__list">
                <div class="column-left__item">
                 <h1 class="column-left__title">Degree Levels</h1>
                  <div class="select list-selector"><a class="column-left__button-drop" href="#filter1" data-toggle="collapse"><span class="column-left__button-drop__text" id="select-text">Degree Type</span><i class="fas fa-angle-down column-left__icon"></i></a>
                     <div class="list-categories degree-categories" id="level__filter"></div>
                  </div>
               </div>
                <div class="column-left__item">
                 <h1 class="column-left__title">University</h1>
                  <div class="select list-selector"><a class="column-left__button-drop" href="#filter1" data-toggle="collapse"><span class="column-left__button-drop__text" id="select-text">Degree Type</span><i class="fas fa-angle-down column-left__icon"></i></a>
                     <div class="list-categories degree-categories" id="institution__filter"></div>
                  </div>
               </div>
                <div class="column-left__item">
                 <h1 class="column-left__title">Area of Study</h1>
                  <div class="select list-selector"><a class="column-left__button-drop" href="#filter1" data-toggle="collapse"><span class="column-left__button-drop__text" id="select-text">Degree Type</span><i class="fas fa-angle-down column-left__icon"></i></a>
                     <div class="list-categories degree-categories" id="aos__filter"></div>
                  </div>
               </div>
                <div class="column-left__item">
                 <h1 class="column-left__title">Total Hours</h1>
                  <div class="select list-selector"><a class="column-left__button-drop" href="#filter1" data-toggle="collapse"><span class="column-left__button-drop__text" id="select-text">Degree Type</span><i class="fas fa-angle-down column-left__icon"></i></a>
                     <div class="list-categories degree-categories" id="hours__filter"></div>
                  </div>
               </div>
                <div class="column-left__item">
                 <h1 class="column-left__title">Credit for Prior Learning</h1>
                  <div class="select list-selector"><a class="column-left__button-drop" href="#filter1" data-toggle="collapse"><span class="column-left__button-drop__text" id="select-text">Degree Type</span><i class="fas fa-angle-down column-left__icon"></i></a>
                     <div class="list-categories degree-categories" id="cpl__filter"></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-9 col-md-9 column-right">
               <div class="header-filter">
                  <div class="header-filter__title">active filters</div>

                  <div class="header-filter__result">Result:<span class="header-filter__number">980 matches</span></div>
               </div>
               <div class="clear__filters" style="float: left;"></div>
               <div class="tags"></div>

               <div class="tabs">
                  <div class="row">
                     <div class="col-8 align-self-center">
                        <div class="form-search__input-group">
                           <div id="searchbox"></div>
                        </div>
                     </div>
                     <div class="col-4 align-self-center">
                        <div class="view-gird text-md-right text-sm-right">
                           <button id="list" class="view-gird__icon"><i class="fas fa-list"></i><span class="sr-only">List view</span></button>
                           <button id="grid" class="view-gird__icon"><i class="fas fa-th"></i><span class="sr-only">Grid view</span></button>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div id="courses" class="row">
<!--       <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
         <div class="courses__wrapper">
            <div class="courses__top">
               <div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/course-single/header-img-1.jpg" alt=""></div>
            </div>
            <div class="courses__content h-100">
               <a href="course-single.php" class="courses__content__title">Master of Education in Early Childhood Education</a>
               <div class="courses__bottom">
                  <a class="courses__col-left" href="#"><span class="courses__content__institutions">University Of West Georgia</span></a>
                  <ul class="list-tags">
                     <li>
                        <button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study" data-original-title="" title="">aos</button>
                     </li>
                     <li>
                        <button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning" data-original-title="" title="">cpl</button>
                     </li>
                     <li>
                        <button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program" data-original-title="" title="">em</button>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="courses__icon bt-circle-fill-red"><i class="fas fa-book-reader"></i></div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
         <div class="courses__wrapper h-100">
            <div class="courses__top">
               <div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/course-single/header-img-2.jpg" alt=""></div>
            </div>
            <div class="courses__content">
               <a class="courses__content__title" href="#">Bachelor of Science in Information Technology</a>
               <div class="courses__bottom">
                  <a class="courses__col-left" href="#"><span class="courses__content__institutions">Kennesaw State University</span></a>
                  <ul class="list-tags pb-1">
                     <li>
                        <button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study" data-original-title="" title="">aos</button>
                     </li>
                     <li>
                        <button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning" data-original-title="" title="">cpl</button>
                     </li>
                     <li>
                        <button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program" data-original-title="" title="">em</button>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="courses__icon bt-circle-fill-red"><i class="fas fa-flask"></i></div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
         <div class="courses__wrapper h-100">
            <div class="courses__top">
               <div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/course-single/header-img-3.jpg" alt=""></div>
            </div>
            <div class="courses__content">
               <a class="courses__content__title" href="#">Bachelor of Science in Information Technology</a>
               <div class="courses__bottom">
                  <a class="courses__col-left" href="#"><span class="courses__content__institutions">Kennesaw State University</span></a>
                  <ul class="list-tags pb-1">
                     <li>
                        <button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study" data-original-title="" title="">aos</button>
                     </li>
                     <li>
                        <button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning" data-original-title="" title="">cpl</button>
                     </li>
                     <li>
                        <button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program" data-original-title="" title="">em</button>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="courses__icon bt-circle-fill-red"><i class="fas fa-flask"></i></div>
         </div>
      </div> -->
   </div>
            </div>
               <div id="pagination__wrapper"></div>

            </div>
         </div>
         <nav class="breadcrumb-wrapper">
            <ul class="breadcrumb">
               <li class="breadcrumb-item"><a class="breadcrumb__link" href="index.html">home</a></li>
               <li class="breadcrumb-item active"><a class="breadcrumb__link active" href="#">Degrees & Programs</a></li>
            </ul>
         </nav>
      </div>
   </div>
</main> <?php include("includes/footer.php"); ?> <script src="/assets/js/couse-listing.js">
</script>
<script src="../../search.js"></script>
</html>
