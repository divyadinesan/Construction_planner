<?php
$this->load->view('Customer/Layout/header');

?>
<?php
foreach ($contractor as $fetch) 
?> 
<div class="w3l-contact-info py-5" id="contact">
    <div class="container py-lg-5 py-md-4">
<br><br>
         <div class="row">
            <div class="col-lg-6">

                <div class="title">
                    <h3 class="title-big">Make A <span>Booking</span></h3>
                    <p class="mt-2">You will find yourself working in a true partnership that results in an incredible experience,
                        and an end product that is the best.</p>
                </div>
            </div>
            <div class="col-lg-6 align-self mt-lg-0 mt-md-5 mt-4">
                <div class="contact-infos">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-phone"></span></div>
                        <div class="text-box">
                            <h3 class="mb-1">Call on</h3>
                            <p><?php echo $fetch->c_phone?></p>
                        </div>
                    </div>
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-envelope"></span></div>
                        <div class="text-box">
                            <h3 class="mb-1">Email us</h3>
                            <p> <a href="mailto:support@gmail.com"><?php echo $fetch->c_email?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6 map">
            	<br><br><br>
            	<br><br><br>
                <img src="<?php echo base_url('Asset/Contractor/Contractor_image/'.$fetch->c_image)?>" style="width: 550px;height:500px">
            </div>
            <div class="col-lg-6 form-inner-cont mt-lg-0 mt-sm-5 mt-4" style="background-color: grey;color: white">
                <form action="<?php echo base_url('index.php/Customer_controller/contractor_booking_insert')?>" method="post" class="signin-form" enctype="multipart/form-data">
                	<br>
                	<input type="hidden" name="contractor_id" id="w3lName" placeholder="Your name" value="<?php echo $fetch->contractor_id?>" style="color: black">
                	<input type="hidden" name="contractor_email" id="w3lName" placeholder="Your name" value="<?php echo $fetch->c_email?>" style="color: black">
                    <div class="form-input">
                    	<label>Contractor Name</label>
                        <input type="text" name="c_name" id="w3lName" placeholder="Your name" value="<?php echo $fetch->c_name?>" style="color: black">
                    </div>
                    <div class="form-input">
                    	<label>Contractor Experience</label>
                        <input type="text" name="c_experience" id="w3lName" placeholder="Your name" value="<?php echo $fetch->c_experience?>"style="color: black">
                    </div>
                    <?php
                    foreach ($customer as $fetch1) 
                    	
                    ?>
                    <input type="hidden" name="customer_id" value="<?php echo $fetch1->customer_id?>">
                  
                    <div class="form-input">
                    	<label>Customer Name</label>
                        <input type="text" name="customer_name" id="w3lName" placeholder="Your name"style="color: black" value="<?php echo $fetch1->customer_name?>">
                    </div>
                    <div class="form-input">
                    	<label>Customer Email</label>
                        <input type="text" name="customer_email" id="w3lName" placeholder="Your name"style="color: black" value="<?php echo $fetch1->customer_email?>">
                    </div>
                     <div class="form-input">
                        <label>House Description</label>
                        <input type="text" name="house_description" id="w3lName" placeholder="eg: 1500sqft ; District,Place ; 2bedroom with attached bathroom etc"style="color: black" value="">
                    </div>
                    
                    <div class="form-input">
                    	<label>Upload House Plan</label>
                        <input type="file" name="house_plan" id="w3lName" placeholder="Your name"style="color: black" >
                    </div>
                     <div class="form-input">
                        <label>Upload 3D Plan Image</label>
                        <input type="file" name="house3d_plan" id="w3lName" placeholder="Your name"style="color: black" >
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-style btn-primary">Submit</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
<div style="padding-left: 100px">
 <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-star"></span></div>

                        <div class="text-box">
                            <h3 class="mb-1">Reviews</h3>
                           
                        </div>
                    </div>
                    <?php
                    foreach ($contractor_review as $review) {
                    
                    ?>
                    <div class="footercopy-social mt-4">
                <ul >
                    <li>
                          <img src="<?php echo base_url('Asset/Admin/images/4.jpg')?>" style="height: 50px;width: 50px;border-radius: 50px">
                       <?php echo $review->customer_name?>

                    </li>
                    
                </ul>
            </div>
            <div class="contact-left-footer mt-4">
                
                <ul >
                    
                    
                    <li>
                        <p class="text-wh">
                            
                            <a href=""><?php echo $review->rating?></a>
                        </p>
                    </li>
                    
                </ul>
                
                <h6 class="text-da let mb-3"><?php echo $review->review?></h6>
            </div>
            <?php
        }
        ?>
            </div>

<?php
$this->load->view('Customer/Layout/footer');

?>