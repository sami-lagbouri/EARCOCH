<?php
//Fichier du chaine de connexion
include ('config.php');

//Verification de la soumission de la form
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
//Test sur les champs si il ne sont pas renseignés 
if(!empty($_POST['nom']) || !empty($_POST['prenom'])|| !empty($_POST['d_n'])||!empty($_POST['tel1'])||!empty($_POST['tel2'])||!empty($_POST['ville'])|| !empty($_POST['code_p'])||!empty($_POST['cmp_adr']) || !isset($_POST['gender'])){
	//Capture des Exceptions 
    try{
	
	//echo $_POST['nom'] .','.$_POST['prenom'].','.$_POST['d_n'].','.$_POST['tel1'].','.$_POST['tel2'].','.$_POST['ville'].','.$_POST['code_p'].','.$_POST['cmp_adr'].','.
	//$_POST['gender'].','.$_POST['email'].','.$_POST['situation'].','.$_POST['prf_part'].','.$_POST['pt_adlt'].','.$_POST['pt_adr_pr'].','.$_POST['tp_fnc'].','.$_POST['nv_soc_cltr_prt'].','.$_POST['tp_scl'].','.$_POST['suiv_ort'].','.$_POST['mod_ct'].','.$_POST['etat'].','.$_POST['tm'].','.$_POST['ar'].','.$_POST['fr'].','.$_POST['luatr'].','.$_POST['tm_mtr'].','.$_POST['ar_mtr'].','.$_POST['fr_mtr'].','.$_POST['lum_atr'].','.
	//Motifs de consultation 
	//$_POST['rt_lg'].','.$_POST['trbl_lg'].','.$_POST['reg_lg'].','.$_POST['dt_prt'].','.$_POST['dep_neo'].','.$_POST['depdco_carsan'].','.$_POST['sur_evo'].','.$_POST['autre_mot_cslt'].','.
	//text autre Motifs de consultation 
	//$_POST['atr_mot_cslt'].','.
	//Antecedants medicaux
	//1
	//$_POST['ant_per'].','.$_POST['cnsg'].','.$_POST['pn_kg'].','.$_POST['ag_ac_mrch'].','.$_POST['etlg'].','.$_POST['ant_fam'].','.$_POST['gross_accou'].','.$_POST['apgar'].','.
	//Causes prénatales
	
	//$_POST['inf_cng'].','.$_POST['sub_trtg'].','.
	//Causes périnatales
	//$_POST['cs_pr_nt'].','.
	//Causes postnatales
	//$_POST['lho'].','.$_POST['mngt'].','.$_POST['virs'].','.$_POST['sai'].','.$_POST['surbr'].','.$_POST['nrch'].','.$_POST['tacs'].','.$_POST['otxt'].','.$_POST['comc'].','.$_POST['otospg'].','.$_POST['tmrc'].','.$_POST['fpl'].','.$_POST['mmn'].','.$_POST['cmtbl'].','.$_POST['cpatr'].','.
	//Plus
	//$_POST['trbl_asso'].','.$_POST['trbl_synd'].','.$_POST['obs_plus'].','.
	//Professionnels en charge du patient
	//$_POST['orft'].','.$_POST['orcpt'].','.$_POST['rglp'].','.$_POST['chrgpt'].','.$_POST['auptst'].','.$_POST['col_orth'].','.$_POST['obspt'];
	
    
    //insert into la table <reg_pat>
   $sql = "insert into reg_pat(nom_pat, prenom_pat,dn_pat,sexe_pat,adr_pat,ville_pat,tel_pat,cp_pat,email_pat,niv_socio_pat,sco_pat,sit_pat, suivi_ortho_pat,parents_pat,m_comm_pat,adulte_pat,etat_pat,ad_par_pat,fin_pat,lu_pat,lm_pat,motif_pat,orthoref_pat,ortho_pat,rgl_pat,chir_pat,audio_pat,collab_pat,obsrv_pat) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
   
  $tel = $_POST['tel1'].','.$_POST['tel2'];
  $motif = $so = $lu = $lm = '';
  if (isset($_POST['tm'])){ $lu =   $_POST['tm'].','. $lu ;}
  if (isset($_POST['ar'])){ $lu =   $_POST['ar'].','. $lu;}
  if (isset($_POST['fr'])){ $lu =   $_POST['fr'].','. $lu;}
  if (isset($_POST['luatr'])){ $lu =   $_POST['luatr'].','. $lu;}
  
  if (isset($_POST['tm_mtr'])){ $lm = $_POST['tm_mtr'].','.$lm  ;}
  if (isset($_POST['ar_mtr'])){ $lm =  $_POST['ar_mtr'].','.$lm ;}
  if (isset($_POST['fr_mtr'])){ $lm = $_POST['fr_mtr'].','.$lm  ;}
  if (isset($_POST['lum_atr'])){ $lm = $_POST['lum_atr'].','.$lm ;}
  
  if (isset($_POST['rt_lg'])){ $motif = $_POST['rt_lg'] .'.'. $motif;}
  if (isset($_POST['trbl_lg'])){ $motif = $_POST['trbl_lg'] .'.'. $motif;}
  if (isset($_POST['reg_lg'])){ $motif = $_POST['reg_lg'] .'.'. $motif;}
  if (isset($_POST['dt_prt'])){ $motif = $_POST['dt_prt'] .'.'. $motif;}
  if (isset($_POST['dep_neo'])){ $motif = $_POST['dep_neo'] .'.'. $motif;}
  if (isset($_POST['depdco_carsan'])){ $motif = $_POST['depdco_carsan'] .'.'. $motif;}
  if (isset($_POST['sur_evo'])){ $motif = $_POST['sur_evo'] .'.'. $motif;}
  if (isset($_POST['autre_mot_cslt'])){ $motif = $_POST['autre_mot_cslt'] .'.'. $motif;}
  if (isset($_POST['atr_mot_cslt'])){ $motif = $_POST['atr_mot_cslt'] .'.'. $motif;}

   if (isset($_POST['suiv_ort'])){ $so = $_POST['suiv_ort'];}
 
   $stmt= $db -> prepare($sql);
  
	$stmt -> execute(array($_POST['nom'] ,$_POST['prenom'],$_POST['d_n'],$_POST['gender'],$_POST['cmp_adr'],$_POST['ville'],$tel,$_POST['code_p'],$_POST['email'],$_POST['nv_soc_cltr_prt'],$_POST['tp_scl'],$_POST['situation'],$so,$_POST['prf_part'],$_POST['mod_ct'],$_POST['pt_adlt'],$_POST['etat'],$_POST['pt_adr_pr'],$_POST['tp_fnc'],$lu,$lm,$motif,$_POST['orft'],$_POST['orcpt'],$_POST['rglp'],$_POST['chrgpt'],$_POST['auptst'],$_POST['col_orth'],$_POST['obspt']));
	
	//insert into la table <reg_surd>
	$cs_post_n=$a_f=$a_p=$etlgy='';
	if (isset($_POST['lho'])){ $cs_post_n = $_POST['lho'] .'.'. $cs_post_n;}
	if (isset($_POST['mngt'])){ $cs_post_n = $_POST['mngt'] .'.'. $cs_post_n;}
	if (isset($_POST['virs'])){ $cs_post_n = $_POST['virs'] .'.'. $cs_post_n;}
	if (isset($_POST['sai'])){ $cs_post_n = $_POST['sai'] .'.'. $cs_post_n;}
	if (isset($_POST['surbr'])){ $cs_post_n = $_POST['surbr'] .'.'. $cs_post_n;}
	if (isset($_POST['nrch'])){ $cs_post_n = $_POST['nrch'] .'.'. $cs_post_n;}
	if (isset($_POST['tacs'])){ $cs_post_n = $_POST['tacs'] .'.'. $cs_post_n;}
	if (isset($_POST['otxt'])){ $cs_post_n = $_POST['otxt'] .'.'. $cs_post_n;}
	if (isset($_POST['comc'])){ $cs_post_n = $_POST['comc'] .'.'. $cs_post_n;}
	if (isset($_POST['otospg'])){ $cs_post_n = $_POST['otospg'] .'.'. $cs_post_n;}
	if (isset($_POST['tmrc'])){ $cs_post_n = $_POST['tmrc'] .'.'. $cs_post_n;}
	if (isset($_POST['fpl'])){ $cs_post_n = $_POST['fpl'] .'.'. $cs_post_n;}
	if (isset($_POST['mmn'])){ $cs_post_n = $_POST['mmn'] .'.'. $cs_post_n;}
	if (isset($_POST['cmtbl'])){ $cs_post_n = $_POST['cmtbl'] .'.'. $cs_post_n;}
	if (isset($_POST['cpatr'])){ $cs_post_n = $_POST['cpatr'] .'.'. $cs_post_n;}
	
	
	if (isset($_POST['etlg'])){ $etlgy = $_POST['etlg'];}
	if (isset($_POST['ant_per'])){ $a_p = $_POST['ant_per'];}
	if (isset($_POST['ant_fam'])){ $a_f = $_POST['ant_fam'];}
	
	
	
	$sql_1="insert into reg_surd(agacq_surd, poids_surd, grss_accch_surd, etlg_surd,ant_pers_surdt, antcfam_surd,cnsng_surd,apgar_surd,infcong_pre_surd, sub_pre_surd, sff_per_surd, cpost_surd, trbl_surd, trbl_syn_surd, obsrv_surd) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$stmt_1= $db -> prepare($sql_1);
	$stmt_1 -> execute(array($_POST['ag_ac_mrch'],$_POST['pn_kg'],$_POST['gross_accou'],$etlgy,$a_p,$a_f,$_POST['cnsg'],$_POST['apgar'],$_POST['inf_cng'],$_POST['sub_trtg'],$_POST['cs_pr_nt'],$cs_post_n,$_POST['trbl_asso'],$_POST['trbl_synd'],$_POST['obs_plus']));
	$stmt = null; 
    $db = null; 
  }catch(PDOException $e){
      echo $e->getMessage();
  }
 
}else{
	echo 'Merci de remplir les champs obligatoires';
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
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
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
                                <h4>Contre d'Audition</h4>
                                <small>HCK</small>                        
                            
                    </li>	
                    <li class=""> <a href="javascript:void(0);" class="" style="font-weight:bold"><i class="fas fa-home"></i><span>Acceuil</span> </a>
                     
                    </li>
                    <li class=""> <a href="javascript:void(0);" class="menu-toggle" style="font-weight:bold"><i class="fas fa-user-injured"></i><span>Patient</span> </a>
                        <ul class="ml-menu">
							<li><a href="Patient_wizard_v1.php">Fiche de patient</a></li>
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
                <h2>Formulaire du patient<small>Merci de saisir les informations suivantes </small>
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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> <strong>Fiche du patient</strong> </h2>
                    </div>
                    <div class="body">
                       
                          
  
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary" style="pointer-events: none;
  cursor: default;">1</a>
        <p>Les informations du patient</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default " disabled="disabled" style="pointer-events: none;
  cursor: default;">2</a>
        <p>Motifs de consultation</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default " disabled="disabled" style="pointer-events: none;
  cursor: default;">3</a>
        <p>Antecedants medicaux</p>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default " disabled="disabled" style="pointer-events: none;
  cursor: default;">4</a>
        <p>Professionnels en charge du patient</p>
      </div>
    </div>
  </div>
  
 
    <div class="row setup-content" id="step-1">
      <div class="col-md-12 col-md-offset-3">
        <!-- Spinners -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
				
                    
					
                        <div class="row clearfix">
						  <!-- begin -->
						<div class="col-md-6">
						   
                            <div class="col-md-12">
                                <div class="form-group form-float">
									<input type="text top" class="form-control" placeholder="Nom" name="nom" required style="font-size:15px" id="nom">
								</div>
                            </div>
							
							<div class="col-md-12">                      
								<div class="form-group form-float">
									<textarea name="cmp_adr" id="cmp_adr" cols="30" rows="1" placeholder="Complement d'adresse" style="font-size:15px" class="form-control no-resize" required></textarea>
								</div>
                            </div>
							<div class="col-md-12">
                                <div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Ville" id="ville" name="ville" required style="font-size:15px">
								</div>
                            </div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="code_p" id="code_p" data-rule="quantity" placeholder="Code postal" style="font-size:15px">
                                   
                                </div>
                            </div>
							
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="nv_soc_cltr_prt" name="nv_soc_cltr_prt" class="form-control">
                                    <option selected="selected">Niveau socio-culturel des parents</option>
                                    <option value="1">Niveau 1</option>
									<option value="2">Niveau 2</option>
                                    <option value="3">Niveau 3</option>
									<option value="4">Niveau 4</option>
								</select>
								</div>
							</div>
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="tp_scl" name="tp_scl" class="form-control">
                                    <option selected="selected">Type de scolarité</option>
                                    <option value="eu">Type 1</option>
									<option value="fe">Type 2</option>
                                </select>
								</div>
							</div>
							<div class="col-md-12" style="color:#888">
                                    <p style="display:inline;">Suivi orthophonique :</p>                               
                                    <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="suiv_ort" id="oui" class="with-gap" value="oui">
                                    <label for="oui">Oui</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="suiv_ort" id="non" class="with-gap" value="non">
                                    <label for="non">Non</label>
                                </div>
                                
                            </div>
							
							<div class="col-md-12">
							<div class="btn-group bootstrap-select form-control show-tick" >
								<select class="form-control show-tick" tabindex="" style="" id="mod_ct" name="mod_ct" onchange="desp_text_atr_md_com()">
                                   <option selected="selected" style="" >Mode de communication</option>
									<option value="oral">Oral</option>
									<option value="lgsgn">Langage de signes</option>
                                    <option value="autre">Autre</option>
								</select></div>
							</div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                   <input type="text" class="form-control" placeholder="Ajouter un nouveau mode" id="md_com" name="md_com" required style="font-size:15px;visibility:hidden;display:none">
                                   
                                </div>
                            </div> 	
							<div class="col-md-12" style="">
							<div class="btn-group bootstrap-select form-control show-tick" >
								<select class="form-control show-tick" tabindex="" style="" id="etat" name="etat">
                                   <option selected="selected" style="">Etat</option>
									<option value="bs">Bien suivi</option>
									<option value="ad">A déménagé</option>
                                    <option value="epv">Est perdu de vu</option>
									<option value="abd">Abondant</option>
                                    <option value="dcd">Décédé</option>
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
                                        
                                        <input id="d_n" placeholder="Date de naissance" name="d_n" style="background-color: transparent;
										border: 1px solid #E3E3E3;
										border-radius: 30px;
										color: #2c2c2c;
										
										height: auto;
										line-height: normal;    box-shadow: none;    display: block;
										width: 100%;    padding: 10px 18px 10px 18px;    background-clip: padding-box;    background-clip: padding-box;transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out" class="" readonly >
                                    </div>
                                
                            </div>
                            <div class="col-md-12" style="color:#888">
                                                                   
                                    <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="gender" id="masc" class="with-gap" value="masc">
                                    <label for="masc">Masculin</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="gender" id="femi" class="with-gap" value="femi">
                                    <label for="femi">Feminin</label>
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
								<select class="form-control show-tick" tabindex="" style="" id="pt_adlt" name="pt_adlt">
                                   <option selected="selected" style="">Patient adulte</option>
									<option value="Ar">Marié</option>
									<option value="Fr">Célibataire</option>
                                    <option value="Au">Séparé</option>
								</select></div>
							</div> 
							
							<div class="col-md-12" style="">
							<div class="btn-group bootstrap-select form-control show-tick" >
								<select class="form-control show-tick" tabindex="" style="" id="pt_adr_pr" name="pt_adr_pr">
                                   <option selected="selected" style="">Patient adressé par</option>
									<option value="Ar">Dr</option>
									<option value="Fr">Dr</option>
                                    <option value="Au">Dr</option>
								</select></div>
							</div>
							<div class="col-md-12" style="">
							<div class="btn-group bootstrap-select form-control show-tick" >
								<select class="form-control show-tick" tabindex="" style="" id="tp_fnc" name="tp_fnc">
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
                                <input type="checkbox" name="luatr" id="luatr" value="luatr">
                                <label for="luatr" style="color:grey; margin-bottom:10px">
                                        Autre
                                </label>
                            </div>
							
							</div>
							<div class="" style="">                      
								<div class="form-group form-float" >                                    
                                   <input type="text" class="form-control" placeholder="Autre" id="lg_utl" name="lg_utl" required style="font-size:15px;visibility:hidden;display:none">
                                   
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
								
								<input type="checkbox" name="tm_mtr" id="tm_mtr" value="tm_mtr" >
								<label for="tm_mtr" style="color:#888;margin-bottom:10px">
                                        Tamazight
                                </label>
								
								
								
                                
								
								
                            </div>
							</div>
							
							
							<div>
							<div class="">
                                <input type="checkbox" name="ar_mtr" id="ar_mtr" value="ar_mtr">
                                <label for="ar_mtr" style="color:#888;margin-bottom:10px">
                                        Arabe
                                </label>
                            </div>
							
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="fr_mtr" id="fr_mtr" value="fr_mtr">
                                <label for="fr_mtr" style="color:#888;margin-bottom:10px">
                                        Francais
                                </label>
                            
							</div>
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="lum_atr" id="lum_atr" value="lum_atr">
                                <label for="lum_atr" style="color:grey; margin-bottom:10px">
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
            <!-- #END# Spinners --> 
          <button class=" nextBtn pull-right btn btn-raised btn-primary btn-round waves-effect" type="button" style="float: right;">Suivant</button>
        </div>
      </div>
    
     <div class="row setup-content" id="step-2">
      <div class="col-md-12 col-md-offset-3">
        <!-- Spinners -->
            <div class="col-lg-12 col-md-12 col-sm-12">
               
						  <!-- begin -->
						
						
							<div class="col-md-12">
							<div class="form-group form-float">
                                <p style="color:#888">Motifs de consultation :</p>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group form-float">
								<input type="checkbox" name="rt_lg" id="rt_lg" value="rt_lg" >
								<label for="rt_lg" style="color:#888;margin-bottom:10px">
                                        Retard de langage
                                </label>
								
                            </div>
							</div>
							
							
							
							<div class="col-md-12">
                                <input type="checkbox" name="trbl_lg" id="trbl_lg" value="trbl_lg">
                                <label for="trbl_lg" style="color:#888;margin-bottom:10px">
                                        Trouble du langage
                                </label>
                            </div>
							
							
							
							
							<div class="col-md-12">
                                <input type="checkbox" name="reg_lg" id="reg_lg" value="reg_lg">
                                <label for="reg_lg" style="color:#888;margin-bottom:10px">
                                        regression du langage
                                </label>
                            
							</div>
							
							
						
							<div class="col-md-12">
                                <input type="checkbox" name="dt_prt" id="dt_prt" value="dt_prt">
                                <label for="dt_prt" style="color:grey; margin-bottom:10px">
                                        doute des parents
                                </label>
                            </div>
							
							
							
							
							<div class="col-md-12">
                                <input type="checkbox" name="dep_neo" id="dep_neo" value="dep_neo">
                                <label for="dep_neo" style="color:grey; margin-bottom:10px">
                                        Suite à un dépistage néonatal
                                </label>
                            </div>
							
							
							
							
							<div class="col-md-12">
                                <input type="checkbox" name="depdco_carsan" id="depdco_carsan" value="depdco_carsan">
                                <label for="depdco_carsan" style="color:grey; margin-bottom:10px">
                                        Suite à un dépistage scolaire ou caravane de santé
                                </label>
                            </div>
							
							
							<div class="col-md-12">
                                <input type="checkbox" name="sur_evo" id="sur_evo" value="sur_evo">
                                <label for="sur_evo" style="color:grey; margin-bottom:10px">
                                        Surdité évolutive (patient appareillé)
                                </label>
                            </div>
							
							
							<div class="col-md-12">
                                <input type="checkbox" name="autre_mot_cslt" id="autre_mot_cslt" value="autre_mot_cslt" onchange="desp_text_atr()">
                                <label for="autre_mot_cslt" style="color:grey; margin-bottom:10px" >
                                        Autre
                                </label>
                            </div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                   <input type="text" class="form-control" placeholder="Autre" id="atr_mot_cslt" name="atr_mot_cslt" required style="font-size:15px;visibility:hidden;display:none">
                                   
                                </div>
                            </div>
							
							
          <button class="prevBtn pull-left btn btn-raised btn-primary btn-round waves-effect" type="button" style="float: Left;">Precedent</button>
          <button class=" nextBtn pull-right btn btn-raised btn-primary btn-round waves-effect" type="button" style="float: right;">Suivant</button>
        </div>
      
    </div>
    </div>
    </div>
	 <div class="row setup-content" id="step-3">
      <div class="col-md-12 col-md-offset-3">
         <div class="card">
				
                    
					
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
									 <p style="display:inline;">Antécédants Personnels :</p>                               
                               
								<div class="radio inlineblock">
                                    <input type="radio" name="ant_per" id="oui1" class="with-gap" value="oui1">
                                    <label for="oui1">Oui</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="ant_per" id="Non" class="with-gap" value="non">
                                    <label for="Non">Non</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="ant_per" id="Douteux" class="with-gap" value="douteux">
                                    <label for="Douteux">Douteux</label>
                                </div>
								</div>
                            </div>
							
							
							
							
							<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="cnsg" name="cnsg" class="form-control">
                                    <option selected="selected">Consanguinité </option>
                                    <option value="eu">1</option>
									<option value="fe">2</option>
                                    
								</select>
								</div>
							</div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="pn_kg" id="pn_kg" data-rule="quantity" placeholder="Poids de naissance en Kg" style="font-size:15px">
                                   
                                </div>
                            </div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="ag_ac_mrch" id="ag_ac_mrch" data-rule="quantity" placeholder="Age d’acquisition de la marche" style="font-size:15px">
                                   
                                </div>
                            </div>
							<div class="col-md-12" style="color:#888">
                                    <p style="display:inline;">Etiologie :</p>                               
                                    <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="etlg" id="incertaine" class="with-gap" value="incertaine">
                                    <label for="incertaine">Incertaine</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="etlg" id="inconnue" class="with-gap" value="inconnue">
                                    <label for="inconnue">Inconnue</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="etlg" id="connue" class="with-gap" value="connue">
                                    <label for="connue">Connue</label>
                                </div>
                            </div>
							
							
							
							
							
							
							
							
							
							
						</div>
						
						<div class="col-md-6">
						 <div class="col-md-12">
							
							<div class="form-group form-float">
							
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
								<select id="gross_accou" name="gross_accou" class="form-control">
                                    <option selected="selected">Suivi grossesse et accouchement </option>
                                    <option value="Nor">Normal</option>
									<option value="Inc">Inconnu</option>
                                    <option value="Ince">Incertain</option>
								</select>
								</div>
							</div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    <input type="number" class="form-control" name="apgar" id="apgar" data-rule="quantity" placeholder="Apgar à la naissance" style="font-size:15px">
                                   
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
								<select class="form-control show-tick" tabindex="" id="inf_cng" name="inf_cng" >
                                    <option selected="selected">Infections congénitales</option>
                                    <option value="ru">Rubéole</option>
									<option value="cmv">CMV</option>
									<option value="txp">Toxoplasmose</option>
									<option value="syp">Syphilis</option>
									<option value="atr">Autres</option>
								</select></div>
								
                                
                            </div>
                            <div class="col-md-6">
                                
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="sub_trtg" name="sub_trtg" >
                                    <option selected="selected">Substances tératogènes</option>
                                    <option value="t">Thalidomide</option>
									<option value="s">Syndrome alcoolo-fœtal</option>
									<option value="c">Cocaïne</option>
									<option value="r">Radiothérapie lors du premier trimestre</option>
									<option value="am">Aminosides durant la grossesse</option>
									<option value="atr">Autres</option>
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
                            <div class="col-md-12">
                                
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select class="form-control show-tick" tabindex="" id="cs_pr_nt" name="cs_pr_nt" >
                                    <option >Selectionner une cause</option>
									<option selected="selected">Souffrance fœtale aigue</option>
                                    <option value="h">Hypotrophie</option>
									<option value="p">Prématurité</option>
									<option value="anx">Anoxie</option>
									<option value="hpb">Hyperbilirubinémie</option>
									<option value="om">Ototoxicité médicamenteuse</option>
                                    <option value="ts">Traumatismes sonores</option>
									<option value="tc">Traumatismes crâniens</option>
									<option value="cnvs">Convulsions</option>
									<option value="atr">Autres</option>
								</select></div>
								
                                
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
                               
								
								<input type="checkbox" name="lho" id="lho" value="lho" >
								<label for="lho" style="color:#888;margin-bottom:10px">
                                        Labyrinthite hématogène, otogène
                                </label>
								
								
								
                                
								
								
                            </div>
							</div>
							
							
							<div>
							<div class="">
                                <input type="checkbox" name="mngt" id="mngt" value="mngt">
                                <label for="mngt" style="color:#888;margin-bottom:10px">
                                        Méningite
                                </label>
                            </div>
							
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="virs" id="virs" value="virs">
                                <label for="virs" style="color:#888;margin-bottom:10px">
                                       Viroses (oreillons, rougeole, rubéole, varicelle-zona, grippe)
                                </label>
                            
							</div>
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="sai" id="sai" value="sai">
                                <label for="sai" style="color:grey; margin-bottom:10px">
                                       Surdité auto-immune
                                </label>
                            </div>
							
							</div>
							<div class="">
							<div class="">
                                <input type="checkbox" name="surbr" id="surbr" value="surbr">
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
                                
								
								<input type="checkbox" name="nrch" id="nrch" value="nrch" >
								<label for="nrch" style="color:#888;margin-bottom:10px">
                                         Néoplasies du rocher
                                </label>
								
								
								
                                
								
								
                            </div>
							</div>
							
							
							<div>
							<div class="">
                                <input type="checkbox" name="tacs" id="tacs" value="tacs">
                                <label for="tacs" style="color:#888;margin-bottom:10px">
                                         Traumatismes acoustiques
                                </label>
                            </div>
							
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="otxt" id="otxt" value="otxt">
                                <label for="otxt" style="color:#888;margin-bottom:10px">
                                        Ototoxicités
                                </label>
                            
							</div>
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="comc" id="comc" value="comc">
                                <label for="comc" style="color:grey; margin-bottom:10px">
                                        Complications des otites moyennes chroniques
                                </label>
                            </div>
							
							</div>
							<div class="">
							<div class="">
                                <input type="checkbox" name="otospg" id="otospg" value="otospg">
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
                                
								
								<input type="checkbox" name="tmrc" id="tmrc" value="tmrc" >
								<label for="tmrc" style="color:#888;margin-bottom:10px">
                                         Traumatismes du rocher
                                </label>
								
								
								
                                
								
								
                            </div>
							</div>
							
							
							<div>
							<div class="">
                                <input type="checkbox" name="fpl" id="fpl" value="fpl">
                                <label for="fpl" style="color:#888;margin-bottom:10px">
                                        Fistules péri-lymphatiques
                                </label>
                            </div>
							
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="mmn" id="mmn" value="mmn">
                                <label for="mmn" style="color:#888;margin-bottom:10px">
                                        Maladie de Ménière
                                </label>
                            
							</div>
							</div>
							
							<div class="">
							<div class="">
                                <input type="checkbox" name="cmtbl" id="cmtbl" value="cmtbl">
                                <label for="cmtbl" style="color:grey; margin-bottom:10px">
                                        Causes métaboliques
                                </label>
                            </div>
							
							</div>
							<div class="">
							<div class="">
                                <input type="checkbox" name="cpatr" id="cpatr" value="cpatr">
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
			<div class="col-md-12">
                                <div class="form-group form-float">
                                    <textarea name="obs_plus" id="obs_plus" cols="30" rows="1" placeholder="Observation" style="font-size:15px" class="form-control no-resize" required></textarea>
                                </div>
                            </div>
        </div>
                            </div>
							
          <button class="prevBtn pull-left btn btn-raised btn-primary btn-round waves-effect" type="button" style="float: Left;">Precedent</button>
          <button class=" nextBtn pull-right btn btn-raised btn-primary btn-round waves-effect" type="button" style="float: right;">Suivant</button>
        
      </div>
    </div>
    <div class="row setup-content" id="step-4">
      <div class="col-md-12 col-md-offset-3">
        <!-- Spinners -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
				
                    
					
                        <div class="row clearfix">
						  <!-- begin -->
						<div class="col-md-6">
						<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="orft" name="orft" class="form-control">
                                    <option selected="selected">Orthophoniste référente </option>
                                    <option value="eu">Niveau</option>
									<option value="fe">Niveau</option>
                                    <option value="fs">Niveau</option>
									<option value="fs">Niveau</option>
								</select>
								</div>
								
							</div>
							<div class="col-md-12" style="" >
                                                                  
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="orcpt" name="orcpt" class="form-control">
                                    <option selected="selected">Orthophoniste en charge du patient </option>
                                    <option value="eu">Niveau</option>
									<option value="fe">Niveau</option>
                                    <option value="fs">Niveau</option>
									<option value="fs">Niveau</option>
								</select>
								</div>
								
							</div>
							<div class="col-md-12" style="" >
                                                                   
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="rglp" name="rglp" class="form-control">
                                    <option selected="selected">Régleur</option>
                                    <option value="eu">Niveau</option>
									<option value="fe">Niveau</option>
                                    <option value="fs">Niveau</option>
									<option value="fs">Niveau</option>
								</select>
								</div>
							
							</div>
							
						</div>
						<div class="col-md-6">
						<div class="col-md-12" style="" >
                                                                    
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="chrgpt" name="chrgpt" class="form-control">
                                    <option selected="selected">Chirurgien</option>
                                    <option value="eu">Niveau</option>
									<option value="fe">Niveau</option>
                                    <option value="fs">Niveau</option>
									<option value="fs">Niveau</option>
								</select>
								</div>
								
							</div>
							<div class="col-md-12" style="" >
                                                                  
                                <div class="btn-group bootstrap-select form-control show-tick">
								<select id="auptst" name="auptst" class="form-control">
                                    <option selected="selected">Audioprothésiste</option>
                                    <option value="eu">Niveau</option>
									<option value="fe">Niveau</option>
                                    <option value="fs">Niveau</option>
									<option value="fs">Niveau</option>
								</select>
								</div>
								
							</div>
						</div>
<div class="col-md-12" style="color:#888">
	<div class="col-md-12" style="" >
	<div class="form-group form-float">
                                    <p style="display:inline;">Collaboration orthophoniste audioprothésiste :</p>                               
                                    <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="col_orth" id="oui_c" class="with-gap" value="option1">
                                    <label for="oui_c">Oui</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="col_orth" id="Non_c" class="with-gap" value="option2">
                                    <label for="Non_c">Non</label>
                                </div>
                                
                            </div>
                            </div>
							<div class="col-md-12">
                                <div class="form-group form-float">
                                    <textarea name="obspt" id="obspt" cols="30" rows="1" placeholder="Observation" style="font-size:15px" class="form-control no-resize" required></textarea>
                                </div>
                            </div>
						</div>
						</div>
						</div>
						</div>
						
          <button class="prevBtn pull-left btn btn-raised btn-primary btn-round waves-effect" type="button" style="float: Left;">Precedent</button>
          <button class="pull-right btn btn-raised btn-primary btn-round waves-effect" type="button" style="float: right;" onclick="check_inputs()">Envoyer</button>
        </div>
      </div>
    
  
  </div>
</div>
                        </div>
                    </div>
                </div>
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
if(document.getElementById("nom").value=="" || document.getElementById("prenom").value=="" || document.getElementById("d_n").value=="" || document.getElementById("tel1").value==""|| document.getElementById("tel2").value=="" || document.getElementById("ville").value=="" || document.getElementById("code_p").value=="" || document.getElementById("cmp_adr").value=="" || document.getElementById("masc").checked==false &&  document.getElementById("femi").checked==false ){	

document.getElementById("buttonmodal").click();

//alert(document.getElementById("c1").value);


	

}
else{
	
	document.forms["myform"].submit();

}
}

