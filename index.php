<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>BabelJenks</title>

    <meta name="description" content="">
    <meta name="author" content="root" >
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<?php
$string = file_get_contents("languages.json");
$GLOBALS['json'] = json_decode($string, true);
function putLanguage() {
if( isset($_REQUEST['lang']) )
{
   $langCode = $_REQUEST['lang'];
} else {
	$langCode = "ar";
}

foreach ($GLOBALS['json']['language'] as $lang) {
		if($lang['code'] == $langCode)	{
			echo $lang['name'];
		}
	} 
}

function putJsonLanguage() {

foreach ($GLOBALS['json']['language'] as $lang) {
	print '<li><a href="index.php?lang=' . $lang['code'] . '">' . $lang['name'] . '</a></li>';
	} 
}

function putWord() {
	
if( isset($_REQUEST['lang']) ) {
   $langCode = $_REQUEST['lang'];
	} else {
	$langCode = "ar";
}	

foreach ($GLOBALS['json']['language'] as $lang) {
	if($lang['code'] == $langCode)	{
		$randNo = rand(0,count($lang['englishWords'])-1);
		echo '<h1 class="bigNumber">' . $lang['englishWords'][$randNo] . '</h1>' . 
		'<div class="answer">'  . ucfirst($lang['translatedWords'][$randNo]) . '</div>';
	}
}

}

?>
    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                   
                    <a class="site-title"><span>Babel</span>Jenks - <span><?php putLanguage(); ?></span></a>

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Languages<i class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <?php putJsonLanguage(); ?>
                           </ul>

                        </li>
                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->


    <div id="hero" class="hero overlay">
        <div class="hero-content">
            <div class="hero-text">
                <?php putWord(); ?>
                <a href="javascript:location.reload();" class="btn btn-border">Next</a>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/script.js"></script>
  
</body>
</html>