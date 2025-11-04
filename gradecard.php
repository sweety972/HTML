<html>
    <body>
    <?php
        $nam = $_POST['studentname'];
        $roll = $_POST['roll'];
        $age = $_POST['age'];
        $gen = $_POST['gender'];
        $engmark = $_POST['eng'];
        $mathmark = $_POST['MAT'];
        $csmark = $_POST['cs'];

        $total = $engmark + $mathmark + $csmark;
        $percen = ($total/300) * 100;
        if($percen>90){
            $grade="A+";
        }
        elseif($percen>80){
            $grade="A";
        }
        elseif($percen>70){
            $grade="B+";
        }
        elseif($percen>60){
            $grade="B";
        }
        else
            $grade="F";
        ?>

    <h2>Student Grade Card</h2>
    <p><b>Name : </b><?php echo $nam; ?></p>
    <p><b>Roll Name : </b><?php echo $roll; ?></p>
    <p><b>Age : </b><?php echo $age; ?></p>
    <p><b>Gender : </b><?php echo $gen; ?></p>
    <p><b>English Mark : </b><?php echo $engmark; ?></p>
    <p><b>Maths Mark : </b><?php echo $mathmark; ?></p>
    <p><b>CS Mark : </b><?php echo $csmark; ?></p>
    <p><b>Total : </b><?php echo $total; ?></p>
    <p><b>Percentage : </b><?php echo $percen; ?></p>
    <p><b>Grade : </b><?php echo $grade; ?></p>
    </body>
    </html>
