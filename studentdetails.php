<html>
    <body>
        <form name="studentsform" action="gradecard.php" method="post">
            <table>
                <tr>
                    <td>NAME</td>
                    <td><input type="textbox" name="studentname"></td>                    
                </tr>
                <tr>
                    <td>ROLL NO:</td>
                    <td><input type="textbox" name="roll"></td>
                </tr>
                <tr>
                    <td>AGE</td>
                    <td><input type="textbox" name="age"></td>
                </tr>
                <tr>
                    <td>GENDER</td>
                    <td><input type="radio" name="gender"  value="MALE">MALE</td>
                    <td><input type="radio" name="gender"  value="FEMALE">FEMALE</td>
                </tr>
                <tr>
                    <td>ENGLISH</td>
                    <td><input type="textbox" name="eng"></td>
                </tr>
                <tr>
                    <td>MATHS</td>
                    <td><input type="textbox" name="MAT"></td>
                </tr>
                <tr>
                    <td>COMPUTER SCIENCE</td>
                    <td><input type="textbox" name="cs"></td>
                </tr>
                <tr><td>
                <input type="submit">
                </td></tr>



            </table>

        </form>
    </body>
</html>