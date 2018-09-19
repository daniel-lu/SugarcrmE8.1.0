<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'Data wysłania',
	'LBL_IN_QUEUE'								=> 'W trakcie',
	'LBL_IN_QUEUE_DATE'							=> 'Data kolejkowania',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Tylko liczby całkowite są dozwolone do oznaczenia liczby wiadomości wysłanych w jednej serii',

	'LBL_ATTACHMENT_AUDIT'						=> ' — wysłano.  Nie zostały zduplikowane lokalnie, aby nie zajmowały dużo miejsca na dysku.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Konfiguruj ustawienia poczty e-mail',
	'LBL_CUSTOM_LOCATION'						=> 'Zdefiniowane przez użytkownika',
	'LBL_DEFAULT_LOCATION'						=> 'Domyślne',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Dodaj informację o niejawności do każdej wiadomości',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Treść informacji o niejawności',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'Uwaga: ta wiadomość jest skierowana wyłączenie do użytku określonych odbiorców i może zawierać treści przeznaczone tylko dla nich. Jakiekolwiek nieautoryzowane ujawnianie, używanie lub dystrybuowanie tych treści jest zabronione. Jeśli nie jesteś adresatem tej wiadomości, usuń jej wszystkie kopie i powiadom nadawcę, aby poprawił dane adresowe. Dziękujemy.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Twórz wiadomość e-mail w tym kodowaniu',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Twórz wiadomość e-mail przy użyciu tego klienta',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Usuń załączniki i powiązane notatki z usuniętymi wiadomościami',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Wypełnij, używając ustawień domyślnych Gmail&#153;',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Liczba wiadomości wysyłanych w serii:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Włączyć SMTP przez SSL?',
	'LBL_EMAIL_USER_TITLE'						=> 'Ustawienia domyślne poczty użytkownika',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Ustawienia poczty wychodzącej',
	'LBL_EMAILS_PER_RUN'						=> 'Liczba wiadomości wysyłanych w serii:',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'Kampania',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Przetworzona',
	'LBL_LIST_FORM_TITLE'						=> 'Kolejka',
	'LBL_LIST_FROM_EMAIL'						=> 'Adres e-mail nadawcy',
	'LBL_LIST_FROM_NAME'						=> 'Nazwa nadawcy',
	'LBL_LIST_IN_QUEUE'							=> 'W trakcie',
	'LBL_LIST_MESSAGE_NAME'						=> 'Wiadomość marketingowa',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Adres odbiorcy',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Nazwa odbiorcy',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Próby wysłania',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Data wysłania',
	'LBL_LIST_USER_NAME'						=> 'Nazwa użytkownika',
	'LBL_LOCATION_ONLY'							=> 'Lokalizacja',
	'LBL_LOCATION_TRACK'						=> 'Lokalizacja plików śledzenia kampanii (np. campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Zachowaj kopię wiadomości kampanii:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Czy chcesz zachować kompletne kopie <bold>WSZYSTKICH</bold> wiadomości wysłanych podczas wszystkich kampanii? <bold>Zaleca się pozostawienie domyślnego ustawienia opcji — NIE</bold>.  Wybranie wartości NIE spowoduje tylko zapisanie wysyłanego wzoru i niezbędnych zmiennych do odtworzenia indywidualnej wiadomości.',
	'LBL_MAIL_SENDTYPE'							=> 'Serwer poczty elektronicznej:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Użyj uwierzytelnienia SMTP:',
	'LBL_MAIL_SMTPPASS'							=> 'Hasło:',
	'LBL_MAIL_SMTPPORT'							=> 'Port SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'Serwer poczty SMTP:',
	'LBL_MAIL_SMTPUSER'							=> 'Nazwa użytkownika:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Wybierz dostawcę usług pocztowych',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Hasło poczty Yahoo!',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'ID poczty Yahoo!',
	'LBL_GMAIL_SMTPPASS'					=> 'Hasło poczty Gmail',
	'LBL_GMAIL_SMTPUSER'					=> 'Adres e-mail poczty Gmail',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Hasło poczty Exchange',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Nazwa użytkownika poczty Exchange',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Port serwera poczty Exchange',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Serwer poczty Exchange',
	'LBL_EMAIL_LINK_TYPE'				=> 'Klient poczty',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Klient pocztowy Sugar:</b> Wyślij wiadomość e-mail, używając klienta pocztowego w aplikacji Sugar.<br>Ta opcja jest dostępna tylko, jeśli administrator skonfigurował ustawienia poczty e-mail w sposób umożliwiający wykorzystanie tej opcji. W razie pytań skontaktuj się z administratorem.<br><b>Zewnętrzny klient pocztowy:</b> Wyślij wiadomość e-mail, używając klienta pocztowego spoza aplikacji Sugar, np. Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Identyfikator marketingowy',
    'LBL_MODULE_ID'                             => 'Zarządzanie pocztą',
	'LBL_MODULE_NAME'							=> 'Ustawienia poczty e-mail',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Ustawienia poczty e-mail',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Konfiguruj ustawienia kampanii e-mailowej',
	'LBL_MODULE_TITLE'							=> 'Zarządzanie kolejkowaniem poczty wychodzącej',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Jeśli opcja jest włączona, do użytkownika wysyłane będą powiadomienia e-mail o przydzieleniu rekordu do niego.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Adres nadawcy:',
	'LBL_NOTIFY_FROMNAME' 						=> 'Nazwa nadawcy:',
	'LBL_NOTIFY_ON'								=> 'Powiadomienia o przydziałach',
	'LBL_ALLOW_USER_EMAIL_ACCOUNT'				=> 'Zezwalaj użytkownikom na konfigurację kont e-mail',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Wyślij powiadomienia domyślnie dla nowych Użytkowników',
	'LBL_NOTIFY_TITLE'							=> 'Opcje poczty e-mail',
	'LBL_OLD_ID'								=> 'Dawne Id',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Opcje wiadomości wychodzących',
	'LBL_RELATED_ID'							=> 'Powiązane Id',
	'LBL_RELATED_TYPE'							=> 'Powiązany typ',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Zapisz wiadomości wychodzące',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Wyszukiwanie wykonane',
	'LBL_SEARCH_FORM_TITLE'						=> 'Wyszukiwanie wiadomości oczekujących na wysłanie',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Obejrzyj przetwarzane wiadomości',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Obejrzyj wiadomości oczekujące na wysłanie',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Wartość zmiennej site_url w pliku Config.php',
	'TXT_REMOVE_ME_ALT'							=> 'Aby usunąć siebie z listy mailingowej, idź do',
	'TXT_REMOVE_ME_CLICK'						=> 'kliknij tutaj',
	'TXT_REMOVE_ME'								=> 'Aby usunąć siebie z tej listy mailingowej',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'W powiadomieniach e-mail jako nadawcę umieść użytkownika przydzielającego rekord',
    'LBL_EMAIL_OPT_OUT_DEFAULT' => 'Domyślnie rezygnuj z nowych adresów e-mail',

	'LBL_SECURITY_TITLE'						=> 'Ustawienia zabezpieczeń wiadomości',
	'LBL_SECURITY_DESC'							=> 'Ustawienia zabezpieczeń dla wiadomości kampanii.',
	'LBL_SECURITY_APPLET'						=> 'Tag apletu',
	'LBL_SECURITY_BASE'							=> 'Tag bazy',
	'LBL_SECURITY_EMBED'						=> 'Tag osadzony',
	'LBL_SECURITY_FORM'							=> 'Tag formularza',
	'LBL_SECURITY_FRAME'						=> 'Tag ramki',
	'LBL_SECURITY_FRAMESET'						=> 'Tag zestawu ramek',
	'LBL_SECURITY_IFRAME'						=> 'Tag iFrame',
	'LBL_SECURITY_IMPORT'						=> 'Tag importu',
	'LBL_SECURITY_LAYER'						=> 'Tag warstwy',
	'LBL_SECURITY_LINK'							=> 'Tag linku',
	'LBL_SECURITY_OBJECT'						=> 'Tag obiektu',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Wybierz domyślne ustawienia minimalnych zabezpieczeń Outlooka (błędy na prawidłowo wyświetlonej stronie).',
	'LBL_SECURITY_SCRIPT'						=> 'Tag skryptu',
	'LBL_SECURITY_STYLE'						=> 'Tag stylu',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Zaznacz wszystkie opcje',
	'LBL_SECURITY_XMP'							=> 'Tag Xmp',
    'LBL_YES'                                   => 'Tak',
    'LBL_NO'                                    => 'Nie',
    'LBL_PREPEND_TEST'                          => '[Test]:',
	'LBL_SEND_ATTEMPTS'							=> 'Próby wysłania',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Skonfiguruj domyślny serwer poczty wychodzącej dla wysyłania powiadomień za pomocą wiadomości e-mail wraz z alertami workflow.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Zezwalaj użytkownikom na używanie tego konta do poczty wychodzącej:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Jeżeli ta opcja została zaznaczona, wszyscy użytkownicy będą mogli wysyłać wiadomości e-mail, używając tego samego konta<br> poczty wychodzącej, które jest wykorzystywane do wysyłania alertów i powiadomień. Jeżeli opcja ta nie została zaznaczona,<br> użytkownicy będą mogli używać swoich prywatnych kont do wysyłania poczty.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Gdy ta opcja jest włączona, nazwa przypisanego użytkownika i adres e-mail będą dodawane do pola nadawcy wiadomości e-mail. Ta opcja może nie działać z serwerami SMTP, które nie pozwalają wysyłać wiadomości e-mail z innych kont pocztowych niż konto serwera.',
    'LBL_EMAIL_OPT_OUT_DEFAULT_TOOLTIP' => 'Po dodaniu nowego adresu e-mail zostanie on automatycznie wycofany. Wiadomości e-mail kampanii nie mogą być dostarczane na wycofane adresy. Zmiana tego ustawienia nie wpłynie na istniejące adresy e-mail.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Pomoc' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Nieautoryzowany dostęp do modułu administracyjnego.',
    'LBL_INVALID_ENTRY_POINT' => 'Nieprawidłowy punkt wejścia',
);
