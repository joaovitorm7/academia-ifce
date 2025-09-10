sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant DashboardController as DashboardController
    participant Academia as Academia
    participant DB as Database
    
    C->>R: GET /resource
    R->>+DashboardController: index()
    DashboardController->>+Academia: all() / get() / paginate()
    Academia->>+DB: SELECT * FROM table
    DB-->>-Academia: Return records
    Academia-->>-DashboardController: Collection of models
    DashboardController-->>-R: Return JSON response
    R-->>C: 200 OK with data
    
    Note over DashboardController,Academia: This sequence retrieves a list of resources
  