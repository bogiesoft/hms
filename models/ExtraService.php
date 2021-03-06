<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ps_extraservice".
 *
 * @property integer $extraserviceid
 * @property integer $reservationid
 * @property integer $roomid
 * @property string $date
 *
 * @property PsRoomreservation $reservation
 * @property PsRoom $room
 * @property PsExtraservicedetail[] $psExtraservicedetails
 */
class ExtraService extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ps_extraservice';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reservationid', 'roomid'], 'required'],
            [['reservationid', 'roomid'], 'integer'],
            [['date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extraserviceid' => 'Extraserviceid',
            'reservationid' => 'Reservationid',
            'roomid' => 'Roomid',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservation()
    {
        return $this->hasOne(PsRoomreservation::className(), ['reservationid' => 'reservationid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(PsRoom::className(), ['roomid' => 'roomid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPsExtraservicedetails()
    {
        return $this->hasMany(PsExtraservicedetail::className(), ['extraserviceid' => 'extraserviceid']);
    }
}
