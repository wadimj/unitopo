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
# Info

Welcome to the generated API reference.
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
            "name": "Johnny Bartoletti",
            "answers": 54,
            "points": 381,
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 2,
            "name": "Caterina Zieme",
            "answers": 96,
            "points": 463,
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 3,
            "name": "Mabelle Greenholt PhD",
            "answers": 46,
            "points": 389,
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 4,
            "name": "Lexi Schimmel",
            "answers": 29,
            "points": 235,
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 5,
            "name": "Alejandrin Wintheiser I",
            "answers": 53,
            "points": 579,
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/players?page=1",
        "last": "http:\/\/localhost\/api\/players?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/players",
        "per_page": 10,
        "to": 5,
        "total": 5
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
        "name": "Johnny Bartoletti",
        "answers": 54,
        "points": 381,
        "created_at": "2019-07-23T20:21:43.000000Z",
        "updated_at": "2019-07-23T20:21:43.000000Z"
    }
}
```

### HTTP Request
`GET api/players/{player}`


<!-- END_c59ee9cd29373e2b291359a420c59443 -->

<!-- START_16315fad4df8975ef7a950193c2fab25 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://unitopo.local/api/routes" 
```

```javascript
const url = new URL("http://unitopo.local/api/routes");

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
            "name": "Deserunt totam delectus quo doloribus qui sint quod a.",
            "type": {
                "id": 1,
                "name": "Alpine"
            },
            "grades": [
                {
                    "id": 9,
                    "scale_id": 1,
                    "position": 9,
                    "value": "9.z",
                    "pivot": {
                        "route_id": 1,
                        "grade_id": 9,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                }
            ],
            "description": "Qui enim ratione qui exercitationem molestiae porro. Nesciunt veritatis porro aliquam sint ea. Qui tenetur quia id eveniet corrupti tenetur totam rerum. Itaque accusamus repellendus quas provident voluptatibus temporibus consequatur.",
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 2,
            "name": "Sunt quibusdam ut mollitia architecto eius.",
            "type": {
                "id": 1,
                "name": "Alpine"
            },
            "grades": [
                {
                    "id": 9,
                    "scale_id": 1,
                    "position": 9,
                    "value": "9.z",
                    "pivot": {
                        "route_id": 2,
                        "grade_id": 9,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                },
                {
                    "id": 2,
                    "scale_id": 1,
                    "position": 2,
                    "value": "2.k",
                    "pivot": {
                        "route_id": 2,
                        "grade_id": 2,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                }
            ],
            "description": "Eos quo fugiat laborum quia dicta sint quia. Sit ab est vero vero magnam expedita quisquam quidem. Repudiandae debitis sit est deleniti excepturi culpa provident. Ab sed voluptatem vero facilis aliquid quod quisquam.",
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 3,
            "name": "Qui est laboriosam assumenda laboriosam illo est non nam.",
            "type": {
                "id": 1,
                "name": "Alpine"
            },
            "grades": [
                {
                    "id": 1,
                    "scale_id": 1,
                    "position": 1,
                    "value": "1.t",
                    "pivot": {
                        "route_id": 3,
                        "grade_id": 1,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                }
            ],
            "description": "Hic incidunt ea sed est id error incidunt voluptatem. Et suscipit in enim quo ut. Nisi ullam quidem non ut. Libero natus esse omnis officia quam sed voluptas. Consequatur ipsa eaque minima velit.",
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 4,
            "name": "Enim qui alias adipisci.",
            "type": {
                "id": 1,
                "name": "Alpine"
            },
            "grades": [
                {
                    "id": 10,
                    "scale_id": 1,
                    "position": 10,
                    "value": "10.o",
                    "pivot": {
                        "route_id": 4,
                        "grade_id": 10,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                }
            ],
            "description": "Ducimus asperiores aspernatur non numquam officia et. Quis accusamus veritatis nulla omnis sunt quaerat. Ad vel atque est dolorem distinctio.",
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 5,
            "name": "Qui voluptas sit possimus doloremque officiis.",
            "type": {
                "id": 1,
                "name": "Alpine"
            },
            "grades": [
                {
                    "id": 2,
                    "scale_id": 1,
                    "position": 2,
                    "value": "2.k",
                    "pivot": {
                        "route_id": 5,
                        "grade_id": 2,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                }
            ],
            "description": "Quas sint sed odio sint maiores dolor itaque. Eius officia et magni. At nam est laboriosam est voluptatem. Ullam molestias dolores dolorem in.",
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 6,
            "name": "Libero ipsum esse ea rem.",
            "type": {
                "id": 1,
                "name": "Alpine"
            },
            "grades": [
                {
                    "id": 4,
                    "scale_id": 1,
                    "position": 4,
                    "value": "4.y",
                    "pivot": {
                        "route_id": 6,
                        "grade_id": 4,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                }
            ],
            "description": "Est est molestiae ullam eos ipsam corrupti id aut. Nihil inventore numquam reprehenderit quisquam. Vero dolores totam sed consectetur ullam eligendi.",
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 7,
            "name": "Provident debitis earum aut accusamus aspernatur eligendi eveniet.",
            "type": {
                "id": 1,
                "name": "Alpine"
            },
            "grades": [
                {
                    "id": 2,
                    "scale_id": 1,
                    "position": 2,
                    "value": "2.k",
                    "pivot": {
                        "route_id": 7,
                        "grade_id": 2,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                },
                {
                    "id": 7,
                    "scale_id": 1,
                    "position": 7,
                    "value": "7.b",
                    "pivot": {
                        "route_id": 7,
                        "grade_id": 7,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                }
            ],
            "description": "Doloremque dicta nihil aspernatur rem illo. Quis mollitia temporibus deserunt soluta. Quia nihil ut quos magni non.",
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 8,
            "name": "Vel quidem possimus neque temporibus error consectetur.",
            "type": {
                "id": 1,
                "name": "Alpine"
            },
            "grades": [
                {
                    "id": 3,
                    "scale_id": 1,
                    "position": 3,
                    "value": "3.i",
                    "pivot": {
                        "route_id": 8,
                        "grade_id": 3,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                },
                {
                    "id": 5,
                    "scale_id": 1,
                    "position": 5,
                    "value": "5.s",
                    "pivot": {
                        "route_id": 8,
                        "grade_id": 5,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                }
            ],
            "description": "Corporis esse earum molestias vel placeat. Et laborum nulla et impedit laudantium cum. Velit maxime quaerat similique et porro quam. Dolorem corporis doloribus incidunt id aliquid.",
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 9,
            "name": "Sint rerum magni perferendis adipisci doloribus.",
            "type": {
                "id": 1,
                "name": "Alpine"
            },
            "grades": [
                {
                    "id": 1,
                    "scale_id": 1,
                    "position": 1,
                    "value": "1.t",
                    "pivot": {
                        "route_id": 9,
                        "grade_id": 1,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                }
            ],
            "description": "Laborum consequuntur mollitia libero voluptatum. Voluptatum ut eos sit reprehenderit. Officia quis sunt sed modi.",
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        },
        {
            "id": 10,
            "name": "Esse deserunt consequatur laboriosam doloremque odit eaque excepturi.",
            "type": {
                "id": 1,
                "name": "Alpine"
            },
            "grades": [
                {
                    "id": 5,
                    "scale_id": 1,
                    "position": 5,
                    "value": "5.s",
                    "pivot": {
                        "route_id": 10,
                        "grade_id": 5,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                },
                {
                    "id": 10,
                    "scale_id": 1,
                    "position": 10,
                    "value": "10.o",
                    "pivot": {
                        "route_id": 10,
                        "grade_id": 10,
                        "created_at": "2019-07-23 20:21:44",
                        "updated_at": "2019-07-23 20:21:44"
                    }
                }
            ],
            "description": "Sed eos occaecati incidunt harum sunt consequatur et. Voluptates in et non. Aperiam expedita aut labore architecto beatae et et.",
            "created_at": "2019-07-23T20:21:43.000000Z",
            "updated_at": "2019-07-23T20:21:43.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/routes?page=1",
        "last": "http:\/\/localhost\/api\/routes?page=3",
        "prev": null,
        "next": "http:\/\/localhost\/api\/routes?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 3,
        "path": "http:\/\/localhost\/api\/routes",
        "per_page": 10,
        "to": 10,
        "total": 30
    }
}
```

