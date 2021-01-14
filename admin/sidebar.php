<!DOCTYPE html>
<html>
<head>

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="home_manager.php">Home Manager</a>
  <a href="about_manager.php">About Manager</a>
  <a href="service_manager.php">Service Manager</a>
  <a href="contact_manager.php">Contact Manager</a>
  <a href="Footer_manager.php">Footer Manager</a>
</div>

<nav class="navbar navbar-inverse" role='navigation'>
	
		<div class="navbar-header">

			  <button class="openbtn" onclick="openNav()">☰ Admin Manager</button>  
			  
		</div>
		<ul class="nav navbar-nav navbar-right">
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hi  <?php echo $uname; ?>
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Profile</a></li>
		          <li><a href="logout.php">Logout</a></li>
		          
		        </ul>
		      </li>
		      
		    </ul>

		
	</div>
	
</nav>


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
