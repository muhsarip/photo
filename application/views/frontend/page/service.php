<section id="home" class="video-hero" style="height: 800px; background-image: url(<?php echo base_url("assets/frontend/images") ?>/cover_img_2.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
<div class="overlay"></div>
    <div class="display-t text-center">
        <div class="display-tc">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="animate-box">
                        <h2>Services</h2>
                        <p class="breadcrumbs"><span><a href="<?php echo base_url() ?>">Home</a></span> <span>Services</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="colorlib-services">
    <div class="container">
        <div class="row">
            <?php 
            if($services->num_rows()>0){
                foreach($services->result() as $key){
                    echo '
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <img src="'.base_url("assets/frontend/images/service/".$key->image).'" style="width:80px;height:auto;" />
                            </span>
                            <div class="desc">
                                <h3>'.$key->title.'</h3>
                                <p>'.$key->description.'</p>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
            ?>
        </div>
    </div>
</div>