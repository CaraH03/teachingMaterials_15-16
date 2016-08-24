<?php
/**
 * Created by PhpStorm.
 * User: 1516734
 * Date: 14/03/2016
 * Time: 10:19
 */
define('DB_SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','baa255af1fcbb1');
define('DB_PASSWORD','1b3d4013');
DEFINE('DB_DATABASE','cmm007al-1516734');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}