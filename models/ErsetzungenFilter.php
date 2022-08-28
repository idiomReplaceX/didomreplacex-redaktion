<?php

namespace app\models;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "ersetzungen_filter".
 *
 * @property int $id
 * @property string $filtername
 */
class ErsetzungenFilter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ersetzungen_filter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['filtername'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filtername' => 'Filtername',
        ];
    }
    
    public static function listAll() {
        return ArrayHelper::map(self::find()->all(),"id","filtername");
    }
    
}
