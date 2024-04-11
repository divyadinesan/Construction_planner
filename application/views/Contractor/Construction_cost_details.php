<?php
$this->load->view('Contractor/Layout/header');

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

<h2 align="center">Total Construction Cost</h2>

<br><br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Customer Name</th>
      <th>House Plan</th>
      <th>Construction Cost Details</th>
      <th>Customer Updations</th>
      <th>Update</th>

    <!--   <th>Upload Updated Plan</th> -->
     
    </tr>
    <?php
    $i=1;
    foreach ($construction_details as $fetch) {
    
    ?>
    <tr>
      <td style="color:black"><?php echo $i?></td>
      <td style="color:black"><?php echo $fetch->customer_name?></td>
     
      <td style="color:black"><object data="<?php echo base_url('Asset/Customer/contractor_house_plan/'.$fetch->cb_house_plan)?>" type="application/pdf" width="300" height="500">
      	<td style="color:black"><object data="<?php echo base_url('Asset/Contractor/construction_cost_details/'.$fetch->cb_contractor_description)?>" type="application/pdf" width="300" height="500">

</object></td>
<td><?php echo $fetch->contract_details_updation_chat?></td>
      <td><center><div style="border-style:solid;color:grey;height: 200px;width: 300px;padding: 30px">
        <form method="post" action="<?php echo base_url('index.php/Contractor_controller/Contract_details_updation')?>" enctype="multipart/form-data">
<label style="color: black"><b>Upload Updated Construction Details</b></label><br>
<input type="hidden" name="contractor_booking_id" value="<?php echo $fetch->contractor_booking_id?>">
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
$this->load->view('Contractor/Layout/footer');

?>
