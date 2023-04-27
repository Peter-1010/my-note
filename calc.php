<!DOCTYPE html>
<html>
<body>

<?php
ini_set('display_errors',0);

if( isset( $_REQUEST['calculate'] ))
{
    $operator=$_REQUEST['operator'];
    $n1 = $_REQUEST['first_value'];
    $n2 = $_REQUEST['second_value'];

    if($operator=="+")
    {
        $res= $n1+$n2;
    }
    if($operator=="-")
    {
        $res= $n1-$n2;
    }
    if($operator=="*")
    {
        $res =$n1*$n2;
    }
    if($operator=="/")
    {
        $res= $n1/$n2;
    }

    if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
    {
        echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
    }
}
?>

<form class="calc" id="calc_form">
    <table>

        <tr>
            <td style="color:#39b7dd; background-color: transparent">الرقم الاول</td>
            <td colspan="1">
                <input name="first_value" type="text" style="color:white"/></td>
        </tr>

        <tr>
            <td style="color:#39b7dd">اختار العملية</td>
            <td>
                <select name="operator" style="width: 100%; font-size: 18px; margin: 10px 0; padding: 5px; background-color: #17282F; color: #39b7dd; border: 1px solid #39b7dd">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select></td>
        </tr>

        <tr>
            <td style="color:#39b7dd;">الرقم الثاني</td>
            <td class="auto-style5">
                <input name="second_value" type="text"  style="color:white"/></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="calculate" value="حساب" style="margin-top: 10px; font-size: 22px" /></td>
        </tr>

        <tr>
            <td style="color:#fff; font-weight: bold; font-size: 22px">الناتج = </td>
            <td style="color:#39b7dd; font-size: 30px"><?php echo $res;?></td>
        </tr>

    </table>
</form>

</body>
</html> 