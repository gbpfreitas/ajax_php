<?php

    class ErrorHandle {

        private static function readFile(){

            try {
                $fileHandle = fopen(ERROR_DATA_FILE,'r');
                if(!$fileHandle){
                    throw new Exception("There is no file to read!: ERROR_DATA_FILE");
                }
                $fileContent = fread($fileHandle,filesize(ERROR_DATA_FILE));
                fclose($fileHandle);
            } catch(Exception $ex){
                echo $ex->getMessage();
            }

            return $fileContent;
        }


        public static function writeFile($errorMessage){

            try{
                $fileHandle = fopen(ERROR_DATA_FILE,'w');
                if(!$fileHandle){
                    throw new Exception("Error writing the file: ERROR_DATA_FILE");
                }

                fwrite($fileHandle,$errorMessage);
                fclose($fileHandle);

            } catch(Exception $ex) {
                echo $ex->getMessage();
            }
        }

        public static function getErrorReport(){
            $rawContent = self::readFile();
            $content = [];



        }
    }