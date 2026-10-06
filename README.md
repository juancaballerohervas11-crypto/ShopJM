# ShopJM

> ShopJM es un proyecto sencillo de modelo de tienda online creado por Marcos Aragón y Juan Caballero.

## **1. Tablas de la base de datos:**

* USUARIOS

  * id_usuario
  * nombre
  * email
  * contraseña
  * dirección (domicilio)
  * rol (permisos)
* PEDIDOS

  * id_pedido
  * id_usuario (USUARIOS)
  * fecha
  * estado
  * total (de pedidos)
  * direccion de envío
* CARRITO

  * id_pedido
  * id_producto
  * cantidad
  * precio_unitario
* PRODUCTOS

  * id_producto
  * nombre
  * descripción
  * precio
  * imagen
  * stock
