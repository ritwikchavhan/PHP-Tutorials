<?php 
    error_reporting(0);
    if( $_GET['deleteid'] ){

        $id = $_GET['deleteid'];
        $connect =  mysqli_connect("localhost","root","","php_tutorial");

        $delete = mysqli_query($connect , "DELETE FROM `register` WHERE `id` = $id ");

        if( $delete ){
            echo "Data Deleted.";
        }else{
            echo "Delete Failed.";
        }
    }

?>
<html>
    <head>
        <title>
            Register List
        </title>
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
        .tablecontent{
            background: white;
            padding: 30px;
            border-radius: 20px;
        }
        table{
            border-collapse: collapse;
        }
        th,td{
            border: 1px solid grey;
            padding: 10px;
        }

        .delete{
            background-color: #ff7675;
            border: none;
            padding: 10px;
            font-size: 20px;
            font-weight: 900;
        }
        .update{
            background-color: #74b9ff;
            border: none;
            padding: 10px;
            font-size: 20px;
            font-weight: 900;
        }

        tr:nth-child(even){
            background-color: #dddddd;
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
            <div class="tablecontent">

                <table>
                    <thead>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        <?php 
                            $connect =  mysqli_connect("localhost","root","","php_tutorial");

                            $registerlist = mysqli_query($connect , "SELECT * FROM `register`");
                            $counter = 1;
                            while( $row = mysqli_fetch_assoc($registerlist) ){
                        ?>
                                <tr>
                                    <td><?php echo $counter ?></td>
                                    <td><?php echo $row['firstname'].' '.$row['lastname'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['mobile'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td>
                                        <a href="datalist.php?deleteid=<?php echo $row['id']; ?>"><button class="delete">Delete</button></a>
                                        <button class="update">Update</button>
                                    </td>
                                </tr>
                        <?php
                        $counter++;
                        }  
                    ?>
                        
                        
                    </tbody>
                </table>

            </div>
        </div>
    </body>
</html>
