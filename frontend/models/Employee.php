<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $employeeID
 * @property string $firstName
 * @property string $lastName
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employeeID', 'firstName', 'lastName'], 'required'],
            [['employeeID'], 'integer'],
            [['firstName', 'lastName'], 'string', 'max' => 55],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employeeID' => 'Employee ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
        ];
    }
}
