# ticketingSystem


## API
### Tickets - /api/tickets
#### Get - ''
Response
```json
[
  {
    "id": 1,
    "user_id": 1,
    "status": "new",
    "assignee_id": null,
    "created_at": "2025-04-26T07:08:51.000000Z",
    "updated_at": "2025-04-26T07:08:51.000000Z",
    "messages": [
      {
        "id": 1,
        "ticket_id": 1,
        "title": "Test1",
        "message": "thsi is a test",
        "created_at": "2025-04-26T07:09:21.000000Z",
        "updated_at": "2025-04-26T07:09:21.000000Z"
      }
    ],
    "user": {
      "id": 1,
      "first": "John",
      "last": "Smith",
      "email": "john.smith@email.com",
      "email_verified_at": "2025-04-26T07:08:15.000000Z",
      "created_at": "2025-04-26T07:08:15.000000Z",
      "updated_at": "2025-04-26T07:08:15.000000Z"
    },
    "assignee": null
  },
  {
    "id": 2,
    "user_id": 3,
    "status": "processing",
    "assignee_id": 2,
    "created_at": "2025-04-26T07:21:59.000000Z",
    "updated_at": "2025-04-26T07:21:59.000000Z",
    "messages": [],
    "user": {
      "id": 3,
      "first": "Karen",
      "last": "Jones",
      "email": "k.jones@email.com",
      "email_verified_at": "2025-04-26T07:21:16.000000Z",
      "created_at": "2025-04-26T07:21:16.000000Z",
      "updated_at": "2025-04-26T07:21:16.000000Z"
    },
    "assignee": {
      "id": 2,
      "first": "Will",
      "last": "Franklin",
      "email": "will.franklin@email.com",
      "email_verified_at": "2025-04-26T07:08:41.000000Z",
      "created_at": "2025-04-26T07:08:41.000000Z",
      "updated_at": "2025-04-26T07:08:41.000000Z"
    }
  }
]
```
#### Get - '/id' - 
#### POST - '' - 
#### PATCH - '/id' - 
#### DELETE - '/id' -
