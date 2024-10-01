# Desenvolvimento de Página Web e Cadastro de Usuários

Este projeto tem como objetivo criar uma página web em HTML para uma parte do software, utilizando HTML semântico e CSS para estilização. A página incluirá um layout que contempla um cabeçalho, conteúdo principal e rodapé. Além disso, será implementado um formulário para cadastro de usuários que armazena os dados em um banco de dados utilizando PHP e Docker.

# Tecnologias Utilizadas

- **Docker**: Para gerenciar o ambiente de desenvolvimento e os contêineres do banco de dados.
- **PHP**: Para a lógica de backend e manipulação do banco de dados.
- **HTML**: Para a estruturação do conteúdo da página web.
- **CSS**: Para a estilização da página web.
- **MySQL**: Para o gerenciamento do banco de dados que armazenará as informações dos usuários.

# Suporte a Sistemas Operacionais

Este projeto foi desenvolvido para ser executado em sistemas Linux. Se você não possui um ambiente Linux, recomenda-se utilizar o **Windows Subsystem for Linux (WSL)**. A seguir, você encontrará um guia para instalar o WSL em seu sistema Windows.

## Tutorial: Instalando o WSL no Windows

1. **Verifique os requisitos do sistema**
    - Você deve ter uma versão do Windows 10 ou superior.

2. **Ativar o WSL**
    - Abra o **PowerShell** como administrador. Você pode fazer isso pesquisando "PowerShell" no menu Iniciar, clicando com o botão direito e selecionando "Executar como administrador".
    - Execute o seguinte comando para ativar o WSL:

        ```bash
        wsl --install
        ```

    - Este comando instalará o WSL e a distribuição padrão do Linux (geralmente Ubuntu).

# Comandos Necessários

`Em caso de erro para rodar o MySQL`<br>
Para permitir que o sistema operacional execute o script de inicialização do banco de dados, utilize o seguinte comando:

```bash
chmod 644 ./sql/init.sql
```

Para iniciar os contêineres do Docker, execute:
```bash
docker compose up -d
```

Para parar os contêineres em execução, use:
```bash
docker compose stop
```

Para acessar o banco de dados MySQL em execução no contêiner, utilize o seguinte comando:
```bash
docker exec -it db_container mysql -u root -p
//password on docker-compose: root_password
```

Depois de acessar o MySQL, você pode executar os seguintes comandos para verificar as bases de dados, utilizar a base de dados criada, exibir as tabelas e consultar os dados:

```bash
SHOW DATABASES;
USE meu_banco;
SHOW TABLES;
DESCRIBE usuarios;
SELECT * FROM usuarios;
```