//
 $( function() {
    $( "#d_n" ).datepicker();
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
 
 $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn'),
  		  allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });
  
  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepWizard.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("[class=top]"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
function transform_menu(){
	//document.getElementById("menu_ico").classList.add('fa-times');
	
if ( document.getElementById("menu_ico").classList.contains('fa-bars') ){
	document.getElementById("menu_ico").classList.remove("fa-bars");
document.getElementById("menu_ico").classList.add("fa-times");
}
else
{
	document.getElementById("menu_ico").classList.remove("fa-times");
	document.getElementById("menu_ico").classList.add("fa-bars");
}	


}
//Control Motif de consultation 
function desp_text_atr(){
 if(document.getElementById('atr_mot_cslt').style.visibility=='hidden'){document.getElementById('atr_mot_cslt').style.visibility='visible';document.getElementById('atr_mot_cslt').style.display='block';document.getElementById('atr_mot_cslt').style.visibility='visible';}else{document.getElementById('atr_mot_cslt').style.display='none';document.getElementById('atr_mot_cslt').style.visibility='hidden';document.getElementById('atr_mot_cslt').value='';}
	 }
//Control mode de communication
function desp_text_atr_md_com(){
if(document.getElementById('mod_ct').value=='autre'){
	 document.getElementById('md_com').style.visibility='visible';
	 document.getElementById('md_com').style.display='block';
}
else{
document.getElementById('md_com').style.display='none';
document.getElementById('md_com').style.visibility='hidden';
document.getElementById('md_com').value='';

}}
</script>
  
 
</body>
</html>