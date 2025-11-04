<?php
    $con = mysqli_connect("localhost", "root", "", "student");
    if(!$con)
    {
        echo "Not Connected...";
    }

    $query = "SELECT 'ROLL NO' FROM stud";
    $result = mysqli_query($con, $query);
?>

<form action="" method="post">
    Roll NO
    <select name="roll" required>
        <option value="">select Roll number...</option>
        <?php
            while ($row = mysqli_fetch_assoc($result))
            {
                echo '<option value="'.$row['ROLL NO']. '">'.$row['ROLL NO'].'</option>';
            }
        ?>
    </select>
</form>

<?php
if (isset($_POST['roll']))
{
    $roll = $_POST['roll'];
    $query = "SELECT * FROM stud WHERE 'Roll No' = '$roll'";
    $result = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($result))
    {
        echo "center";
        echo "<h4>...Student Details...<h4>";
        echo "Roll Number : ". $row['Roll No']."<br>";
        echo "Name : ".$row['Name']."<br>";
        echo "Age : ".$row['Age']."<br>";
        echo "Mark 1 : ".$row['Mark 1']."<br>";
        echo "Mark 2 : ".$row['Mark 2']."<br>";
        echo "Mark 3 : ".$row['Mark 3']."<br>";
        echo "Total Mark : ".$row['Total']."<br>";
        echo "</center>";
    }
    else
    {
        echo "<center>No record found...</center>";
    }
}

mysqli_close($con);
?>