<?php
//Fichier du chaine de connexion
include ('config.php');

//Verification de la soumission de la form
if($_SERVER["REQUEST_METHOD"] == "POST"){
    

	//Capture des Exceptions 
    try{
    $stmt = '';
    //requete de l'insertion
   $sql = "insert into reg_clin(pav_clin, condaud_clin, tymp_clin, regmast_clin, vesti_clin, rhino_clin, cavbucc_clin, cervfac_clin,
ophtal_clin, echcardio_clin, electrocardio_clin, oeilopht_clin, visuopht_clin, nephro_clin, neuro_clin, genet_clin,
statutparfr_clin, toxostero_clin, rubestero_clin, herpstero_clin, cmvstero_clin, check_clin,id_pat ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?)";
   
   $pav_clin=$cae_clin=$typ_clin=$regmas_clin=$examves_clin=$examrhin_clin=$examcabu_clin=$examcerfac_clin=$ophta_clin=$echo_clin=$eledio_clin=$fonoeil_clin=$acvis_clin=$consnep_clin=$consneur_clin=$consgene_clin=$staupar_clin=$toxo_clin=$rub_clin=$herp_clin=$cmv_clin='';
   $pat_cons=0;
   if(!empty($_POST['pav_clin'])) $pav_clin = $_POST['pav_clin'];
   if(!empty($_POST['cae_clin'])) $cae_clin = $_POST['cae_clin'];
   if(!empty($_POST['typ_clin'])) $typ_clin = $_POST['typ_clin'];
   if(!empty($_POST['regmas_clin'])) $regmas_clin = $_POST['regmas_clin'];
   if(!empty($_POST['examves_clin'])) $examves_clin = $_POST['examves_clin'];
   if(!empty($_POST['examrhin_clin'])) $examrhin_clin = $_POST['examrhin_clin'];
   if(!empty($_POST['examcabu_clin'])) $examcabu_clin = $_POST['examcabu_clin'];
   if(!empty($_POST['examcerfac_clin'])) $examcerfac_clin = $_POST['examcerfac_clin'];
   if(!empty($_POST['ophta_clin'])) $ophta_clin = $_POST['ophta_clin'];
   if(!empty($_POST['echo_clin'])) $echo_clin = $_POST['echo_clin'];
   if(!empty($_POST['eledio_clin'])) $eledio_clin = $_POST['eledio_clin'];
   if(!empty($_POST['fonoeil_clin'])) $fonoeil_clin = $_POST['fonoeil_clin'];
   if(!empty($_POST['acvis_clin'])) $acvis_clin = $_POST['acvis_clin'];
   if(!empty($_POST['consnep_clin'])) $consnep_clin = $_POST['consnep_clin'];
   if(!empty($_POST['consneur_clin'])) $consneur_clin = $_POST['consneur_clin'];
   if(!empty($_POST['consgene_clin'])) $consgene_clin = $_POST['consgene_clin'];
   if(!empty($_POST['staupar_clin'])) $staupar_clin = $_POST['staupar_clin'];
   if(!empty($_POST['toxo_clin'])) $toxo_clin = $_POST['toxo_clin'];
   if(!empty($_POST['rub_clin'])) $rub_clin = $_POST['rub_clin'];
   if(!empty($_POST['herp_clin'])) $herp_clin = $_POST['herp_clin'];
   if(!empty($_POST['cmv_clin'])) $cmv_clin = $_POST['cmv_clin'];
    if(!empty($_POST['pat_cons'])){
	   $pat_cons   = $_POST['pat_cons'];
	}else{
	$pat_cons   = 0;
	} 
  
   
   $stmt= $db -> prepare($sql);
  
	$stmt -> execute(array($pav_clin,$cae_clin,$typ_clin,$regmas_clin,$examves_clin,$examrhin_clin,$examcabu_clin,$examcerfac_clin,$ophta_clin,$echo_clin,$eledio_clin,$fonoeil_clin,$acvis_clin,$consnep_clin,$consneur_clin,$consgene_clin,$staupar_clin,$toxo_clin,$rub_clin,$herp_clin,$cmv_clin,1,$pat_cons));
   
  }catch(PDOException $e){
      echo $e->getMessage();
  }
 

}
?>
<!DOCTYPE html>
<html class="no-js firefox" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>::  :: Patient</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Bootstrap Select Css -->
<link href="css/bootstrap-select.css" rel="stylesheet">
<!-- Custom Css -->
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/color_skins.css">

