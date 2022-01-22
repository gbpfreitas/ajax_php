<?php

    class Page {
        public static function pageHeader(){
            $pageHeader = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Ajax Practice</title>
            </head>
            <body>

            ';

            echo $pageHeader;
        }

        public static function requestForm(){
            $requestForm = '
            <form>
                <div>
                    <input type="search" name="query" id="query" onkeyup="">
                </div>
            </form>
            ';

            echo $requestForm;
        }

        public static function divResponse($result){
            $divResponse = '
            <div>
            
            </div>
            ';

            echo $divResponse;
        }

        public static function pageFooter(){
            $pageFooter = '
            </body>
            </html>
            ';

            echo $pageFooter;
        }

    }