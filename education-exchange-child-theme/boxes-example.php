<?php
/*
 * Template Name: Boxes Example
 *
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

	
<div id="content-wrap" class="container clr">

    <div id="primary" class=" clr">

    <style>


body{
    background-color: #ececec;
}

.custom-boxes {
    display: flex;
    animation-delay: 2s;
    flex-wrap: wrap;
    /* If I want to make it boxed more 
    width: 960px;
    margin: 0 auto;
    */

}

.main-box{
    min-width: 30%;
    margin: 20px 10px;
}

.main-box:nth-child(6){
    background-color: #FC485C;
    
}

.main-box:nth-child(6) .box-heading{
    color: #fff;
}




@media only screen and (max-width: 1210px) {
  body {
    /* background-color: green; */
  }
  

  .main-box{
    min-width: 45%;
  }

  article.box_rule{
    min-width: 45%;
  }
}

@media only screen and (max-width: 712px) {
  body {
    /* background-color: lightblue; */
  }

  .main-box{
    min-width: 100%;
  }

  article.box_rule{
    min-width: 100%;
  }
}





article.box_rule {
    border: solid 10px #fff;
    padding: 30px;
    height: 22rem;
    position: relative;
    background-color: transparent;
    -webkit-transition: background-color .4s,opacity .4s;
    transition: background-color .4s,opacity .4s;
    display: block;   
}

article.box_rule:hover {
    background: white;
    opacity: 1;
}

.box-rule-details {
    display: none;
}

article.box_rule:hover .box-rule-details  {
    display:block;
}



.golden-rule.animate a article {
    -webkit-transition: background-color .4s,opacity .4s 0s;
    transition: background-color .4s,opacity .4s 0s;
}

.golden-rule__number {
    color: #fc485d;
    font-size: 3.125rem;
    top: 0;
    left: 0;
    font-weight: bold;
    letter-spacing: -.16px;
    line-height: 100%;
}

.box-heading{
       font-size: 2.125rem;
    font-weight: 300;
    letter-spacing: -.11px;
    color: #282828;
    line-height: 120%;
    position: absolute;
    left: 0;
    bottom: 0;
    margin: 0;
    padding: 30px;
    line-height: 105%;
    opacity: 1;
    -webkit-transition: opacity .4s;
    transition: opacity .4s;
    max-width: 280px;
}




/* Fade In Animation */

/* Keyframes for the fade-in */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.main-box {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.main-box.one {
  -webkit-animation-delay: 0.1s;
  -moz-animation-delay: 0.1s;
  animation-delay: 0.1s;
}

.main-box.two {
  -webkit-animation-delay: .3s;
  -moz-animation-delay: .3s;
  animation-delay: .3s;
}

.main-box.three {
  -webkit-animation-delay: .6s;
  -moz-animation-delay: .6s;
  animation-delay: .6s;
}
.main-box.four {
  -webkit-animation-delay: .9s;
  -moz-animation-delay: .9s;
  animation-delay: .9s;
}

.main-box.five {
  -webkit-animation-delay: 1.2s;
  -moz-animation-delay:1.2s;
  animation-delay: 1.2s;
}

.main-box.six {
  -webkit-animation-delay: 1.5s;
  -moz-animation-delay: 1.5s;
  animation-delay: 1.5s;
}
.main-box.seven {
  -webkit-animation-delay: 1.8s;
  -moz-animation-delay: 1.8s;
  animation-delay: 1.8s;
}

.fade-in.eight {
  -webkit-animation-delay: 2.1s;
  -moz-animation-delay: 2.1s;
  animation-delay: 2.1s;
}

.fade-in.nine {
  -webkit-animation-delay: 2.4s;
  -moz-animation-delay: 2.4s;
  animation-delay: 2.4s;
}
.fade-in.ten {
  -webkit-animation-delay: 2.7s;
  -moz-animation-delay: 2.7s;
  animation-delay: 2.7s;
}

.fade-in.eleven {
  -webkit-animation-delay: 3s;
  -moz-animation-delay: 3s;
  animation-delay: 3s;
}

.fade-in.twelve {
  -webkit-animation-delay: 3.3s;
  -moz-animation-delay: 3.3s;
  animation-delay: 3.3s;
}



</style>
	

    
                    <div class="custom-boxes">


                        <a href="<?php the_field('box_1_link_url'); ?>" class="main-box one" >
                            <article class="box_rule">
                                <div class="golden-rule__number">1</div>
                                  

                                <div class="box-rule-details">
                                    <p><?php the_field('box_1_hover_text'); ?></p>
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

                                  <h1 class="box-heading">
                                    <?php the_field('box_5_heading'); ?>
                                  </h1>
                            </article>
                        </a>      
                        
                        <a href="<?php the_field('box_6_link_url'); ?>" class="main-box six">
                            <article class="box_rule">
                                <!-- <div class="golden-rule__number">1</div> -->
                                    

                                <div class="box-rule-details">
                                    <p><?php the_field('box_6_hover_text'); ?></p>
                                </div>    
                                
                                 <h1 class="box-heading">
                                    <?php the_field('box_6_heading'); ?>
                                  </h1>

                                <!-- <div class="arrow">></div> -->
                            </article>
                        </a>                        



                    </div>
                    

                        <!-- 

                            //Flexbox


                            1, outer-box - number
                            2, inner-content
                            3, hover-state - number
                        


                        -->




    </div>


</div>
	

		

	

	

	


                     

                    
         

<?php get_footer(); ?>