<!-- Morris Chart Css-->
<link rel="stylesheet" href="css/morris.css">
<!-- Colorpicker Css -->
<link rel="stylesheet" href="css/bootstrap-colorpicker.css">
<!-- Multi Select Css -->
<link rel="stylesheet" href="css/multi-select.css">
<!-- Bootstrap Spinner Css -->
<link rel="stylesheet" href="css/bootstrap-spinner.css">
<!-- Bootstrap Tagsinput Css -->
<link rel="stylesheet" href="css/bootstrap-tagsinput.css">

<link rel="stylesheet" href="fontawesome/css/all.css">

<!-- noUISlider Css -->
<link rel="stylesheet" href="css/nouislider.css">
<!-- Select2 -->
<link rel="stylesheet" href="css/select2.css">
<link rel="stylesheet" href="css/mycss.css">
 <link rel="stylesheet" href="css/jquery-ui-dp.css" />
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}

/*Checkboxes styles*/
input[type="checkbox"] { display: none; }

input[type="checkbox"] + label {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 20px;
  font: 14px/20px 'Open Sans', Arial, sans-serif;
  color: #ddd;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

input[type="checkbox"] + label:last-child { margin-bottom: 0; }

input[type="checkbox"] + label:before {
  content: '';
  display: block;
  width: 20px;
  height: 20px;
  border: 1px solid #6cc0e5;
  position: absolute;
  left: 0;
  top: 0;
  opacity: .6;
  -webkit-transition: all .12s, border-color .08s;
  transition: all .12s, border-color .08s;
}

input[type="checkbox"]:checked + label:before {
  width: 10px;
  top: -5px;
  left: 5px;
  border-radius: 0;
  opacity: 1;
  border-top-color: transparent;
  border-left-color: transparent;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style></head>
<body class="theme-purple" cz-shortcut-listen="true">
<!-- Page Loader -->
<div class="page-loader-wrapper" style="display: none;">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src=" logo.svg" alt=" " width="48" height="48"></div>
        <p>Please wait...</p>        
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars" style="display: none;"></a>
                <a class="navbar-brand" href="">	<span class="m-l-10"> </span></a>
            </div>
        </li>
        
        <li class="float-right">
            <a href="login.php" class="mega-menu" data-close="true"><i class="fas fa-power-off"></i></a>
				
        </li>
    </ul>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs" style="width:100%">
        <li class="nav-item" style="margin:0 auto;"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="fas fa-deaf"></i></a></li>
        <li class="nav-item" style="margin:0 auto;"><a class="nav-link" data-toggle="tab" href="#user"><i class="fas fa-user"></i></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="profile.html"><img src="hck.png" alt="User" style="width:100%"></a></div>
                            <div class="detail">
                                <h4>Contre d'Audition</h4>
                                <small>HCK</small>                        
                            
                    </li>	
                    <li class=""> <a href="javascript:void(0);" class="" style="font-weight:bold"><i class="fas fa-home"></i><span>Acceuil</span> </a>
                     
                    </li>
                    <li class=""> <a href="javascript:void(0);" class="menu-toggle" style="font-weight:bold"><i class="fas fa-user-injured"></i><span>Patient</span> </a>
                        <ul class="ml-menu">
							<li><a href="blog-dashboard.html">Fiche de patient</a></li>
                            <li><a href="F_surdite.php">Fiche de sudité</a></li>
                            <li><a href="F_chirurgie.php">Fiche de chirurgie</a></li>
                            <li><a href="events.html">Fiche de programmation</a></li>
                            <li><a href="file-dashboard.html">Bilan orthophonique</a></li>
                            <li><a href="contact.html">Fiche d'offre</a></li>
                            
                        </ul>
                    </li>
                    <li class=""> <a href="javascript:void(0);" class="menu-toggle" style="font-weight:bold"><i class="fas fa-search"></i><span>Recherche</span> </a>
                        <ul class="ml-menu">
                            <li><a href="mail-inbox.html">Inbox</a></li>
                            <li><a href="chat.html">Chat</a></li>
                            <li><a href="events.html">Calendar</a></li>
                            <li><a href="file-dashboard.html">File Manager</a></li>
                            <li><a href="contact.html">Contact list</a></li>
                            <li><a href="blog-dashboard.html">Blog</a></li>
                        </ul>
                    </li>
					<li class=""> <a href="javascript:void(0);" class="menu-toggle" style="font-weight:bold"><i class="fas fa-chart-line"></i><span>Statistiques</span> </a>
                        <ul class="ml-menu">
                            <li><a href="mail-inbox.html">Inbox</a></li>
                            <li><a href="chat.html">Chat</a></li>
                            <li><a href="events.html">Calendar</a></li>
                            <li><a href="file-dashboard.html">File Manager</a></li>
                            <li><a href="contact.html">Contact list</a></li>
                            <li><a href="blog-dashboard.html">Blog</a></li>
							 <li><a href="mail-inbox.html">Inbox</a></li>
                            <li><a href="chat.html">Chat</a></li>
                            <li><a href="events.html">Calendar</a></li>
                            <li><a href="file-dashboard.html">File Manager</a></li>
                            <li><a href="contact.html">Contact list</a></li>
                            <li><a href="blog-dashboard.html">Blog</a></li>
                        </ul>
                    </li>
					<li class=""> <a href="javascript:void(0);" class="menu-toggle" style="font-weight:bold"><i class="fas fa-user-md"></i><span>Intervenants</span> </a>
                        <ul class="ml-menu">
                            <li><a href="mail-inbox.html">Inbox</a></li>
                            <li><a href="chat.html">Chat</a></li>
                            <li><a href="events.html">Calendar</a></li>
                            <li><a href="file-dashboard.html">File Manager</a></li>
                            <li><a href="contact.html">Contact list</a></li>
                            <li><a href="blog-dashboard.html">Blog</a></li>
                        </ul>
                    </li>
					<li class=""> <a href="javascript:void(0);" class="menu-toggle" style="font-weight:bold"><i class="fas fa-user-circle"></i><span>Comptes</span> </a>
                        <ul class="ml-menu">
                            <li><a href="mail-inbox.html">Inbox</a></li>
                            <li><a href="chat.html">Chat</a></li>
                            <li><a href="events.html">Calendar</a></li>
                            <li><a href="file-dashboard.html">File Manager</a></li>
                            <li><a href="contact.html">Contact list</a></li>
                            <li><a href="blog-dashboard.html">Blog</a></li>
                        </ul>
                    </li>
                    
                   
                              
                   
                    
                  
                   
                   
                    
                </ul>
            </div>
        </div>
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                            <div class="image"><a href="profile.html"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                            <div class="detail">
                                <h4>NOM</h4>
                                <small>Fonction</small>                        
                            </div>
                            <p class="text-muted">text</p>
                            <div class="row">
                                <div class="col-4">
                                    <h5 class="m-b-5">Text</h5>
                                    <small>Text</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">Text</h5>
                                    <small>Text</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">Text</h5>
                                    <small>Text</small>
                                </div>                            
                            </div>
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Text </small>
                        <p>Text</p>
                        <hr>
                        <small class="text-muted">Text </small>
                        <p>Text</p>
                        <hr>
                                        
                    </li>
                </ul>
            </div>
        </div>
    </div>    
</aside>
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Text</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane slideRight active" id="setting">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: calc(-60px + 100vh);"><div class="slim_scroll" style="overflow: hidden; width: auto; height: calc(-60px + 100vh);">
                <div class="card">
                    <h6>Text</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple" class="active"><div class="purple"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                    </ul>                    
                </div>
                <div class="card theme-light-dark">
                    <h6>Text</h6>
                    <button class="t-light btn btn-default btn-simple btn-round btn-block">Text</button>
                    <button class="t-dark btn btn-default btn-round btn-block">Text</button>
					<button class="m_img_btn btn btn-primary btn-round btn-block">Text Text</button>
                </div>
                <div class="card">
                    <h6>Text Text</h6>
 
                </div>
                <div class="card">
                    <h6>Text Text</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox">
                                <input id="checkbox5" type="checkbox">
                                <label for="checkbox5">Text</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox6" type="checkbox">
                                <label for="checkbox6">Text</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Text Text</h6>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">Text</small>
                            <h5 class="m-b-0 h6">Text</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-width="5" data-bar-spacing="3" data-bar-color="#00ced1"><canvas style="display: inline-block; width: 61px; height: 25px; vertical-align: top;" width="61" height="25"></canvas></div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">Text Text</small>
                            <h5 class="m-b-0 h6">Text</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-width="5" data-bar-spacing="3" data-bar-color="#F15F79"><canvas style="display: inline-block; width: 61px; height: 25px; vertical-align: top;" width="61" height="25"></canvas></div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">Text Text</small>
                            <h5 class="m-b-0 h6">Text</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-width="5" data-bar-spacing="3" data-bar-color="#78b83e"><canvas style="display: inline-block; width: 61px; height: 25px; vertical-align: top;" width="61" height="25"></canvas></div>
                        </div>
                    </div>
                    <div class="row m-b-40">
                        <div class="col-7">                            
                            <small class="displayblock">Text Text</small>
                            <h5 class="m-b-0 h6">Text</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-width="5" data-bar-spacing="3" data-bar-color="#457fca"><canvas style="display: inline-block; width: 61px; height: 25px; vertical-align: top;" width="61" height="25"></canvas></div>
                        </div>
                    </div>
                </div>
            </div><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.4) none repeat scroll 0% 0%; width: 2px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 3px; z-index: 99; right: 1px; height: 518.302px;"></div><div class="slimScrollRail" style="width: 2px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>                
        </div>       
        <div class="tab-pane right_chat stretchLeft" id="chat">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: calc(-60px + 100vh);"><div class="slim_scroll" style="overflow: hidden; width: auto; height: calc(-60px + 100vh);">
                <div class="card">
                    <div class="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Text</h6>
                    <ul class="list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Text</span>
                                        <span class="message">Text</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Text</span>
                                        <span class="message">Text</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Text</span>
                                        <span class="message">Text</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="me">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Text</span>
                                        <span class="message">Text</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Text</span>
                                        <span class="message">Text</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>                        
                    </ul>
                </div>
                <div class="card">
                    <h6>Text</h6>
                    <ul class="list-unstyled">
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar10.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar6.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar7.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar8.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar9.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src=" avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.4) none repeat scroll 0% 0%; width: 2px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 3px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 2px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
        </div>
        <div class="tab-pane slideLeft" id="activity">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: calc(-60px + 100vh);"><div class="slim_scroll" style="overflow: hidden; width: auto; height: calc(-60px + 100vh);">
                <div class="card user_activity">
                    <h6>Text</h6>
                    <div class="streamline b-accent">
                        <div class="sl-item">
                            <img class="user rounded-circle" src=" avatar4.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Text</h5>
                                <small>Text <a href="javascript:void(0);" class="text-info">Text</a>.</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src=" avatar5.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Text</h5>
                                <small>Text <a href="javascript:void(0);">Text</a>.</small>
                                <small><strong>Text</strong> Text</small>
                                <small><strong>Text</strong> Text</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src=" avatar6.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Text</h5>
                                <small>Text <a href="javascript:void(0);">Text</a>.</small>
                                <small>Text</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src=" avatar7.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Text</h5>
                                <small>Text <a href="javascript:void(0);" class="text-info">Text</a>.</small>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="card">
                    <h6>Text</h6>
                    <ul class="list-unstyled activity">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-pdf l-blush"></i>                    
                                <div class="info">
                                    <h4>Text</h4>                    
                                    <small>Text</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>                    
                                <div class="info">
                                    <h4>Text</h4>                    
                                    <small>Text</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>                    
                                <div class="info">
                                    <h4>Text</h4>                    
                                    <small>Text</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>                    
                                <div class="info">
                                    <h4>Text</h4>                    
                                    <small>Text</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>                    
                                <div class="info">
                                    <h4>Text</h4>                    
                                    <small>Text</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-videocam l-turquoise"></i>                    
                                <div class="info">
                                    <h4>Text</h4>                    
                                    <small>Text</small>
                                </div>
                            </a>
                        </li>                        
                    </ul>
                </div>
            </div><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.4) none repeat scroll 0% 0%; width: 2px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 3px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 2px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
        </div>
    </div>
