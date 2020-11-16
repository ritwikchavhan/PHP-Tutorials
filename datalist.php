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
    </style>
    <body>
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
                        <tr>
                            <td>1</td>
                            <td>Ritwik Chavhan</td>
                            <td>ritwikchavhan19@gmail.com</td>
                            <td>1234567890</td>
                            <td>Chavhan Qtr.</td>
                            <td>
                                <button class="delete">Delete</button>
                                <button class="update">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ritwik Chavhan</td>
                            <td>ritwikchavhan19@gmail.com</td>
                            <td>1234567890</td>
                            <td>Chavhan Qtr.</td>
                            <td>
                                <button class="delete">Delete</button>
                                <button class="update">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ritwik Chavhan</td>
                            <td>ritwikchavhan19@gmail.com</td>
                            <td>1234567890</td>
                            <td>Chavhan Qtr.</td>
                            <td>
                                <button class="delete">Delete</button>
                                <button class="update">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ritwik Chavhan</td>
                            <td>ritwikchavhan19@gmail.com</td>
                            <td>1234567890</td>
                            <td>Chavhan Qtr.</td>
                            <td>
                                <button class="delete">Delete</button>
                                <button class="update">Update</button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </body>
</html>