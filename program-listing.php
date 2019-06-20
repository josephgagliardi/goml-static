<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
<?php include("includes/header.php"); ?>
<main>
  <div class="courseListing">
    <div class="container">
      <div class="row">

        <!-- Filters & Search Menu -->
        <div class="col-lg-3 col-md-3 column-left">
          <div class="column-left__item">
            <h1 class="column-left__title">Degree Levels</h1>
            <div class="select list-selector"><a class="column-left__button-drop" href="#level__filter" data-toggle="collapse"><span class="column-left__button-drop__text" id="select-text">Degree Type</span><i class="fas fa-angle-down column-left__icon"></i></a>
              <div class="list-categories" id="level__filter">
              </div>
            </div>
          </div>
          <div class="column-left__item">
            <h1 class="column-left__title">Institutions</h1>
            <div class="select list-selector">
              <a class="column-left__button-drop" data-toggle="collapse" href="#filter2" role="button" aria-expanded="false">
                <span class="column-left__button-drop__text">Institutions</span><i class="fas fa-angle-down column-left__icon"></i></a>
              <div class="list-categories" id="institution__filter">
              </div>
            </div>
          </div>
          <div class="column-left__item">
            <h1 class="column-left__title">Areas of Study</h1>
            <div class="select list-selector"><a class="column-left__button-drop" href="#aos__filter" data-toggle="collapse"><span class="column-left__button-drop__text">Fields of Study</span><i class="fas fa-angle-down column-left__icon"></i></a>
              <div class="list-categories" id="aos__filter">
              </div>
            </div>

          </div>
          <div class="column-left__item">
            <h1 class="column-left__title">Special Attributes</h1>
            <div class="select list-selector"><a class="column-left__button-drop" href="#cpl__filter" data-toggle="collapse"><span class="column-left__button-drop__text">Fields of Study</span><i class="fas fa-angle-down column-left__icon"></i></a>
              <div class="list-categories" id="cpl__filter">
              </div>
            </div>

          </div>

        </div>
        <!-- Active Filters and Stats -->
        <div class="col-lg-9 col-md-9 column-right">
          <div class="header-filter">
            <div class="header-filter__title">active filters</div>
            <div class="header-filter__result">Result:<span class="header-filter__number"></span></div>
          </div>
          <div class="clear__filters"></div>
          <div class="tags">
          </div>
          <div class="tabs">
            <div class="row">
              <div class="col-8 align-self-center" id="searchBox">
              </div>
              <div class="col-4 align-self-center">
                <div class="view-gird text-md-right text-sm-right">
                  <button id="list" class="view-gird__icon"><i class="fas fa-list"></i><span class="sr-only">List view</span></button>
                  <button id="grid" class="view-gird__icon"><i class="fas fa-th"></i><span class="sr-only">Grid view</span></button>
                </div>
              </div>
            </div>
          </div>

          <!-- Search Results Section -->
          <div id="courses"></div>

          <!-- Pagination -->
          <div class="pagination" width="200"></div>

        </div>
      </div>

    </div>
  </div>
</main> <?php include("includes/footer.php"); ?>
<!-- <script src="/assets/js/couse-listing.js">
</script> -->
<script src="../../search.js"></script>

</html>
