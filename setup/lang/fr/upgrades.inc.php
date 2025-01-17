<?php
/**
 * English Upgrades Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 */
$_lang['add_column'] = 'Ajout de nouvelle colonne `[[+column]]` à [[+table]].';
$_lang['add_index'] = 'Ajout de nouvel index sur `[[+index]]` pour la table [[+table]].';
$_lang['alter_column'] = 'Mis à jour de la colonne `[[+column]]` dans le tableau [[+table]].';
$_lang['add_moduser_classkey'] = 'Ajout du champ class_key pour supporter les dérivés modUser.';
$_lang['added_cachepwd'] = 'Ajout du champ cachepwd, manquant aux premières versions de MODX Revolution.';
$_lang['added_content_ft_idx'] = 'Ajout du nouvel index full-text `content_ft_idx` sur les champs `pagetitle`, `longtitle`, `description`, `introtext`, `content`.';
$_lang['allow_null_properties'] = 'Autorisation de null pour `[[+class]]`.`properties` fixée.';
$_lang['alter_activeuser_action'] = 'Modification du champ modActiveUser `action` afin d\'autoriser des dénominations plus longues pour les actions.';
$_lang['alter_usermessage_messageread'] = 'Renommage du champ modUserMessage `messageread` en `read`.';
$_lang['alter_usermessage_postdate'] = 'Changement du champ modUserMessage `postdate` de INT à DATETIME et renommé `date_sent`.';
$_lang['alter_usermessage_subject'] = 'Changement du champ modUserMessage `subject` de VARCHAR(60) à VARCHAR(255).';
$_lang['authority_unique_index_error'] = 'Multiple modUserGroup records with the same authority were found. You will need to update these to have unique authority values and then re-run the upgrade.';
$_lang['change_column'] = 'Champ `[[+old]]` changé à `[[+new]]` dans la table [[+table]].';
$_lang['change_default_value'] = 'Valeur par défaut de la colonne `[[+column]]` changée en "[[+value]]" dans la table [[+table]].';
$_lang['connector_acls_removed'] = 'Suppression du connecteur de contexte ACLs.';
$_lang['connector_acls_not_removed'] = 'Impossible de supprimer le connecteur de contexte ACLs.';
$_lang['connector_ctx_removed'] = '';
$_lang['connector_ctx_not_removed'] = 'Impossible de supprimer le connecteur de contexte.';
$_lang['data_remove_error'] = 'Erreur de suppression des données de la classe `[[+class]]`.';
$_lang['data_remove_success'] = 'Suppression des données de la table pour la classe `[[+class]]` effectuée.';
$_lang['drop_column'] = 'Abandon de la colonne `[[+column]]` dans la table [[+table]].';
$_lang['drop_index'] = 'Abandon de l\'index `[[+index]]` dans la table [[+table]].';
$_lang['lexiconentry_createdon_null'] = 'Changement de modLexiconEntry `createdon` afin d\'autoriser NULL.';
$_lang['lexiconentry_focus_alter'] = 'Changement de modLexiconEntry `focus` de VARCHAR(100) à INT(10).';
$_lang['lexiconentry_focus_alter_int'] = 'Mise à jour des données de la colonne modLexiconEntry `focus` de string vers une nouvelle clé étrangère de type int venant de modLexiconTopic.';
$_lang['lexiconfocus_add_id'] = 'Ajout de la colonne modLexiconFocus `id`.';
$_lang['lexiconfocus_add_pk'] = 'Ajout de modLexiconFocus PRIMARY KEY à la colonne `id`.';
$_lang['lexiconfocus_alter_pk'] = 'Changement de modLexiconFocus `name` de PRIMARY KEY vers UNIQUE KEY';
$_lang['lexiconfocus_drop_pk'] = 'Abandon de modLexiconFocus PRIMARY KEY.';
$_lang['menu_remove_success'] = 'Menu item `[[+text]]` removed.';
$_lang['menu_remove_failed'] = 'Menu item `[[+text]]` could not be removed.';
$_lang['menu_update_success'] = 'Menu item `[[+text]]` updated.';
$_lang['menu_update_failed'] = 'Menu item `[[+text]]` could not be updated.';
$_lang['modify_column'] = 'Colonne modifiée `[[+column]]` de `[[+old]]` en `[[+new]]` dans la table [[+table]]';
$_lang['rename_column'] = 'Colonne `[[+old]]` renommée en `[[+new]]` dans la table [[+table]].';
$_lang['rename_table'] = 'Table `[[+old]]` renommée en `[[+new]]`.';
$_lang['remove_fulltext_index'] = 'Index full-text `[[+index]]` supprimé.';
$_lang['systemsetting_xtype_fix'] = 'xtypes pour modSystemSettings corrigés avec succès.';
$_lang['transportpackage_manifest_text'] = 'Colonne `manifest` modifiée en TEXT au lieu de MEDIUMTEXT dans `[[+class]]`.';
$_lang['update_closure_table'] = 'Mise à jour des données de table de fermeture pour la classe `[[+class]]`.';
$_lang['update_table_column_data'] = 'Données mises à jour dans la colonne [[+column]] dans la table [[+table]] ( [[+class]] )';
$_lang['iso_country_code_converted'] = 'La conversion du nom du pays du profil utilisateur au format ISO a bien été effectuée.';
$_lang['legacy_cleanup_complete'] = 'Suppression des anciens fichiers terminée.';
$_lang['legacy_cleanup_count'] = '[[+files]] fichier(s) et [[+folders]] dossier(s) supprimé(s) .';
$_lang['clipboard_flash_file_unlink_success'] = 'Suppression correcte de la copie dans un fichier de presse-papiers express.';
$_lang['clipboard_flash_file_unlink_failed'] = 'Erreur de suppression de la copie dans un fichier de presse-papiers express.';
$_lang['clipboard_flash_file_missing'] = 'La copie dans un fichier de presse-papiers express a déjà été supprimée.';
$_lang['system_setting_cleanup_success'] = 'Réglage système de `[[+key]]` supprimé.';
$_lang['system_setting_cleanup_failed'] = 'Le réglage système de `[[+key]]` ne peut être supprimé.';
$_lang['system_setting_update_xtype_success'] = 'Le paramètre xtype pour le système `[[+key]]` a été changé avec succès de `[[+old_xtype]]` en `[[+new_xtype]]`.';
$_lang['system_setting_update_xtype_failure'] = 'Impossible de changer le xtype pour le paramètre système `[[+key]]` de `[[+old_xtype]]` en `[[+new_xtype]]`.';
$_lang['system_setting_update_success'] = 'Paramètre système `[[+key]]` mis à jour.';
$_lang['system_setting_update_failed'] = 'Le paramètre système `[[+key]]` n\'a pas pu être mis à jour.';
$_lang['system_setting_rename_key_success'] = 'Successfully renamed the System Setting key from `[[+old_key]]` to `[[+new_key]]`.';
$_lang['system_setting_rename_key_failure'] = 'Failed to rename the System Setting key from `[[+old_key]]` to `[[+new_key]]`.';
