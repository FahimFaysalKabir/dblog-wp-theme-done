<?php get_header(); ?>

<body <?php body_class();?>>

	
     
<!-- Preloader Start -->
  <div class="preloader">
  <div class="rounder"></div>
   </div>
   <!-- Preloader End -->
   
   
 
 
 <div id="main">
     <div class="container">
         <div class="row">
           
            
              
              <!-- About Me (Left Sidebar) Start -->
              <div class="col-md-3">
                <div class="about-fixed">
                 
                  <div class="my-pic">
                     <img src="<?php echo get_template_directory_uri();?>/images/pic/my-pic.png" alt="">
                     <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
                      <div id="menu" class="collapse">
                        <ul class="menu-link">
                            <?php wp_nav_menu('mmmm');?>
                         </ul>
                      </div>
                     </div>
                   
                   
                   
                   <div class="my-detail">
                   
                     <div class="white-spacing">
                         <h1>Alex Parker</h1>
                         <span>Web Developer</span>
                         <ul>
                         <?php 
                         
                         new WP_Query(array(
                           'post_type' =>'aftab'
                         ));
                         while(have_posts(  )):the_post(  ); ?>
                            <li>
                             <?php 
                             the_title(); ?>
                            </li>
                             <!-- Blog Post End -->
                             <?php endwhile; ?>
                         
                         </ul> 
                     </div> 
                    
                    <ul class="social-icon">
                      <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
                     </ul>

                 </div>
               </div>
             </div>
             <!-- About Me (Left Sidebar) End -->

                                <!-- Blog Post Start -->
                                <?php while(have_posts(  )):the_post(  ); ?>
                                <div class="col-md-12 blog-post">
                                	<div class="post-image">
                                    <?php the_post_thumbnail(); ?>                                     
                                    </div> 
                                    <div class="post-title">
                                      <a href="single.html"><h1><?php
                                      the_title();?></h1></a>
                                    </div>  
                                    <div class="post-info">
                                    	<span><?php the_time('F d, Y'); ?> / by <?php the_author()?></span>
                                    </div>  
                                    <p><?php echo (the_content())?>                         			
                                  
                                </div>
                                <!-- Blog Post End -->
                                <?php endwhile; ?>
                                <hr>
                                <?php comments_popup_link('sorry no comments..........','1 comment','% comments done'); ?>
                                <hr>
                                <?php comments_template();?>
                                
<?php get_footer(); ?> 
