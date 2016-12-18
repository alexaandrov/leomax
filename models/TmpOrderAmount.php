<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmp_order_amount".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $amount
 * @property integer $delivery_amount
 * @property integer $total_amount
 */
class TmpOrderAmount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmp_order_amount';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'amount', 'delivery_amount', 'total_amount'], 'required'],
            [['order_id', 'amount', 'delivery_amount', 'total_amount'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'amount' => 'Amount',
            'delivery_amount' => 'Delivery Amount',
            'total_amount' => 'Total Amount',
        ];
    }
}
