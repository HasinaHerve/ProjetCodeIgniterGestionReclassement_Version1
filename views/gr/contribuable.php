<!DOCTYPE html>
<html>
<head>
  <title>Personnel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../../maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="../../../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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
  top:280px; 
  padding-top: 0px; 
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
}
.b{
	top:55px;
	z-index: 0;
	padding-top:105px;
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
<div class="container-fluid">
	<div class="separateur"></div>
	<div class="row">
		<div class="col-2 menu">
			<nav class="navbar bg-light" style="border: 1px solid #d6d6c2;border-left-style: none; width: 60%; padding-left: 0px;border-radius: 5px;">
			  <ul class="navbar-nav">
			  	<span class="acceuil" style="width: 135px;">
			  	<li class="nav-item">
			  		<a class="text-success nav-link" href=<?php echo base_url().'Controlleur/acceuil' ?>><img class="img-fluid" src="../../../../images/home.png">Acceuil</a>		
			    </li></span><br>
			    <span class="acceuil" style="width: 135px">
			    <li class="nav-item active">
			      <a class="text-success nav-link" href="#"><img class="img-fluid" src="../../../../images/addPers.png">Personnel</a>
			    </li></span><br>
			    <span class="acceuil" style="width: 135px>
			    <li class="nav-item">
			      <a class="text-success nav-link showMsg" onclick="document.getElementById('m').style.display='block'""><img class="img-fluid" src="../../../../images/user.png">Conversation</a>
			    </li></span><br>
			    <div class="drop acceuil" style="width: 135px">
			    <li class="nav-item">
				    <div class="dropdown dropright">
				    <a class="text-success nav-link dropdown-toggle" data-toggle="dropdown"><img  class="rounded-circle" alt="pas de photo" style="width:20%;height:20%" src=<?php echo $this->session->userdata('pdp') ?>>Profil</a>
				    <div class="inherit">
				    	<div class="dropdown-menu ">
					      <a class="text-success dropdown-item" href=<?php echo base_url().'Controlleur/aff1'?>><img class="img-fluid" src="../../../../images/set.png">Parametres</a>
					      <a class="dropdown-item text-danger" href=<?php echo base_url().'Controlleur/index' ?>><img class="img-fluid" src="../../../../images/dec.png">Déconnection</a>
					    </div>
				    </div>
				    
					</div>	
			    </li></div>
			  </ul>
			</nav>			
		</div>
		<div class="col-2 msg" id="m" >
			<span onclick="document.getElementById('m').style.display='none'" class="close" title="fermer">&times;</span>
			<nav class="navbar" >
			  <ul class="navbar-nav">
			  	<li class="nav-item">
			      <a class="text-success nav-link" href="Acceuil.html"><img class="img-fluid" src="images/home.png">AcceuilAA</a>
			    </li><br>
			    <li class="nav-item">
			      <a class="text-success nav-link" href="#"><img class="img-fluid" src="images/addPers.png">Personnel</a>
			    </li><br>
			    <li class="nav-item">
			      <a class="text-success nav-link" href="#"><img class="img-fluid" src="images/msg.png">Conversation</a>
			    </li><br>
			    <li class="nav-item">
				    <div class="dropdown dropright">
				    <a class="text-success nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
				    <div class="dropdown-menu ">
				      <a class="text-success dropdown-item" ><img class="img-fluid" src="images/set.png">Parametres</a>
				      <a class="dropdown-item text-danger" href="#"><img class="img-fluid" src="images/dec.png">Déconnection</a>
				    </div>
					</div>	
			    </li>
			  </ul>
			</nav>
			
		</div>
	</div>
	<div class="row b">
		<div class="col-2">
		</div>
		<div class="col-8 bg-light">
			<div class="container text-center"></br>
	            <form class="form-horizontal" method="POST" action=<?php echo base_url().'Controlleur/ajoutPers';?>>
			    <div class="form-group">
			    	<div class="row">
						<label class="control-label col-4" for="nomU" style="color: #36C545;">Im:</label>
					    <div class="col-8" style="column-width: 400px;">
					    	<input <?php echo $this->session->flashdata('disabled') ?> type="text" class="form-control" id="im" placeholder="immatricule" name="im"  value=<?php echo $this->session->flashdata('im1') ?>>
					    	<span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('im'); ?></label> 
					    	</span>                 
					    </div>
					    
				    </div></br>
			    	<div class="row">
				    	<label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;">CIN:</label>
				    	<div class="col-8" style="column-width: 400px;">          
				        	<input type="text" class="form-control" id="cin" placeholder="Numéro cin" name="cin" value=<?php echo $this->session->flashdata('cin') ?> >
				        	<span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('cin'); ?></label> 
					    	</span> 
				    	</div>
					</div></br> 
					<div class="row">
						<label class="control-label col-4" for="nomU" style="color: #36C545;">Nom:</label>
					    <div class="col-8" style="column-width: 400px;">
					    	<input type="text" class="form-control" id="noml" placeholder="Nom" name="nom" value=<?php echo $this->session->flashdata('nom') ?>>
	                        <span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('nom'); ?></label> 
					    	</span>                 
					    </div>
				    </div></br>
			    	<div class="row">
				    	<label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;">Prénoms:</label>
				    	<div class="col-8" style="column-width: 400px;">          
				        	<input type="text" class="form-control" id="pwdl" placeholder="Prénoms" name="prenoms" value=<?php echo $this->session->flashdata('prenoms') ?>>
				        	<span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('prenoms'); ?></label> 
					    	</span> 
				    	</div>
					</div></br> 
					<div class="row">
						<label class="control-label col-4" for="nomU" style="color: #36C545;">DateNaiss:</label>
					    <div class="col-8" style="column-width: 400px;">
					    	<input type="date" class="form-control" id="noml" placeholder="Date de naissance" name="dateNaiss" value=<?php echo $this->session->flashdata('dateNaiss') ?>>
	                        <span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('dateNaiss'); ?></label> 
					    	</span>                 
					    </div>
				    </div></br>
			    	<div class="row">
				    	<label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;">Aa:</label>
				    	<div class="col-8" style="column-width: 400px;">          
				        	<input type="text" class="form-control" id="pwdl" placeholder="Attribution actuelle" name="aa" value=<?php echo $this->session->flashdata('aa') ?>>
				        	<span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('aa'); ?></label> 
					    	</span> 
				    	</div>
					</div></br> 
					<div class="row">
						<label class="control-label col-4" for="nomU" style="color: #36C545;">Grade:</label>
					    <div class="col-8" style="column-width: 400px;">
					    	<select class="form-control" name="grade"?>>
					    	<?php
				      		foreach ($grade as $grade) {?>
								<option <?php echo $this->session->flashdata($grade['grade']) ?>><?php echo $grade['grade']?></option>
							<?php
				      		}
				      		?>
				      		</select>  
					    </div>
				    </div></br>
			    	<div class="row">
				    	<label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;">Catégorie:</label>
				    	<div class="col-8" style="column-width: 400px;">          
				        	<select class="form-control" name="categorie" >
							    <option <?php echo $this->session->flashdata('I') ?>>I</option>
							    <option <?php echo $this->session->flashdata('II') ?>>II</option>
							    <option <?php echo $this->session->flashdata('III') ?>>III</option>
							    <option <?php echo $this->session->flashdata('IV') ?>>IV</option>
							    <option <?php echo $this->session->flashdata('V') ?>>V</option>
							    <option <?php echo $this->session->flashdata('VI') ?>>VI</option>
							    <option <?php echo $this->session->flashdata('VII') ?>>VII</option>
							    <option <?php echo $this->session->flashdata('VIII') ?>>VIII</option>
							    <option <?php echo $this->session->flashdata('IX') ?>>IX</option>
							    <option <?php echo $this->session->flashdata('X') ?>>X</option>
							</select>
				    	</div>
					</div></br> 
					<div class="row">
						<label class="control-label col-4" for="nomU" style="color: #36C545;">Indice:</label>
					    <div class="col-8" style="column-width: 400px;">
					    	<input type="text" class="form-control" id="noml" placeholder="Indice" name="indice" value=<?php echo $this->session->flashdata('indice') ?>>
	                        <span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('indice'); ?></label> 
					    	</span>                 
					    </div>
				    </div></br>
			    	<div class="row">
				    	<label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;">Lt:</label>
				    	<div class="col-8" style="column-width: 400px;">          
				        	<input type="text" class="form-control" id="pwdl" placeholder="Lieu de travail" name="lt" value=<?php echo $this->session->flashdata('lt') ?>>
				        	<span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('lt'); ?></label> 
					    	</span> 
				    	</div>
					</div></br> 
					<div class="row">
						<label class="control-label col-4" for="nomU" style="color: #36C545;">DateE:</label>
					    <div class="col-8" style="column-width: 400px;">
					    	<input <?php echo $this->session->flashdata('disabled') ?> type="date" class="form-control" name="dateE" placeholder="Date d'entrée dans l'administration"  value=<?php echo $this->session->flashdata('dateE') ?> >
	                        <span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('dateE'); ?></label> 
					    	</span>                 
					    </div>
				    </div></br>
			    	<div class="row">
				    	<label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;">Adresse:</label>
				    	<div class="col-8" style="column-width: 400px;">          
				        	<input type="text" class="form-control" id="pwdl" placeholder="Adresse" name="ad" value=<?php echo $this->session->flashdata('ad') ?>>
				        	<span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('ad'); ?></label> 
					    	</span> 
				    	</div>
					</div></br> 
					<div class="row">
						<label class="control-label col-4" for="nomU" style="color: #36C545;">Tel:</label>
					    <div class="col-8" style="column-width: 400px;">
					    	<input type="text" class="form-control" id="noml" placeholder="Numéro de téléphone" name="tel" value=<?php echo $this->session->flashdata('tel') ?>>
	                        <span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('tel'); ?></label> 
					    	</span>                 
					    </div>
				    </div></br>
			    	<div class="row">
				    	<label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;">Situation matrimoniale:</label>
				    	<div class="col-8" style="column-width: 400px;"> 

				        	<select class="form-control" name="sm">
							    <option <?php echo $this->session->flashdata('c') ?>>Célibataire</option>
							    <option <?php echo $this->session->flashdata('m') ?>>Marié(e)</option>
							    <option <?php echo $this->session->flashdata('d') ?>>Divorcé(e)</option>
							    <option <?php echo $this->session->flashdata('v') ?>>Veuf(ve)</option>
							</select>
				    	</div>
					</div></br> 
					<div class="row">
						<label class="control-label col-4" for="nomU" style="color: #36C545;">Status:</label>
					    <div class="col-8" style="column-width: 400px;">
					    	<select class="form-control" name="st">
							    <option <?php echo $this->session->flashdata('Actif') ?>>Actif</option>
							    <option <?php echo $this->session->flashdata('Retraité(e)') ?>>Retraité(e)</option>
							    <option <?php echo $this->session->flashdata('Décedé(e)') ?>>Décedé(e)</option>
							</select>             
					    </div>
				    </div></br>    
				</div>		 
		  		</br></br> 	   
			</div>	
	</div>
	<div class="but">
		<div class="col-2 menu1">
			<button type="submit" class="btn btn-success" value="enregistrer" name="enregistrer">Enregistrer <img class="img-fluid" src="../../../../images/yes.png"></button></br></br>
			<button type="submit" class="btn btn-danger" value="annuler" name="annuler">Annuler <img class="img-fluid" src="../../../../images/cancel.png"></button>
		</div>
		
	</div>
	</form>
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
<?php echo $this->session->flashdata('affP1'); ?>
<script>
var msg = document.getElementById('m');
window.onclick = function(event) {
    if (event.target == msg) {
        msg.style.display = "none";
    }
}
</script>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_popover&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2019 12:31:27 GMT -->
</html>

