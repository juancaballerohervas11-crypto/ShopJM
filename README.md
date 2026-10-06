# ShopJM

> ShopJM es un proyecto sencillo de modelo de tienda online creado por Marcos Aragón y Juan Caballero.

## **1. Tablas Base de Datos:**

The database is called `online_store`.

* USERS
  * user_id
  * name
  * email
  * password
  * address (home address)
  * role (permissions: `customer` or `admin`)
* PRODUCTS
  * product_id
  * name
  * description
  * price
  * stock
  * image
* ORDERS
  * order_id
  * user_id (USERS)
  * order_date
  * status (`cart`, `pending`, `shipped` or `delivered`)
  * total (of the order)
  * shipping_address
* ORDER_LINES
  * order_id (ORDERS)
  * product_id (PRODUCTS)
  * quantity
  * unit_price
