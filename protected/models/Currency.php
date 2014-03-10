<?php

/**
 * This is the model class for table "res_currency".
 *
 * The followings are the available columns in table 'res_currency':
 * @property integer $id
 * @property string $name
 * @property integer $create_uid
 * @property string $create_date
 * @property string $write_date
 * @property integer $write_uid
 * @property string $rounding
 * @property string $symbol
 * @property integer $company_id
 * @property string $date
 * @property string $base
 * @property string $active
 * @property string $position
 * @property integer $accuracy
 *
 * The followings are the available model relations:
 * @property Company[] $companies
 * @property Country[] $countries
 * @property Company $company
 * @property Users $writeU
 * @property Users $createU
 */
class Currency extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'res_currency';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name', 'required'),
			array('id, create_uid, write_uid, company_id, accuracy', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>32),
			array('create_date, write_date', 'length', 'max'=>6),
			array('rounding', 'length', 'max'=>65),
			array('symbol', 'length', 'max'=>4),
			array('base, active', 'length', 'max'=>5),
			array('date, position', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, create_uid, create_date, write_date, write_uid, rounding, symbol, company_id, date, base, active, position, accuracy', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'companies' => array(self::HAS_MANY, 'Company', 'currency_id'),
			'countries' => array(self::HAS_MANY, 'Country', 'currency_id'),
			'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
			'writeU' => array(self::BELONGS_TO, 'Users', 'write_uid'),
			'createU' => array(self::BELONGS_TO, 'Users', 'create_uid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'create_uid' => 'Create Uid',
			'create_date' => 'Create Date',
			'write_date' => 'Write Date',
			'write_uid' => 'Write Uid',
			'rounding' => 'Rounding Factor',
			'symbol' => 'Symbol',
			'company_id' => 'Company',
			'date' => 'Date',
			'base' => 'Base',
			'active' => 'Active',
			'position' => 'Symbol Position',
			'accuracy' => 'Computational Accuracy',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('create_uid',$this->create_uid);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('write_date',$this->write_date,true);
		$criteria->compare('write_uid',$this->write_uid);
		$criteria->compare('rounding',$this->rounding,true);
		$criteria->compare('symbol',$this->symbol,true);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('base',$this->base,true);
		$criteria->compare('active',$this->active,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('accuracy',$this->accuracy);
		//$criteria->with = array('writeU');
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
                        'pageSize' => 20,
		 				//'class' => 'admin-navigation',
                    ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Currency the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
