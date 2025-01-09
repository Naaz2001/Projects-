<?php include("header.php");
include("sidebar.php");?>
<form name="form1" method="post" action="alumni_insert.php">
  <table width="200" border="1" align="center">
    <tr>
      <td colspan="2"> Alumni</td>
    </tr>
    <tr>
      <td>Alumniname</td>
      <td><input name="aname" type="text" id="aname"></td>
    </tr>
    <tr>
      <td>Rollno</td>
      <td><input name="rollno" type="text" id="rollno"></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input name="password" type="text" id="password"></td>
    </tr>
    <tr>
      <td>course_id</td>
      <td><input name="course_id" type="text" id="course_id"></td>
    </tr>
    <tr>
      <td>section</td>
      <td><input name="section" type="text" id="section"></td>
    </tr>
    <tr>
      <td>dob</td>
      <td><input name="dob" type="date" id="dob"></td>
    </tr>
    <tr>
      <td>status</td>
      <td><input name="status" type="text" id="status"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input name="Reset" type="reset" id="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
