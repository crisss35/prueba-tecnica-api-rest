# API REST

### Instrucciones para crear peticiones, es necesario ejecutar `php artisan serve`.


### Base de Datos
<p>Comenzar con la creacion de una base de datos utilizando migraciones en laravel.</p>
                    
Eventos  | Clientes
------------- | -------------
id  | id
nombre | nombre
precio | tickets
.      | evento_id

<p>Para cada clase se utliza la relacion uno a muchos (has many y belongs to para la relacion inversa).</p>

### Como se trata de una API REST utilizo el route `api.php`.

### /api/events
Obtener un listado con todos los eventos disponibles.
###### *Ejemplo*:

	{
        "id": 2,
        "nombre": "Star Wars Sinfonico",
        "precio": 50000,
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 3,
        "nombre": "Festival de Cine",
        "precio": 30000,
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 4,
        "nombre": "Taller de Mosaicos",
        "precio": 25000,
        "created_at": null,
        "updated_at": null
	}


### /api/event/(id)

Obtener la informacion de un evento especifico.
###### *Ejemplo*:

	{
		"id": 2,
		"nombre": "Star Wars Sinfonico",
		"precio": 50000,
		"created_at": null,
		"updated_at": null,
		"ticket": "2",
		"evento_id": 3
	}


### /api/purchase

Crear la compra del ticket.
###### *Ejemplo de insercion con metodo POST*
	{
		"nombre" : "Alejandro",
		"ticket" : "2",
		"evento_id" : 3
		
		"id": 2,
		"nombre": "Star Wars Sinfonico",
		"precio": 50000,
		"created_at": null,
		"updated_at": null,
		"ticket": "2",
		"evento_id": 3
	}


### /api/orders/(id)

Obtener los tickets de un cliente.
###### *Ejemplo*:

	{
        "tickets": "1"
    },
    {
        "tickets": "2"
    },
    {
        "tickets": "5"
	}

### Código fuente, evidencias y colección de postman *incluidos en el repositorio*.
