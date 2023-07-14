<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
.form-control{
	font-size: 14px;
}
</style>
<body>   	
<div class="modal fade" id="Modal1" data-backdrop="static" >
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-success"><img class="img-fluid" src="../../../../images/log.png">AUTHENTIFICATION</h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 14px;">
        	<?php 
				$alert=$this->session->flashdata('alert');
					if($alert!=""){
					?>
						<div class="alert alert-success alert-dismissible fade show">
						    <button type="button" class="close" data-dismiss="alert">&times;</button>
						    <?php echo $alert?>
					 	</div>
					<?php
					}
					?>
			<?php 
				$alert=$this->session->flashdata('alertc');
					if($alert!=""){
					?>
						<div class="alert alert-danger alert-dismissible fade show">
						    <button type="button" class="close" data-dismiss="alert">&times;</button>
						    <?php echo $alert?>
					 	</div>
					<?php
					}
					?>
          	<div class="container text-center" style="border: 2px solid #36C545;border-radius: 5px;"></br>
	            <form class="form-horizontal" method="POST" action=<?php echo base_url().'Controlleur/connecter' ?>>
			    <div class="form-group">
			    	<div class="row">
						<label class="control-label col-4" for="imU" style="color: #36C545;">Immatricule:</label>
					    <div class="col-8" style="column-width: 400px;">
					    	<input type="text" class="form-control" id="noml" placeholder="Entrez votre im" name="imU" value=<?php echo $this->session->flashdata('im')?>> 
					    	<span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('imU'); ?></label> 
					    	</span>                  
					    </div>
				    </div></br>
			    	<div class="row">
				    	<label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;" >Mot de passe:</label>
				    	<div class="col-8" style="column-width: 400px;">          
				        	<input type="password" class="form-control" id="pwdl" placeholder="Entrez votre mot de passe" name="mdp" value=<?php echo $this->session->flashdata('mdp')?>>
				        	<span class="container text-left">
					    		<label class="control-label text-danger"><?php echo form_error('mdp'); ?></label> 
					    	</span> 
				    	</div>
					</div>     
				</div>		 
		  		</br></br> 	   
			</div>
        </div>

        
        <!-- Modal footer -->
        <div class="modal-footer">
          <div class="btn-group">
		    	<div class="col-6">
		    		<button type="submit" class="btn btn-success" id="connecter" name="connecter" value="connecter">Se connecter</div></button>
		    	
		        <div class="col-6">
		        	<label class="control-label" for="creer" style="color: #36C545;font-size: 14px">Avez-vous un compte? sinon,</label>
		        	<button type="submit" class="btn btn-success" name="creer" value="creer">Créer un compte <img class="img-fluid" src="../../../../images/addU.png"></button>
		        </div>
		        </form>		        
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
          <h4 class="modal-title text-success"><img class="img-fluid" src="../../../../images/addUser.png">Création du compte</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 14px;">
					<?php 
					$f=$this->session->flashdata('fail');
					if($f!=""){
					?>
						<div class="alert alert-danger alert-dismissible fade show">
						    <button type="button" class="close" data-dismiss="alert">&times;</button>
						    <?php echo $f?>
					 	</div>
					<?php
					}
					?>
          <div class="container text-center" style="border: 2px solid #36C545;border-radius: 5px;"></br>
            <form class="form-horizontal" method="POST" action=<?php echo base_url().'Controlleur/creationCompte';?>>
		    <div class="form-group">
		    	<div class="row">
					<label class="control-label col-4" for="nomU" style="color: #36C545;">Immatricule:</label>
				    <div class="col-8" style="column-width: 400px;">
				    	<input type="text" class="form-control" placeholder="Entrez votre im" name="im" value=<?php echo $this->session->flashdata('im') ?>>
                        <span class="container text-left">
					    	<label class="control-label text-danger"><?php echo form_error('im'); ?></label> 
					    </span>                
				    </div>
			    </div></br>
		    	<div class="row">
					<label class="control-label col-4" for="nomU" style="color: #36C545;">Nom utilisateur:</label>
				    <div class="col-8" style="column-width: 400px;">
				    	<input type="text" class="form-control" placeholder="Entrez votre nom" name="nomU" value=<?php echo $this->session->flashdata('nomU')?>>
                        <span class="container text-left">
					    	<label class="control-label text-danger"><?php echo form_error('nomU'); ?></label> 
					    </span>                
				    </div>
			    </div></br>
		    	<div class="row">
			    	<label class="control-label col-4" for="pwd" onclick="verif()" style="color: #36C545;">Mot de passe:</label>
			    	<div class="col-8" style="column-width: 400px;">          
			        	<input type="password" class="form-control" id="pwdl" placeholder="Entrez votre mot de passe" name="mdp" value=<?php echo $this->session->flashdata('mdp')?>>
			        	<span class="container text-left">
					    	<label class="control-label text-danger"><?php echo form_error('mdp'); ?></label> 
					    </span>
			        	<br> 
			        	<input type="password" class="form-control" id="pwdl" placeholder="Confirmation" name="cmdp" value=<?php echo $this->session->flashdata('cmdp') ?>>
			        	<span class="container text-left">
					    	<label class="control-label text-danger"><?php echo form_error('cmdp'); ?></label> 
					    </span>
			    	</div>
			</div>     
		</div>		 
	  	</br></br> 	   
	</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          	<div class="btn-group">
		    	<div class="col-6">
		    		<button type="submit" class="btn btn-danger" id="connecter" name="annuler" value="annuler">Annuler <img class="img-fluid" src="../../../../images/cancel.png"></button>
		    	</div>
		        <div class="col-7">
		        	<button type="submit" class="btn btn-success" name="enregistrer" value="enregistrer">Enregistrer<img class="img-fluid" src="../../../../images/save.png"></button>
		        </div></form>		        
		    </div>
        </div>
        
      </div>
    </div>
