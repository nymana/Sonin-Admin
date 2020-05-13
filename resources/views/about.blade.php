<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About</title>
	<style>
        body{
            max-width: 100vw;
            max-height: 100vh;
            background: #fff;
            overflow: hidden;
        }
        * ,ul ,li , body{
            margin: 0;
            padding: 0;
        }
        .content{
            position: absolute;
            width: 100%;
            height: 50vh;
            top: 65vh;
            left: 0;
            transform: translateY(-50%);
        }
        .header{
            position: absolute;
            width: 100%;
            height: 10vh;
            top: 5vh;
            left: 0;
            background: #fefefe;
            text-align: center;
            font-size: 1.4rem;
            font-family: 'PT Sans', sans-serif;
            color: #2c3e50;
        }
        .lower-header{
        	line-height: 1.8em;
            position: absolute;
            width: 90%;
            height: 10vh;
            margin-left: 5%;
            top: 6rem;
            left: 0;
            text-align: justify;
            font-size: 1rem;
            font-family: 'PT Sans', sans-serif;
            color: #2c3e50;
        }
        .lower-header>h5{
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            font-family: 'PT Sans', sans-serif;
            color: #2c3e50;
            font-size: 1rem;
            border-bottom: 1px solid #000;
            padding: .2rem;
        }
        ul , li{
            list-style-type: none;
            font-family: 'PT Sans', sans-serif;
            color: #2c3e50;
        }
        ul{
            padding: 1rem;
        }
        .img>svg{
            position: absolute;
            max-width: 10rem;
            height: auto;
            top: 10vh;
            left: 50%;
            transform: translateX(-50%);
        }
        .bold{
            font-weight: bold;
            padding-top: 1.2rem;
            padding-bottom: .5rem;
        }
        hr{
            position: absolute;
            top: 70vh;
            width: 92vw;
            left: 4vw;
        }
        @media only screen and (min-width: 700px){
            ul{
                padding: 1rem 4vw;
            } 
        }
    </style>
</head>
<body>
	<h1 class="header">Апп-н тухай</h1>
	<br>
	<p class="lower-header">
		Энэхүү апп нь Хүрээ Мэдээлэл холбоо, технологийн дээд сургуулиас эрлэн гаргадаг сар тутамын Хүрээ сонингийн дижитал хувилбар юм. 
	</p>
</body>
</html>