</aside>

<!-- Chat-launcher -->

<section class="content">
<form method="post" id="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >  
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Text text
                <small>Text text  </small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="Acceuil.php"><i class="fas fa-home"></i>  </a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">ppp</a></li>
                    <li class="breadcrumb-item active">liste des patients</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
	<!--start -->
	<div class="row clearfix"> 
	
            <!-- Spinners -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
				
                    <div class="header">
                        <h2><strong>Patient</strong> <small><a href="#" target="">les informations du patient</a></small> </h2>
                    </div>
					
                    <div class="body">
					
                        <div class="row clearfix">
						 
						<div class="col-md-6">
						    <div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select name="pat_cons" class="form-control">
								
                                    <option value="" >Selectionner un patient</option>
									<?php
									$stmt_o = $db->query("SELECT * FROM reg_pat"); 
										  while($row_o = $stmt_o->fetch()) {
										?> 
                                    <option value="<?php echo $row_o["id_pat"]?>"><?php echo $row_o["nom_pat"].' '.$row_o["prenom_pat"]?></option>
										  <?php }?>
								</select>
								</div>
							</div>
                            <div class="col-md-12">
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="pav_clin" name="pav_clin" class="form-control">
                                    <option value="" selected="selected">PAVILLON</option>
                                    <option value="1">Normal</option>
									<option value="2">Décollé</option>
                                    <option value="3">Implantation basse</option>
									<option value="4">Pavillon plicature</option>
									<option value="5">Mal enroule</option>
									<option value="6">Encondrome</option>
									<option value="7">Fistule préhelicienne</option>
									<option value="8">Oreille cornet</option>
									<option value="9">Bourrelet chondro-cutané avec relief identifiable</option>
									<option value="10">Bourrelet chondro-cutané Sans Relief identifiable</option>
									<option value="11">BAbsence de résidu chondro-cutané</option>
									<option value="12">Autre</option>
								</select>
								</div>
                            </div>
							 <div class="col-md-12">
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="cae_clin" name="cae_clin" class="form-control">
                                    <option value="" selected="selected">CONDUIT AUDITIF EXTERNE</option>
                                    <option value="1">Normal</option>
									<option value="2">Etroit</option>
                                    <option value="3">Orifice fistuleux</option>
									<option value="4">Absent</option>
									<option value="5">Autre</option>
								</select>
								</div>
                            </div>
							<div class="col-md-12">
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="typ_clin" name="typ_clin" class="form-control">
                                    <option value="" selected="selected">TYMPAN</option>
                                    <option value="1">Normal</option>
									<option value="2">Inflammatoire</option>
                                    <option value="3">Mat</option>
									<option value="4">Bulle d’aire</option>
									<option value="5">Contrôlable</option>
									<option value="6">Autonettoyante</option>
									<option value="7">Fixe</option>
									<option value="8">Perforation Totale</option>
									<option value="9">Perforation Antéro-supérieure</option>
									<option value="10">Perforation Antéro-inférieure</option>
									<option value="11">Perforation Postéro-supérieure</option>
									<option value="12">Perforation Postéro-inférieure</option>
									<option value="13">Perforation Plaque de tympanosclérose</option>
									<option value="14">Perforation Bride prémyringienne</option>
								</select>
								</div>
                            </div>
							<div class="col-md-12">
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="regmas_clin" name="regmas_clin" class="form-control">
                                    <option value="" selected="selected">REGION MASTOIDIENNE</option>
                                    <option value="1">Peau d’aspect normal</option>
									<option value="2">Cicatricielle</option>
                                    <option value="3">Inflammatoire</option>
									<option value="4">Fistule</option>
									<option value="5">Chéloïde</option>
									<option value="6">Comblement du sillon retro auriculaire</option>
									<option value="7">Autre</option>
									
								</select>
								</div>
                            </div>
							<div class="col-md-12">
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="examves_clin" name="examves_clin" class="form-control">
                                    <option value="" selected="selected">EXAMEN VESTIBULAIRE</option>
                                    <option value="1">Normal</option>
									<option value="2">Nystagmus Absent</option>
                                    <option value="3">Nystagmus Spontané</option>
									<option value="4">Nystagmus </option>
									<option value="5">Nystagmus Signe de la fistule</option>
									<option value="6">Nystagmus Manœuvre de Dix et Hallpix</option>
									<option value="7">Nystagmus Manœuvre de Halmagyi</option>
									<option value="8">Nystagmus Head shaking test</option>
									<option value="9">Examen de l’équilibre postural Non réalisable</option>
									<option value="10">Test des index Déviation a droite</option>
									<option value="11">Test des index Déviation a gauche</option>
									<option value="12">Test des index Normal</option>
									<option value="13">Test de Romberg Déviation à droite</option>
									<option value="14">Test de Romberg Déviation à gauche</option>
									<option value="15">Test de Romberg Normal</option>
									<option value="16">Test de Marche aveugle Marche en étoile à droite</option>
									<option value="17">Test de Marche aveugle Marche en étoile à gauche</option>
									<option value="18">Test de Marche aveugle Normal</option>
									<option value="19">Test de piétinement aveugle de Fukuda Déviation à droite</option>
									<option value="20">Test de piétinement aveugle de Fukuda Déviation à gauche</option>
									<option value="21">Test de piétinement aveugle de Fukuda Normal</option>
									<option value="22">Hypotonie axiale précoce</option>
									<option value="23">Retard d’acquisition de la tenu de la tête &gt;6 mois</option>
									<option value="24">Retard dans l’acquisition de station assise &gt;9 mois</option>
									<option value="25">Station debout avec support &gt;14 mois-18 mois</option>
									<option value="26">Retard d’acquisition de la marche &gt;19 mois</option>
									<option value="27">chutes fréquentes</option>
									<option value="28">Appuis a la marche</option>
									<option value="29">Fatigabilité</option>
									<option value="30">Pleurs aux bercements</option>
									<option value="31">Ne supporte pas les chaussures rigides</option>
									<option value="32">Peur du noir</option>
									<option value="33">N’aime pas la plage ou terrains accidentes</option>
									<option value="34">Intolérance aux mouvements rapides</option>
									<option value="35">Espaces de préhension limite a la longueur de bras</option>
									<option value="36">Autre</option>
								</select>
								</div>
                            </div>
							<div class="col-md-12">
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="examrhin_clin" name="examrhin_clin" class="form-control">
                                    <option value="" selected="selected">EXAMEN RHINOLOGIQUE</option>
                                    <option value="1">Normal</option>
									<option value="2">Base du nez élargie</option>
                                    <option value="3">Atrésie des orifices narinaires</option>
									<option value="4">Atrésie choanale </option>									
									<option value="5">Autre</option>
								</select>
								</div>
                            </div>
							<div class="col-md-12">
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="examcabu_clin" name="examcabu_clin" class="form-control">
                                    <option value="" selected="selected">EXAMEN DE LA CAVITE BUCCALE</option>
                                    <option value="1">Normal</option>
									<option value="2">Fente labiale</option>
                                    <option value="3">Fente palatine</option>
									<option value="4">Fente labio-palatine </option>									
									<option value="5">Hypoplasie mandibulaire</option>
									<option value="6">Autre</option>
								</select>
								</div>
                            </div> 
							<div class="col-md-12">
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="examcerfac_clin" name="examcerfac_clin" class="form-control">
                                    <option value="" selected="selected">EXAMEN CERVICO-FACIALE</option>
                                    <option value="1">Normal</option>
									<option value="2">Tâches hypopigmentées face et/ou cou</option>
                                    <option value="3">Mèche de cheveux dans la région frontale</option>
									<option value="4">Torticolis congénital</option>									
									<option value="5">Mobilité cervicale réduite</option>
									<option value="6">Fistules cervicales 2 ème fente</option>
									<option value="7">Goitre</option>
									<option value="8">Cou court</option>
									<option value="9">Implantation basse des cheveux</option>
									<option value="10">Autre</option>
								</select>
								</div>
                            </div> 
							<div class="col-md-12">
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="ophta_clin" name="ophta_clin" class="form-control">
                                    <option value="" selected="selected">OPHTALMOLOGIQUE</option>
                                    <option value="1">Normal</option>
									<option value="2">Dyschromie ou hétérochromie irienne partielle ou totale
