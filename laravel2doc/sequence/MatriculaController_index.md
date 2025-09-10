sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant MatriculaController as MatriculaController
    participant Matricula as Matricula
    participant DB as Database
    
    C->>R: GET /resource
    R->>+MatriculaController: index()
    MatriculaController->>+Matricula: all() / get() / paginate()
    Matricula->>+DB: SELECT * FROM table
    DB-->>-Matricula: Return records
    Matricula-->>-MatriculaController: Collection of models
    MatriculaController-->>-R: Return JSON response
    R-->>C: 200 OK with data
    
    Note over MatriculaController,Matricula: This sequence retrieves a list of resources
  