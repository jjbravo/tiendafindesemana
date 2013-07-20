<?php

/**
 * This is the model class for table "factura".
 *
 * The followings are the available columns in table 'factura':
 * @property integer $idfactura
 * @property string $fecha_factura
 * @property boolean $estado
 * @property integer $clientes_idclientes
 *
 * The followings are the available model relations:
 * @property Clientes $clientesIdclientes
 * @property DetalleFactura[] $detalleFacturas
 */
class Factura extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Factura the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'factura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clientes_idclientes', 'required'),
			array('clientes_idclientes', 'numerical', 'integerOnly'=>true),
			array('fecha_factura, estado', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idfactura, fecha_factura, estado, clientes_idclientes', 'safe', 'on'=>'search'),
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
			'clientesIdclientes' => array(self::BELONGS_TO, 'Clientes', 'clientes_idclientes'),
			'detalleFacturas' => array(self::HAS_MANY, 'DetalleFactura', 'factura_idfactura'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idfactura' => 'Idfactura',
			'fecha_factura' => 'Fecha Factura',
			'estado' => 'Estado',
			'clientes_idclientes' => 'Clientes Id clientes',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idfactura',$this->idfactura);
		$criteria->compare('fecha_factura',$this->fecha_factura,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('clientes_idclientes',$this->clientes_idclientes);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}