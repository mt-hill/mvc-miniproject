<?php
    class Model {
        private $conn;

        public function __construct() {
            $servername = "localhost";
            $username = "root";
            $password = "usbw";
            $dbname = "ecdb";
    
            $this->conn = new mysqli($servername, $username, $password, $dbname);
    
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
        public function login_auth() {
            if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
                $email = $_REQUEST['email'];
                $password = $_REQUEST['password'];
        
                $sql = "SELECT * FROM customers WHERE email = '$email'";
                $result = $this->conn->query($sql);
        
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    if (password_verify($password, $row['password'])) {
                        return 'login';
                    } else {
                        return 'invalid password';
                    }
                } else {
                    return 'invalid user';
                }
            }
        }
    }  