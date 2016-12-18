<?php
namespace app\models;

class FileManager
{
    /**
     * Return file content
     *
     * @param string $fileName
     * @return string
     */
    static function getFile(string $fileName)
    {
        if ($fileName) {
            $file = file_get_contents('uploads/' . $fileName);
            return $file;
        } else {
            return '';
        }
    }
}