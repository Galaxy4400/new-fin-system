<?php
function dd($content)
{
	echo ("<pre>");
	print_r($content);
	echo ("</pre>");
	die();
}

function d($content)
{
	echo ("<pre>");
	print_r($content);
	echo ("</pre>");
	echo "<br>";
}
