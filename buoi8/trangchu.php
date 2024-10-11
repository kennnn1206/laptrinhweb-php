<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
</head>
<body>
    <div class="main"><a href="loginform.php">Đăng nhập</a></div>
    <p>TK: Kennn</p>
    <p>MK: @12345</p>
</body>
<script>
    $(document).ready(function(){
        $(".login").click(function(){
            $(".main").load("loginform.php");
        });
    })
</script>
</html>