<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_shop = "localhost";
$database_shop = "id22069323_shopping";
$username_shop = "id22069323_root";
$password_shop = "847202611@Gmail.com";
$shop = mysqli_connect($hostname_shop, $username_shop, $password_shop, $database_shop) or trigger_error(mysqli_error(),E_USER_ERROR); 
?>