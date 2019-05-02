<?php
	include ('config.php'); 
	$error="";
	$falg ='';
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	 try{
	 $login=$mail=$password=" ";
	 if (isset($_POST['login'])) $login = $_POST['login'];
	 if (isset($_POST['mail'])) $mail = $_POST['mail'];
	 if (isset($_POST['password'])) $password = $_POST['password'];
	$stmt = '';
	
	
	$sql = "insert into reg_cmpt(log_cmpt,pass_cmpt,email) values ( ?,?,?)";

    $stmt= $db -> prepare($sql);
  
	$falg = $stmt -> execute(array($login,$password,$mail ));
if($falg==1){
	header('Location: login.php');
}

 }catch(PDOException $e){
      $error = $e->getMessage();
  }
	}
	?>

<!DOCTYPE html>
<!-- saved from url=(0062)https://thememakker.com/templates/oreo/html/light/sign-up.html -->
<html class="no-js " lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

        <title>:: Centre Audition : Enregistrement </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/authentication.css">
    <link rel="stylesheet" href="css/color_skins.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body class="theme-purple authentication sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">        
        <div class="navbar-translate n_logo">
            <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank"></a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://thememakker.com/templates/oreo/html/light/index.html">Accueil</a>
                </li>
                <li class="nav-item">
                          
                <li class="nav-item">
                    <a class="nav-link btn btn-white btn-round" href="login.php">S'authentifier</a>
                </li>
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
                        <div class="">
                            <img src="hck.png" alt="">
                        </div>
                        <h5>S'enregistrer</h5>
                        <span></span>
                    </div>
                    <div class="content">                                                
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Entrer nom d'utilisateur" name="login">
                            <span class="input-group-addon">
                                <i class="far fa-user-circle"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Entrer l'email" name="mail">
                            <span class="input-group-addon">
                                <i class="far fa-envelope"></i>
                            </span>
                        </div>
                        <div class="input-group">
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

</div>

<!-- Jquery Core Js -->
<script src="js/libscripts.bundle.js"></script>
<script src="js/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="js/myjs.js"></script>
<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
</script>
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

</body></html>