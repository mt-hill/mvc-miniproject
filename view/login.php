<html>
<head></head>
    <body>
        <?php
            echo $rslt;
        ?>
        <form action='' method='POST'>
            <label>Username</label>
            <input id='email' value='' name='email' type='email' required/>
            <br>

            <label>Password</label>
            <input id='password' name='password' type='password' required/>
            <br>

            <button type='submit'><span>Login</span></button> 
            <button type='reset'><span>Cancel</span></button>
        </form>
    </body>