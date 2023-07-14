<!DOCTYPE html>
<html>
<head>
  <title>Acceuil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../../maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="../../../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../../../../../../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="../../../../maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
.logo{
  background-color: white;
  position: fixed;
  z-index: 2;
  top:0px; 
  padding-top: 0px;
  
}
.separateur{
	border: 2px solid #36C545;
    position: fixed;
    z-index: 2;
    top:53px;
    padding-top: 47px;
    width: 98%;
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: solid;
    border-left-style: none;
}
.menu { 
  position: fixed;
  z-index: 1;
  top:55px; 
  left:15px;
  padding-top: 50px; 
  padding-left: 0px;
  padding-right: 0px;

}
.menu1 { 
  position: fixed;
  z-index: 1;
  top:55px; 
  padding-top: 50px; 
  padding-left: 0px;
  padding-right: 0px;

}
.msg { 
	position: fixed;
    z-index: 1;
	top:105px; 
	padding-top: 10px; 
	left:11.5%;
	display: none;
	background-color: white;
	border: 1px solid #d6d6c2;
	border-radius: 5px;
	width: 10%;
}
.b{
	top:55px;
	z-index: 0;
	padding-top:102px;
	font-size: 14px;
}
.btn, .form-control{
	font-size: 14px;
}
.but{
	position: fixed;
	top:70px;
	padding-top:50px;	
	padding-left: 85%;
}
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
  
}
.acceuil{
	width: 100%;

}
.acceuil:hover,
.acceuil:focus {
	background-color: #d6d6c2;
	border-radius: 5px;
}
.active{
	background-color: #d6d6c2;
	width: 135px;
	border-radius: 5px;
}
.drop:hover,
.drop:focus {
  cursor: pointer;
}

.showMsg:hover{
	cursor: pointer;
}
</style>
</style>
<body>   

<div class="container-fluid logo">
  <div class="row" >
    <div class="col-5">
    	<img class="img-fluid" src="../../../../images/drjs.jpg" style="width: 20%; height: 100px">
    </div>
    <div class="col-5">
    	<img class="img-fluid" src="../../../../images/repub.png" style="width: 50%;height: 100px">
    </div>
   </div>    
