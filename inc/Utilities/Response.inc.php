<?php

    if(isset($_GET)){
        //Set the response as an empty string
        $result = [];
        //Gets the result from the database and stores the array into queryResult
        $queryResult = UserDao::getUser($_GET["query"]);
        //Gets the length of the string that the user typed.
        $len = strlen($_GET["query"]);

        //Foreach object result
        foreach($queryResult as $user){
            
            if( stristr($_GET["query"], substr($user->getName(),0,$len)) ){
                if(empty($result)){
                    $result = $user;
                } else {
                    $result[] = $user;
                }
            }
        }
        echo serialize($result);
    }