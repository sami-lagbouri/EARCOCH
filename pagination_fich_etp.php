<?php
//Fichier du chaine de connexion
include ('config.php');
  
  
$stmt = $db->query("SELECT a.check_clin as clin,b.check_cnslt as cnst1,c.check_cnsult  as cnstl2, d.check_irm as irm,e.check_scan as tdm,
f.check_surd as sur,g.nom_pat as nom,g.prenom_pat as prenom from 
reg_clin a ,reg_cnslt b ,reg_cnsult c,reg_irm d,reg_scan e ,reg_surd f ,reg_pat g 
where a.id_pat=g.id_pat and b.idpat_cnslt=g.id_pat and
c.idpat_cnsult=g.id_pat and d.id_pat=g.id_pat and e.id_pat=g.id_pat and f.idpatient_surd=g.id_pat"); 
 
?>
 
<?php  

    while($row = $stmt->fetch()) {
?>  
            <tr>
			<td><?php echo $row["nom"] .' '. $row["prenom"]; ?></td>
	<td><?php if($row["sur"]==1){?><i class="far fa-check-circle"><?php }else{ ?></i><i class="fas fa-times"><?php } ?></i></td>
	<td><?php if($row["cnst1"]==1){?><i class="far fa-check-circle"><?php }else{ ?></i><i class="fas fa-times"><?php } ?></i></td>
	<td><?php if($row["cnstl2"]==1){?><i class="far fa-check-circle"><?php }else{ ?></i><i class="fas fa-times"><?php } ?></i></td>
	<td><?php if($row["clin"]==1){?><i class="far fa-check-circle"><?php }else{ ?></i><i class="fas fa-times"><?php } ?></i></td>
	<td><?php if($row["tdm"]==1){?><i class="far fa-check-circle"><?php }else{ ?></i><i class="fas fa-times"><?php } ?></i></td>
	<td><?php if($row["irm"]==1){?><i class="far fa-check-circle"><?php }else{ ?></i><i class="fas fa-times"><?php } ?></i></td>
			
		
            </tr>  
<?php 
	}; 
 
?>
