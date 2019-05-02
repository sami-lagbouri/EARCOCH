<?php
//Fichier du chaine de connexion
include ('config.php');

//Verification de la soumission de la form
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $error_pat=" ";
	$tel1=$tel2=$tm_mtr =$ar_mtr =$fr_mtr =$lum_atr=$nom=$prenom=$gender=$cmp_adr=$situation=$tp_scl=$etat=$ville=$pt_adr_pr=$nv_soc_cltr_prt=$suiv_ort=$md_com=$pt_adlt=$tp_fnc=$prf_part=$email=$d_l=$a_l=$v_j="";
 $tm_mtr =$ar_mtr =$fr_mtr =$lum_atr=" ";
 $tel1=$tel2=" ";
 $tm=$ar=$fr=$luatr=" ";
 $rt_lg=$trbl_lg=$reg_lg=$dt_prt=$dep_neo=$depdco_carsan=$sur_evo=$autre_mot_cslt=" ";
 $c_pea=$c_am=$c_tmd=$c_irm=$c_bs=$c_vcc=$c_bo=$c_bp=$c_cpa=$c_cst=$c_ap=$c_pi=$c_pm=" ";
 $c_ab=$c_ccl=$c_mdl=$c_nrl=$c_sma=" ";
 $c_cnss=$c_cnops=$c_atr=" ";
 $d_n='2019/01/01';
 $code_p=0;
if (isset($_POST['nom'])) $nom = $_POST['nom'];
if (isset($_POST['cmp_adr'])) $cmp_adr = $_POST['cmp_adr'];
if (isset($_POST['ville'])) $ville = $_POST['ville'];
if (isset($_POST['code_p'])) $code_p = $_POST['code_p'];
if (isset($_POST['nv_soc_cltr_prt'])) $nv_soc_cltr_prt = $_POST['nv_soc_cltr_prt'];
if (isset($_POST['tp_scl'])) $tp_scl = $_POST['tp_scl'];
if (isset($_POST['suiv_ort'])) $suiv_ort = $_POST['suiv_ort'];
if (isset($_POST['mod_ct'])) $md_com = $_POST['mod_ct'];
if (isset($_POST['md_com'])) $md_com_atre = $_POST['md_com'];
if (isset($_POST['etat'])) $etat = $_POST['etat'];
if (isset($_POST['prenom'])) $prenom = $_POST['prenom'];
if (isset($_POST['d_n'])){ 
	if(!empty($_POST['d_n']))
	$d_n = $_POST['d_n'];
	}else{
	$d_n = date("Y-m-d");
	}
if (isset($_POST['gender'])) $gender = $_POST['gender'];
if (isset($_POST['tel1'])) $tel1 = $_POST['tel1'];
if (isset($_POST['tel2'])) $tel2 = $_POST['tel2'];
if (isset($_POST['email'])) $email = $_POST['email'];
if (isset($_POST['situation'])) $situation = $_POST['situation'];
if (isset($_POST['prf_part'])) $prf_part = $_POST['prf_part'];
if (isset($_POST['pt_adlt'])) $pt_adlt = $_POST['pt_adlt'];
if (isset($_POST['pt_adr_pr'])) $pt_adr_pr = $_POST['pt_adr_pr'];
if (isset($_POST['tp_fnc'])) $tp_fnc = $_POST['tp_fnc'];

if (isset($_POST['tm'])) $tm = $_POST['tm'];
if (isset($_POST['ar'])) $ar = $_POST['ar'];
if (isset($_POST['fr'])) $fr = $_POST['fr'];
if (isset($_POST['luatr'])) $luatr = $_POST['luatr'];
if (isset($_POST['lg_utl'])) $lg_utl = $_POST['lg_utl'];

