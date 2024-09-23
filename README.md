# API Documentation

This document provides details about the API routes available in this application.

## Authentication

### Login

**Endpoint:**  
`POST /login`

**Description:**  
Log in a user with credentials.

**Request Body:**  
```json
{
    "email": "string",
    "password": "string"
}
```

**Response:**  
- 200 OK on successful login.
- 401 Unauthorized on failure.

---

### Register

**Endpoint:**  
`POST /register`

**Description:**  
Register a new user.

**Request Body:**  
```json
{
    "name": "string",
    "email": "string",
    "password": "string",
    "password_confirmation": "string"
}
```

**Response:**  
- 201 Created on successful registration.
- 400 Bad Request on failure.

---

### Logout

**Endpoint:**  
`POST /logout`

**Description:**  
Logs out the currently authenticated user.

**Response:**  
- 200 OK on successful logout.

---

## Mahasiswa

### Create Mahasiswa

**Endpoint:**  
`POST /mahasiswa`

**Description:**  
Add a new mahasiswa.

**Request Body:**  
```json
{
    "name": "string",
    "email": "string",
    "jurusan": "string"
}
```

**Response:**  
- 201 Created on success.

---

### List Mahasiswa

**Endpoint:**  
`GET /mahasiswa`

**Description:**  
Retrieve a list of all mahasiswa.

**Response:**  
- 200 OK with a list of mahasiswa.

---

### Get Mahasiswa by ID

**Endpoint:**  
`GET /mahasiswa/{id}`

**Description:**  
Retrieve details of a specific mahasiswa by ID.

**Response:**  
- 200 OK on success.
- 404 Not Found if the mahasiswa does not exist.

---

### Update Mahasiswa

**Endpoint:**  
`PUT /mahasiswa/{id}`

**Description:**  
Update an existing mahasiswa's details by ID.

**Request Body:**  
```json
{
    "name": "string",
    "email": "string",
    "jurusan": "string"
}
```

**Response:**  
- 200 OK on success.
- 404 Not Found if the mahasiswa does not exist.

---

### Delete Mahasiswa

**Endpoint:**  
`DELETE /mahasiswa/{id}`

**Description:**  
Delete a specific mahasiswa by ID.

**Response:**  
- 200 OK on success.
- 404 Not Found if the mahasiswa does not exist.

---

## Chat

### Create Chat

**Endpoint:**  
`POST /chat`

**Description:**  
Send a new chat message.

**Request Body:**  
```json
{
    "sender_id": "integer",
    "receiver_id": "integer",
    "message": "string"
}
```

**Response:**  
- 201 Created on success.

---

### List Chats

**Endpoint:**  
`GET /chat`

**Description:**  
Retrieve a list of all chats.

**Response:**  
- 200 OK with a list of chats.

---

### Get Chat by ID

**Endpoint:**  
`GET /chat/{id}`

**Description:**  
Retrieve a specific chat by ID.

**Response:**  
- 200 OK on success.
- 404 Not Found if the chat does not exist.

---

### Update Chat

**Endpoint:**  
`PUT /chat/{id}`

**Description:**  
Update a chat message by ID.

**Request Body:**  
```json
{
    "message": "string"
}
```

**Response:**  
- 200 OK on success.
- 404 Not Found if the chat does not exist.

---

### Delete Chat

**Endpoint:**  
`DELETE /chat/{id}`

**Description:**  
Delete a chat message by ID.

**Response:**  
- 200 OK on success.
- 404 Not Found if the chat does not exist.

---

## Comment

### Create Comment

**Endpoint:**  
`POST /comment`

**Description:**  
Add a new comment.

**Request Body:**  
```json
{
    "article_id": "integer",
    "user_id": "integer",
    "comment": "string"
}
```

**Response:**  
- 201 Created on success.

---

### List Comments

**Endpoint:**  
`GET /comment`

**Description:**  
Retrieve a list of all comments.

**Response:**  
- 200 OK with a list of comments.

---

### Get Comment by ID

**Endpoint:**  
`GET /comment/{id}`

**Description:**  
Retrieve a specific comment by ID.

**Response:**  
- 200 OK on success.
- 404 Not Found if the comment does not exist.

---

### Update Comment

**Endpoint:**  
`PUT /comment/{id}`

**Description:**  
Update a comment by ID.

**Request Body:**  
```json
{
    "comment": "string"
}
```

**Response:**  
- 200 OK on success.
- 404 Not Found if the comment does not exist.

---

### Delete Comment

**Endpoint:**  
`DELETE /comment/{id}`

**Description:**  
Delete a specific comment by ID.

**Response:**  
- 200 OK on success.
- 404 Not Found if the comment does not exist.

---

## UMKM

### Create UMKM

**Endpoint:**  
`POST /umkm`

**Description:**  
Add a new UMKM record.

**Request Body:**  
```json
{
    "name": "string",
    "owner": "string",
    "business_type": "string"
}
```

**Response:**  
- 201 Created on success.

---

### List UMKM

**Endpoint:**  
`GET /umkm`

**Description:**  
Retrieve a list of all UMKM records.

**Response:**  
- 200 OK with a list of UMKM.

---

### Get UMKM by ID

**Endpoint:**  
`GET /umkm/{id}`

**Description:**  
Retrieve a specific UMKM record by ID.

**Response:**  
- 200 OK on success.
- 404 Not Found if the UMKM does not exist.

---

### Update UMKM

**Endpoint:**  
`PUT /umkm/{id}`

**Description:**  
Update a UMKM record by ID.

**Request Body:**  
```json
{
    "name": "string",
    "owner": "string",
    "business_type": "string"
}
```

**Response:**  
- 200 OK on success.
- 404 Not Found if the UMKM does not exist.

---

### Delete UMKM

**Endpoint:**  
`DELETE /umkm/{id}`

**Description:**  
Delete a specific UMKM record by ID.

**Response:**  
- 200 OK on success.
- 404 Not Found if the UMKM does not exist.

---

This documentation covers the core routes of the application. For any other routes, check the respective controller or API documentation.
