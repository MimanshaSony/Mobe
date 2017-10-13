<html>
<head><h1><u><center> Admin Login </u></h1></head>
<body>
<form align="center" action="conn(1).php" method="post" >
<table align="center">
<tr>
<td> Userid: <input type="text" name="userid" placeholder="enter your username"></td>
</tr>
<tr>
<td> Password: <input type="password" name="password" placeholder="enter your password"> </td>
</tr>
<tr> 
<td> <input type="submit" onclick="check(this.form)"  name="login" value="Login"/></td>
<td><input type="reset" value="Reset"/></td>
</tr>           
<tr>
<td><a href="change.php">Change Password</a></td>
<td align = right><a href="">Forget Password</a></td>
</tr>
</table>
</form>
<script language="javascript">
function check(form) {
	        if(form.userid.value=="" ){
			alert("invalid userid")}
			else if(form.password.value==""){
				alert("invalid password")
			}
            else if(form.userid.value.length<5 ){
			alert("weak userid")	
			}else if(form.password.value.length<5){
				alert("weak password")
			}
			else{
				alert("Login successfully")
			}
}			
	
</script>			
</body>
</html>