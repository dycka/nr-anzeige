<?php
//CONSTANTS
$confPath = "CONF-ScriptPath";

//MAIN SCRIPT
$nr = $_GET['nr'];

$scriptPath = getScriptPath($confPath);
//generate command
$cmd = 'sh ' . $scriptPath . ' ' . $nr;
//run script and return response
echo shell_exec($cmd);
exit();

//FUNCTIONS

/**
 *  Returns the script path which is configured in the given config-file.
 *
 * @param $confPath path to file with the script file
 */
function getScriptPath($confPath)
{
    $content = file_get_contents($confPath);

    if (!$content || empty($content) || $content == '') {
        //Error while opening
        //ABBRUCH
        echo "Falsche Konfiguration";
        exit();
    }

    return $content;
}

?>