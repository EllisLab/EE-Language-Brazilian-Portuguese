<?php

//---------------------------------------------------
//	Aviso ao Admin sobre Nova Publicação
//--------------------------------------------------

if ( ! function_exists('admin_notify_entry_title'))
{
	function admin_notify_entry_title()
	{
return <<<EOF
Foi postada uma nova publicação no canal
EOF;
	}
}

if ( ! function_exists('admin_notify_entry'))
{
	function admin_notify_entry()
	{
return <<<EOF
Uma nova publicação foi postada no seguinte canal:
{channel_name}

O título da publicação é:
{entry_title}

Publicado por: {name}
E-mail: {email}

Para ler a publicação por favor visite:
{entry_url}

EOF;
	}
}



//---------------------------------------------------
//	Avisos ao Admin sobre Registros de Novos Membros
//--------------------------------------------------

if ( ! function_exists('admin_notify_reg_title'))
{
	function admin_notify_reg_title()
	{
return <<<EOF
Aviso de novo registro de membro
EOF;
	}
}

if ( ! function_exists('admin_notify_reg'))
{
	function admin_notify_reg()
	{
return <<<EOF
Novo registro no site: {site_name}

Nome de tela: {name}
Nome de Usuário: {username}
E-mail: {email}

URL do seu painel de controle: {control_panel_url}
EOF;
	}
}



//---------------------------------------------------
//	Aviso ao Admin sobre Novo Comentário
//--------------------------------------------------

if ( ! function_exists('admin_notify_comment_title'))
{
	function admin_notify_comment_title()
	{
return <<<EOF
Você recebeu um comentário
EOF;
	}
}

if ( ! function_exists('admin_notify_comment'))
{
	function admin_notify_comment()
	{
return <<<EOF
Você recebeu um comentário no seguinte canal:
{channel_name}

O título da publicação é:
{entry_title}

Localizada em:
{comment_url}

Postada por: {name}
E-mail: {email}
URL: {url}
Local: {location}

{comment}
EOF;
	}
}



//---------------------------------------------------
//	Instruções de Ativação da Conta de Membro
//--------------------------------------------------

if ( ! function_exists('mbr_activation_instructions_title'))
{
	function mbr_activation_instructions_title()
	{
return <<<EOF
Seu código de ativação
EOF;
	}
}

