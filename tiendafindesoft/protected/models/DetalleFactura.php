<?php

/**
 * This is the model class for table "detalle_factura".
 *
 * The followings are the available columns in table 'detalle_factura':
 * @property integer $iddetalle_factura
 * @property string $fecha_consumo
 * @property integer $cantidad
 * @property integer $productos_idproductos
 * @property integer $factura_idfactura
 * @property integer $factura_clientes_idclientes
 *
 * The followings are the available model relations:
 * @property Productos $productosIdproductos
 * @property Factura $facturaIdfactura
 */
class DetalleFactura extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetalleFactura the static model class
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
		return 'detalle_factura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productos_idproductos, factura_idfactura, factura_clientes_idclientes', 'required'),
			array('cantidad, productos_idproductos, factura_idfactura, factura_clientes_idclientes', 'numerical', 'integerOnly'=>true),
			array('fecha_consumo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iddetalle_factura, fecha_consumo, cantidad, productos_idproductos, factura_idfactura, factura_clientes_idclientes', 'safe', 'on'=>'search'),
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
			'productosIdproductos' => array(self::BELONGS_TO, 'Productos', 'productos_idproductos'),
			'facturaIdfactura' => array(self::BELONGS_TO, 'Factura', 'factura_idfactura'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddetalle_factura' => 'Iddetalle Factura',
			'fecha_consumo' => 'Fecha Consumo',
			'cantidad' => 'Cantidad',
			'productos_idproductos' => 'Productos Idproductos',
			'factura_idfactura' => 'Factura Idfactura',
			'factura_clientes_idclientes' => 'Factura Clientes Idclientes',
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

		$criteria->compare('iddetalle_factura',$this->iddetalle_factura);
		$criteria->compare('fecha_consumo',$this->fecha_consumo,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('productos_idproductos',$this->productos_idproductos);
		$criteria->compare('factura_idfactura',$this->factura_idfactura);
		$criteria->compare('factura_clientes_idclientes',$this->factura_clientes_idclientes);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}