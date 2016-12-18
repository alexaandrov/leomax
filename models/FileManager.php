<?php
namespace app\models;

class FileManager
{
    /**
     * Return mixed data from the file
     *
     * @param string $name File name without type
     * @param string $type Type of the file
     * @return mixed Data
     */
    static function getData(string $name, string $type)
    {
        $filePath = 'uploads/' . $name . '.' . $type;

        if (file_exists($filePath)) {
            switch ($type) {
                case 'json':
                    $buffer = file_get_contents($filePath);
                    $data = json_decode($buffer, true);
                    break;
                case 'xml':
                    $data = simplexml_load_file($filePath);
                    break;
                default:
                    $data = '';
                    break;
            }
            return $data;
        } else {
            return '';
        }
    }
}