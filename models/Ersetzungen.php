<?php

namespace app\models;

use Yii;
use app\models\ErsetzungenFilter;

/**
 * This is the model class for table "ersetzungen".
 *
 * @property int $id
 * @property string|null $cat
 * @property string|null $wort
 * @property string|null $ersatz
 */
class Ersetzungen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ersetzungen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat'], 'string', 'max' => 10],
            [['wort', 'ersatz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat' => 'Filter',
            'wort' => 'Wort',
            'ersatz' => 'Ersatz',
        ];
    }
    
    public function getFiltername() {
        $res = ErsetzungenFilter::find()->where(["id"=>$this->cat])->one();
        return $res->filtername??"??";
    }
    
}
