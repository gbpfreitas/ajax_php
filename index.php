<?php

    require_once("inc/config.inc.php");
    require_once("inc/Entities/User.class.php");
    require_once("inc/Database/PDOAgent.class.php");
    require_once("inc/Utilities/Dao/UserDao.class.php");
    require_once("inc/Utilities/Response.inc.php");
    require_once("inc/Utilities/Page.class.php");

    UserDao::startDb();

    