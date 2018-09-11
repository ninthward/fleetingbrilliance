<?php /* Template Name: homePage */ ?>

<?php

get_header(); ?>

<div class="container">
        <div class="row homePageContentRow">
    <div class="col-lg-4 laPtop"><i class="fa fa-laptop frontPageFA" aria-hidden="true"></i>
            </div>
            <div class="col-lg-8"><h1>Hi, I'm a graphic and web designer.</h1></div>
        </div>
        <div class="row homePageContentRow">
            <div class="col-lg-4 text-center"><i class="fa fa-bicycle frontPageFA" aria-hidden="true"></i></div>
            <div class="col-lg-8"><h1>I love WordPress, Skeleton, CSS Grid, JS and bicycles.</h1>
            </div>
        </div>

        <div class="row homePageContentRow">
            <div class="col-lg-6"><h1>I make awesome things for awesome people.</h1></div>
            <div class="col-lg-6">
                <ul class="homePageList">
                    <li><h3><i class="fa fa-thumbs-o-up listFA" aria-hidden="true" style="color: magenta"></i>
                            I will work with you to make your vision a reality.</h3></li>
                    <li><h3><i class="fa fa-clock-o listFA" aria-hidden="true" style="color: yellow"></i>
                            On time deliverables benefits everyone.</h3></li>
                    <li><h3><i class="fa fa-files-o listFA" aria-hidden="true" style="color: #00b9eb"></i>
                            Data backups and version control ensure your work is safe.</h3></li>
                    <li><h3><i class="fa fa-pencil listFA" aria-hidden="true" style="color: black"></i>
                            I start every project with a sketch pad and pencil.</h3></li>
                </ul>
            </div>
        </div>
        <div class="row homePageContentRow">
            <div class="col-lg-12">
                <h3 class="homePageheader">Have a question? Want to collaborate? Just drop me a line.</h3>
        <?php echo do_shortcode("[contact-form-7 id=\"25\" title=\"contactcampbellmckeogh\"]"); ?>
        </div>
        </div>
        <div class="row homePageContentRow">
          <div class="col-lg-5 laPtop text-center"><a href="https://www.behance.net/campbellmckeogh" target="_blank"><i class="fa fa-behance frontPageFA" aria-hidden="true"></i></a></div>
          <div class="col-lg-7"><h1>Please view my online portfolio on Behance.</h1></div>
        </div>
        <div class="row homePageContentRow">
            <div class="col-lg-4 text-center"><a href="mailto:campbellmckeogh@gmail.com"><i class="fa fa-envelope-o frontPageFA" aria-hidden="true"></i>
                </a></div>
            <div class="col-lg-8"><h1>Let's discuss your next project, or get an estimate.</h1></div>
        </div>
        </div>



</div>

<?php
get_sidebar();
get_footer();
