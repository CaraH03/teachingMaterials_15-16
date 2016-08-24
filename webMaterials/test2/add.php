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
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            ?>
            <div class="form">
                <form action="">
                    <label>Entry Title</label>
                    <input type="text" name="entryTitle">

                    <label>Entry Summary</label>
                    <textarea name="entrySummary" rows="5" cols="70" required="true"></textarea>


                    <label>Category</label>
                    <select name="category" value="" required="true">
                        <option value="Work">Work Items</option>
                        <option value="University">University Items</option>
                        <option value="Family">Family Items</option>
                    </select>

                    <input type="submit" value="Submit">
                </form>
            </div>

            <?php
        }

        elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            include("db_connect.php");

            $entrytitle = $_POST['entryTitle'];
            $entrysummary = $_POST['entrySummary'];
            $category = $_POST['Category'];
            $sql = "INSERT INTO diaryTable (entryTitle, entrySummary, Category) VALUES (' $entrytitle','$entrysummary','$superpower')";

            if (mysqli_query($db, $sql)) {
            } else {
                echo "Error:" . $sql . "<br>" . msqli_error($db);
            }
            header("location:diary.php");
        }
        else{
            header("location:index.php");
        }
?>



    </article>

    <footer> Designed by Nirdesh Kulhar 2016 </footer>

</div>

</body>
</html>
