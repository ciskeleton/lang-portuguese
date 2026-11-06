<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Atualizações do sistema disponíveis';
$lang['emails_updates_available_message'] = <<<EOT
Olá,

Foram detetadas novas atualizações do sistema para {site_anchor}.

Estas atualizações podem incluir correções de segurança, melhorias de desempenho ou novas funcionalidades.
Recomendamos que as analise o mais rapidamente possível.

Pode rever e gerir as atualizações disponíveis no painel de administração:
{link}

Se já revisou ou aplicou as atualizações, não é necessária nenhuma ação adicional.

Esta é uma mensagem automática do sistema enviada por {site_name}.
Não responda a este e-mail.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Ativação da conta';
$lang['emails_account_activation_request_message'] = <<<EOT
Olá {name},

Obrigado por se registar no {site_anchor}. A sua conta foi criada e deve ser ativada antes de a poder utilizar.

Para ativar a sua conta, clique no seguinte link ou copie e cole no seu browser:
{link}

Atenciosamente,
-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Novo link de ativação';
$lang['emails_account_activation_resend_message'] = <<<EOT
Olá {name},

Recentemente, solicitou um novo link de ativação no {site_anchor} porque a sua conta não estava ativa.
Para ativar a sua conta, clique no seguinte link ou copie e cole no seu browser:
{link}

Se não o tiver solicitado, nenhuma ação adicional é necessária.

Esta ação foi solicitada a partir do endereço IP: {ip_link}.

Atenciosamente,
-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Conta ativada';
$lang['emails_account_activation_success_message'] = <<<EOT
Olá {name},

A sua conta no {site_anchor} foi ativada com sucesso. Agora pode <a href="{login_url}" target="_blank" rel="noopener">iniciar sessão</a> a qualquer momento.

Esperamos que aproveite a sua estadia. Aceite os nossos cumprimentos.

Atenciosamente,
-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Conta aguardando aprovação';
$lang['emails_account_approval_pending_message'] = <<<EOT
Olá {name},

Obrigado por se juntar a nós no {site_anchor}. A sua conta foi criada, mas necessita de aprovação de um administrador do site antes de ser ativada.
Pedimos sinceras desculpas por este passo crucial, mas é apenas para fins de segurança.

Receberá um e-mail de confirmação assim que a sua conta for aprovada.

Esperamos que desfrute da sua estadia, por favor aceite os nossos melhores cumprimentos.

-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Conta aprovada';
$lang['emails_account_approval_success_message'] = <<<EOT
Olá {name},

Boas notícias! A tua conta em {site_anchor} foi aprovada.

Agora já podes iniciar sessão e começar a utilizar a tua conta:
{link}

Estamos felizes por teres-te juntado a nós.

-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Conta restaurada';
$lang['emails_account_restored_message'] = <<<EOT
Olá {name},

Este e-mail confirma que a sua conta no {site_anchor} foi restaurada com sucesso.

Seja bem-vindo de volta, esperamos que desta vez aproveite a sua estadia.

Atenciosamente,
-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Bem-vindo ao {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Olá {name},

A maioria das pessoas tem sequências de e-mails de boas-vindas muito longas após o registo nos seus sites.

Boas notícias: não somos como a maioria das pessoas. Mas, ainda assim, queremos dar-lhe as boas-vindas e agradecer-lhe por se juntar a nós no {site_anchor}.

Esperamos que desfrute da sua estadia, aceite os nossos sinceros cumprimentos.

-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Solicitação de alteração de e-mail';
$lang['emails_email_change_request_message'] = <<<EOT
Olá {name},

Está a receber este e-mail porque recebemos um pedido de alteração de e-mail para a sua conta no {site_anchor}.

Clique no seguinte link ou copie e cole no seu browser se desejar prosseguir:
{link}

Se não tiver solicitado a alteração de e-mail, não é necessária qualquer ação adicional.

Esta ação foi solicitada a partir do endereço IP: {ip_link}.

Atenciosamente,
-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Endereço de e-mail alterado';
$lang['emails_email_change_success_message'] = <<<EOT
Olá {name},

Este e-mail confirma que o endereço de e-mail utilizado no {site_anchor} foi alterado com sucesso.

Se não realizou esta ação, por favor contacte-nos o mais rapidamente possível para resolver este problema.

Esta ação foi realizada a partir do endereço IP: {ip_link}.

Atenciosamente,
-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Alerta de falha no login';
$lang['emails_login_alert_failure_message'] = <<<EOT
Olá {name},

Alguém tentou recentemente usar passwords erradas para aceder à sua conta {site_name}.

Data do servidor: {date}
Dispositivo: {browser}, {platform}
Endereço IP: {ip_link}

Se não foi você, não se preocupe, a tentativa de login não foi bem-sucedida.

Se foi você e não se recorda da palavra-passe, clique no link abaixo para a repor:
{reset_link}

Se estiver com dificuldades em aceder à sua conta, entre em contacto com a nossa equipa ou solicite um link de login direto.

-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Notificação de login bem-sucedido';
$lang['emails_login_alert_success_message'] = <<<EOT
Olá {name},

Enviámos este e-mail após ter efetuado o login com sucesso na sua conta {site_name}.

Data do servidor: {date}
Dispositivo: {browser}, {platform}
Endereço IP: {ip_link}

Se foi você quem fez o login, pode ignorar este e-mail em segurança.

Se não tiver feito o login, altere a sua palavra-passe imediatamente para proteger a sua conta.

Para qualquer assistência, contacte a nossa equipa de suporte.

-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Link de login rápido';
$lang['emails_login_magic_link_message'] = <<<EOT
Olá {name},

Você solicitou um login com um clique na sua conta em {site_anchor}.

Clique no link abaixo ou cole-o no navegador para fazer login instantaneamente:
{link}

Este link expirará em 15 minutos. Se não foi você quem solicitou, ignore este e-mail.

Esta ação foi solicitada a partir do seguinte endereço IP: {ip_link}.

Atenciosamente,
-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Autenticação de dois fatores';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Olá {name},

O seu código de autenticação de dois fatores é: <strong>{code}</strong>

Pode desativar a autenticação de dois fatores a qualquer momento nas definições da sua conta.

Esta ação foi realizada a partir do seguinte endereço IP: {ip_link}.

Atenciosamente,
-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Solicitação de redefinição de senha';
$lang['emails_password_change_request_message'] = <<<EOT
Olá {name},

Está a receber este e-mail porque recebemos um pedido de redefinição de palavra-passe para a sua conta no {site_anchor}.

Clique no seguinte link ou copie e cole no seu browser se pretende prosseguir:
{link}

Se não tiver solicitado a redefinição da palavra-passe, não é necessária qualquer ação adicional.

Esta ação foi solicitada a partir do seguinte endereço IP: {ip_link}.

Atenciosamente,
-- Equipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Senha alterada com sucesso';
$lang['emails_password_change_success_message'] = <<<EOT
Olá {name},

Este e-mail confirma que a sua palavra-passe no {site_anchor} foi alterada com sucesso. Agora pode <a href="{login_url}" target="_blank" rel="noopener">iniciar sessão</a> utilizando a nova palavra-passe.

Se não realizou esta ação, por favor contacte-nos o mais rapidamente possível para resolver esta questão.

Esta ação foi realizada a partir do seguinte endereço IP: {ip_link}.

Atenciosamente,
-- Equipa {site_name}.
EOT;
