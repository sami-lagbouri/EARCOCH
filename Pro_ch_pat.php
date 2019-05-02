<?php
//Fichier du chaine de connexion
include ('config.php');

//Verification de la soumission de la form
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
//Test sur les champs si il ne sont pas renseignés 
if(!empty($_POST['number']) || !empty($_POST['name'])|| !empty($_POST['Adresse'])||!empty($_POST['complt_addrs'])||!empty($_POST['age1'])||!empty($_POST['mois1'])|| !empty($_POST['age2'])||!empty($_POST['mois2'])|| !empty($_POST['dp'])|| !empty($_POST['prenom'])||!empty($_POST['ville'])||!empty($_POST['code'])||!empty($_POST['situation'])|| !empty($_POST['type'])||!empty($_POST['gender'])||!empty($_POST['langue'])||!empty($_POST['niv_sco'])|| !isset($_POST['c1']) && !empty($_POST['c2']) && !empty($_POST['c3']) && !empty($_POST['c4']) && !empty($_POST['c5']) && !empty($_POST['c6']) && !empty($_POST['c7']) && !empty($_POST['c8']) && !empty($_POST['c9']) && !empty($_POST['c10']) && !empty($_POST['c11']) || !empty($_POST['orl']) || !empty($_POST['chir']) || !empty($_POST['ortho']) || !empty($_POST['audiopro'])){
	//Capture des Exceptions 
    try{
    $stmt = '';
    //requete de l'insertion
   $sql = "insert into reg_pat(reg_id_dospat, nom_pat, adr_pat, aod_pat, agimp_pat, dn_pat, prenom_pat, ville_pat, cp_pat, sit_pat, sco_pat, sexe_pat, lf_pat, niv_sco_pat, etat_pat, medc_pat) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
   
   $c1=$situation=$type=$langue=$niv_sco=$med=$chir=$ortho=$audiopro=''; 
   if(!empty($_POST['c1'])) $c1 = $_POST['c1'];
   if(!empty($_POST['c2'])) $c1   = $c1 . ',' . $_POST['c2'];
   if(!empty($_POST['c3'])) $c1   = $c1 . ',' . $_POST['c3'];
   if(!empty($_POST['c4'])) $c1   = $c1 . ',' . $_POST['c4'];
   if(!empty($_POST['c5'])) $c1   = $c1 . ',' . $_POST['c5'];
   if(!empty($_POST['c6'])) $c1   = $c1 . ',' . $_POST['c6'];
   if(!empty($_POST['c7'])) $c1   = $c1 . ',' . $_POST['c7'];
   if(!empty($_POST['c8'])) $c1   = $c1 . ',' . $_POST['c8'];
   if(!empty($_POST['c9'])) $c1   = $c1 . ',' . $_POST['c9'];
   if(!empty($_POST['c10'])) $c1   = $c1 . ',' . $_POST['c10'];
   if(!empty($_POST['c11'])) $c1   = $c1 . ',' . $_POST['c11'];
   
   if(!empty($_POST['situation'])) $situation = $_POST['situation'];
   if(!empty($_POST['type'])) $type = $_POST['type'];
   if(!empty($_POST['langue'])) $langue = $_POST['langue'];
   if(!empty($_POST['niv_sco'])) $niv_sco = $_POST['niv_sco'];
   if(!empty($_POST['orl'])) $med = $_POST['orl'];
   if(!empty($_POST['chir'])) $med = $med . ',' . $_POST['chir'];
   if(!empty($_POST['ortho'])) $med = $med . ',' .$_POST['ortho'];
   if(!empty($_POST['audiopro'])) $med = $med . ',' . $_POST['audiopro'];
   
  
   
   $stmt= $db -> prepare($sql);
  
	$stmt -> execute([$_POST['number'],$_POST['name'],$_POST['Adresse'] . ',' . $_POST['complt_addrs'],$_POST['age1'] * 12 + $_POST['mois1'] , $_POST['age2'] * 12 + $_POST['mois2'],$_POST['dp'], $_POST['prenom'],$_POST['ville'], $_POST['code'],$situation, $type, $_POST['gender'], $langue, $niv_sco, $c1,$med ]);
   
  }catch(PDOException $e){
      echo $e->getMessage();
  }
 
}else{
	
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
						   
                            <div class="col-md-12">
                                <div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Nom" name="nom" required style="font-size:15px" id="nom">
								</div>
                            </div>
							<div class="col-md-12">
                                <div class="form-group form-float">
                                    <textarea name="Adresse" id="Adresse" cols="30" rows="1" placeholder="Adresse" style="font-size:15px" class="form-control no-resize" required></textarea>
                                </div>
                            </div>
							<div class="col-md-12">                      
								<div class="form-group form-float">
									<textarea name="Compl_adresse" id="Compl_adresse" cols="30" rows="1" placeholder="Complement d'adresse" style="font-size:15px" class="form-control no-resize" required></textarea>
								</div>
                            </div>
							<div class="col-md-12">
                                <div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Ville" id="ville" name="ville" required style="font-size:15px">
								</div>
                            </div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="code" id="code" data-rule="quantity" placeholder="Code postal" style="font-size:15px">
                                   
                                </div>
                            </div>
							
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="situation" name="situation" class="form-control">
                                    <option selected="selected">Niveau socio-culturel des parents</option>
                                    <option value="eu">Niveau</option>
									<option value="fe">Niveau</option>
                                    <option value="fs">Niveau</option>
									<option value="fs">Niveau</option>
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="situation" name="situation" class="form-control">
                                    <option selected="selected">Type de scolarité</option>
                                    <option value="eu">Moyenne section</option>
									<option value="fe">Grande section</option>
                                    <option value="fs">Primaire</option>
									<option value="fs">College</option>
									<option value="fs">Lycée</option>
									<option value="fs">Université</option>
									<option value="fs">En classe d'integration</option>
									<option value="fs">Non scolarisé</option>
								</select>
								</div>
							</div>
							<div class="col-md-12" style="color:#888">
                                    <p style="display:inline;">Suivi orthophonique :</p>                               
                                    <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="suiv_ort" id="oui" class="with-gap" value="option1">
                                    <label for="oui">Oui</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="suiv_ort" id="Non" class="with-gap" value="option2">
                                    <label for="Non">Non</label>
                                </div>
                                
                            </div>
							
							<div class="col-md-12">
							<div class="btn-group bootstrap-select form-control show-tick" >
								<select class="form-control show-tick" tabindex="" style="" id="langue" name="langue">
                                   <option selected="selected" style="">Mode de communication</option>
									<option value="Ar">Oral</option>
									<option value="Fr">Langage de signes</option>
                                    <option value="Au">Autre</option>
								</select></div>
							</div>
							<div class="col-md-12" style="">
							<div class="btn-group bootstrap-select form-control show-tick" >
								<select class="form-control show-tick" tabindex="" style="" id="langue" name="langue">
                                   <option selected="selected" style="">Etat</option>
									<option value="Ar">Bien suivi</option>
									<option value="Fr">A déménagé</option>
                                    <option value="Au">Est perdu de vu</option>
									<option value="Fr">Abondant</option>
                                    <option value="Au">Décédé</option>
								</select></div>
							</div>
							
							
							
							
							
							
							
						</div>
						
						<div class="col-md-6">
						 <div class="col-md-12">
							
							<div class="form-group form-float">
							
									<input type="text" class="form-control" placeholder="prenom" id="prenom" name="prenom" required style="font-size:15px">
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
                                                                   
                                    <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="gender" id="masculin" class="with-gap" value="option1">
                                    <label for="masculin">Masculin</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="gender" id="feminin" class="with-gap" value="option2">
                                    <label for="feminin">Feminin</label>
                                </div>
                                
                            </div>
							
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="tel1" id="tel1" data-rule="quantity" placeholder="Telephone 1" style="font-size:15px">
                                   
                                </div>
                            </div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="tel2" id="tel2" data-rule="quantity" placeholder="Telephone 2" style="font-size:15px">
                                   
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Email" id="email" name="email" required style="font-size:15px">
								</div>
                            </div>
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="situation" name="situation" class="form-control">
                                    <option selected="selected">Situation familiale</option>
                                    <option value="eu">Enfant unique</option>
									<option value="fe">Fratrie entendante</option>
                                    <option value="fs">Fratrie sourde</option>
									<option value="fs">Fratrie implementée</option>
									<option value="fs">Fratrie appareillée</option>
									<option value="ps">Parents sourds</option>
									<option value="ps">Parents separés</option>
								</select>
								</div>
							</div>
							<div class="col-md-12">
                                <div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Profession des parents" id="prf_part" name="prf_part" required style="font-size:15px">
								</div>
                            </div>
							
							
							
							
							
						
                                
								
                                
                           <div class="col-md-12" style="">
							<div class="btn-group bootstrap-select form-control show-tick" >
								<select class="form-control show-tick" tabindex="" style="" id="langue" name="langue">
                                   <option selected="selected" style="">Patient adulte</option>
									<option value="Ar">Marié</option>
									<option value="Fr">Célibataire</option>
                                    <option value="Au">Séparé</option>
								</select></div>
							</div> 
							
							<div class="col-md-12" style="">
							<div class="btn-group bootstrap-select form-control show-tick" >
								<select class="form-control show-tick" tabindex="" style="" id="langue" name="langue">
                                   <option selected="selected" style="">Patient adressé par</option>
									<option value="Ar">Dr</option>
									<option value="Fr">Dr</option>
                                    <option value="Au">Dr</option>
								</select></div>
							</div>
							<div class="col-md-12" style="">
							<div class="btn-group bootstrap-select form-control show-tick" >
								<select class="form-control show-tick" tabindex="" style="" id="langue" name="langue">
                                   <option selected="selected" style="">Type de financement</option>
									<option value="Ar">Pm</option>
									<option value="Fr">M</option>
                                    <option value="Au">Aide</option>
								</select></div>
							</div>
							
						
						
						</div>
						
						<div class="col-md-6">
						<!--checkbox-->
							<div class="col-md-12" style="margin-top:20px;margin-left:0">
							<div class=" "  >
							
							<div class=""  >
							
							<div class=""  >
							<div class="">
                                <p style="color:#888">Langues utilisées :</p>
								
								<input type="checkbox" name="tm" id="tm" value="tm" >
								<label for="tm" style="color:#888;margin-bottom:10px">
                                        Tamazight
                                </label>
								
								
								
                                
								
								
                            </div>
							</div>
							
							
							<div>
							<div class="">
                                <input type="checkbox" name="ar" id="ar" value="ar">
                                <label for="ar" style="color:#888;margin-bottom:10px">
                                        Arabe
                                </label>
                            </div>
							
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="fr" id="fr" value="fr">
                                <label for="fr" style="color:#888;margin-bottom:10px">
                                        Francais
                                </label>
                            
							</div>
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="c4" id="c4" value="ch4">
                                <label for="c4" style="color:grey; margin-bottom:10px">
                                        Autre
                                </label>
                            </div>
							
							</div>
							</div>
							</div>
							
							</div>
							<!--end checkbox-->
						</div>
						<div class="col-md-6">
						<!--checkbox-->
							<div class="col-md-12" style="margin-top:20px;margin-left:0">
							<div class=" "  >
							
							<div class=""  >
							
							<div class=""  >
							<div class="">
                                <p style="color:#888">Langues maternelles :</p>
								
								<input type="checkbox" name="tm" id="tm" value="tm" >
								<label for="tm" style="color:#888;margin-bottom:10px">
                                        Tamazight
                                </label>
								
								
								
                                
								
								
                            </div>
							</div>
							
							
							<div>
							<div class="">
                                <input type="checkbox" name="ar" id="ar" value="ar">
                                <label for="ar" style="color:#888;margin-bottom:10px">
                                        Arabe
                                </label>
                            </div>
							
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="fr" id="fr" value="fr">
                                <label for="fr" style="color:#888;margin-bottom:10px">
                                        Francais
                                </label>
                            
							</div>
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="c4" id="c4" value="ch4">
                                <label for="c4" style="color:grey; margin-bottom:10px">
                                        Autre
                                </label>
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
	
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> <strong>Les Intervenants</strong> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="orl" name="orl" >
                                    <option selected="selected">Medecin ORL</option>
                                    <option value="o1">TAHIRI Ilias</option>
									<option value="o2">ANAJAR Said</option>
								</select></div>
								<div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="chir" name="chir" >
                                    <option selected="selected">Chirurgien</option>
                                    <option value="op1">SNOUSSI</option>
									<option value="op2">kettani</option>
								</select></div>
                                
                            </div>
                            <div class="col-md-6">
                                
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="ortho" name="ortho">
                                    <option selected="selected">Orthophoniste</option>
                                    <option value="or1">MARIA</option>
									<option value="or2">KENZA</option>
								</select></div>
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="audiopro" name="audiopro">
                                    <option selected="selected">Audioprotésiste</option>
                                    <option value="aud1">ILHAM</option>
									<option value="aud2">MAJDA</option>

								</select></div>
                            </div>
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