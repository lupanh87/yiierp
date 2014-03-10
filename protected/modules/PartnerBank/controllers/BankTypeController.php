<?php

class BankTypeController extends Controller
{
	public function actionIndex()
	{
            $this->layout = 'main';
            $criteria=new CDbCriteria();
            $provider = new CActiveDataProvider('BankType', array(
                'criteria' => $criteria,
                'pagination' => array(
                    'pageSize' => 30,
                ),
            ));
            $this->render('index',array('provider'=>$provider));
	}
}