### HTTP Request
`GET api/routes`


<!-- END_16315fad4df8975ef7a950193c2fab25 -->

<!-- START_05bf29e3c74d612d874fff7bd503305e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://unitopo.local/api/routes" 
```

```javascript
const url = new URL("http://unitopo.local/api/routes");

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
`POST api/routes`


<!-- END_05bf29e3c74d612d874fff7bd503305e -->

<!-- START_b84b16a6f2f16f923ac2a3ffa88b8fc4 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://unitopo.local/api/routes/1" 
```

```javascript
const url = new URL("http://unitopo.local/api/routes/1");

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


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/routes/{route}`


<!-- END_b84b16a6f2f16f923ac2a3ffa88b8fc4 -->

<!-- START_a0f6df2d1e3d40a729f75f77d71e6501 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://unitopo.local/api/routes/1" 
```

```javascript
const url = new URL("http://unitopo.local/api/routes/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/routes/{route}`

`PATCH api/routes/{route}`


<!-- END_a0f6df2d1e3d40a729f75f77d71e6501 -->

<!-- START_375e9b17bc3beff4859437fed55908e1 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://unitopo.local/api/routes/1" 
```

```javascript
const url = new URL("http://unitopo.local/api/routes/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/routes/{route}`


<!-- END_375e9b17bc3beff4859437fed55908e1 -->

<!-- START_07b834d96547bcbd4a668041b522d941 -->
## {catchall?}
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
`GET {catchall?}`


<!-- END_07b834d96547bcbd4a668041b522d941 -->


