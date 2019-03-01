<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
<?php include("includes/header.php"); ?>
<main>
    <div class="courseListing">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 column-left">
                    <div class="column-left__item">
                        <h1 class="column-left__title">Dregree Levels</h1>
                        <div class="select list-selector"><a class="column-left__button-drop" href="#filter1" data-toggle="collapse"><span class="column-left__button-drop__text" id="select-text">Dregree Type</span><i class="fas fa-angle-down column-left__icon"></i></a>
                            <div class="list-categories" id="filter1">
                                <ul class="list-categories__list">
                                    <li class="list-categories__item">
                                        <a href="#" class="list-categories__link active">All Degree Levels</a>
                                    </li>
                                    <li class="list-categories__item">
                                        <a href="#" class="list-categories__link">Certificate</a>
                                    </li>
                                    <li class="list-categories__item">
                                        <a href="#" class="list-categories__link">Associate</a>
                                    </li>
                                    <li class="list-categories__item">
                                        <a href="#" class="list-categories__link">Bachelor's</a>
                                    </li>
                                    <li class="list-categories__item">
                                        <a href="#" class="list-categories__link">Master's</a>
                                    </li>
                                    <li class="list-categories__item">
                                        <a href="#" class="list-categories__link">Doctorate</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column-left__item">
                        <h1 class="column-left__title">Institutions</h1>
                        <div class="select list-selector">
                            <a class="column-left__button-drop" data-toggle="collapse" href="#filter2" role="button" aria-expanded="false">
                                <span class="column-left__button-drop__text">Institutions</span><i class="fas fa-angle-down column-left__icon"></i></a>
                            <div class="list-categories" id="filter2">
                                <ul class="select__list">
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="abac" value="Abraham Baldwin Agricultural College">
                                            <label for="abac">Abraham Baldwin Agricultural College</label>
                                        </div><span class="select__number">125</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="asu" value="Albany State University">
                                            <label for="asu">Albany State University</label>
                                        </div><span class="select__number">246</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="amsc" value="Atlanta Metropolitan State College">
                                            <label for="amsc">Atlanta Metropolitan State College</label>
                                        </div><span class="select__number">21</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="au" value="Augusta University">
                                            <label for="au">Augusta University</label>
                                        </div><span class="select__number">56</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="csu" value="Clayton State University">
                                            <label for="">Clayton State University</label>
                                        </div><span class="select__number">48</span>
                                    </li>
                                </ul>
                                <button type="button" class="button-text" data-toggle="modal" data-target=".filter2-modal">see more</button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade filter2-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Institutions</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12 select">
                                                    <ul class="select__list columns-3">
                                                        <li class="select__item">
                                                            <div class="ckeckbox">
                                                                <input class="select__checkmark" type="checkbox" id="ccg" value="College of Coastal Georgia College">
                                                                <label for="ccg">College of Coastal Georgia</label>
                                                            </div><span class="select__number">125</span>
                                                        </li>
                                                        <li class="select__item">
                                                            <div class="ckeckbox">
                                                                <input class="select__checkmark" type="checkbox" id="columbus" value="Columbus State University">
                                                                <label for="columbus">Columbus State University</label>
                                                            </div><span class="select__number">246</span>
                                                        </li>
                                                        <li class="select__item">
                                                            <div class="ckeckbox">
                                                                <input class="select__checkmark" type="checkbox" id="dsc" value="Dalton State College">
                                                                <label for="dsc">Dalton State College</label>
                                                            </div><span class="select__number">21</span>
                                                        </li>
                                                        <li class="select__item">
                                                            <div class="ckeckbox">
                                                                <input class="select__checkmark" type="checkbox" id="egsc" value="East Georgia State College">
                                                                <label for="egsc">East Georgia State College</label>
                                                            </div><span class="select__number">56</span>
                                                        </li>
                                                        <li class="select__item">
                                                            <div class="ckeckbox">
                                                                <input class="select__checkmark" type="checkbox" id="fvsu" value="Fort Valley State University">
                                                                <label for="fvsu">Fort Valley State University</label>
                                                            </div><span class="select__number">48</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button-outline-02" data-dismiss="modal">Clear All</button>
                                        <button type="button" class="button-default-lg">View Results</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-left__item">
                        <h1 class="column-left__title">Areas of Study</h1>
                        <div class="select list-selector"><a class="column-left__button-drop" href="#filter3" data-toggle="collapse"><span class="column-left__button-drop__text">Fields of Study</span><i class="fas fa-angle-down column-left__icon"></i></a>
                            <div class="list-categories" id="filter3">
                                <ul class="select__list">
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="arts-humanities" value="Arts & Humanities">
                                            <label for="arts-humanities">Arts & Humanities</label>
                                        </div><span class="select__number">125</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="behavioral-science" value="Behavioral Science">
                                            <label for="behavioral-science">Behavioral Science</label>
                                        </div><span class="select__number">246</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="business" value="Business">
                                            <label for="skill-level-beginner">Business</label>
                                        </div><span class="select__number">21</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="computer-science" value="Computer Science">
                                            <label for="computer-science">Computer Science</label>
                                        </div><span class="select__number">234</span>
                                    </li>
                                </ul><button type="button" class="button-text" data-toggle="modal" data-target=".filter3-modal">see more</button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade filter3-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Fields of Study</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12 select">
                                                    sdfdfg
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button-outline-02" data-dismiss="modal">Clear All</button>
                                        <button type="button" class="button-default-lg">View Results</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-left__item">
                        <h1 class="column-left__title">eMajor</h1>
                        <div class="select list-selector"><a class="column-left__button-drop" href="#emajor" data-toggle="collapse"><span class="column-left__button-drop__text">emajor</span><i class="fas fa-angle-down column-left__icon"></i></a>
                            <div class="list-categories" id="emajor">
                                <ul class="select__list">
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="single-institution" value="Single Institution">
                                            <label for="single-institution">Single Institution</label>
                                        </div><span class="select__number">3</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="collaborative" value="Collaborative">
                                            <label for="collaborative">Collaborative</label>
                                        </div><span class="select__number">2</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 col-md-9 column-right">
                    <div class="header-filter">
                        <div class="header-filter__title">active filters</div>
                        <div class="header-filter__result">Result:<span class="header-filter__number">980 matches</span></div>
                    </div>
                    <div class="tags">
                        <div class="tags__item"><span class="button-outline">Clear All</span></div>
                        <div class="tags__item"><i class="far fa-times-circle tags__icon"></i><span class="tags__text">Dregree Type</span></div>
                        <div class="tags__item"><i class="far fa-times-circle tags__icon"></i><span class="tags__text">Institutions</span></div>
                        <div class="tags__item"><i class="far fa-times-circle tags__icon"></i><span class="tags__text">Fields of Study</span></div>
                        <div class="tags__item"><i class="far fa-times-circle tags__icon"></i><span class="tags__text">eMjor</span></div>
                    </div>
                    <div class="tabs">
                        <div class="row">
                            <div class="col-8 align-self-center">
                                <div class="form-search__input-group">
                                    <input class="form-control form-search__input" type="text" placeholder="Search for degree...">
                                    <div class="form-search__btn-group">
                                        <button class="btn form-search__button" type="submit"><i class="fas fa-search form-search__icon"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 align-self-center">
                                <div class="view-gird text-md-right text-sm-right">
                                    <button class="view-gird__icon"><i class="fas fa-list"></i></button>
                                    <button class="view-gird__icon"><i class="fas fa-th"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wrapper">
                                <div class="courses__top">
                                    <div class="courses__top__wrapper">
                                        <img class="courses__top__image" src="/assets/img/course-single/header-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="courses__content col-equal"><a class="courses__content__title" href="course-single.php">Master of Education in Early Childhood Education</a>
                                    <a class="courses__col-left" href="#"><span class="courses__content__institutions">University of West Georgia</span></a>
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
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wrapper">
                                <div class="courses__top">
                                    <div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/courses-image/1.jpg" alt=""></div>
                                </div>
                                <div class="courses__content col-equal"><a class="courses__content__title" href="#">Bachelor of Science in Information Technology</a>
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
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wrapper">
                                <div class="courses__top">
                                    <div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/courses-image/2.jpg" alt=""></div>
                                </div>
                                <div class="courses__content col-equal"><a class="courses__content__title" href="#">Associate of Science in Financial Technology (Fintech)</a>
                                    <div>
                                        <a class="courses__col-left" href="#"><span class="courses__content__institutions">Middle Georgia State University</span></a>
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
                            </div>
                        </div>
                    </div>
                    <style>
                        .thumbnail {
                            margin-bottom: 20px;
                            padding: 0px;
                            -webkit-border-radius: 0px;
                            -moz-border-radius: 0px;
                            border-radius: 0px;
                        }

                        .courses__item.list-group-item {
                            float: none;
                            width: 100%;
                            flex: 0 0 100%;
                            max-width: 100%;
                            background-color: #fff;
                            margin-bottom: 10px;
                        }

                        .courses__item.list-group-item:nth-of-type(odd):hover,
                        .item.list-group-item:hover {
                            background: #428bca;
                        }

                        .courses__item.list-group-item .courses__top__image {
                            display: none;
                        }

                        .courses__item.list-group-item .thumbnail {
                            margin-bottom: 0px;
                        }

                        .courses__item.list-group-item .caption {
                            padding: 9px 9px 0px 9px;
                        }

                        .courses__item.list-group-item:nth-of-type(odd) {
                            background: #eeeeee;
                        }
                        .courses__item.list-group-item:after {
                            clear: both;
                        }

                        .list-group-item-text {
                            margin: 0 0 11px;
                        }

                    </style>
                    <div class="btn-group">
                        <button id="list" class="btn btn-default btn-sm">List</button>
                        <button id="grid" class="btn btn-default btn-sm">Grid</button>
                    </div>

                    <div id="products" class="row">

                        <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wrapper">
                                <div class="courses__top">
                                    <div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/courses-image/1.jpg" alt=""></div>
                                </div>
                                <div class="courses__content col-equal"><a class="courses__content__title" href="#">Bachelor of Science in Information Technology</a>
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
                        </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wrapper">
                                <div class="courses__top">
                                    <div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/courses-image/1.jpg" alt=""></div>
                                </div>
                                <div class="courses__content col-equal"><a class="courses__content__title" href="#">Bachelor of Science in Information Technology</a>
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
                        </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wrapper">
                                <div class="courses__top">
                                    <div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/courses-image/1.jpg" alt=""></div>
                                </div>
                                <div class="courses__content col-equal"><a class="courses__content__title" href="#">Bachelor of Science in Information Technology</a>
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
                        </div>
                       
                    

                    </div>



                    <nav class="mx-auto" style="width: 200px;">
                        <ul class="pagination pagination__list text-center">
                            <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">prev</a></li>
                            <li class="page-item pagination__item"><a class="page-link pagination__link active" href="#">1</a></li>
                            <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">2</a></li>
                            <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">3</a></li>
                            <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">...</a></li>
                            <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">next</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
            <nav class="breadcrumb-wrapper">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a class="breadcrumb__link" href="index.html">home</a></li>
                    <li class="breadcrumb-item active"><a class="breadcrumb__link active" href="#">degree and course listing</a></li>
                </ul>
            </nav>
        </div>
    </div>
</main>
<?php include("includes/footer.php"); ?>
<script src="/assets/js/couse-listing.js"></script>

</html>