uni ou bilatérale</option>
                                    <option value="3">Epicanthus</option>
									<option value="4">Strabisme</option>									
									<option value="5">Telecanthus</option>
									<option value="6">Hypertélorisme</option>
									<option value="7">Hyperplasie des sourcils</option>
									<option value="8">Hypo pigmentation des sourcils</option>
									<option value="9">Fond d’œil Normal</option>
									<option value="10">Fond d’œil Anormal</option>
									<option value="11">Fond d’œil Rétinite pigmentaire</option>
									<option value="12">Fond d’œil Autre</option>
									<option value="13">Acuité visuelle Port de lunette</option>
									<option value="14">Acuité visuelle Cataracte</option>
									<option value="15">Acuité visuelle Autre</option>
									
								</select>
								</div>
                            </div> 
							<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="echo_clin" name="echo_clin" class="form-control">
                                    <option value="" selected="selected">Echocoeur</option>
                                    <option value="1">Normal</option>
									<option value="2">Anormale</option>
                                    <option value="3">Autre</option>
									
								</select>
								</div>
                            </div> 
											
							<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="eledio_clin" name="eledio_clin" class="form-control">
                                    <option value="" selected="selected">Electrocardiograamme</option>
                                    <option value="1">Normal</option>
									<option value="2">Anormale</option>
                                    <option value="3">Autre</option>
									
								</select>
								</div>
                            </div> 
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
						</div>
						
						<div class="col-md-6">
						
						<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="fonoeil_clin" name="fonoeil_clin" class="form-control">
                                    <option value="" selected="selected">Fond d’oeil</option>
                                    <option value="1">Normal</option>
									<option value="2">Anormale</option>
                                    <option value="3">Autre</option>
									
								</select>
								</div>
                            </div> 
							<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="acvis_clin" name="acvis_clin" class="form-control">
                                    <option value="" selected="selected">ACUITE VISUELLE</option>
                                    <option value="1">Normal</option>
									<option value="2">Anormale</option>
                                    <option value="3">Autre</option>
									
								</select>
								</div>
                            </div>
