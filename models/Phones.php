<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phones".
 *
 * @property integer $Id
 * @property string $PhoneNumber
 * @property string $Street
 * @property integer $HomeNumber
 * @property integer $Flat
 * @property string $FIO
 */
class Phones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PhoneNumber', 'Street', 'HomeNumber', 'Flat', 'FIO'], 'required'],
            [['HomeNumber', 'Flat'], 'integer'],
            [['PhoneNumber'], 'string', 'max' => 20],
            [['Street', 'FIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'PhoneNumber' => 'Номер телефона',
            'Street' => 'Улица',
            'HomeNumber' => 'Номер дома',
            'Flat' => 'Квартира',
            'FIO' => 'ФИО',
        ];
    }
}
