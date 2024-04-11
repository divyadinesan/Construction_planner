<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
   .send-button{
background: #54C7C3;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.g-button{
color: #fff !important;
border: 1px solid #EA4335;
background: #ea4335 !important;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
.my-input{
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
cursor: text;
padding: 8px 10px;
transition: border .1s linear;
}
.header-title{
margin: 5rem 0;
}
h1{
font-size: 31px;
line-height: 40px;
font-weight: 600;
color:#4c5357;
}
h2{
color: #5e8396;
font-size: 21px;
line-height: 32px;
font-weight: 400;
}
.login-or {
position: relative;
color: #aaa;
margin-top: 10px;
margin-bottom: 10px;
padding-top: 10px;
padding-bottom: 10px;
}
.span-or {
display: block;
position: absolute;
left: 50%;
top: -2px;
margin-left: -25px;
background-color: #fff;
width: 50px;
text-align: center;
}
.hr-or {
height: 1px;
margin-top: 0px !important;
margin-bottom: 0px !important;
}
@media screen and (max-width:480px){
h1{
font-size: 26px;
}
h2{
font-size: 20px;
}
}
</style>
<body>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Register Here 
            </h1>
           
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="<?php echo base_url('index.php/Designer_controller/designer_reg_insert')?>" method="post" name="login" enctype="multipart/form-data">
                 <div class="form-group">
                     <label> Name</label>
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="" required="" pattern="[A-Za-z]{1,32}">
                  </div>
                  <div class="form-group">
                     <label> Email</label>
                     <input type="email" name="email"  class="form-control my-input" id="name" placeholder="" required="">
                  </div>
                  <div class="form-group">
                     <label> Phone Number</label>
                     <input type="text" name="phone"  class="form-control my-input" id="name" placeholder="" required="" autocomplete="off" maxlength="10" pattern="\d{10}" >
                  </div>
                  <div class="form-group">
                      <label> Password</label>
                     <input type="password" name="password"  class="form-control my-input" id="email" placeholder="">
                  </div>
                  <div class="form-group">
                     <label> Address</label>
                     <input type="text" name="address"  class="form-control my-input" id="name" placeholder="" required="">
                  </div>
                   <div class="form-group">
                     <label>Fee Amount</label>
                     <input type="text" name="fee"  class="form-control my-input" id="name" placeholder="" required="">
                  </div>
                  <div class="form-group">
                     <label> Designer Image</label>
                     <input type="file" name="desiger_image"  class="form-control my-input" id="name" placeholder="" required="">
                  </div>
                  <div class="form-group">
                     <label> Experience</label>
                     <input type="text" name="experience"  class="form-control my-input" id="name" placeholder="" required="">
                  </div>
                  <div class="form-group">
                     <label> Experience Certificate (PDF)</label>
                     <input type="file" name="licence"  class="form-control my-input" id="name" placeholder="" required="">
                  </div>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Submit</button>
                  </div>
                  
               </form>
               Already Registered.. <a href="<?php echo base_url('index.php/Designer_controller/designer_login')?>">Login Now</a>
               <br><br><br>
               <center>
                <a href="<?php echo base_url('index.php/Customer_controller/index')?>">
               <img src="<?php echo base_url('Asset/Admin/images/home.png')?>" style="height: 50px;width: 50px">
               </a>
            </center>
            <br><br><br>
            </div>
         </div>

      </div>
   </div>
</body>