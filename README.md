# hidratacao-insercao-em-bd-renandelmonico

- Aluno: Renan Henrique Delmonico
- E-mail: renandelmonico@gmail.com

# Objetivo
- Criar uma trait de hidratação que possa ser usada em qualquer classe
- Demonstrar o uso dessa trait salvando um objeto usuario e um objeto produto na base de dados. Isso significa que o seu trabalho final deverá ter 2 classes (Usuario e Produto) e uma Trait.

# Instalação

- Faça o clone do repositório.
- Faça o composer install.
- Crie na raiz do projeto um arquivo chamado config.json com a seguinte configuração:
```json
{
    "user": "NOME DE USUARIO DO MYSQL",
    "pass": "SENHA DO MYSQL",
    "database": "BANCO",
    "host": "HOST",
    "port": 3306
}
```