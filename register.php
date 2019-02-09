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
                     <div id="register" class="animate form">
                            <form  method="post" action="register.php"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label data-icon="u">Username</label>
                                    <input name="username" required="required" type="text"/>
                                </p>
				<p> 
                                    <label data-icon="u">First Name</label>
                                    <input name="firstname" required="required" type="text" />
                                </p>
				<p> 
                                    <label data-icon="u">Last Name</label>
                                    <input name="lastname" required="required" type="text" />
                                </p>
				<p> 
                                    <label data-icon="u">Address</label>
                                    <input name="address" required="required" type="text"/>
                                </p>
                                <p> 
                                    <label data-icon="e" > Your email</label>
                                    <input name="email" required="required" type="email" /> 
                                </p>
                                <p> 
                                    <label data-icon="p">Your password </label>
                                    <input name="password_1" required="required" type="password"/>
                                </p>
                                <p> 
                                    <label data-icon="p">Please confirm your password </label>
                                    <input name="password_2" required="required" type="password"/>
                                </p>
                                <div class="signin button"> 
					<input type="submit" name="reg_user" value="Sign up"/>
				</div>
							<p class="change_link">  
                                        Already registered?
                                        <a href="index.php" class="to_register">Log in </a>
                                </p>

                                </p>


				</p>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
