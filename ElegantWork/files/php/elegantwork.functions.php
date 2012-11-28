<?php


/*
	***** Class List *****
	
	*	time
		* timestamp2date()
		
	*	data
		* select()
		* select_connection()
		* select_one()
		* select_where_id()
		* insert()
		* update()
		* update_where_id()
		* delete()
		* delete_where_id()
		
	*	uploads
		* multiple()
		
	*	mails
		* send()
		
	*	ewk
		* no_accents()
		* urlencode()
*/

class time {
	function timestamp2date($timestamp, $date ='d/m/Y G:i:s') {
		return date($date, $timestamp);
	}
}
class data {
	function __construct() {
		$this->bdd = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD) or die(print_r($bdd->errorInfo()));
		$this->bdd->exec('SET NAMES utf8');
	}
	
	/* Select fonctions 
		
		***** How to use *****
		
		$select = new data();
		$data = $select->select('table_name');
		foreach ($data as $line):
			echo $line['col_name'];
		endforeach;
		
	*/
	function select($table, $where = '', $limit = ''){
			$prepare = "SELECT ";
			$prepare .= ' * ';
			$prepare .= ' FROM `'.$table.'` ';
			
			if($where != ''):
				foreach($where as $colum => $value):
					$wheres[] = ' `'.$colum.'` LIKE '."'".$value."' ";
				endforeach;
				$wheres = implode(',', $wheres);
				
				$prepare .= ' WHERE '.$wheres.' ';
			endif;
			
			if($limit != ''):
				$prepare .= ' LIMIT '.$limit.';';
			endif;
			
			$this->mlt_select = $this->bdd->prepare($prepare);
        	$this->mlt_select->execute();
        	return $this->mlt_select->fetchAll();
	}
	/* Select with connection table fonctions 
		
		***** How to use *****
		
		
		$select = new data();
		$where_connection_table = array(  'games_id' => '2');
		$table_connection = 'connection';  								//************ Table format |id|games_id|category_id|
		$table_connected = 'category'; 									//************ Table format |id|category_name|description|link|
		
		$data = $select->select_connection($table_connection, $where_connection_table, $table_connected);
		foreach ($data as $colum):
				echo $colum['colum_name'].'<br/>';
		endforeach;
		
	*/
	function select_connection($table_connection, $where_connection_table, $table_connected) {
		
		$data = $this->select($table_connection,$where_connection_table);
		foreach ($data as $connection):
			 $table[] = $this->select($table_connected,array(  'id' => $connection['id']));
		endforeach;
		foreach ($table as $line):
			foreach ($line as $clean):
				 $clean_table[] = $clean;
			endforeach;
		endforeach;
		
		return $clean_table;
	}
	function select_one($table, $where = '', $what = ' * ') {
		return $this->select($table, $where, $what, '0,1');
	}
	function select_where_id($table, $id = '') {
		return $this->select($table, "`id`= $id", ' * ', '0,1');
	}
	
	/* Insert fonctions 
		
		***** How to use *****
		
		$data = new data();
		$what = array(  'name of yours colum' => 'value to insert');
		$id = $data->insert('table_name', $what);
		
		// Return the id of the last insered element
	*/
	
	function insert($table, $what) {

			foreach($what as $colum => $value):
				$colum_names[] = '`'.$colum.'`';
				$value_names[] = "'".$value."'";
			endforeach;
			
			$colums = ' ('.implode(',', $colum_names).') ';
			$values = ' ('.implode(',', $value_names).') ';
			
			$prepare = "INSERT INTO ";
			$prepare .= ' `'.$table.'` ';
			$prepare .= $colums;
			$prepare .= ' VALUES ';
			$prepare .= $values;
			
			$this->bdd->exec($prepare);
			
			return $this->bdd->lastInsertId();
	}
	
	/* Update fonctions 
		
		***** How to use *****
		
		$data = new data();
		$what = array(  'name' => 'new name');
		$where = array(  'id' => '123');
		$data->update('table_name', $what, $where);
		
		// Return the number of updated elements
	*/
	function update($table, $what, $where) {

			foreach($what as $colum => $value):
				$whats[] = ' `'.$colum.'` = '."'".$value."' ";
			endforeach;
			$whats = implode(',', $whats);
			
			
			foreach($where as $colum => $value):
				$wheres[] = ' `'.$colum.'` LIKE '."'".$value."' ";
			endforeach;
			$wheres = implode(',', $wheres);
			
			$prepare = "UPDATE ";
			$prepare .= ' `'.$table.'` ';
			$prepare .= " SET ";
			$prepare .= $whats;
			$prepare .= ' WHERE ';
			$prepare .= $wheres;
			
			return $this->bdd->exec($prepare);
	}
	function update_where_id($table, $what, $id = '') {
		return $this->update($table, $what, array('id' => $id));
	}
	
	/* Delete fonctions 
		
		***** How to use *****
		
		$data = new data();
		$where = array(  'id' => '123');
		$id = $data->delete('table_name', $where);
		
		// Return the number of deleted elements
	*/
	
	function delete($table, $what) {

			foreach($what as $colum => $value):
				$where[] = ' `'.$colum.'` LIKE '."'".$value."' ";
			endforeach;
			
			$where = implode(',', $where);
			
			$prepare = "DELETE FROM ";
			$prepare .= ' `'.$table.'` ';
			$prepare .= ' WHERE ';
			
			$prepare .= $where;

			return $this->bdd->exec($prepare);
			
	}
	function delete_where_id($table, $id = '') {
		return $this->delete($table, array('id' => $id));
	}
	
}

class uploads {

