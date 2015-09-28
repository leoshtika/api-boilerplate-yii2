<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property integer $note_id
 * @property string $text
 * @property integer $status
 *
 * @property Note $note
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['note_id', 'text'], 'required'],
            [['note_id', 'status'], 'integer'],
            [['text'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'note_id' => 'Note ID',
            'text' => 'Text',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNote()
    {
        return $this->hasOne(Note::className(), ['id' => 'note_id']);
    }
}
