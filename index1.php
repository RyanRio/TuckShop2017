    <?php 
    $page_title = 'Welcome to Tuck to Go!';
    include('/header.html');
    
    //Simple validation of both username and password at the same time
    if (!empty($_REQUEST['uname']) && !empty($_REQUEST['psw'])) {
        $USERNAME = $_REQUEST['uname'];
        $PASSWORD = $_REQUEST['PSW']
    } else {
        $USERNAME = NULL;
        $PASSWORD = NULL;
        echo '<p class="error">You must enter in a username and password to continue</p>';
    }
    
    //If form has been validated then continue to home page
    if ($USERNAME && $PASSWORD) {
        <input type="hidden" name="redirect" value="">
    }
    ?>

        <h1>Welcome to Tuck to Go</h1>

        <p>This website was made in the hopes of making everyone's lives easier while still respecting the busy schedules of the Tuck staff so the website will only run on limited hours currently.</p>

        <p>Please make and order, pick your desired pick-up time and checkout.</p>

        <form>
            <fieldset>
                <legend>Please Sign in to continue:</legend>

                <div class="container">
                    <label><b>Username:</b></label></br>
                    <input type="text" placeholder="Enter Username"name="uname" required><br/>                    
                    <label><b>Password:</b></label><br/>
                    <input type="password" placeholder="Enter Password" name="psw" required><br/>
                    <input type="checkbox" checked="checked"> Remember me <br/>
                    <button type="submit">Login</button>

                    <!--<form action="new_user.html">
                        <button type="button">Create a New User</button>
                    </form> -->
                    
                </div>

                
            </fieldset>
        </form>

    <?php
    include ('/footer.html');
    ?>