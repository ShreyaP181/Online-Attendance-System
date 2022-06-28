<style type="text/css">
	/* ul{
		background-color:black;
		width:100%;
	}
	.menu{
		color: white;
		background-color: black;
		padding: 10px;
		font-size: 1.3em;
		text-decoration: none;
		border:2px solid;
	}
	.menu:hover{
		color: tomato;
		background-color: yellow;
		padding: 10px;
		box-shadow: 5px 4px 5px 1px;
	} */
	ul {
  list-style-type: none;
  padding: 0 390px;
  overflow: hidden;
  background-color: #333;
  text-align:center;
  width: 40em;
  margin: auto;
}

li {
	float:left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 14px;
  font-size:23px;
  margin:5px;
  text-decoration: none;
  font-family:Arial;
}

li a:hover {
	color:black;
  	background-color:#53ff1a ;
	border-radius:30px;
}
</style>
<ul>
	<li ><a href="index.php" class="menu">Add Member</a></li>
    <li><a href="viewmember.php" class="menu">View Member</a></li>
    <li><a href="getattendance.php" class="menu">Get Attendance</a></li>
    <li><a href="printreport.php" class="menu">Print Report</a></li>
</ul>