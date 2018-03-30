<!DOCTYPE html>
<html>
<head>
    <title>No Access</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300">
    <style>
        html, body {
            height: 100%;
        }
        body {

            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 300%;
            font-family: '28 Days Later';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 72px;
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <img src="fb.png">
            <div class="title">ERROR</div>
            <p><font face="Arial"> Maaf, pencarian anda tidak diketahui</p>
            <p><a href="{{ url('/') }}" class="btn btn-primary">BACK</a></font></p>
        </div>
    </div>
</body>
</html>