<?php

/**
 * This is the model class for table "{{hwdvidscategories}}".
 *
 * The followings are the available columns in table '{{hwdvidscategories}}':
 * @property integer $id
 * @property integer $parent
 * @property string $category_name
 * @property string $category_description
 * @property string $date
 * @property string $thumbnail
 * @property integer $num_vids
 * @property integer $published
 * @property string $seocat
 * @property string $tags
 * @property integer $nview
 * @property integer $user_id
 */
class VideoCat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{hwdvidscategories}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('thumbnail, seocat, tags', 'required'),
			array('parent, num_vids, published, nview, user_id', 'numerical', 'integerOnly'=>true),
			array('category_name, seocat', 'length', 'max'=>250),
			array('tags', 'length', 'max'=>255),
			array('category_description, date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, parent, category_name, category_description, date, thumbnail, num_vids, published, seocat, tags, nview, user_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'parent' => 'Parent',
			'category_name' => 'Category Name',
			'category_description' => 'Category Description',
			'date' => 'Date',
			'thumbnail' => 'Thumbnail',
			'num_vids' => 'Num Vids',
			'published' => 'Published',
			'seocat' => 'Seocat',
			'tags' => 'Tags',
			'nview' => 'Nview',
			'user_id' => 'User',
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
		$criteria->compare('parent',$this->parent);
		$criteria->compare('category_name',$this->category_name,true);
		$criteria->compare('category_description',$this->category_description,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('thumbnail',$this->thumbnail,true);
		$criteria->compare('num_vids',$this->num_vids);
		$criteria->compare('published',$this->published);
		$criteria->compare('seocat',$this->seocat,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('nview',$this->nview);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VideoCat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
