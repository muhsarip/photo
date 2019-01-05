<section id="home" class="video-hero" style="height: 800px; background-image: url(<?php echo base_url('assets/frontend/images/homepage/'.$homepage->background) ?>);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <a class="player" ></a> 
    <div class="display-t text-center">
        <div class="display-tc">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="animate-box">
                        <h1 class="holder"><span><?php echo $homepage->moto  ?></span></h1>
                        <h2><?php echo $homepage->moto_description  ?></h2>
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
<div class="colorlib-about-flex">
    <div class="col-half about-flex-img animate-box" style="background-image: url(<?php echo base_url('assets/frontend/images/homepage/'.$homepage->company_image) ?>);"></div>
    <div class="col-half">
        <div class="row">
            <div class="col-md-12 col-md-pull-2 animate-box">
                <div class="about-desc">
                    <h2><?php echo $homepage->company_title  ?></h2>
                    <?php echo $homepage->company_description  ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h2>Recent Blog</h2>
            </div>
        </div>
        <div class="row">
            <?php 
            if($recent_blog->num_rows()>0){
                foreach($recent_blog->result() as $key){
                    echo '
                    <div class="col-md-4 animate-box">
                        <article class="article-entry">
                            <a href="'.base_url("blog/read/".$key->slug).'" class="blog-img" style="background-image: url('.base_url("assets/frontend/images/blog/".$key->image).');"></a>
                            <div class="desc">
                                <h2><a href="'.base_url("blog/read/".$key->slug).'">'.$key->title.'</a></h2>
                                <p>'.$key->summary.'</p>
                            </div>
                            <div class="admin">
                                <p><span class="day"><i class="icon-calendar"></i> '.date("d F y",strtotime($key->created_at)).'</span> <span></span></p>
                            </div>
                        </article>
                    </div>
                    ';
                }
            }
            ?>
        </div>
    </div>
</div>

