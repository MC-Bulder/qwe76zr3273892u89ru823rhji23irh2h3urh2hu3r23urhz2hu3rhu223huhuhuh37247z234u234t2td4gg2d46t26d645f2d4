<?php
#==========================================================================//
#  ____       _       ____  _             _                    _
# |  _ \  ___(_)_ __ |  _ \| |_   _  __ _(_)_ __    _ __   ___| |_
# | | | |/ _ \ | '_ \| |_) | | | | |/ _` | | '_ \  | '_ \ / _ \ __|
# | |_| |  __/ | | | |  __/| | |_| | (_| | | | | |_| | | |  __/ |_
# |____/ \___|_|_| |_|_|   |_|\__,_|\__, |_|_| |_(_)_| |_|\___|\__|
#                                   |___/
#==========================================================================//

class config {
    // Trage hier deine richtigen Mysql-Daten ein.
    // Erstelle die Datenbank, welche du hier angegeben hast über phpmyadmin und rufe die install-Seite auf.
    static $MYSQL_HOST      = 'remotemysql.com';
    static $MYSQL_USER      = 'q38IdaAbRh';
    static $MYSQL_PASSWORD  = 'u5tKExcmCU';
    static $MYSQL_DATABASE  = 'shop';

    // Aktiviere deine Zahlungsmethoden. Ändere den Wert auf "false" wenn du diese Zahlungsmethode nicht besitzt.
    static $ENABLE_PAYPAL   = true;
    static $ENABLE_PAYGOL   = true;

    // Gib deine Serverdaten an. Dies wird auf der Startseite angezeigt. Sollte der Server offline sein, lädt die Startseite nur halb.
    static $SERVER_IP       = 'minesucht.net';
    static $SERVER_PORT     = '25565';

    // Gib hier dein Namen an, wie der Shop heißen soll.
    static $TITLE_NAME      = 'DeinPlugin - Minecraft Shop';

    // Bitte gib hier deine ServiceID von PayGol an
    static $PAYGOL_SERVICEID = "126756134sdwf";

    // Gib dein Titel an, welchen die User sehen, wenn die ein Paket bezahlen wollen.
    static $PAYMENT_TITLE = "Paket(e) bezahlen";

    // Gib hier deine PayPal Email an, um die Zahlungen zu erhalten.
    static $PAYPAY_EMAIL = "mcmasterbulders@gmail.com";


    /**
     * Einrichtungs-Erklärung:
     *
     *
     * Sollten keine Seiten gefunden werden, aktivieren die .htaccess-Datei und mod_rewrite auf deinem Server.
     * Das machst du wie folgt:
     *
     * .htaccess Datei aktivieren:
        1. Gehe im /etc/apache2 Ordner
        2. Bearbeite dort die apache2.conf Datei
        3. Suche folgende Directory: /var/www/
        4. Ändere AllowOverride von None zu All um.
     *
     * mod_rewrite aktivieren:
     *  1. Logge dich mit Putty (Oder anderes..) ein
        2. Gebe folgenden Befehl ein: a2enmod rewrite
        3. Starte anschließend Apache neu.
     *
     * Sollte das anschließend noch immer nicht funktionieren, melde dich bei uns im Support: https://www.deinplugin.net/ticket/create
     *
     *
     *
     * So änderst du das Logo und den Banner:
     *
     * Gehe im assets/img Ordner und ersetze die logo.png und banner.jpg Datei.
     * Die Datein müssen genau so heißen.
     *
     * Ändere auch noch: favicon-16x16.png (Muss genau so heißen)
     * Dieses Logo muss die Maße 16x16 besitzen.
     */

























    // Weiterleitung zur Index Datei (Bitte lassen).
    function returnurl() {
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

        $url = $protocol. $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'];
        $explode = explode("/", $url);

        $return = $explode[0] . '//' . $explode[2] . '/' .$explode[3] . '/index?paymentcomplete=true';

        return $return;
    }

    function errorurl() {
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

        $url = $protocol. $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'];
        $explode = explode("/", $url);

        $return = $explode[0] . '//' . $explode[2] . '/' .$explode[3] . '/index?paymenterror=true';

        return $return;
    }


    // PayPal weiterleitung
    function returnurlPP() {
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

        $url = $protocol. $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'];
        $explode = explode("/", $url);

        $return = $explode[0] . '//' . $explode[2] . '/' .$explode[3] . '/index?paypalcomplete=true';

        return $return;
    }

    function errorurlPP() {
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

        $url = $protocol. $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'];
        $explode = explode("/", $url);

        $return = $explode[0] . '//' . $explode[2] . '/' .$explode[3] . '/index?paymenterror=true';

        return $return;
    }
}