
<html>
<title>
Report page
</title>
<body>

<form action="add_data.php">
<div>
Name: <input type="text" name="name" autocomplete = "off">
</div>
<div>
Matric Number: <input type="text" name="matric" autocomplete = "off" maxlength="6">
</div>
<div>
<label for="school">School:</label>
  <select name="school" >
    <option value="" selected="selected">Select your option</option>
    <option value="School of Computer Sciences">School of Computer Sciences</option>
    <option value="School of Communication">School of Communication</option>
    <option value="School of Education">School of Education</option>
    <option value="School of Physics">School of Physics</option>
  </select>
</div>
<div>
Contact Number: <input type="text" name="phone" autocomplete = "off" maxlength="12">
</div>
<div>
Email: <input type="text" name="email" autocomplete = "off">
</div>
<div>
Input report: 
</div>
<textarea name="content" autocomplete = "off"  rows="4" cols="50"></textarea>
<div>
<input type="submit">
</div>
</form>

<?php echo date("Y-m-d"); ?>


</body>
</html>

