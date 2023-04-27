<?php

include_once 'db.php';

$sql = 'SELECT * FROM todo';

$rows = $connection->query($sql)->fetchAll();


?>

<?php include_once 'header.php' ?>
<div class="button">
    <button class="calc_button" id="calc_button"><i class="fa-solid fa-calculator"></i></button>
    <div id="content"><?php include_once 'calc.php'; ?></div>
</div>
<div class="header" style="position: relative">
    <h1 style="float: right; margin-right: 20px;">المواعيد :</h1>
    <h2 style="color: white; float: left; margin-left: 20px;">الوقت المتبقي علي نهاية اليوم : <?php
        $dateTime = new DateTime('now', new DateTimeZone('Africa/Cairo'));
        echo (23 - $dateTime->format("H")) . ':' . (60 - $dateTime->format("i")) ;
        ?> ساعة</h2>
</div>
<div style="clear: both"></div>
<div class="container">
    <div class="abas">

        <?php foreach ($rows as $row){
            $id      = $row['id'];
            $title   = $row['title'];
            $details = $row['details'];
            $date    = $row['date'];

            ?>
            <div class="todo">
                <h2> المهمة : <?php echo $title; ?> </h2>
                <?php if ($details == ''){
                    echo '<p> التفاصيل : لا يوجد تفاصيل </p>';
                }else{
                    echo '<p> التفاصيل : ' . $details . ' </p>';
                }
                ?>
                <p> التاريخ : <?php echo $date ?>  </p>
                <a href="/delete/<?php echo $id ?>" class="delete"><i class="fa-solid fa-trash-can"></i></a>
            </div>
        <?php }?>
        <br>
        <a href="/add.php">اضافة موعد جديد</a>

    </div>
</div>

<?php include_once 'footer.php' ?>

