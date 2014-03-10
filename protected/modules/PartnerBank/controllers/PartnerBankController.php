<?php

class PartnerBankController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'main';
        $criteria=new CDbCriteria();
        $provider = new CActiveDataProvider('PartnerBank', array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 30,
            ),
        ));
        $this->render('index',array('provider'=>$provider));
    }
    public function actionCreate(){
        $this->layout = 'main';
        $model = new PartnerBank();
        $banktype = BankType::model()->findAll();
        $btype = array();
        $bacc = array();
        foreach ($banktype as $brow){
            $btype[$brow->id] = $brow->name;
        }
        $users = User::model()->findAll();
        foreach ($users as $urow){
            $baccount[$urow->id] = $urow->username;
        }
        $this->render('create',array('model'=>$model,'btype'=>$btype,'uaccount'=>$baccount));
    }
}