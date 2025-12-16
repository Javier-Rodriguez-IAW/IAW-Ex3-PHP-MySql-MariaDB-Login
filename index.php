<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="JavierRodriguez">
    <title>Document</title>

</head>
<body>

<?php

session_start();

if(!isset ($_SESSION["conectado"] )|| $_SESSION["conectado"] = false){
        header("Location:login.php");

}

?>

<ol>
    <li><a href="db_connect.php">Connect</a></li>
    <li><a href="db_create.php">Create the database (connect, create, disconnect)</a></li>
    <li><a href="db_drop.php">Delete the database (connect, delete, disconnect)</a></li>
    <li><a href="table_create_guests.php">Create table myGuests (connect, create, disconnect)</a></li>
    <li><a href="table_check_exists.php">Check the existence of the myGuests table (connect, query, disconnect)</a></li>
    <li><a href="table_drop.php">Delete table myGuests (connect, delete, disconnect)</a></li>
    <li><a href="data_insert_single.php">Insert data (single record) (connect, insert, disconnect)</a></li>
    <li><a href="data_insert_single_get_last_id.php">Insert data (single record) and Get last inserted ID (connect, insert, query last ID, disconnect)</a></li>
    <li><a href="data_insert_multiple_simple.php">Insert multiple data without preparation (connect, execute x3, disconnect)</a></li>
    <li><a href="data_insert_multiple_prepared.php">Insert multiple data (connect, prepare, execute x3, disconnect)</a></li>
    <li><a href="data_count.php">Count the records in the table (connect, select, disconnect)</a></li>
    <li><a href="data_select_all.php">Display all data (connect, select, disconnect)</a></li>
    <li><a href="data_select_where.php">Display the data whose lastName is Doe (connect, select where, disconnect)</a></li>
    <li><a href="data_select_orderby.php">Display the data ordered by lastName (connect, select orderby, disconnect)</a></li>
    <li><a href="data_select_where_orderby_html_table.php">Display filtered and sorted data in an HTML table (connect, select where orderby, disconnect)</a></li>
    <li><a href="data_delete.php">Delete user id=3 (connect, delete, disconnect)</a></li>
    <li><a href="data_update.php">Update the lastname of user id=2 (connect, update, disconnect)</a></li>

    <br/>

    <form action="comprobarlogin.php" method="post">
 
    <label>Do you want to log out?:</label>

    <br/>

    <input type="submit" name="valor" value="Si"/>
    <input type="submit" name="valor" value="No"/>

</form>

</ol>
</body>
</html>