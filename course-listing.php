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
               
               <div id="courses__list__wrapper" class="row"></div>
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
