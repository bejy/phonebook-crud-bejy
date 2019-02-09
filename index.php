<?php include('server.php')?>
<!DOCTYPE html>
    <head>
        <title>Phonebook</title>
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
    </head>
    <body>
        <div class="container">
            <header>
               <h1>Phone<span>book</span></h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="post" action="index.php"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label data-icon="u" > Your email or username </label>
                                    <input name="username" required="required" type="text"/>
                                </p>
                                <p> 
                                    <label data-icon="p"> Your password </label>
                                    <input name="password" required="required" type="password" /> 
                                </p>
  
                                <div class="login button"> 
                                    <input type="submit" name= "login_user" value="Login" /> 
				</div>
                                <p class="change_link">
				Not registered yet ?
				<a href="register.php" class="to_register">Register</a>
				</p>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
