<?php
session_start();
error_reporting(0);
function rewrite_urls($change){
  $match = [

    '/restaurants.php\?id=([0-9]+)&t=([A-Za-z0-9_-]+)/',
    '/restaurants.php/',

    '/cuisines.php\?id=([0-9]+)&t=([0-9a-zA-z]+)/',
    '/cuisines.php/',

    '/pages.php\?id=([0-9]+)&t=([0-9a-zA-z]+)/',
    '/plans.php/',
    '/cart.php/',
    '/myorders.php/',
    '/userdetails.php\?id=([0-9]+)/',
    '/userdetails.php/',

    '/restaurant.php\?pg=([a-zA-z]+)&request=([a-zA-z]+)&id=([0-9]+)/',
    '/restaurant.php\?pg=([a-zA-z]+)&request=([a-zA-z]+)/',
    '/restaurant.php\?pg=([a-zA-z]+)/',
    '/restaurant.php/',

  ];
  $replace = [

    'restaurants/$1/$2',
    'restaurants',

    'cuisines/$1/$2',
    'cuisines',

    'pages/$1/$2',
    'plans',
    'cart',
    'myorders',
    'userdetails/$1',
    'userdetails',

    'restaurant/$1/$2/$3',
    'restaurant/$1/$2',
    'restaurant/$1',
    'restaurant',

  ];

  $change = preg_replace($match, $replace, $change);

	return $change;
}
ob_start("rewrite_urls");


# Language
$lang = [];
$lang["rtl"] = false;
$lang["lang"] = "fr";
$lang["close"] = "Fermer";
$lang["loading"] = "Chargement...";
$lang["timedate"]["time_second"] = "seconde";
$lang["timedate"]["time_minute"] = "minute";
$lang["timedate"]["time_hour"] = "heure";
$lang["timedate"]["time_day"] = "journée";
$lang["timedate"]["time_week"] = "la semaine";
$lang["timedate"]["time_month"] = "mois";
$lang["timedate"]["time_year"] = "année";
$lang["timedate"]["time_decade"] = "décennie";
$lang["timedate"]["time_ago"] = "depuis";

$lang["menu"]["home"] = "Accueil";
$lang["menu"]["forms"] = "Formes";
$lang["menu"]["about"] = "À propos de nous";
$lang["menu"]["plans"] = "Des plans";
$lang["menu"]["welcome"] = "Bienvenue";
$lang["menu"]["new"] = "Nouvelle enquête";
$lang["menu"]["admin"] = "Administration";
$lang["menu"]["info"] = "Gérer les informations";
$lang["menu"]["logout"] = "Se déconnecter";
$lang["menu"]["signin"] = "se connecter";

$lang["login"]["username"] = "Votre nom d'utilisateur ou e-mail";
$lang["login"]["password"] = "Votre mot de passe";
$lang["login"]["keep"] = "Rester connecté";
$lang["login"]["button"] = "Se connecter";
$lang["login"]["footer"] = "Vous n'avez pas de compte?";
$lang["login"]["footer_l"] = "Inscription gratuite";
$lang["login"]["alert"]["required"] = "Vous avez laissé votre nom d'utilisateur ou votre mot de passe vide!";
$lang["login"]["alert"]["moderat"] = "L'adhésion a été interdite par l'administrateur, si vous pensez que c'est une erreur, n'hésitez pas à nous contacter.";
$lang["login"]["alert"]["activation"] = "L'adhésion doit être activée par e-mail.";
$lang["login"]["alert"]["approve"] = "L'adhésion doit être approuvée par l'administration.";
$lang["login"]["alert"]["success"] = "Vous êtes connecté avec succès, nous vous souhaitons de bons moments.";
$lang["login"]["alert"]["social"] = "Il y a un problème avec votre identifiant social, le nom d'utilisateur avec lequel vous souhaitez vous connecter n'est pas le vôtre ou existe déjà avec un identifiant social différent!";
$lang["login"]["alert"]["error"] = "Le nom d'utilisateur ou le mot de passe n'est pas disponible!";


