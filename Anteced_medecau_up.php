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
                    <li class=""> <a href="javascript:void(0);" class="menu-toggle" style="font-weight:bold"><i class="fas fa-user-injured"></i><span>ANTECEDANTS MEDICAUX</span> </a>
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
                        <h2><strong>ANTECEDANTS MEDICAUX</strong> 
                    </div>
					
                    <div class="body">
					
                        <div class="row clearfix">
						 
						<div class="col-md-6">
						   
                            <div class="col-md-12">
							<div class="col-md-12" style="color:#888">
                                    <p style="display:inline;">Antécédants Personnels :</p>                               
                                    <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="ant_per" id="oui" class="with-gap" value="option1">
                                    <label for="oui">Oui</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="ant_per" id="Non" class="with-gap" value="option2">
                                    <label for="Non">Non</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="ant_per" id="Douteux" class="with-gap" value="option3">
                                    <label for="Douteux">Douteux</label>
                                </div>
                            </div>
							
							
							
							</div>
							
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="Consanguinité" name="Consanguinité" class="form-control">
                                    <option selected="selected">Consanguinité </option>
                                    <option value="1">1</option>
									<option value="2">2</option>
                                    <option value="3">3</option>
								</select>
								</div>
							</div>
							
							
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="Poids" id="Poids" data-rule="quantity" placeholder="Poids de naissance en Kg" style="font-size:15px">
                                   
                                </div>
                            </div>
							
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="Age" id="Age" data-rule="quantity" placeholder="Age d’acquisition de la marche" style="font-size:15px">
                                   
                                </div>
                            </div>
							<div class="col-md-12" style="color:#888">
                                    <p style="display:inline;">Etiologie :</p>                               
                                    <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="Etiologie" id="Incertaine" class="with-gap" value="option1">
                                    <label for="Incertaine">Incertaine</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="Etiologie" id="Inconnue" class="with-gap" value="option2">
                                    <label for="Inconnue">Inconnue</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="Etiologie" id="Connue" class="with-gap" value="option3">
                                    <label for="Connue">Connue</label>
                                </div>
                            </div>
							
				
						</div>
						
						
						<div class="col-md-6">
						<div class="col-md-12">
							
							<div class="col-md-12" style="color:#888">
                                    <p style="display:inline;">Antécédants Familiaux   :</p>                               
                                    <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="ant_fam" id="o" class="with-gap" value="option1">
                                    <label for="o">Oui</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="ant_fam" id="n" class="with-gap" value="option2">
                                    <label for="n">Non</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="ant_fam" id="Discutable" class="with-gap" value="option3">
                                    <label for="Discutable">Discutable</label>
                                </div>
                            </div>
                        </div>
						
                            
							
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="Gross_accou" name="Gross_accou" class="form-control">
                                    <option selected="selected">Suivi grossesse et accouchement </option>
                                    <option value="Nor">Normal</option>
									<option value="Inc">Inconnu</option>
                                    <option value="Ince">Incertain</option>
								</select>
								</div>
							</div>
							
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="Apgar" id="Apgar" data-rule="quantity" placeholder="Apgar à la naissance" style="font-size:15px">
                                   
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
                <div class="card">
                    <div class="header">
                        <h2> <strong>Causes prénatales</strong> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="orl" name="orl" >
                                    <option selected="selected">Infections congénitales</option>
                                    <option value="o1">Rubéole</option>
									<option value="o2">CMV</option>
									<option value="o3">Toxoplasmose</option>
									<option value="o4">Syphilis</option>
									<option value="o5">Autres</option>
								</select></div>
								<div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="chir" name="chir" >
                                    <option selected="selected">Substances tératogènes</option>
                                    <option value="op1">Thalidomide</option>
									<option value="op2">Syndrome alcoolo-fœtal</option>
									<option value="op3">Cocaïne</option>
									<option value="op4">Radiothérapie lors du premier trimestre</option>
									<option value="op5">Aminosides durant la grossesse</option>
									<option value="op6">Autres</option>
								</select></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> <strong>Causes périnatales</strong> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="orl" name="orl" >
                                    <option selected="selected">Souffrance fœtale aigue</option>
                                    <option value="o1">Hypotrophie</option>
									<option value="o2">Prématurité</option>
									<option value="o3">Anoxie</option>
									<option value="o4">Hyperbilirubinémie</option>
									<option value="o5">Ototoxicité médicamenteuse</option>
                                    <option value="o6">Traumatismes sonores</option>
									<option value="o7">Traumatismes crâniens</option>
									<option value="o8">Convulsions</option>
									<option value="o9">Autres</option>
								</select></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
		
		<div class="row clearfix">
           
                <div class="card">
                    <div class="header">
                        <h2> <strong>Causes postnatales :</strong> </h2>
                    </div>
                    <div class="body">
                  
                                
                            <div class="col-md-4">
						<!--checkbox-->
							<div class="col-md-12" style="margin-top:20px">
							
							
							
                                <input type="checkbox" name="c1" id="c1" value="ch1">
                                <label for="c1" style="color:grey; margin-bottom:10px" >
                                        Labyrinthite hématogène, otogène
                                </label>
                            </div>
							
							<div class="col-md-12">
							
                                <input type="checkbox" name="c2" id="c2" value="ch2">
                                <label for="c2" style="color:grey ; margin-bottom:10px">
                                        Méningite
                                </label>
                            </div>
							
							<div class="col-md-12">
							
                                <input type="checkbox" name="c3" id="c3" value="ch3">
                                <label for="c3" style="color:grey; margin-bottom:10px">
                                        Viroses (oreillons, rougeole, rubéole, varicelle-zona, grippe)
                                </label>
                            </div>
							
							<div class="col-md-12">
							
                                <input type="checkbox" name="c4" id="c4" value="ch4">
                                <label for="c4" style="color:grey; margin-bottom:10px">
                                        Surdité auto-immune
                                </label>
                            </div>
							
							<div class="col-md-12">
							
                                <input type="checkbox" name="c12" id="c12" value="ch12">
                                <label for="c12" style="color:grey; margin-bottom:10px">
                                        Surdité brusques
                                </label>
                            </div>
							</div>
							
						<div class="col-md-4">
						<!--checkbox-->
							
							<div class="col-md-12">
							
                                <input type="checkbox" name="c5" id="c5" value="ch5">
                                <label for="c5" style="color:grey; margin-bottom:10px">
                                        Néoplasies du rocher
                                </label>
                            </div>
							
							<div class="col-md-12">
							
                                <input type="checkbox" name="c6" id="c6" value="ch6">
                                <label for="c6" style="color:grey; margin-bottom:10px">
                                        Traumatismes acoustiques
                                </label>
                            </div>
							
							<div class="col-md-12">
							
                                <input type="checkbox" name="c7" id="c7" value="ch7">
                                <label for="c7" style="color:grey; margin-bottom:10px">
                                        Ototoxicités
                                </label>
                            </div>
							
							<div class="col-md-12">
							
                                <input type="checkbox" name="c8" id="c8" value="ch8">
                                <label for="c8" style="color:grey; margin-bottom:10px">
                                        Complications des otites moyennes chroniques
                                </label>
                            </div>
							
							<div class="col-md-12">
							
                                <input type="checkbox" name="c13" id="c13" value="ch13">
                                <label for="c13" style="color:grey; margin-bottom:10px">
                                        Otospongiose
                                </label>
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
							<div class="">
                                <input type="checkbox" name="c9" id="c9" value="ch9">
                                <label for="c9" style="color:grey; margin-bottom:10px">
                                        Traumatismes du rocher
                                </label>
                            </div>
							</div>
							</div>
							<div class="col-md-12">
							<div>
							<div class="">
                                <input type="checkbox" name="c10" id="c10" value="ch10">
                                <label for="c10" style="color:grey; margin-bottom:10px">
                                        Fistules péri-lymphatiques
                                </label>
                            </div>
							</div>
							</div>
							<div class="col-md-12">
							<div>
							<div class="">
                                <input type="checkbox" name="c11" id="c11" value="ch11">
                                <label for="c11" style="color:grey; margin-bottom:10px">
                                        Maladie de Ménière
                                </label>
								 
                            </div>
							</div>
							</div>
							<div class="col-md-12">
							<div>
							<div class="">
                                <input type="checkbox" name="c15" id="c15" value="ch15">
                                <label for="c15" style="color:grey; margin-bottom:10px">
                                        Causes métaboliques
                                </label>
								 
                            </div>
							</div>
							</div>
							<div class="col-md-12">
							<div>
							<div class="">
                                <input type="checkbox" name="c14" id="c14" value="ch14">
                                <label for="c14" style="color:grey; margin-bottom:10px">
                                        Autres
                                </label>
								 
                            </div>
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
							<!--end checkbox-->
							
													
                        </div>
                    </div>
					<div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="col-md-6">
                                
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="trbl_asso" name="trbl_asso" >
                                    <option selected="selected">Troubles associés</option>
                                    <option value="o1">TSA</option>
									<option value="o2">Trisomie</option>
									<option value="o3">TDHA</option>
									<option value="o4">Retard mental</option>
									<option value="o5">Retard psychomoteur</option>
                                    <option value="o6">IMC</option>
									<option value="o7">Dysmorphie faciale</option>
									<option value="o8">Aucun</option>
									<option value="o9">Autres</option>
								</select></div>
                                
                            </div>
            </div>
							<div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="col-md-6">
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="trbl_synd" name="trbl_synd" >
                                    <option selected="selected">Troubles Syndromiques</option>
                                    <option value="o1">Usher</option>
									<option value="o2">Syndrome de Waadenburg-Klein</option>
									<option value="o3">Syndrome de Pendred</option>
									<option value="o4">Syndrome de Jarwel-Lange-Nielsen</option>
									<option value="o5">Syndrome Charge</option>
                                    <option value="o6">Syndrome de Branchio-oto-rénal (BOR)</option>
									<option value="o7">Syndrome d’Alport</option>
									<option value="o8">NF2</option>
									<option value="o9">Aucun</option>
									<option value="o10">Autres</option>
								</select></div>
                                
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