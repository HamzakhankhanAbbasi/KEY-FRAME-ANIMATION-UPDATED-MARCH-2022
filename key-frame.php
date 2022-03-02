<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>JQUERY</title>
  <link rel="icon" href="assets/images/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/aos.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
/* keyframe-animation-of-moving-start-with-infinte-loop */
/* keyframe-without-timing-not-work whteher you give timing with animation or animation-duration */
/* .image-wrap{
  position:relative;
  animation:mymove;
  animation-duration: 5s;
}
@keyframes mymove {
  from {top: 0px;}
  to {top: 200px;}
} */
/* keyframe-animation-of-moving-end */


/* keyframe-animation-of-moving-only-one-time */
/* keyframe-without-timing-not-work whteher you give timing with animation or animation-duration */
/* animation-working-only-one-time-because-we-cannot-use-infinte */
/* .image-wrap{
  position:relative;
  animation:mymove infinite;
  animation-duration: 5s;
}
@keyframes mymove {
  from {top: 0px;}
  to {top: 200px;}
} */
/* keyframe-animation-of-moving-end */


/* animation-timing-function-start */
/* keyframe-without-timing-not-work whteher you give timing with animation or animation-duration */
/* .image-wrap {
  position: relative;
  animation: mymove 5s infinite;
  animation-timing-function:cubic-bezier(25,26,35, 40);
  ease-in-out
  linear 
   cubic-bezier(1, 0.6, 0.2, 0.5);
}
@keyframes mymove {
  from {left: 0px;}
  to {left: 200px;}
} */
/* animatio-timing-function-end */

/* animation-itertaion-count-in-keyframe-start */
/* .image-wrap {
  position: relative;
  animation: mymove 5s infinite;
  animation-iteration-count:3;
}
@keyframes mymove {
  from {top: 0px;}
  to {top:70px;}
} */
/* animation-itertaion-count-in-keyframe-End */

</style>  
</head>
<body>
<div class="image-wrap">
  <img src="assets/images/appstore.png" class="img-fluid">
</div>



<!-- <p class="jquery-text">This is jquery</p>
<button class="shows">Show</button>
<button class="hides">Hide</button> -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/custom.js"></script>
<script>
AOS.init();
</script>
</body>
</html>