<?php

class BankController extends Controller
{
	public function actionIndex()
	{
            $this->layout = 'main';
            $criteria=new CDbCriteria();
            $provider = new CActiveDataProvider('Bank', array(
                'criteria' => $criteria,
                'pagination' => array(
                    'pageSize' => 30,
                ),
            ));
            $this->render('index',array('provider'=>$provider));
	}
}