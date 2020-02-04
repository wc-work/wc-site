<?php 
/* 
 * Template Name: About Us Page
 * Template Post Type: page
 */
get_header(); ?>

	<main role="main">
		<section>
            <div class="banner container-fluid">
                <img src="http://webcrumbs.site/wp-content/uploads/2020/02/WebCrumbs-Group-Photo-JPEG-scaled.jpg">
            </div>
        </section>
        <section>
            <div class="box">
                <div class="grid">
                    <div class="grid-temp">
                        <div class="item1">
                            <picture class="picback">
                                <img src="http://webcrumbs.site/wp-content/uploads/2020/02/webcrumbs-left-quotation.png">
                            </picture>
                        </div>
                        <div class="quotation item2">
                            <p>At WebCrumbs, we always make sure to have our HAT on...</p>
                        </div>
                        <div class="item3">
                            <picture class="picback">
                                <img src="http://webcrumbs.site/wp-content/uploads/2020/02/webcrumbs-right-quotation.png">
                            </picture>
                        </div>
                    </div>          
                </div>
            </div>      
        </section>
        <section>
            <div id="crumbs" class="carousel slide container-fluid banner" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#crumbs" data-slide-to="0" class="active">
                </li>
                <li data-target="#crumbs" data-slide-to="1">
                </li>
                <li data-target="#crumbs" data-slide-to="2">
                </li>
            </ul>
				<div class="carousel-inner">
					<div class="carousel-item active">
                        <div class="carousel-caption">
                            <h1><strong>H</strong> A T</h1>
                            <h2><strong>Helpful</strong></h2>
                            <h3>We are a click, text, call, drive <br> away, and always ready to help.</h3>
                        </div> 
  					</div>
  					<div class="carousel-item">
                        <div class="carousel-caption">
                            <h1>H <strong>A</strong> T</h1>
                            <h2><strong>Authentic</strong></h2>
                            <h3>We work to showcase the best, <br> unique you in the digital world.</h3>
                        </div> 
  					</div>
					<div class="carousel-item">
                        <div class="carousel-caption">
                            <h1>H A <strong>T</strong></h1>
                            <h2><strong>Transparent</strong></h2>
                            <h3>We believe in a relationship <br> with honest communication.</h3>
                        </div> 
  					</div>
				</div>
			</div>
        </section>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>