
<?php
include("db_connect.php");
$category=$_get('Catogery')
if(isset($_GET['Category'])) {
    $test = $_GET['something'];



?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title> My Diary </title>
</head>
<body>

<div class="container">

    <header>
        <img src="image/blog.png" alt="logo" width="140px">
        <div class="head">
            <h1> myDiary</h1>
            <h3> Keeping track of all my thoughts</h3>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="diary.php">All Diary Items</a></li>
            <li><a href="diary.php?Catogery=Work">Work Diary Items</a></li>
            <li><a href="diary.php?category=University">Unuversity Diary Items</a></li>
            <li><a href="diary.php?Category=Family">Family Diary Items</a></li>
            <li><a href="add.php">Insert Diary Items</a></li>

        </ul>
    </nav>

    <article>
        <?
        include("db_connect.php");
        $sql_query = "SELECT * FROM diaryTable";
        $result = $db->query($sql_query);
        while($row = $result->fetch_array())
        {
            $entrytitle = $row['entryTitle'];
            $entrysummary = $row['entrySummary'];
            $category = $row['Category'];
            echo "<article>
                  <h3>{$entrytitle}</h3>
                  <h3>{$category}</h3>
                  <p>{$entrysummary}</p><br><br>

                  </article>";

        }
        ?>
    </article>

    <footer> Designed by Nirdesh Kulhar 2016 </footer>

</div>

</body>
</html>
