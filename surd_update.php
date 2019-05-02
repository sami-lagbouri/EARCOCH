<?php
//Fichier du chaine de connexion
include ('config.php');
session_start();
//Verification de la soumission de la form
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $error =''; 
$ant_per=$cnsg=$etlg=$ant_fam=$gross_accou=$inf_cng=$sub_trtg=$cs_pr_nt=$lho=$mngt=$virs=$sai=$surbr=$nrch=$tacs=$otxt=$comc=$otospg=$tmrc=$fpl=$mmn=$cmtbl=$cpatr=$trbl_asso=$trbl_synd=$obs_plus=$orft=$orcpt=$rglp=$chrgpt=
$auptst=$col_orth=$obspt=0;
	$num_doss=$ag_ac_mrch=$pn_kg=$apgar=0;
if (!empty($_POST['num_doss'])) {
	$num_doss = $_POST['num_doss'];
	}else{
	$num_doss = 0;
	}
if (isset($_POST['ant_per'])) $ant_per = $_POST['ant_per'];
if (isset($_POST['cnsg'])) $cnsg = $_POST['cnsg'];
if (!empty($_POST['pn_kg'])) {
	$pn_kg = $_POST['pn_kg'];
	}else{
	$pn_kg = 0;
	}
if (!empty($_POST['ag_ac_mrch'])) {
	$ag_ac_mrch = $_POST['ag_ac_mrch'];
	}else{
	$ag_ac_mrch = 0;
	}
if (isset($_POST['etlg'])) $etlg = $_POST['etlg'];
if (isset($_POST['ant_fam'])) $ant_fam = $_POST['ant_fam'];
if (isset($_POST['gross_accou'])) $gross_accou = $_POST['gross_accou'];
if (!empty($_POST['apgar'])) {
	$apgar = $_POST['apgar'];
	}else{
	$apgar = 0;
	}
if (isset($_POST['inf_cng'])) $inf_cng = $_POST['inf_cng'];
if (isset($_POST['sub_trtg'])) $sub_trtg = $_POST['sub_trtg'];
if (isset($_POST['cs_pr_nt'])) $cs_pr_nt = $_POST['cs_pr_nt'];

if (isset($_POST['lho'])) $lho = $_POST['lho'];
if (isset($_POST['mngt'])) $mngt = $_POST['mngt'];
if (isset($_POST['virs'])) $virs = $_POST['virs'];
if (isset($_POST['sai'])) $sai = $_POST['sai'];
if (isset($_POST['surbr'])) $surbr = $_POST['surbr'];
if (isset($_POST['nrch'])) $nrch = $_POST['nrch'];
if (isset($_POST['tacs'])) $tacs = $_POST['tacs'];
if (isset($_POST['otxt'])) $otxt = $_POST['otxt'];
if (isset($_POST['comc'])) $comc = $_POST['comc'];
if (isset($_POST['otospg'])) $otospg = $_POST['otospg'];
if (isset($_POST['tmrc'])) $tmrc = $_POST['tmrc'];
if (isset($_POST['fpl'])) $fpl = $_POST['fpl'];
if (isset($_POST['mmn'])) $mmn = $_POST['mmn'];
if (isset($_POST['cmtbl'])) $cmtbl = $_POST['cmtbl'];
if (isset($_POST['cpatr'])) $cpatr = $_POST['cpatr'];

if (isset($_POST['trbl_asso'])) $trbl_asso = $_POST['trbl_asso'];
if (isset($_POST['trbl_synd'])) $trbl_synd = $_POST['trbl_synd'];
if (isset($_POST['obs_plus'])) $obs_plus = $_POST['obs_plus'];