$lang["signup"]["username"] = "Ton nom d'utilisateur";
$lang["signup"]["password"] = "Votre mot de passe";
$lang["signup"]["email"] = "Votre email";
$lang["signup"]["button"] = "S'inscrire";
$lang["signup"]["footer"] = "Avez-vous un compte?";
$lang["signup"]["footer_l"] = "se connecter";
$lang["signup"]["alert"]["required"] = "Tous les champs marqués d'un * sont obligatoires!";
$lang["signup"]["alert"]["char_username"] = "Le nom d'utilisateur ne doit contenir que des lettres!";
$lang["signup"]["alert"]["limited_username"] = "Le nom d'utilisateur doit être limité entre 3 et 15 caractères!";
$lang["signup"]["alert"]["exist_username"] = "Le nom d'utilisateur existe déjà!";
$lang["signup"]["alert"]["limited_pass"] = "Le mot de passe doit être limité entre 6 et 12 caractères!";
$lang["signup"]["alert"]["repass"] = "Le nouveau mot de passe doit correspondre au mot de passe!";
$lang["signup"]["alert"]["check_email"] = "Veuillez saisir un e-mail valide!";
$lang["signup"]["alert"]["exist_email"] = "L'adresse e-mail existe déjà!";
$lang["signup"]["alert"]["birth"] = "Votre date de naissance doit être comprise entre le 1-1-2005 et le 1-1-1942!";
$lang["signup"]["alert"]["success"] = "Le processus d'inscription s'est terminé avec succès.";
$lang["signup"]["alert"]["success1"] = "Le processus d'inscription s'est terminé avec succès. Mais, encore besoin d'approbation par l'administration.";
$lang["signup"]["alert"]["success2"] = "Le processus d'inscription s'est terminé avec succès. Mais, encore besoin d'activer par e-mail.";
$lang["signup"]["alert"]["error"] = "Le nom d'utilisateur ou le mot de passe n'est pas disponible!";


$lang["details"]["title"] = "Gérer les infos:";
$lang["details"]["firstname"] = "Ton prénom";
$lang["details"]["lastname"] = "Votre nom de famille";
$lang["details"]["username"] = "Modifier le nom d'utilisateur";
$lang["details"]["password"] = "Modifier le mot de passe";
$lang["details"]["email"] = "Modifier l'e-mail";
$lang["details"]["male"] = "Masculin";
$lang["details"]["female"] = "Femelle";
$lang["details"]["country"] = "Pays";
$lang["details"]["state"] = "État / Région";
$lang["details"]["city"] = "Ville";
$lang["details"]["address"] = "Adresse complète";
$lang["details"]["image_n"] = "Aucune image choisie ...";
$lang["details"]["image_c"] = "Choisissez l'image";
$lang["details"]["button"] = "Envoyer des informations";
$lang["details"]["alert"]["success"] = "Le processus de modification des informations s'est terminé avec succès.";


$lang["survey"]["close_h"] = "Cette enquête est actuellement clôturée.";
$lang["survey"]["close_p"] = "Vous souhaitez créer votre propre enquête?";
$lang["survey"]["button"] = "INSCRIPTION GRATUITE";
$lang["survey"]["back"] = "Arrière";
$lang["survey"]["next"] = "Prochain";
$lang["survey"]["alert"]["error"] = "requis pour répondre!";


$lang["alerts"]["no-data"] = "Aucune donnée disponible!";
$lang["alerts"]["permission"] = "Vous ne pouvez pas accéder à cette page car vous devez mettre à jour votre plan!";
$lang["alerts"]["wrong"] = "Quelque chose a mal tourné!";
$lang["alerts"]["required"] = "Tous les champs marqués d'un * sont obligatoires!";
$lang["alerts"]["danger"] = "Oh snap!";
$lang["alerts"]["success"] = "Bien joué!";
$lang["alerts"]["warning"] = "Attention!";
$lang["alerts"]["info"] = "La tête haute!";

$lang["responses"]["title"] = "Mes réponses au sondage";
$lang["responses"]["btn_1"] = "Voir Rapport";
$lang["responses"]["btn_2"] = "Modifier l'enquête";

