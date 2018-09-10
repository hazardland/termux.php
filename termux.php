<?php

namespace termux;

function notification ($title, $content, $led, $sound=true, $vibrate="200")
{
    if (PHP_OS!='WINNT' && `which termux-notification`)
    {
        try
        {
            shell_exec ('termux-notification --title="'.$title.'" --content="'.$content.'" --led="'.$led.'"'.($sound?" --sound":"").($vibrate?" --vibrate=".$vibrate:"").' &');
        }
        catch (\Exception $e)
        {

        }
    }
}
