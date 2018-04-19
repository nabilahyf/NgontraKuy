<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#include header file
$this->view('template/header');
?>
<style>
    .bg-img-1 {
        background-image: url(<?php echo base_url('assets/images/slider/1.jpg')?>);
    }
    .bg-img-2 {
        background-image: url(<?php echo base_url('assets/images/slider/2.jpg')?>);
    }
    .bg-img-3 {
        background-image: url(<?php echo base_url('assets/images/slider/3.jpg')?>);
    }
    .bg-img-4 {
        background-image: url(<?php echo base_url('assets/images/slider/4.jpg')?>);
    }
    .bg-img-5 {
        background-image: url(<?php echo base_url('assets/images/slider/5.jpg')?>);
    }
</style>
<!-- Header Starts -->
<div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- Nav Starts -->
            <style>
                .nav li a{
                    font-family: 'Ubuntu', sans-serif !important;
                }
            </style>
            <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo site_url()?>" >Home</a></li>
                    <li><a href="<?php echo site_url('Agents')?>">Agents</a></li>
                    <li><a href="<?php echo site_url('ContactUs')?>">Contact Us</a></li>
                    <li><a href="<?php echo site_url('About')?>">About</a></li>
                </ul>
            </div>
            <!-- #Nav Ends -->

        </div>
    </div>

</div>
<!-- #Header Starts -->

<div class="container">

    <!-- Header Starts -->
    <div class="header">
        <a href="<?php echo site_url()?>"><img src="<?php echo base_url('assets/images/logo1.png')?>" width="200px" alt="NgontraKuy"></a>

        <ul class="pull-right">
            <li style="margin-top: 20px"><a href="#" style="font-family: 'Ubuntu', sans-serif;" data-toggle="modal" data-target="#loginpop">Login</a></li>
        </ul>
		<ul class="pull-right">
            <li style="margin-top: 20px"><a href="#" style="font-family: 'Ubuntu', sans-serif;" data-toggle="modal" data-target="#TamKon">Tambah Rumah</a></li>
        </ul>
		<ul class="pull-right">
            <li style="margin-top: 20px"><a href="#" style="font-family: 'Ubuntu', sans-serif;" data-toggle="modal" data-target="#TamKon2">Tambah Kontrakan</a></li>
        </ul>
    </div>
    <!-- #Header Starts -->
</div>

<div class="">
    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-1"></div>
                    <br/>
                    <h2><a href="#"><img src="<?php echo base_url('assets/images/white.png')?>" width="250px"/></a></h2>
                    <blockquote style="font-family:'Ubuntu', sans-serif">
                        <br/><br/>
                        <p>Pengen jalan-jalan tapi nginep di hotel terlalu mahal?<br/>Mending ngontrak aja!</p><br/>
                        <a class="btn btn-success" role="button" href="<?php echo site_url('Register')?>">Join Now</a>
                    </blockquote>
                </div>
            </div>
        </div><!-- /sl-slider -->

        <nav id="nav-dots" class="nav-dots">

        </nav>

    </div><!-- /slider-wrapper -->
</div>

<div class="banner-search">
    <div class="container">
        <!-- banner -->
        <h3>Book your homes here</h3>
        <div class="searchbar">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
						
					<?php
						echo form_open('TaKon/search');

						echo form_input(array('class'=>'form-control','name'=>'search','placeholder' => 'Search','id'=>'nm'));

						echo form_submit(array('id' => 'submit','value' => 'Find Now', 'class'=>'btn btn-success'));


					?>
						
                    </form>
                </div>
                <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
        <h2>Kontrakan</h2>
        <div id="owl-example" class="owl-carousel">

            <?php
            foreach($results as $row){
                ?>
				<div class="properties">
					<div class="image-holder">
						<img src="<?php echo blink('assets/images/rumah/').$row->gambar ?>" class="img-responsive" alt="properties"/>
					</div>
					<h4><a href="<?php echo site_url('HomeDetails/'.$row->idrumah)?>"><?php echo $row->nmrumah ?></a></h4>
					<div>
					<div class="status"><?php echo $row->status ?></div>
					<p class="price">Price: Rp<?php echo $row->harga?></p>
					<p class="price">Ukuran :<?php echo $row->ukuran?></p>
					</div>
					
					<a class="btn btn-primary" href="<?php echo site_url('HomeDetails/'/$row->idrumah)?>">View Details</a>
				</div>
				<?php
            }
            ?>

        </div>
		<br>
    </div>
</div>
<?php
#include footer file
$this->view('template/footer');
?>