</div>
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
			  		<a class="text-success nav-link" href="Acceuil.html"><img class="img-fluid" src="../../../../images/home.png">Acceuil</a>		
			    </li></span><br>
			    <span class="acceuil" style="width: 135px">
			    <li class="nav-item active">
			      <a class="text-success nav-link" href="#"><img class="img-fluid" src="../../../../images/addPers.png">Personnel</a>
			    </li></span><br>
			    <span class="acceuil" style="width: 135px>
			    <li class="nav-item">
			      <a class="text-success nav-link showMsg" onclick="document.getElementById('m').style.display='block'""><img class="img-fluid" src="../../../../images/user.png">Utilisateur</a>
			    </li></span><br>
			    <div class="drop acceuil" style="width: 135px">
			    <li class="nav-item">
				    <div class="dropdown dropright">
				    <a class="text-success nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
				    <div class="inherit">
				    	<div class="dropdown-menu ">
					      <a class="text-success dropdown-item" href="#"><img class="img-fluid" src="../../../../images/set.png">Parametres</a>
					      <a class="dropdown-item text-danger" href="#"><img class="img-fluid" src="../../../../images/dec.png">Déconnection</a>
					    </div>
				    </div>
				    
					</div>	
			    </li></div>
			  </ul>
			</nav>			
		</div>
	</div>
<?php 
	$action=$this->session->flashdata('action');
	if($action==="creer"){
	echo "<script>
		$('#Modal2').modal('show');
		$('#Modal1').modal('hide');
		</script>";
	}
    else{
    	echo"<script>
    	$('#Modal2').modal('hide');
		$('#Modal1').modal('show');
		</script>";
    }


?>
<script>
	$('#Modal1').modal({
    backdrop: 'static',
    keyboard: false
	})
	function openM2(){
		$('#Modal1').modal('hide');
		$('#Modal2').modal('show');
	}
</script>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_popover&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2019 12:31:27 GMT -->
</html>

