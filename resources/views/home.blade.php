<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <style>
            .demo{ background: #F2F2F2; }
.form-container{
    background: #ecf0f3;
    font-family: 'Nunito', sans-serif;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}
.form-container .form-icon{
    color: #ac40ab;
    font-size: 55px;
    text-align: center;
    line-height: 100px;
    width: 100px;
    height:100px;
    margin: 0 auto 15px;
    border-radius: 50px;
    box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px #fff;
}
.form-container .title{
    color: #ac40ab;
    font-size: 25px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
    margin: 0 0 20px;
}
.form-container .form-horizontal .form-group{ margin: 0 0 25px 0; }
.form-container .form-horizontal .form-group label{
    font-size: 15px;
    font-weight: 600;
    text-transform: uppercase;
}
.form-container .form-horizontal .form-control{
    color: #333;
    background: #ecf0f3;
    font-size: 15px;
    height: 50px;
    padding: 20px;
    letter-spacing: 1px;
    border: none;
    border-radius: 50px;
    box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
    display: inline-block;
    transition: all 0.3s ease 0s;
}
.form-container .form-horizontal .form-control:focus{
    box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
    outline: none;
}
.form-container .form-horizontal .form-control::placeholder{
    color: #808080;
    font-size: 14px;
}
.form-container .form-horizontal .btn{
    color: #000;
    background-color: #ac40ab;
    font-size: 15px;
    font-weight: bold;
    text-transform: uppercase;
    width: 100%;
    padding: 12px 15px 11px;
    border-radius: 20px;
    box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px #fff;
    border: none;
    transition: all 0.5s ease 0s;
}
.form-container .form-horizontal .btn:hover,
.form-container .form-horizontal .btn:focus{
    color: #fff;
    letter-spacing: 3px;
    box-shadow: none;
    outline: none;
}
        </style>
</head>

<body>
    <!doctype html>
    <html lang="en">
    
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <style>
            .demo { background: #F2F2F2; }
            .form-container {
                background: #ecf0f3;
                font-family: 'Nunito', sans-serif;
                padding: 40px;
                border-radius: 20px;
                box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
            }
            .form-container .form-icon {
                color: #ac40ab;
                font-size: 55px;
                text-align: center;
                line-height: 100px;
                width: 100px;
                height: 100px;
                margin: 0 auto 15px;
                border-radius: 50px;
                box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px #fff;
            }
            .form-container .title {
                color: #ac40ab;
                font-size: 25px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 1px;
                text-align: center;
                margin: 0 0 20px;
            }
            .form-container .form-group { margin: 0 0 25px 0; }
            .form-container .form-group label {
                font-size: 15px;
                font-weight: 600;
                text-transform: uppercase;
            }
            .form-container .form-control {
                color: #333;
                background: #ecf0f3;
                font-size: 15px;
                height: 50px;
                padding: 20px;
                letter-spacing: 1px;
                border: none;
                border-radius: 50px;
                box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
                display: inline-block;
                transition: all 0.3s ease 0s;
            }
            .form-container .form-control:focus {
                box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
                outline: none;
            }
            .form-container .form-control::placeholder {
                color: #808080;
                font-size: 14px;
            }
            .form-container .btn {
                color: #000;
                background-color: #ac40ab;
                font-size: 15px;
                font-weight: bold;
                text-transform: uppercase;
                width: 100%;
                padding: 12px 15px 11px;
                border-radius: 20px;
                box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px #fff;
                border: none;
                transition: all 0.5s ease 0s;
            }
            .form-container .btn:hover,
            .form-container .btn:focus {
                color: #fff;
                letter-spacing: 3px;
                box-shadow: none;
                outline: none;
            }
        </style>
    </head>
    
    <body class="demo">
        <main>
            <div class="form-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <div class="form-container">
                                <div class="form-icon"><i class="fa fa-user"></i></div>
                                <h3 class="title">Login</h3>
                                <form action="{{ url('/') }}/form" method="post" class="form-horizontal">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" name="email" type="email" placeholder="Email address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" name="password" type="password" placeholder="Password" required>
                                    </div>
                                    <input type="submit" class="btn btn-default" value="Login">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
    
    </html>
    