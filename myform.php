<html>

<head>

<h1 align="center"><b><u> BANKING DOST</u></b> </h1>
</head>

<body>

<form action="mydata.php" method="post" enctype="multipart/form-data">
<table align="center" border="1" width="60%" margin="top-50%">
<tr>
<td> Name </td>
<td> <input type="text" placeholder="enter your name" name="name" required="required" /></td>
</tr>
<tr> 
<td> Email </td>
<td> <input type="Email" placeholder="enter your Email" name="email" required="required" /></td>

</tr>
<tr>
<td> Website </td>
<td> <input type="text" name="website" placeholder="enter your website"> </td>
</tr>
<tr>
<td> Comment</td>
<td> <textarea name="comment" rows="5" cols="40"></textarea> </td>
</tr>
<tr>
<td> Gender </td>
<td> Male <input type="radio" name="gender" value="male" required="required"/> Female <input type="radio" name="gender" value="female" required="required"/></td>
<tr>
<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
</tr>
<tr>
<td colspan="2" align="center"> <input type="submit" name="submit" value="Submit"/>   </td>
</tr>

</table>
</form>

</body>

</html>

