<?php
class BankType extends CActiveRecord{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public function tableName()
    {
        return '{{res_partner_bank_type}}';
    }
    public function attributeLabels()
    {
        return array(
            'id' => 'Id',
            'bank_name' => 'Tên Ngân Hàng',
        );
    }
}
?>
