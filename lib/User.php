<?php

    class User{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // Get user
        public function getUser($data){
            $this->db->query("SELECT * FROM users
                            WHERE user_email = :user_email
                            ");
            
            $this->db->bind(':user_email', $data['user_email']);

            // Assign Row
            $row = $this->db->single();

            return $row;
        }

        // Create User

        public function createUser($data){
            // Insert Query
            $this->db->query("INSERT INTO users (user_fname, user_lname, user_email, user_password, user_company, isAdmin)
                                VALUES (:user_fname, :user_lname, :user_email, :user_password, :user_company, :isAdmin)");
            // Bind Data
            $this->db->bind(':user_fname', $data['user_fname']);
            $this->db->bind(':user_lname', $data['user_lname']);
            $this->db->bind(':user_email', $data['user_email']);
            $this->db->bind(':user_password', $data['user_password']);
            $this->db->bind(':user_company', $data['user_company']);
            $this->db->bind(':isAdmin', $data['isAdmin']);

            // Executed

            if ($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
    }

    ?>