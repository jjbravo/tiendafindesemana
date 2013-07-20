<?php

/**
 * This is the model class for table "bodega".
 *
 * The followings are the available columns in table 'bodega':
 * @property integer $stock
 * @property integer $stock_minimo
 * @property string $fecha_pedito
 * @property double $valor_total_pedido
 * @property integer $productos_idproductos
 *
 * The followings are the available model relations:
 * @property Productos $productosIdproductos
 */
class Bodega extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bodega the static model class
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
		return 'bodega';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productos_idproductos', 'required'),
			array('stock, stock_minimo, productos_idproductos', 'numerical', 'integerOnly'=>true),
			array('stock, stock_minimo, fecha_pedito, valor_total_pedido, productos_idproductos', 'required'),

			array('valor_total_pedido,valor_unitario_producto', 'numerical'),
			//array('fecha_pedito', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('stock, stock_minimo, fecha_pedito, valor_total_pedido, valor_unitario_producto, productos_idproductos', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'stock' => 'Stock',
			'stock_minimo' => 'Stock Minimo',
			'fecha_pedito' => 'Fecha Pedito',
			'valor_total_pedido' => 'Valor Total Pedido',
			'productos_idproductos' => 'Productos Id productos',
			'valor_unitario_producto'=>'Valor unitario del Producto',
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
		//$productos=new Productos::$model->findAll('nombre_producto');
		$criteria=new CDbCriteria;

		$criteria->compare('stock',$this->stock);
		$criteria->compare('stock_minimo',$this->stock_minimo);
		$criteria->compare('fecha_pedito',$this->fecha_pedito,true);
		$criteria->compare('valor_total_pedido',$this->valor_total_pedido);
		$criteria->compare('productos_idproductos',$this->productos_idproductos);
		$criteria->compare('valor_unitario_producto',$this->valor_unitario_producto);

		//$criteria->compare('nombre_producto',$this->productos->nombre_producto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getMenuProductos()
	{
	return	CHtml::listData(Productos::model()->findAll(),"idproductos","nombre_producto");
	}
}