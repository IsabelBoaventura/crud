# CRUD com MVC e PHP

Usando o conteudo de Thiago A. Silva, disponivel em: https://www.youtube.com/watch?v=7_eSjWJS_bg


## Estrutura

Pastas:
 * BancoDeDados
 * App
   * Controller
   * DAO
   * Model
   * View


Programas:
* VSCode
* Mysql

Banco de Dados 

* base_de_teste
* Tabela: aniversariantes ( reutilizando );

### Teste 

Teste para verificar se o PHP  esta trabalhando corretamente no sitema.

Dentro do VS Code,  abra o terminal e digite o comando:

    `php -S localhost:8080`

Clique em enter , e no terminal deve aparecer a resposta do PHP, no nosso caso: 

    `[Sun May 21 09:57:10 2023] PHP 7.4.19 Development Server (http://localhost:8080) started`


Se clicar ao mesmo tempo em `CTRL` + `click` no endereço mostrado acima, irá abrir o navegador com o index do nosso aplicativo rodando. 
Não mostrará nada, pois nao criamos nada ainda no index.php.

Entretanto, no meu caso, para aparecer algo tem de ser usado o seguinte caminho:  `http://localhost/crud/ThiagoA.Silva/App/`


Como estamos trabalhando com o PHP 7.4.19 o sistema não fica limitado a um lugar fisico no pc, assim podemos trocar a pasta para o local que quisermos e o sistema ainda funcionará. 

Novo local escolhido: `D:\documentos\Praticando\CRUD\ThiagoA.Silva` ;

## Tabela do Banco de Dados 

Criando a tabela pessoa:




CREATE TABLE `pessoa` (
	`Id` INT(11) NOT NULL AUTO_INCREMENT Primary key,
	`Nome` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`CPF` VARCHAR(20) NOT NULL Unique Key COLLATE 'latin1_swedish_ci',
	`Data_Nasc` DATE NOT NULL
)
COLLATE='latin1_swedish_ci'; 



INSERT INTO pessoa (Nome, CPF, Data_Nasc) values 
('teste 1', '001845792468','2023-12-15');
















