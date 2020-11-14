<?php
    class User
    {
        public $Name;
        public $Username;
        public $Email;

        function __construct($Name, $Username, $Email)
        {
            $this->name = $Name;
            $this->uname = $Username;
            $this->email = $Email;
        }

        function addFriend(){
            echo  $this->name, " added a friend."; 
        }
        function postStatus(){
            echo  $this->name, " posted a status."; 
        }
    }

    $nam = new User("Ivan Rae V. Baribar", "ivanrae01", "ivanraeb31@gmail.com");
    $nam->addFriend();
    echo "<br>";
    $nam->postStatus();
?>