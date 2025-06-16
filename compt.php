<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylisation.css">
    <link rel="stylesheet" href="deco.css">
    <style>
        form{
            /* height: 800px; */
            /* width: 30%; */
            background-color: slategrey;
        }
        .carte {
            width: 60%;
            height:50%;
            background: #ecf6ff;
            border: 2px solid #3498db;
            border-radius: 10px;
            padding: 20px;
            margin: 40px auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            font-family: sans-serif;
        }
        .info {
            margin-bottom: 12px;
            padding: 10px;
            background-color: #ffffff;
            border-left: 5px solid #3498db;
            border-radius: 6px;
        }
        .info strong {
            color: #2c3e50;
        }
        
        /* la photo du compte */
        .compt {
            text-align: center;
            margin-bottom: 30px;
            
}

        .compt img {
            width: 200px;
            height: 220px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #3498db;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

    </style>
</head>
<body>
    <main>
    <br><br>
    
        <form action="compt">
            

                <?php include("compt.txt");?>

        </form>

    <br><br>
    </main>
</body>
</html>