if (isset($_POST['tm_mtr'])) $tm_mtr = $_POST['tm_mtr'];
if (isset($_POST['ar_mtr'])) $tm_mtr = $_POST['ar_mtr'];
if (isset($_POST['fr_mtr'])) $fr_mtr = $_POST['fr_mtr'];
if (isset($_POST['lum_atr'])) $lum_atr = $_POST['lum_atr'];

if (isset($_POST['rt_lg'])) $rt_lg = $_POST['rt_lg'];
if (isset($_POST['trbl_lg'])) $trbl_lg = $_POST['trbl_lg'];
if (isset($_POST['reg_lg'])) $reg_lg = $_POST['reg_lg'];
if (isset($_POST['dt_prt'])) $dt_prt = $_POST['dt_prt'];
if (isset($_POST['dep_neo'])) $dep_neo = $_POST['dep_neo'];
if (isset($_POST['depdco_carsan'])) $depdco_carsan = $_POST['depdco_carsan'];
if (isset($_POST['sur_evo'])) $sur_evo = $_POST['sur_evo'];
if (isset($_POST['autre_mot_cslt'])) $autre_mot_cslt = $_POST['autre_mot_cslt'];

if (isset($_POST['c_pea'])) $c_pea = $_POST['c_pea'];
if (isset($_POST['c_am'])) $c_am = $_POST['c_am'];
if (isset($_POST['c_tmd'])) $c_tmd = $_POST['c_tmd'];
if (isset($_POST['c_irm'])) $c_irm = $_POST['c_irm'];
if (isset($_POST['c_bs'])) $c_bs = $_POST['c_bs'];

if (isset($_POST['c_vcc'])) $c_vcc = $_POST['c_vcc'];
if (isset($_POST['c_bo'])) $c_bo = $_POST['c_bo'];
if (isset($_POST['c_bp'])) $c_bp = $_POST['c_bp'];
if (isset($_POST['c_cpa'])) $c_cpa = $_POST['c_cpa'];
if (isset($_POST['c_cst'])) $c_cst = $_POST['c_cst'];
if (isset($_POST['c_ap'])) $c_ap = $_POST['c_ap'];
if (isset($_POST['c_pi'])) $c_pi = $_POST['c_pi'];
if (isset($_POST['c_pm'])) $c_pm = $_POST['c_pm'];

if (isset($_POST['d_l'])) $d_l = $_POST['d_l'];
if (isset($_POST['a_l'])) $a_l = $_POST['a_l'];
if (isset($_POST['v_j'])) $v_j = $_POST['v_j'];

if (isset($_POST['c_ab'])) $c_ab = $_POST['c_ab'];
if (isset($_POST['c_ccl'])) $c_ccl = $_POST['c_ccl'];
if (isset($_POST['c_mdl'])) $c_mdl = $_POST['c_mdl'];
if (isset($_POST['c_nrl'])) $c_nrl = $_POST['c_nrl'];
if (isset($_POST['c_sma'])) $c_sma = $_POST['c_sma'];

