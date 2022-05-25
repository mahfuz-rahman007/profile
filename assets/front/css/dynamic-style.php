<?php

header("Content-Type:text/css");

$color = $_GET['color']; // Change Your Color Form Here


if( isset( $_GET[ 'color' ] ) ) {
    $color = '#'.$_GET[ 'color' ];
}else{
  $color = "#34b7a7";
}

?>


a:hover,
a.active,
.header-social-links a:hover,
.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a,
.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a,
.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a,
.about .content ul i,
.skills hr,
.facts .counters span,
.resume .resume-item h5,
.portfolio .portfolio-wrap .portfolio-links a:hover,
.facts .counters span,
.post-list li .post .post-details .post-title:hover
{
  color : <?php echo $color; ?>!important;
} 


.back-to-top,
.back-to-top:hover,
.btn-button,
.navbar > ul > li > a:before,
.section-title h2::after,
.skills .progress-bar,
.testimonials .swiper-pagination .swiper-pagination-bullet-active,
.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active,
#footer .social-links a,
.contact .info i,
nav.pagination-nav .page-item.active .page-link,
nav.pagination-nav .page-item:hover .page-link,
.content .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active

{
  background: <?php echo $color; ?>!important;

}

.btn-button:hover,
.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i,
#footer .social-links a:hover
{
  color : <?php echo $color; ?>!important;
  background: white !important;
  border: 1px solid <?php echo $color; ?>;

}

.testimonials .swiper-pagination .swiper-pagination-bullet,
.content .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet
{
  border: 1px solid <?php echo $color; ?>!important ;

}

.resume .resume-item
{
  border-left: 2px solid <?php echo $color; ?>!important;

}
.resume .resume-item::before  
{
  border: 2px solid <?php echo $color; ?>!important ;

}

.contact .php-email-form input:focus,
 .contact .php-email-form textarea:focus
{
  border-color: <?php echo $color; ?>!important;

}

.content .card .service-category{
  border-bottom: 1px solid <?php echo $color; ?>!important;

}

.portfolio-category li:hover a,
.portfolio-category li.active a
{
  background: <?php echo $color; ?>!important;
  color: white!important;
}



