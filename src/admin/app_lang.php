<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Componentes';
$lang['admin_content'] = 'Conteúdo';
$lang['admin_database_backup'] = 'Backups da Base de Dados';
$lang['admin_extensions'] = 'Extensões.';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Ajuda';
$lang['admin_languages'] = 'Idiomas';
$lang['admin_logs'] = 'Registos do Sistema';
$lang['admin_media'] = 'Biblioteca de Mídia';
$lang['admin_modules'] = 'Módulos';
$lang['admin_plugins'] = 'Plugins';
$lang['admin_reports'] = 'Registo de atividades';
$lang['admin_settings'] = 'Definições do Sistema';
$lang['admin_sysinfo'] = 'Informações do Sistema';
$lang['admin_system'] = 'Sistema';
$lang['admin_system_firewall'] = 'Firewall do sistema';
$lang['admin_themes'] = 'Temas';
$lang['admin_updates'] = 'Atualizações do Sistema';
$lang['admin_users'] = 'Usuários';
$lang['admin_view_site'] = 'Ver site';
$lang['per_page'] = 'Por Página';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Obrigado por criar com <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Nenhum item ativo.} other{<b>#</b> de <b>%s</b> itens estão ativos.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Instalar';
$lang['admin_install_error'] = 'Falha ao instalar o pacote.';
$lang['admin_install_error_com'] = 'A instalação falhou: %s';
$lang['admin_install_location_app'] = 'Apenas esta aplicação';
$lang['admin_install_location_core'] = 'Todas as aplicações';
$lang['admin_install_location_select'] = '&#151; Selecionar localização &#151;';
$lang['admin_install_success'] = 'Pacote instalado com sucesso.';
$lang['admin_install_upload'] = 'Carregar';
$lang['admin_install_upload_error'] = 'Falha ao carregar o pacote.';
$lang['admin_install_upload_success'] = 'Pacote carregado com sucesso.';
$lang['admin_install_upload_tip'] = 'Instale um pacote carregando aqui o respetivo ficheiro <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Não foi possível limpar os ficheiros antigos de cópia de segurança.';
$lang['admin_database_backup_clean_success'] = '%d ficheiros de cópia de segurança eliminados. %d espaço em disco libertado.';
$lang['admin_database_backup_create'] = 'Criar Backup';
$lang['admin_database_backup_create_confirm'] = 'Tem a certeza de que pretende criar um backup agora?';
$lang['admin_database_backup_create_error'] = 'Não foi possível criar o ficheiro de cópia de segurança. Certifique-se de que a pasta <b>%s</b> tem permissão de escrita.';
$lang['admin_database_backup_create_success'] = 'Ficheiro de cópia de segurança da base de dados <b>%s</b> criado com sucesso.';
$lang['admin_database_backup_delete_confirm'] = 'Tem a certeza de que pretende eliminar esses ficheiros de backup?';
$lang['admin_database_backup_delete_error'] = 'Não foi possível eliminar os ficheiros de cópia de segurança selecionados.';
$lang['admin_database_backup_delete_success'] = 'Ficheiros de backup eliminados com sucesso.';
$lang['admin_database_backup_download_error'] = 'Não foi possível transferir o ficheiro de cópia de segurança selecionado.';
$lang['admin_database_backup_download_success'] = 'Ficheiro de cópia de segurança transferido com sucesso.';
$lang['admin_database_backup_lock_confirm'] = 'Tem a certeza de que pretende bloquear estes ficheiros de backup?';
$lang['admin_database_backup_lock_error'] = 'Não foi possível bloquear os ficheiros de cópia de segurança selecionados.';
$lang['admin_database_backup_lock_success'] = 'Ficheiros de backup bloqueados com sucesso.';
$lang['admin_database_backup_locked_error'] = 'Não foi possível eliminar os ficheiros de cópia de segurança bloqueados.';
$lang['admin_database_backup_missing_error'] = 'Não foi possível encontrar o ficheiro de cópia de segurança.';
$lang['admin_database_backup_unlock_confirm'] = 'Tem a certeza de que pretende desbloquear estes ficheiros de backup?';
$lang['admin_database_backup_unlock_error'] = 'Não foi possível desbloquear os ficheiros de cópia de segurança selecionados.';
$lang['admin_database_backup_unlock_success'] = 'Ficheiros de backup desbloqueados com sucesso.';
$lang['admin_database_prune'] = 'Limpeza';
$lang['admin_database_prune_confirm'] = 'Tem a certeza de que pretende limpar a base de dados? Será criado um backup antes da execução.';
$lang['admin_database_prune_error'] = 'Não foi possível limpar a base de dados.';
$lang['admin_database_prune_next'] = 'Próxima limpeza: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Base de dados limpa com sucesso.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Apagar Logs';
$lang['admin_logs_delete_confirm'] = 'Tem a certeza de que pretende eliminar os registos selecionados?';
$lang['admin_logs_delete_error'] = 'Não foi possível eliminar os ficheiros de registo.';
$lang['admin_logs_delete_success'] = 'Ficheiros de registo eliminados com sucesso.';
$lang['admin_logs_error_disabled'] = 'O registo não está atualmente ativado.';
$lang['admin_logs_error_empty'] = 'Nenhum registo encontrado.';
$lang['admin_logs_error_missing'] = 'Ou o ficheiro de registo não pôde ser localizado, ou estava vazio.';
$lang['admin_logs_tip'] = 'O registo pode criar rapidamente ficheiros muito grandes. Para sites ao vivo, considere excluir os mais antigos.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Tem a certeza de que pretende eliminar os e-mails seleccionados?';
$lang['admin_emails_delete_error'] = 'Não foi possível eliminar os e-mails seleccionados.';
$lang['admin_emails_delete_success'] = 'Os e-mails seleccionados foram eliminados com sucesso.';
$lang['admin_emails_email_from'] = 'Enviado de';
$lang['admin_emails_mail_queue'] = 'Fila de e-mails';
$lang['admin_emails_mailer'] = 'E-mail em Massa';
$lang['admin_emails_search'] = 'Pesquisar e-mails por assunto ou conteúdo...';
$lang['admin_emails_send_error'] = 'Falha ao colocar o e-mail na fila. Tente novamente.';
$lang['admin_emails_send_none'] = 'Nenhum utilizador corresponde aos critérios selecionados.';
$lang['admin_emails_send_success'] = 'O e-mail foi colocado na fila e será enviado em breve.';
$lang['admin_emails_send_to_banned'] = 'Enviar para utilizadores banidos.';
$lang['admin_emails_send_to_deleted'] = 'Enviar para utilizadores excluídos.';
$lang['admin_emails_send_to_disabled'] = 'Enviar para utilizadores inativos.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Adicionar Utilizador';
$lang['admin_users_all_users'] = 'Todos os Utilizadores';
$lang['admin_users_ban_confirm'] = 'Tem a certeza de que pretende banir os utilizadores selecionados?';
$lang['admin_users_ban_error'] = 'Não foi possível banir os utilizadores selecionados.';
$lang['admin_users_ban_success'] = 'Utilizadores selecionados banidos com sucesso.';
$lang['admin_users_delete_confirm'] = 'Tem a certeza de que pretende eliminar os utilizadores selecionados?';
$lang['admin_users_delete_error'] = 'Não foi possível eliminar os utilizadores selecionados.';
$lang['admin_users_delete_success'] = 'Utilizadores selecionados eliminados com sucesso.';
$lang['admin_users_disable_confirm'] = 'Tem a certeza de que pretende desativar os utilizadores selecionados?';
$lang['admin_users_disable_error'] = 'Não foi possível desativar os utilizadores selecionados.';
$lang['admin_users_disable_success'] = 'Utilizadores selecionados desativados com sucesso.';
$lang['admin_users_edit'] = 'Editar Utilizador';
$lang['admin_users_edit_error'] = 'Não foi possível atualizar o utilizador.';
$lang['admin_users_edit_success'] = 'Utilizador atualizado com sucesso.';
$lang['admin_users_enable_confirm'] = 'Tem a certeza de que pretende ativar os utilizadores selecionados?';
$lang['admin_users_enable_error'] = 'Não foi possível ativar os utilizadores selecionados.';
$lang['admin_users_enable_success'] = 'Utilizadores selecionados ativados com sucesso.';
$lang['admin_users_groups'] = 'Grupos';
$lang['admin_users_lock_confirm'] = 'Tem a certeza de que pretende bloquear os utilizadores selecionados?';
$lang['admin_users_lock_error'] = 'Não foi possível bloquear os utilizadores selecionados.';
$lang['admin_users_lock_success'] = 'Os utilizadores selecionados foram bloqueados com sucesso.';
$lang['admin_users_logged'] = 'Utilizadores Conectados';
$lang['admin_users_manage'] = 'Gerir Usuários';
$lang['admin_users_remove_confirm'] = 'Tem a certeza de que pretende eliminar permanentemente os utilizadores selecionados e todos os seus dados?';
$lang['admin_users_remove_error'] = 'Não foi possível eliminar permanentemente os utilizadores selecionados e todos os seus dados.';
$lang['admin_users_remove_success'] = 'Utilizadores selecionados e todos os seus dados eliminados com sucesso.';
$lang['admin_users_restore_confirm'] = 'Tem a certeza de que pretende restaurar os utilizadores selecionados?';
$lang['admin_users_restore_error'] = 'Não foi possível restaurar os utilizadores selecionados.';
$lang['admin_users_restore_success'] = 'Utilizadores selecionados restaurados com sucesso.';
$lang['admin_users_search'] = 'Pesquisar nome ou e-mail...';
$lang['admin_users_unban_confirm'] = 'Tem a certeza de que pretende remover o banimento dos utilizadores selecionados?';
$lang['admin_users_unban_error'] = 'Não foi possível remover o banimento dos utilizadores selecionados.';
$lang['admin_users_unban_success'] = 'Banimento dos utilizadores selecionados removido com sucesso.';
$lang['admin_users_unlock_confirm'] = 'Tem a certeza de que deseja desbloquear os utilizadores selecionados?';
$lang['admin_users_unlock_error'] = 'Não foi possível desbloquear os utilizadores selecionados.';
$lang['admin_users_unlock_success'] = 'Utilizadores selecionados desbloqueados com sucesso.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Limpar Registos';
$lang['admin_reports_clear_confirm'] = 'Tem a certeza de que pretende limpar o registo de ações?';
$lang['admin_reports_clear_error'] = 'Não foi possível limpar o registo de ações.';
$lang['admin_reports_clear_success'] = 'Registo de ações limpo com sucesso.';
$lang['admin_reports_latest_actions'] = 'Últimas Ações';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Tem a certeza de que pretende eliminar os ficheiros selecionados?';
$lang['admin_media_delete_error'] = 'Não foi possível eliminar os ficheiros.';
$lang['admin_media_delete_success'] = 'Ficheiros excluídos com sucesso.';
$lang['admin_media_file_delete_error'] = 'Não foi possível eliminar o ficheiro.';
$lang['admin_media_file_delete_success'] = 'Ficheiro excluído com sucesso.';
$lang['admin_media_file_update_error'] = 'Não foi possível atualizar o ficheiro.';
$lang['admin_media_file_update_success'] = 'Ficheiro atualizado com sucesso.';
$lang['admin_media_search'] = 'Pesquisar por nome, descrição ou nome de ficheiro...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Nenhum módulo ativo.} other{<b>#</b> de <b>%s</b> módulos estão ativos.}';
$lang['admin_modules_add'] = 'Adicionar Módulo';
$lang['admin_modules_delete_confirm'] = 'Tem a certeza que pretende eliminar o módulo: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Não foi possível eliminar o módulo.';
$lang['admin_modules_delete_success'] = 'Módulo eliminado com sucesso.';
$lang['admin_modules_disable_all_confirm'] = 'Tem a certeza de que pretende desativar todos os módulos?';
$lang['admin_modules_disable_all_error'] = 'Não foi possível desativar todos os módulos.';
$lang['admin_modules_disable_all_success'] = 'Todos os módulos foram desativados com sucesso.';
$lang['admin_modules_disable_confirm'] = 'Tem a certeza de que pretende desativar o módulo: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Não foi possível desativar o módulo.';
$lang['admin_modules_disable_success'] = 'Módulo desativado com sucesso.';
$lang['admin_modules_enable_all_confirm'] = 'Tem a certeza de que pretende ativar todos os módulos?';
$lang['admin_modules_enable_all_error'] = 'Não foi possível ativar todos os módulos.';
$lang['admin_modules_enable_all_success'] = 'Todos os módulos foram ativados com sucesso.';
$lang['admin_modules_enable_confirm'] = 'Tem a certeza de que pretende ativar o módulo: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Não foi possível ativar o módulo.';
$lang['admin_modules_enable_success'] = 'Módulo ativado com sucesso.';
$lang['admin_modules_install_tip'] = 'Os módulos adicionam novas funcionalidades ao seu site. Explore os módulos disponíveis no <a href="%s" target="_blank" rel="noopener">diretório de módulos</a> ou carregue um ficheiro <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Nenhum plugin ativo.} other{<b>#</b> de <b>%s</b> plugins estão ativos.}';
$lang['admin_plugins_add'] = 'Adicionar Plugin';
$lang['admin_plugins_delete_confirm'] = 'Tem certeza de que deseja excluir o plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Não foi possível excluir o plugin.';
$lang['admin_plugins_delete_success'] = 'Plugin excluído com sucesso.';
$lang['admin_plugins_disable_all_confirm'] = 'Tem a certeza de que pretende desativar todos os plugins?';
$lang['admin_plugins_disable_all_error'] = 'Não foi possível desativar todos os plugins.';
$lang['admin_plugins_disable_all_success'] = 'Todos os plugins foram desativados com sucesso.';
$lang['admin_plugins_disable_confirm'] = 'Tem certeza de que deseja desativar o plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Não foi possível desativar o plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin desativado com sucesso.';
$lang['admin_plugins_enable_all_confirm'] = 'Tem a certeza de que pretende ativar todos os plugins?';
$lang['admin_plugins_enable_all_error'] = 'Não foi possível ativar todos os plugins.';
$lang['admin_plugins_enable_all_success'] = 'Todos os plugins foram ativados com sucesso.';
$lang['admin_plugins_enable_confirm'] = 'Tem certeza de que deseja ativar o plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Não foi possível ativar o plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin ativado com sucesso.';
$lang['admin_plugins_install_tip'] = 'Os plugins expandem as funcionalidades existentes com opções ou integrações adicionais. Instale a partir do <a href="%s" target="_blank" rel="noopener">diretório de plugins</a> ou carregue um ficheiro <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Adicionar Tema';
$lang['admin_themes_delete_confirm'] = 'Tem a certeza que pretende eliminar o tema: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Não foi possível eliminar o tema.';
$lang['admin_themes_delete_error_active'] = 'Não pode eliminar o tema atualmente ativo.';
$lang['admin_themes_delete_success'] = 'Tema eliminado com sucesso.';
$lang['admin_themes_disable_confirm'] = 'Tem a certeza de que pretende desativar o tema: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Não foi possível desativar o tema.';
$lang['admin_themes_disable_success'] = 'Tema desativado com sucesso.';
$lang['admin_themes_enable_confirm'] = 'Tem a certeza que pretende ativar o tema: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Não foi possível ativar o tema.';
$lang['admin_themes_enable_success'] = 'Tema ativado com sucesso.';
$lang['admin_themes_install_tip'] = 'Os temas alteram a aparência e o layout do seu site. Escolha da <a href="%s" target="_blank" rel="noopener">biblioteca de temas</a> ou carregue um ficheiro <b>.zip</b> para instalar o seu próprio.';
$lang['admin_themes_none_tip'] = 'Esta aplicação está a ser executada sem um tema. Instale um para personalizar a interface pública.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menus';
$lang['admin_menus_assign_error'] = 'Não foi possível atualizar as localizações dos menus.';
$lang['admin_menus_assign_success'] = 'Localizações dos menus atualizadas com sucesso.';
$lang['admin_menus_header'] = 'Existem <b>%s</b> localizações de menu disponíveis.';
$lang['admin_menus_location'] = 'Localização';
$lang['admin_menus_locations'] = 'Localizações de Menu';
$lang['admin_menus_manage'] = 'Gerir Menus';
$lang['admin_menus_menu'] = 'Menu Atribuído';
$lang['admin_menus_none'] = '&#151; Nenhum &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Adicionar idioma';
$lang['admin_languages_default_confirm'] = 'Tem a certeza de que pretende definir este idioma como idioma predefinido do website?';
$lang['admin_languages_default_error'] = 'Não foi possível alterar o idioma predefinido.';
$lang['admin_languages_default_error_nochange'] = 'Este idioma já é o predefinido.';
$lang['admin_languages_default_success'] = 'Idioma padrão alterado com sucesso.';
$lang['admin_languages_disable_all_confirm'] = 'Tem a certeza de que pretende desativar todos os idiomas?';
$lang['admin_languages_disable_all_error'] = 'Não foi possível desativar todos os idiomas.';
$lang['admin_languages_disable_all_success'] = 'Todos os idiomas foram desativados com sucesso.';
$lang['admin_languages_disable_confirm'] = 'Tem a certeza de que pretende desativar o idioma: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Não foi possível desativar o idioma.';
$lang['admin_languages_disable_error_default'] = 'A língua predefinida não pode ser desativada.';
$lang['admin_languages_disable_error_nochange'] = 'Este idioma já está desativado.';
$lang['admin_languages_disable_success'] = 'Idioma desativado com sucesso.';
$lang['admin_languages_enable_all_confirm'] = 'Tem a certeza de que pretende ativar todos os idiomas?';
$lang['admin_languages_enable_all_error'] = 'Não foi possível ativar todos os idiomas.';
$lang['admin_languages_enable_all_success'] = 'Todos os idiomas foram ativados com sucesso.';
$lang['admin_languages_enable_confirm'] = 'Tem a certeza de que pretende ativar o idioma: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Não foi possível ativar o idioma.';
$lang['admin_languages_enable_error_nochange'] = 'Este idioma já está ativado.';
$lang['admin_languages_enable_success'] = 'Idioma ativado com sucesso.';
$lang['admin_languages_install_tip'] = 'Os idiomas adicionam traduções para a interface e o conteúdo do seu site. Consulte os idiomas disponíveis no <a href="%s" target="_blank" rel="noopener">diretório de idiomas</a> ou carregue um pacote <b>.zip</b> para instalar o seu próprio.';
$lang['admin_languages_tip'] = 'Ative, desative e defina o idioma predefinido do site. Os idiomas ativados estão disponíveis para os visitantes do site.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Novas atualizações disponíveis!';
$lang['update_backup_error'] = 'Não foi possível criar uma cópia de segurança do pacote existente. A atualização foi cancelada.';
$lang['update_check_disabled'] = 'As verificações automáticas de atualizações estão desativadas. Ative-as para visualizar atualizações.';
$lang['update_check_error'] = 'Não foi possível executar a verificação de atualizações no momento.';
$lang['update_check_success'] = 'Verificação de atualizações concluída com sucesso.';
$lang['update_install_error'] = 'O pacote não pôde ser instalado. A versão anterior foi mantida.';
$lang['update_install_success'] = 'Pacote atualizado com sucesso para a versão mais recente.';
$lang['update_interval_3days'] = 'A cada 3 dias';
$lang['update_interval_biweekly'] = 'A cada 2 semanas';
$lang['update_interval_daily'] = 'Todos os dias';
$lang['update_interval_monthly'] = 'Uma vez por mês';
$lang['update_interval_weekly'] = 'Uma vez por semana';
$lang['update_not_available'] = 'O seu site está atualizado.';
$lang['update_rollback_error'] = 'Não foi possível restaurar a versão anterior. Pode ser necessária intervenção manual.';
$lang['update_rollback_success'] = 'Versão anterior restaurada com sucesso.';
$lang['updates_available'] = 'Atualizações disponíveis';
$lang['updates_check_now'] = 'Verificar agora';
$lang['updates_check_now_confirm'] = 'Tem a certeza de que deseja verificar atualizações agora?';
$lang['updates_current_version'] = 'Versão atual';
$lang['updates_enable'] = 'Ativar atualizações';
$lang['updates_last_check'] = 'Última verificação: %s';
$lang['updates_latest_version'] = 'Versão mais recente';
$lang['updates_next_check'] = 'Próxima verificação agendada: %s';
$lang['updates_previous_version'] = 'Versão anterior';
$lang['updates_recent'] = 'Atualizados recentemente';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Falha ao bloquear o endereço IP especificado.';
$lang['admin_firewall_ban_success'] = 'O endereço IP foi bloqueado com sucesso.';
$lang['admin_firewall_block_ip'] = 'Bloquear endereço IP';
$lang['admin_firewall_delete_confirm'] = 'Tem a certeza de que pretende desbloquear os endereços IP selecionados?';
$lang['admin_firewall_delete_error'] = 'Falha ao desbloquear os endereços IP selecionados.';
$lang['admin_firewall_delete_success'] = 'Os endereços IP selecionados foram desbloqueados com sucesso.';
$lang['admin_firewall_duration'] = 'Duração do banimento';
$lang['admin_firewall_permanent'] = 'Permanente';
$lang['admin_firewall_reason'] = 'Motivo do banimento';
$lang['admin_firewall_tip'] = 'Consulte e faça a gestão dos endereços IP bloqueados pela firewall devido a violações repetidas ou atividade suspeita.';

// Settings
$lang['404_ban_duration'] = 'Duração do banimento 404';
$lang['404_threshold'] = 'Limite de erros 404';
$lang['uri_ban_duration'] = 'Duração do banimento URI';
$lang['uri_strike_threshold'] = 'Limite de strikes URI';
