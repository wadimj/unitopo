---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# UNITOPO API

[Get Postman Collection](http://unitopo.local/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_93bfac9632d7791d6c2cb79f153cf516 -->
## api/players
> Example request:

```bash
curl -X GET -G "http://unitopo.local/api/players" 
```

```javascript
const url = new URL("http://unitopo.local/api/players");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Leda Beahan",
            "answers": 66,
            "points": 488,
            "created_at": "2019-07-23T12:49:12.000000Z",
            "updated_at": "2019-07-23T12:49:12.000000Z"
        },
        {
            "id": 2,
            "name": "Henriette Upton",
            "answers": 6,
            "points": 402,
            "created_at": "2019-07-23T12:49:12.000000Z",
            "updated_at": "2019-07-23T12:49:12.000000Z"
        },
        {
            "id": 3,
            "name": "Jannie McCullough",
            "answers": 59,
            "points": 888,
            "created_at": "2019-07-23T12:49:12.000000Z",
            "updated_at": "2019-07-23T12:49:12.000000Z"
        },
        {
            "id": 4,
            "name": "Dane Cormier",
            "answers": 77,
            "points": 755,
            "created_at": "2019-07-23T12:49:12.000000Z",
            "updated_at": "2019-07-23T12:49:12.000000Z"
        },
        {
            "id": 5,
            "name": "Judd Hintz",
            "answers": 41,
            "points": 239,
            "created_at": "2019-07-23T12:49:12.000000Z",
            "updated_at": "2019-07-23T12:49:12.000000Z"
        },
        {
            "id": 6,
            "name": "Mrs. Imogene Bailey II",
            "answers": 96,
            "points": 897,
            "created_at": "2019-07-23T12:49:12.000000Z",
            "updated_at": "2019-07-23T12:49:12.000000Z"
        },
        {
            "id": 7,
            "name": "Prof. Garth Donnelly",
            "answers": 10,
            "points": 635,
            "created_at": "2019-07-23T12:49:12.000000Z",
            "updated_at": "2019-07-23T12:49:12.000000Z"
        },
        {
            "id": 8,
            "name": "Pierce Runolfsson",
            "answers": 94,
            "points": 80,
            "created_at": "2019-07-23T12:49:12.000000Z",
            "updated_at": "2019-07-23T12:49:12.000000Z"
        },
        {
            "id": 9,
            "name": "Mohamed Hills",
            "answers": 93,
            "points": 901,
            "created_at": "2019-07-23T12:49:12.000000Z",
            "updated_at": "2019-07-23T12:49:12.000000Z"
        },
        {
            "id": 10,
            "name": "Kelli Glover V",
            "answers": 46,
            "points": 10,
            "created_at": "2019-07-23T12:49:12.000000Z",
            "updated_at": "2019-07-23T12:49:12.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/players?page=1",
        "last": "http:\/\/localhost\/api\/players?page=10",
        "prev": null,
        "next": "http:\/\/localhost\/api\/players?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 10,
        "path": "http:\/\/localhost\/api\/players",
        "per_page": 10,
        "to": 10,
        "total": 100
    }
}
```

### HTTP Request
`GET api/players`


<!-- END_93bfac9632d7791d6c2cb79f153cf516 -->

<!-- START_7289c96227ce1c026a393ea3abe8bbfc -->
## api/players
> Example request:

```bash
curl -X POST "http://unitopo.local/api/players" 
```

```javascript
const url = new URL("http://unitopo.local/api/players");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/players`


<!-- END_7289c96227ce1c026a393ea3abe8bbfc -->

<!-- START_c59ee9cd29373e2b291359a420c59443 -->
## api/players/{player}
> Example request:

```bash
curl -X GET -G "http://unitopo.local/api/players/1" 
```

```javascript
const url = new URL("http://unitopo.local/api/players/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Leda Beahan",
        "answers": 66,
        "points": 488,
        "created_at": "2019-07-23T12:49:12.000000Z",
        "updated_at": "2019-07-23T12:49:12.000000Z"
    }
}
```

### HTTP Request
`GET api/players/{player}`


<!-- END_c59ee9cd29373e2b291359a420c59443 -->

<!-- START_2ecd2c34871333ab0f1e6108147335fc -->
## {any}
> Example request:

```bash
curl -X GET -G "http://unitopo.local/1" 
```

```javascript
const url = new URL("http://unitopo.local/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET {any}`


<!-- END_2ecd2c34871333ab0f1e6108147335fc -->