<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="consnep_clin" name="consnep_clin" class="form-control">
                                    <option value="" selected="selected">CONSULTATION NEPHROLOGIE</option>
                                    <option value="1">Normal</option>
									<option value="2">Proteinurie Présente</option>
									<option value="3">Proteinurie Absente</option>
									<option value="4">Echo rénale Normale</option>
									<option value="5">Echo rénale Anormal</option>
                                    <option value="6">Autre</option>
									
								</select>
								</div>
                            </div>	
<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select  id="consneur_clin" name="consneur_clin" class="form-control">
                                    <option value="" selected="selected">CONSULTATION NEUROPEDIATRIQUE</option>
                                    <option value="1">Normal</option>
									<option value="2">Anormal</option>
									
                                    <option value="3">Autre</option>
									
								</select>
								</div>
                            </div>
<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="consgene_clin" name="consgene_clin" class="form-control">
                                    <option value="" selected="selected">CONSULTATION GENETIQUE</option>
                                    <option value="1">Normal</option>
									<option value="2">Anormal</option>
									
                                    <option value="3">Autre</option>
									
								</select>
								</div>
                            </div>	
<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="staupar_clin" name="staupar_clin" class="form-control">
                                    <option value="" selected="selected">STATUT AUDITIF DES PARENTS ET DE LA FRATRIE</option>
                                    <option value="1">Normal</option>
									<option value="2">Anormal</option>
									
                                    <option value="3">Autre</option>
									
								</select>
								</div>
                            </div>	
