<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "public.pedido".
 *
 * @property integer $id
 * @property string $mesa
 * @property string $produto
 * @property integer $quantidade
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'public.pedido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantidade'], 'integer'],
            [['mesa'], 'string', 'max' => 10],
            [['produto'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mesa' => 'Mesa',
            'produto' => 'Produto',
            'quantidade' => 'Quantidade',
        ];
    }
}
