<?php
//Fichier du chaine de connexion
include ('config.php');

//Verification de la soumission de la form
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
//Test sur les champs si il ne sont pas renseignés 
if(!empty($_POST['number']) || !empty($_POST['name'])|| !empty($_POST['Adresse'])||!empty($_POST['complt_addrs'])||!empty($_POST['age1'])||!empty($_POST['mois1'])|| !empty($_POST['age2'])||!empty($_POST['mois2'])|| !empty($_POST['dp'])|| !empty($_POST['prenom'])||!empty($_POST['ville'])||!empty($_POST['code'])||!empty($_POST['situation'])|| !empty($_POST['type'])||!empty($_POST['gender'])||!empty($_POST['langue'])||!empty($_POST['niv_sco'])|| !isset($_POST['c1']) && !empty($_POST['c2']) && !empty($_POST['c3']) && !empty($_POST['c4']) && !empty($_POST['c5']) && !empty($_POST['c6']) && !empty($_POST['c7']) && !empty($_POST['c8']) && !empty($_POST['c9']) && !empty($_POST['c10']) && !empty($_POST['c11']) || !empty($_POST['orl']) || !empty($_POST['chir']) || !empty($_POST['ortho']) || !empty($_POST['audiopro'])){
 
}else{
	$error = 'ok';
    /*Capture des Exceptions 
    try{
    
    //requete de l'insertion
   $sql = "insert into reg_pat(reg_id_dospat, nom_pat, adr_pat, aod_pat, agimp_pat, dn_pat, prenom_pat, ville_pat, cp_pat, sit_pat, sco_pat, sexe_pat, lf_pat, niv_sco_pat, etat_pat, medc_pat) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
   
   $c1=$c2=$c3=$c4=$c5=$c6=$c7=$c8=$c9=$c10=$c11=$situation=$type=$langue=$niv_sco=$orl=$chir=$ortho=$audiopro=''; 
   if(!empty($_POST['c1'])) $c1 = $_POST['c1'];
   if(!empty($_POST['c2'])) $c2 = $_POST['c2'];
   if(!empty($_POST['c3'])) $c3 = $_POST['c3'];
   if(!empty($_POST['c4'])) $c4 = $_POST['c4'];
   if(!empty($_POST['c5'])) $c5 = $_POST['c5'];
   if(!empty($_POST['c6'])) $c6 = $_POST['c6'];
   if(!empty($_POST['c7'])) $c7 = $_POST['c7'];
   if(!empty($_POST['c8'])) $c8 = $_POST['c8'];
   if(!empty($_POST['c9'])) $c9 = $_POST['c9'];
   if(!empty($_POST['c10'])) $c10 = $_POST['c10'];
   if(!empty($_POST['c11'])) $c11 = $_POST['c11'];
   
   if(!empty($_POST['situation'])) $situation = $_POST['situation'];
   if(!empty($_POST['type'])) $type = $_POST['type'];
   if(!empty($_POST['langue'])) $langue = $_POST['langue'];
   if(!empty($_POST['niv_sco'])) $niv_sco = $_POST['niv_sco'];
   if(!empty($_POST['orl'])) $orl = $_POST['orl'];
   if(!empty($_POST['chir'])) $chir = $_POST['chir'];
   if(!empty($_POST['ortho'])) $ortho = $_POST['ortho'];
   if(!empty($_POST['audiopro'])) $audiopro = $_POST['audiopro'];
   
   
   $stmt= $db -> prepare($sql);
   
	$stmt -> execute([$_POST['number'],$_POST['name'],$_POST['Adresse'],$_POST['complt_addrs'],$_POST['age1'],$_POST['mois1'],$_POST['age2'],$_POST['mois2'],$_POST['dp'], $_POST['prenom'],$_POST['ville'], $_POST['code'],$_POST['situation'], $_POST['type'], $_POST['gender'],$_POST['langue'],$_POST['niv_sco'], $_POST['c1'], $_POST['c2'], $_POST['c3'], $_POST['c4'], $_POST['c5'], $_POST['c6'], $_POST['c7'], $_POST['c8'], $_POST['c9'], $_POST['c10'], $_POST['c11'], $_POST['orl'], $_POST['chir'], $_POST['ortho'], $_POST['audiopro']]);
   
  }catch(PDOException $e){
      echo $e->getMessage();
  }*/
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

<title>::  :: Fiche Surdité</title>
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
                            <li><a href="mail-inbox.html">Fiche de sudité</a></li>
                            <li><a href="chat.html">Fiche de chirurgie</a></li>
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
                        <h2><strong>Fiche surdité :</strong> <small><a href="#" target="">Patient</a></small> </h2>
                    </div>
					
                    <div class="body">
					
                        <div class="row clearfix">
						 
						<div class="col-md-6">
						   <div class="col-md-12">
						   
						   <div class="col-md-12">
							 <div class="input-group">
							 
							            <div class="col-md-6">
                                        <b>Nom :</b>
										</div>
										<div class="col-md-6">
                                        <p>Text</p>
										</div>
                                      
                                    </div>
                                
                            </div>
						   
						   <div class="col-md-12">
							 <div class="input-group">
							 
							            <div class="col-md-6">
                                        <b>Date de naissance :</b>
										</div>
										<div class="col-md-6">
                                        <p>Text</p>
										</div>
                                      
                                    </div>
                                
                            </div>
							<div class="col-md-12">
							 <div class="input-group">
							 
							            <div class="col-md-6">
                                        <b>Date du premier implant :</b>
										</div>
										<div class="col-md-6">
                                        <p>Text</p>
										</div>
                                      
                                    </div>
                                
                            </div>
							<div class="col-md-12">
							 <div class="input-group">
							 
							            <div class="col-md-6">
                                        <b>Numero du dossier :</b>
										</div>
										<div class="col-md-6">
                                        <p>Text</p>
										</div>
                                      
                                    </div>
                                
                            </div>
						     
                            </div>
                            
						</div>
						
					<div class="col-md-6">
						
                            
						<div class="col-md-12">
							
							<div class="form-group form-float">
							
								<div class="col-md-12">
									<div class="input-group">
							 
							            <div class="col-md-6">
                                        <b>Prenom :</b>
										</div>
										<div class="col-md-6">
                                        <p>Text</p>
										</div>
                                      
                                    </div>
                                
								</div>
						   
								<div class="col-md-12">
									<div class="input-group">
							 
							            <div class="col-md-6">
                                        <b>Age à l'implant :</b>
										</div>
										<div class="col-md-6">
                                        <p>Text</p>
										</div>
                                      
                                    </div>
                                
								</div>
								<div class="col-md-12">
									<div class="input-group">
							 
							            <div class="col-md-6">
                                        <b>Recul :</b>
										</div>
										<div class="col-md-6">
                                        <p>Text</p>
										</div>
                                      
                                    </div>
                                
								</div>
							
										
							</div							
                               
                        </div>

							
							
							
							
							
							
						
						
						
					</div>
						<div class="col-md-12">
						<!--select-->
							<div class="col-md-12">                        
                                
							
							<p> <b></b> </p>
                               
							
							</div>
							<!--select-->
							</div>
					<div class="col-md-4">
						<!--checkbox-->
							<div class="col-md-12" style="margin-top:20px">
							<div class=" "  >
							<div class="col-md-12">
							<div class=""  >
							<div class="col-md-12">
							<div class=""  >
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div class="">
							
							</div>
							</div>
							<div class="col-md-12">
							<div class="">
							
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
							<!--end checkbox-->
					</div>
					<div class="col-md-4">
						<!--checkbox-->
							<div class="col-md-12" style="margin-top:20px">
							<div>
							<div class="col-md-12">
							<div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
							<!--end checkbox-->
					</div>
					<div class="col-md-4">
						<!--checkbox-->
						<div class="col-md-12" style="margin-top:20px">
							<div>
							<div class="col-md-12">
							<div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							
							</div>
							</div>
							</div>
							</div>
							<!--end checkbox-->
						</div>
					</div>
						
                    </div>
					
                </div>
            </div>
            <!-- #END# Spinners --> 
            </div>
           
		     <!-- Spinners -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
				
                    <div class="header">
                        <h2><strong>Surdité :</strong> <small><a href="#" target=""></a></small> </h2>
                    </div>
					
                    <div class="body">
					
                        <div class="row clearfix">
						 
						<div class="col-md-6">
						   <div class="col-md-12">
						   
						   <div class="col-md-12">
							<div class="form-group form-float">
							 
							            
										<div class="col-md-12">
                                         <input id="dp" placeholder="Date d'édition de la fiche surdité" name="dp" style="" class="form-control" readonly>
										</div>
                                      
                                    </div>
                                
                            </div>
						   
						   <div class="col-md-12">
							
							 
							            <div class="col-md-12">
										<div class="form-group form-float">
											<input type="number" class="form-control" name="age_decov_sur" id="age_decov_sur" 	 placeholder="Age 1er decouverte de la surdité[*]/(mois) " style="font-size:15px">
											</div>
										</div>
                                        
                                   
                                
                            </div>
							<div class="col-md-12">
							 <div class="col-md-12">
										<div class="form-group form-float">
											<input type="number" class="form-control" name="age_prob_decov_sur" id="age_prob_decov_sur" 	 placeholder="Age probable de debut de la surdité[*]/(mois) " style="font-size:15px">
											</div>
										</div>
                                
                            </div>
							<div class="col-md-12">
							<div class="col-md-12">
										<div class="form-group form-float">
											<input type="number" class="form-control" name="age_serv_deg_sur" id="age_serv_deg_sur" 	 placeholder="Age survenue degre actuel surdité[*]/(ans) " style="font-size:15px">
											</div>
										</div>
                                
                            </div>
							<div class="col-md-12">
							<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="Anticidant" name="Anticidant" class="form-control">
                                    <option selected="selected">Anticidant personnel</option>
                                    <option value="o">Oui</option>
									<option value="n">Non</option>
                                    <option value="d">Douteux</option>
								</select>
								</div>
								</div>
								</div>
								<div class="col-md-12">
							<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="grossesse" name="grossesse" class="form-control">
                                    <option selected="selected">Grossesse et accouchement</option>
                                    <option value="nx">Nx</option>
									<option value="dfc">Diffic</option>
                                    <option value="pat">Pathol</option>
								</select>
								</div>
								</div>
								</div>
								<div class="col-md-12">
							<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="etiologie" name="etiologie" class="form-control">
                                    <option selected="selected">Etiologie</option>
                                    <option value="cn">Connu</option>
									<option value="inc">Inconnu</option>
                                    <option value="inc">Incertains</option>
								</select>
								</div>
								</div>
								<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="Congenitale" name="Congenitale" class="form-control">
                                    <option selected="selected">Congenitale ou acquise</option>
                                    <option value="cngt">Congenitale</option>
									<option value="acq">acquise</option>
                                </select>
								</div>
								</div>
								<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<textarea name="obs_hist" id="obs_hist" cols="30" rows="2" placeholder="Observation sur l'histoire de la surdité et les signes associés" style="font-size:15px" class="form-control no-resize" required></textarea>
								</div>
								</div>
								<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="Vertiges" name="Vertiges" class="form-control">
                                    <option selected="selected">Vertiges</option>
                                    <option value="o">Oui</option>
									<option value="n">Non</option>
                                </select>
								</div>
								</div>
								<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="trouble" name="trouble" class="form-control">
                                    <option selected="selected">Troubles visuels</option>
                                    <option value="o">Oui</option>
									<option value="n">Non</option>
                                </select>
								</div>
								</div>
								<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="trouble_p" name="trouble_p" class="form-control">
                                    <option selected="selected">Troubles psychomoteurs</option>
                                    <option value="o">Oui</option>
									<option value="n">Non</option>
                                </select>
								</div>
								</div>
								<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<textarea name="desc_om" id="desc_om" cols="30" rows="2" placeholder="Description om" style="font-size:15px" class="form-control no-resize" required></textarea>
								</div>
								</div>
								<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="tymp_d" name="tymp_d" class="form-control">
                                    <option selected="selected">tymp.D</option>
									<option value="nrm">Normal</option>
                                    <option value="att">ATT</option>
									<option value="pa">Pathologique</option>
                                </select>
								</div>
								</div>
								
								
								
								</div>
                            </div>
                            
						</div>
						
					<div class="col-md-6">
						
                            
						<div class="col-md-12">
						
							<div class="col-md-12">
							<div class="form-group form-float">
							            <div class="col-md-12">
                                        <input type="checkbox" name="evol" id="evol" value="evol">
                                <label for="evol" style="color:grey; margin-bottom:10px" >
                                        Evolutive
                                </label>
										</div>
                                      
                                  
                                
								</div>
								</div>
						   
								<div class="col-md-12">
									
							 
							            <div class="col-md-12">
                                        <select id="antc_fam" name="antc_fam" class="form-control">
                                    <option selected="selected">Andicidant familiaux</option>
									<option value="o">Oui</option>
                                    <option value="n">Non</option>
									<option value="d">Discutable</option>
                                </select>
										</div>
                                      
                                    
                                
								</div>
								<div class="col-md-12">
									
							 
							            <div class="col-md-12">
                                        <select id="cons" name="cons" class="form-control">
                                    <option selected="selected">consanguinité</option>
									<option value="o">Oui</option>
                                    <option value="n">Non</option>
										</select>
										
                                      
                                    </div>
                                
								</div>
								<div class="col-md-12">
									
							 
							            <div class="col-md-12">
                                        <select id="dg_et" name="dg_et" class="form-control">
                                    <option selected="selected">DG etiologique</option>
									<option value="o">Oui</option>
                                    <option value="n">Non</option>
										</select>
										
                                      
                                    </div>
                                
								</div>
								<div class="col-md-12">
									
							 
							            <div class="col-md-12">
                                        <select id="acph" name="acph" class="form-control">
                                    <option selected="selected">Acouphénes</option>
									<option value="o">Oui</option>
                                    <option value="n">Non</option>
										</select>
									
                                      
                                    </div>
                                
								</div>
								<div class="col-md-12">
									
							 
							            <div class="col-md-12">
                                        <select id="a_c" name="a_c" class="form-control">
                                    <option selected="selected">Att cent</option>
									<option value="o">Oui</option>
                                    <option value="n">Non</option>
										</select>
										
                                      
                                    </div>
                                
								</div>
								<div class="col-md-12">
									
							 
							            <div class="col-md-12">
                                        <select id="a_c" name="a_c" class="form-control">
                                    <option selected="selected">Troubles de la relation</option>
									<option value="o">Oui</option>
                                    <option value="n">Non</option>
										</select>
									
                                      
                                    </div>
                                
								</div>
								<div class="col-md-12">
									
							 
							            <div class="col-md-12">
                                        <select id="a_c" name="a_c" class="form-control">
                                    <option selected="selected">Tymp G</option>
									<option value="nrml">Normal</option>
                                    <option value="att">Att</option>
									<option value="path">Pathologique</option>
										</select>
										
                                    </div>
                                
								</div>
								
							
										
							</div>							
                               
                        </div>

							
							
							
							
							
							
						
						
						
					</div>
					
							
					<div class="col-md-4">
						<!--checkbox-->
							<div class="col-md-12" style="margin-top:20px">
							<div class=" "  >
							<div class="col-md-12">
							<div class=""  >
							<div class="col-md-12">
							<div class=""  >
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div class="">
							
							</div>
							</div>
							<div class="col-md-12">
							<div class="">
							
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
							<!--end checkbox-->
					</div>
					<div class="col-md-4">
						<!--checkbox-->
							<div class="col-md-12" style="margin-top:20px">
							<div>
							<div class="col-md-12">
							<div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
							<!--end checkbox-->
					</div>
					<div class="col-md-4">
						<!--checkbox-->
						<div class="col-md-12" style="margin-top:20px">
							<div>
							<div class="col-md-12">
							<div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							<div class="col-md-12">
							<div>
							
							</div>
							</div>
							
							</div>
							</div>
							</div>
							</div>
							<!--end checkbox-->
						</div>
					</div>
						<!-- examen -->
 <div class="col-md-12">
  <div class="col-md-12">
 <div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick" style="margin:20px 0">
								<b>Stimulation chleaire</b>
								</div>
								</div>
								 <div class="col-md-12">
							<div class="form-group form-float">
							 
							            
										
                                         <input id="d_e_v" placeholder="Date examen vistibulaire" name="d_e_v" style="" class="form-control" readonly>
										
                                      
                                    </div>
                                
                            </div>
							<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="o_d" name="o_d" class="form-control">
                                    <option selected="selected">Oreille droite</option>
									<option value="nrm">Normal</option>
                                    <option value="anrm">anormal</option>
									
                                </select>
								</div>
								</div>
								<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="o_g" name="o_g" class="form-control">
                                    <option selected="selected">Oreille guauche</option>
									<option value="nrm">Normal</option>
                                    <option value="anrm">anormal</option>
									
                                </select>
								</div>
								</div>
								
								
								
								</div>
								 <div class="col-md-12">
 <div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick" style="margin:20px 0">
								<b>Stimulation chleaire</b>
								</div>
								</div>
								 <div class="col-md-12">
							<div class="form-group form-float">
							 
							            
										
                                         <input id="d_s_c" placeholder="Date stimulation cochleaire" name="d_s_c" style="" class="form-control" readonly>
										
                                      
                                    </div>
                                
                            </div>
							<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="o_d" name="o_d" class="form-control">
                                    <option selected="selected">Onde v :Oreille droite</option>
									<option value="oui">Oui</option>
                                    <option value="non">Non</option>
									
                                </select>
								</div>
								</div>
								<div class="col-md-12">
						     <div class="btn-group bootstrap-select form-control show-tick">
								<select id="o_g" name="o_g" class="form-control">
                                    <option selected="selected">Onde v :Oreille guauche</option>
									<option value="oui">Oui</option>
                                    <option value="non">Non</option>
									
                                </select>
								</div>
								</div>
								
								
								
								</div>
								</div>
								
<!-- examen --> 
<!-- examen --> 
                    </div>
					
						
						   
						  
					
                </div>
				
				<div>
				
            </div>
            <!-- #END# Spinners --> 
           
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
<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
		<button class="btn btn-raised btn-primary btn-round waves-effect" type="button" onclick="check_inputs()">Valider</button>
		<button class="btn btn-raised btn-primary btn-round waves-effect" type="botton" onclick="">Réinitialiser</button>

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
if(document.getElementById("number").value=="" || document.getElementById("name").value=="" || document.getElementById("Adresse").value=="" || document.getElementById("complt_addrs").value==""|| document.getElementById("age1").value=="" || document.getElementById("mois1").value=="" || document.getElementById("age2").value=="" || document.getElementById("mois2").value=="" || document.getElementById("dp").value=="" || document.getElementById("prenom").value=="" || document.getElementById("ville").value=="" || document.getElementById("code").value==""|| document.getElementById("situation").value=="Situation familiale" || document.getElementById("type").value=="Type de scolarité" || document.getElementById("Masculin").checked==false &&  document.getElementById("Feminin").checked==false || document.getElementById("langue").value=="Langue familiale" || document.getElementById("niv_sco").value=="Niveau scolaire initial" || document.getElementById("c1").checked==false && document.getElementById("c2").checked==false && document.getElementById("c3").checked==false && document.getElementById("c4").checked==false && document.getElementById("c5").checked==false && document.getElementById("c6").checked==false && document.getElementById("c7").checked==false && document.getElementById("c8").checked==false && document.getElementById("c9").checked==false && document.getElementById("c10").checked==false && document.getElementById("c11").checked==false || document.getElementById("orl").value=="Medecin ORL"  || document.getElementById("chir").value=="Chirurgien" || document.getElementById("ortho").value=="Orthophoniste" || document.getElementById("audiopro").value=="Audioprotésiste"){	

document.getElementById("buttonmodal").click();

//alert(document.getElementById("c1").value);


	

}
else{
	
	document.forms["myform"].submit();

}
}

//
 $( function() {
    $( "#dp" ).datepicker();
  } );
  $( function() {
    $( "#dev" ).datepicker();
  } );
  $( function() {
    $( "#dsc" ).datepicker();
  } );
  $( function() {
	  $( "#d_e_v" ).datepicker();
  } );
  $( function() {
	  $( "#d_s_c" ).datepicker();
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