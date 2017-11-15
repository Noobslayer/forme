<!DOCTYPE html>
<HTML>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
echo('Pozdrav,'.$_post['prezime']);
echo('br');
echo('Vi imate:'.$_post['godina'].'godina');
echo('<br>');
if($_post['godine']>=18)
{
    echo('Vi ste punoljetni');
}
<input type="number" name="Godine"><br>
if(Godine<18)
{
    printf("Detained!")
}
<?php
//print_r($_POST);
?>
</body>

</html>