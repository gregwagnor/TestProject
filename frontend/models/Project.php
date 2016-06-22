<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property string $projectID
 * @property string $projectName
 * @property string $startDate
 * @property integer $status
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['startDate'], 'safe'],
            [['status'], 'integer'],
            [['projectName'], 'string', 'max' => 55],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'projectID' => 'Project ID',
            'projectName' => 'Project Name',
            'startDate' => 'Start Date',
            'status' => 'Status',
        ];
    }
}
