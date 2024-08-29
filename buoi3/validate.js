// validate.js
function validateForm() {
    var nameauthor = document.getElementById("name").value;
    var namesach = document.getElementById("namesach").value;
    var namexuatban = document.getElementById("namexb").value;
    var number = document.getElementById("namxb").value;
    var errorMessage = document.getElementById("error-message");

    if (nameauthor === "" && namesach === "" && namexuatban === "" && number === "") {
    errorMessage.textContent = "Vui lòng điền tất cả thông tin.";
    return false;
    }

    if (nameauthor === "") {
        errorMessage.textContent = "Vui lòng điền tên tác giả.";
        return false;
    }

    if (namesach === "") {
        errorMessage.textContent = "Vui lòng điền tên sách.";
        return false;
    }

    if (namexuatban === "") {
        errorMessage.textContent = "Vui lòng điền nhà xuất bản.";
        return false;
    }

    if (number === "") {
        errorMessage.textContent = "Vui lòng điền năm xuất bản.";
        return false;
    }

    if (isNaN(number) || number == "") {
        errorMessage.textContent = "Năm xuất bản phải là số.";
        return false;
    }
    errorMessage.textContent = "";
    return true;
}