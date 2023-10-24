<?php
$file = "./text.txt";
// Read the file content into a string
$content = file_get_contents($file);

if ($content !== false) {
    $admin="admin";

    echo "File Content Before: ";
    echo $content;

    $content = str_ireplace("tamanna", $admin, $content);
    echo "File Content After: ";
    echo $content;
    if (file_put_contents($file, $content) !== false) {
        echo "The file has been updated successfully.";
    } else {
        echo "Failed to write the modified content back to the file.";
    }
} else {
    echo "Failed to read the file.";
}
?>