</div>
<div class="container-fluid ">
<div style="border: 1px solid #36C545"></div>
	<div class="separateur"></div>
	<div class="row">
		<div class="col-2 menu">
			<nav class="navbar bg-light" style="border: 1px solid #d6d6c2;border-left-style: none; width: 60%; padding-left: 0px;border-radius: 5px;">
			  <ul class="navbar-nav">
			  	<span class="acceuil" style="width: 137px;">
			  	<li class="nav-item">
			  		<a class="text-success nav-link active" href="#"><img class="img-fluid" src="../../../../images/home.png">Acceuil</a>		
			    </li></span><br>
			    <span class="acceuil" style="width: 137px">
			    <li class="nav-item ">
			      <a class="text-success nav-link" href=<?php echo base_url().'Controlleur/personnel' ?> ><img class="img-fluid" src="../../../../images/addPers.png">Personnel</a>
			    </li></span><br>
			    <span class="acceuil" style="width: 137px">
			    <li class="nav-item">
			      <a class="text-success nav-link showMsg" onclick="document.getElementById('m').style.display='block'""><img class="img-fluid" src="../../../../images/user.png">Utilisateur</a>
			    </li></span><br>
			    <div class="drop acceuil" style="width: 137px">
			    <li class="nav-item">
				    <div class="dropdown dropright">
				    <a class="text-success nav-link dropdown-toggle" data-toggle="dropdown"><img  class="rounded-circle" alt="pas de photo" style="width:20%;height:20%" src=<?php echo $this->session->userdata('pdp') ?>>Profil</a>
				    <div class="inherit">
				    	<div class="dropdown-menu ">
					      <a class="text-success dropdown-item" href=<?php echo base_url().'Controlleur/aff'?>><img class="img-fluid" src="../../../../images/set.png">Parametres</a>
					      <a class="dropdown-item text-danger" href=<?php echo base_url().'Controlleur/index' ?>><img class="img-fluid" src="../../../../images/dec.png">Déconnection</a>
					    </div>
				    </div>
				    
					</div>	
			    </li></div>
			  </ul>
			</nav>			
		</div>
		<div class="col-2 msg" id="m" >
			<span onclick="document.getElementById('m').style.display='none'" class="close" title="fermer">&times;</span></br>
			<form method="POST" action=<?php echo base_url().'Controlleur/nmsg' ?>>
			<?php 
			$this->load->model('Model');
			$data1=array();
			$ut=$this->Model->allUt();
			$data1['ut']=$ut;
				foreach($ut as $ut){?>
					<div class="row">
					<button type="submit" class="btn btn-success" style="width: 100%;text-align: left;" value="click" name=<?php echo $ut['im']?>><img  class="rounded-circle" alt="pas de photo" style="width:40px;height:40px" src=<?php echo $ut['pdp']?>><?php echo $ut['nomU']?></button>
					</div></br>
				<?php
				}
				?>
			</form>
		</div>
	</div>
	<div class="row b">
		<div class="col-2">
		</div>
		<div class="col-10 bg-light" style="font-size: 14px;">
			<div class="col-4">
			<?php 
				$alert=$this->session->flashdata('alert');
				if($alert!=""){?>
					<div class="alert alert-success alert-dismissible fade show">
					    <button type="button" class="close" data-dismiss="alert">&times;</button>
					    <?php echo $alert?>
				 	</div>
				<?php
				}
				?>
			</div>
			<h5 style="text-align: center;color: #36C545">Liste des personnels</h5>
			<form method="POST" action=<?php echo base_url().'Controlleur/modif' ?>>
			<div class="table-responsive">
				<table class="table table-hover">
				    <thead>
				      <tr style="color: #36C545; ">
				        <th>Im</th>
		                <th>Nom</th>
		                <th>Prénoms</th>
		                <th>Fonction</th>
		                <th>Grade</th>
		                <th>Categorie</th>
		                <th>Indice</th>
		                <th>status</th>
		                <th>Telephone</th>
		                <th>Imminence</th>
		                <th class="text-success">Modification</th>
		                
		                <th class="text-info">Avancement</th>
		                <th class="text-danger">Suppression</th>
				      </tr>
				    </thead>
				    <tbody style="font-size: 12px">
				      
				      	<?php if (!empty($pers)) {
				      		foreach ($pers as $pers) {?>
				      			<tr>
					      			<td><?php echo $pers['im']?></td>
							        <td><?php echo $pers['nom']?></td>
							        <td><?php echo $pers['prenoms']?></td>
							        <td><?php echo $pers['aa']?></td>
							        <td><?php echo $pers['grade']?></td>
							        <td><?php echo $pers['categorie']?></td>
							        <td><?php echo $pers['indice']?></td>
							        <td><?php echo $pers['st']?></td>
							        <td><?php echo $pers['tel']?></td>
							        <td><img src=<?php echo $this->session->userdata($pers['im']."im")?>></td>
							        <td><button type="submit" class="btn btn-success" value="modifier" name=<?php echo "m".$pers['im']?>>Modifier</button></td>
							        <td><button type="submit" class="btn btn-info" value="verifier" name=<?php echo "v".$pers['im']?>>Vérifier</button></td>
							        <td>
							        	<button type="submit" class="btn btn-danger" value="supprimer" name=<?php echo "s".$pers['im']?>>Supprimer</button>
							        </td>
						        </tr>
				      		<?php
				      		}
				      	}
				      	else{?> 
				      		<tr>
					      			<td>vide</td>
							        <td>vide</td>
							        <td>vide</td>
							        <td>vide</td>
							        <td>vide</td>
							        <td>vide</td>
							        <td>vide</td>
							        <td>vide</td>
							        <td>vide</td>
							        <td>vide</td>
							        <td><button type="button" class="btn btn-success">Modifier</button></td>
							        <td><button type="button" class="btn btn-info">Vérifier</button></td>
							        <td>
							        	<button type="button" class="btn btn-danger">Supprimer</button>
							        </td>
						        </tr>
						<?php
				      	} 
				      	?> 
				      
				      
				    </tbody>
				  </table>
			</div>
			</form>
		</div>
		
	</div>
</div></br>
<?php 
if($this->session->userdata('imU')=="1234"){

 ?>

<div class="row ">
		<div class="col-2">
		</div>
		<div class="col-10 bg-light" style="font-size: 14px;">
			<h5 style="text-align: center;color: #36C545">Liste des utilisateurs</h5>
			<form method="POST" action=<?php echo base_url().'Controlleur/modif' ?>>
			<div class="table-responsive">
				<table class="table table-hover">
				    <thead>
				      <tr style="color: #36C545; ">
				        <th>Im</th>
		                <th>Nom utilisateur</th>
		                <th>mot de passe</th>
				    </thead>
				    <tbody style="font-size: 12px">
				      	<?php
				    
							$this->load->model('Model');
							$data1=array();
							$ut=$this->Model->allUt();
							$data1['ut']=$ut;
								foreach($ut as $ut){?>
									<tr>
					      			<td><?php echo $ut['im']?></td>
							        <td><?php echo $ut['nomU']?></td>
							        <td><?php echo $ut['mdp']?></td>
							        
						        	</tr>
								<?php
								}
							
							?>
				      	
				      
				      
				    </tbody>
				  </table>
			</div>
			</form>
		</div>
		
	</div>
</div>

<?php 
}
?>

