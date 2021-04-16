# Reservations Api

Api to control reservations and customers

## Entities

- Reservation
- Contact
- ContactType

## Services

To consume the services, use the prefix *<http://servername:port/api>* followed by the endpoints that are documented below

### REST

#### Servicios para el mantenimiento de todas las entidades

##### Reservation

- /reservations - (GET) - Get all reservations
- /reservations - (POST) - Save reservation
- /reservations/{id} - (GET) - Get reservation by id
- /reservations/{id} - (PUT) - Update reservation
- /reservations/{id} - (DELETE) - Delete reservation

##### Contact

- /contacts - (GET) - Get all contacts
- /contacts - (POST) - Save contact
- /contacts/{id} - (GET) - Get contact by id
- /contacts/{id} - (PUT) - Update contact
- /contacts/{id} - (DELETE) - Delete contact

##### ContactType

- /contactTypes - (GET) - Get all contact types
- /contactTypes - (POST) - Save contact type
- /contactTypes/{id} - (GET) - Get contactType by id
- /contactTypes/{id} - (PUT) - Update contact type
- /contactTypes/{id} - (DELETE) - Delete contact type

## Valid requests

> Reservation

```json
{
    "date": "2004/10/10",
    "ranking": 1,
    "favorite": true,
    "contact_id": 2
}

```

> Contact

```json
{
    "name": "Marlon",
    "phone_number": "78304753",
    "birth_date": "2004/10/10",
    "contact_type_id": 1
}
```

> Contact Type

```json
{
    "description": "this is a 1 type"
}
```

## Possible answers

> Reservation

```json
{
    "id": 1,
    "description": "Reservation for four people at the Gran Hotel Packard, includes lunch and dinner, in the evening there will be a recreational activity where participation games are included.",
    "date": "2021-01-23",
    "ranking": 4,
    "favorite": 1,
    "contact": {
        "id": 3,
        "name": "Nydia",
        "phone_number": "76915909",
        "birth_date": "1976-10-30",
        "contact_type": {
            "id": 2,
            "description": "Favorite customer contact"
        }
    }
},
```

> Contact

```json
{
    "id": 1,
    "name": "Daniel",
    "phone_number": "78304753",
    "birth_date": "1992-03-13",
    "contact_type": {
        "id": 3,
        "description": "Contact of an non client"
    }
},
```

> Contact Type

```json
{
    "id": 1,
    "description": "Customer contact"
},
```

## Install

``
$ composer install
``
## Initial settings

1. Create a database
2. Configure database in `config/database.php`, `.env`, `.env.example` files
3. Run command `php artisan migrate:fresh --seed` to create tables in database and fill them with some initial data. If you want to add more initial data you can do it in the files located in database/seeders.

## Start

``
$ php artisan serve
``

## Tests

``
$ php artisan test
``

- If at any time a test fails, be sure to run the command `php artisan migrate:fresh --seed` to initialize the database
