<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
<?php include("includes/header.php"); ?>
<main>
    <section class="banner" style="background-image: url(/assets/img/home/main-search-background-01.jpg);">
        <div class="main-search-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>
                            Success is
                            <!-- Typed words can be configured in script settings at the bottom of this HTML file -->
                            <span class="typed-words"></span>
                        </h1>
                        <h2>Explore top-rated program from across Georgia </h2>

                        <div class="main-search-input">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="select list-selector">
                                        <a class="column-left__button-drop" href="#level" data-toggle="collapse" id="btn-topics">
                                            <span class="column-left__button-drop__text">Dregree Levels</span><i class="fas fa-angle-down column-left__icon"></i></a>
                                        <div class="list-categories" id="level">
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
                                <div class="col-md-7 border-left">
                                    <div class="main-search-input-item">
                                        <input type="text" placeholder="What are you looking for?" value="">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="button button-outline float-md-right">Search</button>
                                </div>
                            </div><!-- End of Row -->

                        </div>
                    </div>
                </div>
                <!-- Features Categories -->
            </div>

        </div>
    </section>
 



</main>
<?php include("includes/footer.php"); ?>
<script src="/assets/js/home-search.js"></script>
<script src="/assets/js/typed.js"></script>
<script>
    var typed = new Typed('.typed-words', {
        strings: ["knowing your path", "learning the way you want", " just a search away"],
        typeSpeed: 40,
        backSpeed: 40,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });

</script>

</html>