<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="toxo_clin" name="toxo_clin" class="form-control">
                                    <option value="" selected="selected">TOXOPLASMOSE</option>
                                    <option value="1">Postive</option>
									<option value="2">Négative</option>
									
                                    <option value="3">Non faite</option>
									
								</select>
								</div>
                            </div>
<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="rub_clin" name="rub_clin" class="form-control">
                                    <option value="" selected="selected">RUBEOLE</option>
                                    <option value="1">Postive</option>
									<option value="2">Négative</option>
									
                                    <option value="3">Non faite</option>
									
								</select>
								</div>
                            </div>	
<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="herp_clin" name="herp_clin" class="form-control">
                                    <option value="" selected="selected">HERPES</option>
                                    <option value="1">Postive</option>
									<option value="2">Négative</option>
									
                                    <option value="3">Non faite</option>
									
								</select>
								</div>
                            </div>
<div class="col-md-12">
							
                                 <div class="btn-group bootstrap-select form-control show-tick">
								<select id="cmv_clin" name="cmv_clin" class="form-control">
                                    <option value="" selected="selected">CMV</option>
                                    <option value="1">Postive</option>
									<option value="2">Négative</option>
									
                                    <option value="3">Non faite</option>
									
								</select>
								</div>
                            </div>			
                           
                          
							
							
							
							
							
						
							
							
							
						
                                
								
                                
                           
							
							
							
							
						
						
						</div>
						
						
						
						
					
                        </div>
						
                    </div>
					
                </div>
            </div>
            <!-- #END# Spinners --> 
            
        </div>
	
        
		<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
		<button class="btn btn-raised btn-primary btn-round waves-effect" type="button" onclick="check_inputs()">Valider</button>
		<button class="btn btn-raised btn-primary btn-round waves-effect" type="botton" onclick="">Réinitialiser</button>

		</div>
			</div>
        <!-- #END# Input Slider --> 
		</form>
		 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="display:none" id="buttonmodal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal" >
    <div class="modal-dialog" >
      <div class="modal-content" style="margin-top: 150px; ">
      
        <!-- Modal Header
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
         -->
        <!-- Modal body -->
		<button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-body" style="margin:0 auto">
		
          Merci de renseigner les champs
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin:0 auto">Fermer</button>
        </div>
        
      </div>
    </div>
  </div>
    </div>
