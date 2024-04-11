<?php
$this->load->view('Designer/Layout/header');
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

<h2 align="center"><b>3D</b></h2>

<br><br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Customer Name</th>
      <th>House Plan</th>
      <th>3D Plan</th>
      <th>Customer Updations</th>
      <th>Update 3D</th>
  
     
    </tr>
    <?php
    $i=1;
    foreach ($three_d_booking as $fetch) {
    
    ?>
    <tr>
      <td style="color:black"><?php echo $i?></td>
      <td style="color:black"><?php echo $fetch->customer_name?></td>
      <td style="color:black"><object data="<?php echo base_url('Asset/Designer/house_plan_for_3d/'.$fetch->db_house_plan)?>" type="application/pdf" width="300" height="500">

</object></td>
 <td style="color:black"><img src="<?php echo base_url('Asset/Designer/3d_design/'.$fetch->db_3d_plan)?>" style="height: 200px;width: 200px">
  </td>
  <td><?php echo $fetch->house_3d_plan_updation_chat?></td>
      <td><center><div style="border-style:solid;color:grey;height: 200px;width: 300px;padding: 30px">
        <form method="post" action="<?php echo base_url('index.php/Designer_controller/plan_3D_updation')?>" enctype="multipart/form-data">
<label style="color: black"><b>Upload Updated 3D Image</b></label><br>
<input type="hidden" name="db_designer_bookingid" value="<?php echo $fetch->db_designer_bookingid ?>">
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
$this->load->view('Designer/Layout/footer');

?>
