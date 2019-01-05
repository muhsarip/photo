<section id="home" class="video-hero hidden" style="height: 800px; background-image: url(<?php echo base_url("assets/frontend") ?>/images/cover_img_2.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
<div class="overlay"></div>
    <div class="display-t text-center">
        <div class="display-tc">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="animate-box">
                        <h2>About Us</h2>
                        <p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span>About</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<div id="colorlib-about">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-md-6 animate-box">
                <?php 
                if($portofolio->youtube_link == ''){
                ?>
                <img  src="<?php echo base_url("assets/frontend/images/portofolio/".$portofolio->image) ?>" style="max-width:100%;height:auto;margin-bottom:20px" />
                <?php 
                }else{
                ?>
                <div class="video colorlib-video" style="background-image: url(<?php echo base_url("assets/frontend/images/portofolio/".$portofolio->image) ?>);">
                    <a href="<?php echo $portofolio->youtube_link ?>" class="popup-vimeo"><i class="icon-play3"></i></a>
                    <div class="overlay"></div>
                </div>
                <?php 
                }
                ?>
            </div>
            <div class="col-md-6 animate-box">
                <h2><?php echo $portofolio->title ?></h2>
                <?php echo $portofolio->description ?>
            </div>
        </div>
    </div>
</div>