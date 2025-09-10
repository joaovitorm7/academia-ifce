classDiagram
  class Academia {
    +nome
    +unidade
    +cnpj
    +email
    +telefone
    +endereco
    +descricao
    +modalidades: array
    +horario_funcionamento
    +site_url
    +instagram_url
    +logo_path
  }
  class Matricula {
    +peso
    +altura
    +circunferencia_cintura
    +circunferencia_quadril
    +nivel_atividade
    +historico_saude
    +objetivos
    +modalidade
    +horario
    +observacoes
    +termos
  }
  class User {
    +name
    +email
    +password
  }
