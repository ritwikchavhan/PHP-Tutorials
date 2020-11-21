<html>
    <head>
        <title>Dashboard</title>
    </head>
    <style>
        html{
            background-color: #56baed;
        }
        .wrapper{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
    }
    .dashboardcontent{
            background: white;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
    }
    .heading{
        border-bottom: 2px solid steelblue;
    }

    ul li{
        text-decoration: none;
        display: inline-block;
        border: 3px solid steelblue;
        padding: 10px;
    }
    ul li:hover{
        background-color: skyblue;
        transition: 0.5s;
    }
    </style>
    <body>

    <ul>
        <a href="index.php"><li>Dashboard</li></a>
        <a href="datalist.php"><li>Datalist</li></a>
        <a href="register.php"><li>Register</li></a>
    </ul>
        <div class="wrapper">
            <div class="dashboardcontent">
                <h1 class="heading">REGISTRATION</h1>
                <h1>
                    <?php
                    $connect =  mysqli_connect("localhost","root","","php_tutorial");

                    $count = mysqli_query($connect , "SELECT * FROM `register`");

                    echo mysqli_num_rows($count);
                    ?>
                </h1>
            </div>
        </div>
    </body>
</html>
