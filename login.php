<?php
	include ('config.php'); 
	$error="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	 try{
	 $login=$pass='';
	  if (isset($_POST['login'])) $login = $_POST['login'];
	   if (isset($_POST['password'])) $pass = $_POST['password'];
	  
	$stmt = $db->prepare("SELECT count(*) FROM public.reg_cmpt where log_cmpt= ? and pass_cmpt=?");
$stmt->execute(array($login,$pass));
$count = $stmt->fetchColumn();

if($count>0){
	header('Location: acceuil.php');
}
else{
	$error = "Votre login ou mots de passe est incorrecte";
}
 }catch(PDOException $e){
      $error = $e->getMessage();
  }
	}
	?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: EARCHOCH :: Authentification</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/authentication.css">
    <link rel="stylesheet" href="css/color_skins.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
</head>

<body class="theme-purple authentication sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">        
        <div class="navbar-translate n_logo">
            <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank">EARCOCH Cheikh Khalifa Bin Zayed Al Nahyan</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                
                
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(login.jpg);max-width:100% !important;max-height:100% !important;display:block;"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="post" action="" name="myform">
                    <div class="header">
                        <h5>Authentification</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <input type="text" class="form-control" placeholder="Entrer votre identifiant" name="login">
                            <span class="input-group-addon">
                                <i class="far fa-user-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg wrapper">
                            <input type="password" placeholder="Mots de passe" class="form-control" id="password" name="password"/>
                            <span class="input-group-addon">
                                <i id="toggleBtn" class="fas fa-eye-slash toggler-ico"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button class="btn btn-raised btn-primary btn-round waves-effect" type="button" onclick="check_inputs()">Valider</button>
						<?php if(isset($error)) echo $error;?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="" target="_blank">Apropos de nous</a></li>
                    <li><a href="javascript:void(0);">Réclamation</a></li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>CAC <a href="" target="">HCK</a></span>
            </div>
        </div>
    </footer>
</div>

<!-- Jquery Core Js -->
<script src="js/libscripts.bundle.js"></script>
<script src="js/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="js/myjs.js"></script>
<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
//=============================================================================
$('.form-control').on("focus", function() {
    $(this).parent('.input-group').addClass("input-group-focus");
}).on("blur", function() {
    $(this).parent(".input-group").removeClass("input-group-focus");
});

//send form
function check_inputs(){

	
	document.forms["myform"].submit();


}
</script>
</body>
</html>