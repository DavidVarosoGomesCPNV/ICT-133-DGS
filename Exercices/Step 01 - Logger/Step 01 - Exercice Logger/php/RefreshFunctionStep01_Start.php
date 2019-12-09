<?php
/**
 * Created by PhpStorm.
 * User: David Gomes
 * Date: 09.12.2019
 * Time: 08:45
 * Title : RefreshFunction.php
 * Project : ICT-133
 */


//<editor-fold desc="private attributes">
// add region in phpstorm -> https://blog.jetbrains.com/phpstorm/2012/03/new-in-4-0-custom-code-folding-regions/
$logName = "application.log";//define log file name
$fileFullPath = setFullPath($logName);//define the full path until the log file
$logHeader = "Test2\t\t\tLevel\tMessage\n";//set the header of the future log file
//</editor-fold>

//<editor-fold desc="tests automation - entry point">
//create file and set header
writeMsgInFile($fileFullPath, $logHeader,true);
//</editor-fold>

//<editor-fold desc="function">
/**
 * This function is designed to append a path with the fileName received as parameter
 * -The path will be found by the function
 * @param $fName : The file name to be append to the path
 * @return [String] full path to the log file expressed as a string
 * @example File Name : testFile.log / after function : [pathToFile]\testFile.log
 */
function setFullPath($fName)
{
    /* Help
        get current directory -> http://php.net/manual/en/function.getcwd.php
    */
    //TODO - il vous faut coder le corps e cette fonction

    // Création d'une varibale qui est égale au lien de l'exercice + l'arguement qui sera changer avvec la varbiable $logname qui elle contient 'application.log"
    $currentFile=getcwd()."\\".$fName;

    return $currentFile;

}

/**
 * This function is designed to write a string message in a file.
 * -The opening and closing action is managed by the fuction
 * @param $fileFullPath : The path containing expressing the path from the root to the filename
 * @param $lineToWrite : Is the content to write in the file.
 * @param $erase : Is an option allowing to erase the file before writing or happening the $lineToWrite a the end of the file
 */
function writeMsgInFile($fileFullPath, $lineToWrite,$erase)
{
    /* Help
    //http://php.net/manual/en/function.fopen.php
    */
    //TODO - il vous faut coder le corps e cette fonction

    if($erase){
        $fileopen = fopen($fileFullPath,'w');
        fwrite($fileopen,$lineToWrite);
        fclose($fileopen);

    }
    else{
        $fileopen = fopen($fileFullPath,'a');
        fwrite($fileopen,$lineToWrite);
        fclose($fileopen);

    }



}
//</editor-fold>
