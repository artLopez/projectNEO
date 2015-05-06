<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
         Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>signup</title>
    <meta name="description" content="">
    <meta name="author" content="Devon">

    <meta name="viewport" content="width=device-width; initial-scale=1.0">

    <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
<div>
    <header>
        <link href ="css/styles.css" rel="stylesheet" />
        <h1>NEO</h1>
    </header>

    <div>
        <fieldset>
            <legend> Sign Up</legend>

            First Name:  <input type="text" name="firstName" /> <br />
            Last Name:   <input type="text" name="lastName" /> <br />
            Nationality:   <input type="text" name="nationality" /> <br />
            Date of Birth:   <input type="text" name="dob" /> <br />
            Place of Birth:   <input type="text" name="pob" /> <br />
            Date Issued:    <input type="text" name="issue" /> <br />
            Date of Expiration: <input type="text" name="expire" <br />
            Sex:    <input type="text" name="sex" /> <br />
            Authority: <input type="text" name="authority" <br />

            Username: <input type="text" name="username" id="username"/> <span id="usernameError"></span><br />

            Password: <input type="text" name="password" id="password"/> <span id="passwordError"></span><br />
            Type Password Again: <input type="text" name="password2" /><br />


            <input type="submit" value="Sign up!" />
        </fieldset>

    </div>

    <footer>
        <p>&copy; Copyright  by ProjectNEO</p>
    </footer>
</div>
</body>
</html>
