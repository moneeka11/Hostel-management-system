







<html>
<head>
<title>login</title>
</head>
<body>
<form class="form" method="POST" action="process.php"enctype="multipart/form-data">
<div class="container-fluid">
            <div class="box">
                <h3 class="header">
                    Login to your Account
                </h3><hr>


 <div class="uname">
    
    <label>Username</label>
          <input type="text"  size="38"  name="username" placeholder="UserName" required><br><br>
                        

    <label>Password</label>
           <input type="password"  size="38"  name="password" placeholder="password" required><br><br>
                       
                    
            <input type="submit" name="submit" class="login" vlaue="Sign-in" style="width: 91%;height: 8%;"><br><br>

                    
                </div>
                </div>
                </div>
                
</form>

</body>
<style>
.box{
    border-style: solid;
    border-width: 1px;
    border-color: grey;
    height: 75%;  
    width: 40%; 
    margin-top: 25px; 
    margin-left: 500px;

}

h3.header{
    color: black;
    text-align: center;
}
.uname{
    margin-left: 35px;
}
.pword{
    margin-left: 30px;
}
h4.font{
    color: grey;
    text-align: center;
    margin-right: 30px;
}
</style>
</html>
<!-- <?php

include "footer.php";
?> -->