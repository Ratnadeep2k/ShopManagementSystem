<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body class="container-fluid">
    <h3>All Registered Users</h3>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">User Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'database.php';
            $query = 'select * from users';
            $users = mysqli_query($conn, $query);
            while ($user = mysqli_fetch_array($users)) {   
            echo "
                <tr>
                    <td>" . $user["uid"]. "</td>
                    <td>" . $user["firstName"] . "</td>
                    <td>". $user["lastName"]. "</td>
                    <td>". $user["email"]. "</td>
                    <td>". $user["password"]. "</td>
                </tr> ";
            }
        ?>
        </tbody>
    </table>
</body>
</html>



