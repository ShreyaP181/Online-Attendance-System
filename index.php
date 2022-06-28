<html>
    <head> 
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<title>Online Attendance System</title><style type="text/css">
  :root {
    --outer-shadow: 3px 3px 3px blue, -3px -3px  #006eff;
    --inner-shadow: inset 3px 3px 3px black, inset -3px -3px 3px yellow;
    --skin-color: #ec718e;
    --outer-shadow-0: 0 0 0 yellow, 0 0 0 pink;
}
.style1 {
	font-family: "arial";
	font-size: 45px;
	color: #004d00;
  text-shadow: 3px 5px 8px #66ff66;  
}
.style2 {
	font-size: 30px;
	color: #000;
  font-family: "arial";
}
.style6 {
  font-size: 20px;
  position: relative;
  left:50px;
  font-weight:bold;
  font-family: "arial";
}
input[type=text]{
  font-size: 17px;
  position: relative;
  left:50px;
  font-family: "arial";
  width:370px;
  padding:5 10;
  background-color:#ffffe6;

}
input[type=email]{
  font-size: 17px;
  position: relative;
  left:50px;
  font-family: "arial";
  width:370px;
  padding:5 10;
  background-color:#ffffe6;
}
.btn{
  font-size:17px;
  padding: 9 20;
  border-radius:30px;
  background-color: #006eff;
  color:white;
  border:none;
  font-weight:bold;
}
.outer-shadow {
    box-shadow: var(--outer-shadow);
}
.inner-shadow {
    box-shadow: var(--inner-shadow);
}

.hover-in-shadow {
    position: relative;
    z-index: 1;
}

.hover-in-shadow:hover {
    box-shadow: var(--outer-shadow-0);
}

.hover-in-shadow::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    transition: all 0.3s ease;
    z-index: -1;
}

.hover-in-shadow:hover::after {
    box-shadow: var(--inner-shadow);
}
/* .btn:hover{
  box-shadow:8px 8px 5px #66a8ff;
  -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 4 0 10px #000000;
   
} */
</style>
</head>

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
      <tr>
        <td><div align="center">
        <form action="insertmember.php" method="post">
          <table width="700" height="360" style="border-collapse:collapse"; border="2" align="center" bordercolor="#000" bgcolor="#C7B6B1">
            <tr>
              <td colspan="2" bgcolor="#cce4ff"><div align="center"><strong><span class="style2">Enter the member information</span></strong></div></td>
            </tr>
            
            <tr>
              <td width="160" bgcolor="#f0f5f5" style="padding:0 10";><span class="style6"><i class="fas fa-user"></i>&nbsp;&nbsp;Name</span></td>
              <td width="400" bgcolor="#f0f5f5" style="padding:0 10";><span><input type="text" name="name" required /></span></td>
            </tr>
            <tr>
              <td bgcolor="#f0f5f5" style="padding:0 10";><span class="style6"><i class="fas fa-phone"></i>&nbsp;&nbsp;Mobile</span></td>
              <td bgcolor="#f0f5f5" style="padding:0 10";><span><input type="text" name="mobile" required/></span></td>
            </tr>
            <tr>
              <td bgcolor="#f0f5f5" style="padding:0 10";><span class="style6"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Email</span></td>
              <td bgcolor="#f0f5f5" style="padding:0 10";><span><input type="email" name="email" required /></span></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#cce4ff"><div align="center">
                <input type="submit"   value="Add Member" class="btn outer-shadow hover-in-shadow"  name="btnsubmit"/>
                &nbsp;&nbsp;
                <input type="reset" value="Reset" class="btn outer-shadow hover-in-shadow" name="btnreset"/>
              </div></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
    </table>
<?php include "footer.php"; ?>
</body>
</html>