$lang["rapports"]["title"] = "Titre:";
$lang["rapports"]["btn1"] = "Créer une enquête";
$lang["rapports"]["btn2"] = "Modifier l'enquête";
$lang["rapports"]["stats_d"] = "Statistiques des 7 derniers jours";
$lang["rapports"]["stats_m"] = "Statistiques pour cette année";
$lang["rapports"]["views"] = "Vues:";
$lang["rapports"]["responses"] = "Réponses:";
$lang["rapports"]["rate"] = "Taux complété:";
$lang["rapports"]["start"] = "Date de début:";
$lang["rapports"]["end"] = "Date de fin:";
$lang["rapports"]["last_r"] = "Dernière réponse:";
$lang["rapports"]["days"] = "Les 7 derniers jours";
$lang["rapports"]["months"] = "Mois";
$lang["rapports"]["results"] = "Tous les résultats";
$lang["rapports"]["export"] = "Exporter des données";
$lang["rapports"]["by"] = "Répondre par";
$lang["rapports"]["people"] = "gens";
$lang["rapports"]["alert"]["success"] = "Le processus de modification des informations s'est terminé avec succès.";


$lang["plans"]["title"] = "Tarification simple pour tout le monde!";
$lang["plans"]["desc"] = "Prix ​​construit pour les entreprises de toutes tailles. Sachez toujours ce que vous allez payer. Tous les plans sont livrés avec 100% de remboursement guarane.";
$lang["plans"]["month"] = "/par mois";
$lang["plans"]["btn"] = "Commencer";
$lang["plans"]["alert"]["success"] = "Vos paiements ont été calculés!";


$lang["new"]["title"] = "Créer une nouvelle enquête";
$lang["new"]["questions"] = "Des questions";
$lang["new"]["welcome"] = "Page d'accueil";
$lang["new"]["thanks"] = "Page de remerciements";
$lang["new"]["design"] = "Conception";
$lang["new"]["stitle"] = "Titre de l'enquête";
$lang["new"]["start"] = "Date de début de l'enquête";
$lang["new"]["end"] = "Date de fin de l'enquête";
$lang["new"]["url"] = "Rediriger l'URL";
$lang["new"]["private"] = "Ce surevey est privé (ne prend que par URL)";
$lang["new"]["unpub"] = "Non publié";
$lang["new"]["ip"] = "Restriction IP";
$lang["new"]["start_q"] = "Commencez à poser des questions!";
$lang["new"]["new_step"] = "Ajouter une nouvelle étape";
$lang["new"]["new_q"] = "Nouvelle question";
$lang["new"]["new_qpl"] = "Écrivez votre question";
$lang["new"]["new_qde"] = "Rédigez une brève description de votre question";
$lang["new"]["new_qre"] = "Question requise pour répondre";
$lang["new"]["new_qln"] = "Réponses sur la même ligne";
$lang["new"]["new_a"] = "Nouvelles réponses";
$lang["new"]["new_abtn"] = "Ajouter un nouveau";
$lang["new"]["new_as1"] = "Texte sur une seule ligne";
$lang["new"]["new_as2"] = "Texte du paragraphe";
$lang["new"]["new_as3"] = "Choix multiple (case à cocher)";
$lang["new"]["new_as4"] = "Multi choix (Radio)";
$lang["new"]["new_as5"] = "Échelle de notation";
$lang["new"]["new_as6"] = "Date heure";
$lang["new"]["new_as7"] = "Numéro de téléphone";
$lang["new"]["new_as8"] = "Pays";
$lang["new"]["new_as9"] = "Adresse email";
$lang["new"]["new_asi"] = "Icône";
$lang["new"]["new_aspl"] = "espace réservé";
$lang["new"]["new_asck"] = "Écrivez un nom";
$lang["new"]["wp"] = "Page d'accueil";
$lang["new"]["wp_h"] = "Headling";
$lang["new"]["wp_btn"] = "Texte du bouton Démarrer";
$lang["new"]["wp_icon"] = "Icône du bouton Démarrer";
$lang["new"]["tx"] = "Page de remerciements";
$lang["new"]["tx_h"] = "Headling";
$lang["new"]["tx_btn"] = "Texte du bouton de fin";
$lang["new"]["tx_icon"] = "Icône du bouton de fin";
$lang["new"]["send"] = "Envoyer l'enquête";
$lang["new"]["design_bs"] = "Ombre du bouton:";
$lang["new"]["design_bb"] = "Bordure du bouton:";
$lang["new"]["design_si"] = "Taille:";
$lang["new"]["design_s"] = "Style:";
$lang["new"]["design_c"] = "Couleur";
$lang["new"]["design_btg"] = "Arrière-plan du bouton:";
$lang["new"]["design_g"] = "Pente";
$lang["new"]["design_n"] = "Ordinaire";
$lang["new"]["design_btc"] = "Couleur du texte Butoon:";
$lang["new"]["design_sbg"] = "Contexte de l'enquête:";
$lang["new"]["design_stbg"] = "Contexte de l'étape:";
$lang["new"]["design_ibg"] = "Contexte d'entrée:";
$lang["new"]["design_yes"] = "Oui";
$lang["new"]["design_no"] = "Non";
$lang["new"]["alert"]["error"] = "Erreur! Certains champs d'enquête sont obligatoires!";
$lang["new"]["alert"]["error1"] = "Erreur! Veuillez vous assurer d'ajouter {var}!";
$lang["new"]["alert"]["error2"] = "Erreur! Veuillez vous assurer d'ajouter des questions à l'étape";
$lang["new"]["alert"]["error3"] = "Erreur! Veuillez vous assurer que la question {var} comporte plus de 8 lettres!";
$lang["new"]["alert"]["error4"] = "Erreur! Veuillez vous assurer d'ajouter des réponses à la question";
$lang["new"]["alert"]["error5"] = "Erreur! Veuillez vous assurer que toutes les réponses à la question {var} ont une valeur supérieure à 3 lettres";
$lang["new"]["alert"]["success"] = "Succès! terminé!!";


