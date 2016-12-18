<?php
namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Task is the model for all tasks
 *
 */
class Task extends Model
{
    /**
     * Return json data
     *
     * @param $fileName
     * @return mixed
     */
    public function getJson($fileName) {
        $buffer = FileManager::getFile($fileName);

        $data = json_decode($buffer);

        return $data;
    }
}