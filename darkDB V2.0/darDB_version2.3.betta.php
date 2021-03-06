<?php 

/*	Salut les codeur, g passe en 2.3, j'ai fais 2 3 modifs kan mm dangereuses mais pluto utiles
*	Dark est une librairie de manipulation des actions sur base de donnees
*	Librairie Creer par Sanix le 18/10/2016 vers 01h 41,
*	....C'est fou q j'ai sommeil mais j'adore Coder
*	Cette Librarie a ete creer pour alleger le work des manipulations avec la base de donnees en PHP
*	Cette librarie est purement OPEN SOURCE, vous pourrez donc faire toutes vos modifs et utiliser comme bon vous semble
*/

/* ***********************************************Dark PHP VERSION 2***********************************************************/

class darkDB {
	//J'ai mon joli constructeur
	function __construct(){
		// configuration d la base de donnees
		$dbHost = 'localhost';
		$dbUsername = 'root';
		$dbPassword = '';
		$dbName = '';
		
		// Connection a la database
		$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
		if($conn->connect_error){
			die("oups ndem ++ pas possible de se connecter a MySQL: " . $conn->connect_error);
		}else{
			$this->darkDB = $conn;
		}
	}

	//Pour une simple rekette
	public void reket($reket){
		$this->darkDB->query($reket);
	}
	//Version mini
	public void r($reket){
		$this->darkDB->query($reket);
	}
	
	//Faire une RECHERCHE dans la base de donnees avec le mot et la table ki retourne le tablo 
	public function fouille($table,$element_entree,$champ,$critere){
		$req = 'SELECT * FROM '.$table.' WHERE ';
		$mots = explode(' ',$element);
			foreach($mots as $mot){
				$req .= $champ.' LIKE "%'.$mot.'%" ';
			}
				$req.=$critere;
		$query = $this->darkDB->query($req);
		$result = $query->fetch_assoc();
		if($result){
			return $result;
		}else{
			return false;
		}
	}
	//Version mini
	public function f($table,$element_entree,$champ,$critere){
		$req = 'SELECT * FROM '.$table.' WHERE ';
		$mots = explode(' ',$element);
			foreach($mots as $mot){
				$req .= $champ.' LIKE "%'.$mot.'%" ';
			}
				$req.=$critere;
		$query = $this->darkDB->query($req);
		$result = $query->fetch_assoc();
		if($result){
			return $result;
		}else{
			return false;
		}
	}
	
	
	//Retourne le dernier element ki a ete enregistrer dans une table d'une Table
	public function derniereLigne($tableName,$ID){
		$sql = "SELECT * FROM ".$tableName." ORDER BY ".$ID." DESC LIMIT 1";
		$query = $this->darkDB->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			return $result;
		}else{
			return false;
		}
	}
	//Version mini
	public function dL($tableName,$ID){
		$sql = "SELECT * FROM ".$tableName." ORDER BY ".$ID." DESC LIMIT 1";
		$query = $this->darkDB->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			return $result;
		}else{
			return false;
		}
	}
	
	
	//Calcul le total dans une table(pas besoin d'ecrire une requete) en plus avec un critere de selection facultatif(EX WHERE ID=23)
	public function total($tableName,$critere){
		if(!isset($critere))
			$critere="";
		$sql = "SELECT COUNT(*) FROM ".$tableName." ".$critere;
		$query = $this->darkDB->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			return $result;
		}else{
			return false;
		}
	}
	//Version mini
	public function t($tableName,$critere){
		if(!isset($critere))
			$critere="";
		$sql = "SELECT COUNT(*) FROM ".$tableName$critere;
		$query = $this->darkDB->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			return $result;
		}else{
			return false;
		}
	}
	
	//Retourne les elements similaires entre plusieurs table dernier element ki a ete enregistrer dans une table d'une Table
	public function simil_table_jointures($tableName,$tableName2){
		$sql = "SELECT * FROM ".$tableName." ORDER BY ".$ID." DESC LIMIT 1";
		$query = $this->darkDB->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			return $result;
		}else{
			return false;
		}
	}
	//Version mini
	public function stj($tableName,$tableName2){
		$sql = "SELECT * FROM ".$tableName." ORDER BY ".$ID." DESC LIMIT 1";
		$query = $this->darkDB->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			return $result;
		}else{
			return false;
		}
	}
	
	//Pour inserer dans une base de donnees
	public function insert($tablo_noms_champs,$tablo_valeurs_champs){
		$sql = "INSERT INTO ".$tableName." (".$tablo_noms_champs.") VALUES('".$tablo_valeurs_champs."')";
		if($this->darkDB->query($sql)){
			return $this->darkDB->insert_id;
		}else{
			return $this->darkDB->error;
		}
	}
	//Version mini
	public function i($tablo_noms_champs,$tablo_valeurs_champs){
		$sql = "INSERT INTO ".$tableName." (".$tablo_noms_champs.") VALUES('".$tablo_valeurs_champs."')";
		if($this->darkDB->query($sql)){
			return $this->darkDB->insert_id;
		}else{
			return $this->darkDB->error;
		}
	}
	
	
	//Pour modifier un champ dans une base donnees
	public function update($tableName,$champ,$valeur,$critere){
		$sql = "UPDATE ".$tableName." SET ".$champ." = '".$valeur."' ".$critere;
		$this->darkDB->query($sql);
		return true;
	}
	//version mini
	public function u($tableName,$champ,$valeur,$critere){
		$sql = "UPDATE ".$tableName." SET ".$champ." = '".$valeur."' ".$critere;
		$this->darkDB->query($sql);
		return true;
	}
	
	
	//Pour supprimer un champ dans une base donnees
	public function delete($tableName,$critere){
		$sql = "UPDATE ".$tableName." SET ".$champ." = '".$valeur."' ".$critere;
		$this->darkDB->query($sql);
		return true;
	}
	//version mini
	public function d($tableName,$critere){
		$sql = "DELETE FROM ".$tableName." ".$critere;
		$this->darkDB->query($sql);
		return true;
	}
}
?>