</section>
<!-- Jquery Core Js --> 

<script src="js/libscripts.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="js/vendorscripts.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="js/moment.js"></script> <!-- Moment Plugin Js --> 
<script src="js/moment-with-locales.js"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js --> 


<script src="js/mainscripts.js"></script><!-- Custom Js --> 
<script src="js/basic-form-elements.js"></script> 

<script src="js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js --> 
<script src="js/jquery_003.js"></script> <!-- Input Mask Plugin Js --> 
<script src="js/jquery.js"></script> <!-- Multi Select Plugin Js --> 
<script src="js/jquery_002.js"></script> <!-- Jquery Spinner Plugin Js --> 
<script src="js/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="js/nouislider.js"></script> <!-- noUISlider Plugin Js -->
<script src="js/select2.js"></script> <!-- Select2 Js -->

 <script type="text/javascript"
        src="js/datepicker-fr.js">
</script>
<script src="js/jquery-ui-dp.js"></script>
<script>
//tester si les inputs ne sont pas vides
function check_inputs(){


	
	document.forms["myform"].submit();


}

//
 $( function() {
    $( "#dp" ).datepicker();
  } );
  $.datepicker.regional['fr'] = {clearText: 'Effacer', clearStatus: '',
    closeText: 'Fermer', closeStatus: 'Fermer sans modifier',
    prevText: '&lt;Préc', prevStatus: 'Voir le mois précédent',
    nextText: 'Suiv&gt;', nextStatus: 'Voir le mois suivant',
    currentText: 'Courant', currentStatus: 'Voir le mois courant',
    monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin',
    'Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
    monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Jun',
    'Jul','Aoû','Sep','Oct','Nov','Déc'],
    monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre année',
    weekHeader: 'Sm', weekStatus: '',
    dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
    dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
    dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
    dayStatus: 'Utiliser DD comme premier jour de la semaine', dateStatus: 'Choisir le DD, MM d',
    dateFormat: 'dd/mm/yy', firstDay: 0, 
    initStatus: 'Choisir la date', isRTL: false};
 $.datepicker.setDefaults($.datepicker.regional['fr']);
 
 
</script>
  
 
</body>
</html>