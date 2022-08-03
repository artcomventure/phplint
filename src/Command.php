<?php

class Command
{
    public static function lint($path, &$exit = 0)
    {
        $path = realpath($path);
        if (is_dir($path)) {
            foreach (scandir($path) as $fileName) {
                if ($fileName !== '.' && $fileName !== '..') {
                    self::lint($path . DIRECTORY_SEPARATOR . $fileName, $exit);
                }
            }
        } elseif (is_file($path) && pathinfo($path, PATHINFO_EXTENSION) === 'php') {
            echo exec('php -l ' . escapeshellarg($path), $output, $return) . "\n";
            $exit |= $return;
        }
        return $exit;
    }
}
