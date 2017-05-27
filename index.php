    <?php 
    $page_title = 'Login';
    include('includes/header.html');

    if (isset($errors) && !empty($errors)) {
        echo '<h1>Error!</h1>
        <p class="error">The following error(s) occurred:<br />';
        
        foreach ($errors as $msg) {
            echo " - $msg<br />\n";
        }
        echo '</p><p>Please try again.</p>';
    }
    
    
    //Check for form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Simple validation of both username and password at the same time
        if (!empty($_REQUEST['email']) && !empty($_REQUEST['psw'])) {
            $email = $_REQUEST['email'];
            $password = $_REQUEST['psw'];


        } else {
            $email = NULL;
            $password = NULL;
            echo '<p class="error">You must enter in a username and password to continue</p>';
        }
    
        //If form has been validated then continue to home page
        if ($email && $password) {
            //header('Location: C:/xampp/htdocs/Tucktogo/form.html');
            echo "<p> Thank you for logging in! You are now being redirected.</p>";
        }
    }
    ?>

        <h1>Welcome to Tuck to Go</h1>

        <p>This website was made in the hopes of making everyone's lives easier while still respecting the busy schedules of the Tuck staff so the website will only run on limited hours currently.</p>

        <p>Please login below in order to place an order.</p>

        <form action="login.php" method="post">
            <fieldset>
                <legend>Please Sign in to continue:</legend>

                <div class="container">
                    <label><b>Email Address:</b></label></br>
                    <input type="text" placeholder="Enter email address" name="email" size="20" maxlength="60" required/><br/>                    
                    <label><b>Password:</b></label><br/>
                    <input type="password" placeholder="Enter Password" name="psw" required/><br/>
                    <input type="checkbox" checked="checked"> Remember me <br/>
                    <p><input type="submit" name="submit" value="Login" /></p>

                    <!-- In case a new user option is necessary:
                    <form action="new_user.html">
                        <button type="button">Create a New User</button>
                    </form> -->
                    
                </div>

                
            </fieldset>
        </form>

    <?php
    include ('includes/footer.html');
    ?>