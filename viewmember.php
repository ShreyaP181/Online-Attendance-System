<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Attendance System</title><style type="text/css">

.style1 {
	font-family: "arial";
	font-size: 45px;
	color: #004d00;
    text-shadow: 3px 5px 8px #66ff66; 
}
.style2 {
	font-size: 20px;
	color: #000;
  	font-family: "arial";
}
.header{
	font-size: 30px;
	color: #000;
  	font-family: "arial";
}
.style6 {
	font-size: 18px;	
}
.hover:hover{
	-moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
}
tr:hover{
	/* background-color: yellow; */

}
</style></head>

<body>
<h1 align="center"><strong><span class="style1"><img src="bg.jpg" alt="" height="80" width="45" >&nbsp;Online Attendance System</span></strong></h1>
  <nav>
  <div align="center">
       						<?php 
									include "menu.php";
							?> 
  </div>
</nav> 

<table width="1000" height="500" align="center">
      
      
      	<tr style="background-color: white;"><td colspan="2">
        <form action="" method=post>
        
        <table width="900" border="2" align="center"   bordercolor="#000" bgcolor="#C7B6B1" style="border-collapse:collapse";>
        	<tr>
				  <td colspan="5" bgcolor="#cce4ff" style="padding: 15 40";><div align="center"><strong><span class="header">Member information</span></strong></div></td>
			</tr>
            <tr>
				  <td  bgcolor="#99ccff" style="padding:10 17";><div align="center"><strong><span class="style2">Enrollment No</span></strong></div></td>
                  <td  bgcolor="#99ccff" style="padding:10 17";><div align="center"><strong><span class="style2">Name</span></strong></div></td>
                  <td  bgcolor="#99ccff" style="padding:10 17";><div align="center"><strong><span class="style2">Mobile</span></strong></div></td>
                  <td  bgcolor="#99ccff" style="padding:10 17";><div align="center"><strong><span class="style2">Email</span></strong></div></td>
                  <td  bgcolor="#99ccff" style="padding:10 17";><div align="center"><strong><span class="style2">Delete</span></strong></div></td>
			</tr>
				
		<?php
			include "z_db.php";
			$query = "select *from `member` ";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr height=30px>
				  <td width="222" bgcolor="#e6e6ff" style="padding:10 20";><span class="style6">'.$rec["enrolment_no"].'</span></td>
				  <td width="222" bgcolor="#e6e6ff" style="padding:10 20";><span class="style6">'.$rec["name"].'</span></td>
				  <td width="222" bgcolor="#e6e6ff" style="padding:10 20";><span class="style6">'.$rec["mobile"].'</span></td>
				  <td width="222" bgcolor="#e6e6ff" style="padding:10 20";><span class="style6">'.$rec["email"].'</span></td>
				  <td width="222" bgcolor="#e6e6ff" style="padding:10 20";><span class="style6">';
				  echo '<a class="hover" style="background-color:#0073e6;color:white;text-decoration:none;border-radius:30px;position:relative;top:0px;left:26%;
				  padding:2 8;border:1px solid #002966;" href="deletemember.php?d='.$rec["member_id"].'">&nbsp;Delete&nbsp;</a></span></td></tr>';			  
			}
		
		?>    
        </table>
        </form>
        </td>
        </tr>
	</table>
    
<?php include "footer.php"; ?>