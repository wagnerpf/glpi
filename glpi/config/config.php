<?php
/*

  ----------------------------------------------------------------------
GLPI - Gestionnaire libre de parc informatique
 Copyright (C) 2002 by the INDEPNET Development Team.
 Bazile Lebeau, baaz@indepnet.net - Jean-Mathieu Dol�ans, jmd@indepnet.net
 http://indepnet.net/   http://glpi.indepnet.org
 ----------------------------------------------------------------------
 Based on:
IRMA, Information Resource-Management and Administration
Christian Bauer, turin@incubus.de

 ----------------------------------------------------------------------
 LICENSE

This file is part of GLPI.

    GLPI is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    GLPI is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with GLPI; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 ----------------------------------------------------------------------
 Original Author of file:
 Purpose of file:
 ----------------------------------------------------------------------
 //And Julien Dombre for externals identifications
// And Marco Gaiarin for ldap features
*/

 
include ("_relpos.php");
// Basic MYSQL configuration change as you need/want.
// Configuration standard changez selon vos besoins.
require_once ("config_db.php");

//Statics config options
// options d'installation statiques
// dicts
// dictionnaires
$cfg_install["languages"] = array("english","deutsch","french","italian");


// Report generation
// Default Report included
$report_list["default"]["name"] = "Rapport par d�faut";
$report_list["default"]["file"] = "reports/default.php";

// Vous pouvez faire vos propres rapports :
// My Own Report:
// $report_list["my_own"]["name"] = "My Own Report";
// $report_list["my_own"]["file"] = "reports/my_own.php";


// Rapport ajout�s par GLPI V0.2
$report_list["Maintenance"]["name"] = "Maintenance";
$report_list["Maintenance"]["file"] = "reports/maintenance.php";
$report_list["Par_annee"]["name"] = "Par date";
$report_list["Par_annee"]["file"] = "reports/parAnnee.php";
$report_list["excel"]["name"] = "Excel";
$report_list["excel"]["file"] = "reports/geneExcel.php";

// *************************** El�ments optionnels  **********************
// ***********************************************************************
// ***********************************************************************

// Navigation Functions
// Fonctions du menu
class baseFunctions {
	// Could have inventory, maintain, admin and settings, 
	//changes these values on the dicts on header menu.

	var $inventory	= true;

	var $maintain	= true;

	var $settings	= true;
}

//Options g�r�e dynamiquement, ne pas toucher cette partie.
//Options from DB, do not touch this part.