if (isset($_POST['orft'])) $orft = $_POST['orft'];
if (isset($_POST['orcpt'])) $orcpt = $_POST['orcpt'];
if (isset($_POST['rglp'])) $rglp = $_POST['rglp'];
if (isset($_POST['chrgpt'])) $chrgpt = $_POST['chrgpt'];
if (isset($_POST['auptst'])) $auptst = $_POST['auptst'];
if (isset($_POST['col_orth'])) $col_orth = $_POST['col_orth'];
if (isset($_POST['obspt'])) $obspt = $_POST['obspt'];

	//Capture des Exceptions 
    try{
    $stmt = '';
    //requete de l'insertion
   $sql = "update reg_surd set idpatient_surd=?, agacq_surd=?, poids_surd=?, grss_accch_surd=?, etlg_surd=?, ant_pers_surd=?, antcfam_surd=?, cnsng_surd=?,apgar_surd=?, infcong_pre_surd=?, sub_pre_surd=?, sff_per_surd=?, cpost_surd=?, trbl_surd=?, trbl_syn_surd=?, obsrv_surd=?, collab_surd=?,
observinter_surd=?, orthref_surd=?, chir_surd=?, ortho_surd=?, reg_surd=?, audio_surd=? where id_surd=?";
   
   
   $a_xx = $lho .';'. $mngt .';'. $virs .';'. $sai .';'. $surbr .';'. $nrch .';'. $tacs .';'. $otxt .';'. $comc .';'. $otospg .';'.  $tmrc .';'. $fpl .';'. $mmn .';'. $cmtbl .';'. $cpatr;
  
   
   $stmt= $db -> prepare($sql);
  
	$stmt -> execute(array($num_doss,$ag_ac_mrch,$pn_kg,$gross_accou,$etlg,$ant_per,$ant_fam,$cnsg,$apgar,$inf_cng,$sub_trtg,$cs_pr_nt,$a_xx,$trbl_asso,$trbl_synd,$obs_plus,$col_orth,$obspt,$orft,$chrgpt,$orcpt,$rglp,$auptst, $_SESSION['edit_surd']));
    if($stmt==1)header('Location: ant_fam_liste.php');
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
		 <li >
        <a href="javascript:void(0);" class="ls-toggle-btn" onclick="transform_menu()" style="color:black"><i id="menu_ico" class="fas fa-times" width="10"></i></a>
		</li>
        <li class="float-right">
            <a href="login.php" class="mega-menu" data-close="true" style="color:black;font-weight:100"><i  class="fas fa-power-off"></i></a>
				
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
                                <h4>EARCOCH</h4>
                                <small>HCK</small>                        
                            
                    </li>	
                    <li class=""> <a href="javascript:void(0);" class="" style="font-weight:bold"><i class="fas fa-home"></i><span>Acceuil</span> </a>
                     
                    </li>
                    <li class=""> <a href="javascript:void(0);" class="menu-toggle" style="font-weight:bold"><i class="fas fa-user-injured"></i><span>Patient</span> </a>
                        <ul class="ml-menu">
							<li><a href="Patient_liste.php">La liste patient</a></li>
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
	<?php 
	$stmt_surd = $db->query("SELECT * FROM public.reg_surd WHERE id_surd=" . $_SESSION['edit_surd']);
while($row_surd = $stmt_surd->fetch()) {
$idpatient_surd=$row_surd['idpatient_surd'];
$agacq_surd=$row_surd['agacq_surd'];
$poids_surd=$row_surd['poids_surd'];
$grss_accch_surd=$row_surd['grss_accch_surd'];
$etlg_surd=$row_surd['etlg_surd'];
$ant_pers_surd=$row_surd['ant_pers_surd'];
$antcfam_surd=$row_surd['antcfam_surd'];
$cnsng_surd=$row_surd['cnsng_surd'];
$apgar_surd=$row_surd['apgar_surd'];
$infcong_pre_surd=$row_surd['infcong_pre_surd'];
$sub_pre_surd=$row_surd['sub_pre_surd'];
$sff_per_surd=$row_surd['sff_per_surd'];
$cpost_surd=$row_surd['cpost_surd'];
$trbl_surd=$row_surd['trbl_surd'];
$trbl_syn_surd=$row_surd['trbl_syn_surd'];
$obsrv_surd=$row_surd['obsrv_surd'];
$collab_surd=$row_surd['collab_surd'];
$observinter_surd=$row_surd['observinter_surd'];
$orthref_surd=$row_surd['orthref_surd'];
$chir_surd=$row_surd['chir_surd'];
$ortho_surd=$row_surd['ortho_surd'];
$reg_surd=$row_surd['reg_surd'];
$audio_surd=$row_surd['audio_surd'];
} ?>
            <!-- Spinners -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
				
                    <div class="header">
                        <h2><strong>Antecedants medicaux</strong> <small><a href="#" target="">les informations du patient</a></small> </h2>
                    </div>
					
                    <div class="body">
					
                        <div class="row clearfix">
						 
						<div class="col-md-6">
						   <div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select name="num_doss" class="form-control">
								
                                    <option value="" >Selectionner un patient</option>
									<?php
									$stmt_o = $db->query("SELECT * FROM reg_pat"); 
										  while($row_o = $stmt_o->fetch()) {
										?> 
                                    <option <?php if($idpatient_surd==$row_o["id_pat"]) echo 'selected'?> value="<?php echo $row_o["id_pat"]?>"><?php echo $row_o["nom_pat"].' '.$row_o["prenom_pat"]?></option>
										  <?php }?>
								</select>
								</div>
							</div>
                            <div class="col-md-12">
                                <div class="form-group form-float">
									 <p style="display:inline;">Antécédants Personnels :</p>                               
                               
								<div class="radio inlineblock">
                                    <input <?php if($ant_pers_surd=='oui1') echo 'checked'?> type="radio" name="ant_per" id="oui1" class="with-gap" value="oui1">
                                    <label for="oui1">Oui</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input <?php if($ant_pers_surd=='non') echo 'checked'?> type="radio" name="ant_per" id="Non" class="with-gap" value="non">
                                    <label for="Non">Non</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input <?php if($ant_pers_surd=='douteux') echo 'checked'?> type="radio" name="ant_per" id="Douteux" class="with-gap" value="douteux">
                                    <label for="Douteux">Douteux</label>
                                </div>
								</div>
                            </div>
							
							
							
							
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="cnsg" name="cnsg" class="form-control">
                                    <option selected="">Consanguinité </option>
                                    <option <?php if($cnsng_surd=='1') echo 'selected'?> value="1">1</option>
									<option <?php if($cnsng_surd=='2') echo 'selected'?> value="2">2</option>
                                    
								</select>
								</div>
							</div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="pn_kg" id="pn_kg" data-rule="quantity" placeholder="Poids de naissance en Kg" style="font-size:15px" value="<?php echo $poids_surd ?>">
                                   
                                </div>
                            </div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="ag_ac_mrch" id="ag_ac_mrch" data-rule="quantity" placeholder="Age d’acquisition de la marche" style="font-size:15px" value="<?php echo $agacq_surd ?>">
                                   
                                </div>
                            </div>
							<div class="col-md-12" style="color:#888">
                                    <p style="display:inline;">Etiologie :</p>                               
                                    <div class="radio inlineblock m-r-20">
                                    <input <?php if($etlg_surd=='incertaine') echo 'checked'?> type="radio" name="etlg" id="incertaine" class="with-gap" value="incertaine">
                                    <label for="incertaine">Incertaine</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input <?php if($etlg_surd=='inconnue') echo 'checked'?> type="radio" name="etlg" id="inconnue" class="with-gap" value="inconnue">
                                    <label for="inconnue">Inconnue</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input <?php if($etlg_surd=='connue') echo 'checked'?> type="radio" name="etlg" id="connue" class="with-gap" value="connue">
                                    <label for="connue">Connue</label>
                                </div>
                            </div>
							
							
							
							
							
							
							
							
							
							
						</div>
						
						<div class="col-md-6">
						 <div class="col-md-12">
							
							<div class="form-group form-float">
							
									<p style="display:inline;">Antécédants Familiaux   :</p>                               
                                    <div class="radio inlineblock m-r-20">
                                    <input <?php if($antcfam_surd=='option1') echo 'checked'?> type="radio" name="ant_fam" id="o" class="with-gap" value="option1">
                                    <label for="o">Oui</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input <?php if($antcfam_surd=='option2') echo 'checked'?> type="radio" name="ant_fam" id="n" class="with-gap" value="option2">
                                    <label for="n">Non</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input <?php if($antcfam_surd=='option3') echo 'checked'?> type="radio" name="ant_fam" id="Discutable" class="with-gap" value="option3">
                                    <label for="Discutable">Discutable</label>
                                </div>
								</div>
							
							
							
                               
                            </div>
						
                            <div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="gross_accou" name="gross_accou" class="form-control">
                                    <option selected="selected">Suivi grossesse et accouchement </option>
                                    <option <?php if($grss_accch_surd=='1') echo 'selected'?> value="1">Normal</option>
									<option <?php if($grss_accch_surd=='2') echo 'selected'?> value="2">Inconnu</option>
                                    <option <?php if($grss_accch_surd=='3') echo 'selected'?> value="3">Incertain</option>
								</select>
								</div>
							</div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="apgar" id="apgar" data-rule="quantity" placeholder="Apgar à la naissance" style="font-size:15px" value="<?php echo $apgar_surd?>">
                                   
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
                                <div class="col-md-12">
                               <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="inf_cng" name="inf_cng" >
                                    <option selected="selected">Infections congénitales</option>
                                    <option <?php if($infcong_pre_surd=='1') echo 'selected'?> value="1">Rubéole</option>
									<option <?php if($infcong_pre_surd=='2') echo 'selected'?> value="2">CMV</option>
									<option <?php if($infcong_pre_surd=='3') echo 'selected'?> value="3">Toxoplasmose</option>
									<option <?php if($infcong_pre_surd=='4') echo 'selected'?> value="4">Syphilis</option>
									<option <?php if($infcong_pre_surd=='5') echo 'selected'?> value="5">Autres</option>
								</select></div>
								
                                
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="sub_trtg" name="sub_trtg" >
                                    <option selected="selected">Substances tératogènes</option>
                                    <option <?php if($sub_pre_surd=='1') echo 'selected'?> value="1">Thalidomide</option>
									<option <?php if($sub_pre_surd=='2') echo 'selected'?> value="2">Syndrome alcoolo-fœtal</option>
									<option <?php if($sub_pre_surd=='3') echo 'selected'?> value="3">Cocaïne</option>
									<option <?php if($sub_pre_surd=='4') echo 'selected'?> value="4">Radiothérapie lors du premier trimestre</option>
5									<option <?php if($sub_pre_surd=='5') echo 'selected'?> value="5">Autres</option>
								</select></div>
                            </div>
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
                            <div class="col-md-12">
                                <div class="col-md-12">
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="cs_pr_nt" name="cs_pr_nt" >
                                    <option selected="selected">Selectionner une cause</option>
									<option <?php if($sff_per_surd=='1') echo 'selected'?> value="1">Souffrance fœtale aigue</option>
                                    <option <?php if($sff_per_surd=='2') echo 'selected'?> value="2">Hypotrophie</option>
									<option <?php if($sff_per_surd=='3') echo 'selected'?> value="3">Prématurité</option>
									<option <?php if($sff_per_surd=='4') echo 'selected'?> value="4">Anoxie</option>
									<option <?php if($sff_per_surd=='5') echo 'selected'?> value="5">Hyperbilirubinémie</option>
									<option <?php if($sff_per_surd=='6') echo 'selected'?> value="6">Ototoxicité médicamenteuse</option>
                                    <option <?php if($sff_per_surd=='7') echo 'selected'?> value="7">Traumatismes sonores</option>
									<option <?php if($sff_per_surd=='8') echo 'selected'?> value="8">Traumatismes crâniens</option>
									<option <?php if($sff_per_surd=='9') echo 'selected'?> value="9">Convulsions</option>
									<option <?php if($sff_per_surd=='10') echo 'selected'?> value="10">Autres</option>
								</select></div>
								
                                
                            </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="row clearfix"> 
	
            <!-- Spinners -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
				
                    <div class="header">
                        <h2><strong>Causes postnatales :</strong> <small><a href="#" target=""></a></small> </h2>
                    </div>
					
                    <div class="body">
					
                        <div class="row clearfix">
						 
						
						
						
						
						<div class="col-md-4">
						<!--checkbox-->
							<div class="col-md-12" style="margin-top:20px;margin-left:0">
							<div class=" "  >
							
							<div class=""  >
							
							<div class=""  >
							<div class="">
                               
								
								<input <?php $check = explode(";",$cpost_surd); if($check[0]=='lho') echo 'checked';?> type="checkbox" name="lho" id="lho" value="lho" >
								<label for="lho" style="color:#888;margin-bottom:10px">
                                        Labyrinthite hématogène, otogène
                                </label>
								
								
								
                                
								
								
                            </div>
							</div>
							
							
							<div>
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[1]=='mngt') echo 'checked';?> type="checkbox" name="mngt" id="mngt" value="mngt">
                                <label for="mngt" style="color:#888;margin-bottom:10px">
                                        Méningite
                                </label>
                            </div>
							
							</div>
							
							<div class="">
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[2]=='virs') echo 'checked';?> type="checkbox" name="virs" id="virs" value="virs">
                                <label for="virs" style="color:#888;margin-bottom:10px">
                                       Viroses (oreillons, rougeole, rubéole, varicelle-zona, grippe)
                                </label>
                            
							</div>
							</div>
							
							<div class="">
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[3]=='sai') echo 'checked';?> type="checkbox" name="sai" id="sai" value="sai">
                                <label for="sai" style="color:grey; margin-bottom:10px">
                                       Surdité auto-immune
                                </label>
                            </div>
							
							</div>
							<div class="">
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[4]=='surbr') echo 'checked';?> type="checkbox" name="surbr" id="surbr" value="surbr">
                                <label for="surbr" style="color:grey; margin-bottom:10px">
                                       Surdité brusques
                                </label>
                            </div>
							
							</div>
							</div>
							</div>
							
							</div>
							<!--end checkbox-->
						</div>
						<div class="col-md-4">
						<!--checkbox-->
							<div class="col-md-12" style="margin-top:20px;margin-left:0">
							<div class=" "  >
							
							<div class=""  >
							
							<div class=""  >
							<div class="">
                                
								
								<input <?php $check = explode(";",$cpost_surd); if($check[5]=='nrch') echo 'checked';?> type="checkbox" name="nrch" id="nrch" value="nrch" >
								<label for="nrch" style="color:#888;margin-bottom:10px">
                                         Néoplasies du rocher
                                </label>
								
								
								
                                
								
								
                            </div>
							</div>
							
							
							<div>
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[6]=='tacs') echo 'checked';?> type="checkbox" name="tacs" id="tacs" value="tacs">
                                <label for="tacs" style="color:#888;margin-bottom:10px">
                                         Traumatismes acoustiques
                                </label>
                            </div>
							
							</div>
							
							<div class="">
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[7]=='otxt') echo 'checked';?> type="checkbox" name="otxt" id="otxt" value="otxt">
                                <label for="otxt" style="color:#888;margin-bottom:10px">
                                        Ototoxicités
                                </label>
                            
							</div>
							</div>
							
							<div class="">
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[8]=='comc') echo 'checked';?> type="checkbox" name="comc" id="comc" value="comc">
                                <label for="comc" style="color:grey; margin-bottom:10px">
                                        Complications des otites moyennes chroniques
                                </label>
                            </div>
							
							</div>
							<div class="">
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[9]=='otospg') echo 'checked';?> type="checkbox" name="otospg" id="otospg" value="otospg">
                                <label for="otospg" style="color:grey; margin-bottom:10px">
                                         Otospongiose
                                </label>
                            </div>
							
							</div>
							</div>
							</div>
							
							</div>
							<!--end checkbox-->
						</div>
						<div class="col-md-4">
						<!--checkbox-->
							<div class="col-md-12" style="margin-top:20px;margin-left:0">
							<div class=" "  >
							
							<div class=""  >
							
							<div class=""  >
							<div class="">
                                
								
								<input <?php $check = explode(";",$cpost_surd); if($check[10]=='tmrc') echo 'checked';?> type="checkbox" name="tmrc" id="tmrc" value="tmrc" >
								<label for="tmrc" style="color:#888;margin-bottom:10px">
                                         Traumatismes du rocher
                                </label>
								
								
								
                                
								
								
                            </div>
							</div>
							
							
							<div>
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[11]=='fpl') echo 'checked';?> type="checkbox" name="fpl" id="fpl" value="fpl">
                                <label for="fpl" style="color:#888;margin-bottom:10px">
                                        Fistules péri-lymphatiques
                                </label>
                            </div>
							
							</div>
							
							<div class="">
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[12]=='mmn') echo 'checked';?> type="checkbox" name="mmn" id="mmn" value="mmn">
                                <label for="mmn" style="color:#888;margin-bottom:10px">
                                        Maladie de Ménière
                                </label>
                            
							</div>
							</div>
							
							<div class="">
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[13]=='cmtbl') echo 'checked';?> type="checkbox" name="cmtbl" id="cmtbl" value="cmtbl">
                                <label for="cmtbl" style="color:grey; margin-bottom:10px">
                                        Causes métaboliques
                                </label>
                            </div>
							
							</div>
							<div class="">
							<div class="">
                                <input <?php $check = explode(";",$cpost_surd); if($check[14]=='cpatr') echo 'checked';?> type="checkbox" name="cpatr" id="cpatr" value="cpatr">
                                <label for="cpatr" style="color:grey; margin-bottom:10px">
                                        Autres
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
                        <h2> <strong>Plus</strong> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                 <div class="col-md-12">
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="trbl_asso" name="trbl_asso" >
                                    <option selected="selected">Troubles associés</option>
                                    <option <?php if($trbl_surd=='1') echo 'selected'?> value="1">TSA</option>
									<option <?php if($trbl_surd=='2') echo 'selected'?> value="2">Trisomie</option>
									<option <?php if($trbl_surd=='3') echo 'selected'?> value="3">TDHA</option>
									<option <?php if($trbl_surd=='4') echo 'selected'?> value="4">Retard mental</option>
									<option <?php if($trbl_surd=='5') echo 'selected'?> value="5">Retard psychomoteur</option>
                                    <option <?php if($trbl_surd=='6') echo 'selected'?> value="6">IMC</option>
									<option <?php if($trbl_surd=='7') echo 'selected'?> value="7">Dysmorphie faciale</option>
									<option <?php if($trbl_surd=='8') echo 'selected'?> value="8">Aucun</option>
									<option <?php if($trbl_surd=='9') echo 'selected'?> value="9">Autres</option>
								</select></div>
								
                                
                            </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="col-md-12">
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="trbl_synd" name="trbl_synd" >
                                    <option selected="selected">Troubles Syndromiques</option>
                                    <option <?php if($trbl_syn_surd=='1') echo 'selected'?> value="1">Usher</option>
									<option <?php if($trbl_syn_surd=='2') echo 'selected'?> value="2">Syndrome de Waadenburg-Klein</option>
									<option <?php if($trbl_syn_surd=='3') echo 'selected'?> value="3">Syndrome de Pendred</option>
									<option <?php if($trbl_syn_surd=='4') echo 'selected'?> value="4">Syndrome de Jarwel-Lange-Nielsen</option>
									<option <?php if($trbl_syn_surd=='5') echo 'selected'?> value="5">Syndrome Charge</option>
                                    <option <?php if($trbl_syn_surd=='6') echo 'selected'?> value="6">Syndrome de Branchio-oto-rénal (BOR)</option>
									<option <?php if($trbl_syn_surd=='7') echo 'selected'?> value="7">Syndrome d’Alport</option>
									<option <?php if($trbl_syn_surd=='8') echo 'selected'?> value="8">NF2</option>
									<option <?php if($trbl_syn_surd=='9') echo 'selected'?> value="9">Aucun</option>
									<option <?php if($trbl_syn_surd=='10') echo 'selected'?> value="10">Autres</option>
								</select></div>
                                
                            </div>
                            </div>
                        </div>
						<div class="col-md-12">
                                <div class="form-group form-float">
                                    <textarea name="obs_plus" id="obs_plus" cols="30" rows="1" placeholder="Observation" style="font-size:15px" class="form-control no-resize" required><?php echo $obsrv_surd?></textarea>
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
                        <h2> <strong>Professionnels en charge du patient</strong> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-6">
						<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="orft" name="orft" class="form-control">
                                    <option selected="selected">Orthophoniste référente </option>
                                    <option <?php if($orthref_surd=='1') echo 'selected'?> value="1">Niveau</option>
									<option <?php if($orthref_surd=='2') echo 'selected'?> value="2">Niveau</option>
                                    <option <?php if($orthref_surd=='3') echo 'selected'?> value="3">Niveau</option>
									<option <?php if($orthref_surd=='4') echo 'selected'?> value="4">Niveau</option>
								</select>
								</div>
								
							</div>
							<div class="col-md-12" style="" >
                                                                  
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="orcpt" name="orcpt" class="form-control">
                                    <option selected="selected">Orthophoniste en charge du patient </option>
                                    <option <?php if($ortho_surd=='1') echo 'selected'?> value="1">Niveau</option>
									<option <?php if($ortho_surd=='2') echo 'selected'?> value="2">Niveau</option>
                                    <option <?php if($ortho_surd=='3') echo 'selected'?> value="3">Niveau</option>
									<option <?php if($ortho_surd=='4') echo 'selected'?> value="4">Niveau</option>
								</select>
								</div>
								
							</div>
							<div class="col-md-12" style="" >
                                                                   
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="rglp" name="rglp" class="form-control">
                                    <option selected="selected">Régleur</option>
                                    <option <?php if($reg_surd=='1') echo 'selected'?> value="1">Niveau</option>
									<option <?php if($reg_surd=='2') echo 'selected'?> value="2">Niveau</option>
                                    <option <?php if($reg_surd=='3') echo 'selected'?> value="3">Niveau</option>
									<option <?php if($reg_surd=='4') echo 'selected'?> value="4">Niveau</option>
								</select>
								</div>
							
							</div>
							
						</div>
                           <div class="col-md-6">
						<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="chrgpt" name="chrgpt" class="form-control">
                                    <option selected="selected">Chirurgien</option>
                                    <option <?php if($chir_surd=='1') echo 'selected'?> value="1">Niveau</option>
									<option <?php if($chir_surd=='2') echo 'selected'?> value="2">Niveau</option>
                                    <option <?php if($chir_surd=='3') echo 'selected'?> value="3">Niveau</option>
									<option <?php if($chir_surd=='4') echo 'selected'?> value="4">Niveau</option>
								</select>
								</div>
								
							</div>
							<div class="col-md-12" style="" >
                                                                  
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="auptst" name="auptst" class="form-control">
                                    <option selected="selected">Audioprothésiste</option>
                                    <option <?php if($audio_surd=='1') echo 'selected'?> value="1">Niveau</option>
									<option <?php if($audio_surd=='2') echo 'selected'?> value="2">Niveau</option>
                                    <option <?php if($audio_surd=='3') echo 'selected'?> value="3">Niveau</option>
									<option <?php if($audio_surd=='4') echo 'selected'?> value="4">Niveau</option>
								</select>
								</div>
								
							</div>
						</div>
						<div class="col-md-12" style="color:#888">
	<div class="col-md-12" style="" >
	<div class="form-group form-float">
                                    <p style="display:inline;">Collaboration orthophoniste audioprothésiste :</p>                               
                                    <div class="radio inlineblock m-r-20">
                                    <input <?php if($collab_surd=='option1') echo 'checked'?> type="radio" name="col_orth" id="oui_c" class="with-gap" value="option1">
                                    <label for="oui_c">Oui</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input <?php if($collab_surd=='option2') echo 'checked'?> type="radio" name="col_orth" id="Non_c" class="with-gap" value="option2">
                                    <label for="Non_c">Non</label>
                                </div>
                                
                            </div>
                            </div>
							<div class="col-md-12">
                                <div class="form-group form-float">
                                    <textarea name="obspt" id="obspt" cols="30" rows="1" placeholder="Observation" style="font-size:15px" class="form-control no-resize" required><?php echo $observinter_surd;?></textarea>
                                </div>
                            </div>
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
<?php if(isset($error))  echo $error ;?>
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