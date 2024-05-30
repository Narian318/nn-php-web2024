<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Welcome</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <style>
    body {
      font: 14px sans-serif;
      text-align: center;
    }
  </style>
</head>

<body>
  <h1 class="my-5">
    Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome
    to our site.
  </h1>
  <p>
    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
  </p>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pooja Application Form</title>
</head>

<body>
  <form>
    <fieldset>
      <legend>
        <h2>Narendra's Tender Enquiry Submit Form</h2>
      </legend>
      color: <input type="color" name="color" value="#ff0000" /> <br /><br />
      First Name:
      <input type="text" name="name" value="" placeholder="CAPITAL LETTERS ONLY" maxlength="10" />
      Middle Name: <input type="text" /> Last Name:
      <input type="text" name="name" value="" placeholder="CAPITAL LETTERS ONLY" maxlength="5" />
      <br /><br />
      Email: <input type="email" name="email" /> Mobile Number:
      <input type="text" maxlength="10" /> <br /><br />
      Bank A/C No: <input type="password" name="Bank A/C" /> PAN no.:
      <input type="text" maxlength="10" /> Address: <textarea></textarea>
      Region:
      <select>
        <optgroup label="India"></optgroup>
        <option value="1">Delhi-Central</option>
        <option value="2">Eastern</option>
        <option value="3">Western</option>
        <option value="4">Southern India</option>
      </select>
      <br /><br />
      Gender: <input type="radio" value="m" name="gender" /> Male
      <input type="radio" value="f" name="gender" /> Female
      <input type="radio" value="o" name="gender" /> Others <br /><br />
      Caste: <input type="radio" value="ur" name="caste" /> UR
      <input type="radio" value="o" name="caste" /> OBC
      <input type="radio" value="s" name="caste" /> SC/ST <br /><br />
      Marital Status:
      <input type="radio" value="ur" name="Relation" /> Married
      <input type="radio" value="o" name="Relation" /> Unmarried <br /><br />
      Date of Birth: <input type="date" /> <br /><br />
      Languages Known:
      <input type="checkbox" name="Languages[]" /> TELUGU
      <input type="checkbox" name="Languages[]" /> HINDI
      <input type="checkbox" name="Languages[]" /> ENGLISH
      <input type="checkbox" name="Languages[]" /> URDU <br /><br />
      Education Qualification:
      <select>
        <optgroup label="B.Tech"></optgroup>
        <option value="1">Aeronautical Engg</option>
        <option value="2">Bio-Informatics Engg</option>
        <option value="3">Chemical Engg</option>
        <option value="4">Genetical Engg</option>
        <option value="5">Information Technology</option>
        <option value="6">Mechanical Engg</option>
        <optgroup label="M.Tech"></optgroup>
        <option value="1">Aeronautical Engg</option>
        <option value="2">Bio-Informatics Engg</option>
        <option value="3">Nano Technology</option>
        <option value="4">Human Genetics</option>
        <option value="5">Cloud security</option>
        <option value="6">Robotics</option>
        <optgroup label="MD/MS"></optgroup>
        <option value="1">Brain Surgeon</option>
        <option value="2">Neurology</option>
        <option value="3">opthomolgy</option>
        <option value="4">Orthopedic</option>
        <option value="5">Oncology</option>
        <option value="6">Cardiac Surgeon</option>
      </select>
      <br /><br />
      Experience in Years:
      <input type="number" name="Exp" min="0" max="10" /> <br /><br />
      Resume: <input type="file" name="resume" /> <br /><br />
      Date of Tender open: <input type="datetime-local" /> Date of Tender
      Close: <input type="datetime-local" /><br /><br />
      <input type="SUBMIT" value="send" />
      <input type="RESET" value="Reset" />
    </fieldset>
  </form>
</body>

</html>