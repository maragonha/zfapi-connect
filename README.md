This repository is intended to show you how to connect to the ZenFisio API using Auth2 as the authentication standard.

---
## Requirements

1. PHP 7 >=
2. Composer

---
## Steps

Follow the steps below to test your API:

1. Clone this project
2. With the terminal enter the folder and execute the command "composer install"
3. Override API access data at beginning of index.php file




AUTENTICAÇÃO USANDO OAUTH2

Para a valorização da segurança de seus dados, utilizamos o protocolo oAuth 2.0 para o acesso à API.


**Get Bearer Token**

Para retornar o Bearer para acessar a API, se faz uma requisição POST para a rota: 

```
http://127.0.0.1:8000/oauth/token
```

Mandando no corpo os seguintes dados:

```
“grant_type”: “password”,
“client_id”: {client_id},
“client_secret”: {client_secret},
“username”: {username},
“password”: {password}
```

Exemplo de retorno:

```
"token_type": "Bearer",
"expires_in": 86400,
"access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjEzNWY3N2NkYzM0NjY0MjA3OWZiMTliYmQ1ODBiZmVhNjkzNWRkOGIxODY2NTJiYmRiYTNkZDY0NTE5MWMwZDlkNDBhYmFkMmE2ZGJmNGM3In0.eyJhdWQiOiIxIiwianRpIjoiMTM1Zjc3Y2RjMzQ2NjQyMDc5ZmIxOWJiZDU4MG85ZWE2OTM1ZGQ4YjE4NjY1MmJiZGJhM2RkNjQ1MTkxYzBkOWQ0MGFiYWQyYTZkYmY0YzciLCJpYXQiOjE2MTc2MzM0MzYsIm5iZiI6MTYxNzYzMzQzNiwiZXhwIjoxNjE3NzE5ODM2LCJzdWIiOiIxNTAwNCIsInNjb3BlcyI6W119.HiFdZl1YamxROgWIrNHFvBT-kluYrEr3o9n3kqDIyNK84kCnJ_0OS9xx82e7Um5dHBUNMBHMpLNf04fvxdTH8hh6oaB9ddbCS0R6gYSCG8684de7HcaMMWPWtrOWocW6b_t6amPeXhmvM_2UH0f-R-kyfQnI0P8BuZZIgDQLVYrXjkEtV_JTsxGw1jCawcz_nRCauDfNt854cqW-MxEALd0Yo-kJ-GdvY1gDaHXioS6W7kiU5n9NNBUm7wTuztg97LNR4otulwKV34DJSe9h3ZQF_dcimEICCgIm9LQ8kBjlay5Yf1eax12313Q2ZqnLvmcSn9BDTwgGhyUzLkaYmby3HFgy05WUpaMf0QyncHTcWosI44qARtcxJnD0ZDse7wl5rHV6oj9wNOknA18c_t7VRDpkDMY5D-6uKk9Jmr_0xIxsucdiLt-UmkUgANLcB8-boEUVrE6bOikgz-DzpEbaAI8xoi-9vlF5r4gtsClbrYXNTgWzngS_QLwld2Vae4fbg6WTbCwGqfIU2m4lF0hwHAQUOVk1qv8ySjNexEc7He1jE0n5dSeMMWoQj6Wg0I8J7z84a5b1GrUXvHJBm2yFeL9meJ9JXvLdgzLXgspYfJIyTq_u33w5n6D8N257pusjc5I5xqWK4PJXnZv7DLBs56vB6Qq_ewZKO1Spchse0",
"refresh_token": "def50200a00bcd92b455023acaac202c253273d89e39959887a666312a2cbdef2b1db733a8c6d1d13b9633c83b285e1e2c6978ee1b1f5a6725917fd99657b550f4c66311d6a9dfb8bc126aff26bd346d45f1a45fd7496f272586ed88ac7fa14dd9cd1db8c6a216f45c03d86d89a1e19dca14800aaf78b6abacf978c7922d43cb3695a9e9d7634759d25765d91ded669e97942bf9f80609be63bd537ecefc5a43430110a29d7f245f22fefb26443a19848ed6931ed5fb096324742d72a8d54b495c0e9598b45ab0fa1649dc12ce5547d3050bf850a321ff14c38c09ab13af42c6be7ec90af651726ed78e8fe2fff53a6a10a2dd6080adb854b29ce755819294d8caba2468155daf6408b9f97e5014085220fc42a47de290b3d7554c3513bf41ed1258acab4783270bd99c00595bd5cb8bd69af08d9446d5445635d5c6143fde25a9f1634bd0640c8651e606d353f427718872f87eadfb12c66bd4e09f6dbf5db3371304"
```


**Get All Pacients**

Para retornar todos os pacientes da entidade da API, deve ser feita uma requisição GET para a rota:

```
http://127.0.0.1:8000/api/v1/patients
```

Exemplo de retorno:

