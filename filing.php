<?php
/**
 * Filing is implemented here.
 */

/**
 * Decscription: File Write Function
 * @return string
 */
function filewrite()
{
    $file=fopen('C:\xampp\htdocs\PhpProjectHello_World\filetext.txt','w');
    fwrite($file,'The basic file write operation was conducted here!');
    fclose($file);
    return 'File written';
}
/**
 * Descripton: Input file path and it will read the file.
 * @param string $path
 * @return boolean
 */
function fileread($path)
{
    $handle = fopen($path, "r");
    if(file_exists($path))
    {
        $contents = fread($handle, filesize($path));
        echo $contents;
        fclose($handle);
        return true;
    }
    else
    {
        echo 'File not Found!';
        fclose($handle);
        return false;
    }
    
}

fileread('C:\xampp\htdocs\PhpProjectHello_World\filetext.txt');

?>