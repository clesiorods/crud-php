
# CRUD-PHP
Repositório destinado a armazenar o código fonte de CRUD feito em php, com
utilização de Laravel para comunicação com o banco de dados.


# CONFIGURAÇÃO DE ACESSO AO BANCO DE DADOS
    -> Tipo = "mysql";
    -> Host = "localhost";
    -> Nome do banco = "crud-vagas";
    -> Charset = "utf8";
    -> User = "root";
    -> Password = "";


# CONFIGURAÇÃO DAS TABELAS DO BANCO
    -> Nome do banco:       crud-vagas;
    -> Charset:             utf8_general_ci;
    -> Nome da tabela:      vaga;
    -> Número de Colunas:   7;

    -> Configuração das Colunas {

            Nome            Tipo         Tamanho/Valor     Ínice           A.I.

            id              INT          \\                PRIMARY         checked
            funcao          VARCHAR      100               \\              \\
            empresa         VARCHAR      100               \\              \\
            descricao       TEXT         510               \\              \\
            salario         INT          \\                \\              \\
            ativo           ENUM         's','n'           \\              \\
            data            TIMESTAMP    \\                \\              \\

            *Campos não informados ou assinalados "\\" não decessitam ser alterados
        }
