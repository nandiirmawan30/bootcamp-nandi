<?php
     function isAcceptedUsername($username) {
          return preg_match('/^[a-z]{4,9}$/i',$username) ;
     }
     function isAcceptedPassword($password) {
          return preg_match('/^[a-zA-Z0-9]{10}$/i',$password) ;
     }
?>