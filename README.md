# 🗳️ Urna Paulistão

Sistema web desenvolvido em PHP que simula o funcionamento de uma urna eletrônica para fins educacionais.  
O projeto utiliza a arquitetura **MVC (Model-View-Controller)** para organização e separação de responsabilidades.

---

## 📌 Sobre o Projeto

O **Urna Paulist-o** é uma aplicação que simula um sistema de votação eletrônica, permitindo:

- Cadastro de candidatos
- Registro de votos
- Contabilização automática
- Exibição de resultados
- Organização do código em padrão MVC

O objetivo principal é estudo e prática de desenvolvimento web com PHP estruturado.

---

## 🛠️ Tecnologias Utilizadas

- PHP
- HTML5
- CSS3
- Arquitetura MVC
- Servidor Apache (ou similar)
- MySQL (caso esteja configurado com banco de dados)

---

## 📂 Estrutura do Projeto

```
urna_paulist-o/
│
├── assets/          # Arquivos estáticos (CSS, JS, imagens)
├── config/          # Configurações da aplicação
├── controllers/     # Controladores (regras de negócio)
├── models/          # Modelos de dados
├── views/           # Interfaces do sistema
└── README.md        # Documentação do projeto
```

---

## ⚙️ Requisitos

Para rodar o projeto, você precisará de:

- PHP 7.4 ou superior
- Servidor Apache ou Nginx
- MySQL (se houver banco de dados configurado)
- XAMPP, WAMP, MAMP ou ambiente LAMP

---

## 🚀 Como Executar o Projeto

### 1️⃣ Clone o repositório

```bash
git clone https://github.com/AndreCrisp/urna_paulist-o.git
```

### 2️⃣ Acesse a pasta do projeto

```bash
cd urna_paulist-o
```

### 3️⃣ Configure o servidor

Coloque a pasta do projeto dentro do diretório:

- **XAMPP:** `htdocs`
- **WAMP:** `www`
- **LAMP:** `/var/www/html`

### 4️⃣ Configure o banco de dados (se necessário)

- Crie um banco no MySQL
- Configure as credenciais no diretório `config/`
- Importe o arquivo `.sql` se existir

### 5️⃣ Execute no navegador

```
http://localhost/urna_paulist-o
```

---

## 🧠 Funcionamento

O sistema segue o padrão MVC:

- **Model:** Responsável pelos dados e acesso ao banco
- **View:** Interface exibida ao usuário
- **Controller:** Faz a comunicação entre Model e View

Fluxo básico:

1. Usuário acessa a tela de votação
2. Seleciona o candidato
3. Confirma o voto
4. Sistema registra e contabiliza
5. Resultados podem ser exibidos posteriormente

---

## 📈 Possíveis Melhorias

- Autenticação de eleitores
- Controle para impedir votos duplicados
- Painel administrativo
- Gráficos de resultado
- Deploy online

---

## 🤝 Contribuição

1. Faça um fork do projeto
2. Crie uma branch:

```bash
git checkout -b feature/nova-funcionalidade
```

3. Faça commit das alterações:

```bash
git commit -m "Adiciona nova funcionalidade"
```

4. Faça push:

```bash
git push origin feature/nova-funcionalidade
```

5. Abra um Pull Request

---

## 📜 Licença

Este projeto é destinado a fins educacionais.  
Você pode adicionar uma licença como MIT se desejar tornar o projeto público oficialmente.

---

## 👨‍💻 Autor

**André Crisp**

Projeto desenvolvido para fins de estudo e prática em desenvolvimento web com PHP.
