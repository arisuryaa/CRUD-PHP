<?php 


include 'config/app.php';
session_start();
if(isset($_COOKIE["login"])) {
    if($_COOKIE["login"] == "sukarya") {
    $_SESSION["Login"] = true;
    
      echo "
      <script>
        document.location.href = 'index.php';
      </script>
    ";
    }
}

if (isset($_POST["submit"])) {

    login($_POST);    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Register</title>
    <style>
    * {
        margin: 0;
        font-family: "Poppins", sans-serif;
    }

    body {
        height: 100vh;
        overflow: hidden;
    }

    .container {
        height: 100vh;
        display: flex;
        align-items: center;
        background-color: #f8f9fa;
    }

    .foto {
        width: 50%;
        height: 100%;
        background-color: #0656d0;
        box-shadow: 0 4px 4px 0px rgba(0, 0, 0, 0.25);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .foto img {
        width: auto;
        height: 22rem;
    }


    .forme {
        border: 1px solid black;
        height: 100%;
        width: 65%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    div .form-isi1 h1 {
        padding-bottom: 10px;
    }

    div .form-isi1 p {
        border-bottom: 1px solid gray;
        padding-bottom: 20px;

    }

    form input[type="text"] {
        width: 95%;
        padding: 10px;
        display: block;
        margin: 15px 0;
        border: 1px solid #000000;
        border-radius: 5px;
        background-color: #fff;
    }

    form input[type="password"] {
        width: 95%;
        padding: 10px;
        display: block;
        margin: 15px 0;
        border: 1px solid #000000;
        border-radius: 5px;
        background-color: #fff;
    }

    .button-submit button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    .regist {
        padding-top: 1.4rem;
        text-align: center;
    }

    .regist a {
        text-decoration: none;
        color: #007bff;
    }

    .checkbox {
        margin-bottom: 10px;
    }

    @media(max-width: 480px) {

        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
        }

        .foto {
            display: none;
       }

        .forme {
            border: none;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 50px;
            margin-left: 50px;
        }

        .form-isi1 h1 {
            font-size: 27px;
        }

        #karya {
            border: 1px solid #fafafa;
            background-color: #ebefef;
        }

    }
    </style>
</head>

<body>

    <div class="container">
        <div class="foto">
            <img src="asset/img/code.png" alt="">
        </div>
        <div class="forme">
            <form action="" method="POST">
                <div class="mb-3 form-isi1">
                    <h1>Log In to your Account</h1>
                    <p>Welcome Back! Please Login Account</p>
                    <input id="karya" required type="text" class="form-control" id="username" placeholder="masukkan username"
                        name="username">
                </div>
                <div class="mb-3 form-isi">
                    <input id="karya" required type="password" class="form-control" id="password" placeholder="Masukkan Password"
                        name="password">
                </div>
                <div class="mb-3 form-isi checkbox">
                    <input type="checkbox" class="form-control" id="remember" placeholder="Masukkan Password"
                        name="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <div class="button-submit">
                    <button type="submit" name="submit">Submit</button>
                </div>
                <div class="regist">
                    <span>
                        don't have an account?
                        <a href="register.php">Register</a>
                    </span>
                </div>
            </form>
        </div>
    </div>

</body>

<?php include "layout/footer.php"; ?>

</html>