<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property string $taskID
 * @property string $taskName
 * @property string $amount
 * @property string $projectID
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amount'], 'number'],
            [['projectID'], 'integer'],
            [['taskName'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'taskID' => 'Task ID',
            'taskName' => 'Task Name',
            'amount' => 'Amount',
            'projectID' => 'Project ID',
        ];
    }
}
