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
                        <h1 class="column-left__title">Categories</h1>
                        <div class="select list-selector"><a class="column-left__button-drop" href="#list-catagories" data-toggle="collapse" id="btn-list-catagories"><span class="column-left__button-drop__text" id="select-text">Categories</span><i class="fas fa-angle-down column-left__icon"></i></a>
                            <div class="list-catagories list-catagories" id="list-catagories">
                                <ul class="list-catagories__list">
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link active">all</a>
                                    </li>
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link">Art and humanlities</a>
                                    </li>
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link">business</a>
                                    </li>
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link">computer science</a>
                                    </li>
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link">data science</a>
                                    </li>
                                    <li class="list-catagories__item">
                                        <a href="#" class="list-catagories__link">information technology</a>
                                    </li>
                                </ul><a class="column-left__link" href="#">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="column-left__item">
                        <h1 class="column-left__title">topics</h1>
                        <div class="select list-selector"><a class="column-left__button-drop" href="#topics" data-toggle="collapse" id="btn-topics"><span class="column-left__button-drop__text">topics</span><i class="fas fa-angle-down column-left__icon"></i></a>
                            <div class="list-catagories topics" id="topics">
                                <ul class="select__list">
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="topics-Courses" value="Courses" name="topics">
                                            <label for="topics-Courses">Courses</label>
                                        </div><span class="select__number">125</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="topics-Design" value="Design" name="topics">
                                            <label for="topics-Design">Design</label>
                                        </div><span class="select__number">246</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="topics-learning" value="learning" name="topics">
                                            <label for="topics-learning">learning</label>
                                        </div><span class="select__number">21</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="topics-Level" value="Level" name="topics">
                                            <label for="topics-Level">Level</label>
                                        </div><span class="select__number">234</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="topics-photoshop" value="photoshop" name="topics">
                                            <label for="topics-photoshop">photoshop</label>
                                        </div><span class="select__number">48</span>
                                    </li>
                                </ul>
                                <button type="button" class="button-text" data-toggle="modal" data-target=".topics-modal">see more</button>
                                <!-- Modal -->
                                <div class="modal fade topics-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Topics</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <ul class="select__list columns-3">
                                                                <li class="select__item">
                                                                    <div class="ckeckbox">
                                                                        <input class="select__checkmark" type="checkbox" id="topics-Courses" value="Courses" name="topics">
                                                                        <label for="topics-Courses">Courses</label>
                                                                    </div><span class="select__number">125</span>
                                                                </li>
                                                                <li class="select__item">
                                                                    <div class="ckeckbox">
                                                                        <input class="select__checkmark" type="checkbox" id="topics-Design" value="Design" name="topics">
                                                                        <label for="topics-Design">Design</label>
                                                                    </div><span class="select__number">246</span>
                                                                </li>
                                                                <li class="select__item">
                                                                    <div class="ckeckbox">
                                                                        <input class="select__checkmark" type="checkbox" id="topics-learning" value="learning" name="topics">
                                                                        <label for="topics-learning">learning</label>
                                                                    </div><span class="select__number">21</span>
                                                                </li>
                                                                <li class="select__item">
                                                                    <div class="ckeckbox">
                                                                        <input class="select__checkmark" type="checkbox" id="topics-Level" value="Level" name="topics">
                                                                        <label for="topics-Level">Level</label>
                                                                    </div><span class="select__number">234</span>
                                                                </li>
                                                                <li class="select__item">
                                                                    <div class="ckeckbox">
                                                                        <input class="select__checkmark" type="checkbox" id="topics-photoshop" value="photoshop" name="topics">
                                                                        <label for="topics-photoshop">photoshop</label>
                                                                    </div><span class="select__number">48</span>
                                                                </li>
                                                                <li class="select__item">
                                                                    <div class="ckeckbox">
                                                                        <input class="select__checkmark" type="checkbox" id="topics-Courses" value="Courses" name="topics">
                                                                        <label for="topics-Courses">Courses</label>
                                                                    </div><span class="select__number">125</span>
                                                                </li>
                                                                <li class="select__item">
                                                                    <div class="ckeckbox">
                                                                        <input class="select__checkmark" type="checkbox" id="topics-Design" value="Design" name="topics">
                                                                        <label for="topics-Design">Design</label>
                                                                    </div><span class="select__number">246</span>
                                                                </li>
                                                                <li class="select__item">
                                                                    <div class="ckeckbox">
                                                                        <input class="select__checkmark" type="checkbox" id="topics-learning" value="learning" name="topics">
                                                                        <label for="topics-learning">learning</label>
                                                                    </div><span class="select__number">21</span>
                                                                </li>
                                                                <li class="select__item">
                                                                    <div class="ckeckbox">
                                                                        <input class="select__checkmark" type="checkbox" id="topics-Level" value="Level" name="topics">
                                                                        <label for="topics-Level">Level</label>
                                                                    </div><span class="select__number">234</span>
                                                                </li>
                                                                <li class="select__item">
                                                                    <div class="ckeckbox">
                                                                        <input class="select__checkmark" type="checkbox" id="topics-photoshop" value="photoshop" name="topics">
                                                                        <label for="topics-photoshop">photoshop</label>
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
                        </div>
                    </div>
                    <div class="column-left__item">
                        <h1 class="column-left__title">skill level</h1>
                        <div class="select list-selector"><a class="column-left__button-drop" href="#skill-level" data-toggle="collapse" id="btn-skill-level"><span class="column-left__button-drop__text">skill level</span><i class="fas fa-angle-down column-left__icon"></i></a>
                            <div class="list-catagories skill-level" id="skill-level">
                                <ul class="select__list">
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="skill-level-advanced" value="advanced" name="skill-level">
                                            <label for="skill-level-advanced">advanced</label>
                                        </div><span class="select__number">125</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="skill-level-Appropriate for all" value="Appropriate for all" name="skill-level">
                                            <label for="skill-level-Appropriate for all">Appropriate for all</label>
                                        </div><span class="select__number">246</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="skill-level-beginner" value="beginner" name="skill-level">
                                            <label for="skill-level-beginner">beginner</label>
                                        </div><span class="select__number">21</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="skill-level-intermediate" value="intermediate" name="skill-level">
                                            <label for="skill-level-intermediate">intermediate</label>
                                        </div><span class="select__number">234</span>
                                    </li>
                                </ul><a class="column-left__link" href="#">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="column-left__item">
                        <h1 class="column-left__title">duration</h1>
                        <div class="select list-selector"><a class="column-left__button-drop" href="#duration" data-toggle="collapse" id="btn-duration"><span class="column-left__button-drop__text">duration</span><i class="fas fa-angle-down column-left__icon"></i></a>
                            <div class="list-catagories duration" id="duration">
                                <ul class="select__list">
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="duration-0-2 Hours" value="0-2 Hours" name="duration">
                                            <label for="duration-0-2 Hours">0-2 Hours</label>
                                        </div><span class="select__number">125</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="duration-3-6 Hours" value="3-6 Hours" name="duration">
                                            <label for="duration-3-6 Hours">3-6 Hours</label>
                                        </div><span class="select__number">246</span>
                                    </li>
                                    <li class="select__item">
                                        <div class="ckeckbox">
                                            <input class="select__checkmark" type="checkbox" id="duration-7-16 Hours" value="7-16 Hours" name="duration">
                                            <label for="duration-7-16 Hours">7-16 Hours</label>
                                        </div><span class="select__number">246</span>
                                    </li>
                                </ul><a class="column-left__link" href="#">see more</a>
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
                        <div class="tags__item"><i class="far fa-times-circle tags__icon"></i><span class="tags__text">Business</span></div>
                        <div class="tags__item"><i class="far fa-times-circle tags__icon"></i><span class="tags__text">Design</span></div>
                        <div class="tags__item"><i class="far fa-times-circle tags__icon"></i><span class="tags__text">Beginner</span></div>
                    </div>
                    <div class="tabs">

                        <div class="sort-right">
                            <div class="view-gird">
                                <span class="view-gird__icon" id="view-course-list"><i class="fas fa-list"></i></span>
                                <span class="view-gird__icon" id="view-course-gird"><i class="fas fa-th"></i></span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="courses-by-gird">
                        <div class="row courses__list">
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/0.jpg" alt=""></div>
                                    </div>
                                    <div class="courses__content col-equal"><a class="courses__content__title" href="#">Master of Education in Early Childhood Education </a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__institutions">University of West Georgia</span></a>
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
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__institutions">Kennesaw State University</span></a>
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
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__institutions">Middle Georgia State University</span></a>
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
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__institutions">University of West Georgia</span></a>
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
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__institutions">Kennesaw State University</span></a>
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
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__institutions">Middle Georgia State University</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination__list">
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
<script src="assets/js/jquery-matchHeight.js"></script>
<script src="assets/js/couse-listing.js"></script>

</html>
