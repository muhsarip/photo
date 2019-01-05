<section id="home" class="video-hero" style="height: 800px; background-image: url(<?php echo base_url("assets/frontend") ?>/images/cover_img_2.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
<div class="overlay"></div>
    <div class="display-t text-center">
        <div class="display-tc">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="animate-box">
                        <h2><?php echo $category->name; ?></h2>
                        <p class="breadcrumbs"><span><a href="<?php echo base_url() ?>">Home</a></span> <span><?php echo $category->name; ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorlib-gallery">
    <div class="container">
        <div class="row row-pb-md">
            <h2><?php echo $category->name; ?></h2>
            <?php 
            if($portofolio->num_rows()>0){
                foreach($portofolio->result() as $key){
                    echo '
                    <div class="col-md-3 no-gutters">
                        <a href="'.base_url("assets/frontend/images/portofolio/".$key->image).'" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="'.base_url("assets/frontend/images/portofolio/".$key->image).'" alt="">
                            <div class="desc text-center">
                                <h2>'.$key->title.'</h2>
                                <p class="category"><span>'.$key->category.'</span></p>
                            </div>
                        </a>
                        <br/>
                        <a href="'.base_url("portofolio/detail/".$key->id."/". str_replace(' ','-',$key->title)).'" class="btn btn-primary" >Detail <i class="fa fa-angle-right"></i></a>
                    </div>
                    ';
                }
            }else{
                echo '
                <div class="col-md-12 no-gutters text-center">
                    <img src="'.base_url("assets/frontend/images/empty.png").'" />
                    <p>Item tidak ditemukan.</p>
                </div>
                ';
            }
            ?>
        </div>
        <div class="row hidden">
            <div class="col-md-12 text-center">
                <ul class="pagination">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>