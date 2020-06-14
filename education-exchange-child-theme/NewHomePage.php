<?php
/*
 * Template Name: New Home Page
 *
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/ScrollToPlugin.min.js"></script>

<script>
function goToSection(i, st) {
  gsap.to(window, {
    scrollTo: {
      y: (i + 1) * innerHeight, 
      autoKill: false
    },
    duration: 1,
    onUpdate: () => {
      const scrollY = st.scroll() * 2 - innerHeight * 2;
      if(scrollY >= 0) {
        setRightScroll(scrollY);
      }
    }
  });
}

const setRightScroll = gsap.quickSetter(".right-section", "y", "px");
const snapSections = gsap.utils.toArray(".left-section .box");
snapSections.forEach((section, i) => {
  
  ScrollTrigger.create({
    trigger: section,
    onEnter: self => goToSection(i, self),
  });
  
  if(i !== snapSections.length - 1) {
    ScrollTrigger.create({
      trigger: section,
      start: "bottom bottom",
      onEnterBack: self => goToSection(i, self),
    });
  }
});
</script>


<div class="clear"></div>





    <div class="headerSectionNew">

    <h1 class="headingOne"><?php the_field('heading'); ?> </h1>

    <?php the_field('first_paragraph'); ?>
    <?php the_field('second_paragraph'); ?>
    <?php the_field('third_paragraph'); ?>

    

    <a href="<?php the_field('header_link_url'); ?>" class="standardBtn">Create Account</a>  

    <img src="<?php the_field('header_graphic')?>" alt="Home Page Graphic" class="homePageMainImg">
    
    </div><!-- end headerSectionNew -->


    <div class="flexWrapper">

    <div class="firstBoxLeft">
        <?php the_field('box_1_left'); ?>
    </div><!-- end firstBoxLeft -->

    <div class="firstBoxRight">
        <?php the_field('box_1_right'); ?>
    </div><!-- end firstBoxRight -->

    </div><!-- end flexWrapper -->

    <div class="flexWrapper" >


    <div class="secondBoxLeft">
        <?php the_field('box_2_left'); ?>
    </div><!-- end secondBoxLeft -->
    

    <div class="secondBoxRight">
        <?php the_field('box_2_right'); ?>
    </div><!-- end secondBoxLeft -->

    </div><!-- end flexWrapper -->

 


    <div class="flexWrapper">

    <div class="thirdBoxLeft">
        <?php the_field('box_3_left'); ?>
    </div><!-- end thirdBoxLeft -->

    <div class="thirdBoxRight">
        <?php the_field('box_3_right'); ?>
    </div><!-- end thirdBoxLeft -->

    </div><!-- end flexWrapper -->



    <div class="flexWrapper">

    <div class="fourthBoxLeft">
        <?php the_field('box_4_left'); ?>
    </div><!-- end fourthBoxLeft -->

    <div class="fourthBoxRight">
        <?php the_field('box_4_right'); ?>
    </div><!-- end fourthBoxLeft -->

    </div><!-- end flexWrapper -->



    <div class="flexWrapper">

    <div class="fifthBoxLeft">
        <?php the_field('box_5_left'); ?>
    </div><!-- end fifthhBoxLeft -->

    <div class="fifthBoxRight">
        <?php the_field('box_5_right'); ?>
    </div><!-- end fifthBoxLeft -->

    </div><!-- end flexWrapper -->    







    


<style>

.clear{
    clear:both;
}

.headerSectionNew{
    background: #001035;
    height: 100vh; /* Use vh as a fallback for browsers that do not support Custom Properties */
    height: calc(var(--vh, 1vh) * 100);
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 60px 250px;
    text-align: center;
}

.headingOne{
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
    font-weight: 700;
}

.homePageMainImg{
    width: 80%;
    margin-top: 70px;
}

.flexWrapper {
    display: flex;
    flex-direction: row;
}

/* Btn */

.standardBtn, 
.standardBtn-box2,
.standardBtn-box3,
.standardBtn-box4{
    padding: 10px 75px;
    background: #f1637e;    
    border-radius: 5px;
    text-transform:capitalize;
    font-weight: 700;
    letter-spacing: 0.04rem;
    color: #fff;
    margin-top: 40px;
    display: inline-block;
}

.standardBtn-box2{
    background: #fcb34d;
}

.standardBtn-box3{
    background: #5eb3e4;
} 

.standardBtn-box4{
    background: #25346b;
}



/*-- Boxes General Styles --*/
/*Headings*/
.flexWrapper h2{
    font-size: 31px;
    font-weight: 700;
    color: #fff;
}
/* Widths and Padding - Text Boxes */
.firstBoxLeft,
.secondBoxRight, 
.thirdBoxLeft,
.fourthBoxRight,
.fifthBoxLeft{
    width: 50%;
    height: 100vh;
    align-items: center;
    padding:100px 170px 50px 170px;
    color: #fff;
}

/* Widths and Padding - Image Boxes */
.firstBoxRight,
.secondBoxLeft,
.thirdBoxRight,
.fourthBoxLeft,
.fifthBoxRight{
    width: 50%;
    height: 100vh;
    padding: 30px 60px;
}
/* Image Styling */
.flexWrapper img {
    width: 75%;
    margin: 0 auto;
    margin-top: 100px;
}

/* Text Colours */
/* .flexWrapper p,
.flexWrapper ul li,{
    color: #fff;
} */

/* First Boxes - Backgrounds */
.firstBoxLeft {
    background: #25346b;    
}

.firstBoxRight {
    background: #3a4779;
}

/* Second Boxes - Backgrounds */

.secondBoxLeft {
    background: #7ec2e9;
}

.secondBoxRight {
    background: #5eb3e4;
}

/* Third Boxes - Backgrounds */
.thirdBoxLeft {
    background: #fcb34d;
}

.thirdBoxRight {
    background: #fdc982;
}

/* Fourth Boxes - Backgrounds */
.fourthBoxLeft {
    background: #f591a4;
}

.fourthBoxRight {
    background: #f1637e;
}

/* Fifth Boxes - Backgrounds */
.fifthBoxLeft {
    background: #9646b2;
}

.fifthBoxRight {
    background: #ab6bc1;
}





/* Responsive Styles */
@media only screen and (max-width: 960px) {

/*-- top section --*/
.headerSectionNew {
    /* padding: 80px 110px; */
    padding: 50px 60px;
}

  /*-- All Boxes --*/


.flexWrapper {
    display: flex;
    flex-direction: column;
}

  .firstBoxLeft,
  .firstBoxRight,
  .secondBoxLeft,
  .secondBoxRight,
  .thirdBoxLeft,
  .thirdBoxRight,
  .fourthBoxLeft,
  .fourthBoxRight,
  .fifthBoxLeft,
  .fifthBoxRight{
    width: 100%;
    padding: 50px 60px;
  } 

 



}







</style>


<script>

</script>




<?php get_footer(); ?>