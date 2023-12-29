<?php
    

    class User {
        public $username;
        private $password;
        public $email;
        public $alamat;
    
        public function __construct($username, $password, $email, $alamat){
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->alamat = $alamat;
        }
    
        public function getInfo(){
            return "Username: $this->username, Password: $this->password, Email: $this->email, Alamat: $this->alamat";
        }
    }
    
    class Profile extends User {
        private $no_telpon;
    
        public function __construct($no_telpon, $username, $password = '', $email = '', $alamat = ''){
            parent::__construct($username, $password, $email, $alamat);
            $this->no_telpon = $no_telpon;
        }
    
        public function getInfo(){
            return "No. Telpon: $this->no_telpon, Username: $this->username";
        }
    }
    
    $user1 = new User("sawal", 123, "zz@gmail.com", "Jakarta");
    $user2 = new Profile("0821821912", "sawal");
    
    echo $user1->getInfo() . "<br>";
    echo $user2->getInfo() . "<br>";


?>