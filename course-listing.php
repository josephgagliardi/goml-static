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
                        <h1 class="column-left__title">Dregree Type</h1>
                        <div class="select list-selector"><a class="column-left__button-drop" href="#filter1" data-toggle="collapse"><span class="column-left__button-drop__text" id="select-text">Dregree Type</span><i class="fas fa-angle-down column-left__icon"></i></a>
                            <div class="list-catagories" id="filter1">
                                <ul class="list-catagories__list">
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link active">All Degree Levels</a>
                                    </li>
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link">Certificate</a>
                                    </li>
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link">Associate</a>
                                    </li>
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link">Bachelor's</a>
                                    </li>
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link">Master's</a>
                                    </li>
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link">Doctorate</a>
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
                            <div class="list-catagories" id="filter2">
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
                        <h1 class="column-left__title">Fields of Study</h1>
                        <div class="select list-selector"><a class="column-left__button-drop" href="#filter3" data-toggle="collapse"><span class="column-left__button-drop__text">Fields of Study</span><i class="fas fa-angle-down column-left__icon"></i></a>
                            <div class="list-catagories" id="filter3">
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
                            <div class="list-catagories" id="emajor">
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
                        <div class="tags__item"><span class="btn-outline">Clear All</span></div>
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
                                    <span class="view-gird__icon" id="view-course-list"><i class="fas fa-list"></i></span>
                                    <span class="view-gird__icon" id="view-course-gird"><i class="fas fa-th"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="courses-by-gird">
                        <div class="row courses__list">
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/0.jpg" alt=""></div>
                                    </div>
                                    <div class="courses__content col-equal"><a class="courses__content__title" href="course-single.php">Master of Education in Early Childhood Education </a>
                                        <div><a class="courses__col-left" href="#">
                                            <span class="courses__content__institutions">University of West Georgia</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/1.jpg" alt=""></div>
                                    </div>
                                    <div class="courses__content col-equal"><a class="courses__content__title" href="#">Bachelor of Science in Information Technology</a>
                                        <div><a class="courses__col-left" href="#"><span class="courses__content__institutions">Kennesaw State University</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/2.jpg" alt=""></div>
                                    </div>
                                    <div class="courses__content col-equal"><a class="courses__content__title" href="#">Associate of Science in Financial Technology (Fintech)</a>
                                        <div><a class="courses__col-left" href="#"><span class="courses__content__institutions">Middle Georgia State University</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="courses-by-list">
                        <div class="row courses__list">
                            <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                    <div class="courses__top col-equal">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/0.jpg" alt=""></div>
                                    </div>
                                    <div class="courses__content col-equal"><a class="courses__content__title" href="#">Master of Education in Early Childhood Education </a>
                                        <div>
                                            <a class="courses__col-left" href="#"><span class="courses__content__institutions">University of West Georgia</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                    <div class="courses__top col-equal">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/1.jpg" alt=""></div>
                                    </div>
                                    <div class="courses__content col-equal"><a class="courses__content__title" href="#">Bachelor of Science in Information Technology</a>
                                        <div>
                                            <a class="courses__col-left" href="#"><span class="courses__content__institutions">Kennesaw State University</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                    <div class="courses__top col-equal">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/2.jpg" alt=""></div>
                                    </div>
                                    <div class="courses__content col-equal"><a class="courses__content__title" href="#">Associate of Science in Financial Technology (Fintech)</a>
                                        <div>
                                            <a class="courses__col-left" href="#">
                                            <span class="courses__content__institutions">Middle Georgia State University</span></a>
                                        </div>
                                    </div>
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
        </div>
    </div>
    <div class="container">
        <nav class="breadcrumb-wapper">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a class="breadcrumb__link" href="index.html">home</a></li>
                <li class="breadcrumb-item active"><a class="breadcrumb__link active" href="#">degree and course listing</a></li>
            </ul>
        </nav>
    </div>
</main>
<?php include("includes/footer.php"); ?>
<script src="/assets/js/couse-listing.js"></script>

</html>
