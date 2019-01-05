<style type="text/css" media="screen">
	.box {
		padding: 20px;
	}
</style>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card  animation-slide animation2">
                    <!-- <div class="card-header">
                        <h4 class="card-title">Light Bootstrap Table Heading</h4>
                        <p class="card-category">Created using Montserrat Font Family</p>
                    </div> -->
                    <div class="card-body gc-area">
                        <div><?php echo $output; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function(){
    
    if("<?php echo ($this->input->get('category_id') != ''?'1':'') ?>" == "1"){
        $("#field-category_id").val("<?php  echo $this->input->get('category_id') ?>")
    }
    $("#field-category_id").on("change",function(){
        window.location.href = window.location.pathname + "?category_id=" + $(this).val();
    })
}, false);

</script>