<?php
    $Folder = 'D:All/HW4/files/';
    $newFolder = 'D:All/HW4/files_new/';
    function copyFiles($Folder,$newFolder) {
        $files=scandir($Folder);
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {          //ігноруємо батьківські папки
                $startfile = $Folder . $file;
                $finishfile = $newFolder . $file;
                copy($startfile, $finishfile);
                $newName = $newFolder . 'new_' . $file;
                rename($finishfile, $newName);
            }
        }
    }
    copyFiles($Folder,$newFolder);
    return 0;

//https://www.php.net/manual/ru/function.copy.php
//https://www.php.net/manual/ru/function.rename.php