$db = new DB;
$query = "select * from glpi_config";
$result = $db->query($query);
if($result)
{

//root document
//document root
$cfg_install["root"] = $db->result($result,0,"root_doc");

// Gestion de source d'information alternatives pour le login
// telles que des serveurs de mail en imap pop...
// ports standards : pop 110 , imap 993
// Dans tous les cas le dernier type de login test� est la base de donn�es
// Dans le cas o� le login est incorrect dans la base mais est correct
// sur la source alternative, l'utilisateur est ajout� ou son mot de passe
// est modifi�
// Si plusieurs sources alternatives sont d�finies, seule la premi�re
// fournissant un login correct est utilis�

$cfg_login['imap']['auth_server'] = $db->result($result,0,"imap_auth_server");
$cfg_login['imap']['host'] = $db->result($result,0,"imap_host");

// LDAP setup.
// We can use LDAP both for authentication and for user information

$cfg_login['ldap']['host'] = $db->result($result,0,"ldap_host");
$cfg_login['ldap']['basedn'] = $db->result($result,0,"ldap_basedn");

$cfg_login['ldap']['rootdn'] = $db->result($result,0,"ldap_rootdn");
$cfg_login['ldap']['pass'] = $db->result($result,0,"ldap_pass");

// some lDAP server (eg, M$ Active Directory) does not like anonymous
// bind
//$cfg_login['ldap']['rootdn'] = "cn=admin,ou=People,dc=sv,dc=lnf,dc=it";
//$cfg_login['ldap']['pass'] = "secret";
// relation between the GLPI users table field and the LDAP field

$cfg_login['ldap']['fields'] = array( "name" => $db->result($result,0,"ldap_field_name"), "email" => $db->result($result,0,"ldap_field_email"), "location" => $db->result($result,0,"ldap_field_location"), "phone" => $db->result($result,0,"ldap_field_phone"), "realname" => $db->result($result,0,"ldap_field_realname"));



//other sources
//$cfg_login['other_source']...



// Utilisation des fonctions mailing ou non, mettez 1 si vous voulez utiliser les 
//notifications par mail.
//Necessite que votre fonction mail() fonctionne.
$cfg_features["mailing"]	= $db->result($result,0,"mailing");	
// Addresse de l'administrateur (obligatoire si mailing activ�)

$cfg_mailing["admin_email"]	= $db->result($result,0,"admin_email");

// Signature for automatic generated E-Mails
$cfg_mailing["signature"]	= $db->result($result,0,"mailing_signature");

// A utiliser  uniquement si $cfg_features["mailing"] = 1;
// D�finition des envois des mails d'informations
// admin : vers le mail $cfg_features["admin_email"]
// all_admin : tous les utilisateurs en mode admin
// all_normal : toutes les utilisateurs en mode normal
// attrib : personne responsable de la tache
// user : utilisateur demandeur
// 1 pour l'envoi et 0 dans le cas contraire 

$cfg_mailing["new"]["admin"]= $db->result($result,0,"mailing_new_admin");
$cfg_mailing["attrib"]["admin"]=$db->result($result,0,"mailing_attrib_admin");
$cfg_mailing["followup"]["admin"]=$db->result($result,0,"mailing_followup_admin");
$cfg_mailing["finish"]["admin"]=$db->result($result,0,"mailing_finish_admin");

$cfg_mailing["new"]["all_admin"]=$db->result($result,0,"mailing_new_all_admin");
$cfg_mailing["attrib"]["all_admin"]=$db->result($result,0,"mailing_attrib_all_admin");
$cfg_mailing["followup"]["all_admin"]=$db->result($result,0,"mailing_followup_all_admin");
$cfg_mailing["finish"]["all_admin"]=$db->result($result,0,"mailing_finish_all_admin");


$cfg_mailing["new"]["all_normal"]=$db->result($result,0,"mailing_new_all_normal");
$cfg_mailing["attrib"]["all_normal"]=$db->result($result,0,"mailing_attrib_all_normal");
$cfg_mailing["followup"]["all_normal"]=$db->result($result,0,"mailing_followup_all_normal");
$cfg_mailing["finish"]["all_normal"]=$db->result($result,0,"mailing_finish_all_normal");

$cfg_mailing["attrib"]["attrib"]=$db->result($result,0,"mailing_attrib_attrib");
$cfg_mailing["followup"]["attrib"]=$db->result($result,0,"mailing_followup_attrib");
$cfg_mailing["finish"]["attrib"]=$db->result($result,0,"mailing_finish_attrib");
$cfg_mailing["new"]["attrib"] = $db->result($result,0,"mailing_new_attrib");

$cfg_mailing["new"]["user"]=$db->result($result,0,"mailing_new_user");
$cfg_mailing["attrib"]["user"]=$db->result($result,0,"mailing_attrib_user");
$cfg_mailing["followup"]["user"]=$db->result($result,0,"mailing_followup_user");
$cfg_mailing["finish"]["user"]=$db->result($result,0,"mailing_finish_user");



// Features configuration

// Log level :
// Niveau de log :

// 1 - Critical (login failures) |  (erreur de loging seulement)
// 2 - Severe - not used  | (non utilis�)
// 3 - Important - (sucessfull logins)  |  importants (loging r�ussis)
// 4 - Notice (updates, adds, deletes, tracking) | classique
// 5 - Junk (i.e., setup dropdown fields, update users or templates) | log tout (ou presque)
$cfg_features["event_loglevel"]	= $db->result($result,0,"event_loglevel");

// Show jobs at login.
// Montrer les interventions au loging (1 = oui | 0 = non)
$cfg_features["jobs_at_login"]	= $db->result($result,0,"jobs_at_login");

// Show last num_of_events on login.
// Nombre des derniers evenements presents dans le tableau au loging
$cfg_features["num_of_events"]	= $db->result($result,0,"num_of_events");

//++ not on the config
// Send Expire Headers and set Meta-Tags for proper content expiration.
$cfg_features["sendexpire"]		= $db->result($result,0,"sendexpire");

// In listings, cut long text fields after cut characters.
$cfg_features["cut"]			= $db->result($result,0,"cut");	

// Expire events older than this days at every login
// (only admin-level login, set to 0 to disable expiration).
// Temps en jours durant lequel on log les actions ayant eu lieu
// mettez cette variable a 0 pour conserver tous les logs (prend beaucoup de place dans la bdd)
$cfg_features["expire_events"]	= $db->result($result,0,"expire_events");

// Threshold for long listings, activates pager.
//Nombre d'occurence (ordinateurs, imprimantes etc etc...) qui apparaitrons dans
//la liste de recherche par page.

$cfg_features["list_limit"]		= $db->result($result,0,"list_limit");	

// version number
// numero de version

$cfg_install["version"]		= $db->result($result,0,"version");
$cfg_layout["logotxt"]		= $db->result($result,0,"logotxt");

}
?>
