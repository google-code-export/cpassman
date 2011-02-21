<?php
//czech
if (!isset($_SESSION['settings']['cpassman_url'])) {
$cpassman_url = '';
}else{
$cpassman_url = $_SESSION['settings']['cpassman_url'];
}

$txt['account_is_locked'] = "Tento účet je uzamčen.";
$txt['add_button'] = "Přidat";
$txt['add_new_group'] = "Přidat novou složku";
$txt['add_role_tip'] = "Přidat novou roli";
$txt['admin'] = "Správa";
$txt['admin_action'] = "Prosím potvrdte Vaší akci";
$txt['admin_actions_title'] = "Speciální operace";
$txt['admin_action_check_pf'] = "Aktualizovat Osobní složky všech uživatelů (vytvořit je, pokud neexistují)";
$txt['admin_action_db_backup'] = "Vytvořit zálohu databáze";
$txt['admin_action_db_backup_key_tip'] = "Prosím zadejte šifrovací klíč. Klíč bezpečně uložte, bude vyžadován při případné rekonstrukci databáze. (Ponechte prázdné, pokud nechcete šifrovat)";
$txt['admin_action_db_backup_start_tip'] = "Spustit";
$txt['admin_action_db_backup_tip'] = "V praxi je účelné vytvořit zálohu databáze, pomocí níž lze databázi zrekonstruovat.";
$txt['admin_action_db_clean_items'] = "Odstranit z databáze opuštěné položky";
$txt['admin_action_db_clean_items_result'] = "položek bylo vymazáno.";
$txt['admin_action_db_clean_items_tip'] = "Tímto budou z databáze odstraněny pouze položky a deníky, které nebyly odstraněny při vymazání odpovídající složky. Doporučujeme však předtím vytvořit zálohu databáze.";
$txt['admin_action_db_optimize'] = "Optimalizovat databázi";
$txt['admin_action_db_restore'] = "Zrekonstruovat databázi ze zálohy";
$txt['admin_action_db_restore_key'] = "Prosím zadejte šifrovací klíč.";
$txt['admin_action_db_restore_tip'] = "Provádí se ze zálohového souboru SQL, vytvořeného pomocí zálohové funkce.";
$txt['admin_action_purge_old_files'] = "Odstranit staré soubory";
$txt['admin_action_purge_old_files_result'] = "souborů bylo vymazáno.";
$txt['admin_action_purge_old_files_tip'] = "Tímto budou vymazány všechny dočasné soubory starší než 7 dnů.";
$txt['admin_action_reload_cache_table'] = "Znovu načíst vyrovnávací paměť databáze";
$txt['admin_action_reload_cache_table_tip'] = "Tímto je možné znovu načíst celý obsah vyrovnávací paměti databáze. To může být v určitých situacích užitečné.";
$txt['admin_error_no_complexity'] = "(<a href='index.php?page=manage_groups'>Definovat?</a>)";
$txt['admin_error_no_visibility'] = "Tato položka není pro nikoho viditelná. (<a href='index.php?page=manage_roles'>Upravit role</a>)";
$txt['admin_functions'] = "Správa rolí";
$txt['admin_groups'] = "Správa složek";
$txt['admin_help'] = "Nápověda";
$txt['admin_info'] = "Další informace o aplikaci";
$txt['admin_info_loading'] = "Načítají se data ... prosím čekejte";
$txt['admin_ldap_configuration'] = "Konfigurace LDAP";
$txt['admin_ldap_menu'] = "Možnosti LDAP";
$txt['admin_main'] = "Informace";
$txt['admin_misc_cpassman_dir'] = "Úplná cesta k souborům cPassMan v souborovém systému";
$txt['admin_misc_cpassman_url'] = "Úplná adresa URL k souborům cPassMan";
$txt['admin_misc_favicon'] = "Úplná adresa URL k souboru 'favicon'";
$txt['admin_misc_title'] = "Přizpůsobit";
$txt['admin_settings'] = "Správní nastavení";
$txt['admin_settings_title'] = "Nastavení aplikace cPassMan";
$txt['admin_setting_activate_expiration'] = "Aktivovat lhůtu platnosti hesel";
$txt['admin_setting_activate_expiration_tip'] = "Po aktivaci nebudou položky s uplynulou platností uživatelům zobrazovány.";
$txt['admin_users'] = "Správa uživatelských účtů";
$txt['admin_views'] = "Náhledy";
$txt['alert_message_done'] = "Provedeno!";
$txt['alert_message_personal_sk_missing'] = "Musíte zadat Váš osobní klíč (saltkey)!";
$txt['all'] = "vše";
$txt['anyone_can_modify'] = "Povolit změnu této položky kýmkoli, kdo k ní má přístup";
$txt['associated_role'] = "Jaká role má být přiřazena této složce:";
$txt['associate_kb_to_items'] = "Vyberte položky, které chcete přiřadit tomuto KB";
$txt['assoc_authorized_groups'] = "Povolené přiřazené složky";
$txt['assoc_forbidden_groups'] = "Zakázané přiřazené složky";
$txt['at'] = "v";
$txt['at_add_file'] = "Soubor přidán";
$txt['at_category'] = "Složka";
$txt['at_creation'] = "Vytvořeno";
$txt['at_delete'] = "Vymazáno";
$txt['at_del_file'] = "Soubor vymazán";
$txt['at_description'] = "Popis";
$txt['at_file'] = "Soubor";
$txt['at_import'] = "Importováno";
$txt['at_label'] = "Název";
$txt['at_login'] = "Přihlášení";
$txt['at_modification'] = "Úprava";
$txt['at_personnel'] = "Osobní";
$txt['at_pw'] = "Změna hesla";
$txt['at_restored'] = "Zrekonstruováno";
$txt['at_url'] = "Adresa URL";
$txt['auteur'] = "Autor";
$txt['author'] = "Autor";
$txt['authorized_groups'] = "Povolené složky";
$txt['auth_creation_without_complexity'] = "Povolit tvorbu položek bez ohledu na požadovanou komplexitu hesla";
$txt['auth_modification_without_complexity'] = "Povolit změnu položek bez ohledu na požadovanou komplexitu hesla";
$txt['auto_create_folder_role'] = "Vytvořit složku a roli pro";
$txt['block_last_created'] = "Nově vytvořeno";
$txt['bugs_page'] = "Objevíte-li v aplikaci chybu, můžete ji přímo oznámit na <a href=\"https://sourceforge.net/tracker/?group_id=280505&amp;atid=1190333\" target=\"_blank\"><u>Fórum chyb</u></a>.";
$txt['by'] = "od";
$txt['cancel'] = "Zrušit";
$txt['cancel_button'] = "Zrušit";
$txt['can_create_root_folder'] = "Může tvořit složky na základní úrovni (root)";
$txt['changelog'] = "Deník změn";
$txt['change_authorized_groups'] = "Změnit povolené složky";
$txt['change_forbidden_groups'] = "Změnit zakázané složky";
$txt['change_function'] = "Změnit role";
$txt['change_group_autgroups_info'] = "Vyberte povolené složky, které tato role smí nahlížet a používat";
$txt['change_group_autgroups_title'] = "Upravit povolené složky";
$txt['change_group_forgroups_info'] = "Vyberte zakázané složky, které tato role nesmí nahlížet ani používat";
$txt['change_group_forgroups_title'] = "Upravit zakázané složky";
$txt['change_user_autgroups_info'] = "Vyberte povolené složky, které tento uživatel smí nahlížet a používat";
$txt['change_user_autgroups_title'] = "Upravit povolené složky";
$txt['change_user_forgroups_info'] = "Vyberte zakázané složky, které tento uživatel nesmí nahlížet ani používat";
$txt['change_user_forgroups_title'] = "Upravit zakázané složky";
$txt['change_user_functions_info'] = "Vyberte funkce přiřazené tomuto uživatelskému účtu";
$txt['change_user_functions_title'] = "Upravit přiřazené funkce";
$txt['check_all_text'] = "Vybrat všechny";
$txt['close'] = "Zavřít";
$txt['complexity'] = "Komplexita";
$txt['complex_asked'] = "Vyžadovaná komplexita";
$txt['complex_asked'] = "Vyžadovaná komplexita";
$txt['complex_level0'] = "Velmi jednoduché";
$txt['complex_level1'] = "Jednoduché";
$txt['complex_level2'] = "Normální";
$txt['complex_level3'] = "Zesílené";
$txt['complex_level4'] = "Silné";
$txt['complex_level5'] = "Bezpečné";
$txt['complex_level6'] = "Velmi bezpečné";
$txt['confirm'] = "Potvrdit";
$txt['confirm_delete_group'] = "Chcete skutečně odstranit tuto složku a všechny v ní obsažené položky?";
$txt['confirm_deletion'] = "Chcete skutečně odstranit?";
$txt['confirm_del_account'] = "Chcete skutečně odstranit tento uživatelský účet?";
$txt['confirm_del_from_fav'] = "Prosím potvrďte, že chcete vymazat Vaše oblíbené položky";
$txt['confirm_del_role'] = "Prosím potvrďte, že chcete vymazat tuto roli:";
$txt['confirm_edit_role'] = "Prosím zadejte název této role:";
$txt['connection'] = "Nahlášení/připojení";
$txt['connections'] = "připojení";
$txt['copy'] = "Zkopírovat";
$txt['copy_to_clipboard_small_icons'] = "Aktivovat malé ikony pro kopírování do paměti na stránce položek";
$txt['copy_to_clipboard_small_icons_tip'] = "<span style=\"\" 300px;\=\"\">Tím lze zredukovat nároky na operační paměť pro uživatele starších počítačů.<br> Informace o položkách pak sice nejsou načítány, nelze ale ani rychle kopírovat uživatelská jména a hesla položek.</span> ";
$txt['creation_date'] = "Datum vytvoření";
$txt['csv_import_button_text'] = "Procházet soubor CSV";
$txt['date'] = "Datum";
$txt['date'] = "Datum";
$txt['date_format'] = "Formát pro datum";
$txt['days'] = "dní";
$txt['definition'] = "Definice";
$txt['delete'] = "Vymazat";
$txt['deletion'] = "Vymazáno";
$txt['deletion_title'] = "Seznam odstraněných položek";
$txt['del_button'] = "Vymazat";
$txt['del_function'] = "Vymazat role";
$txt['del_group'] = "Odstranit složku";
$txt['description'] = "Popis";
$txt['description'] = "Popis";
$txt['disconnect'] = "Odhlásit";
$txt['disconnection'] = "Odhlášení/odpojení";
$txt['div_dialog_message_title'] = "Informace";
$txt['done'] = "Provedeno";
$txt['duplicate_folder'] = "Pro vytvoření více složek se stejným názvem je nutná autorizace.";
$txt['duplicate_item'] = "Pro vytvoření více položek se stejným názvem je nutná autorizace.";
$txt['email'] = "Email";
$txt['email_altbody_1'] = "Položka";
$txt['email_altbody_2'] = "byla vytvořena.";
$txt['email_announce'] = "Oznámit tuto položku po emailu";
$txt['email_body1'] = "Dobrý den,<br><br>Položka '";
$txt['email_body2'] = "byla vytvořena.<br><br>Můžete ji nahlédnout kliknutím <a href=\"%5C%22%3C/div%3E%3C/td%3E%0A%09%09%09%3C/tr%3E%0A%09%09%09%3Ctr%3E%0A%09%09%09%09%3Ctd%20style=%22font-size:8pt;%20background:#D0D0D0;%22%3E%5C%22\" &gt;here&lt;=\"\&quot;\&quot;\" a&gt;&lt;br=\"\&quot;\&quot;\" &gt;&lt;br=\"\&quot;\&quot;\" &gt;regards.=\"\&quot;\&quot;\"></a>";
$txt['email_body3'] = "'>ZDE</a><br /><br />Na shledanou.";
$txt['email_change'] = "Změnit emailovou adresu uživatelského účtu";
$txt['email_changed'] = "Emailová adresa byla změněna!";
$txt['email_select'] = "Vybrat uživatele, kteří budou informováni";
$txt['email_subject'] = "Byla vytvořena nová položka v aplikaci cPassMan";
$txt['email_subject_new_user'] = "[cPassMan] Vytvoření Vašeho uživatelského účtu";
$txt['email_text_new_user'] = "Dobrý den,<br><br>Váš uživatelský účet v aplikaci cPassMan byl založen.<br>nyní máte přístup do $cpassman_url pomocí následujících identifikačních údajů:<br>";
$txt['enable_favourites'] = "Dovolit uživatelům ukládat oblíbené položky";
$txt['enable_personal_folder'] = "Aktivovat Osobní složku";
$txt['enable_personal_folder_feature'] = "Aktivovat funkci Osobní složky";
$txt['encrypt_key'] = "Šifrovací klíč";
$txt['errors'] = "chyby";
$txt['error_complex_not_enought'] = "Komplexita hesla není dostačující!";
$txt['error_confirm'] = "Zadaná hesla se neshodují!";
$txt['error_cpassman_dir'] = "Není nastavena cesta k souborům cPassMan. Prosím zvolte záložku 'Nastavení cPassMan' na stránce 'Správní nastavení'.";
$txt['error_cpassman_url'] = "Není nastavena adresa URL k souborům cPassMan. Prosím zvolte záložku 'Nastavení cPassMan' na stránce 'Správní nastavení'.";
$txt['error_fields_2'] = "Tyto 2 údaje je nutné zadat!";
$txt['error_group'] = "Složku je nutné zadat!";
$txt['error_group_complex'] = "Složka musí mít minimální požadovanou úroveň komplexity!";
$txt['error_group_exist'] = "Tato složka již existuje!";
$txt['error_group_label'] = "Název složky je nutné zadat!";
$txt['error_html_codes'] = "Text obsahuje kód HTML! To je nepřípustné.";
$txt['error_item_exists'] = "Tato položka již existuje!";
$txt['error_label'] = "Název je nutné zadat!";
$txt['error_must_enter_all_fields'] = "Musíte zadat všechny údaje!";
$txt['error_mysql'] = "Chyba v aplikaci MySQL!";
$txt['error_not_authorized'] = "Tuto stránku nesmíte nahlížet.";
$txt['error_not_exists'] = "Tato stránka neexistuje.";
$txt['error_no_folders'] = "Nejprve byste měl vytvořit několik složek.";
$txt['error_no_password'] = "Musíte zadat Vaše heslo!";
$txt['error_no_roles'] = "Rovněž byste měl vytvořit několik rolí a přiřadit je složkám.";
$txt['error_password_confirmation'] = "Hesla musí být shodná";
$txt['error_pw'] = "Heslo je nutné zadat!";
$txt['error_renawal_period_not_integer'] = "Interval obnovení musí být zadán v celých měsících!";
$txt['error_salt'] = "<b>Klíč SALTKEY je příliš dlouhý! Prosím nepoužívejte aplikaci, dokud Správce klíř SALTKEY neupraví.</b> Soubor 'settings.php' nesmí obsahovat klíč SALTKEY delší než 32 znaků.";
$txt['error_tags'] = "V záložkách nejsou přípustné žádné dělicí znaky - pouze mezery.";
$txt['error_user_exists'] = "Uživatel již existuje";
$txt['expiration_date'] = "Datum vypršení platnosti";
$txt['expir_one_month'] = "za 1 měsíc";
$txt['expir_one_year'] = "za 1 rok";
$txt['expir_six_months'] = "za 6 měsíců";
$txt['expir_today'] = "dnes";
$txt['files_&_images'] = "Soubory a obrázky";
$txt['find'] = "Najít";
$txt['find_text'] = "Vaše hledání";
$txt['folders'] = "Složky";
$txt['forbidden_groups'] = "Zakázané složky";
$txt['forgot_my_pw'] = "Zapomněl/a jste Vaše heslo?";
$txt['forgot_my_pw_email_sent'] = "Email byl odeslán.";
$txt['forgot_my_pw_error_email_not_exist'] = "Tato emailová adresa neexistuje!";
$txt['forgot_my_pw_text'] = "Vaše heslo bude zasláno na emailovou adresu přiřazenou Vašemu kontu.";
$txt['forgot_pw_email_altbody_1'] = "Dobrý den, Vaše identifikační údaje pro cPassMan znějí:";
$txt['forgot_pw_email_body'] = "Dobrý den,<br><br>Vaše nové heslo pro cPassMan zní:";
$txt['forgot_pw_email_body'] = "Dobrý den,<br><br>Vaše nové heslo pro cPassMan zní:";
$txt['forgot_pw_email_body_1'] = "Dobrý den, <br><br>Vaše identifikační údaje pro cPassMan znějí:<br><br>";
$txt['forgot_pw_email_subject'] = "[cPassMan] - Vaše heslo";
$txt['forgot_pw_email_subject_confirm'] = "[cPassMan] Vaše heslo, krok č. 2";
$txt['functions'] = "Role";
$txt['function_alarm_no_group'] = "Tato role není přiřazena žádné složce!";
$txt['generate_pdf'] = "Vytvořit soubor PDF";
$txt['generation_options'] = "Možnosti vytváření";
$txt['gestionnaire'] = "Manažer";
$txt['give_function_tip'] = "Přidat novou roli";
$txt['give_function_title'] = "Přidat novou roli";
$txt['give_new_email'] = "Prosím zadejte novou emailovou adresu pro";
$txt['give_new_login'] = "Prosím vyberte uživatelský účet";
$txt['give_new_pw'] = "Prosím zadejte nové heslo pro";
$txt['god'] = "Všemohoucí";
$txt['group'] = "Složka";
$txt['group_parent'] = "Nadřazená složka";
$txt['group_pw_duration'] = "Interval obnovení";
$txt['group_pw_duration_tip'] = "v měsících (pro deaktivování zadejte 0).";
$txt['group_select'] = "Vybrat složku";
$txt['group_title'] = "Název složky";
$txt['history'] = "Historie";
$txt['home'] = "Domovská stránka";
$txt['home_personal_menu'] = "Osobní akce";
$txt['home_personal_saltkey'] = "Váš osobní klíč SALTKEY";
$txt['home_personal_saltkey_button'] = "Uložit!";
$txt['home_personal_saltkey_info'] = "Pokud potřebujete ukládat osobní položky, musíte zadat Váš osobní klíč SALTKEY.";
$txt['home_personal_saltkey_label'] = "Zadejte Váš osobní klíč SALTKEY";
$txt['importing_details'] = "Seznam podrobností";
$txt['importing_folders'] = "Importovat složky";
$txt['importing_items'] = "Importovat položky";
$txt['import_button'] = "Importovat";
$txt['import_csv_anyone_can_modify_in_role_txt'] = "Nastavit právo \"kdokoliv ve stejné roli smí měnit\" pro všechny importované položky";
$txt['import_csv_anyone_can_modify_txt'] = "Nastavit právo \"kdokoliv smí měnit\" pro všechny importované položky";
$txt['import_csv_dialog_info'] = "Informace: pro import je nutný soubor CSV. Tento soubor je obvykle exportován z programu KeePass ve stanovené struktuře.<br>Používáte-li soubor vytvořený jinou aplikací, ověřte následující formát souboru CSV: `Konto`,`Uživatelské jméno`,`Heslo`,`Web Site`,`Komentáře`.";
$txt['import_csv_menu_title'] = "Importovat položky ze souboru (CSV/KeePass XML)";
$txt['import_error_no_file'] = "Musíte zvolit soubor!";
$txt['import_error_no_read_possible'] = "Soubor nelze načíst!";
$txt['import_error_no_read_possible_kp'] = "Soubor nelze načíst! Je vyžadován soubor typu KeePass.";
$txt['import_keepass_dialog_info'] = "Použijte pro zvolení souboru XML, vytvořeného exportní funkcí programu KeePass. Funguje pouze se soubory KeePass! Pozor: skript není schopen importovat složky a položky, které již existují ve stejné hierarchické úrovni.";
$txt['import_keepass_to_folder'] = "Zvolte cílovou složku";
$txt['import_kp_finished'] = "Import dat z programu KeePass je ukončen!<br>Vyžadovaná úroveň komplexity pro nové složky je nastavena na `Normální`. Úroveň v případe potřeby upravte.";
$txt['import_to_folder'] = "Označte položky, které chcete importovat do složky:";
$txt['index_add_one_hour'] = "Prodloužit povolenou dobu přihlášení o 1 hodinu";
$txt['index_alarm'] = "ALARM!!!";
$txt['index_bas_pw'] = "Toto heslo nepřísluší tomuto uživatelskému účtu!";
$txt['index_change_pw'] = "Vaše heslo je třeba změnit!";
$txt['index_change_pw'] = "Změnit Vaše heslo";
$txt['index_change_pw_button'] = "Změnit";
$txt['index_change_pw_confirmation'] = "Potvrdit";
$txt['index_expiration_in'] = "povolená doba přihlášení vyprší za";
$txt['index_get_identified'] = "Prosím zadejte Vaše identifikační údaje";
$txt['index_identify_button'] = "Zadat";
$txt['index_identify_you'] = "Prosím zadejte Vaše identifikační údaje";
$txt['index_last_pw_change'] = "Poslední změna hesla";
$txt['index_last_seen'] = "Poslední připojení";
$txt['index_login'] = "Uživatelský účet";
$txt['index_maintenance_mode'] = "Správní režim je aktivován. Momentálně se může přihlásit pouze Správce.";
$txt['index_maintenance_mode_admin'] = "Správní režim je aktivován. Uživatelé se momentálně nemohou přihlásit.";
$txt['index_new_pw'] = "Nové heslo";
$txt['index_password'] = "Heslo";
$txt['index_pw_error_identical'] = "Hesla musí být shodná!";
$txt['index_pw_expiration'] = "Platnost hesla vyprší za";
$txt['index_pw_level_txt'] = "Komplexita";
$txt['index_refresh_page'] = "Aktualizovat stránku";
$txt['index_session_duration'] = "Uplynulá doba přihlášení";
$txt['index_session_ending'] = "Vaše přihlášení do aplikace cPassMan bude nejpozději za 1 minutu ukončeno.";
$txt['index_session_expired'] = "Vaše přihlášení do aplikace cPassMan bylo ukončeno nebo jste nezadal/a platné identifikační údaje!";
$txt['index_welcome'] = "Vítejte";
$txt['info'] = "Informace";
$txt['info_click_to_edit'] = "Klikněte na vybrané políčko pro editování jeho obsahu";
$txt['is_admin'] = "Je Správce";
$txt['is_manager'] = "Je Manažer";
$txt['items_browser_title'] = "Složky";
$txt['item_menu_add_elem'] = "Přidat položku";
$txt['item_menu_add_rep'] = "Přidat složku";
$txt['item_menu_add_to_fav'] = "Přidat k oblíbeným položkám";
$txt['item_menu_collab_disable'] = "Změny nejsou povoleny";
$txt['item_menu_collab_enable'] = "Změny jsou povoleny";
$txt['item_menu_copy_elem'] = "Zkopírovat položku";
$txt['item_menu_copy_login'] = "Zkopírovat uživatelské jméno";
$txt['item_menu_copy_pw'] = "Zkopírovat heslo";
$txt['item_menu_del_elem'] = "Odstranit položku";
$txt['item_menu_del_from_fav'] = "Odebrat z oblíbených položek";
$txt['item_menu_del_rep'] = "Odstranit složku";
$txt['item_menu_edi_elem'] = "Změnit položku";
$txt['item_menu_edi_rep'] = "Změnit složku";
$txt['item_menu_find'] = "Vyhledat";
$txt['item_menu_mask_pw'] = "Zakrýt heslo";
$txt['item_menu_refresh'] = "Aktualizovat stránku";
$txt['kb_menu'] = "Databáze zkušeností a znalostí";
$txt['keepass_import_button_text'] = "Procházet XML soubor";
$txt['label'] = "Název";
$txt['last_items_icon_title'] = "Odkrýt/zakrýt poslední nahlídnuté položky";
$txt['last_items_title'] = "Poslední nahlédnuté položky";
$txt['level'] = "Umístění/úroveň";
$txt['link_copy'] = "Vytvořit odkaz na tuto položku";
$txt['link_is_copied'] = "Odkaz na tuto položku byl zkopírován do paměti.";
$txt['login'] = "Uživatelské jméno (je-li potřeba)";
$txt['login_attempts_on'] = "pokusy o přihlášení";
$txt['login_copied_clipboard'] = "Uživatelské jméno zkopírováno do paměti";
$txt['login_copy'] = "Zkopírovat uživatelské jméno do paměti";
$txt['logs'] = "Deník";
$txt['logs_1'] = "Vytvořit protokol o obnovení hesel provedeném";
$txt['logs_passwords'] = "Vytvořit deník hesel";
$txt['maj'] = "Velká písmena";
$txt['mask_pw'] = "Zakrýt/odkrýt heslo";
$txt['max_last_items'] = "Maximální množství Posledních nahlédnutých položek (standardně 10)";
$txt['minutes'] = "minut";
$txt['modify_button'] = "Změnit/upravit";
$txt['my_favourites'] = "Oblíbené položky";
$txt['name'] = "Jméno";
$txt['nb_false_login_attempts'] = "Počet dovolených nezdařilých pokusů o přihlášení do uzamčení účtu (0 pro deaktivaci)";
$txt['nb_folders'] = "Pocet složek";
$txt['nb_items'] = "Pocet položek";
$txt['new_label'] = "Nové označení";
$txt['new_role_title'] = "Nový název role";
$txt['new_user_title'] = "Přidat nového uživatele";
$txt['no'] = "Ne";
$txt['nom'] = "Jméno";
$txt['none'] = "Nic/žádný";
$txt['none_selected_text'] = "Nevybráno nic";
$txt['not_allowed_to_see_pw'] = "Tato položka pro Vás není viditelná!";
$txt['not_allowed_to_see_pw_is_expired'] = "Lhůta platnosti této položky vypršela!";
$txt['not_defined'] = "Není definováno";
$txt['no_last_items'] = "Žádné položky nebyly nahlédnuty.";
$txt['no_restriction'] = "Bez omezení";
$txt['numbers'] = "Číslice";
$txt['number_of_used_pw'] = "Počet nových hesel, který uživatel musí zadat před znovupoužitím hesla starého.";
$txt['ok'] = "OK";
$txt['pages'] = "Stránky";
$txt['pdf_del_date'] = "Soubor PDF vytvořen";
$txt['pdf_del_title'] = "Protokol o obnovení hesel";
$txt['pdf_download'] = "Stáhnout soubor";
$txt['personal_folder'] = "Osobní složka";
$txt['personal_salt_key'] = "Váš osobní klíč SALTKEY";
$txt['personal_salt_key_empty'] = "Nebyl zadán žádný osobní klíč SALTKEY!";
$txt['personal_salt_key_info'] = "Tento klíč bude používán pro zašifrování a odšifrování Vašich hesel.<br>Není uložen v databázi. Kromě Vás by jej nikdo neměl znát.<br>Bezpečně jej uložte a neztraťte!";
$txt['please_update'] = "Prosím aktualizujte aplikaci cPassMan!";
$txt['print'] = "Vytisknout";
$txt['print_out_menu_title'] = "Vytisknout seznam Vašich položek do citelného souboru";
$txt['print_out_pdf_title'] = "cPassMan - seznam exportovaných položek";
$txt['print_out_warning'] = "Všechna Vaše hesla a důvěrná  data budou zapsána do tohoto souboru nezašifrována jako čitelný text. Tímto přebíráte jako uživatel plnou zodpovědnost za další ochranu těchto dat!";
$txt['pw'] = "Heslo";
$txt['pw_change'] = "Změnit heslo uživatelského účtu";
$txt['pw_changed'] = "Heslo bylo změněno!";
$txt['pw_copied_clipboard'] = "Heslo zkopírováno do paměti";
$txt['pw_copy_clipboard'] = "Zkopírovat heslo do paměti";
$txt['pw_generate'] = "Vytvořit";
$txt['pw_is_expired_-_update_it'] = "Lhůta platnosti této položky vypršela! Musíte změnit její heslo.";
$txt['pw_life_duration'] = "Životnost uživatelských hesel ve dnech do vypršení (zadejte 0 pro trvalá hesla)";
$txt['pw_recovery_asked'] = "Požádal jste nouzové zaslání hesla";
$txt['pw_recovery_button'] = "Zašlete mi mé nové heslo";
$txt['pw_recovery_info'] = "Po kliknutí na následující tlačítko Vám bude po emailu zasláno nové heslo k Vašemu uživatelskému účtu";
$txt['pw_used'] = "Toto heslo již bylo dříve použito!";
$txt['readme_open'] = "Otevřít kompletní soubor README";
$txt['refresh_matrix'] = "Aktualizovat matici";
$txt['renewal_menu'] = "Položky k obnovení";
$txt['renewal_needed_pdf_title'] = "Seznam položek, které musí být obnoveny";
$txt['renewal_selection_text'] = "Vytvořit seznam všech položek, jejichž platnost vyprší:";
$txt['restore'] = "Zrekonstruovat";
$txt['restore'] = "Zrekonstruovat";
$txt['restricted_to'] = "Omezeno na";
$txt['restricted_to_roles'] = "Povolit omezení položek na Uživatele a Role";
$txt['rights_matrix'] = "Matice uživatelských práv";
$txt['roles'] = "Role";
$txt['role_cannot_modify_all_seen_items'] = "Zakázat této roli změnu všech přístupných položek (normální nastavení)";
$txt['role_can_modify_all_seen_items'] = "Povolit této roli změnu všech přístupných položek (nebezpečné nastavení)";
$txt['root'] = "Základ/kořen";
$txt['save_button'] = "Uložit";
$txt['secure'] = "Zabezpečeno";
$txt['select'] = "Vybrat";
$txt['select_folders'] = "Vybrat složky";
$txt['select_language'] = "Zvolte Váš jazyk";
$txt['send'] = "Odeslat";
$txt['settings_anyone_can_modify'] = "Aktivovat pro každou položku možnost úpravy kýmkoliv";
$txt['settings_anyone_can_modify_tip'] = "<span style=\"max-width: 300px;\">Po aktivaci bude do formuláře položky přidána možnost povolit autorovi změnu položky kterýmkoliv uživatelem.</span>";
$txt['settings_kb'] = "Povolit databázi znalostí a zkušeností (beta)";
$txt['settings_kb_tip'] = "<span style='font-size:11px;max-width:300px;'>Aktivací bude přidána stránka, kde můžete vybudovat Vaší databázi znalostí a zkušeností.</span>";
$txt['settings_ldap_domain'] = "Přípona účtu LDAP pro Vaši doménu";
$txt['settings_ldap_domain_controler'] = "Pole LDAP správců domény";
$txt['settings_ldap_domain_controler_tip'] = "<span style=\"max-width: 300px;\">Zadejte více správců, pokud chcete, aby třída rozdělovala dotazy na LDAP na více serverů.<br>Domény musí být odděleny čárkou ( , )!<br>Např.: doména_1,doména_2,doména_3</span>";
$txt['settings_ldap_domain_dn'] = "Kořenové jméno LDAP (dn) Vaší domény";
$txt['settings_ldap_mode'] = "Umožnit autorizaci uživatelů prostřednictvím serveru LDAP";
$txt['settings_ldap_mode_tip'] = "Aktivujte pouze pokud máte server LDAP a chcete jej používat k autorizaci.<br><span style=\"\" 10px;=\"\" max-width:=\"\" 300px;\=\"\">Konfiguraci LDAP je třeba provést manuelně. Musíte upravit soubor <b>adLDAP.php</b> umístěný v <i>/includes/libraries/adLDAP</i>. Pozměňte všechny chráněné parametry mezi řádky 68 až 128 tak, aby odpovídaly konfiguraci Vašeho serveru LDAP.</span>";
$txt['settings_ldap_ssl'] = "Používat LDAP přes SSL (LDAPS)";
$txt['settings_ldap_tls'] = "Používat LDAP přes TLS";
$txt['settings_log_connections'] = "Aktivovat zápis všech uživatelských spojení do deníku";
$txt['settings_maintenance_mode'] = "Přepnout cPassMan do správního režimu";
$txt['settings_maintenance_mode_tip'] = "Tento režim zablokuje přihlášování uživatelů s vyjímkou Správce.";
$txt['settings_manager_edit'] = "Manažeři mohou upravovat a odstraňovat položky, které jsou pro ně viditelné";
$txt['settings_printing'] = "Povolit zápis položek do souboru PDF";
$txt['settings_printing_tip'] = "Po aktivaci bude na domovskou stránku uživatele přidáno tlačítko, které mu umožní zapsat seznam položek do čitelného souboru PDF. Pozor: hesla budou do tohoto souboru zapsána nezašifrovaná.";
$txt['settings_richtext'] = "Umožnit rozšířený text (richtext) v popisu položky";
$txt['settings_richtext_tip'] = "<span style=\"font-size: 11px; max-width: 300px;\">Tímto se aktivuje richtext s BBCode v popisu položky.</span>";
$txt['settings_send_stats'] = "Zasílat autorovi měsíční statistiku o užívání aplikace cPassMan.";
$txt['settings_send_stats_tip'] = "Tyto statistické přehledy jsou zcela anonymní!<br><span style=\"font-size: 10px; max-width: 300px;\">Není zasílána zdrojová adresa IP, pouze následující údaje: počet položek, složek, uživatelů, verze aplikace cPassman, aktivace osobních složek, aktivace LDAP.<br>Děkuji za aktivaci, pomáhá v dalším vývoji aplikace.</span>";
$txt['show'] = "Ukázat";
$txt['show_help'] = "Zobrazit nápovědu";
$txt['show_last_items'] = "Zobrazit nejnovější položky na hlavní stránce";
$txt['size'] = "Délka";
$txt['start_upload'] = "Spustit natahování souboru";
$txt['sub_group_of'] = "Umístit do";
$txt['support_page'] = "Potřebujete-li podporu, obraťte se prosím na <a href=\"%5C%22https://sourceforge.net/projects/communitypasswo/forums%5C%22\" target=\"\&quot;_blank\&quot;\"><u>Fórum</u></a>.";
$txt['symbols'] = "Nealfanumerické znaky";
$txt['tags'] = "Záložky";
$txt['thku'] = "Děkuji, že používáte cPassMan!";
$txt['time_format'] = "Formát časových údajů";
$txt['uncheck_all_text'] = "Nevybrat žádné";
$txt['unlock_user'] = "Uživatelský účet je uzamčen. Chcete tento účet odblokovat?";
$txt['update_needed_mode_admin'] = "Doporučuji aktualizovat Vaši instalaci cPassMan. Klikněte <a href=\"%5C%22install/upgrade.php%5C%22\">ZDE</a>";
$txt['uploaded_files'] = "Stávající soubory";
$txt['upload_button_text'] = "Procházet";
$txt['upload_files'] = "Natáhnout nové soubory";
$txt['url'] = "Adresa URL";
$txt['url_copied'] = "Adresa URL byla zkopírována!";
$txt['used_pw'] = "Použité heslo";
$txt['user'] = "Uživatel";
$txt['users'] = "Uživatelé";
$txt['user_alarm_no_function'] = "Tento uživatel nemá žádné role!";
$txt['user_del'] = "Odstranit uživatelský účet";
$txt['version'] = "Aktuální verze";
$txt['views_confirm_items_deletion'] = "Chcete opravdu vymazat vybrané položky z databáze?";
$txt['views_confirm_restoration'] = "Prosím potvrďte obnovení této položky";
$txt['visibility'] = "Viditelnost";
$txt['yes'] = "Ano";
$txt['your_version'] = "Vaše verze";
?>