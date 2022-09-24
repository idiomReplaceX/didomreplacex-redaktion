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
            [['art'], 'string', 'max' => 20],
            [['autorin'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'art' => 'Filter Typ',
            'filtername' => 'Filtername',
            'autorin' => 'AutorIn',
        ];
    }
    
    public static function listAll() {
        return ArrayHelper::map(self::find()->all(),"id","filtername");
    }
    
    public static function listFilterArt() {
        return [
            "wort" => "Wörter ersetzen",
            "zeichen" => "Zeichen ersetzen",
            "kontamination" => "Kontaminieren"
        ];
    }
    
}
