<?php
	//Fichier du chaine de connexion
include ('config.php');

//Verification de la soumission de la form
if($_SERVER["REQUEST_METHOD"] == "POST"){
    

	//Capture des Exceptions 
    try{
    $stmt = '';
    //requete de l'insertion
   $sql = "insert into reg_scan(date_scan, inject_scan, centre_scan, conduit_scan, caisse_scan, chaine_scan,
fenronde_scan, mastoide_scan, canal_scan, tegem_scan, golfe_scan, canalcaro_scan, sinus_scan, sinustymp_scan,
recessus_scan, cochle_scan, vestibule_scan, semicer_scan, aqueduc_scan, modiolus_scan, coduit_scan, cerebrale_scan, check_scan,id_pat) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?)";
   $error='';
   $dp=$inj_prd_con_tdm=$centre=$con_aud_ext=$cai_tdm=$mart_tdm=$fen_tdm=$mast_tdm=$cafa_tdm=$teg_typ=$golf_jur=$ca_ca=$sin_sig=$sin_typ=$re_fa_tdm=$cochl_tdm=$vest_tdm=$casecir_tdm=$aqves_tdm=$mod_tdm=$coai_tdm=$crb_tdm=' ';
    $pat_cons=0;
   
	if(!empty($_POST['$dp'])){	
	$dp = $_POST['$dp'];
	}else{
	$dp = date("Y-m-d");
   }
   
	if (isset($_POST['inj_prd_con_tdm'])) $inj_prd_con_tdm = $_POST['inj_prd_con_tdm'];
	if (isset($_POST['centre'])) $centre = $_POST['centre'];
	if (isset($_POST['con_aud_ext'])) $con_aud_ext = $_POST['con_aud_ext'];
	if (isset($_POST['cai_tdm'])) $cai_tdm = $_POST['cai_tdm'];
	if (isset($_POST['mart_tdm'])) $mart_tdm = $_POST['mart_tdm'];
	if (isset($_POST['fen_tdm'])) $fen_tdm = $_POST['fen_tdm'];
	if (isset($_POST['mast_tdm'])) $mast_tdm = $_POST['mast_tdm'];
	if (isset($_POST['cafa_tdm'])) $cafa_tdm = $_POST['cafa_tdm'];
	if (isset($_POST['teg_typ'])) $teg_typ = $_POST['teg_typ'];
	if (isset($_POST['golf_jur'])) $golf_jur = $_POST['golf_jur'];
	if (isset($_POST['ca_ca'])) $ca_ca = $_POST['ca_ca'];
	if (isset($_POST['sin_sig'])) $sin_sig = $_POST['sin_sig'];
	if (isset($_POST['sin_typ'])) $sin_typ = $_POST['sin_typ'];
	if (isset($_POST['re_fa_tdm'])) $re_fa_tdm = $_POST['re_fa_tdm'];
	if (isset($_POST['cochl_tdm'])) $cochl_tdm = $_POST['cochl_tdm'];
	if (isset($_POST['vest_tdm'])) $vest_tdm = $_POST['vest_tdm'];
	if (isset($_POST['casecir_tdm'])) $casecir_tdm = $_POST['casecir_tdm'];
	if (isset($_POST['aqves_tdm'])) $aqves_tdm = $_POST['aqves_tdm'];
	if (isset($_POST['mod_tdm'])) $mod_tdm = $_POST['mod_tdm'];
	if (isset($_POST['coai_tdm'])) $coai_tdm = $_POST['coai_tdm'];
	if (isset($_POST['crb_tdm'])) $crb_tdm = $_POST['crb_tdm'];
   
  if(!empty($_POST['pat_cons'])){
	   $pat_cons   = $_POST['pat_cons'];
	}else{
	$pat_cons   = 0;
	} 
  
   
   $stmt= $db -> prepare($sql);
  
	$stmt -> execute(array($dp,$inj_prd_con_tdm,$centre,$con_aud_ext,$cai_tdm,$mart_tdm,$fen_tdm,$mast_tdm,$cafa_tdm,$teg_typ,$golf_jur,$ca_ca,$sin_sig,$sin_typ,$re_fa_tdm,$cochl_tdm,$vest_tdm,$casecir_tdm,$aqves_tdm,$mod_tdm,$coai_tdm,$crb_tdm,1,$pat_cons));
   
  }catch(PDOException $e){
      $error = $e->getMessage();
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
							 <div class="input-group">
                                        
                                        <input id="dp" placeholder="Date de naissance" name="dp" style="background-color: transparent;
										border: 1px solid #E3E3E3;
										border-radius: 30px;
										color: #2c2c2c;
										
										height: auto;
										line-height: normal;    box-shadow: none;    display: block;
										width: 100%;    padding: 10px 18px 10px 18px;    background-clip: padding-box;    background-clip: padding-box;transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out" class="" readonly>
                                    </div>
                                
                            </div>	
							<div class="col-md-12" style="color:#888">
                                    <p style="display:inline;">Injection du produit de contraste :</p>                               
                                    <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="inj_prd_con_tdm" id="oui" class="with-gap" value="option1">
                                    <label for="oui">Oui</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="inj_prd_con_tdm" id="Non" class="with-gap" value="option2">
                                    <label for="Non">Non</label>
                                </div>
                                
                            </div>
							
							<div class="col-md-12">
                                <div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Centre" id="centre" name="centre" required style="font-size:15px">
								</div>
                            </div>
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="con_aud_ext" name="con_aud_ext" class="form-control">
                                    <option selected="selected">Conduit audtif externe</option>
                                    <option value="1">Normal</option>
									<option value="2">Atrésie</option>
                                    <option value="3">Absent</option>
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="cai_tdm" name="cai_tdm" class="form-control">
                                    <option selected="selected">Caisse</option>
                                    <option value="1">Normal</option>
									<option value="2">Hypoplasique</option>
                                    <option value="3">Cloisonnée</option>
                                    <option value="4">Absente</option>
                                    <option value="5">Comblement</option>
                                    <option value="6">Autre</option>
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                   
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="mart_tdm" name="mart_tdm" class="form-control">
                                     <option selected="selected">chaine</option>
									<optgroup label="Marteau">
                                    <option value="1">Normal</option>
									<option value="2">Hypoplasique</option>
                                    <option value="3">Fixe</option>
                                     </optgroup>
                                    <option value="4">Autre</option>
								
                                    <optgroup label="Enclume">
                                    <option value="5">Normal</option>
									<option value="6">Hypoplasique</option>
                                    <option value="7">Fixe</option>
                                    <option value="8">Fusion uncudo-malléaire</option>
                                    
                                    <option value="9">Autre</option>
								</optgroup>
                                    <optgroup label="Etrier et fenêtre ovale">
                                    <option value="10">Normal</option>
									<option value="11">Hypoplasique</option>
									<option value="12">Absent</option>
                                    </optgroup>
								
                                    <optgroup label="Pyramide">
                                    <option value="13">Présente</option>
									<option value="14">Absente</option>
									 </optgroup>
                              
                                    <optgroup label="Tendon de l’etrier">
                                    <option value="15">Présent</option>
									<option value="16">Ossifié</option>
									<option value="17">Absent</option>
									 </optgroup>
                                   
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                 
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="fen_tdm" name="fen_tdm" class="form-control">
                                    <option selected="selected">Fenêtre ronde</option>
                                    <option value="1">Hypoplasique</option>
									<option value="2">Aplasique</option>
									<option value="3">Fenêtre double</option>
									<option value="4">Calcifiée</option>
									<option value="5">Autre</option>
									
                                    
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                   
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="mast_tdm" name="mast_tdm" class="form-control">
                                    <option selected="selected">Mastoide</option>
                                    <option value="1">Pneumatisée</option>
									<option value="2">Diploique</option>
									<option value="3">Sclérotique</option>
									
                                    
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                   
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="cafa_tdm" name="cafa_tdm" class="form-control">
                                    <option selected="selected">Canal du facial</option>
                                    <option value="1">Trajet normal</option>
									<option value="2">Trajet aberrant</option>
									<option value="3">Hypoplasique</option>
									<option value="4">Aplasique</option>
									<option value="5">Dédoublement</option>
									<option value="6">Procident</option>
									<option value="7">Autre</option>
									
                                    
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                 
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="teg_typ" name="teg_typ" class="form-control">
                                    <option selected="selected">Tegement tympani</option>
                                    <option value="1">Normal</option>
									<option value="2">Procident</option>
									
									
                                    
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                  
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="golf_jur" name="golf_jur" class="form-control">
                                    <option selected="selected">Golfe de la jugulaire</option>
                                    <option value="1">Normal</option>
									<option value="2">Déhiscent</option>
									<option value="3">Haut situe au dessus du plan de l’annulus</option>
									
									
                                    
								</select>
								</div>
							</div>
							
							
							
							
							
							
							
							
							
							
							
							
						</div>
						
						<div class="col-md-6">
						
						
                            
							<div class="col-md-12" style="" >
                                                                  
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="ca_ca" name="ca_ca" class="form-control">
                                    <option selected="selected">Canal carotidien</option>
                                    <option value="1">Normal</option>
									<option value="2">Procident</option>
									
                                    
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                   
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="sin_sig" name="sin_sig" class="form-control">
                                    <option selected="selected">Sinus sigmoide</option>
                                    <option value="1">Normal</option>
									<option value="2">Anterieur</option>
									<option value="3">Autre</option>
									
                                    
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                  
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="sin_typ" name="sin_typ" class="form-control">
                                    <option selected="selected">Sinus tympani</option>
                                    <option value="1">A</option>
									<option value="2">B</option>
									<option value="3">C</option>
									
                                    
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                   
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="re_fa_tdm" name="re_fa_tdm" class="form-control">
                                    <option selected="selected">Récessus du facial</option>
                                    <option value="1">Etroit</option>
									<option value="2">Large</option>
									
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                   
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="cochl_tdm" name="cochl_tdm" class="form-control">
                                    <option selected="selected">Cochlée</option>
                                    <option value="1">Normale</option>
									 <optgroup label="Anormale (sennaroglu) TDM /IRM">
									<option value="2">absence compléte du labyrinthe</option>
									<option value="3">aplasie cochléaire</option>
									<option value="4">cavité commune</option>
									<optgroup label="partition incompléte de la cochlée">
									<option value="5">absence du modiolus et des septas</option>
									<option value="6">tour basal de la cochlée normal et hypoplasie du modiolus et fusion du
									<option value="7">modiolus absent et septas présents</option>
									</optgroup>
									<optgroup label="hypoplasie cochléaire">
									<option value="8">sans modiolus ni septas</option>
									<option value="9">cochlée kystique sans modiolus ni septas et architecture externe
									<option value="10">micro-cochlée &lt; 2 tours</option>
									</optgroup>
									<option value="11">LVAS  _ large vestibue aqueduc syndrome _</option>
									<option value="12">CAI étroit</option>
									 </optgroup>
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                              
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="vest_tdm" name="vest_tdm" class="form-control">
                                    <option selected="selected">Vestibule</option>
                                    <option value="1">Abscent</option>
									<option value="2">Hypoplasique</option>
									<option value="3">Dilatée</option>
									
									
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="casecir_tdm" name="casecir_tdm" class="form-control">
                                    <option selected="selected">Canal semi circulaire</option>
                                    <option value="1">Abscent</option>
									<option value="2">Hypoplasique</option>
									<option value="3">Large</option>
									
									
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                 
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="aqves_tdm" name="aqves_tdm" class="form-control">
                                    <option selected="selected">Aqueduc du vestibule</option>
                                    <option value="1">Normal</option>
									<option value="2">Dilaté supérieur a 1,5 mm</option>
									
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                 
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="mod_tdm" name="mod_tdm" class="form-control">
                                    <option selected="selected">Modiolus</option>
                                    <option value="1">Normal</option>
									<option value="2">Hypoplasique</option>
									<option value="3">Abscent</option>
									
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                   
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="coai_tdm" name="coai_tdm" class="form-control">
                                    <option selected="selected">Coduit audtif interne</option>
                                    <option value="1">Normal</option>
									<option value="2">Etroit</option>
									<option value="3">Elargie</option>
									
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="crb_tdm" name="crb_tdm" class="form-control">
                                    <option selected="selected">Cérébrale</option>
                                    <option value="1">Calcification intracranienne</option>
									<option value="2">Dilatation ventriculaire</option>
									<option value="3">Atrophie</option>
									
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
<?php if (isset($error)) echo $error;?>
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