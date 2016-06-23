<?php

namespace frontend\models;
use yii\db\ActiveRecord;
//use yii\base\Model;

/**
 * SupplierForm is the model behind the supplier form.
 */
class SupplierForm extends \yii\db\ActiveRecord //extends Model
{
    //public $supplierID;
    //public $vendor;
    //public $comments;
    //public $status;
    
    public static function tableName()
    {
        return 'suppliers';
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor', 'comments', 'status'], 'required'],
        ];
    }
}

