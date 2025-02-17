<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="profile/css/regstyle.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container" style="border: 1px solid lightgrey;">
            <div class="header" style="border-bottom: 1px solid lightgrey;">
                <h2>REGISTRATION FORM</h2>
            </div>
            <form class="form" action="profile/reginsert.php" method="post" onsubmit="return validateInput()">
                <div class="form-control">
                    <lable for="firstname" name="firstname">First Name</lable>
                    <input id="txtfirstname" type="text" name="fname" placeholder="Enter Firstname" autocomplete="on" />
                    <small>Error Message</small>
                </div>
                <div class="form-control">
                    <lable for="lastname" name="lastname">Last Name</lable>
                    <input id="txtlastname" type="text" name="lname" placeholder="Enter Lastname" autocomplete="on" />
                    <small>Error Message</small>
                </div>
                <div class="form-control">
                    <lable for="email" name="email">Email</lable>
                    <input id="txtEmail" type="email" name="email" placeholder="Enter Email" autocomplete="on" />
                    <small>Error Message</small>
                </div>
                <div class="form-control">
                    <lable for="phone" name="phone">Phone Number</lable>
                    <input id="txtphone" type="number" name="mobile" placeholder="Enter Phone Number" autocomplete="on" />
                    <small>Error Message</small>
                </div>
                 <div class="form-control">
                    <lable for="address" name="address">Address</lable>
                    <input id="txtaddress" type="text" name="address" placeholder="Enter Address" autocomplete="on" />
                    <small>Error Message</small>
                </div>
                <div class="form-control">
                    <lable for="pwd" name="pwd">Password</lable>
                    <input id="txtPwd" title="Password must contain 1 number, 1 uppercase, lowercase letter & at least 5 character" type="password" name="password" placeholder="Enter Password" autocomplete="on" />
                    <small>Error Message</small>
                </div>
                <div class="form-control">
                    <lable for="conpwd" name="conpwd">Confirm Password</lable>
                    <input id="txtConPwd" type="password" name="cpassword" placeholder="Enter Password Again" autocomplete="on" />
                    <small>Error Message</small>
                </div>
                <div class="form-control">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
        <script src="profile/javascript/reg.js"></script>
    </body>
</html>