<?php
$dir = new DirectoryIterator("../svg/");
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        $fileName = $fileinfo->getFilename();
        if (stristr($fileName, ".svg")){
          $new_fileName = str_replace("icons copy_", "", $fileName);
          rename("../svg/".$fileName, "../svg/".$new_fileName);
        }
    }
}
?>