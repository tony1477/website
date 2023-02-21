<!--== Start About Area Wrapper ==-->
<div class="about-area-wrapper sm-top">
    <div class="container">
        <div class="row align-items-lg-center">
            <h2 class="text-center">Video Gallery</h2>
            <div class="col-md-6 col-lg-4 mb-5">
                <iframe width="375" height="200" src="https://www.youtube.com/embed/aCrBlNe1-dM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <iframe width="375" height="200" src="https://www.youtube.com/embed/r2u-sXXoKs8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <iframe  width="375" height="200" src="https://www.youtube.com/embed/_oupUMis5Ng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <iframe width="375" height="200" src="https://www.youtube.com/embed/gn0b3rvKM_M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <iframe width="375" height="200" src="https://www.youtube.com/embed/9Ewy38vJgRc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <iframe  width="375" height="200" src="https://www.youtube.com/embed/I_N5iZtMFc0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
        </div>
    </div>
</div>
<div class="sm-top-wt"></div>
<!--== End About Area Wrapper ==-->

<?php
$scriptfooter = <<<EOF
<script type="text/javascript">
$(document).ready(function(){
    $(".fancybox").fancybox({
          openEffect: "none",
          closeEffect: "none"
      });
      
      $(".zoom").hover(function(){
          
          $(this).addClass('transition');
      }, function(){
          
          $(this).removeClass('transition');
      });
  });
</script>
EOF;