if ( ! function_exists('mbr_activation_instructions'))
{
	function mbr_activation_instructions()
	{
return <<<EOF
Obrigado pelo seu registro de membro em nosso site.

Para ativar sua nova conta, por favor visite a seguinte URL:

{unwrap}{activation_url}{/unwrap}

Obrigado!

{site_name}

{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Instruções de Senha de Membro Esquecida
//--------------------------------------------------

if ( ! function_exists('forgot_password_instructions_title'))
{
	function forgot_password_instructions_title()
	{
return <<<EOF
Informações de Login
EOF;
	}
}

if ( ! function_exists('forgot_password_instructions'))
{
	function forgot_password_instructions()
	{
return <<<EOF
{name},

Para resetar sua senha, por favor vá para a seguinte página:

{reset_url}

Então efetue o login com seu nome de usuário: {username}

Se você não deseja resetar sua senha, ignore esta mensagem. Ela irá expirar em 24 horas.

{site_name}
{site_url}
EOF;
	}
}

if ( ! function_exists('password_changed_notification_title'))
{
	function password_changed_notification_title()
	{
return <<<EOF
Senha alterada
EOF;
	}
}

if ( ! function_exists('password_changed_notification'))
{
	function password_changed_notification()
	{
return <<<EOF
{name},

Sua senha foi alterada.

Se você não quis fazer esta alteração, por favor entre em contato com um administrador do site imediatamente.

{site_name}
{site_url}
EOF;
	}
}

if ( ! function_exists('email_changed_notification_title'))
{
	function email_changed_notification_title()
	{
return <<<EOF
Endereço de E-mail alterado
EOF;
	}
}

if ( ! function_exists('email_changed_notification'))
{
	function email_changed_notification()
	{
return <<<EOF
{name},

Seu endereço de e-mail foi alterado e este enedereço de e-mail não está mais associado com sua conta.

Se você não fez essa alteração, por favor entre em contato imediatamente com um administrador do site.

{site_name}
{site_url}
EOF;
	}
}

//---------------------------------------------------
//	Aviso de Validação de Membro
//--------------------------------------------------

if ( ! function_exists('validated_member_notify_title'))
{
	function validated_member_notify_title()
	{
return <<<EOF
Sua conta de membro foi ativada
EOF;
	}
}

if ( ! function_exists('validated_member_notify'))
{
	function validated_member_notify()
	{
return <<<EOF
{name},

Sua conta de membro foi ativada e está pronta para uso.

Obrigado!

{site_name}
{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Recusar Validação de Membro
//--------------------------------------------------

if ( ! function_exists('decline_member_validation_title'))
{
	function decline_member_validation_title()
	{
return <<<EOF
Seu pedido de conta de membro foi recusada
EOF;
	}
}

if ( ! function_exists('decline_member_validation'))
{
	function decline_member_validation()
	{
return <<<EOF
{name},

Desculpe, mas nossa equipe optou por não validar sua conta em nosso site.

{site_name}
{site_url}
EOF;
	}
}


//---------------------------------------------------
//	Aviso de Comentários
//--------------------------------------------------

if ( ! function_exists('comment_notification_title'))
{
	function comment_notification_title()
	{
return <<<EOF
Alguém respondeu ao seu comentário
EOF;
	}
}

if ( ! function_exists('comment_notification'))
{
	function comment_notification()
	{
return <<<EOF
{name_of_commenter} respondeu à publicação que você assinou por atualizações em:
{channel_name}

O título da publicação está em:
{entry_title}

Você pode ver o comentário na seguinte URL:
{comment_url}

{comment}

Para parar de receber avisos neste comentário, clique aqui:
{notification_removal_url}
EOF;
	}
}

//---------------------------------------------------
//	Avisos de Comentários em Aberto
//--------------------------------------------------

if ( ! function_exists('comments_opened_notification_title'))
{
	function comments_opened_notification_title()
	{
return <<<EOF
Novos comentários foram adicionados
EOF;
	}
}

if ( ! function_exists('comments_opened_notification'))
{
	function comments_opened_notification()
	{
return <<<EOF
Mais respostas foram adicionadas à publicação que você assinou por atualizações em:
{channel_name}

O título da publicação é:
{entry_title}

Você pode ver os comentários na seguinte URL:
{comment_url}

{comments}
{comment}
{/comments}

Para parar de receber avisos desta publicação, clique aqui:
{notification_removal_url}
EOF;
	}
}

//---------------------------------------------------
//	Aviso ao Admin sobre Nova Postagem no Forum
//--------------------------------------------------

if ( ! function_exists('admin_notify_forum_post_title'))
{
	function admin_notify_forum_post_title()
	{
return <<<EOF
Alguém publicou no {forum_name}
EOF;
	}
}

if ( ! function_exists('admin_notify_forum_post'))
{
	function admin_notify_forum_post()
	{
return <<<EOF
{name_of_poster} publicou uma nova postagem em {forum_name}

O título do assunto é:
{title}

A publicação poderá ser encontrada em:
{post_url}

{body}
EOF;
	}
}



//---------------------------------------------------
//	Aviso de Publicação de Usuário no Forum
//--------------------------------------------------

if ( ! function_exists('forum_post_notification_title'))
{
	function forum_post_notification_title()
	{
return <<<EOF
Alguém pubicou em {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_post_notification'))
{
	function forum_post_notification()
	{
return <<<EOF
Alguém publicou em um tópico que você assinou em:
{forum_name}

O título do tópico é:
{title}

A postagem pode ser encontrada em:
{post_url}

{body}

Para parar de receber avisos neste comentário, clique aqui:
{notification_removal_url}
EOF;
	}
}



//---------------------------------------------------
//	Aviso de Mensagem Privada
//--------------------------------------------------

if ( ! function_exists('private_message_notification_title'))
{
	function private_message_notification_title()
	{
return <<<EOF
Alguém enviou para você uma Mensagem Privada
EOF;
	}
}

if ( ! function_exists('private_message_notification'))
{
	function private_message_notification()
	{
return <<<EOF

{recipient_name},

{sender_name} enviou para você uma Mensagem Privada entitulada ‘{message_subject}’.

Você poderá visualizar essa mensagem, efetuando seu login e checando sua caixa de mensagens em:
{site_url}

Conteúdo:

{message_content}

Para parar de receber avisos de Mensagens Privadas, desative esta opção em suas Configurações de E-mail.

{site_name}
{site_url}
EOF;
	}
}



/* -------------------------------------
/*  Aviso de Caixa de Mensagens Cheia
/* -------------------------------------*/
if ( ! function_exists('pm_inbox_full_title'))
{
	function pm_inbox_full_title()
	{
return <<<EOF
Sua caixa de mensagens está cheia
EOF;
	}
}

if ( ! function_exists('pm_inbox_full'))
{
	function pm_inbox_full()
	{
return <<<EOF
{recipient_name},

{sender_name} tentou enviar para você uma mensagem privada,
mas sua caixa de mensagens está cheia, excedendo o máximo de {pm_storage_limit}.

Por favor efetue seu login e remove as mensagens indesejadas da sua caixa de entrada em:
{site_url}
EOF;
	}
}



/* -------------------------------------
/*  Aviso de Notificação de Tópico no Forum
/* -------------------------------------*/
if ( ! function_exists('forum_moderation_notification_title'))
{
	function forum_moderation_notification_title()
	{
return <<<EOF
Aviso de Moderação em {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_moderation_notification'))
{
	function forum_moderation_notification()
	{
return <<<EOF
{name_of_recipient}, um moderador efetuou {moderation_action} no seu tópico.

O título do tópico é:
{title}

O tópico pode ser visto em:
{thread_url}
EOF;
	}
}



/* -------------------------------------
/*  Aviso de Denúncia de Post no Forum
/* -------------------------------------*/
if ( ! function_exists('forum_report_notification_title'))
{
	function forum_report_notification_title()
	{
return <<<EOF
Postagem dennunciada em {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_report_notification'))
{
	function forum_report_notification()
	{
return <<<EOF
{reporter_name} denunciou uma postagem publicada por {author} em:
{forum_name}

Razão da Denúncia:
{reasons}

Notas adicionais de {reporter_name}:
{notes}

A postagem pode ser localizada em:
{post_url}

Conteúdo da postagem denunciada:
{body}
EOF;
	}
}



/* -------------------------------------
//  Página de SISTEMA OFFLINE
/* -------------------------------------*/
if ( ! function_exists('offline_template'))
{
	function offline_template()
	{
return <<<EOF
<html>
<head>

<title>Sistema Offline</title>

<style type="text/css">

body {
background-color:	#ffffff;
margin:				50px;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
letter-spacing:		.09em;
text-decoration:	none;
color:			  #330099;
background-color:	transparent;
}

a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:	underline;
background-color:	transparent;
}

#content  {
border:				#999999 1px solid;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}
</style>

</head>

<body>

<div id="content">

<h1>Sistema Offline</h1>

<p>Este site está offline no momento. Por favor retorne em breve</p>

</div>

</body>

</html>
EOF;
	}
}



/* -------------------------------------
//  Template de Mensagens do Usuário
/* -------------------------------------*/
if ( ! function_exists('message_template'))
{
	function message_template()
	{
return <<<EOF
<html>
<head>

<title>{title}</title>

<meta http-equiv='content-type' content='text/html; charset={charset}' />

{meta_refresh}

<style type="text/css">

body {
background-color:	#ffffff;
margin:				50px;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
letter-spacing:		.09em;
text-decoration:	none;
color:			  #330099;
background-color:	transparent;
}

a:visited {
color:				#330099;
background-color:	transparent;
}

a:active {
color:				#ccc;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:	underline;
background-color:	transparent;
}

#content  {
border:				#000 1px solid;
background-color: 	#DEDFE3;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}

ul {
margin-bottom: 		16px;
}

li {
list-style:			square;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		8px;
margin-bottom: 		8px;
color: 				#000;
}

</style>

</head>

<body>

<div id="content">

<h1>{heading}</h1>

{content}

<p>{link}</p>

</div>

</body>

</html>
EOF;
	}
}

// EOF
