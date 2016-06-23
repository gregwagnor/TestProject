<?php

namespace frontend\models;

use yii\base\Model;

/**
 * SupplierForm is the model behind the supplier form.
 */
class SupplierForm extends Model
{
    public $supplierID;
    public $vendor;
    public $comments;
    public $status;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor', 'status', 'comments'], 'required'],
        ];
    }
}

