<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    .button {
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .button:hover {background-color: #3e8e41}

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
</style>
<body>
<div>***** Map *****
    <img src="snap.jpg" alt="snap" width="240" height="160"><br>
<img src="/resources/views/violet.png" alt="test_snap" width="240" height="160" " > <br>
<img src="http://www.codeproject.com/KB/GDI-plus/ImageProcessing2/img.jpg" width="240" height="160" >
    <div class="picture">
    <button class="button" onclick="post()">Show image</button>
    <script>
        function post() {

            //system("jpeg C:\\Users\\TO_MANG\\Documents\\campustest\\public\\test_snap.jpg")
            /*var x = document.createElement("IMG");
            x.setAttribute("src","/test_snap.jpg");
            x.setAttribute("width","240");
            x.setAttribute("height","160")
            x.setAttribute("alt","Test image");
            document.body.appendChild(x);*/
        }
    </script>
    </div>
</div>
</body>
</html>