$lang["edit"]["title"] = "Modifier une nouvelle enquête";
$lang["edit"]["alert"]["success"] = "Vos paiements ont été calculés!";


$lang["mysurvys"]["title"] = "Mes sondages";
$lang["mysurvys"]["alltitle"] = "Tous les sondages";
$lang["mysurvys"]["create"] = "Créer une enquête";
$lang["mysurvys"]["status"] = "Statut";
$lang["mysurvys"]["name"] = "Nom de l'enquête";
$lang["mysurvys"]["views"] = "Vues";
$lang["mysurvys"]["responses"] = "Réponses";
$lang["mysurvys"]["rate"] = "Tarif complet";
$lang["mysurvys"]["created"] = "Créé";
$lang["mysurvys"]["last_r"] = "Dernière réponse";
$lang["mysurvys"]["op_view"] = "Afficher l'enquête";
$lang["mysurvys"]["op_stats"] = "Statistiques d'enquête";
$lang["mysurvys"]["op_resp"] = "Afficher les réponses";
$lang["mysurvys"]["op_edit"] = "Modifier l'enquête";
$lang["mysurvys"]["op_delete"] = "Supprimer l'enquête";
$lang["mysurvys"]["alert"]["success"] = "Vos paiements ont été calculés!";


$lang["dashboard"]["hello"] = "Bonjour,";
$lang["dashboard"]["welcome"] = "Bienvenue à nouveau dans votre tableau de bord.";
$lang["dashboard"]["stats_line_d"] = "Statistiques des 7 derniers jours";
$lang["dashboard"]["stats_line_m"] = "Statistiques pour cette année";
$lang["dashboard"]["stats_bar_d"] = "Statistiques des 7 derniers jours";
$lang["dashboard"]["stats_bar_m"] = "Statistiques pour cette année";
$lang["dashboard"]["surveys"] = "Enquêtes";
$lang["dashboard"]["users"] = "Utilisateurs";
$lang["dashboard"]["responses"] = "Réponses";
$lang["dashboard"]["questions"] = "Des questions";
$lang["dashboard"]["new_u"] = "Nouveaux utilisateurs (24h)";
$lang["dashboard"]["new_p"] = "Derniers paiements (24h)";
$lang["dashboard"]["new_s"] = "Dernières enquêtes (24h)";
$lang["dashboard"]["u_users"] = "Membres";
$lang["dashboard"]["u_status"] = "Statut";
$lang["dashboard"]["u_username"] = "Nom d'utilisateur";
$lang["dashboard"]["u_plan"] = "Plan";
$lang["dashboard"]["u_credits"] = "Crédits";
$lang["dashboard"]["u_last_p"] = "Dernier paiement";
$lang["dashboard"]["u_registred"] = "Enregistré à";
$lang["dashboard"]["u_updated"] = "Mis à jour à";
$lang["dashboard"]["u_delete"] = "Supprimer l'utilisateur";
$lang["dashboard"]["u_edit"] = "Modifier l'utilisateur";
$lang["dashboard"]["p_title"] = "Paiements";
$lang["dashboard"]["p_user"] = "Utilisateur";
$lang["dashboard"]["p_status"] = "Statut";
$lang["dashboard"]["p_plan"] = "Plan";
$lang["dashboard"]["p_amount"] = "Montant";
$lang["dashboard"]["p_date"] = "Date de paiement";
$lang["dashboard"]["p_txn"] = "TXN";
$lang["dashboard"]["set_title"] = "réglages généraux";
$lang["dashboard"]["set_stitle"] = "Titre du site:";
$lang["dashboard"]["set_keys"] = "Mots clés du site:";
$lang["dashboard"]["set_desc"] = "Description du site:";
$lang["dashboard"]["set_url"] = "URL du site:";
$lang["dashboard"]["set_btn"] = "Paramètres d'envoi";
$lang["dashboard"]["alert"]["success"] = "Le paramètre a été envoyé avec succès.";


