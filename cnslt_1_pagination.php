
	<?php
//Fichier du chaine de connexion
include ('config.php');
//Selectionner les patients
  $limit = 5;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$stmt = $db->query("SELECT * FROM reg_cnslt ORDER BY id_cnslt ASC LIMIT $limit OFFSET $start_from"); 
 
?>
 
<?php  

    while($row = $stmt->fetch()) {
?>  
            <tr>
			<td><?php echo $row["cr_cnslt"]; ?></td>
			<td><?php echo $row["idpat_cnslt"]; ?></td>
			<td><?php echo $row["coch_cnslt"]; ?></td>
			 
			<td width="250px"><center>
<button class="btn btn-round btn-primary " type="submit" value="<?php echo $row["id_cnslt"]?>" style="background-color:#80ccff;width:60px" name="edit_cnslt_un">
	<i class="far fa-edit"></i>
</button>
&nbsp;
<button type="button" class="btn btn-round btn-primary" style="font-size:0.7em;background-color:#ff6666;width:60px" data-toggle="modal" data-target="#myModal" onclick="mod(<?php echo $row["id_cnslt"]?>)" >
   <i class="fa fa-trash" aria-hidden="true"  data-toggle="tooltip" title="Supprimer" data-placement="bottom"></i>
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal" style="">
    <div class="modal-dialog modal-dialog-centered" >
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Confirmation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Etes-vous sure?
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-primary " data-dismiss="modal" style="background-color:#A6A6A6">Fermer</button>
          <button type="button" class="btn btn-round btn-primary " data-dismiss="modal" onclick="showUser()" name="val" style="background-color:#FD6565">Confirmer</button>
        </div>
         
      </div>
    </div>
  </div>

<select id="" name="" class="">
                                    <option selected="selected">Creer une fiche</option>
                                    <option value="<?php echo $row["id_cnslt"]; ?>">Fiche Surdité</option>
									<option value="<?php echo $row["id_cnslt"]; ?>">F. Consultation 1</option>
                                    <option value="<?php echo $row["id_cnslt"]; ?>">F. Consultation 2</option>
									<option value="<?php echo $row["id_cnslt"]; ?>">F. Clinique</option>
									<option value="<?php echo $row["id_cnslt"]; ?>">F. TDM</option>
									<option value="<?php echo $row["id_cnslt"]; ?>">F. IRM</option>
								</select>
        </center>
		</td>
		
            </tr>  
<?php 
	}; 

?>
<script src="js/mainscripts.js"></script>















