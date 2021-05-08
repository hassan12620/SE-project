<html>
@section('title','LoginPage')

@section('content')

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="project.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .headerr{
            float:top;
        }

        .beauty{
            color:#49C8C0;
            top: 3px;
            position: absolute;
            width: 217px;
            height: 72px;
            left: 97px;
            font-family: Arima Madurai;
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            line-height: 59px;
        }
        .dent{
            color:#B0C9A5;
            top: 3px;
            position: absolute;
            left: 210px;
            width: 217px;
            height: 72px;
            font-family: Arima Madurai;
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            line-height: 59px;
            
        }
        .containerButton
        {
            top: 3px;
            float:right;
        }
        .login{
            position: absolute;
            width: 139px;
            height: 45px;
            left: 1081px;
            top: 22px;
            font-family: Arima Madurai;
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 39px;
            color: #FFFFFF;
            border-radius:20px;
            background: #0C7973
        }
        .signup{
            position: absolute;
            width: 139px;
            height:45px;
            left: 1232px;
            top: 22px;
            font-family: Arima Madurai;
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 39px;
            color: #FFFFFF;
            border-radius:20px;
            background:#49C8C0;
        }
        .navb{
            position: absolute;
            width: 1246px;
            height: 52.98px;
            left: 97px;
            top: 75px;
            background: #062C11;
            mix-blend-mode: normal;
            border-radius: 40px;
        }
        .navbar-brand{
            font-family: Arima Madurai;
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            padding-left:75px;
            color: #FFFFFF;
        }
        .navbar-brand :hover{
            opacity: 1.0;

        }
        .b{
            position: absolute;
            width: 526px;
            height: 160px;
            padding:42px 248px 141px 37px;
            font-family: Arima Madurai;
            font-style: normal;
            font-weight: 500;
            font-size: 48px;
            line-height: 78px;

            color: #FF3D00;
        }
        .p2{
            position: absolute;
            width: 526px;
            height: 160px;
            padding:118px 26px 67px 196px;

            font-family: Arima Madurai;
            font-style: normal;
            font-weight: 500;
            font-size: 48px;
            line-height: 78px;

            color: black;
        }
        .WhiteBox {
            position: absolute;
            width: 504px;
            height: 216px;
            left: 176px;
            top: 171px;
            background: rgba(255, 200, 255);
            border-radius: 50px;
            
        }

        body{
            background-image:url('body.jpeg');
        }
        .username{
            font-family: Arima Madurai;
            font-style: normal;
            font-weight: 500;
            font-size: 48px;
            line-height: 78px;
            color: black;
            margin:378px 224px 611px 986px;
        }
        .usernameText{
            border-radius: 40px;
            width: 269px;
            height: 97px;
            margin:418px 176px auto 990px;
        }
        .password{
            font-family: Arima Madurai;
            font-style: normal;
            font-weight: 500;
            font-size: 48px;
            line-height: 78px;
            color: black;
            margin:532px 238px 449px 986px;
        }
        .passwordText{
            border-radius: 40px;
            width: 269px;
            height: 97px;
            margin:583px 176px 341px 990px;
        }
        .loginSubmit{
            border-radius: 40px;
            width: 182px;
            height: 68px;
            margin:695px 222px 264px 1031px;
            background: rgba(106, 32, 32, 0.3);
            color:#FF5C00;
            font-family: Arima Madurai;
            font-style: normal;
            font-weight: 500;
            font-size: 40px;
            line-height: 78px;
        }
        .photoo{
            background-image:url()
        }
    </style>

</head>
<body>

            <h1 class="beauty">Beauty </h1><h1 class="dent">Dent</h1>
            <div class="containerButton">
                <button class="login">Login</button>
                <button class="signup">Signup</button>
            </div>
            <div>
                <nav class="navb">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Home</a>
                        <a class="navbar-brand" href="#">Services</a>
                        <a class="navbar-brand" href="#">Gallery</a>
                        <a class="navbar-brand" href="#">About</a>
                        <a class="navbar-brand" href="#">Appointments</a>
                        <a class="navbar-brand" href="#">Contact us</a>
                    </div>
                </nav>
            </div>
    <div class="photoo">
            <div class="WhiteBox">        
                    <h1 class="b"> Your Smile</h1>
                    <h1 class="p2">is our priority</h1>
            </div>

            <form action="/check" method="post">
                <h3 class="username">Username</h3>
                <input type="text" name="username" class="usernameText">
                <h3 class="password">Password</h3>
                <input type="text" name="password" class="passwordText">
                {{csrf_field()}}
                <button class="loginSubmit">Login</button>
            </form>
            @foreach($persons as $p)
            <li><strong>{{ $p->First_Name }}</strong>
            <br>{{ $p->  Password}}

            
            </li>
            
        @endforeach
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
 