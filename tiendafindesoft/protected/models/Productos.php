<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $idproductos
 * @property string $nombre_producto
 * @property double $valor_publico_prod
 * @property double $valor_unitario_producto
 *
 * The followings are the available model relations:
 * @property DetalleFactura[] $detalleFacturas
 * @property Bodega[] $bodegas
 */
class Productos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Productos the static model class
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
		return 'productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('valor_publico_prod', 'numerical'),
			array('nombre_producto, valor_publico_prod', 'required'),
			array('nombre_producto', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idproductos, nombre_producto, valor_publico_prod','safe', 'on'=>'search'),

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
			'detalleFacturas' => array(self::HAS_MANY, 'DetalleFactura', 'productos_idproductos'),
			'bodegas' => array(self::HAS_MANY, 'Bodega', 'productos_idproductos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idproductos' => 'Idproductos',
			'nombre_producto' => 'Nombre Producto',
			'valor_publico_prod' => 'Valor Publico Prod',
			
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

		$criteria->compare('idproductos',$this->idproductos);
		$criteria->compare('nombre_producto',$this->nombre_producto,true);
		$criteria->compare('valor_publico_prod',$this->valor_publico_prod);
		//$criteria->compare('valor_unitario_producto',$this->valor_unitario_producto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

}