	/* Multiple uploads fonctions
		
		***** How to use *****
		
		if(!empty($_POST)):
			$upload = new uploads();
			$array = TRUE;  // ---> TRUE or FALSE; return type given TRUE = array; FALSE = string
			$files_name = $upload->multiple('files',$array);
		endif;
		
		// Return the name of uploaded elements
	*/
	function multiple($input_name, $array = FALSE) {
		if(isset($_FILES[$input_name])):
				$date = date('Y-m-d-G-i-s');
				$folder = './files/uploads/'.$date.'/';
				$files_index = $_FILES[$input_name];
				
				foreach($files_index['name'] as $index => $file):
				    $filename = basename($files_index['name'][$index]);
				    @mkdir($folder); //@
				    if(file_exists($folder.'/'. $filename)){
				       // $data = "File already exists!"; //Si le fichier existe déjà on renvoie une erreur
				        $data = "Error, file already exist...";
				    }
				    //Si l'upload a réussi et que le fichier est correctement posé sur le serveur
				    else if (@move_uploaded_file($files_index['tmp_name'][$index], $folder.'/'. $filename)) { //@
				    }
				    //Si l'upload du fichier à échoué
				    else {
				        $data = "Error when uploading..."; 
				    }
				    
				    $files_names[] = $date.'/'. $filename;
				endforeach;            
				
			$files = implode($files_names, ';');
				
		    /*if(isset ($data) && !empty ($data)) {
		        echo $data;
		    }*/
		    if($array == FALSE):
		    	return $files;
	    	else:
	    		return $files_names;
	    	endif;
		endif;
			
	}
}

class mails {
	/* Mailing fonctions
		
		***** How to use *****
		
			$mailing = new mails();
			$mailing->send('to@email.com',$subject, $html);
			
		// Edit NAME and EMAIL constants on define.php
		// Return TRUE or FALSE
	*/
	function send($to, $subject, $html) {
        $headers ='From: "'.NAME.'" <'.EMAIL."> \n"; 
        $headers .='Reply-To: '.EMAIL."\n"; 
        $headers .='Content-Type: text/html; charset="UTF-8"'."\n"; 
        $headers .='Content-Transfer-Encoding: 8bit'; 
        
        $subject = ewk::no_accents($subject);
        
        return mail($to, $subject, $html, $headers);
    }

}

class ewk {
	
	function test_var($var) {
			if (isset($var)):
				return '<span class="label"><i class="icon-ok icon-white"></i></span> '.($var);
			else:
				return '<span class="label"><i class="icon-remove icon-white"></i> Undefined</span>';
			endif;
	}
	function no_accents($url){
    
		$url=(trim(stripslashes($url)));
		
		//--deleted characters.
		$url=str_replace(array('…','«','«','»','»','!','?','"','/','\\',':','#','@','§','.',',','%','<','>','+','=','¨','*','£','`','°'),'',$url);
		
		//--replaced characters.
		$url=str_replace(array('à','â','ä','À','Á','Â','Ã','Ä'),'a',$url);
		$url=str_replace(array('ë','È','É','Ê','Ë','ê','è','é'),'e',$url);
		$url=str_replace(array('Ç','ç'),'c',$url);
		$url=str_replace(array('ï','î','Ì','Í','Î','Ï'),'i',$url);
		$url=str_replace(array('Ñ'),'n',$url);
		$url=str_replace(array('û','ü','Ù','Ú','Ü','Û'),'u',$url);
		$url=str_replace(array('Ÿ','Ý'),'y',$url);
		$url=str_replace(array('ô','ö','Ò','Ó','Ô','Õ','Ö'),'o',$url);
		$url=str_replace(array('Š','š'),'s',$url);
		
		//--Edited
		$url=str_replace('$','dollar',$url);
		$url=str_replace('©','copyright',$url);
		$url=str_replace('®','registred',$url);
		$url=str_replace('œ','oe',$url);
		$url=str_replace('æ','ae',$url);
		
		$url=str_replace('&', 'et', $url);
		$url=str_replace('€','euros',$url);
		
		//-- Edited
		$url = strtolower($url);
		$url = trim($url);
		$url=str_replace('--','-',$url);
		$url=str_replace('--','-',$url);
		
		return $url;
	}
	function urlencode($url){
		$url=(trim(stripslashes($url)));
		//--deleted characters.
		$url=str_replace(array('…','«','«','»','»','!','?','"','/','\\',':','#','@','§','.',',','%','<','>','+','=','¨','*','£','`','°'),'',$url);

		    
		//--replaced characters.
		$url=str_replace(array(' ',"'",'’','(',')','_','--'),'-',$url);
		$url=str_replace(array('à','â','ä','À','Á','Â','Ã','Ä'),'a',$url);
		$url=str_replace(array('ë','È','É','Ê','Ë','ê','è','é'),'e',$url);
		$url=str_replace(array('Ç','ç'),'c',$url);
		$url=str_replace(array('ï','î','Ì','Í','Î','Ï'),'i',$url);
		$url=str_replace(array('Ñ'),'n',$url);
		$url=str_replace(array('û','ü','Ù','Ú','Ü','Û'),'u',$url);
		$url=str_replace(array('Ÿ','Ý'),'y',$url);
		$url=str_replace(array('ô','ö','Ò','Ó','Ô','Õ','Ö'),'o',$url);
		$url=str_replace(array('Š','š'),'s',$url);
		//--Edited
		$url=str_replace('$','dollar',$url);
		$url=str_replace('©','copyright',$url);
		$url=str_replace('®','registred',$url);
		$url=str_replace('œ','oe',$url);
		$url=str_replace('æ','ae',$url);
		$url=str_replace('&', 'et', $url);
		$url=str_replace('€','euros',$url);
		//-- Edited
		$url = strtolower($url);
		$url = trim($url);
		$url=str_replace('--','-',$url);
		$url=str_replace('--','-',$url);
		
		return $url;
	}
}