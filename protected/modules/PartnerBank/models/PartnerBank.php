<?php
class PartnerBank extends CActiveRecord{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public function tableName()
    {
        return '{{res_partner_bank}}';
    }
    public function attributeLabels()
    {
        return array(
            'id' => 'Id',
            'bank_name' => 'Tên Ngân Hàng',
            'state_id'=>'Loại tài khoản',
            'acc_number'=>'Số tài khoản',
            'owner_name'=>'Chủ tài khoản',
            'bank'=>'Ngân hàng'
        );
    }
}
?>
