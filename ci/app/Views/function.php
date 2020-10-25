<?php 
// $con = mysqli_connect("localhost","root","","furqan");
$con = mysqli_connect("localhost","root","root","alfurqan");

function menu($page){
	echo "
	<div class='content white'>
			<nav class='navbar navbar-default' role='navigation'>
				<div class='container'>
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
					<span class='sr-only'>Toggle navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
						<a class='navbar-brand' href='index.php'> <img src='images/logo.png' alt=''> </a>

						</a>
					</div>
					<!--/.navbar-header-->
					<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
						<nav>
							<ul class='nav navbar-nav'>";
function men($pag){
switch($pag)
   { 
   case 'index' :
      $menu= "<li><a href='index.php' class='active'>Home</a></li>
				<li><a href='program.php'>Programmes</a></li>
				<li><a href='calendar.php'>Academic Calendar</a></li>
				<li><a href='faq.php'>FAQs</a></li>
				<li><a href='contact.php'>Contact Us</a></li>";
	  return $menu;  
      break; 
   	case 'program':
   	  $menu= "<li><a href='index.php'>Home</a></li>
				<li><a href='program.php' class='active'>Programmes</a></li>
				<li><a href='calendar.php'>Academic Calendar</a></li>
				<li><a href='faq.php'>FAQs</a></li>
				<li><a href='contact.php'>Contact Us</a></li>";
	  return $menu;  
      break; 
   	case 'calendar':
    $menu= "<li><a href='index.php'>Home</a></li>
				<li><a href='program.php'>Programmes</a></li>
				<li><a href='calendar.php' class='active'>Academic Calendar</a></li>
				<li><a href='faq.php'>FAQs</a></li>
				<li><a href='contact.php'>Contact Us</a></li>";
	  return $menu;  
      break;  
    case 'faq':
     $menu= "<li><a href='index.php'>Home</a></li>
				<li><a href='program.php'>Programmes</a></li>
				<li><a href='calendar.php'>Academic Calendar</a></li>
				<li><a href='faq.php' class='active'>FAQs</a></li>
				<li><a href='contact.php'>Contact Us</a></li>";
	  return $menu;  
      break;  
      case 'contact':
     $menu= "<li><a href='index.php'>Home</a></li>
				<li><a href='program.php'>Programmes</a></li>
				<li><a href='calendar.php'>Academic Calendar</a></li>
				<li><a href='faq.php'>FAQs</a></li>
				<li><a href='contact.php' class='active'>Contact Us</a></li>";
	  return $menu;  
      break; 
      case 'others':
     $menu= "<li><a href='index.php'>Home</a></li>
				<li><a href='program.php'>Programmes</a></li>
				<li><a href='calendar.php'>Academic Calendar</a></li>
				<li><a href='faq.php'>FAQs</a></li>
				<li><a href='contact.php'>Contact Us</a></li>";
	  return $menu;  
      break; 
      case 'portal':
     $menu= "<li><a href='index.php'>Home</a></li>
     		<li><a href='portal.php' class='active'>Portal</a></li>
			<li><a href='program.php'>Programmes</a></li>
			<li><a href='calendar.php'>Academic Calendar</a></li>
			<li><a href='faq.php'>FAQs</a></li>
			<li><a href='contact.php'>Contact Us</a></li>
			<li><a href='logout.php'>Logout</a></li>";
	  return $menu;  
      break; 
   }
   } 
   				echo men($page);echo "



							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	";
}

function top_menu($cond){
	if ($cond == 1) {
		echo "
		<div class='top_menu_w3layouts'>
			<div class='header_left'>
				<ul>
					<li>
					<iframe src='http://free.timeanddate.com/clock/i61v3kn8/n125/fn12/fs20/fcfff/tct/pct/ftb/th2/ts1' frameborder='0' width='176' height='22' allowTransparency='true'></iframe>
					</li>
				</ul>
			</div>
		<div class='clearfix'> </div>
	</div>";
	}
	elseif ($cond == 2) {
		echo "
		<div class='top_menu_w3layouts'>
			<div class='header_left'>
				<ul>
					<li>
					<iframe src='http://free.timeanddate.com/clock/i61v3kn8/n125/fn12/fs20/fcfff/tct/pct/ftb/th2/ts1' frameborder='0' width='176' height='22' allowTransparency='true'></iframe>
					</li>
				</ul>
			</div>
			<div class='header_right'>
				<ul class='forms_right'>
					<li><a class='active' href='signin.php'> Sign In</a> </li>
					<li><a href='404.shtml'> Sign Up</a> </li>
				</ul>

			</div>
			<div class='clearfix'> </div>
		</div>
	";
	}
}


function rayrand(){
	function RandomString(){
	$characters='';
    $characters = ['f','u','r','F','U','R','$','%'];
    // $randstring1 = "";
    for ($i = 0; $i < (6-1); $i++) {
        $randstring1 = $characters[rand(0, 7)];

        // $randstring1 =+ '$randstring';
    }
    return $randstring1;
	}
	function RandomString1(){
	$characters='';
    $characters = ['q','a','n','Q','A','N','@','?'];
    // $randstring1 = "";
    for ($i = 0; $i < (6-1); $i++) {
        $randstring1 = $characters[rand(0, 7)];

        // $randstring1 =+ '$randstring';
    }
    return $randstring1;}
	function RandomString2(){
	$characters='';
    $characters = ['i','q','m','t','I','Q','M','T'];
    // $randstring1 = "";
    for ($i = 0; $i < (8-1); $i++) {
        $randstring1 = $characters[rand(0, 7)];

        // $randstring1 =+ '$randstring';
    }
    return $randstring1;}
	function RandomString3(){
	$characters='';
    $characters = ['1','2','3','4','11','22','33','44'];
    // $randstring1 = "";
    for ($i = 0; $i < (6-1); $i++) {
        $randstring1 = $characters[rand(0, 7)];

        // $randstring1 =+ '$randstring';
    }
    return $randstring1;}
	function RandomString4(){
	$characters='';
    $characters = ['5','6','7','8','55','66','77','88'];
    // $randstring1 = "";
    for ($i = 0; $i < (6-1); $i++) {
        $randstring1 = $characters[rand(0, 7)];

        // $randstring1 =+ '$randstring';
    }
    return $randstring1;
	}
	function RandomString5(){
	$characters='';
    $characters = ['9','99','b2','d2','0','00','f2','m2'];
    // $randstring1 = "";
    for ($i = 0; $i < (6-1); $i++) {
        $randstring1 = $characters[rand(0, 7)];

        // $randstring1 =+ '$randstring';
    }
    return $randstring1;
	}
	// RandomString();
	return RandomString().RandomString1().RandomString2().RandomString3().RandomString4().RandomString5();
}

function title($gender){
	if ($gender == 'm') {
		return "Mr.";
	}
	elseif ($gender == 'f') {
		return "Miss/Mrs";
	}
}

function title1($gender){
	if ($gender == 'm') {
		return "his";
	}
	elseif ($gender == 'f') {
		return "her";
	}
}
?>