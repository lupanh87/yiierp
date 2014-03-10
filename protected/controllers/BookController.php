<?php

class BookController extends RController
{
	//public $layout='column1';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	/**
	 * @right implement
	 */
	public function filters()
	{
		return array(
			'rights', // perform access control for CRUD operations
		);
	}
	public function allowedActions() 
	{ 
	   return 'index, view'; 
	} 
	
	
	public function actionIndex()
	{
		$criteria1 = new CDbCriteria();
//        $criteria1->condition = 'nview > 1';
//        $criteria1->order = 'nview DESC';
        $books = Book::model()->with('tacgia')->findAll($criteria1);
        //print_r($books[0]->tacgia); die;
        
        Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.');
		Yii::app()->user->setFlash('info', '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
		Yii::app()->user->setFlash('warning', '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
		Yii::app()->user->setFlash('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.');

        $dataProvider=new CActiveDataProvider('Book', array(
			'criteria'=>array(
				//'with'=>'user',
				'order'=>'t.nview DESC',
			),
		));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'books'	=> $books
		));
	}

	/**
	 * Approves a particular comment.
	 * If approval is successful, the browser will be redirected to the comment index page.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Book::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}
}
