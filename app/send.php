<?php
//CONSTANTS
$confPath = "CONF-ScriptPath";

//MAIN SCRIPT
$nr = $_GET['nr'];

if (is_numeric($nr)) {
//valid param
    $scriptPath = getScriptPath($confPath);
//generate command
    $cmd = 'sh ' . $scriptPath . ' ' . $nr;
//run script and return response
    echo shell_exec($cmd);

} else {
//resolved param is invalid
    echo 'Ungültige Eingabe';
}

exit();

//FUNCTIONS

/**
 *  Returns the script path which is configured in the given config-file.
 *
 * @param $confPath path to file with the script file
 * @return the configured path is valid? true/false
 */
function getScriptPath($confPath)
{
    $content = file_get_contents($confPath);

    if (!$content || empty($content) || $content == '') {
        //Error while opening
        //CANCEL
        echo "Falsche Konfiguration";
        exit();
    }

    return $content;
}

?>