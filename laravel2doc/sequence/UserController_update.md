sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant UserController as UserController
    participant V as Validator
    participant User as User
    participant DB as Database
    
    C->>R: PUT /resource/{id}
    R->>+UserController: update(request, id)
    UserController->>+V: validate(request)
    V-->>-UserController: validated data
    UserController->>+User: find(id)
    User->>+DB: SELECT * FROM table WHERE id = ?
    DB-->>-User: Return record
    User-->>-UserController: Model instance
    UserController->>+User: update(data)
    User->>+DB: UPDATE table SET ... WHERE id = ?
    DB-->>-User: Success
    User-->>-UserController: Updated model
    UserController-->>-R: Return JSON response
    R-->>C: 200 OK with data
    
    Note over UserController,User: This sequence updates an existing resource
  