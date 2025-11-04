<html>
  <head>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
      }
      table {
        margin: 30px auto;
        border-collapse: collapse;
        background: white;
        padding: 15px 25px;
        box-shadow: 0 0 5px rgba(0,0,0,0.1);
      }
      td {
        padding: 6px 10px;
      }
      input[type="textbox"], input[type="text"] {
        padding: 4px;
        width: 150px;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 6px 12px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <form name="studentsform" action="gradecardcss.php" method="post">
      <table>
        <tr>
          <td>NAME</td>
          <td><input type="text" name="studentname"></td>
        </tr>
        <tr>
          <td>ROLL NO:</td>
          <td><input type="text" name="roll"></td>
        </tr>
        <tr>
          <td>AGE</td>
          <td><input type="text" name="age"></td>
        </tr>
        <tr>
          <td>GENDER</td>

          <td colspan="2"><input type="radio" name="gender" value="MALE">MALE
          <input type="radio" name="gender" value="FEMALE">FEMALE</td>
        </tr>
        <tr>
          <td>ENGLISH</td>
          <td><input type="text" name="eng"></td>
        </tr>
        <tr>
          <td>MATHS</td>
          <td><input type="text" name="MAT"></td>
        </tr>
        <tr>
          <td>COMPUTER SCIENCE</td>
          <td><input type="text" name="cs"></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align:center;">
            <input type="submit">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
