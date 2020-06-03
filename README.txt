Antes de ejcutar los endpoints se debe levantar el servidor de laravel con el comando "php artisan serve"

ENDPOINTS USERS
metodo:get
endpoint = http://127.0.0.1:8000/api/users
tema = mostrar usuarios
status :200
json:{
    "data": [
        {
            "id": 2,
            "name": "ececewcddfr",
            "email": "suarez@gmail.com",
            "email_verified_at": null,
            "rol_id": 1,
            "created_at": "2020-06-02T22:49:17.000000Z",
            "updated_at": "2020-06-03T00:48:06.000000Z"
        }
}
]



metodo:post
endpoint = http://127.0.0.1:8000/api/users
tema = crear usuario
status:201
json:{
    "data": {
        "name": "juan",
        "email": "juan@gmail.com",
        "rol_id": "1",
        "updated_at": "2020-06-03T01:34:10.000000Z",
        "created_at": "2020-06-03T01:34:10.000000Z",
        "id": 5
    }
}



metodo:get
endpoint = http://127.0.0.1:8000/api/users/{user}
tema=consultar usuario por id
status:200
json:{
    "data": {
        "id": 5,
        "name": "juan",
        "email": "juan@gmail.com",
        "email_verified_at": null,
        "rol_id": 1,
        "created_at": "2020-06-03T01:34:10.000000Z",
        "updated_at": "2020-06-03T01:34:10.000000Z",
        "rol": {
            "id": 1,
            "name": "lolololololol",
            "description": "lololololollo",
            "created_at": null,
            "updated_at": "2020-06-03T01:30:17.000000Z"
        }
    }
}



metodo:put/patch
endpoint = http://127.0.0.1:8000/api/users/{user}
tema=modificar un usuario por id
status:200
json:{
    "data": {
        "id": 5,
        "name": "esteban",
        "email": "juan@gmail.com",
        "email_verified_at": null,
        "rol_id": 1,
        "created_at": "2020-06-03T01:34:10.000000Z",
        "updated_at": "2020-06-03T01:36:24.000000Z"
    }
}



metodo:delete
endpoint = http://127.0.0.1:8000/api/users/{user}
tema = eliminar usuario por id  
status:200
json:{
    "data": {
        "id": 5,
        "name": "esteban",
        "email": "juan@gmail.com",
        "email_verified_at": null,
        "rol_id": 1,
        "created_at": "2020-06-03T01:34:10.000000Z",
        "updated_at": "2020-06-03T01:36:24.000000Z"
    }
}



EDNPOINTS ROLES
metodo:get
endpoint = http://127.0.0.1:8000/api/roles
tema = mostrar roles
status:200
json:{
    "data": [
        {
            "id": 1,
            "name": "ADMIN",
            "description": "administrador",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "name": "regular",
            "description": "persona regular",
            "created_at": null,
            "updated_at": null
        }
]


metodo:post
endpoint =  http://127.0.0.1:8000/api/roles
tema = crear rol
status:201
json:{
    "data": {
        "description": "dfghjsadf",
        "name": "HIasdf",
        "updated_at": "2020-06-03T01:25:23.000000Z",
        "created_at": "2020-06-03T01:25:23.000000Z",
        "id": 11
    }
}


metodo:get
endpoint = http://127.0.0.1:8000/api/roles/1
tema: consultar por id
status:200
json:{
    "data": {
        "id": 1,
        "name": "ADMIN",
        "description": "administrador",
        "created_at": null,
        "updated_at": null
    }
}


metodo:put/patch
endpoint = http://127.0.0.1:8000/api/roles/1
tema: modificar por id
status:200
json:{
    "data": {
        "id": 1,
        "name": "lolololololol",
        "description": "lololololollo",
        "created_at": null,
        "updated_at": "2020-06-03T01:30:17.000000Z"
    }
}


metodo:delete
endpoint = http://127.0.0.1:8000/api/roles/1
tema:eliminar por id
status:200
json:{
    "data": {
        "id": 1,
        "name": "sadfghj",
        "description": "sdfghj",
        "created_at": null,
        "updated_at": null
    }
}