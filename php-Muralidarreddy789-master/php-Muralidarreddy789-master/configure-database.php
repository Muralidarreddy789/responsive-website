<?php

require_once __DIR__.'/database-connection.php';

    class config_db{
        private $db;
		private $query;
        public function __construct(){
            $this->db = new db();
            $this->db = $this->db->database();
            if($this->db->query('SELECT * FROM user_data')){
                // echo 'Table for users already exists';
            }
            else{
                $this->query = 'CREATE TABLE user_data(
                    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    email VARCHAR(40) NOT NULL UNIQUE,
                    otp INT(6) DEFAULT 0,
                    count INT(5) DEFAULT 0,
                    date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
                )';
                if($this->db->query($this->query)){
                    echo 'Table for users created successfully';
                }
                else{
                    echo 'Failed to create users table';
                }
            }


            $this->db->close();
        }
    }

    new config_db();

    ?>