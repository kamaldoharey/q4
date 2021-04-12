<?php include_once("config.php"); ?>

<?php

// reg__username
// reg__name
// reg__email
// reg__phoneno
// reg__pwd


// for ($i = 0; $i < 10; $i++) {
// }


if (isset($_POST['submit'])) {

    $un = $_POST['reg__username'];
    $ufn = $_POST['reg__name'];
    $uemail = $_POST['reg__email'];
    $uph = $_POST['reg__phoneno'];
    $u_pwd = $_POST['reg__pwd'];
    $u_cpwd = $_POST['reg__cpwd'];

    // $un = "kamal";
    // $ufn = "kamal";
    // $uemail = "kamal";
    // $uph = "kamal";
    // $u_pwd = "kamal";
    // $u_cpwd = "kamal";



    if ($u_pwd != $u_cpwd) {
        echo "<script> alert('password did not match'); </script>";
    } else {


        /* 
        just testing purpose
        echo $un;
        echo $ufn;
        echo $uemail;
        echo $uph;
        echo $u_pwd;
        */
        $ins = "INSERT INTO q4t(username, fullname, email, phone, passwo) VALUES (
        '" . $un . "',
        '" . $ufn . "',
        '" . $uemail . "',
        '" . $uph . "',
        '" . $u_pwd . "'
        )";
        // $re = $conn->query($ins);
        if ($conn->query($ins) === TRUE) {
            echo "<script> alert('Insert sucessfully'); </script>";
        } else {
            echo "<script> alert('Somthing went wrong'); </script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <table>
        <form action="" method="POST">
            <tr>
                <td><label for="reg_username">User name</label></td>
                <td><input type="text" id="reg_username" name="reg__username"></td>
            </tr>

            <tr>
                <td><label for="reg_name">Full Name</label></td>
                <td><input type="text" id="reg_name" name="reg__name"></td>
            </tr>

            <tr>
                <td><label for="reg_email">E-mail</label></td>
                <td><input type="text" id="reg_email" name="reg__email"></td>
            </tr>
            <tr>
                <td><label for="reg_phoneno">Phone No.</label></td>
                <td><input type="text" id="reg_phoneno" name="reg__phoneno"></td>
            </tr>
            <tr>
                <td><label for="reg_pwd">Password</label></td>
                <td><input type="text" id="reg_pwd" name="reg__pwd"></td>
            </tr>
            <tr>
                <td><label for="reg_cpwd">Confirm Password</label></td>
                <td><input type="text" id="reg_cpwd" name="reg__cpwd"></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name="submit"></td>
            </tr>
        </form>
    </table>
</body>

</html>