<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
  <!--<link rel="stylesheet" href="style.css">-->
</head>
<body style="text-align:center;margin-top:10%;font-size:25px" background=https://styledme.com/wp-content/uploads/2020/09/solid-color-zoom-background.jpg; >
     <form id="one" method="POST" action="submit.php">
     <label><b>registration form</b></label><br><br>
     username:<input type="text"  id="userid" name="name" required><br><br>
     Email id:<input type="email"  id="mailid" name="email"><br><br>
     password:<input type="password" id="pass" name="pass" required><br><br>
     phone no:<input type="tel" id="phone" name="phonenum" pattern="[0-9]{10}"  required><br><br>
     <input type="submit" value="Submit" id="submit">
    </form>
</body>
</html>