  
  
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
                
                
                
                
                 
                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                    		
                            
                            <div class="sub-title">
                           		<h2>My Blog</h2>
                                <a href="contact.html"><i class="icon-envelope"></i></a>
                             </div>
                            
                            
                            <div class="col-md-12 content-page">
                            	
                                
                              
                                
                                
                               
                                
                                
                                
                                <!-- Blog Post Start -->
                                <?php while(have_posts(  )):the_post(  ); ?>
                                <div class="col-md-12 blog-post">
                                	<div class="post-image">
                                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?> </a>                                    
                                    </div> 
                                    <div class="post-title">
                                      <a href="single.html"><h1><?php
                                      the_title();?></h1></a>
                                    </div>  
                                    <div class="post-info">
                                    	<span><?php the_time('F d, Y'); ?> / by <?php the_author()?></span>
                                    </div>  
                                    <p><?php echo wp_trim_words(get_the_content(),20,false)?>                         			
                                    <a href="<?php the_permalink();?>"> Read More </a>
                                </div>
                                <!-- Blog Post End -->
                                <?php endwhile; ?>
                                
                                
                               
                                
                                
                                
                               
                                
                                
                               
                                
                                
                                
                               
                                
                                
                                <div class="col-md-12 text-center">
                                 <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
                                 <div id="post-end-message"></div>
                                </div>
                                
                             </div>
                              
                         </div>
                         
                        
                        
                        <!-- Subscribe Form Start -->
                        <div class="col-md-8 col-md-offset-2">
                           <form id="mc-form" method="post" action="http://uipasta.us14.list-manage.com/subscribe/post?u=854825d502cdc101233c08a21&amp;id=86e84d44b7">
								
						  <div class="subscribe-form margin-top-20">
							 <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
							  <button class="submit-btn" type="submit">Submit</button>
								</div>
                                <p>Subscribe to my weekly newsletter</p>
								<label for="mc-email" class="mc-label"></label>
							  </form>
                             
                           </div>
                           <!-- Subscribe Form End -->
                           
                         </div>
 <?php get_footer(); ?>                    
                     
    
    