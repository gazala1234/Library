<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIET LIBRARY</title>
    <style>
        body {
            background-image: url('/assets/img/lib.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 15px;
            max-width: 500px;
            width: 100%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            /* Increase padding to make input fields larger */
            font-size: 16px;
        }

        /* buttons styling */
        button[type="submit"] {
            padding: 5px 20px;
            font-size: 18px;
            width: 100%;
            /* margin: 0 auto;
            display: block;
            justify-content: center;
            align-items: center; */
        }
        #button {
            background-color: rgb(111, 56, 195);
            border: none;
            color: white;
        }

        a {
            color: black !important;
        }

    </style>

    @include('boot')
</head>

<body>
    <form action="" method="post" id="signin-form">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="username">USERNAME/EMAIL</label><br>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">PASSWORD</label><br>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div>
                <button type="submit" id="button" class="btn">SIGN IN</button>
            </div>
            <div class="mt-3">
<<<<<<< HEAD
                <p>NEW USER ? <a href="#" id="signup-link">SIGN UP</a></p>
=======
                <p>New User ? <a href="#" id="signup-link">Sign Up</a></p>
>>>>>>> 56416c3a2415544cc0769cc955df1936f18f0788
            </div>
        </div>
    </form>

    <!-- Sign-up form -->
    <form action="" method="post" id="signup-form" style="display: none;">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="uname">USERNAME</label><br>
                <input type="text" class="form-control" id="uname" name="uname" required>
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label><br>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">PHONE</label><br>
                <input type="number" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="branch">BRANCH</label><br>
                <input type="text" class="form-control" id="branch" name="branch" required>
            </div>
            <div class="form-group">
                <label for="pass">PASSWORD</label><br>
                <input type="password" class="form-control" id="pass" name="pass" required>
            </div>
            <div>
                <button type="submit" id="button" class="btn">SIGN UP</button>
            </div>
            <div class="mt-3">
<<<<<<< HEAD
                <p>ALREADY HAVE AN ACCOUNT ? <a href="#" id="signin-link">SIGN IN</a></p>
=======
                <p>Already Have An Account ? <a href="#" id="signin-link">Sign In</a></p>
>>>>>>> 56416c3a2415544cc0769cc955df1936f18f0788
            </div>
        </div>
    </form>

    <script>
        // toggle between sign-in and sign-up forms
        document.getElementById('signup-link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('signin-form').style.display = 'none';
            document.getElementById('signup-form').style.display = 'block';
        });

        document.getElementById('signin-link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('signup-form').style.display = 'none';
            document.getElementById('signin-form').style.display = 'block';
        });

        // hide the options when user right clicks
        // document.addEventListener('contextmenu', function(event) {
        //     event.preventDefault();
        // });

    </script>
</body>

</html>