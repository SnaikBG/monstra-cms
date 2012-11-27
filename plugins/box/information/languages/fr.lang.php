<?php

    return array(
        'information' => array(
            'Information' => 'Information',
            'Debugging' => 'Déboguage',
            'Name' => 'Nom',
            'Value' => 'Valeur',
            'Security' => 'Securité',
            'System' => 'Système',
            'on' => 'on',
            'off'=> 'off',   
            'Server' => 'Serveur',
            'PHP version' => 'Version de PHP',
            'SimpleXML module' => 'Module SimpleXML',
            'DOM module' => 'Module DOM',
            'Installed' => 'Installé',
            'Not Installed' => 'Non Installé',
            'System version' => 'Version du système',
            'System version ID' => 'ID de la version système',
            'Security check results' => 'Résultat du contrôle de sécurité',
            'The configuration file has been found to be writable. We would advise you to remove all write permissions on defines.php on production systems.' => 
            'Le fichier de configuration est accessible en écriture. Il est fortement conseillé d\'enlever toute les permissions sur le fichier define.php sur votre système de production.',
            'The Monstra core directory (":path") and/or files underneath it has been found to be writable. We would advise you to remove all write permissions. <br/>You can do this on unix systems with: <code>chmod -R a-w :path</code>' => 
            'Le dossier core de Monstra (":path") et/ou les fichiers recursifs sont accessibles en écriture. Il est fortement conseillé d\'enlever toutes les permissions. <br />Vous pouvez le faire sur les systèmes UNIX avec : <code>chmod -R a-w :path</code>',
            'The Monstra .htaccess file has been found to be writable. We would advise you to remove all write permissions. <br/>You can do this on unix systems with: <code>chmod a-w :path</code>' =>
            'Le fichier .htacces de Monstra est accessible en écriture. Il est fortement conseillé d\'enlever toutes les permissions. <br />Vous pouvez le faire sur les systèmes UNIX avec : <code>chmod -R a-w :path</code>',
            'The Monstra index.php file has been found to be writable. We would advise you to remove all write permissions. <br/>You can do this on unix systems with: <code>chmod a-w :path</code>' =>
            'Le fichier index.php de Monstra est accessible en écriture. Il est fortement conseillé d\'enlever toutes les permissions. <br />Vous pouvez le faire sur les systèmes UNIX avec : <code>chmod -R a-w :path</code>',
            'Due to the type and amount of information an error might give intruders when Core::$environment = Core::DEVELOPMENT, we strongly advise setting Core::PRODUCTION in production systems.' =>
            'Due to the type and amount of information an error might give intruders when Core::$environment = Core::DEVELOPMENT, we strongly advise setting Core::PRODUCTION in production systems.',
        )
    );