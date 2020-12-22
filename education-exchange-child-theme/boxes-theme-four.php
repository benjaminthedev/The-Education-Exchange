<?php
/*
 * Template Name: Boxes Theme Four
 *
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

<div class="container">

<div id="primary" class=" clr">
<div class="custom-boxes">

<div class="main-box customOne">
<article class="box_rule">

<?php if( get_field('main_heading') ): ?>
<h1 class="main_heading"><?php the_field('main_heading'); ?></h1>                               
<?php endif; ?>

<?php if( get_field('smaller_heading') ): ?>
<h3 class="smaller_heading"><?php the_field('smaller_heading'); ?></h3>                                                                     
<?php endif; ?>

</article>
</div>




                        <a href="<?php the_field('box_1_link_url'); ?>" class="main-box one" >
                            <article class="box_rule">
                                <div class="golden-rule__number">1</div>
                                  

                                <div class="box-rule-details">
                                    <p><?php the_field('box_1_hover_text'); ?></p>
                                </div>    


                              <div class="image-wrapper">
                                <?php if( get_field('box_1_image') ): ?>
                                    <img src="<?php the_field('box_1_image'); ?>" class="box-image"/>
                                <?php endif; ?>
                              </div>  

                                  <h1 class="box-heading">
                                    <?php the_field('box_1_heading'); ?>
                                  </h1>
                            </article>
                        </a>

                        <a href="<?php the_field('box_2_link_url'); ?>" class="main-box two">
                            <article class="box_rule">
                                <div class="golden-rule__number">2</div>
                                    

                                <div class="box-rule-details">
                                    <p><?php the_field('box_2_hover_text'); ?></p>
                                </div>    

                              <div class="image-wrapper">
                                <?php if( get_field('box_2_image') ): ?>
                                    <img src="<?php the_field('box_2_image'); ?>" class="box-image"/>
                                <?php endif; ?>
                              </div>  

                                   <h1 class="box-heading">
                                    <?php the_field('box_2_heading'); ?>
                                  </h1>
                            </article>
                        </a>

                        <a href="<?php the_field('box_3_link_url'); ?>" class="main-box three">
                            <article class="box_rule">
                                <div class="golden-rule__number">3</div>
                                    

                                <div class="box-rule-details">
                                    <p><?php the_field('box_3_hover_text'); ?></p>
                                </div>    

                              <div class="image-wrapper">      
                                <?php if( get_field('box_3_image') ): ?>
                                    <img src="<?php the_field('box_3_image'); ?>" class="box-image"/>
                                <?php endif; ?>
                              </div>  

                                 <h1 class="box-heading">
                                    <?php the_field('box_3__heading'); ?>
                                  </h1>
                            </article>
                        </a>       
                        
                        <a href="<?php the_field('box_4_link_url'); ?>" class="main-box four">
                            <article class="box_rule">
                                <div class="golden-rule__number">4</div>
                                    

                                <div class="box-rule-details">
                                    <p><?php the_field('box_4_hover_text'); ?></p>
                                </div>    

                              <div class="image-wrapper">      
                                <?php if( get_field('box_4_image') ): ?>
                                    <img src="<?php the_field('box_4_image'); ?>" class="box-image"/>
                                <?php endif; ?>
                              </div>  

                                 <h1 class="box-heading">
                                    <?php the_field('box_4_heading'); ?>
                                  </h1>
                            </article>
                        </a>      
                        
                        <a href="<?php the_field('box_5_link_url'); ?>" class="main-box five">
                            <article class="box_rule">
                                <div class="golden-rule__number">5</div>
                                    

                                <div class="box-rule-details">
                                    <p><?php the_field('box_5_hover_text'); ?></p>
                                </div>    


                              <div class="image-wrapper">        
                                <?php if( get_field('box_5_image') ): ?>
                                    <img src="<?php the_field('box_5_image'); ?>" class="box-image"/>
                                <?php endif; ?>
                              </div>  

                                  <h1 class="box-heading">
                                    <?php the_field('box_5_heading'); ?>
                                  </h1>
                            </article>
                        </a>      
                    </div>
              </div>
</div>
<?php get_footer(); ?>