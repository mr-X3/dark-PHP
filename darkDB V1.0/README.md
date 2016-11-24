	//-----------------------------------------------------------------------------------------
	//prepare_select(requette,tableau des valeurs);
	//prends en entree la requette et le Tablo des valeurs
	//UTILISATION: prepare_select('SELECT asddadsad WHERE DE=?, AS=?',array($DE,$AS));
	//Ou version mini:
	//	p_s(requette,tableau des valeurs);
	// retourne $d du $d=$R->fetch();
	//-----------------------------------------------------------------------------------------
	
	
	//-----------------------------------------------------------------------------------------
	//query_select(requette,tableau des valeurs);
	//prends en entree la requette 
	//UTILISATION: query_select('SELECT asddadsad WHERE DE=?, AS=?');
	//retourne $d du $d=$R->fetch();
	//-----------------------------------------------------------------------------------------
	
	
	//-----------------------------------------------------------------------------------------
	//prepare_select_while(requette,tableau des valeurs);
	//prends en entree la requette et le Tablo des valeurs
	//utilisation: prepare_select_while('SELECT asddadsad WHERE DE=?, AS=?',array($DE,$AS));
	//Retourne $R du $R->execute($arr); pour etre utiliser dans une boucle
	//-----------------------------------------------------------------------------------------
	
	
	//-----------------------------------------------------------------------------------------
	//query_select_while(requette,tableau des valeurs);
	//prends en entree la requette 
	//utilisation: query_select_while('SELECT asddadsad WHERE DE=?, AS=?');
	//Retourne $R du $R->execute($arr); pour etre utiliser dans une boucle
	//-----------------------------------------------------------------------------------------
	
	
	//-----------------------------------------------------------------------------------------
	//insert(requette,tableau des valeurs);
	//prends en entree la requette et le Tablo de valeurs
	//Version mini: i(requette,tableau des valeurs);
	//Ne Retourne Rien
	//-----------------------------------------------------------------------------------------
	
	
	//-----------------------------------------------------------------------------------------
	//update(requette,tableau des valeurs);
	//prends en entree la requette et le Tablo de valeurs
	//Version mini: u(requette,tableau des valeurs);
	//Ne Retourne Rien
	//-----------------------------------------------------------------------------------------	

	//-----------------------------------------------------------------------------------------
	//delete(requette,tableau des valeurs);
	//prends en entree la requette et le Tablo de valeurs
	//Version mini: d(requette,tableau des valeurs);
	//Ne Retourne Rien
	//-----------------------------------------------------------------------------------------
