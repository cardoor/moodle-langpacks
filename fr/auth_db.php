<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_db', language 'fr', branch 'MOODLE_25_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcantconnect'] = 'Impossible de se connecter à la base de données d\'authentification spécifiée.';
$string['auth_dbchangepasswordurl_key'] = 'URL pour changement de mot de passe';
$string['auth_dbdebugauthdb'] = 'Débogage ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Débogage de la connexion ADOdb vers la base de données externe. À utiliser lorsque vous obtenez une page blanche lors de la connexion à Moodle. Ne convient pas à un site en production.';
$string['auth_dbdeleteuser'] = 'Utilisateur {$a->name} id {$a->id} supprimé';
$string['auth_dbdeleteusererror'] = 'Erreur lors de la suppression de l\'utilisateur {$a}';
$string['auth_dbdescription'] = 'Cette méthode utilise une base de données externe afin de vérifier qu\'un nom d\'utilisateur et son mot de passe sont valides. Si le compte concerné est nouveau, il est possible de copier des données provenant de certains champs vers Moodle.';
$string['auth_dbextencoding'] = 'Encodage de la base de données externe';
$string['auth_dbextencodinghelp'] = 'Encodage des caractères utilisé dans la base de données externe';
$string['auth_dbextrafields'] = '<p>Ces zones sont facultatives. Il vous est possible de remplir certains champs de Moodle avec des données provenant des <strong>champs de la base de données externe</strong>.</p><p>Si vous laissez ces zones vides, les valeurs par défaut seront utilisées.</p><p>Dans tous les cas, l\'utilisateur a la possibilité de modifier tous ces champs, une fois connecté.</p>';
$string['auth_dbfieldpass'] = 'Nom du champ contenant les mots de passe';
$string['auth_dbfieldpass_key'] = 'Champ mot de passe';
$string['auth_dbfielduser'] = 'Nom du champ contenant les noms d\'utilisateurs';
$string['auth_dbfielduser_key'] = 'Champ nom d\'utilisateur';
$string['auth_dbhost'] = 'Ordinateur hébergeant la base de données. Si vous utilisez ODBC, veuillez utiliser un entrée système DSN.';
$string['auth_dbhost_key'] = 'Serveur';
$string['auth_dbinsertuser'] = 'Utilisateur {$a->name} id {$a->id} inséré';
$string['auth_dbinsertuserduplicate'] = 'Erreur lors de l\'insertion de l\'utilisateur {$a->username}. Cet utilisateur a déjà été créé via le plugin « {$a->auth} ».';
$string['auth_dbinsertusererror'] = 'Erreur lors de l\'insertion de l\'utilisateur {$a}';
$string['auth_dbname'] = 'Nom de la base de données. À ne pas renseigner si vous utiliser un DSN ODBC.';
$string['auth_dbname_key'] = 'Nom BDD';
$string['auth_dbpass'] = 'Mot de passe pour ce compte';
$string['auth_dbpass_key'] = 'Mot de passe';
$string['auth_dbpasstype'] = '<p>Indiquez le type de hachage utilisé pour le champ mot de passe. L\'algorithme MD5 est utile pour une utilisation conjointe avec d\'autres applications Web telles que PostNuke.</p> <p>Utilisez « Interne » si vous voulez que la base de données externe gère les noms d\'utilisateur et les adresses de courriel, mais que Moodle gère les mots de passe. Dans ce cas, la base de données externe <i>doit</i> comprendre un champ contenant une adresse de courriel, et vous devez lancer régulièrement les scripts admin/cron.php et auth/db/auth_db_sync_users.php. Moodle enverra alors par courriel un mot de passe temporaire aux nouveaux utilisateurs.</p>';
$string['auth_dbpasstype_key'] = 'Format du mot de passe';
$string['auth_dbreviveduser'] = 'Utilisateur {$a->name} id {$a->id} réactivé';
$string['auth_dbrevivedusererror'] = 'Erreur lors de la réactivation de l\'utilisateur {$a}';
$string['auth_dbsetupsql'] = 'Commande pour configuration SQL';
$string['auth_dbsetupsqlhelp'] = 'Commande SQL pour les réglages spéciaux de la base de données, souvent utilisée pour configurer l\'encodage de communication. Pour MySQL et PostgreSQL, on utilise par exemple <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Utilisateur {$a->name} id {$a->id} désactivé';
$string['auth_dbsuspendusererror'] = 'Erreur lors de la désactivation de l\'utilisateur {$a}';
$string['auth_dbsybasequoting'] = 'Utiliser le mode Sybase pour les apostrophes';
$string['auth_dbsybasequotinghelp'] = 'Style Sybase pour l\'échappement des apostrophes. Ce réglage est nécessaire pour les bases de données Oracle, MS SQL et d\'autres types. Ne pas utiliser avec MySQL !';
$string['auth_dbtable'] = 'Nom de la table dans la base de données';
$string['auth_dbtable_key'] = 'Table';
$string['auth_dbtype'] = 'Type de la base de données (pour plus de détails, voir la <a href="http://phplens.com/adodb/supported.databases.html" target="_blank">documentation de ADOdb</a>)';
$string['auth_dbtype_key'] = 'Base de données';
$string['auth_dbupdatinguser'] = 'Mise à jour de l\'utilisateur {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Compte avec accès en lecture à la base de données';
$string['auth_dbuser_key'] = 'Utilisateur BDD';
$string['auth_dbusernotexist'] = 'Impossible de modifier l\'utilisateur {$a}, qui n\'existe pas';
$string['auth_dbuserstoadd'] = 'Enregistrements utilisateurs à ajouter : {$a}';
$string['auth_dbuserstoremove'] = 'Enregistrements utilisateurs à supprimer : {$a}';
$string['pluginname'] = 'Base de données externe';
