<section id="home" class="video-hero" style="height: 800px; background-image: url(<?php echo base_url("assets/frontend") ?>/images/cover_img_2.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
<div class="overlay"></div>
    <div class="display-t text-center">
        <div class="display-tc">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="animate-box">
                        <h2>Blog</h2>
                        <p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span>Blog</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorlib-blog">
    <div class="container">
        <div class="row row-pb-md">
            <?php 
            if($blog->num_rows()>0){
                foreach($blog->result() as $key){
                    echo '
                    <div class="col-md-4 animate-box blog-item" >
                        <article class="article-entry">
                            <a href="'.base_url("blog/read/".$key->slug).'" class="blog-img" style="background-image: url('.base_url("assets/frontend/images/blog/".$key->image).');"></a>
                            <div class="desc">
                                <h2><a href="'.base_url("blog/read/".$key->slug).'">'.$key->title.'</a></h2>
                                <p>'.$key->summary.'</p>
                            </div>
                            <div class="admin">
                                <p> <span class="day"><i class="icon-calendar"></i> '.date("d F y",strtotime($key->created_at)).'</span></p>
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