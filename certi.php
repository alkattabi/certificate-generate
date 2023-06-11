<?php
if(isset($_POST['add'])){
    $font=realpath('arial.ttf');
    $image=imagecreatefromjpeg("cer.jpg");
    $color=imagecolorallocate($image,51,51,102);
    imagettftext($image, 45, 0, 120, 530, $color,$font, $_POST['name']);
    imagettftext($image, 30, 0, 255, 1130, $color,$font, $_POST['teacher']);
    imagettftext($image, 30, 0, 255, 1190, $color,$font, $_POST['numb']);
    imagejpeg($image,"student/".$_POST['name'].".jpg");
    imagedestroy($image);
}
echo '<center><h1>Successfully add certificate</h1></center>';
?>