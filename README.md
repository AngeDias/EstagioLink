# 🎓 Estágio Link - Plataforma de Gestão de Estágios
<p align="center">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
</p>
<p align="center">
<b>Projeto desenvolvido durante o ensino médio técnico em Informática no IFBA</b><br> como parte da disciplina PPA (Prática Profissional Articuladora).</b>
</p>

## ✨ Visão Geral
Sistema web completo com objetivo de **simplificar o processo de estágios** no Instituto Federal da Bahia, incluindo:
- 🌐 Portal centralizado para alunos e empresas
- 📝 Cadastro de alunos e empresas
- 🔍 Busca de oportunidades de estágio
- 📊 Acompanhamento institucional
## 🖼️ Telas do Sistema
Telas Principais
<p align="center">
  <img src="IMAGENS/main-aluno-page.png" alt="Tela Principal para Alunos">
  <img src="IMAGENS/main-empresa-page.png" alt="Tela Principal para Empresas">
</p>


## ⚙️ Funcionalidades Principais
### Alunos
- Criação de currículo personalizado no perfil
- Busca inteligente de vagas por área/localização
- Sistema de avaliações: comentários e notas para empresas
- Acompanhamento de candidaturas e histórico
  
- Upload de documentos necessários

### Empresas
- Página corporativa personalizada (sobre a empresa, cultura, fotos)
- Publicação e gestão de vagas de estágio
- Visualização de avaliações e comentários de estagiários
- Ferramenta de triagem de candidatos
  
- Comunicação direta com candidatos
  
## 🔧 Instalação
### Pré-requisitos
- [XAMPP v3.3.0](https://www.apachefriends.org/download.html)
- [MySQL Workbench 8.0 CE](https://dev.mysql.com/downloads/workbench/)

### Clonando repositório:

```
git clone https://github.com/AngeDias/EstagioLink.git
```
- Selecione a pasta `htdocs` pelo segunte caminho (não renomeie o repositório):
```
C:\xampp\htdocs
```

### Importando o banco de dados:
- Execute o arquivo `EstagioLink/Bancodedados/registro_usuario.sql` no MySQL Workbench
- Edite o arquivo `EstagioLink/PHP-CONFIG/config.php` e configure as credenciais
```
$conn = new PDO ("mysql:dbname=elk;host=localhost","[USUÁRIO]","[SENHA]");
```

### Executando
- Certifique-se que o servidor Apache está ativo no programa `XAMPP`
- Acesse via navegador:
```
https://localhost/Estagiolink/main-aluno.html
```

## 📁 Estrutura do Projeto
```
EstagioLink/
├── BancodeDados/         # Scripts SQL
├── CSS/                  # Estilzação
├── HTML/                 # Páginas e templates
├── IMAGENS/              # Assets visuais
├── JS/                   # Scripts JavaScript
└── PHP-CONFIG/           # Lógica backend e configurações

```
## 🌟 Destaques
- Primeiro projeto full-stack desenvolvido em ambiente acadêmico
- Sistema de login com sessões seguras
- Design responsivo com Bootstrap
- Geração de currículos em PDF
- Documentação técnica completa

## 📚 Documentação Técnica
### [Documentação Completa](https://docs.google.com/document/d/1a4vcNzYur-u2Slm-QKxyumMkpQ3PmYiV5boSOVKmfGk/edit?usp=sharing)
O documento inclui:
- Descrição do Sistema
- Metodologia
- Levantamento de Requisitos
- Política de Privacidade
- Layout do Site
- Manual de Uso

## 🎯 Lições Aprendidas
- Desafios na integração front-end/back-end
- Gerenciamento de projeto em equipe
- Solução de problemas com bancos de dados relacionais
- Importância da documentação técnica

## 🙏 Reconhecimentos
Projeto desenvolvido pela turma 732 do IFBA, uma das primeiras turmas pós-pandemia. Agradecemos a todos os professores e colegas que contribuíram para esta difícil e encantadora jornada de aprendizado.

---
<p align="center"> Desenvolvido com 💙 por <a href="https://www.linkedin.com/in/angela-dias-55295b32b/">Angela Dias</a> e equipe<br> <sub>Curso Técnico em Informática - IFBA © 2024</sub> </p>
