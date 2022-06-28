<title>Online Attendance System</title>
<style type="text/css">

.style1 {
	font-family: "arial";
	font-size: 45px;
	color: #004d00;
  	text-shadow: 3px 5px 8px #66ff66; 
}
.style2 {
	font-size: 18px;
	color: #000;
	padding:2 15;
	font-weight:bold;
}
.headertext{
	font-size: 25px;
	color: #000;
}
.style6{
	font-size: 17px;
	padding:6 15;
	
}
.header{
	font-size:27px;
	font-weight:550;
	color: #000;
  	font-family: "arial";
}
input[type=text]{
	position:relative;
	left:30;
	padding:6 10;
	background-color:#ffffe6;
	font-weight:600;
}
.btn{
  position:relative;
  left:15px;
  font-size:15px;
  padding: 6 14;
  border-radius:30px;
  background-color: #006eff;
  color:white;
  border-color:#002966;
  font-weight:bold;
}
.btn:hover{
	-moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
}
</style>
<h1 align="center"><strong><span class="style1"><img src="bg.jpg" alt="" height="80" width="45" >&nbsp;Online Attendance System</span></strong></h1>
  <nav>
  <div align="center">
       						<?php 
									include "menu.php";
							?> 
  </div>
</nav> 
<br>
<br>
<table width="1000" height="500" align="center">
      <tr>
        <td><div align="center">
        <form action="" method="post">
          <table width="894" border="2" align="center" bordercolor="#000" style="border-collapse:collapse";>
          	<tr><td colspan="3" align="center" bgcolor="#cce4ff" style="padding:15 40"; class="header">Search Enrollment No Wise Records Here</td></tr>
            <tr>
              <td width="308" bgcolor="#99ccff" style="padding:10 17";><div align="center"><strong><span class="headertext">Enter the Enrollment no</span></strong></div></td>
              <td width="144" bgcolor="#99ccff"><span class="style6">
                <input type="text" name="eno" />
              </span></td>
              <td width="130" bgcolor="#99ccff"><input type="submit" value="View Information" name="btnsubmit" class="btn"/></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
		<?php
		if(isset($_POST["btnsubmit"]))
		{
			include "z_db.php";
			extract($_POST);
			$query = "select * from `member` where enrolment_no = ".$eno." limit 1";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				// After click view information
				echo '<tr><td colspan="2"><table width="90%" border="2" align="center" bordercolor="#000" bgcolor="#e6ffff" style="border-collapse:collapse;position:relative;bottom:50%";>
				<tr>
				  <td width="180" bgcolor="#b3d9ff" style="padding: 6 15";><span class="style2">Enrollment No</span></td>
				  <td width="240" bgcolor="#b3d9ff" style="padding: 6 15";><span class="style2">Name</span></td>';
				  $query1 = "select * from `attendance` where `member_id` = ".$rec["member_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="#b3d9ff" class=style2 style="padding: 6 15";>'.$rec1["date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222" style="padding: 6 15;"><span class="style6">'.$rec["enrolment_no"].'</span></td>
				  <td width="222" style="padding: 6 15;"><span class="style6">'.$rec["name"].'</span></td>';
				  $query1 = "select *from `attendance` where `member_id` = ".$rec["member_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td style="padding: 6 15;">';
						if($rec1["attendance"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr>
								
			  </table></td></tr>';
			}
		}
		else
		{
			include "z_db.php";
			extract($_POST);
			$query = "select * from `member` ";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				//information table
				echo '<tr><td colspan="2"><table style="border-collapse:collapse"; width="98%" border="2" align="center" bordercolor="#000" bgcolor="#e6ffff">
				<tr>
				  <td width="160" bgcolor="#b3d9ff" style="padding:6 15";><span class="style2">Enrollment No</span></td>
				  <td width="160" bgcolor="#b3d9ff"><span class="style2">Name</span></td>';
				  $query1 = "select * from `attendance` where `member_id` = ".$rec["member_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="#b3d9ff" class=style2>'.$rec1["date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222" style="padding: 6 15;"><span class="style6">'.$rec["enrolment_no"].'</span></td>
				  <td width="250" style="padding: 2 5;"><span class="style6">'.$rec["name"].'</span></td>';
				  $query1 = "select *from `attendance` where `member_id` = ".$rec["member_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td style="padding: 6 15;">';
						if($rec1["attendance"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr>
								
			  </table></td></tr>';
			}
		}
		?>    
	</table>
<?php include "footer.php"; ?>