$lang["header"]["btn"] = "Découvrir";


function getBaseUrl(){
  $protocol = 'http';
  if ($_SERVER['SERVER_PORT'] == 443 || (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on')) {
    $protocol .= 's';
  }
  $host = $_SERVER['HTTP_HOST'];
  $request = $_SERVER['PHP_SELF'];
  return dirname($protocol . '://' . $host . $request);
}

# Your website path
define("path", getBaseUrl());

//defines.php


//countries.php


//phone.php


//functions.php


//pagination.php


//class.upload.php

?>
@include('layouts.configs.connection')
@include('layouts.configs.defines')
@include('layouts.configs.countries')
@include('layouts.configs.phone')
@include('layouts.configs.functions')
@include('layouts.configs.pagination')
@include('layouts.configs.classupload')
<?php

// include __DIR__."/configs/connection.blade.php";
// include __DIR__."/configs/defines.blade.php";
// include __DIR__."/configs/countries.blade.php";
// include __DIR__."/configs/phone.blade.php";
// include __DIR__."/configs/functions.blade.php";
// include __DIR__."/configs/pagination.blade.php";
// include __DIR__."/configs/class.upload.blade.php";


# Site Details
//db_global();

# User Details
//db_login_details();

if(in_array(page, ['configs', 'login'])){
  header("HTTP/1.0 404 Not Found");
}

# User Client Info
?>
@include('layouts.configs.infoclass')
<?php

# GET Defined vars
$request = (isset($_GET['request']) ? sc_sec($_GET['request']) : '');
$pg      = (isset($_GET['pg']) ? sc_sec($_GET['pg'])           : '');
$token   = (isset($_GET['token']) ? sc_sec($_GET['token'])     : '');
$t       = (isset($_GET['t']) ? sc_sec($_GET['t'])             : '');
$id      = (isset($_GET['id']) ? (int)($_GET['id'])            : '');
$s       = (isset($_GET['s']) ? (int)($_GET['s'])              : '');
$mi      = (isset($_GET['mi']) ? (int)($_GET['mi'])            : '');
$ri      = (isset($_GET['ri']) ? (int)($_GET['ri'])            : '');

# Pagination
$page = (int) (!isset($_GET["page"]) || !$_GET["page"] ? 1 : sc_sec($_GET["page"]));
$limit = 12;
$startpoint = ($page * $limit) - $limit;


# Delete order cookie
if($pg == "ordersuccess"){
	setcookie("addtocart", "", 1);
	unset($_COOKIE['addtocart']);
}

// require 'vendor/autoload.blade.php';

define("get_country_name", (in_array(page, ["response", "stripe"]) ? (isset($ipall['country_name']) ? $ipall['country_name'] : "") : "") );
define("get_country_code", (in_array(page, ["response", "stripe"]) ?  (isset($ipall['country']) ? $ipall['country'] : "") : "") );
define("get_state",        (in_array(page, ["response", "stripe"]) ?  (isset($ipall['region']) ? $ipall['region'] : "") : "") );
define("get_city_name",    (in_array(page, ["response", "stripe"]) ?  (isset($ipall['city']) ? $ipall['city'] : "") : "") );