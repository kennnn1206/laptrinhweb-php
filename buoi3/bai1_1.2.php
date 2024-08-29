<?php 
    
    if(isset($_POST['submit'])) {
        echo "Tên tác giả: ". $tacgia = $_POST['nametgia'];
        echo "<br>";
        echo "Tên sách: ". $sach = $_POST['namesach'];
        echo "<br>";
        echo "Nhà xuất bản: ". $nxb = $_POST['namexb'];
        echo "<br>";
        echo "Năm xuất bản: ". $namxb = $_POST['namxb'];
    }

?>
<!-- 
<?php 
    
    if(isset($_GET['submit'])) {
        echo "Tên tác giả: ". $tacgia = $_GET['nametgia'];
        echo "<br>";
        echo "Tên sách: ". $sach = $_GET['namesach'];
        echo "<br>";
        echo "Nhà xuất bản: ". $nxb = $_GET['namexb'];
        echo "<br>";
        echo "Năm xuất bản: ". $namxb = $_GET['namxb'];
    }

?> -->