if (isset($_POST['c_cnss'])) $c_cnss = $_POST['c_cnss'];
if (isset($_POST['c_cnops'])) $c_cnops = $_POST['c_cnops'];
if (isset($_POST['c_atr'])) $c_atr = $_POST['c_atr'];



	//Capture des Exceptions 
    try{
    $stmt = '';
    //requete de l'insertion
   $sql = "insert into reg_pat(nom_pat, prenom_pat, dn_pat, sexe_pat, adr_pat, sit_pat, sco_pat, etat_pat, 
lm_pat, ville_pat, cp_pat, ad_par_pat, niv_socio_pat, tel_pat, lu_pat, suivi_ortho_pat, m_comm_pat, adulte_pat,
fin_pat, parents_pat, email_pat, motif_pat, check_pat, pec1_pat, pec2_pat, pec3_pat, typeimp_pat, mut_pat,
iddos_pat) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?)";
   
   //$tm_mtr =$ar_mtr =$fr_mtr =$lum_atr
   $a =$tm_mtr.';'.$ar_mtr.';'.$fr_mtr.';'.$lum_atr;
   
   //$tel1=$tel2=;
   $z =$tel1.';'.$tel2;
   
   //$tm=$ar=$fr=$luatr
   $e =$tm.';'.$ar.';'.$fr.';'.$luatr;
   
   //$rt_lg=$trbl_lg=$reg_lg=$dt_prt=$dep_neo=$depdco_carsan=$sur_evo=$autre_mot_cslt
   $r =$rt_lg.';'.$trbl_lg.';'.$reg_lg.';'.$dt_prt.';'.$dep_neo.';'.$depdco_carsan.';'.$sur_evo.';'.$autre_mot_cslt;
   
   //$c_vcc=$c_bo=$c_bp=$c_cpa=$c_cst=$c_ap=$c_pi=$c_pm
   //$c_vcc.';'.$c_bo.';'.$c_bp.';'.$c_cpa.';'.$c_cst.';'.$c_ap.';'.$c_pi.';'.$c_pm;
   $t =$c_pea.';'.$c_am.';'.$c_tmd.';'.$c_irm.';'.$c_bs.';'.$c_vcc.';'.$c_bo.';'.$c_bp.';'.$c_cpa.';'.$c_cst.';'.$c_ap.';'.$c_pi.';'.$c_pm;
   //$c_ab=$c_ccl=$c_mdl=$c_nrl=$c_sma
   $y =$c_ab.';'.$c_ccl.';'.$c_mdl.';'.$c_nrl.';'.$c_sma;
   //$c_cnss=$c_cnops=$c_atr
   $u =$c_cnss.';'.$c_cnops.';'.$c_atr;
  
   
   $stmt= $db -> prepare($sql);
  $num_doss =  "CA". strtoupper(substr($nom,0,3)). strtoupper(substr($prenom,0,2)).'000';
	$stmt -> execute(array($nom,$prenom,$d_n,$gender,$cmp_adr,$situation,$tp_scl,$etat,$a,$ville,$code_p,$pt_adr_pr,$nv_soc_cltr_prt,$z,$e,$suiv_ort,$md_com,$pt_adlt,$tp_fnc,$prf_part,$email,$r,$t,$d_l,$a_l,$v_j,$y,$u,$num_doss));
   
  }catch(PDOException $e){
      $error_pat = $e->getMessage();
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
                                <h4>Centre d'Audition</h4>
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
						  <!-- begin -->
						<div class="col-md-6">
						   
                            <div class="col-md-12">
                                <div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Nom" name="nom"   style="font-size:15px" id="nom">
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
                                   
                                </div>
                            </div>
							<div class="col-md-12" style="">                      
								<div class="form-group form-float" >                                    
                                    
                                   
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
									<option value="fi">Fratrie implementée</option>
									<option value="fa">Fratrie appareillée</option>
									<option value="ps">Parents sourds</option>
									<option value="pspr">Parents separés</option>
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
						<div class="col-md-6">
						<div class="col-md-12" style="margin-top:20px;margin-left:0">
						<div class="">
							<div class="form-group form-float">
                                <p style="color:#888">Motifs de consultation :</p>
							</div>
							</div>
							<div class="">
							<div class="form-group form-float">
								<input type="checkbox" name="rt_lg" id="rt_lg" value="rt_lg" >
								<label for="rt_lg" style="color:#888;margin-bottom:10px">
                                        Retard de langage
                                </label>
								
                            </div>
							</div>
							
							
							
							<div class="">
                                <input type="checkbox" name="trbl_lg" id="trbl_lg" value="trbl_lg">
                                <label for="trbl_lg" style="color:#888;margin-bottom:10px">
                                        Trouble du langage
                                </label>
                            </div>
							
							
							
							
							<div class="">
                                <input type="checkbox" name="reg_lg" id="reg_lg" value="reg_lg">
                                <label for="reg_lg" style="color:#888;margin-bottom:10px">
                                        regression du langage
                                </label>
                            
							</div>
							
							
						
							<div class="">
                                <input type="checkbox" name="dt_prt" id="dt_prt" value="dt_prt">
                                <label for="dt_prt" style="color:grey; margin-bottom:10px">
                                        doute des parents
                                </label>
                            </div>
							
							
							
							
							
							
						</div>
					
                        </div>
						<div class="col-md-6">
						<div class="col-md-12" style="margin-top:20px;margin-left:0">
						<div class="">
							<div class="form-group form-float">
                                <p style="color:#888">&nbsp;</p>
							</div>
							</div>
							
							
							
							
							
							<div class="">
                                <input type="checkbox" name="dep_neo" id="dep_neo" value="dep_neo">
                                <label for="dep_neo" style="color:grey; margin-bottom:10px">
                                        Suite à un dépistage néonatal
                                </label>
                            </div>
							
							
							
							
							<div class="">
                                <input type="checkbox" name="depdco_carsan" id="depdco_carsan" value="depdco_carsan">
                                <label for="depdco_carsan" style="color:grey; margin-bottom:10px">
                                        Suite à un dépistage scolaire ou caravane de santé
                                </label>
                            </div>
							
							
							<div class="">
                                <input type="checkbox" name="sur_evo" id="sur_evo" value="sur_evo">
                                <label for="sur_evo" style="color:grey; margin-bottom:10px">
                                        Surdité évolutive (patient appareillé)
                                </label>
                            </div>
							
							
							<div class="">
                                <input type="checkbox" name="autre_mot_cslt" id="autre_mot_cslt" value="autre_mot_cslt" onchange="desp_text_atr()">
                                <label for="autre_mot_cslt" style="color:grey; margin-bottom:10px" >
                                        Autre
                                </label>
                            </div>
							<div class="" style="">                      
								<div class="form-group form-float" >                                    
                                   <input type="text" class="form-control" placeholder="Autre" id="atr_mot_cslt" name="atr_mot_cslt" required style="font-size:15px;visibility:hidden;display:none">
                                   
                                </div>
						</div>
						</div>
					
                        </div>
						<div class="col-md-4">
						<div class="col-md-12" style="margin-top:20px;margin-left:0">
						<div class="">
							<div class="form-group form-float">
                                <p style="color:#888">Check List</p>
							</div>
							</div>
							
							
							
							
							
							<div class="">
                                <input type="checkbox" name="c_pea" id="c_pea" value="c_pea">
                                <label for="c_pea" style="color:grey; margin-bottom:10px">
                                        PEA
                                </label>
                            </div>
							
							
							
							
							<div class="">
                                <input type="checkbox" name="c_am" id="c_am" value="c_am">
                                <label for="c_am" style="color:grey; margin-bottom:10px">
                                        AUDIOMETRIE
                                </label>
                            </div>
							
							
							<div class="">
                                <input type="checkbox" name="c_tmd" id="c_tmd" value="c_tmd">
                                <label for="c_tmd" style="color:grey; margin-bottom:10px">
                                        TDM
                                </label>
                            </div>
							
							
							<div class="">
                                <input type="checkbox" name="c_irm" id="c_irm" value="c_irm">
                                <label for="c_irm" style="color:grey; margin-bottom:10px" >
                                        IRM
                                </label>
                            </div>
							<div class="">
                                <input type="checkbox" name="c_bs" id="c_bs" value="c_bs">
                                <label for="c_bs" style="color:grey; margin-bottom:10px" >
                                       Bilan sanguin
                                </label>
                            </div>
							<div class="" style="">                      
								<div class="form-group form-float" >                                    
                                   <input type="text" class="form-control" placeholder="Autre" id="atr_mot_cslt1" name="atr_mot_cslt1" required style="font-size:15px;visibility:hidden;display:none">
                                   
                                </div>
						</div>
						</div>
					
                        </div>
						<div class="col-md-4">
						<div class="col-md-12" style="margin-top:20px;margin-left:0">
						<div class="">
							<div class="form-group form-float">
                                <p style="color:#888">&nbsp;</p>
							</div>
							</div>
							
							
							
							
							
							<div class="">
                                <input type="checkbox" name="c_vcc" id="c_vcc" value="c_vcc">
                                <label for="c_vcc" style="color:grey; margin-bottom:10px">
                                        Vaccination
                                </label>
                            </div>
							
							
							
							
							<div class="">
                                <input type="checkbox" name="c_bo" id="c_bo" value="c_bo">
                                <label for="c_bo" style="color:grey; margin-bottom:10px">
                                        Bilan orthophonique
                                </label>
                            </div>
							
							
							<div class="">
                                <input type="checkbox" name="c_bp" id="c_bp" value="c_bp">
                                <label for="c_bp" style="color:grey; margin-bottom:10px">
                                        Bilan psychologique(enfant & famille)
                                </label>
                            </div>
							
							
							<div class="">
                                <input type="checkbox" name="c_cpa" id="c_cpa" value="c_cpa" >
                                <label for="c_cpa" style="color:grey; margin-bottom:10px" >
                                        CPA
                                </label>
                            </div>
							<div class="">
                                <input type="checkbox" name="c_cst" id="c_cst" value="c_cst">
                                <label for="c_cst" style="color:grey; margin-bottom:10px" >
                                        Consentement
                                </label>
                            </div>
							<div class="" style="">                      
								<div class="form-group form-float" >                                    
                                   <input type="text" class="form-control" placeholder="Autre" id="atr_mot_cslt" name="atr_mot_cslt" required style="font-size:15px;visibility:hidden;display:none">
                                   
                                </div>
						</div>
						</div>
					
                        </div>
						<div class="col-md-4">
						<div class="col-md-12" style="margin-top:20px;margin-left:0">
						<div class="">
							<div class="form-group form-float">
                                <p style="color:#888">&nbsp;</p>
							</div>
							</div>
							
							
							
							
							
							<div class="">
                                <input type="checkbox" name="c_ap" id="c_ap" value="c_ap">
                                <label for="c_ap" style="color:grey; margin-bottom:10px">
                                        Autorisation parental
                                </label>
                            </div>
							
							
							
							
							<div class="">
                                <input type="checkbox" name="c_pi" id="c_pi" value="c_pi">
                                <label for="c_pi" style="color:grey; margin-bottom:10px">
                                        5 photos d'identité
                                </label>
                            </div>
							
							
							<div class="">
                                <input type="checkbox" name="c_pm" id="c_pm" value="c_pm">
                                <label for="c_pm" style="color:grey; margin-bottom:10px">
                                        1 photo de la maman
                                </label>
                            </div>
							
							
							
							
							
						</div>
					
                        </div>
						<div class="col-md-4">
						<div class="col-md-12" style="margin-top:20px;margin-left:0">
						<div class="">
							<div class="form-group form-float">
                                <p style="color:#888">Prise en charge</p>
							</div>
							</div>
							
							
							
							
							
							<div class="">
                                 <input id="d_l" placeholder="Déposée le" name="d_l" style="background-color: transparent;
										border: 1px solid #E3E3E3;
										border-radius: 30px;
										color: #2c2c2c;
										
										height: auto;
										line-height: normal;    box-shadow: none;    display: block;
										width: 100%;    padding: 10px 18px 10px 18px;    background-clip: padding-box;    background-clip: padding-box;transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out" class="" readonly >
                            </div>
                            </div>
                            </div>
							
							
							<div class="col-md-4">
						<div class="col-md-12" style="margin-top:20px;margin-left:0">
							
							<div class="">
							<div class="form-group form-float">
                                <p style="color:#888">&nbsp;</p>
							</div>
                                 <input id="a_l" placeholder="Accordée le" name="a_l" style="background-color: transparent;
										border: 1px solid #E3E3E3;
										border-radius: 30px;
										color: #2c2c2c;
										
										height: auto;
										line-height: normal;    box-shadow: none;    display: block;
										width: 100%;    padding: 10px 18px 10px 18px;    background-clip: padding-box;    background-clip: padding-box;transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out" class="" readonly >
                            </div>
                            </div>
                            </div>
							
							<div class="col-md-4">
						<div class="col-md-12" style="margin-top:20px;margin-left:0">
							<div class="">
							<div class="form-group form-float">
                                <p style="color:#888">&nbsp;</p>
							</div>
                                 <input id="v_j" placeholder="Valable jusqu'au" name="v_j" style="background-color: transparent;
										border: 1px solid #E3E3E3;
										border-radius: 30px;
										color: #2c2c2c;
										
										height: auto;
										line-height: normal;    box-shadow: none;    display: block;
										width: 100%;    padding: 10px 18px 10px 18px;    background-clip: padding-box;    background-clip: padding-box;transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out" class="" readonly >
                            </div>
							
							
							
							
							
						</div>
					
                        </div>
						<div class="col-md-12">
						<div class="col-md-12" style="margin-top:20px;margin-left:0">
						
							
							
							
							
							<div class="">
                                <input type="checkbox" name="c_ab" id="c_ab" value="c_ab">
                                <label for="c_ab" style="color:grey; margin-bottom:10px">
                                        AB
                                </label>
                            </div>
							
							
							
							
							<div class="">
                                <input type="checkbox" name="c_ccl" id="c_ccl" value="c_ccl">
                                <label for="c_ccl" style="color:grey; margin-bottom:10px">
                                        Cochléaire
                                </label>
                            </div>
							
							
							<div class="">
                                <input type="checkbox" name="c_mdl" id="c_mdl" value="c_mdl">
                                <label for="c_mdl" style="color:grey; margin-bottom:10px">
                                        Medel
                                </label>
                            </div>
							
							<div class="">
                                <input type="checkbox" name="c_nrl" id="c_nrl" value="c_nrl">
                                <label for="c_nrl" style="color:grey; margin-bottom:10px">
                                        Neurelec
                                </label>
                            </div>
							<div class="">
                                <input type="checkbox" name="c_sma" id="c_sma" value="c_sma">
                                <label for="c_sma" style="color:grey; margin-bottom:10px">
                                        Soma
                                </label>
                            </div>
							
							
						</div>
					
                        </div>
						<div class="col-md-12">
						<div class="col-md-12" style="margin-top:20px;margin-left:0">
						
							
							
							
							
							<div class="">
							<div class="form-group form-float">
                                <p style="color:#888">Mutuelle</p>
							</div>
							</div>
							
							
							
							
							<div class="">
                                <input type="checkbox" name="c_cnss" id="c_cnss" value="c_cnss">
                                <label for="c_cnss" style="color:grey; margin-bottom:10px">
                                        CNSS.
                                </label>
                            </div>
							
							
							<div class="">
                                <input type="checkbox" name="c_cnops" id="c_cnops" value="c_cnops">
                                <label for="c_cnops" style="color:grey; margin-bottom:10px">
                                        CNOPS
                                </label>
                            </div>
							
							<div class="">
                                <input type="checkbox" name="c_atr" id="c_atr" value="c_atr">
                                <label for="c_atr" style="color:grey; margin-bottom:10px">
                                        Autre
                                </label>
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
<?php if(isset($error_pat)) echo $error_pat;?>
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
 $( function() {
    $( "#d_n" ).datepicker();
  } );
//
 $( function() {
    $( "#dp" ).datepicker();
  } );
   $( function() {
    $( "#d_l" ).datepicker();
  } );
   $( function() {
    $( "#a_l" ).datepicker();
  } );
   $( function() {
    $( "#v_j" ).datepicker();
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