<div class="modal fade" id="Modal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">Suppréssion</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 14px;">
			<label class="control-label text-danger">Etes-vous sûr de vouloir supprimer <?php echo $this->session->flashdata('ns')?>?</label>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          	<div class="btn-group">
		    	<div class="col-6">
		    		<button type="submit" class="btn btn-danger" data-dismiss="modal">Annuler</button>
		    	</div>
		    	<form method="POST" action=<?php echo base_url().'Controlleur/supprimerPers'?>>
		        <div class="col-7">
		        	<button type="submit" class="btn btn-success" name="supprimerP">Oui</button>
		        </div></form>		        
		    </div>
        </div>
        
      </div>
    </div>
</div>
<div class="modal fade" id="Modal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">Vérification, date de reclassement:<?php echo $this->session->flashdata('dt')?></h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 14px;">
			<label class="control-label text-success"><?php echo $this->session->flashdata('verif')?></label>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          	<div class="btn-group">
		        <div class="col-7">
		        	<button type="submit" class="btn btn-success" data-dismiss="modal">OK</button>
		        </div>		        
		    </div>
        </div>
        
      </div>
    </div>
</div>
<div class="modal fade" id="Modal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">Vérification, date de reclassement:<?php echo $this->session->flashdata('dt')?></h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 14px;">
			<label class="control-label text-success"><?php echo $this->session->flashdata('verif2')?></label>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          	<div class="btn-group">
		        	<div class="col-6">
		    		<button type="submit" class="btn btn-danger" data-dismiss="modal">Annuler</button>
			    	</div>
			    	<form method="POST" action=<?php echo base_url().'Controlleur/miseajour'?>>
			        <div class="col-7">
			        	<button type="submit" class="btn btn-success" name="miseajour">Oui</button>
			        </div></form>	        
		    </div>
        </div>
        
      </div>
    </div>
</div>
<div class="modal fade" id="profil">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">Paramètre</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 14px;">
        	<form method="POST" action=<?php echo base_url().'Controlleur/param'?>>
			<div class="row">
					<label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;">Changer la photo de profil:</label>
			    	<div class="col-8" style="column-width: 400px;">          
			        	<input type="file" class="form-control" id="pwdl" name="pdp">
			        	<span class="container text-left">
					    	<label class="control-label text-danger"><?php echo form_error('mdp'); ?></label> 
					    </span>
			        	<br> 
			    	</div>
			    	<label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;">Changer le mot de passe:</label>
			    	<div class="col-8" style="column-width: 400px;">          
			        	<input type="password" class="form-control" id="pwdl" placeholder="Entrez votre mot de passe" name="mdp" value=<?php echo $this->session->userdata('mdp')?>>
			        	<span class="container text-left">
					    	<label class="control-label text-danger"><?php echo form_error('mdp'); ?></label> 
					    </span>
			        	<br> 
			    	</div>
			</div>
			
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          	<div class="btn-group">
		    	<div class="col-6">
		    		<button type="submit" class="btn btn-danger" data-dismiss="modal">Annuler</button>
		    	</div>
		    	<form method="POST" action=<?php echo base_url().'Controlleur/supprimerPers'?>>
		        <div class="col-7">
		        	<button type="submit" class="btn btn-success" name="supprimerP">Enregistrer</button>
		        </div></form>		        
		    </div>
        </div>
        
      </div>
    </div>
</div>
<div class="modal fade" id="msg">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title"><img  class="rounded-circle" alt="pdp" style="width:50%;height:50%" src=<?php echo $this->session->userdata('pdpR')?>><label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;"><?php echo $this->session->userdata('nomR')?></label></h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 14px;">
        	<div class="row ">
		<div class="col-5">
		</div>
		<div class="col-10 bg-light" style="font-size: 14px;">
			
			
</div>
			
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        	
       
        
      </div>
    </div>
</div>

<?php 
echo $this->session->flashdata('affP');
echo $this->session->flashdata('afmsg');
	$a=$this->session->flashdata('affichemod');
	if($a!=""){
		$this->session->set_flashdata('verif','');
		$this->session->set_flashdata('verif2','');
	echo "<script>
		$('#Modal').modal('show');
		</script>";
	}
	$b=$this->session->flashdata('verif');
	if($b!=""){
		$this->session->set_flashdata('affichemod','');
		$this->session->set_flashdata('verif2','');
	echo "<script>
		$('#Modal1').modal('show');
		</script>";
	}
	$c=$this->session->flashdata('verif2');
	if($c!=""){
		$this->session->set_flashdata('affichemod','');
		$this->session->set_flashdata('verif1','');
	echo "<script>
		$('#Modal2').modal('show');
		</script>";
	}
	
	
?>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_popover&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2019 12:31:27 GMT -->
</html>

