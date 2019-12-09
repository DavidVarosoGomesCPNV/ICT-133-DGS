<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Glassey
 * Date: 21.11.2018
 * Time: 22:15
 * Title : RefreshFunction.php
 */

//<editor-fold desc="private attributes"> //add region in phpstorm -> https://blog.jetbrains.com/phpstorm/2012/03/new-in-4-0-custom-code-folding-regions/
$logName = "application.log";//define log file name
$fileFullPath = setFullPath($logName);
$logHeader = "TimeStamp\t\t\tLevel\tMessage";//set the header of the future log file
//</editor-fold>

//<editor-fold desc="tests automation - entry point">
//create file and set header
writeMsgInFile($fileFullPath, $logHeader, true);
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
	
	$currentPath = getcwd();
    $fullPathToFile = $currentPath . "\\" . $fName;
    return $fullPathToFile;
}

/**
 * This function is designed to write a string message in a file.
 * -The opening and closing action is managed by the fuction
 * @param $fileFullPath : The path containing expressing the path from the root to the filename
 * @param $lineToWrite : Is the content to write in the file.
 * @param $erase : Is an option allowing to erase the file before writing or happening the $lineToWrite a the end of the file
 */
function writeMsgInFile($fileFullPath, $lineToWrite, $erase)
{
    /* Help
    //http://php.net/manual/en/function.fopen.php
    */
	
	$strWriter = null;
	if($erase){
		$strWriter = fopen($fileFullPath, "w");
	}
	else{
		$strWriter = fopen($fileFullPath, "a");
		$lineToWrite = $lineToWrite;
	}

	fwrite($strWriter, $lineToWrite  . "\r\n");
	fclose($strWriter);
}

function prepareMsgToWrite($msg, $levelNumber)
{
    //set temp variables
    $timeStamp = date('Y-m-d H:i:s');
    $logLevel = convertLevelIntToDescription($levelNumber);
    $msgFormatted = "";

    $msgFormatted = $timeStamp . "\t" . $logLevel . "\t" . $msg;

    return $msgFormatted;
}

function convertLevelIntToDescription($levelNumber)
{
    $levelDescription = "";
    switch ($levelNumber)
    {
        case 1:
            $levelDescription = "Info";
            break;
        case 2:
            $levelDescription = "Warning";
            break;
        case 3:
            $levelDescription = "Error";
            break;
        default:
            $levelDescription = "Unknown";
            break;
    }
    return $levelDescription;
}

//</editor-fold>
?>