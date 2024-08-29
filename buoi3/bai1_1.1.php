<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        form {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        form input[type="text"],
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        form button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<form id="myForm" action="bai1_1.2.php" method="post" onsubmit="return validateForm()">
    <label>Tác giả</label>
    <input id="name" type="text" name="nametgia">
    <br>
    <label>Tên sách</label>
    <input id="namesach" type="text" name="namesach">
    <br>
    <label>Nhà xuất bản</label>
    <input id="namexb" type="text" name="namexb">
    <br>
    <label>Năm xuất bản</label>
    <input id="namxb" type="number" name="namxb">
    <br>
    <p id="error-message" style="color:red;"></p>
    <button type="submit" name="submit">Submit</button>

</form>

<!-- <form id="myForm" action="bai1_1.php" method="get" onsubmit="return validateForm()">
    <label>Tác giả</label>
    <input id="name" type="text" name="nametgia">
    <br>
    <label>Tên sách</label>
    <input id="namesach" type="text" name="namesach">
    <br>
    <label>Nhà xuất bản</label>
    <input id="namexb" type="text" name="namexb">
    <br>
    <label>Năm xuất bản</label>
    <input id="namxb" type="number" name="namxb">
    <br>
    <p id="error-message" style="color:red;"></p>
    <button type="submit" name="submit">Submit</button>

</form> -->
    <script src="validate.js"></script>

</body>
</html>


