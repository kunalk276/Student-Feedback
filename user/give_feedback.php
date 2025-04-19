<?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['user'];

$sql=mysqli_query($conn,"select * from feedback where student_id='$user' and faculty_id='$faculty'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>You already given feedback to this faculty</h2>";
}
else
{
$query="insert into feedback values('','$user','$faculty','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11','$quest12','$quest13','$quest14',now())";

mysqli_query($conn,$query);

echo "<h2 style='color:green'>Thank you </h2>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Feedback Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
      padding-top: 50px;
    }
    .feedback-form {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      max-width: 800px;
      margin: auto;
    }
    h3 {
      color: #007bff;
      font-weight: 500;
    }
    .feedback-buttons button {
      font-size: 10pt;
      color: white;
      padding: 8px 15px;
      border-radius: 5px;
      border: none;
      margin: 5px;
      transition: background-color 0.3s ease;
    }
    .feedback-buttons button:hover {
      opacity: 0.8;
    }
    .feedback-buttons .strongly-agree { background-color: green; }
    .feedback-buttons .agree { background-color: #8B4513; }
    .feedback-buttons .neutral { background-color: #007bff; }
    .feedback-buttons .disagree { background-color: #333; }
    .feedback-buttons .strongly-disagree { background-color: #ff4d4d; }
    .table-bordered th, .table-bordered td {
      padding: 10px;
      text-align: left;
    }
    textarea {
      font-family: 'Roboto', sans-serif;
      font-size: 1.1em;
      border: 1px solid #ced4da;
      border-radius: 5px;
      padding: 10px;
      width: 100%;
    }
    .submit-btn {
      background-color: #8B4513;
      color: white;
      font-size: 12pt;
      padding: 12px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .submit-btn:hover {
      background-color: #6c3e10;
    }
    .center-text {
      text-align: center;
    }
  </style>
</head>
<body>

<div class="container">
  <form method="post" class="feedback-form">
    <div class="center-text">
      <u><h2>Student's Feedback Form</h2></u>
    </div>

    <h3>Please provide your feedback by selecting the appropriate grade for each question:</h3>
    
    <div class="feedback-buttons center-text">
      <button type="button" class="strongly-agree">Strongly Agree 5</button>
      <button type="button" class="agree">Agree 4</button>
      <button type="button" class="neutral">Neutral 3</button>
      <button type="button" class="disagree">Disagree 2</button>
      <button type="button" class="strongly-disagree">Strongly Disagree 1</button>
    </div>

    <table class="table table-bordered mt-4">
      <tr>
        <th>Select Faculty:</th>
        <td>
          <select name="faculty" class="form-control">
            <?php
              $sql = mysqli_query($conn, "SELECT * FROM faculty WHERE semester='" . $users['semester'] . "'");
              while ($r = mysqli_fetch_array($sql)) {
                echo "<option value='" . $r['email'] . "'>" . $r['Name'] . "</option>";
              }
            ?>
          </select>
        </td>
      </tr>
    </table>

    <h3>1. Course Material</h3>
    <table class="table table-bordered">
      <tr>
        <td><b>1:</b> Teacher provided the course outline with the weekly content plan and list of required textbooks:</td>  
        <td><input type="radio" name="quest1" value="5" required> 5
          <input type="radio" name="quest1" value="4"> 4
          <input type="radio" name="quest1" value="3"> 3
          <input type="radio" name="quest1" value="2"> 2
          <input type="radio" name="quest1" value="1"> 1
        </td>
      </tr>
      <tr>
        <td><b>2:</b> Course objectives, learning outcomes, and grading criteria are clear to me:</td> 
        <td><input type="radio" name="quest2" value="5" required> 5
          <input type="radio" name="quest2" value="4"> 4
          <input type="radio" name="quest2" value="3"> 3
          <input type="radio" name="quest2" value="2"> 2
          <input type="radio" name="quest2" value="1"> 1
        </td>
      </tr>
      <!-- Add more questions as required -->
    </table>

    <h3>2. Class Teaching</h3>
    <table class="table table-bordered">
      <tr>
        <td><b>4:</b> Teacher is punctual, arrives on time, and leaves on time:</td>
        <td><input type="radio" name="quest4" value="5" required> 5
          <input type="radio" name="quest4" value="4"> 4
          <input type="radio" name="quest4" value="3"> 3
          <input type="radio" name="quest4" value="2"> 2
          <input type="radio" name="quest4" value="1"> 1
        </td>
      </tr>
      <!-- Add more questions as required -->
    </table>

    <h3>3. Class Assessment</h3>
    <table class="table table-bordered">
      <tr>
        <td><b>11:</b> Teacher was always fair and impartial:</td>
        <td><input type="radio" name="quest11" value="5" required> 5
          <input type="radio" name="quest11" value="4"> 4
          <input type="radio" name="quest11" value="3"> 3
          <input type="radio" name="quest11" value="2"> 2
          <input type="radio" name="quest11" value="1"> 1
        </td>
      </tr>
      <!-- Add more questions as required -->
    </table>

    <h3>4. Comments</h3>
<p><b>13:</b> What I liked about the course:</p>
<textarea name="quest13" rows="5" required placeholder="Share what you liked about the course"></textarea>

<p><b>14:</b> Why I disliked about the course:</p>
<textarea name="quest14" rows="5" required placeholder="Share what you disliked about the course"></textarea>


    <div class="center-text mt-4">
      <button type="submit" class="submit-btn" name="sub">Submit</button>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>