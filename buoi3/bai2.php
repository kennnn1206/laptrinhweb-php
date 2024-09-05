<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }
        body{
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            width: 550px;
            padding: 40px;
            border: 2px solid #8f8f8f;
            border-radius: 10px;
            box-shadow: 5px 5px 15px #8f8f8f;
        }
        div{
            width: 240px;
            padding-bottom: 30px;
        }
        .title{
            font-size: 20px;
        }
        .formInput{
            width: 100%;
            height: 32px;
            border-radius: 5px;
            border: 1px solid #8f8f8f;
            margin: 8px 0 6px 0;
        }
        p{
            font-size: 12px;
            color: #474747;
        }
        div.checkBox{
            padding: 8px 0;
            font-size: 12px;
            display: flex;
            align-items: center;
            width: 240px;
        }
        label.check{
            padding-left: 10px;
        }
        #submitBtn{
            grid-column: span 2;
            height: 36px;
            background-color: #08A045;
            border: none;
            border-radius: 10px;
            font-weight: bold;
        }
        #submitBtn:hover{
            background-color: #21D375;
        }
       
        .output {
            grid-column: span 2;
            width: 550px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }

        .output h3 {
            font-size: 24px;
            color: #08A045;
            margin-bottom: 10px;
        }

        .output p {
            font-size: 16px;
            color: #333;
            margin: 5px 0;
        }

        .error {
            color: red;
        }

        .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="file"],
    .form-group textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-group textarea {
        height: 100px;
        resize: vertical;
    }

    .checkbox-group {
        display: flex;
        flex-wrap: wrap;
        color: #8f8f8f;
    }

    .checkbox-group label {
        width: 48%;
        margin-bottom: 10px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>
</head>
<body>
<?php
    $firstName = $lastName = $mail = $invoiceId = "";
    $payFor = [];
    $errors = [];
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["firstName"])) {
            $errors['firstName'] = "Tên là bắt buộc.";
        } 

        if (empty($_POST["lastName"])) {
            $errors['lastName'] = "Họ là bắt buộc.";
        } 

        if (empty($_POST["mail"])) {
            $errors['mail'] = "Email là bắt buộc.";
        } else if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = "Email không hợp lệ.";
        } 

        if (empty($_POST["invoiceId"])) {
            $errors['invoiceId'] = "Mã hóa đơn là bắt buộc.";
        } else if (!is_numeric($_POST["invoiceId"])) {
            $errors['invoiceId'] = "Mã hóa đơn phải là số.";
        }

        if (empty($_POST["pay_for"])) {
            $errors['pay_for'] = "Bạn phải chọn ít nhất một mục trong phần 'Pay For'.";
        } else {
            $payFor = $_POST["pay_for"];
        }


        if (empty($errors)) {
            echo '<div class="output">';
            echo "<h4>Form đã được gửi thành công với các dữ liệu sau:</h4>" ;
            echo "<br>";
            echo "Họ Tên: " .htmlspecialchars($_POST["firstName"]) . " " .htmlspecialchars($_POST["lastName"]) ."<br>";
            echo "Email: " .htmlspecialchars($_POST["mail"]) . "</br>";
            echo "Mã hóa đơn: " .htmlspecialchars($_POST["invoiceId"]) . "</br>";
            echo "Pay for: " . implode(", ", $payFor) . "</br>";
            echo '</div>';
        }
    }

    ?>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2 style="grid-column: span 2; text-align: center;">Payment Receipt Upload Form</h2>
        <hr  style="grid-column: span 2; width: calc(100% + 80px); transform: translate(-70px); margin: 30px;">
        <label for="firstName" class="title" style="grid-column: span 2;">Name</label>
        <div>
            <input type="text" id="firstName" name="firstName" class="formInput" value="<?php echo $firstName; ?>">
            <!-- <p>
                <?php
                    if(isset($_POST['submit'])){
                        if(true){
                            echo "2";
                        } else {
                            echo "3";
                        }
                    } else {
                        echo "First name";
                    }
                ?>
            </p> -->
            <p class="error"><?php echo isset($errors['firstName']) ? htmlspecialchars($errors['firstName']) : '<p style="color: black;">First name</p>'; ?></p>
        </div>
        <div>
            <input type="text" id="lastName" name="lastName" class="formInput" value="<?php echo $lastName; ?>">
            <p class="error"><?php echo isset($errors['lastName']) ? htmlspecialchars($errors['lastName']) :  '<p style="color: black;">Last name</p>'; ?></p>
        </div>
        <div>
            <label for="mail" class="title">Mail</label>
            <input type="mail" id="mail" name="mail" class="formInput" value="<?php echo $mail; ?>">
            <p class="error"><?php echo isset($errors['mail']) ? htmlspecialchars($errors['mail']) : '<p style="color: black;">example@example.com</p>'; ?></p>
        </div>
        <div>
            <label for="invoiceId" class="title">Invoice ID</label>
            <input type="text" id="invoiceId" name="invoiceId" class="formInput" value="<?php echo $invoiceId; ?>">
            <p class="error"><?php echo isset($errors['invoiceId']) ?  htmlspecialchars($errors['invoiceId']) : ''; ?></p>
        </div>
        <div style="grid-column: span 2; width: 100%; padding-bottom: 20px;">
            <label class="title" style="margin-bottom: 10px; display: block;">Pay For</label>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); width: 550px; padding: 0;">
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="35K Category" <?php echo in_array("35K Category", $payFor) ? 'checked' : ''; ?>>
                    <label class="check">35K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="15K Category" <?php echo in_array("15K Category", $payFor) ? 'checked' : ''; ?>>
                    <label class="check">15K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="55K Category" <?php echo in_array("55K Category", $payFor) ? 'checked' : ''; ?>>
                    <label class="check">55K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="75K Category" <?php echo in_array("75K Category", $payFor) ? 'checked' : ''; ?>>
                    <label class="check">75K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="116K Category" <?php echo in_array("116K Category", $payFor) ? 'checked' : ''; ?>>
                    <label class="check">116K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Shuttle Two Ways" <?php echo in_array("Shuttle Two Ways", $payFor) ? 'checked' : ''; ?>>
                    <label class="check">Shuttle Two Ways</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Shuttle One Way" <?php echo in_array("Shuttle One Way", $payFor) ? 'checked' : ''; ?>>
                    <label class="check">Shuttle One Way</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Compressport T-Shirt Merchandise" <?php echo in_array("Compressport T-Shirt Merchandise", $payFor) ? 'checked' : ''; ?>>
                    <label class="check">Compressport T-Shirt Merchandise</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Training Cap Merchandise" <?php echo in_array("Training Cap Merchandise", $payFor) ? 'checked' : ''; ?>>
                    <label class="check">Training Cap Merchandise</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Buf Merchandise" <?php echo in_array("Buf Merchandise", $payFor) ? 'checked' : ''; ?>>
                    <label class="check">Buf Merchandise</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Other" <?php echo in_array("Other", $payFor) ? 'checked' : ''; ?>>
                    <label class="check">Other</label>
                </div>
            </div>
            <p class="error"><?php echo isset($errors['pay_for']) ? htmlspecialchars($errors['pay_for']) : ''; ?></p>
        </div>
        <input type="submit" id="submitBtn" name="submit">
    </form>

</body>
</html>