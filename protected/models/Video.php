<?php

/**
 * This is the model class for table "{{hwdvidsvideos}}".
 *
 * The followings are the available columns in table '{{hwdvidsvideos}}':
 * @property integer $id
 * @property string $video_type
 * @property string $video_id
 * @property string $title
 * @property string $description
 * @property string $tags
 * @property integer $category_id
 * @property string $date_uploaded
 * @property string $video_length
 * @property integer $rating_number_votes
 * @property integer $rating_total_points
 * @property double $updated_rating
 * @property string $thumbnail
 * @property integer $number_of_views
 * @property integer $number_of_comments
 * @property integer $user_id
 * @property integer $published
 * @property string $seo
 * @property string $eid
 * @property string $time
 */
class Video extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{hwdvidsvideos}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('thumbnail, seo', 'required'),
			array('category_id, rating_number_votes, rating_total_points, number_of_views, number_of_comments, user_id, published', 'numerical', 'integerOnly'=>true),
			array('updated_rating', 'numerical'),
			array('video_type, video_length', 'length', 'max'=>250),
			array('seo', 'length', 'max'=>50),
			array('eid', 'length', 'max'=>15),
			array('time', 'length', 'max'=>8),
			array('video_id, title, description, tags, date_uploaded', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, video_type, video_id, title, description, tags, category_id, date_uploaded, video_length, rating_number_votes, rating_total_points, updated_rating, thumbnail, number_of_views, number_of_comments, user_id, published, seo, eid, time', 'safe', 'on'=>'search'),
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
			'catname' => array(self::BELONGS_TO, 'VideoCat', 'category_id'),
			'uname' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'video_type' => 'Video Type',
			'video_id' => 'Video',
			'title' => 'Title',
			'description' => 'Description',
			'tags' => 'Tags',
			'category_id' => 'Category',
			'date_uploaded' => 'Date Uploaded',
			'video_length' => 'Video Length',
			'rating_number_votes' => 'Rating Number Votes',
			'rating_total_points' => 'Rating Total Points',
			'updated_rating' => 'Updated Rating',
			'thumbnail' => 'Thumbnail',
			'number_of_views' => 'Number Of Views',
			'number_of_comments' => 'Number Of Comments',
			'user_id' => 'User',
			'published' => 'Published',
			'seo' => 'Seo',
			'eid' => 'Eid',
			'time' => 'Time',
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
		$criteria->compare('video_type',$this->video_type,true);
		$criteria->compare('video_id',$this->video_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('date_uploaded',$this->date_uploaded,true);
		$criteria->compare('video_length',$this->video_length,true);
		$criteria->compare('rating_number_votes',$this->rating_number_votes);
		$criteria->compare('rating_total_points',$this->rating_total_points);
		$criteria->compare('updated_rating',$this->updated_rating);
		$criteria->compare('thumbnail',$this->thumbnail,true);
		$criteria->compare('number_of_views',$this->number_of_views);
		$criteria->compare('number_of_comments',$this->number_of_comments);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('published',$this->published);
		$criteria->compare('seo',$this->seo,true);
		$criteria->compare('eid',$this->eid,true);
		$criteria->compare('time',$this->time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Video the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
