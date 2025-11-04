<?php
    $con = mysqli_connect("localhost", "root", "", "student");
    if(!$con)
    {
        echo "Not Connected...";
    }

    $query = "SELECT `Roll No` FROM stud";
    $result = mysqli_query($con, $query);
?>

<form action="" method="post">
    Roll NO
    <select name="roll" id="roll" required>
        <option value="">select Roll number...</option>
        <?php
            while ($row = mysqli_fetch_assoc($result))
            {
                echo '<option value="'.$row['Roll No'].'">'.$row['Roll No'].'</option>';
            }
        ?>
    </select>
    <input type="submit" name="show" value="Show Details">
</form>

<?php
if (isset($_POST['show']))
{
    $roll = $_POST['roll'];
    $query = "SELECT * FROM stud WHERE `Roll No` = '$roll'";
    $result = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($result))
    {
        echo "<center>";
        echo "<h4>...Student Details...<h4>";
        echo "Roll Number : ". $row['Roll No']."<br>";
        echo "Name : ".$row['Name']."<br>";
        echo "Age : ".$row['Age']."<br>";
        echo "Mark 1 : ".$row['Mark 1']."<br>";
        echo "Mark 2 : ".$row['Mark 2']."<br>";
        echo "Mark 3 : ".$row['Mark 3']."<br>";
        echo "Total Mark : ".$row['Total']."<br>";
        echo "<br><br><br>";
        echo "<form action='' method='post'>";
        echo "Update Student Marks if you wish...<br><br>";
        echo "<input type='hidden' name='roll' value='".$row['Roll No']."'>";
        echo "Update Mark 1 : <input type = 'number' name='mark1' value='".$row['Mark 1']."' required><br><br>";
        echo "Update Mark 2 : <input type = 'number' name='mark2' value='".$row['Mark 2']."' required><br><br>";
        echo "Update Mark 3 : <input type = 'number' name='mark3' value='".$row['Mark 3']."' required><br><br>";
        echo "<input type='submit' value='Update Marks' name='update'>";
        echo "</center>";
    }  
    else
    {
        echo "<center>No record found...</center>";
    }
}

if (isset($_POST['update']))
{
    $roll = $_POST['roll'];
    $mark1 = $_POST['mark1'];
    $mark2 = $_POST['mark2'];
    $mark3 = $_POST['mark3'];
    $total = $mark1 + $mark2 + $mark3;

    $query = "UPDATE stud SET `Mark 1`='$mark1', `Mark 2`='$mark2', `Mark 3`='$mark3', `Total`='$total' WHERE `Roll No`='$roll'";

    if (mysqli_query($con, $query))
    {
        echo "<script>alert('Updated Successfully...');</script>";
    }
    else
    {
        echo "<script>alert('Not Updated !...');</script>";
    }
}

mysqli_close($con);
?>