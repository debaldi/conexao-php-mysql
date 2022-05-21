### Conexão em PHP com Mysql

#### Recomendo antes de tudo, rodar o xampp e dar start em Apache e MySQL. ⚠️

#### importe o arquivo listar.sql no MySql ou crie você mesmo o banco de dados.

### Criando Banco de Dados MySQL:
#### 1 - Crie um Bando de dados com o nome listar e Collation: utf8_unicode_ci. ✔️
#### 2 - Crie uma tabela com dois campos: ✔️
####      Primeiro campos com o nome id -> auto increment -> tipo int.
####      Segundo campo com o nome carros-> tamanho 50 -> tipo varchar.

### Testando os arquivos index.php e connection.php ⏳
#### O arquivo index.php é somente para mostrar o que está cadastado no banco de dados.
#### O arquivo conection.php é o arquivo que faz a conexão com BD listar e a tabela carros.
#### Crie uma pasta com o nome connection em htdocs no xampp -> C:\xampp\htdocs\connection
#### Copie os arquivos index.php e connection.php para a pasta C:\xampp\htdocs\connection

#### Abra o dashboard do phpMyAdmin e clique em connection/index.php, se estiver tudo certo vai aparecer:
#### Banco de Dados Conectado... 👍
#### Banco de Dados Selecionado... 👍
#### Nome dos carros cadastrados no Banco. 👍
