# ticketingSystem


## API
### Tickets - /api/tickets
#### Get - ''
Response
```json
[
  {
    "id": 1,
    "user_id": 8,
    "created_at": "2025-04-28T08:43:23.000000Z",
    "updated_at": "2025-04-28T08:43:23.000000Z",
    "currentStatus": "processing",
    "currentAssignee": {
      "id": 1,
      "ticket_id": 1,
      "user_id": 4,
      "active": true,
      "created_at": "2025-04-28T08:43:24.000000Z",
      "updated_at": "2025-04-28T08:43:24.000000Z"
    },
    "messages": [
      {
        "id": 1,
        "ticket_id": 1,
        "user_id": 8,
        "title": "Mrs.",
        "message": "Aut dignissimos consequuntur saepe. Est et velit maiores. Perspiciatis nulla non repellendus.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 2,
        "ticket_id": 1,
        "user_id": 8,
        "title": "Prof.",
        "message": "Cum consequatur officiis odio occaecati molestiae et. Ea assumenda et ducimus occaecati maxime laboriosam. A et asperiores aut sunt. Optio voluptatem qui et ducimus mollitia quis repudiandae.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "user": {
      "id": 8,
      "first": "Herminio",
      "last": "Boyer",
      "email": "volkman.mark@example.net",
      "email_verified_at": "2025-04-28T08:43:23.000000Z",
      "created_at": "2025-04-28T08:43:23.000000Z",
      "updated_at": "2025-04-28T08:43:23.000000Z"
    },
    "statuses": [
      {
        "id": 1,
        "ticket_id": 1,
        "status": "processing",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "assignees": [
      {
        "id": 1,
        "ticket_id": 1,
        "user_id": 4,
        "active": true,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 2,
        "ticket_id": 1,
        "user_id": 4,
        "active": true,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ]
  },
  {
    "id": 2,
    "user_id": 6,
    "created_at": "2025-04-28T08:43:24.000000Z",
    "updated_at": "2025-04-28T08:43:24.000000Z",
    "currentStatus": "processing",
    "currentAssignee": null,
    "messages": [
      {
        "id": 3,
        "ticket_id": 2,
        "user_id": 5,
        "title": "Mr.",
        "message": "Nihil id natus odit deserunt et quia unde. Repudiandae sed ut perferendis sint perspiciatis modi recusandae. Velit voluptas sapiente eum eos delectus.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "user": {
      "id": 6,
      "first": "Keaton",
      "last": "Batz",
      "email": "missouri.lowe@example.net",
      "email_verified_at": "2025-04-28T08:43:23.000000Z",
      "created_at": "2025-04-28T08:43:23.000000Z",
      "updated_at": "2025-04-28T08:43:23.000000Z"
    },
    "statuses": [
      {
        "id": 2,
        "ticket_id": 2,
        "status": "new",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 11,
        "ticket_id": 2,
        "status": "processing",
        "created_at": "2025-04-28T08:54:33.000000Z",
        "updated_at": "2025-04-28T08:54:33.000000Z"
      }
    ],
    "assignees": [
      {
        "id": 3,
        "ticket_id": 2,
        "user_id": 8,
        "active": false,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ]
  },
  {
    "id": 3,
    "user_id": 5,
    "created_at": "2025-04-28T08:43:24.000000Z",
    "updated_at": "2025-04-28T08:43:24.000000Z",
    "currentStatus": "resolved",
    "currentAssignee": {
      "id": 4,
      "ticket_id": 3,
      "user_id": 5,
      "active": true,
      "created_at": "2025-04-28T08:43:24.000000Z",
      "updated_at": "2025-04-28T08:43:24.000000Z"
    },
    "messages": [
      {
        "id": 4,
        "ticket_id": 3,
        "user_id": 2,
        "title": "Miss",
        "message": "Amet non illum quae corrupti aliquam voluptatem. Non odit adipisci velit tempora qui beatae. Sit nemo velit corrupti qui consequatur possimus. Eos voluptatem voluptatem at tempore.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 5,
        "ticket_id": 3,
        "user_id": 2,
        "title": "Mr.",
        "message": "Sit labore asperiores maxime rerum. Voluptatum autem fugiat ad neque earum. Porro laudantium sed mollitia molestiae amet magni hic hic.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 6,
        "ticket_id": 3,
        "user_id": 2,
        "title": "Prof.",
        "message": "Vel cupiditate facere molestias doloribus sunt ea consequatur. Doloremque cupiditate ut quod qui et repudiandae perspiciatis. Nisi quos quisquam asperiores natus dolorum non accusamus.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "user": {
      "id": 5,
      "first": "Celia",
      "last": "Fritsch",
      "email": "lelia62@example.com",
      "email_verified_at": "2025-04-28T08:43:23.000000Z",
      "created_at": "2025-04-28T08:43:23.000000Z",
      "updated_at": "2025-04-28T08:43:23.000000Z"
    },
    "statuses": [
      {
        "id": 3,
        "ticket_id": 3,
        "status": "resolved",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "assignees": [
      {
        "id": 4,
        "ticket_id": 3,
        "user_id": 5,
        "active": true,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ]
  },
  {
    "id": 4,
    "user_id": 7,
    "created_at": "2025-04-28T08:43:24.000000Z",
    "updated_at": "2025-04-28T08:43:24.000000Z",
    "currentStatus": "new",
    "currentAssignee": null,
    "messages": [
      {
        "id": 7,
        "ticket_id": 4,
        "user_id": 4,
        "title": "Ms.",
        "message": "Dolorem dolor nobis blanditiis illo. Voluptas ab illo quia rerum. Nam numquam repellendus dolor nihil.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 8,
        "ticket_id": 4,
        "user_id": 4,
        "title": "Ms.",
        "message": "Nostrum voluptatem dicta asperiores sint. Suscipit quia vitae voluptatem voluptatem eaque. Est quae non hic saepe sint aperiam sed officiis. Dolorem aut cupiditate sed dicta veniam delectus.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 9,
        "ticket_id": 4,
        "user_id": 4,
        "title": "Prof.",
        "message": "Minima quasi ipsum eum iure ut ut. Sint in dicta dolores perspiciatis quaerat. Sed aut similique doloremque.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 10,
        "ticket_id": 4,
        "user_id": 4,
        "title": "Mr.",
        "message": "Ut deserunt id cumque ut ut itaque quae. Asperiores sunt harum eaque eius saepe id. Quia non ea corrupti aliquam.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 11,
        "ticket_id": 4,
        "user_id": 4,
        "title": "Dr.",
        "message": "Ipsa ut assumenda quae nemo repellat qui enim. Officia dignissimos libero et et.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "user": {
      "id": 7,
      "first": "Bridie",
      "last": "Hartmann",
      "email": "albina11@example.org",
      "email_verified_at": "2025-04-28T08:43:23.000000Z",
      "created_at": "2025-04-28T08:43:23.000000Z",
      "updated_at": "2025-04-28T08:43:23.000000Z"
    },
    "statuses": [
      {
        "id": 4,
        "ticket_id": 4,
        "status": "new",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "assignees": [
      {
        "id": 5,
        "ticket_id": 4,
        "user_id": 3,
        "active": false,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ]
  },
  {
    "id": 5,
    "user_id": 2,
    "created_at": "2025-04-28T08:43:24.000000Z",
    "updated_at": "2025-04-28T08:43:24.000000Z",
    "currentStatus": "awaiting",
    "currentAssignee": null,
    "messages": [
      {
        "id": 12,
        "ticket_id": 5,
        "user_id": 2,
        "title": "Prof.",
        "message": "Quisquam quisquam veritatis reiciendis ex amet ut a itaque. Et quasi laboriosam tenetur ullam vitae. Sed perferendis ut quod. Ut velit occaecati accusamus aut aut sunt tempora.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 13,
        "ticket_id": 5,
        "user_id": 2,
        "title": "Prof.",
        "message": "Quia maxime reprehenderit sed a. Quo voluptatem eaque quia explicabo. Veritatis beatae fugit aut dolor praesentium aut recusandae. Nihil vero impedit consequatur inventore ex quisquam.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 14,
        "ticket_id": 5,
        "user_id": 2,
        "title": "Prof.",
        "message": "Est provident laboriosam libero voluptas illum. Dicta quo magni qui expedita. Culpa ut laudantium veritatis veniam facilis quidem totam.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 15,
        "ticket_id": 5,
        "user_id": 2,
        "title": "Prof.",
        "message": "Et in aut sed sequi architecto. Aut incidunt veniam in rerum. Deserunt praesentium impedit iusto iure saepe ea. Quia est aut et est.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 16,
        "ticket_id": 5,
        "user_id": 2,
        "title": "Dr.",
        "message": "Quo blanditiis esse qui quae. Ipsa veniam quidem cupiditate non. A atque sed sit dolorem. Ut officia consequuntur iste fuga aut possimus illo eligendi.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "user": {
      "id": 2,
      "first": "Theo",
      "last": "Goldner",
      "email": "meda86@example.net",
      "email_verified_at": "2025-04-28T08:43:23.000000Z",
      "created_at": "2025-04-28T08:43:23.000000Z",
      "updated_at": "2025-04-28T08:43:23.000000Z"
    },
    "statuses": [
      {
        "id": 5,
        "ticket_id": 5,
        "status": "awaiting",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "assignees": [
      {
        "id": 6,
        "ticket_id": 5,
        "user_id": 9,
        "active": false,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 7,
        "ticket_id": 5,
        "user_id": 9,
        "active": false,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ]
  },
  {
    "id": 6,
    "user_id": 6,
    "created_at": "2025-04-28T08:43:24.000000Z",
    "updated_at": "2025-04-28T08:43:24.000000Z",
    "currentStatus": "awaiting",
    "currentAssignee": {
      "id": 9,
      "ticket_id": 6,
      "user_id": 8,
      "active": true,
      "created_at": "2025-04-28T08:43:24.000000Z",
      "updated_at": "2025-04-28T08:43:24.000000Z"
    },
    "messages": [
      {
        "id": 17,
        "ticket_id": 6,
        "user_id": 2,
        "title": "Miss",
        "message": "Delectus dolorum et corrupti molestiae id ad et. Aliquid qui sint distinctio est aut in.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 18,
        "ticket_id": 6,
        "user_id": 2,
        "title": "Mrs.",
        "message": "Laboriosam expedita libero et iste pariatur aut hic. Quisquam ut aut molestiae dolor aperiam rem expedita. Incidunt sequi occaecati et sed.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 19,
        "ticket_id": 6,
        "user_id": 2,
        "title": "Miss",
        "message": "Alias nobis natus necessitatibus illum tenetur. Libero beatae nesciunt et rerum ratione. Perferendis nobis in ut vel asperiores. Nobis sed repellendus eligendi eum dolores aut voluptatem et.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 20,
        "ticket_id": 6,
        "user_id": 2,
        "title": "Mrs.",
        "message": "Veritatis dolor sunt vel deleniti consequatur exercitationem assumenda. Debitis beatae rerum sit non ratione. Sequi earum earum quia alias et.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "user": {
      "id": 6,
      "first": "Keaton",
      "last": "Batz",
      "email": "missouri.lowe@example.net",
      "email_verified_at": "2025-04-28T08:43:23.000000Z",
      "created_at": "2025-04-28T08:43:23.000000Z",
      "updated_at": "2025-04-28T08:43:23.000000Z"
    },
    "statuses": [
      {
        "id": 6,
        "ticket_id": 6,
        "status": "awaiting",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "assignees": [
      {
        "id": 8,
        "ticket_id": 6,
        "user_id": 8,
        "active": false,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 9,
        "ticket_id": 6,
        "user_id": 8,
        "active": true,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 10,
        "ticket_id": 6,
        "user_id": 8,
        "active": false,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ]
  },
  {
    "id": 7,
    "user_id": 7,
    "created_at": "2025-04-28T08:43:24.000000Z",
    "updated_at": "2025-04-28T08:43:24.000000Z",
    "currentStatus": "pending",
    "currentAssignee": null,
    "messages": [
      {
        "id": 21,
        "ticket_id": 7,
        "user_id": 4,
        "title": "Miss",
        "message": "Illum consequatur ducimus enim. Nulla aspernatur incidunt aliquam repellendus ut. Consequatur quod assumenda est tempore asperiores rerum explicabo earum. Et est aperiam totam eum.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 22,
        "ticket_id": 7,
        "user_id": 4,
        "title": "Prof.",
        "message": "Nihil sit eum nihil ut. Unde repudiandae et omnis. Quisquam nam sequi dolores repellat dolores pariatur.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 23,
        "ticket_id": 7,
        "user_id": 4,
        "title": "Ms.",
        "message": "Optio hic esse et nulla. Ratione ex dicta dicta omnis fugiat corrupti. Aperiam qui et quia.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 24,
        "ticket_id": 7,
        "user_id": 4,
        "title": "Dr.",
        "message": "Corrupti deserunt quae et laborum et. Qui eum impedit sapiente eaque qui dolor. Maiores porro nostrum alias vel odio voluptate aut facilis.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 25,
        "ticket_id": 7,
        "user_id": 4,
        "title": "Prof.",
        "message": "Facilis quae ducimus sequi odio sed nemo. Expedita harum non sed qui voluptatem vel consectetur.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "user": {
      "id": 7,
      "first": "Bridie",
      "last": "Hartmann",
      "email": "albina11@example.org",
      "email_verified_at": "2025-04-28T08:43:23.000000Z",
      "created_at": "2025-04-28T08:43:23.000000Z",
      "updated_at": "2025-04-28T08:43:23.000000Z"
    },
    "statuses": [
      {
        "id": 7,
        "ticket_id": 7,
        "status": "pending",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "assignees": [
      {
        "id": 11,
        "ticket_id": 7,
        "user_id": 1,
        "active": false,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ]
  },
  {
    "id": 8,
    "user_id": 3,
    "created_at": "2025-04-28T08:43:24.000000Z",
    "updated_at": "2025-04-28T08:43:24.000000Z",
    "currentStatus": "pending",
    "currentAssignee": {
      "id": 12,
      "ticket_id": 8,
      "user_id": 3,
      "active": true,
      "created_at": "2025-04-28T08:43:24.000000Z",
      "updated_at": "2025-04-28T08:43:24.000000Z"
    },
    "messages": [
      {
        "id": 26,
        "ticket_id": 8,
        "user_id": 10,
        "title": "Ms.",
        "message": "Quo ipsum sit provident vero. Commodi iure aut assumenda praesentium. Sed maxime nemo sit voluptatem tenetur et aut. Reiciendis eveniet consequatur quam neque alias maxime laborum sunt.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 27,
        "ticket_id": 8,
        "user_id": 10,
        "title": "Miss",
        "message": "Quas voluptas dolor enim sunt voluptas voluptatum consectetur ipsa. Voluptas sit ut sit.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 28,
        "ticket_id": 8,
        "user_id": 10,
        "title": "Dr.",
        "message": "Sapiente quia sed voluptatem veniam incidunt corrupti. Dolores qui sapiente consequatur corrupti quos ea delectus. In consequuntur minus animi dolore est est.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 29,
        "ticket_id": 8,
        "user_id": 10,
        "title": "Mr.",
        "message": "Et quam earum maxime est eligendi consequatur autem. Nostrum sunt rem hic dolores perferendis cumque. Ratione labore et officiis animi et. Libero blanditiis aut illum dolores omnis.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 30,
        "ticket_id": 8,
        "user_id": 10,
        "title": "Ms.",
        "message": "Ea animi molestiae eius cupiditate illo aut doloribus. Animi quisquam ut eos accusamus molestiae dolore. Quod voluptas est ad iusto. Molestiae amet libero laudantium laboriosam.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 31,
        "ticket_id": 8,
        "user_id": 10,
        "title": "Prof.",
        "message": "Iste fuga culpa non odio repellat. Laborum aperiam dolorum sapiente deleniti. Accusantium reprehenderit atque placeat reiciendis. Qui optio nisi est aut.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "user": {
      "id": 3,
      "first": "Lyla",
      "last": "Hamill",
      "email": "ebba68@example.net",
      "email_verified_at": "2025-04-28T08:43:23.000000Z",
      "created_at": "2025-04-28T08:43:23.000000Z",
      "updated_at": "2025-04-28T08:43:23.000000Z"
    },
    "statuses": [
      {
        "id": 8,
        "ticket_id": 8,
        "status": "pending",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "assignees": [
      {
        "id": 12,
        "ticket_id": 8,
        "user_id": 3,
        "active": true,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 13,
        "ticket_id": 8,
        "user_id": 3,
        "active": false,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ]
  },
  {
    "id": 9,
    "user_id": 6,
    "created_at": "2025-04-28T08:43:24.000000Z",
    "updated_at": "2025-04-28T08:43:24.000000Z",
    "currentStatus": "expired",
    "currentAssignee": {
      "id": 14,
      "ticket_id": 9,
      "user_id": 9,
      "active": true,
      "created_at": "2025-04-28T08:43:24.000000Z",
      "updated_at": "2025-04-28T08:43:24.000000Z"
    },
    "messages": [
      {
        "id": 32,
        "ticket_id": 9,
        "user_id": 1,
        "title": "Ms.",
        "message": "Et libero facere sunt quia maiores placeat fuga. Illum reprehenderit inventore est incidunt mollitia nihil fugiat. Qui culpa odio consequuntur in temporibus id cum laudantium.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 33,
        "ticket_id": 9,
        "user_id": 1,
        "title": "Miss",
        "message": "Saepe eum sunt suscipit qui. Ex sequi hic eius eos. Illo velit dolorem expedita numquam.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 34,
        "ticket_id": 9,
        "user_id": 1,
        "title": "Mr.",
        "message": "Sed non sapiente voluptatem quasi quaerat tenetur officiis doloremque. Sint qui molestiae non repudiandae.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 35,
        "ticket_id": 9,
        "user_id": 1,
        "title": "Prof.",
        "message": "Consequatur voluptas sunt quam sunt ea accusamus temporibus. Saepe facilis nostrum aut et et. Et amet officia facere libero ex. Ut molestias atque cum rerum ex.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 36,
        "ticket_id": 9,
        "user_id": 1,
        "title": "Mr.",
        "message": "Voluptas ipsum molestias dignissimos consectetur quam. Asperiores expedita id ipsam vel quas error. Qui et sit similique minus dignissimos quia ducimus ut.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 37,
        "ticket_id": 9,
        "user_id": 1,
        "title": "Mr.",
        "message": "Ducimus porro incidunt doloribus aspernatur. Unde esse occaecati a eligendi.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "user": {
      "id": 6,
      "first": "Keaton",
      "last": "Batz",
      "email": "missouri.lowe@example.net",
      "email_verified_at": "2025-04-28T08:43:23.000000Z",
      "created_at": "2025-04-28T08:43:23.000000Z",
      "updated_at": "2025-04-28T08:43:23.000000Z"
    },
    "statuses": [
      {
        "id": 9,
        "ticket_id": 9,
        "status": "expired",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "assignees": [
      {
        "id": 14,
        "ticket_id": 9,
        "user_id": 9,
        "active": true,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ]
  },
  {
    "id": 10,
    "user_id": 1,
    "created_at": "2025-04-28T08:43:24.000000Z",
    "updated_at": "2025-04-28T08:43:24.000000Z",
    "currentStatus": "resolved",
    "currentAssignee": {
      "id": 15,
      "ticket_id": 10,
      "user_id": 2,
      "active": true,
      "created_at": "2025-04-28T08:43:24.000000Z",
      "updated_at": "2025-04-28T08:43:24.000000Z"
    },
    "messages": [
      {
        "id": 38,
        "ticket_id": 10,
        "user_id": 5,
        "title": "Dr.",
        "message": "Possimus saepe fugiat aliquid quas. Nulla quibusdam vel fugit commodi. Ratione sit culpa in omnis perferendis omnis itaque. Rem laborum dolores est quia velit.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 39,
        "ticket_id": 10,
        "user_id": 5,
        "title": "Dr.",
        "message": "Consequatur voluptate sint facilis veritatis. Sint enim tempore aut at et nobis autem. Unde occaecati perferendis quia.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 40,
        "ticket_id": 10,
        "user_id": 5,
        "title": "Mr.",
        "message": "Saepe illo excepturi rerum et culpa porro ut. Qui non tempore mollitia dignissimos necessitatibus. Qui modi quo suscipit voluptatem aut.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 41,
        "ticket_id": 10,
        "user_id": 5,
        "title": "Miss",
        "message": "Enim maiores voluptatem tempore incidunt aut. Est eaque nihil quia error repellendus ut ex. Beatae earum repellat explicabo alias magnam.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 42,
        "ticket_id": 10,
        "user_id": 5,
        "title": "Miss",
        "message": "Quaerat nobis totam excepturi dolor et doloribus quas. Explicabo qui enim repellendus.",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "user": {
      "id": 1,
      "first": "Robert",
      "last": "Thiel",
      "email": "dlynch@example.com",
      "email_verified_at": "2025-04-28T08:43:22.000000Z",
      "created_at": "2025-04-28T08:43:23.000000Z",
      "updated_at": "2025-04-28T08:43:23.000000Z"
    },
    "statuses": [
      {
        "id": 10,
        "ticket_id": 10,
        "status": "resolved",
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ],
    "assignees": [
      {
        "id": 15,
        "ticket_id": 10,
        "user_id": 2,
        "active": true,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      },
      {
        "id": 16,
        "ticket_id": 10,
        "user_id": 2,
        "active": true,
        "created_at": "2025-04-28T08:43:24.000000Z",
        "updated_at": "2025-04-28T08:43:24.000000Z"
      }
    ]
  }
]
```
#### Get - '/id' - 
#### POST - '' - 
#### PATCH - '/id' - 
#### DELETE - '/id' -
