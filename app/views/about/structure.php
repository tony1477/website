<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/team/lounge-head-office.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content">
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('structure-topbar-title')?></h2>
                        <!-- <p>Businex always try to provide the best Business Solutions for Clinets
                            to grow up their Business very sharply and smoothly.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Team Area Wrapper ==-->
<div class="team-page-area-wrapper bg-offwhite sp-y bg-overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 order-lg-0 order-md-0 order-md-0">
                <?php require_once('sidebar.php')?>
            </div>
            <div class="col-md-6 col-lg-9 order-1">
                <div class="about-content ms-0">
                    <h2 class="text-center">Struktur Organisasi</h2>
                    <div class="row">
                        <!-- <a href="<?=BASE_URL?>public/assets/img/about/struktur-org.png"><img src="<?=BASE_URL?>public/assets/img/about/struktur-org.png" alt="Sturcture Organization" class="img-scale" /></a> -->
                        <!-- <div class="img-magnifier-container"> -->
                            <img id="myimage" src="<?=BASE_URL?>public/assets/img/team/struktur_new.png" class="img-scale" alt="Structure WPG">
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Team Area Wrapper ==-->
<?php
$scriptfooter = <<<EOF
<script type="text/javascript">
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}

function downloadstructure() {
    console.log('test')
}
</script>
<script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/

</script>
EOF;
?>