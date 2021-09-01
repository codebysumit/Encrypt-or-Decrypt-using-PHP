<?php
    include("function.php");
    $data=$hash=$pubkey=$pubkeyinhex="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST["data"];
        $pubkey = sumit_random_public_key();
        $hash = sumit_encrypt($data, $pubkey);
        $pubkeyinhex = sumit_public_key_hex($pubkey);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encrypt</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Encrypt</h2>
        <table>
            <tr>
                <td>Data</td>
                <td><input type="text" name="data" value="<?php echo $data ?>" id="#"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
            <tr>
                <td>Encrypt hash</td>
                <td><input type="text" name="hash" value="<?php echo $hash ?>" id="#"></td>
            </tr>
            <tr>
                <td>Public key</td>
                <td><input type="text" name="pubkey" value="<?php echo $pubkeyinhex ?>" id="#"></td>
            </tr>
        </table>
    </form>
</body>
</html>