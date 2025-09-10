sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant MatriculaController as MatriculaController
    participant V as Validator
    participant Model as Model
    participant DB as Database
    
    C->>R: POST /resource
    R->>+MatriculaController: create(request)
    MatriculaController->>+V: validate(request)
    V-->>-MatriculaController: validated data
    MatriculaController->>+Model: create(data)
    Model->>+DB: INSERT INTO table
    DB-->>-Model: Return new record
    Model-->>-MatriculaController: New model instance
    MatriculaController-->>-R: Return JSON response
    R-->>C: 201 Created with data
    
    Note over MatriculaController,Model: This sequence creates a new resource
  