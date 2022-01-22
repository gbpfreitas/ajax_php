<?php

    class UserDao{
        private static $connection;

        public static function startDb(){
            self::$connection = new PDOAgent("User");
        }

        public static function getAllUsers(){
            $sql = "SELECT * FROM users";

            self::$connection->query($sql);
            self::$connection->exec();
            return self::$connection->resultSet();
        }

        public static function getUser($userName){
            $sql = "SELECT * FROM user WHERE name LIKE :userName%";
            self::$connection->bind(':username',$userName);
            self::$connection->exec();

            return self::$connection->resultSet();
        }

    }