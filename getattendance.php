<title>Online Attendance System</title><style type="text/css">

.style1 {
	font-family: "arial";
	font-size: 45px;
	color: #004d00;
  	text-shadow: 3px 5px 8px #66ff66; 
}
.style7 {
	font-size: 20px;
	color: #000;
	font-family: "arial";
}
.thirdtable{
	font-size: 20px;
	color: #000;
	font-family: "arial";
	position:relative;
	left:20px;
}
.header{
	font-size: 30px;
	color: #000;
  	font-family: "arial";
}
input[type="checkbox"]
{
	width:20px;
	height:20px;
}
.hover:hover{
	-moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
}
input[type="text"]
{
  font-family: "arial";
  padding:3 10;

  background-color:#ffffe6;
  position:relative;
  left:15px;
}

</style>
<script type="text/javascript">
	function getatt(value)
	{
		if(value == true)
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
		}
		else
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
		}
	}
</script>

<h1 align="center"><strong><span class="style1"><img src="bg.jpg" alt="" height="80" width="45" >&nbsp;Online Attendance System</span></strong></h1>
  <nav>
  <div align="center">
       						<?php 
									include "menu.php";
							?> 
  </div>
</nav> 
<br>

<table width="1050" height="500" align="center">
      
      <tr>
        <td>
        <form action="getattendance1.php" method="post">
        <table width="210px" align="left" border="4" style="border-collapse:collapse";>
            	<tr style="line-height: 2";>
                	<td bgcolor="#cce4ff" style="padding: 10 30";><b><span class="style7">Select date : </span></b><br />
                   <?php 
				 		    $dt = getdate();
							$day = $dt["mday"];
							$month = date("m");
							$year = $dt["year"];
							
							echo "<select name='cdate'>";
							for($a=1;$a<=31;$a++)
							{
								if($day == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cmonth'>";
							for($a=1;$a<=12;$a++)
							{
								if($month == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cyear'>";
							for($a=2010;$a<=$year;$a++)
							{
								if($year == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select>";
						?>                    
                    </td>
                </tr>
             </table>	
        
          <table width="550" border="2" align="left" bordercolor="#000" style="margin-left:35px;margin-top:-100px;border-collapse:collapse;">
            <tr>
              <td colspan="3" bgcolor="#cce4ff" style="padding: 15 40";><div align="center"><strong><span class="header">Get Attendance</span></strong></div></td>
            </tr>
            <tr bgcolor="#99ccff">
              <td width="135" style="padding:10 27";><strong><span class="style7">Enrolment no</span></strong></td>
              <td width="152" style="padding:10 27";><strong><span class="style7">Name</span></strong></td>
              <td width="110" style="padding:10 27";><strong><span class="style7">Attend</span></strong></td>
            </tr>
            <?php
				include "z_db.php";
				extract($_POST);
				$query = "select *from `member` order by `member_id`";
				$s = 0;
				$result = mysqli_query($con,$query)or die("select error");
				while($rec = mysqli_fetch_array($result))
				{
					$s = $s + 1;
					echo ' <tr>
							  <td width="114" bgcolor="#e6e6ff" style="padding:7 20"; >'.$rec["enrolment_no"].'</td>
							  <td width="152" bgcolor="#e6e6ff" style="padding:7 20";>'.$rec["name"].'</td>
							  <td width="110" bgcolor="#e6e6ff" style="padding:7 20";><input type=checkbox name='.$rec["member_id"].' onclick="getatt(this.checked);"/></td>
							</tr>';
				}
			?>			
            <tr bgcolor="#cce4ff"  >
              <td colspan="3" ><div align="center">
                <input type="submit" value="Get Attendance" name="btnsubmit" class="hover" style="background-color:#0073e6;color:white;text-decoration:none;border-radius:30px;position:relative;top:0px;left:15;margin:10px;
				  padding:10 25;border:1px solid #002966;"/>
                &nbsp;&nbsp;</div></td>
            </tr>
          </table>
          </form>
         
         	<table width="180px" height="250px" align="right" border="4" style="margin-left:35px;border-collapse:collapse";>
            	<tr style="line-height: 2";>
                	<td  bgcolor="#cce4ff"><b><span class="thirdtable" >Total Absent : </span></b><input type="text" id="txtAbsent" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
                <tr style="line-height: 2";>
                	<td  bgcolor="#cce4ff"><b><span class="thirdtable">Total Present : </span></b><input type="text" id="txtPresent" value="0" size="10"  disabled="disabled"/></td>
                </tr>
                <tr style="line-height: 2";>
                	<td  bgcolor="#cce4ff"><b><span class="thirdtable">Total Strength : </span></b><input type="text" id="txtStrength" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
             </table>
         
         </td>
      </tr>
    </table>

<?php include  "footer.php"; ?>
