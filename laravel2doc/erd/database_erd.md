erDiagram
  academia {
    int id PK "Primary key"
    string nome
    string unidade
    string cnpj
    string email
    string telefone
    string endereco
    string descricao
    json modalidades
    string horario_funcionamento
    string site_url
    string instagram_url
    string logo_path
    datetime created_at
    datetime updated_at
  }
  matricula {
    int id PK "Primary key"
    string peso
    string altura
    string circunferencia_cintura
    string circunferencia_quadril
    string nivel_atividade
    string historico_saude
    string objetivos
    string modalidade
    string horario
    string observacoes
    string termos
    datetime created_at
    datetime updated_at
  }
  user {
    int id PK "Primary key"
    string name
    string email
    string password
    datetime created_at
    datetime updated_at
  }
