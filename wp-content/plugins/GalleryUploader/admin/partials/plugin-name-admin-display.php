<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<form name="frontpagefilephoto" method="POST" enctype="multipart/form-data">
<label class="wrapper secondbtn centerself centeritems pointer clickableButtonSecond">
    <input type="file" name="newphotofront">
    Выбрать фотографию на главную
</label>
<br><br><br>
<input type="submit" class="mainbtn centerself pointer" name="submitphotofile" value="Сохранить">
</form>
<br><br><br>
<?php
define('MM_MAXFILESIZE', 1048576);
define('MM_MAXIMGWIDTH', 4096);
define('MM_MAXIMGHEIGHT', 4096);
if (isset($_REQUEST['submitphotofile']) && ($_FILES['newphotofront']['name'] != NULL)) {
    if ($_FILES['newphotofront']['name'] != NULL) {
        $new_picture_type = $_FILES['newphotofront']['type'];
        $new_picture_size = $_FILES['newphotofront']['size'];
        list($new_picture_width, $new_picture_height) = getimagesize($_FILES['newphotofront']['tmp_name']);

        if ((($new_picture_type == 'image/jpeg') || ($new_picture_type == 'image/png')) && ($new_picture_size > 0) && ($new_picture_size <= MM_MAXFILESIZE) && ($new_picture_width <= MM_MAXIMGWIDTH) && ($new_picture_height <= MM_MAXIMGHEIGHT)) {
            $photo = $_FILES['newphotofront']['name'];
            $files = glob(get_template_directory() . "/images/front/*"); // get all file names
            foreach($files as $file){ // iterate files
              if(is_file($file)) {
                unlink($file); // delete file
              }
            }
            if ($new_picture_type == 'image/jpeg') {
                $file = get_template_directory() . "/images/front/image.jpg";
                move_uploaded_file($_FILES['newphotofront']['tmp_name'], $file);
            } else if ($new_picture_type == 'image/png') {
                $file = get_template_directory() . "/images/front/image.png";
                move_uploaded_file($_FILES['newphotofront']['tmp_name'], $file);
            }
            if (isset($file)) {
                    echo "<div class='wrapper secondbtn centerself centeritems pointer clickableButtonSecond'>Обновление изображения успешно</div>";
            }
        } else {
            echo "<div class='wrapper secondbtn centerself centeritems pointer clickableButtonSecond'>Не соответствует требованиям - 1мб; 4096x4096; png, jpg;</div>";
        }
    }
}
?>