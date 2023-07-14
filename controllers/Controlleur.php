 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlleur extends CI_Controller {
	
	public function index(){
		$this->session->set_flashdata('fail',"");
		$this->load->view('gr/login');
	}
	public function acceuil(){
		$this->load->model('Model');
		$pers=$this->Model->allPers();
		$data=array(); 
		$data['pers']=$pers;
		foreach ($pers as $p){
			$rec=$this->Model->getR($p['im']);
			$d1=new DateTime();
			$d2=new DateTime($rec['dateR']);
			$a=$d2->diff($d1,true)->y;
			$m=$d2->diff($d1,true)->m;
			$j=$d2->diff($d1,true)->d;
			if ($d1>=$d2) {
				$this->session->set_userdata($p['im']."im",'../../../../images/no.png');
			}
			if ($a===0) {
				if ($m<3) {
					$this->session->set_userdata($p['im']."im",'../../../../images/ouired.png');
				}
				if ($m===0 && $j<=1) {
					$this->session->set_userdata($p['im']."im",'../../../../images/no.png');
				}
				else{
					$this->session->set_userdata($p['im']."im",'../../../../images/ela.png');
				}
				
			}
			else{
				$this->session->set_userdata($p['im']."im",'../../../../images/ela.png');
			}
		}

		
		$this->load->view('gr/acceuil',$data);
	}
	public function personnel(){
		$this->load->model('Model');
		$grade=$this->Model->allGrade();
		$data=array(); 
		$data['grade']=$grade;
		$this->load->view('gr/personnel',$data);
	}
	public function modif(){
		$this->load->model('Model');
		$pers=$this->Model->allPers();
		$grade=$this->Model->allGrade();
		$data=array();
		$data['grade']=$grade;
		foreach ($pers as $p){
			if(!$this->input->post("m".$p['im'])==""){
				$this->session->set_userdata('op','modification');
				$this->session->set_flashdata('im1',$p['im']);
				$this->session->set_userdata('imm',$p['im']);
				$this->session->set_flashdata('cin',$p['cin']);
				$this->session->set_flashdata('nom',$p['nom']);
				$this->session->set_flashdata('prenoms',$p['prenoms']);
				$this->session->set_flashdata('dateNaiss',$p['dateNaiss']);
				$this->session->set_flashdata('aa',$p['aa']);
				$this->session->set_flashdata('indice',$p['indice']);
				$this->session->set_flashdata('lt',$p['lt']);
				$this->session->set_flashdata('dateE',$p['dateE']);
				$this->session->set_userdata('dateEm',$p['dateE']);
				$this->session->set_flashdata('ad',$p['ad']);
				$this->session->set_flashdata('tel',$p['tel']);
				if($p['sm']==="Célibataire"){
					$this->session->set_flashdata('c','selected');
				}
				if($p['sm']==="Marié(e)"){
					$this->session->set_flashdata('m','selected');
				}
				if($p['sm']==="Divorcé(e)"){
					$this->session->set_flashdata('d','selected');
				}
				if($p['sm']==="Veuf(ve)"){
					$this->session->set_flashdata('v','selected');
				}
				$this->session->set_flashdata('disabled','disabled');
				$this->session->set_flashdata($p['st'],'selected');
				$this->session->set_flashdata($p['grade'],'selected');
				$this->session->set_flashdata($p['categorie'],'selected');
				$this->load->view('gr/personnel',$data);
			}
			if(!$this->input->post("v".$p['im'])==""){
				//$d=date("Y/m/d");
				$this->session->set_userdata('imv',$p['im']);
				$rec=$this->Model->getR($p['im']);
				$d1=new DateTime();
				$d2=new DateTime($rec['dateR']);
				if ($d2>$d1) {
					$this->session->set_flashdata('dt',$rec['dateR']);
					$this->session->set_flashdata('verif',"il reste ".$d2->diff($d1,true)->y." ans ".$d2->diff($d1,true)->m."mois et ".$d2->diff($d1,true)->d." jours avant le prochain avancement de mr/mme ".$p['nom']." ".$p['prenoms']);
					$pers=$this->Model->allPers();
					$data=array(); 
					$data['pers']=$pers;
					$this->load->view('gr/acceuil',$data);
				}
				else{
					$this->session->set_flashdata('dt',$rec['dateR']);
					$this->session->set_flashdata('verif','');
					$this->session->set_flashdata('verif2','');
					$this->session->set_flashdata('verif2',"il est passée ".$d2->diff($d1,true)->y." ans ".$d2->diff($d1,true)->m."mois et ".$d2->diff($d1,true)->d." jours depuis le jours d'avancement de mr/mme ".$p['nom']." ".$p['prenoms'].", voulez-vous mettre à jours ces information?");
					$pers=$this->Model->allPers();
					$data=array(); 
					$data['pers']=$pers;
					$this->load->view('gr/acceuil',$data);
				}
				//echo $d2->diff($d1,true)->y." ".$d2->diff($d1,true)->m." ".$d2->diff($d1,true)->d;
			}
			if(!$this->input->post("s".$p['im'])==""){
				$this->session->set_flashdata('ns',$p['nom']." ".$p['prenoms']);
				$this->session->set_flashdata('affichemod','oui');
				$this->session->set_userdata('ims',$p['im']);
				$pers=$this->Model->allPers();
				$data=array(); 
				$data['pers']=$pers;
				$this->load->view('gr/acceuil',$data);
				
			}

			
		}
	}
	public function creationCompte(){
		if(!$this->input->post('enregistrer')==""){
			$this->form_validation->set_rules('im','Immatricule','required');
			$this->form_validation->set_rules('nomU','Nom utilisateur','required');
			$this->form_validation->set_rules('mdp','Mot de passe','required');
			$this->form_validation->set_rules('cmdp','Confirmation mot de passe','required');
			if($this->form_validation->run()==false){
				$this->load->view('gr/login');
			}
			else{
				$this->load->model('Model');
				$table=array();
				$table['im']=$this->input->post('im');
				$table['nomU']=$this->input->post('nomU');
				$table['mdp']=$this->input->post('mdp');
				$pers=$this->Model->getPers($table['im']);
				$ut=$this->Model->getUt($table['im']);
				if ($pers===null) {
					$this->session->set_flashdata('im',$this->input->post('im'));
					$this->session->set_flashdata('nomU',$this->input->post('nomU'));
					$this->session->set_flashdata('mdp',$this->input->post('mdp'));
					$this->session->set_flashdata('cmdp',$this->input->post('cmdp'));
					$this->session->set_flashdata('fail','Immatricule non valide');
					$this->load->view('gr/login');
				}
				else{
					if ($ut===null) {
						if ($table['mdp']!=$this->input->post('cmdp')) {
							$this->session->set_flashdata('im',$this->input->post('im'));
							$this->session->set_flashdata('nomU',$this->input->post('nomU'));
							$this->session->set_flashdata('mdp',$this->input->post('mdp'));
							$this->session->set_flashdata('cmdp',$this->input->post('cmdp'));
							$this->session->set_flashdata('fail','Confirmation du mot de passe incorrect');
							$this->load->view('gr/login');
											
						}
						else{
							$this->Model->insertU($table);
							$this->session->set_flashdata('action','');
							$this->session->set_flashdata('fail','');
							$this->session->set_flashdata('nomU','');
							$this->session->set_flashdata('mdp','');
							$this->session->set_flashdata('cmdp','');
							$this->session->set_flashdata('alert','Création du compte effectuée, connectez-vous');
							$this->session->set_flashdata('im',$table['im']);
							$this->load->view('gr/login');	
						}
					}
					else{
						$this->session->set_flashdata('im',$this->input->post('im'));
						$this->session->set_flashdata('nomU',$this->input->post('nomU'));
						$this->session->set_flashdata('mdp',$this->input->post('mdp'));
						$this->session->set_flashdata('cmdp',$this->input->post('cmdp'));
						$this->session->set_flashdata('fail','Cette immatricule est liée à un compte existant');
						$this->load->view('gr/login');
					} 

				}						
					
			
			}
		}
			if(!$this->input->post('annuler')==""){
				$this->session->set_flashdata('action','');
				$this->session->set_flashdata('im','');
				$this->session->set_flashdata('nomU','');
				$this->session->set_flashdata('mdp','');
				$this->session->set_flashdata('cmdp','');
				$this->load->view('gr/login');
			}
		
	}
	public function ajoutPers(){
		if(!$this->input->post('enregistrer')==""){
			if ($this->session->userdata('op')==="modification") {
				$this->form_validation->set_rules('cin','Cin','required');
				$this->form_validation->set_rules('nom','Nom','required');
				$this->form_validation->set_rules('prenoms','Prenoms','required');
				$this->form_validation->set_rules('dateNaiss','Date de naissance','required');
				$this->form_validation->set_rules('aa','Attribution actuelle','required');
				$this->form_validation->set_rules('indice','Indice','required');
				$this->form_validation->set_rules('lt','Lieu de travail','required');
				$this->form_validation->set_rules('ad','Adresse','required');
				$this->form_validation->set_rules('tel','Numéro téléphone','required');
				if($this->form_validation->run()==false){
					$this->load->view('gr/personnel');
				}
				else{
					$this->load->model('Model');
					$table=array();
					$rec=array();
					$im=$this->session->userdata('imm');
					$table['cin']=$this->input->post('cin');
					$table['nom']=$this->input->post('nom');
					$table['prenoms']=$this->input->post('prenoms');
					$table['dateNaiss']=$this->input->post('dateNaiss');
					$table['aa']=$this->input->post('aa');
					$table['grade']=$this->input->post('grade');
					$table['categorie']=$this->input->post('categorie');
					$table['indice']=$this->input->post('indice');
					$table['lt']=$this->input->post('lt');
					$table['dateE']=$this->session->userdata('dateEm');
					$table['ad']=$this->input->post('ad');
					$table['tel']=$this->input->post('tel');
					$table['sm']=$this->input->post('sm');
					$table['st']=$this->input->post('st');

					$pers1=$this->Model->getPers($im);
					if ($pers1['grade']!=$table['grade']) {
						$grade1=$this->Model->getGrade($table['grade']);
						$reclassement=$this->Model->getR($im);
						$dateR=$reclassement['dateR'];
						$annee=strrev(substr(strrev($dateR),6));
						$grade=$this->Model->getGrade($table['grade']);
						$rec['num']=$grade1['num']+1;
						$rec['dateR']=$annee+$grade1['duree'].substr($dateR,4);
						$this->Model->updateR($im,$rec);
						$this->Model->updatePers($im,$table);
						$this->session->set_flashdata('alert','Modification effectué');
						$pers=$this->Model->allPers();
						$data=array(); 
						$data['pers']=$pers;
						$this->session->set_userdata('op','');
						$this->load->view('gr/acceuil',$data);

					}
					else{
						$this->Model->updatePers($im,$table);
						$this->session->set_flashdata('alert','Modification effectué');
						$pers=$this->Model->allPers();
						$data=array(); 
						$data['pers']=$pers;
						$this->session->set_userdata('op','');
						$this->load->view('gr/acceuil',$data);
					}

					
				}
			}
			else{
				$this->form_validation->set_rules('im','Immatricule','required');
				$this->form_validation->set_rules('cin','Cin','required');
				$this->form_validation->set_rules('nom','Nom','required');
				$this->form_validation->set_rules('prenoms','Prenoms','required');
				$this->form_validation->set_rules('dateNaiss','Date de naissance','required');
				$this->form_validation->set_rules('aa','Attribution actuelle','required');
				$this->form_validation->set_rules('indice','Indice','required');
				$this->form_validation->set_rules('lt','Lieu de travail','required');
				$this->form_validation->set_rules('dateE','dateE','required');
				$this->form_validation->set_rules('ad','Adresse','required');
				$this->form_validation->set_rules('tel','Numéro téléphone','required');
				if($this->form_validation->run()==false){
					$this->load->view('gr/personnel');
				}
				else{
					$this->load->model('Model');
					$table=array();
					$rec=array();
					$table['im']=$this->input->post('im');
					$table['cin']=$this->input->post('cin');
					$table['nom']=$this->input->post('nom');
					$table['prenoms']=$this->input->post('prenoms');
					$table['dateNaiss']=$this->input->post('dateNaiss');
					$table['aa']=$this->input->post('aa');
					$table['grade']=$this->input->post('grade');
					$table['categorie']=$this->input->post('categorie');
					$table['indice']=$this->input->post('indice');
					$table['lt']=$this->input->post('lt');
					$dateE=$table['dateE']=$this->input->post('dateE');
					$table['ad']=$this->input->post('ad');
					$table['tel']=$this->input->post('tel');
					$table['sm']=$this->input->post('sm');
					$table['st']=$this->input->post('st');
					$annee=strrev(substr(strrev($dateE),6));
					$grade=$this->Model->getGrade($table['grade']);
					$rec['im']=$table['im'];
					$rec['num']=$grade['num']+1;
					$rec['dateR']=$annee+$grade['duree'].substr($dateE,4);
					$this->Model->insertPers($table);
					$this->Model->insertR($rec);
					$this->session->set_flashdata('alert','Enregistrement effectué');
					$pers=$this->Model->allPers();
					$data=array(); 
					$data['pers']=$pers;
					$this->load->view('gr/acceuil',$data);
				}
			}
			
			
		}
		if(!$this->input->post('annuler')==""){
			$d1=new DateTime();
			$d2=new DateTime('22-05-2022');
			echo $d1->diff($d2,false)->d;

		}
		

	}
	public function supprimerPers(){
		$this->load->model('Model');
		$this->Model->deleteU($this->session->userdata('ims'));
		$this->Model->deleteR($this->session->userdata('ims'));
		$this->Model->deleteP($this->session->userdata('ims'));
		$this->session->set_flashdata('affichemod','');
		$this->session->set_flashdata('alert','Suppréssion effectuée');
		$pers=$this->Model->allPers();
		$data=array(); 
		$data['pers']=$pers;
		$this->load->view('gr/acceuil',$data);
	}
	public function miseajour(){
		$this->load->model('Model');
		$p=$this->Model->getPers($this->session->userdata('imv'));
		$grade=$this->Model->allGrade();
		$data=array(); 
		$data['grade']=$grade;
		$this->session->set_userdata('op','modification');
				$this->session->set_flashdata('im1',$p['im']);
				$this->session->set_userdata('imm',$p['im']);
				$this->session->set_flashdata('cin',$p['cin']);
				$this->session->set_flashdata('nom',$p['nom']);
				$this->session->set_flashdata('prenoms',$p['prenoms']);
				$this->session->set_flashdata('dateNaiss',$p['dateNaiss']);
				$this->session->set_flashdata('aa',$p['aa']);
				$this->session->set_flashdata('indice',$p['indice']);
				$this->session->set_flashdata('lt',$p['lt']);
				$this->session->set_flashdata('dateE',$p['dateE']);
				$this->session->set_userdata('dateEm',$p['dateE']);
				$this->session->set_flashdata('ad',$p['ad']);
				$this->session->set_flashdata('tel',$p['tel']);
				if($p['sm']==="Célibataire"){
					$this->session->set_flashdata('c','selected');
				}
				if($p['sm']==="Marié(e)"){
					$this->session->set_flashdata('m','selected');
				}
				if($p['sm']==="Divorcé(e)"){
					$this->session->set_flashdata('d','selected');
				}
				if($p['sm']==="Veuf(ve)"){
					$this->session->set_flashdata('v','selected');
				}
				$this->session->set_flashdata('disabled','disabled');
				$this->session->set_flashdata($p['st'],'selected');
				$this->session->set_flashdata($p['grade'],'selected');
				$this->session->set_flashdata($p['categorie'],'selected');
				$this->load->view('gr/personnel',$data);
	}
	public function connecter(){
		if(!$this->input->post('connecter')==""){
			$this->form_validation->set_rules('imU','Immatricule','required');
			$this->form_validation->set_rules('mdp','Mot de passe','required');
			if($this->form_validation->run()==false){
				$this->load->view('gr/login');
			}
			else{
				$this->load->model('Model');
				$table=array();
				$im=$this->input->post('imU');
				$mdp=$this->input->post('mdp');
				$ut=$this->Model->getUt($im);
				if ($ut===null) {
					$this->session->set_flashdata('im',$im);
					$this->session->set_flashdata('mdp',$mdp);
					$this->session->set_flashdata('alertc','Aucun compte associé à cette immatricule');
					$this->load->view('gr/login');
				}
				else{
					if($mdp===$ut['mdp']){
						$this->load->model('Model');
						$pers=$this->Model->allPers();
						$this->session->set_userdata('imU',$im);
						$this->session->set_userdata('mdp',$mdp);
						$this->session->set_userdata('pdp',$ut['pdp']);
						$data=array(); 
						$data['pers']=$pers;
						redirect(base_url().'Controlleur/acceuil');
						echo "<script>
							alert('Connexion réussie');
							</script>";

					}
					else{
						$this->session->set_flashdata('im',$im);
						$this->session->set_flashdata('mdp',$mdp);
						$this->session->set_flashdata('alertc','Mot de passe incorrect');
						$this->load->view('gr/login');
					}
				}

			}
		}
		if(!$this->input->post('creer')==""){
			$this->session->set_flashdata('action','creer');
			$this->load->view('gr/login');
		}
	}
	public function param(){
		$this->load->model('Model');
		$data=array(); 
		$tab=array(); 
		if ($this->input->post('pdp')==="" && $this->input->post('mdp')==="") {
			$this->session->set_flashdata('alert','Aucune modification');
			$pers=$this->Model->allPers();
			$data['pers']=$pers;
			$this->load->view('gr/acceuil',$data);
		}
		elseif($this->input->post('pdp')==="" && $this->input->post('mdp')!="") {
			$tab['pdp']=$this->session->userdata('pdp');
			$tab['mdp']=$this->input->post('mdp');	
			$this->session->set_flashdata('alert','Modification effectué');
			$this->session->set_userdata('mdp',$this->input->post('mdp'));
			$this->session->set_userdata('pdp',$tab['pdp']);
			$this->Model->updateU($this->session->userdata('imU'),$tab);
			$pers=$this->Model->allPers();
			$data['pers']=$pers;
			$this->load->view('gr/acceuil',$data);
		}
		elseif(!$this->input->post('pdp')==="" && $this->input->post('mdp')==="") {
			$tab['mdp']=$this->session->userdata('mdp');
			$tab['pdp']="../../../../images/".$this->input->post('pdp');	
			$this->session->set_flashdata('alert','Modification effectué');
			$this->session->set_userdata('mdp',$this->input->post('mdp'));
			$this->session->set_userdata('pdp',$tab['pdp']);
			$this->Model->updateU($this->session->userdata('imU'),$tab);
			$pers=$this->Model->allPers();
			$data['pers']=$pers;
			$this->load->view('gr/acceuil',$data);
		}
		else{
			$tab['pdp']="../../../../images/".$this->input->post('pdp');
			$tab['mdp']=$this->input->post('mdp');	
			$this->session->set_flashdata('alert','Modification effectué');
			$this->session->set_userdata('mdp',$this->input->post('mdp'));
			$this->session->set_userdata('pdp',$tab['pdp']);
			$this->Model->updateU($this->session->userdata('imU'),$tab);
			$pers=$this->Model->allPers();
			$data['pers']=$pers;
			$this->load->view('gr/acceuil',$data);
		}
			
		
	}
	public function aff(){
		$this->load->model('Model');
		$this->session->set_flashdata('affP',"<script>
		$('#profil').modal('show');
		</script>");
		$pers=$this->Model->allPers();
		$data['pers']=$pers;
		$this->load->view('gr/acceuil',$data);
	}
	public function aff1(){
		$this->session->set_flashdata('affP1',"<script>
		$('#profil').modal('show');
		</script>");
		$this->load->view('gr/personnel');
	}
	public function nmsg(){
		$this->load->model('Model');
		$data1=array();
		$ut=$this->Model->allUt();
		$data1['ut']=$ut;
		foreach($ut as $ut){
			if(!$this->input->post($ut['im'])==""){
				$this->session->set_flashdata('afmsg',"<script>
				$('#msg').modal('show');
				</script>");
				$this->session->set_userdata('imR',$ut['im']);
				$this->session->set_userdata('nomR',$ut['nomU']);
				$this->session->set_userdata('pdpR',$ut['pdp']);
				$pers=$this->Model->allPers();
				$data['pers']=$pers;
				$this->load->view('gr/acceuil',$data);
			}
					
		}
	}
	

	
}
