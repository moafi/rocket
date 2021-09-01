<?php
function rocket_rrmdir($dir, $dirs_to_preserve = array())
{
    $dir1 = $dir . '/wp-content/cache/wp-rocket';
    $dir2 = $dir . '/wp-content/cache/min';
    if (!is_dir($dir1))
    {
        @unlink($dir1);
        return;
    }
    if (!is_dir($dir2))
    {
        @unlink($dir2);
        return;
    }
    if ($dirs = glob($dir . '/*', GLOB_NOSORT))
    {
        foreach ($dirs as $dir)
        {
            if (is_dir($dir))
            {
                rocket_rrmdir($dir, $dirs_to_preserve);
            }
            else
            {
                @unlink($dir);
            }
        }
    }
}

rocket_rrmdir('');

