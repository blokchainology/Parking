<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://blokchainology.com/CDN/min24.css">
    <link rel="stylesheet" href="css/style.css">
    <title>me</title>

<body class="t-align-center">

    <div class="form d-flex j-center gap-5">
    <input class="f-size20" id="inp2" type="number" min="10" max="99" placeholder="دو رقم اول پلاک" required>

    <select required class="f-size20">
        <option value="0"> انتخاب </option>
        <option value="1"> الف </option>
        <option value="2"> ب </option>
        <option value="3"> پ </option>
        <option value="4"> ت </option>
        <option value="5"> ث </option>
        <option value="6"> ج </option>
        <option value="7"> چ </option>
        <option value="8"> ح </option>
        <option value="9"> خ </option>
        <option value="10"> د </option>
        <option value="11"> ذ </option>
        <option value="12"> ر </option>
        <option value="13"> ز </option>
        <option value="14"> ژ </option>
        <option value="15"> س </option>
        <option value="16"> ش </option>
        <option value="17"> ص </option>
        <option value="18"> ض </option>
        <option value="19"> ط </option>
        <option value="20"> ظ </option>
        <option value="21"> ع </option>
        <option value="22"> غ </option>
        <option value="23"> ف </option>
        <option value="24"> ق </option>
        <option value="25"> ک </option>
        <option value="26"> گ </option>
        <option value="27"> ل </option>
        <option value="28"> م </option>
        <option value="29"> ن </option>
        <option value="30"> و </option>
        <option value="31"> ه </option>
        <option value="32"> ی </option>
    </select>
    
    <input class="f-size20" id="inp3" type="number" min="100" max="999" placeholder="سه رقم پلاک" required>
    <input class="f-size20" id="cityCode" type="number" min="10" max="100" placeholder="کد شهر" required>
    <input class="f-size20" id="pass" type="password" placeholder="پسورد"required>
    <button id="submit" class="back-green radius-10 border-n white p-5 cursor-p">بساز</button>
</div>

<div class="qr_code" >
    <div class="qr d-flex j-center gap-10 m-20"></div>
</div>

<div class="d-flex j-center">
    <form class="d-flex j-center f-dir-col w--25 gap-10" action="Back-End/Controller.php" method="post">
        <input class="code d-none border-n f-size20 t-align-center" type="text" name="plack" readonly>
        <input class="timeVOROD  border-n f-size20 t-align-center" type="hidden" name="timeVOROD" readonly>
        <input type="hidden" name="pass" value="" id="userPassInput">
        <div class="d-flex j-center w--25">
            <button type="submit" id="ok" class=" d-none back-tan radius-15 border-n white cursor-p ">تایید</button>
        </div>
    </form>
</div>

<h1>
    <?php

    if(isset($_REQUEST['info'])){
        if($_REQUEST['info'] == 'true'){
            echo " موفقیت آمیز بود";
        }else if($_REQUEST['info'] == "false"){
            echo "در اجرای درخواست شما مشکلی پیش آمده برای رفع این مشکل با پشتیبانی تماس بگیرید";
            echo "<a href='https://blokchainology.com'>Blokchainology Team</a>";
        }
    }else {
        echo " ";
    }

    if(isset($_REQUEST['login'])){
        if($_REQUEST['login'] == 'true'){
            echo " موفقیت آمیز بود";
        }else if($_REQUEST['login'] == "false"){
            echo "در اجرای درخواست شما مشکلی پیش آمده مدتی بعد دوباره تلاش کنید";
        }
    }else {
        echo " ";
    }

    ?>
</h1>


<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/script.js"></script>
</body>
</html>