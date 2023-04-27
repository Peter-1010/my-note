<?php include_once 'header.php' ?>


<?php

include_once 'db.php';

if (isset($_POST['submit'])) {

    $sql = 'INSERT INTO todo Set title ="' . $_POST['title'] . '" , details ="' . $_POST['details'] . '" , date ="' . $_POST['date'] . '" ;';

    if ($connection->query($sql)){
//        setcookie('message', 'message', time() + 5);
        echo '<h2 class="saved">تم الحفظ</h2>';
    }

}

//if (isset($_COOKIE['message'])) {
//    echo '<h2 class="saved">تم الحفظ</h2>';
//}

?>


<div class="container">
    <div class="header">
        <h2 style="color: white; margin-left: 20px; position: relative">الوقت المتبقي علي نهاية اليوم : <?php
            $dateTime = new DateTime('now', new DateTimeZone('Africa/Cairo'));
            echo (23 - $dateTime->format("H")) . ':' . (60 - $dateTime->format("i")) ;
            ?> ساعة</h2>
    </div>
    <div class="button">
        <button class="calc_button" id="calc_button"><i class="fa-solid fa-calculator"></i></button>
        <div id="content"><?php include_once 'calc.php'; ?></div>
    </div>
    <form method="post" class="add">

        <div class="input">
            <label for="date">تاريخ الميعاد : </label>
            <input required type="date" id="date" name="date" value="<?php echo date("Y-m-d") ?>"><br>
        </div>

        <div class="input">
            <label for="title">عنوان الميعاد : </label>
            <input required type="text" id="title" name="title"><br>
        </div>

        <div class="input">
            <label for="details" class="text">تفاصيل الميعاد : </label>
            <textarea rows="3" id="details" name="details"></textarea><br>
        </div>

        <input type="submit" value="حفظ" name="submit" id="submit">

    </form>

    <div class="abas">
        <a href="/index.php">المواعيد</a>
    </div>
</div>


<?php include_once 'footer.php' ?>

