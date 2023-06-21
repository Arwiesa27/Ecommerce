{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{
        background: rgb(169, 169, 169);
        }
        .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        margin: 20px auto;
        transform: translate(-50%, -55%);
        background: rgb(192, 192, 192);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgb(27, 128, 1);
        border-radius: 10px;
        }
        .login-box p:first-child {
        margin: 0 0 30px;
        padding: 0;
        color: #008000;
        text-align: center;
        font-size: 2.5rem;
        font-weight: bold;
        letter-spacing: 1px;
        }
        .login-box .user-box {
        position: relative;
        }
        .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #FFFF00;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #008000;
        outline: none;
        background: transparent;
        }
        .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #FFFF00;
        pointer-events: none;
        transition: .5s;
        }
        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
        top: -20px;
        left: 0;
        color: #008000;
        font-size: 12px;
        }
        .login-box form button {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        font-weight: bold;
        color: #008000;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 20px;
        letter-spacing: 3px;
        background-color: transparent;
        border: none
        }
        .login-box button:hover {
        background: #008000;
        color: #FFFF00;
        border-radius: 5px;
        }
        .login-box button span {
        position: absolute;
        display: block;
        }
        .login-box button span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #FFFF00);
        animation: btn-anim1 1.5s linear infinite;
        }
        @keyframes btn-anim1 {
        0% {
            left: -100%;
        }
        50%,100% {
            left: 100%;
        }
        }
        .login-box button span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #FFFFFF);
        animation: btn-anim2 1.5s linear infinite;
        animation-delay: .375s
        }
        @keyframes btn-anim2 {
        0% {
            top: -100%;
        }
        50%,100% {
            top: 100%;
        }
        }
        .login-box button span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #FFFF00);
        animation: btn-anim3 1.5s linear infinite;
        animation-delay: .75s
        }
        @keyframes btn-anim3 {
        0% {
            right: -100%;
        }
        50%,100% {
            right: 100%;
        }
        }
        .login-box button span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #FFFFFF);
        animation: btn-anim4 1.5s linear infinite;
        animation-delay: 1.125s
        }
        @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }
        50%,100% {
            bottom: 100%;
        }
        }
        .login-box p:last-child {
        color: #008000;
        font-size: 14px;
        text-decoration: none
        }

        .login-box a.a2 {
        color: #FFFF00;
        text-decoration: none;
        }

        .login-box a.a2:hover {
        background: transparent;
        color: #aaa;
        border-radius: 5px;
        }
    </style>
    <title>Login</title>
    <link href='a.png' rel='shortcut icon'>
    <script type="text/javascript" charset="utf-8"></script>
  </head>
  <body>
    <div class="login-box">
      <p>Login</p>
      <form action="/auth" method="post">
        @csrf
        <div class="user-box">
          <input required="" type="email" name="email" id="email" value="" />
          <label>Email</label>
        </div>
        <div class="user-box">
          <input required="" type="password" name="password" id="password" value="" />
          <label>Password</label>
        </div>
        <a href="#">
            <center>
                <button type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Login
                  </button>
            </center>
      </form>
        <a href="/daftar" class="a2">Register !</a>
    </div>
  </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        div.card {
        width: 400px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.712);
        text-align: center;
        }
    </style>
</head>
<body class="bg-secondary">
    <form action="/auth" method="post">
        @csrf
        <div class="container py-5 w-25">
            <div class="card mt-5 flex-fill" style="max-width: 20rem">
                <h2 class="text-center fw-bold mt-2">LOGIN</h2>
                <div class="form-outline mb-3 mt-2 form-control">
                    <input type="email" id="form2Example1" name="email" class="form-control" placeholder="Email" />
                </div>
                <div class="form-outline mb-3 form-control">
                    <input type="password" name="password" id="form2Example2" class="form-control" placeholder="Password" />
                </div>
                <center><button class="btn btn-primary mb-2"><input style="border: none" class="bg-transparent text-white" type="submit" value="Login"></button></center>
                <div class="text-center">
                    <p>Not a member? <a href="/daftar" class="text-decoration-none">Register</a></p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
