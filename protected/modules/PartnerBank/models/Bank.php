<?php
class Bank extends CActiveRecord{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public function tableName()
    {
        return '{{res_bank}}';
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
