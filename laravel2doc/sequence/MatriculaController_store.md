sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant MatriculaController as MatriculaController
    participant V as Validator
    participant Matricula as Matricula
    participant DB as Database
    
    C->>R: POST /resource
    R->>+MatriculaController: store(request)
    MatriculaController->>+V: validate(request)
    V-->>-MatriculaController: validated data
    MatriculaController->>+Matricula: create(data)
    Matricula->>+DB: INSERT INTO table
    DB-->>-Matricula: Return new record
    Matricula-->>-MatriculaController: New model instance
    MatriculaController-->>-R: Return JSON response
    R-->>C: 201 Created with data
    
    Note over MatriculaController,Matricula: This sequence creates a new resource
  