<?php
$this->load->view('Architecture/Layout/architecture_header');

?>
<br><br><br><br>
<br><br><br>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>

<h2 align="center">House Plan</h2>

<br><br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Customer Name</th>
      <th>House Description</th>
      <th>House Plan</th>
      <th>Customer Updations</th>
      
      <th>Update Plan</th>
     
    </tr>
    <?php
    $i=1;
    foreach ($house_plan as $fetch) {
    
    ?>
    <tr>
      <td style="color:black"><?php echo $i?></td>
      <td style="color:black"><?php echo $fetch->customer_name?></td>
      <td style="color:black"><?php echo $fetch->ab_house_description?></td>
      <td style="color:black"><object data="<?php echo base_url('Asset/Architecture/House_plan/'.$fetch->house_plan)?>" type="application/pdf" width="300" height="500">

</object></td>
      <td style="color:black"><?php echo $fetch->house_plan_updation_chat?></td>
      <td><center><div style="border-style:solid;color:grey;height: 200px;width: 300px;padding: 30px">
        <form method="post" action="<?php echo base_url('index.php/Architecture_controller/plan_updation')?>" enctype="multipart/form-data">
<label style="color: black"><b>Upload Updated Plan</b></label><br>
<input type="hidden" name="architecture_booking_id" value="<?php echo $fetch->architecture_booking_id?>">
        <input type="file" name="image"><br><br>
        <input type="submit" name="">
      </form></div></center></td> 
    </tr>
    <?php
    $i++;
	}
	?>
   
  </table>
</div>

</body>
</html>



<?php
$this->load->view('Architecture/Layout/architecture_footer');

?>