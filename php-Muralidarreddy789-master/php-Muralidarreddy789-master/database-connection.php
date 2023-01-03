<?php

class db{
		private $db;
		public function database(){
			$this->db = new mysqli('sql305.epizy.com','epiz_32806869','XrP8fWR32cX3y','epiz_32806869_comics');
			if(!$this->db->connect_error)
			{
				return $this->db;
			}
            else{
                die('Database Connection Error');
            }
		}
    }
    
?>