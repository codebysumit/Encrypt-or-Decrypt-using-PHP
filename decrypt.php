<?php
    include("function.php");
    $data=$hash=$pubkey=$pubkeyinbin="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hash = $_POST["hash"];
        $pubkey = $_POST["pubkey"];
        $pubkeyinbin = sumit_public_key_bin($pubkey);
        $data = sumit_decrypt($hash, $pubkeyinbin);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decrypt</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Decrypt</h2>
        <table>
            <tr>
                <td>Encrypt hash</td>
                <td><input type="text" name="hash" value="<?php echo $hash ?>" id="#"></td>
            </tr>
            <tr>
                <td>Public key</td>
                <td><input type="text" name="pubkey" value="<?php echo $pubkey ?>" id="#"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
            <tr>
                <td>Data</td>
                <td><input type="text" name="data" value="<?php echo $data ?>" id="#"></td>
            </tr>
        </table>
    </form>
</body>
</html>