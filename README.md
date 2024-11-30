<h1>Help Desk System
</h1>

<p>Este é um sistema simples de Help Desk onde usuários podem abrir chamados para solicitar suporte. 
  O sistema é composto por uma interface de login e um formulário para registrar chamados. As informações dos chamados 
  são salvas em um arquivo de texto para posterior consulta.
</p>

<h2>Funcionalidades</h2>


<p>• <b>Login:</b> O sistema permite o login de usuários, com validação de email e senha.</p>
<p>• <b>Abertura de Chamados:</b> Usuários autenticados podem abrir chamados, preenchendo um formulário com título, categoria e descrição do problema.</p>
<p>• <b>Armazenamento em Arquivo:</b> As informações dos chamados são armazenadas em um arquivo de texto para fácil acesso.</p>
<p>• <b>Controle de Sessão:</b> O sistema utiliza sessões para garantir que apenas usuários autenticados possam acessar as páginas protegidas.</p>


<h2>Requisitos</h2>
<p>• PHP 7.0 ou superior.
</p>
<p>• Servidor web como Apache ou Nginx.
</p>
<p>• Banco de dados (opcional, caso queira escalar o projeto e substituir o armazenamento em arquivo).
</p>


<h2>Estrutura de Arquivos
</h2>
<p>A estrutura do projeto é a seguinte:</p>

```
/help-desk
|-- /assets
|   |-- logo.png
|-- /css
|   |-- style.css
|-- index.php          # Página de login
|-- home.php           # Página principal após o login
|-- abrir_chamado.php  # Página para abrir novos chamados
|-- valida_login.php   # Valida login e redireciona para home.php
|-- arquivo.hd         # Arquivo para armazenar os chamados
|-- autenticar.php     # Script que valida o login
|-- salvar_chamado.php # Script para salvar o chamado no arquivo

```


<h2>Como Funciona
</h2>
<p>1. <b>Página de Login (index.php):</b></p>
<p>• O usuário preenche o formulário com seu e-mail e senha.
</p>
<p>• O sistema valida as credenciais enviadas com as cadastradas no array de usuários. Caso o login seja bem-sucedido, o usuário é redirecionado para a página home.php.
</p>

<p>2. <b>Página de Abertura de Chamado (abrir_chamado.php):
</b></p>
<p>• Após o login, o usuário é direcionado à página onde pode abrir novos chamados.
</p>
<p>• O formulário exige que o usuário preencha o título, categoria e descrição do chamado.
</p>
<p>• As informações são enviadas para o script salvar_chamado.php, que adiciona o chamado ao arquivo arquivo.hd.
</p>


<p>3. <b>Armazenamento de Chamados:</b></p>
<p>• Os chamados são salvos no arquivo arquivo.hd em formato de texto, onde cada linha representa um chamado.
</p>
<p>• Cada chamado é composto pelos seguintes dados: ID do Usuário (que vem da sessão), Título, Categoria e Descrição.
</p>

<p>4. <b>Controle de Sessão:</b></p>
<p>• A autenticação do usuário é gerenciada através de sessões PHP. O sistema utiliza $_SESSION para garantir que somente usuários 
  autenticados possam acessar as páginas de abertura de chamados e visualização.
</p>



<h2>Instruções de Uso
</h2>

<p>1. Clone o repositório para o seu servidor local.</p>
<p>2. Certifique-se de ter o PHP instalado no seu sistema.
</p>
<p>3. Para iniciar o projeto, basta colocar os arquivos no diretório do seu servidor web e acessar o arquivo index.php pelo navegador.</p>
<p>4. No formulário de login, use as credenciais abaixo para testar:</p>

<p>• <b>Admin:
</b></p>
<p>E-mail: <code>adm@teste.com.br</code></p>
<p>Senha: <code>1234</code></p>

<p>• <b>Usuário:</b></p>
<p>E-mail: <code>jose@teste.com.br</code></p>
<p>Senha: <code>1234</code></p>

<p>5. Após o login, acesse a página de abertura de chamados e preencha o formulário para registrar um novo chamado.</p>


<h2>Melhorias Futuras
</h2>
<p>• <b>Banco de Dados:</b> Substituir o armazenamento em arquivo por um banco de dados para maior escalabilidade e segurança.</p>
<p>• <b>Validação de Dados:</b> Melhorar a validação e sanitização dos dados para evitar problemas de segurança.
</p>
<p>• <b>Interface de Usuário:</b> Melhorar o design da interface para torná-la mais amigável e responsiva.
</p>
<p>• <b>Notificações:</b> Adicionar funcionalidades de notificação por e-mail ou sistema de mensagens quando novos chamados são registrados.
</p>















