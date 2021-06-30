<?php 
    include("template/headerForm.php");
    include("template/sidebar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <style> 
        table {
        position: absolute;
        left: 58%;
        /* top: 40%; */
        margin-top: 20%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 960px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    #header{
        background-color: #08C1C1;
        color: #fff;
    }
    .btn-success{
        background: #2CE307 ;
    }
    .btn-danger{
        background: #F52B07  ;
    }
    </style>
</head>
<body>
        <table>
            <tr id="header">
                <th>First name</th>
                <th>Last name</th>
                <th>Age</th>
                <th>Country</th>
                <th>Gender</th>
                <th>Function</th>
            </tr>
            <tr>
                <td>John </td>
                <td>Doe </td>
                <td>25 </td>
                <td>USA </td>
                <td>Male </td>
                <td> 
                    <a href="" target="_blank"><button type="button" class="btn btn-success" id="btn1">Update</button></a>
                    <a href="" target="_blank"><button type="button" class="btn btn-danger" id="btn1">Delete</button></a>
                </td>
            </tr>
        </table>
</body>
</html>