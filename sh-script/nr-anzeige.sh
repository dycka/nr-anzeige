#!/bin/bash

#FUNCTIONS
show() {
	nr=$1
	echo "$nr wird angezeigt"
	$command = escapeshellcmd("/usr/custom/anzeige.py $nr");
	$output = shell_exec($command);
	echo $output;

}

#SCRIPT
nr=$1
show $nr
