<?php
$this->load->view('Contractor/Layout/header');

?>

<style type="text/css">
 #brdr
  {
    border-style: solid;
    border-color:grey;
    border-width: 6px;
    height: 1060px;
    width: 600px;
    margin-top: 30px;
    padding-bottom: 30px;
  }
</style>
<body>
   <center>
    <div id="brdr">
         
      
   <br><br>
            <h2 >
             My Profile
            </h2>
           <br><br>
            	<?php
            	foreach ($contractor as $fetch)
            	?>
               <form action="<?php echo base_url('index.php/Contractor_controller/contractor_update/'.$fetch->contractor_id)?>" method="post" name="login" enctype="multipart/form-data">
               	  <div class="form-group">
                     <label>Contractor Name</label>
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->c_name?>" style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px" pattern="[A-Za-z]{1,32}">
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" name="email"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->c_email?>" readonly  style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Phone Number</label>
                     <input type="text" name="phone"  class="form-control my-input" id="name" placeholder=""value="<?php echo $fetch->c_phone?>" style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px" maxlength="10" pattern="\d{10}">
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                     <input type="text" name="password"  class="form-control my-input" id="email" placeholder="" value="<?php echo $fetch->c_password?>" style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Address</label>
                     <input type="text" name="address"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->c_address?>" style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Experience</label>
                     <input type="text" name="experience"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->c_experience?>" style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Contractor Image</label><br>
                     <img src="<?php echo base_url('Asset/Contractor/Contractor_image/'.$fetch->c_image)?>" style="height:100px;width: 200px">
                  </div>
                  <div class="form-group">
                     <label>Upload New Contractor Image</label>
                     <input type="file" name="image"  class="form-control my-input" id="name" placeholder="" style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                   <br>
                  <div class="text-center ">
                     <button type="submit" style="background-color: grey;color: white;border-radius:3px">Submit</button>
                  </div>
                  
               </form>
               
          </div>
   </center>

<br><br><br>

<?php
$this->load->view('Contractor/Layout/footer');

?>