```
"id": 1257,
"name": "Lindaura Olindina Feltz",
"slug": "lindaura-olindina-feltz",
"gender": "Feminino",
"age": "84 anos",
"city": "Balneário Camboriú",
"state": "SC",
"created_at": "2017-07-24 09:36:47",
"updated_at": "2017-07-24 09:36:47",
"date_birth": "1936-04-20 00:00:00",
"address": "rua jamaica",
"entity_id": 39,
"marital_status": "Casado(a)",
"profession": "do lar",
"cellphone": "",
"cpf": "701.876.149-20",
"email": "",
"image_id": null,
"phone": "(47) 3360-0078",
"indication": null,
"agreement_number": null,
"name_father": null,
"cpf_father": null,
"name_mother": null,
"cpf_mother": null,
"diagnosis": null,
"agreement_id": null,
"rg": null,
"informations": null,
"cep": null,
"deleted_at": null,
"neighborhood": null,
"address_number": null,
"address_complement": null,
"bank_name": null,
"bank_card_agency": null,
"bank_card_number": null,
"cnpj": null,
"specialties": null,
"import_id": null,
"country": "brazil",
"country_phone": "br",
"country_phone_code": "55",
"pix": null,
"beneficiary_card_name": null,
"pix_type": null,
"professional_concil": null,
"professional_concil_number": null,
"professional_concil_uf": null,
"professional_cbos": null,
"signature_image_id": null
```

**Get All Appointments**

Para retornar todos os atendimentos da entidade da API, deve ser feita uma requisição GET para a rota:

```
http://127.0.0.1:8000/api/v1/appointments
```


Importante ressaltar que o retorno aqui é paginado, dando 25 registros por página.

Exemplo de retorno:

```
"current_page": 1,
"data": [
{
    "date": "2017-07-24 00:00:00",
    "contact_id": 1257,
    "created_at": "2017-07-24 09:37:46",
    "updated_at": "2019-11-18 21:01:24",
    "user_id": 66,
    "start": "09:00:00",
    "end": "10:00:00",
    "agreement_number": null,
    "blocking_reason": null,
    "comment": null,
    "agreement_id": 189,
    "status_id": 3,
    "procedure_id": null,
    "authorization_code": null,
    "room_id": null,
    "repetition": null,
    "all_users": null,
    "block_schedules": 0,
    "confirmed": 0,
    "user_name": "Dr.bruno Feltz",
    "room_name": null,
    "status_name": "Atendido",
    "procedure_name": null,
    "agreement_name": "Particular",
    "date_formats": {
    "d\/m\/Y": "24\/07\/2017",
    "m\/d\/Y": "07\/24\/2017"
    },
    "has_evaluation_or_evolution": false
},
{
    "date": "2017-07-24 00:00:00",
    "contact_id": 1258,
    "created_at": "2017-07-24 10:32:44",
    "updated_at": "2019-11-18 21:01:24",
    "user_id": 66,
    "start": "10:02:00",
    "end": "11:00:00",
    "agreement_number": null,
    "blocking_reason": null,
    "comment": null,
    "agreement_id": 189,
    "status_id": 3,
    "procedure_id": null,
    "authorization_code": null,
    "room_id": null,
    "repetition": null,
    "all_users": null,
    "block_schedules": 0,
    "confirmed": 0,
    "user_name": "Dr.bruno Feltz",
    "room_name": null,
    "status_name": "Atendido",
    "procedure_name": null,
    "agreement_name": "Particular",
    "date_formats": {
    "d\/m\/Y": "24\/07\/2017",
    "m\/d\/Y": "07\/24\/2017"
    },
    "has_evaluation_or_evolution": false
}
],
"first_page_url": "http:\/\/127.0.0.1:8000\/api\/v1\/appointments?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "http:\/\/127.0.0.1:8000\/api\/v1\/appointments?page=273",
"next_page_url": "http:\/\/127.0.0.1:8000\/api\/v1\/appointments?page=2",
"path": "http:\/\/127.0.0.1:8000\/api\/v1\/appointments",
"per_page": 25,
"prev_page_url": null,
"to": 25,
"total": 2
```



**Get All Movements**

Para retornar todos os atendimentos da entidade da API, deve ser feita uma requisição GET para a rota:

```
http://127.0.0.1:8000/api/v1/movements
```

Importante ressaltar que o retorno aqui é paginado, dando 25 registros por página.

Exemplo de retorno:

```
"current_page": 1,
"data": [
{
    "description": "Atendimento - Adorvalino Ambrosio Strapazzon",
    "value": "100.00",
    "date_maturity": "2018-05-17 00:00:00",
    "date_payment": "2018-05-17 00:00:00",
    "payment_methods": null,
    "contact_id": 2777,
    "additional": null,
    "type": 1,
    "created_at": "2018-05-17 08:16:48",
    "updated_at": "2020-03-17 21:46:02",
    "appointment_id": 67863,
    "information": null,
    "owner": null,
    "deleted_at": null,
    "recurrence_type": null,
    "user_name": "Dr.bruno Feltz",
    "contact_name": "Adorvalino Ambrosio Strapazzon",
    "procedure_name": null,
    "account_name": "Conta Padrão",
    "financial_category_name": "Atendimento",
    "cost_centers_name": null
},
],
"first_page_url": "http:\/\/127.0.0.1:8000\/api\/v1\/movements?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "http:\/\/127.0.0.1:8000\/api\/v1\/movements?page=15",
"next_page_url": "http:\/\/127.0.0.1:8000\/api\/v1\/movements?page=2",
"path": "http:\/\/127.0.0.1:8000\/api\/v1\/movements",
"per_page": 25,
"prev_page_url": null,
"to": 25,
"total": 1
```