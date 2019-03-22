<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<style>
    .up{
        
    }
    .file-upload {
        background-color: rgba(255, 255, 255, 0.5);
        width: 500px;
        height:600px;
        margin: 0 auto;
        padding: 20px;
        /* #0a7feb */
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #1583e9;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #15824B;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #1AA059;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 500px;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
    margin-top: 20px;
    border: 4px dashed #1583e9;
    position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        
        background-color: #e7f2fd;
        border: 4px dashed #ffffff;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #393e46;
        padding: 60px 0;
    }

    .drag-text:hover h3:hover {
        color: #ffffff;
    }

    .file-upload-image {
        max-height: 500px;
        max-width: auto;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }
    
    .btn-remove{
        transition: all .2s ease;
        width:100%;
        height: 50px;
        font-size: 16px;
        font-weight: 600;
        display: inline-block;
        padding: 0 30px;
        text-align: center;
        text-transform: capitalize;
        background-color: #cd4535;
        border: none;
        border-radius: 50px;
        color: #ffffff;
    }
    
    .img-proc{
        max-width:500px;
        max-height:auto;
        /* background-color:#0a7feb; */
        background-color: rgba(10, 127, 235, 0.9);
        margin: 0 auto;
        padding: 20px;
    }
</style>

<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">Testing</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('Home')?>"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Testing</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="<?php echo base_url('')?>/assets/img/core-img/curve-5.png" alt="">
    </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** About Us Area Start ***** -->
<section class="uza-about-us-area section-padding-80">
    <div class="container">
        <!-- tulisan judul -->
        <div class="row align-items-center">
            <!-- About Thumbnail -->
            <div class="col-12 col-lg-6">
                <h2 style="text-align:center;margin-bottom:10px;">Image Original</h2>
            </div>
            <div class="col-12 col-lg-6">
                <h2 style="text-align:center;margin-bottom:10px;">Result</h2>
            </div>
        </div>
        <!-- tulisan judul end -->

        <!-- konten -->
        <div class="row align-items-center">
            <!-- About Thumbnail -->
            <div class="col-12 col-lg-6">
                
                <div class="file-upload">
                    <button class="btn uza-btn btn-3" style="width:100%;" type="button" onclick="$('.file-upload-input').trigger( 'click' )"><i class="fa fa-plus"></i> &nbsp;Add Image</button>

                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                        <div class="drag-text">
                        <h3>Drag and drop a file or select add Image</h3>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" />
                        <div class="image-title-wrap">
                        <button type="button" onclick="removeUpload()" class="btn btn-remove" >Remove <span class="image-title">Uploaded Image</span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About Us Content -->
            <div class="col-12 col-lg-6">
                
                <div class="img-proc">
                    <img src="<?php echo base_url('')?>/assets/img/bg-img/2.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- konten end -->

        <br><br>

        <!-- button center -->
        <div class="row">
            <div class="col-12 text-center">
                <a href="#" style="width:250px!important;" class="btn uza-btn btn-3">Process</a>
            </div>
        </div>
        <!-- button end -->
    </div>

    <!-- About Background Pattern -->
    <div class="about-bg-pattern">
        <img src="<?php echo base_url('')?>/assets/img/core-img/curve-2.png" alt="">
    </div>
</section>
<!-- ***** About Us Area End ***** -->


<script>
function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() 
    {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
    });

</script>

