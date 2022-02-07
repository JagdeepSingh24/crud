
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


<script>
     
</script>
<script>
    $('#registerationform').validate({
      rules:{
        username:"required",
        email: {
                required: true,
                email: true,
                // remote: {
                //     url: "check-email.php",
                //     type: "post"
                // }
            },
        age:{
            required:true,
            minlength:2,
            number: true,
            maxlength:2
        },
        confirm_password:{
          required:true,
          minlength:5
        },
        password:{
          required:true,
          minlength:5,
          equalTo:"#confirm_password"
        },
      },
      messages:{
        username:"*Please enter your  name",

        confirm_password:{
          required:"*Please enter a password",
          minlength: "*Your password must be consist of at least 5 characters "
        },
        password:{
          required: "*Please enter a password",
          minlength:"*Your password must be consist of at least 5 characters ",
          equalTo:"*Please enter the same password as above"
        },
        age:{
          required: "*Please enter your age",
          number: "please enter valid age",
          minlength:"*Your password must be consist of at 2 characters ",
          maxlength:"*Your password must be consist of at 2 characters ",
        },
        email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address.",
              //  remote: "Email already in use!",
            }
      }
    });

</script>
<script>
    function showpassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
    <b class="control"></b>
</head>
<body>
    <main>
        <form id='registerationform' method="post"  >
            <h1>Sign Up</h1>
            <div>
                <label for="username">User Fullname:</label>
                <input type="text" name="username" placeholder="Enter Full Name"  id="username" >
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email"  name="email" placeholder="Enter Email Address" id="email" >
                
            </div>
            <div>
                <label for="age">Age :</label>
                <input type="text" name="age" placeholder="Enter your age"  id="age" >
            </div>
           
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Enter Password" title="Password should consist of numeric value and speciall character" id="password" required>
            </div>
            <input type="checkbox" onclick="showpassword()"/>Show Password
            <br>
                </br>
            <div>
                <label for="confirm password">Confirm Password:</label>
                <input type="password" name="confirm_password" placeholder="Re-Type your password" id="confirm_password" required>
            </div>
            
            <button  type="submit" name = "submit" id="submit">Register</button>
            <footer>Already a member? <a href="login.php" >Login here</a></footer>
        </form>
    </main>
    <script>
        document.getElementById('registerationform').addEventListener('submit', function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        addRecord(formData);
        });
        function addRecord(parsedData) {
        const URL = 'http://localhost/RegisterationAjax/registerationscript.php';
        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", URL, true);
        xhttp.onreadystatechange = function () {
        };
        xhttp.send(parsedData);
        }
</script>
</body>

</html>