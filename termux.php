<?php

namespace termux;

function notification ($title, $content, $led)
{
    if (PHP_OS!='WINNT' && `which termux-notification`)
    {
        try
        {
            shell_exec ('termux-notification --title="'.$title.'" --content="'.$content.'" --led="'.$led.'"');
        }
        catch (\Exception $e)
        {

        }
    }
}
