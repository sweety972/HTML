<html>
  <head>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
      }
      .container {
        width: 400px;
        margin: 40px auto;
        background: white;
        padding: 20px 30px;
        box-shadow: 0 0 5px rgba(0,0,0,0.1);
        border-radius: 5px;
      }
      h2 {
        text-align: center;
        color: #333;
      }
      p {
        font-size: 16px;
        line-height: 1.5;
        margin: 8px 0;
      }
      b {
        color: #4CAF50;
      }
    </style>
  </head>
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
      $percen = ($total / 300) * 100;

      if ($percen > 90) {
          $grade = "A+";
      } elseif ($percen > 80) {
          $grade = "A";
      } elseif ($percen > 70) {
          $grade = "B+";
      } elseif ($percen > 60) {
          $grade = "B";
      } else {
          $grade = "F";
      }
    ?>

    <div class="container">
      <h2>Student Grade Card</h2>
      <p><b>Name:</b> <?php echo $nam; ?></p>
      <p><b>Roll No:</b> <?php echo $roll; ?></p>
      <p><b>Age:</b> <?php echo $age; ?></p>
      <p><b>Gender:</b> <?php echo $gen; ?></p>
      <p><b>English Marks:</b> <?php echo $engmark; ?></p>
      <p><b>Maths Marks:</b> <?php echo $mathmark; ?></p>
      <p><b>Computer Science Marks:</b> <?php echo $csmark; ?></p>
      <hr>
      <p><b>Total:</b> <?php echo $total; ?></p>
      <p><b>Percentage:</b> <?php echo number_format($percen, 2); ?>%</p>
      <p><b>Grade:</b> <?php echo $grade; ?></p>
    </div>
  </body>
</html>
