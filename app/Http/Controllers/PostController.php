<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Restaurants;
use App\Models\Categories;
use App\Models\Items;

use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Crypt;


class PostController extends Controller
{
    public function Accueil() 
    {
        $rtl = false;
        $lang = "fr";$close = "Fermer";
        $loading = "Chargement...";
        $timedate_time_second = "seconde";
        $timedate_time_minute = "minute";
        $timedate_time_hour = "heure";
        $timedate_time_day = "journée";
        $timedate_time_week = "la semaine";
        $timedate_time_month = "mois";
        $timedate_time_year = "année";
        $timedate_time_decade = "décennie";
        $timedate_time_ago = "depuis";
                
        $header_home = "Accueil";
        $header_forms = "Formes";
        $header_about = "À propos";
        $header_welcome = "Bienvenue";
        $header_new = "Nouvelle enquête";
        $header_admin = "Administration";
        $header_info = "Gérer les informations";
        $header_signin = "Connexion";
        $header_explore = "Découvrir";
        $header_restaurants = "Restaurants";
        $header_about = "A propos";
        $header_contact = "Nous-Contacter";
        $header_plans = "Plans";
        $header_login = "Connexion";
        $header_dashboard = "Dashboard";
        $header_my_orders = "Mes Commandes";
        $header_your_restaurant = "Restaurant dashboard";
        $header_testimonial = "Avis Clients";
        $header_testimonial_h = "Votre avis:";
        $header_testimonial_i = "Saisir votre avis";
        $header_testimonial_b = "Envoyer";
        $header_change_password = "Changer Mot de passe";
        $header_change_pass_i1 = "Mot de passe actuel";
        $header_change_pass_i2 = "Nouveau Mot de passe";
        $header_change_pass_bt = "Envoyer";
        $header_edit_details = "Modifier";
        $header_logout = "Déconnexion";
        $header_title = "DonExpress, Livraison Express partout à Lomé";
        $header_subtitle = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamm.";
        $header_btn = "Commander";
        $header_working_hours = "Horaires";
        $header_call = "Nous appeler";
        $header_search = "Rechercher...";
        $header_today = "Aujourdh'ui 09h:00 - 19h:00";
        $header_phone = "+228 70 30 55 66";

        $home_nearby = "Découvrez les restaurants proches de vous";
        $home_nearby_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt ut labore et dolore magna aliqua";
        $home_best = "Les meilleurs menus";
        $home_best_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." ;
        $home_addtocart = "Ajouter au panier";
        $home_more = "Voir plus";
        $home_how = "Comment passer une commande ?";
        $home_how_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt.";
        $home_how1 = "Pick Meals";
        $home_how1_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_how2 = "Choisir un paiement";
        $home_how2_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_how3 = "Livraison Express";
        $home_how3_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_customers = "Ce que disent Nos clients ";
        $home_customers_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_help = "Avez-vous des questions ? Nous pourrons vous aider";
        $home_help_btn = "Envoyer";
        $home_links = "Liens" ;
        $home_unavailable = "Non Disponible";
                
        $login_username = "Votre nom d'utilisateur ou e-mail";
        $login_title = "Connexion";
        $login_password = "Votre mot de passe";
        $login_keep = "Rester connecté";
        $login_btn = "Se connecter";
        $login_footer = "Vous n'avez pas de compte?";
        $login_footer_l = "Inscription gratuite";
        $login_alert_required = "Vous avez laissé votre nom d'utilisateur ou votre mot de passe vide!";
        $login_alert_moderat = "L'adhésion a été interdite par l'administrateur, si vous pensez que c'est une erreur, n'hésitez pas à nous contacter.";
        $login_alert_activation = "L'adhésion doit être activée par e-mail.";
        $login_alert_approve = "L'adhésion doit être approuvée par l'administration.";
        $login_alert_success = "Vous êtes connecté avec succès, nous vous souhaitons de bons moments.";
        $login_alert_social = "Il y a un problème avec votre identifiant social, le nom d'utilisateur avec lequel vous souhaitez vous connecter n'est pas le vôtre ou existe déjà avec un identifiant social différent!";
        $login_alert_error = "Le nom d'utilisateur ou le mot de passe n'est pas disponible!";
                
        $signup_title = "Inscription";
        $signup_username = "Votre nom d'utilisateur";
        $signup_password = "Votre mot de passe";
        $signup_rpassword = "Confirmer mot de passe";
        $signup_email = "Votre email";
        $signup_btn = "S'inscrire";
        $signup_footer = "Avez-vous un compte?";
        $signup_footer_l = "se connecter";
        $signup_alert_required = "Tous les champs marqués d'un * sont obligatoires!";
        $signup_alert_char_username = "Le nom d'utilisateur ne doit contenir que des lettres!";
        $signup_alert_limited_username = "Le nom d'utilisateur doit être limité entre 3 et 15 caractères!";
        $signup_alert_exist_username = "Le nom d'utilisateur existe déjà!";
        $signup_alert_limited_pass = "Le mot de passe doit être limité entre 6 et 12 caractères!";
        $signup_alert_repass = "Le nouveau mot de passe doit correspondre au mot de passe!";
        $signup_alert_check_email = "Veuillez saisir un e-mail valide!";
        $signup_alert_exist_email = "L'adresse e-mail existe déjà!";
        $signup_alert_birth = "Votre date de naissance doit être comprise entre le 1-1-2005 et le 1-1-1942!";
        $signup_alert_success = "Le processus d'inscription s'est terminé avec succès.";
        $signup_alert_success1 = "Le processus d'inscription s'est terminé avec succès. Mais, encore besoin d'approbation par l'administration.";
        $signup_alert_success2 = "Le processus d'inscription s'est terminé avec succès. Mais, encore besoin d'activer par e-mail.";
        $signup_alert_error = "Le nom d'utilisateur ou le mot de passe n'est pas disponible!";
                
                
        $details_title = "Gérer les infos:";
        $details_firstname = "Ton prénom";
        $details_lastname = "Votre nom de famille";
        $details_username = "Modifier le nom d'utilisateur";
        $details_password = "Modifier le mot de passe";
        $details_email = "Modifier l'e-mail";
        $details_male = "Masculin";
        $details_female = "Femelle";
        $details_country = "Pays";
        $details_state = "État / Région";
        $details_city = "Ville";
        $details_address = "Adresse complète";
        $details_image_n = "Aucune image choisie ...";
        $details_image_c = "Choisissez l'image";
        $details_button = "Envoyer des informations";
        $details_alert_success = "Le processus de modification des informations s'est terminé avec succès.";
                
                
        $survey_close_h = "Cette enquête est actuellement clôturée.";
        $survey_close_p = "Vous souhaitez créer votre propre enquête?";
        $survey_button = "INSCRIPTION GRATUITE";
        $survey_back = "Arrière";
        $survey_next = "Prochain";
        $survey_alert_error = "requis pour répondre!";
                
                
        $alerts_no_data = "Aucune donnée disponible!";
        $alerts_permission = "Vous ne pouvez pas accéder à cette page car vous devez mettre à jour votre plan!";
        $alerts_wrong = "Quelque chose a mal tourné!";
        $alerts_required = "Tous les champs marqués d'un * sont obligatoires!";
        $alerts_danger = "Oh snap!";
        $alerts_success = "Bien joué!";
        $alerts_warning = "Attention!";
        $alerts_info = "La tête haute!";
                
        $responses_title = "Mes réponses au sondage";
        $responses_btn_1 = "Voir Rapport";
        $responses_btn_2 = "Modifier l'enquête";
                
        $rapports_title = "Titre:";
        $rapports_btn1 = "Créer une enquête";
        $rapports_btn2 = "Modifier l'enquête";
        $rapports_stats_d = "Statistiques des 7 derniers jours";
        $rapports_stats_m = "Statistiques pour cette année";
        $rapports_views = "Vues:";
        $rapports_responses = "Réponses:";
        $rapports_rate = "Taux complété:";
        $rapports_start = "Date de début:";
        $rapports_end = "Date de fin:";
        $rapports_last_r = "Dernière réponse:";
        $rapports_days = "Les 7 derniers jours";
        $rapports_months = "Mois";
        $rapports_results = "Tous les résultats";
        $rapports_export = "Exporter des données";
        $rapports_by = "Répondre par";
        $rapports_people = "gens";
        $rapports_alert_success = "Le processus de modification des informations s'est terminé avec succès.";
                
                
        $plans_title = "Tarification simple pour tout le monde!";
        $plans_desc = "Prix ​​construit pour les entreprises de toutes tailles. Sachez toujours ce que vous allez payer. Tous les plans sont livrés avec 100% de remboursement guarane.";
        $plans_month = "/par mois";
        $plans_btn = "Commencer";
        $plans_alert_success = "Vos paiements ont été calculés!";
                
                
        $new_title = "Créer une nouvelle enquête";
        $new_questions = "Des questions";
        $new_welcome = "Page d'accueil";
        $new_thanks = "Page de remerciements";
        $new_design = "Conception";
        $new_stitle = "Titre de l'enquête";
        $new_start = "Date de début de l'enquête";
        $new_end = "Date de fin de l'enquête";
        $new_url = "Rediriger l'URL";
        $new_private = "Ce surevey est privé (ne prend que par URL)";
        $new_unpub = "Non publié";
        $new_ip = "Restriction IP";
        $new_start_q = "Commencez à poser des questions!";
        $new_new_step = "Ajouter une nouvelle étape";
        $new_new_q = "Nouvelle question";
        $new_new_qpl = "Écrivez votre question";
        $new_new_qde = "Rédigez une brève description de votre question";
        $new_new_qre = "Question requise pour répondre";
        $new_new_qln = "Réponses sur la même ligne";
        $new_new_a = "Nouvelles réponses";
        $new_new_abtn = "Ajouter un nouveau";
        $new_new_as1 = "Texte sur une seule ligne";
        $new_new_as2 = "Texte du paragraphe";
        $new_new_as3 = "Choix multiple (case à cocher)";
        $new_new_as4 = "Multi choix (Radio)";
        $new_new_as5 = "Échelle de notation";
        $new_new_as6 = "Date heure";
        $new_new_as7 = "Numéro de téléphone";
        $new_new_as8 = "Pays";
        $new_new_as9 = "Adresse email";
        $new_new_asi = "Icône";
        $new_new_aspl = "espace réservé";
        $new_new_asck = "Écrivez un nom";
        $new_wp = "Page d'accueil";
        $new_wp_h = "Headling";
        $new_wp_btn = "Texte du bouton Démarrer";
        $new_wp_icon = "Icône du bouton Démarrer";
        $new_tx = "Page de remerciements";
        $new_tx_h = "Headling";
        $new_tx_btn = "Texte du bouton de fin";
        $new_tx_icon = "Icône du bouton de fin";
        $new_send = "Envoyer l'enquête";
        $new_design_bs = "Ombre du bouton:";
        $new_design_bb = "Bordure du bouton:";
        $new_design_si = "Taille:";
        $new_design_s = "Style:";
        $new_design_c = "Couleur";
        $new_design_btg = "Arrière-plan du bouton:";
        $new_design_g = "Pente";
        $new_design_n = "Ordinaire";
        $new_design_btc = "Couleur du texte Butoon:";
        $new_design_sbg = "Contexte de l'enquête:";
        $new_design_stbg = "Contexte de l'étape:";
        $new_design_ibg = "Contexte d'entrée:";
        $new_design_yes = "Oui";
        $new_design_no = "Non";
        $new_alert_error = "Erreur! Certains champs d'enquête sont obligatoires!";
        $new_alert_error1 = "Erreur! Veuillez vous assurer d'ajouter {var}!";
        $new_alert_error2 = "Erreur! Veuillez vous assurer d'ajouter des questions à l'étape";
        $new_alert_error3 = "Erreur! Veuillez vous assurer que la question {var} comporte plus de 8 lettres!";
        $new_alert_error4 = "Erreur! Veuillez vous assurer d'ajouter des réponses à la question";
        $new_alert_error5 = "Erreur! Veuillez vous assurer que toutes les réponses à la question {var} ont une valeur supérieure à 3 lettres";
        $new_alert_success = "Succès! terminé!!";
                
                
        $edit_title = "Modifier une nouvelle enquête";
        $edit_alert_success = "Vos paiements ont été calculés!";
                
                
        $mysurvys_title = "Mes sondages";
        $mysurvys_alltitle = "Tous les sondages";
        $mysurvys_create = "Créer une enquête";
        $mysurvys_status = "Statut";
        $mysurvys_name = "Nom de l'enquête";
        $mysurvys_views = "Vues";
        $mysurvys_responses = "Réponses";
        $mysurvys_rate = "Tarif complet";
        $mysurvys_created = "Créé";
        $mysurvys_last_r = "Dernière réponse";
        $mysurvys_op_view = "Afficher l'enquête";
        $mysurvys_op_stats = "Statistiques d'enquête";
        $mysurvys_op_resp = "Afficher les réponses";
        $mysurvys_op_edit = "Modifier l'enquête";
        $mysurvys_op_delete = "Supprimer l'enquête";
        $mysurvys_alert_success = "Vos paiements ont été calculés!";
                
                
        $dashboard_hello = "Bonjour,";
        $dashboard_welcome = "Bienvenue à nouveau dans votre tableau de bord.";
        $dashboard_stats_line_d = "Statistiques des 7 derniers jours";
        $dashboard_stats_line_m = "Statistiques pour cette année";
        $dashboard_stats_bar_d = "Statistiques des 7 derniers jours";
        $dashboard_stats_bar_m = "Statistiques pour cette année";
        $dashboard_surveys = "Enquêtes";
        $dashboard_users = "Utilisateurs";
        $dashboard_responses = "Réponses";
        $dashboard_questions = "Des questions";
        $dashboard_new_u = "Nouveaux utilisateurs (24h)";
        $dashboard_new_p = "Derniers paiements (24h)";
        $dashboard_new_s = "Dernières enquêtes (24h)";
        $dashboard_u_users = "Membres";
        $dashboard_u_status = "Statut";
        $dashboard_u_username = "Nom d'utilisateur";
        $dashboard_u_plan = "Plan";
        $dashboard_u_credits = "Crédits";
        $dashboard_u_last_p = "Dernier paiement";
        $dashboard_u_registred = "Enregistré à";
        $dashboard_u_updated = "Mis à jour à";
        $dashboard_u_delete = "Supprimer l'utilisateur";
        $dashboard_u_edit = "Modifier l'utilisateur";
        $dashboard_p_title = "Paiements";
        $dashboard_p_user = "Utilisateur";
        $dashboard_p_status = "Statut";
        $dashboard_p_plan = "Plan";
        $dashboard_p_amount = "Montant";
        $dashboard_p_date = "Date de paiement";
        $dashboard_p_txn = "TXN";
        $dashboard_set_title = "réglages généraux";
        $dashboard_set_stitle = "Titre du site:";
        $dashboard_set_keys = "Mots clés du site:";
        $dashboard_set_desc = "Description du site:";
        $dashboard_set_url = "URL du site:";
        $dashboard_set_btn = "Paramètres d'envoi";
        $dashboard_alert_success = "Le paramètre a été envoyé avec succès.";
        

        return view("layouts/index",[
            'rtl' => $rtl,
            'lang' => $lang,
            'close' => $close,
            'loading' => $loading,
            'timedate_time_second' => $timedate_time_second,
            'timedate_time_minute' => $timedate_time_minute,
            'timedate_time_hour' => $timedate_time_hour,
            'timedate_time_day' => $timedate_time_day,
            'timedate_time_week' => $timedate_time_week,
            'timedate_time_month' => $timedate_time_month,
            'timedate_time_year' => $timedate_time_year,
            'timedate_time_decade' => $timedate_time_decade,
            'timedate_time_ago' => $timedate_time_ago,
            
            'header_home' => $header_home,
            'header_forms' => $header_forms,
            'header_about' => $header_about,
            'header_welcome' => $header_welcome,
            'header_new' => $header_new,
            'header_admin' => $header_admin,
            'header_info' => $header_info,
            'header_signin' => $header_signin,
            'header_explore' => $header_explore,
            'header_restaurants' => $header_restaurants,
            'header_about' => $header_about,
            'header_contact' => $header_contact,
            'header_plans' => $header_plans,
            'header_login' => $header_login,
            'header_dashboard' => $header_dashboard,
            'header_my_orders' => $header_my_orders,
            'header_your_restaurant' => $header_your_restaurant,
            'header_testimonial' => $header_testimonial,
            'header_testimonial_h' => $header_testimonial_h,
            'header_testimonial_i' => $header_testimonial_i,
            'header_testimonial_b' => $header_testimonial_b,
            'header_change_password' => $header_change_password,
            'header_change_pass_i1' => $header_change_pass_i1,
            'header_change_pass_i2' => $header_change_pass_i2,
            'header_change_pass_bt' => $header_change_pass_bt,
            'header_edit_details' => $header_edit_details,
            'header_logout' => $header_logout,
            'header_title' => $header_title,
            'header_subtitle' => $header_subtitle,
            'header_btn' => $header_btn,
            'header_working_hours' => $header_working_hours,
            'header_call' => $header_call,
            'header_search' => $header_search,
            'header_today' =>$header_today,
            'header_phone' => $header_phone,

            'home_nearby' => $home_nearby,
            'home_nearby_desc' => $home_nearby_desc,
            'home_best' => $home_best,
            'home_best_desc' => $home_best_desc,
            'home_addtocart' => $home_addtocart,
            'home_more' => $home_more,
            'home_how' => $home_how,
            'home_how_desc' => $home_how_desc,
            'home_how1' => $home_how1,
            'home_how1_desc' => $home_how1_desc,
            'home_how2' => $home_how2,
            'home_how2_desc' => $home_how2_desc,
            'home_how3' => $home_how3,
            'home_how3_desc' => $home_how3_desc,
            'home_customers' => $home_customers,
            'home_customers_desc' => $home_customers_desc,
            'home_help' => $home_help,
            'home_help_btn' => $home_help_btn,
            'home_links' => $home_links,
            'home_unavailable' => $home_unavailable,
            
            'login_username' => $login_username,
            'login_password' => $login_password,
            'login_title' =>  $login_title,
            'login_keep' => $login_keep,
            'login_btn' => $login_btn,
            'login_footer' => $login_footer,
            'login_footer_l' => $login_footer_l,
            'login_alert_required' => $login_alert_required,
            'login_alert_moderat' => $login_alert_moderat,
            'login_alert_activation' => $login_alert_activation,
            'login_alert_approve' => $login_alert_approve,
            'login_alert_success' => $login_alert_success,
            'login_alert_social' => $login_alert_social,
            'login_alert_error' => $login_alert_error,
            
            'signup_title' => $signup_title,
            'signup_username' => $signup_username,
            'signup_password' => $signup_password,
            'signup_rpassword' => $signup_rpassword,
            'signup_email' => $signup_email,
            'signup_btn' => $signup_btn,
            'signup_footer' => $signup_footer,
            'signup_footer_l' => $signup_footer_l,
            'signup_alert_required' => $signup_alert_required,
            'signup_alert_char_username' => $signup_alert_char_username,
            'signup_alert_limited_username' => $signup_alert_limited_username,
            'signup_alert_exist_username' => $signup_alert_exist_username,
            'signup_alert_limited_pass' => $signup_alert_limited_pass,
            'signup_alert_repass' => $signup_alert_repass,
            'signup_alert_check_email' => $signup_alert_check_email,
            'signup_alert_exist_email' => $signup_alert_exist_email,
            'signup_alert_birth' => $signup_alert_birth,
            'signup_alert_success' => $signup_alert_success,
            'signup_alert_success1' => $signup_alert_success1,
            'signup_alert_success2' => $signup_alert_success2,
            'signup_alert_error' => $signup_alert_error,
            
            
            'details_title' => $details_title,
            'details_firstname' => $details_firstname,
            'details_lastname' => $details_lastname,
            'details_username' => $details_username,
            'details_password' => $details_password,
            'details_email' => $details_email,
            'details_male' => $details_male,
            'details_female' => $details_female,
            'details_country' => $details_country,
            'details_state' => $details_state,
            'details_city' => $details_city,
            'details_address' => $details_address,
            'details_image_n' => $details_image_n,
            'details_image_c' => $details_image_c,
            'details_button' => $details_button,
            'details_alert_success' => $details_alert_success,
            
            
            'survey_close_h' => $survey_close_h,
            'survey_close_p' => $survey_close_p,
            'survey_button' => $survey_button,
            'survey_back' => $survey_back,
            'survey_next' => $survey_next,
            'survey_alert_error' => $survey_alert_error,
            
            
            'alerts_no_data' => $alerts_no_data,
            'alerts_permission' => $alerts_permission,
            'alerts_wrong' => $alerts_wrong,
            'alerts_required' => $alerts_required,
            'alerts_danger' => $alerts_danger,
            'alerts_success' => $alerts_success,
            'alerts_warning' => $alerts_warning,
            'alerts_info' =>$alerts_info,
            
            'responses_title' => $responses_title,
            'responses_btn_1' => $responses_btn_1,
            'responses_btn_2' => $responses_btn_2,
            
            'rapports_title' => $rapports_title,
            'rapports_btn1' => $rapports_btn1,
            'rapports_btn2' => $rapports_btn2,
            'rapports_stats_d' => $rapports_stats_d,
            'rapports_stats_m' => $rapports_stats_m,
            'rapports_views' => $rapports_views,
            'rapports_responses' => $rapports_responses,
            'rapports_rate' => $rapports_rate,
            'rapports_start' => $rapports_start,
            'rapports_end' => $rapports_end,
            'rapports_last_r' => $rapports_last_r,
            'rapports_days' => $rapports_days,
            'rapports_months' => $rapports_months,
            'rapports_results' => $rapports_results,
            'rapports_export' => $rapports_export,
            'rapports_by' => $rapports_by,
            'rapports_people' => $rapports_people,
            'rapports_alert_success' => $rapports_alert_success,
            
            
            'new_title' => $new_title,
            'new_questions' => $new_questions,
            'new_welcome' => $new_welcome,
            'new_thanks' => $new_thanks,
            'new_design' => $new_design,
            'new_stitle' => $new_stitle,
            'new_start' => $new_start,
            'new_end' => $new_end,
            'new_url' => $new_url,
            'new_private' => $new_private,
            'new_unpub' => $new_unpub,
            'new_ip' => $new_ip,
            'new_start_q' => $new_start_q,
            'new_new_step' => $new_new_step,
            'new_new_q' => $new_new_q,
            'new_new_qpl' => $new_new_qpl,
            'new_new_qde' => $new_new_qde,
            'new_new_qre' => $new_new_qre,
            'new_new_qln' => $new_new_qln,
            'new_new_a' => $new_new_a,
            'new_new_abtn' => $new_new_abtn,
            'new_new_as1' => $new_new_as1,
            'new_new_as2' => $new_new_as2,
            'new_new_as3' => $new_new_as3,
            'new_new_as4' => $new_new_as4,
            'new_new_as5' => $new_new_as5,
            'new_new_as6' => $new_new_as6,
            'new_new_as7' => $new_new_as7,
            'new_new_as8' => $new_new_as8,
            'new_new_as9' => $new_new_as9,
            'new_new_asi' => $new_new_asi,
            'new_new_aspl' => $new_new_aspl,
            'new_new_asck' => $new_new_asck,
            'new_wp' => $new_wp,
            'new_wp_h' => $new_wp_h,
            'new_wp_btn' => $new_wp_btn,
            'new_wp_icon' => $new_wp_icon,
            'new_tx' => $new_tx,
            'new_tx_h' => $new_tx_h,
            'new_tx_btn' => $new_tx_btn,
            'new_tx_icon' => $new_tx_icon,
            'new_send' => $new_send,
            'new_design_bs' => $new_design_bs,
            'new_design_bb' => $new_design_bb,
            'new_design_si' => $new_design_si,
            'new_design_s' => $new_design_s,
            'new_design_c' => $new_design_c,
            'new_design_btg' => $new_design_btg,
            'new_design_g' => $new_design_g,
            'new_design_n' => $new_design_n,
            'new_design_btc' => $new_design_btc,
            'new_design_sbg' => $new_design_sbg,
            'new_design_stbg' => $new_design_stbg,
            'new_design_ibg' => $new_design_ibg,
            'new_design_yes' => $new_design_yes,
            'new_design_no' => $new_design_no,
            'new_alert_error' => $new_alert_error,
            'new_alert_error1' => $new_alert_error1,
            'new_alert_error2' => $new_alert_error2,
            'new_alert_error3' => $new_alert_error3,
            'new_alert_error4' => $new_alert_error4,
            'new_alert_error5' => $new_alert_error5,
            'new_alert_success' => $new_alert_success,
            
            
            'edit_title' => $edit_title,
            'edit_alert_success' => $edit_alert_success,

            'mysurvys_title' => $mysurvys_title,
            'mysurvys_alltitle' => $mysurvys_alltitle,
            'mysurvys_create' => $mysurvys_create,
            'mysurvys_status' => $mysurvys_status,
            'mysurvys_name' => $mysurvys_name,
            'mysurvys_views' => $mysurvys_views,
            'mysurvys_responses' => $mysurvys_responses,
            'mysurvys_rate' => $mysurvys_rate,
            'mysurvys_created' => $mysurvys_created,
            'mysurvys_last_r' => $mysurvys_last_r,
            'mysurvys_op_view' => $mysurvys_op_view,
            'mysurvys_op_stats' => $mysurvys_op_stats,
            'mysurvys_op_resp' => $mysurvys_op_resp,
            'mysurvys_op_edit' => $mysurvys_op_edit,
            'mysurvys_op_delete' => $mysurvys_op_delete,
            'mysurvys_alert_success' => $mysurvys_alert_success,
            
            
            'dashboard_hello' => $dashboard_hello,
            'dashboard_welcome' => $dashboard_welcome,
            'dashboard_stats_line_d' =>$dashboard_stats_line_d,
            'dashboard_stats_line_m' => $dashboard_stats_line_m,
            'dashboard_stats_bar_d' => $dashboard_stats_bar_d,
            'dashboard_stats_bar_m' => $dashboard_stats_bar_m,
            'dashboard_surveys' => $dashboard_surveys,
            'dashboard_users' => $dashboard_users,
            'dashboard_responses' => $dashboard_responses,
            'dashboard_questions' => $dashboard_questions,
            'dashboard_new_u' => $dashboard_new_u,
            'dashboard_new_p' => $dashboard_new_p,
            'dashboard_new_s' => $dashboard_new_s,
            'dashboard_u_users' => $dashboard_u_users,
            'dashboard_u_status' => $dashboard_u_status,
            'dashboard_u_username' => $dashboard_u_username,
            'dashboard_u_plan' => $dashboard_u_plan,
            'dashboard_u_credits' => $dashboard_u_credits,
            'dashboard_u_last_p' => $dashboard_u_last_p,
            'dashboard_u_registred' => $dashboard_u_registred,
            'dashboard_u_updated' => $dashboard_u_updated,
            'dashboard_u_delete' => $dashboard_u_delete,
            'dashboard_u_edit' => $dashboard_u_edit,
            'dashboard_p_title' => $dashboard_p_title,
            'dashboard_p_user' => $dashboard_p_user,
            'dashboard_p_status' => $dashboard_p_status,
            'dashboard_p_plan' => $dashboard_p_plan,
            'dashboard_p_amount' => $dashboard_p_amount,
            'dashboard_p_date' => $dashboard_p_date,
            'dashboard_p_txn' => $dashboard_p_txn,
            'dashboard_set_title' => $dashboard_set_title,
            'dashboard_set_stitle' => $dashboard_set_stitle,
            'dashboard_set_keys' => $dashboard_set_keys,
            'dashboard_set_desc' => $dashboard_set_desc,
            'dashboard_alert_success' => $dashboard_alert_success
        ]);
    }

    public function restaurants(Request $request) 
    {
        if (!$request->ajax()) {
            return view('layouts/restaurants');
        }

        $restaurants = Restaurants::select(["*"])
            ->when($request->long and $request->lat, function ($query) use ($request) {
                $query->addSelect(DB::raw("ST_Distance_Sphere(
                        POINT('$request->long', '$request->lat'), POINT(restaurants.longitude, restaurants.latitude)
                    )as distance"))
                    ->orderBy('distance');
            })
            ->take(9)
            ->get();

        return response()->json([
            'restaurants' => $restaurants
        ]);

        /* $rtl = false;
        $lang = "fr";$close = "Fermer";
        $loading = "Chargement...";
        $timedate_time_second = "seconde";
        $timedate_time_minute = "minute";
        $timedate_time_hour = "heure";
        $timedate_time_day = "journée";
        $timedate_time_week = "la semaine";
        $timedate_time_month = "mois";
        $timedate_time_year = "année";
        $timedate_time_decade = "décennie";
        $timedate_time_ago = "depuis";
                
        $header_home = "Accueil";
        $header_forms = "Formes";
        $header_about = "À propos";
        $header_welcome = "Bienvenue";
        $header_new = "Nouvelle enquête";
        $header_admin = "Administration";
        $header_info = "Gérer les informations";
        $header_signin = "Connexion";
        $header_explore = "Découvrir";
        $header_restaurants = "Restaurants";
        $header_about = "A propos";
        $header_contact = "Nous-Contacter";
        $header_plans = "Plans";
        $header_login = "Connexion";
        $header_dashboard = "Dashboard";
        $header_my_orders = "Mes Commandes";
        $header_your_restaurant = "Restaurant dashboard";
        $header_testimonial = "Avis Clients";
        $header_testimonial_h = "Votre avis:";
        $header_testimonial_i = "Saisir votre avis";
        $header_testimonial_b = "Envoyer";
        $header_change_password = "Changer Mot de passe";
        $header_change_pass_i1 = "Mot de passe actuel";
        $header_change_pass_i2 = "Nouveau Mot de passe";
        $header_change_pass_bt = "Envoyer";
        $header_edit_details = "Modifier";
        $header_logout = "Déconnexion";
        $header_title = "DonExpress, Livraison Express partout à Lomé";
        $header_subtitle = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamm.";
        $header_btn = "Commander";
        $header_working_hours = "Horaires";
        $header_call = "Nous appeler";
        $header_search = "Rechercher...";
        $header_today = "Aujourdh'ui 09h:00 - 19h:00";
        $header_phone = "+228 70 30 55 66";

        $home_nearby = "Découvrez les restaurants proches de vous";
        $home_nearby_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt ut labore et dolore magna aliqua";
        $home_best = "Les meilleurs menus";
        $home_best_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." ;
        $home_addtocart = "Ajouter au panier";
        $home_more = "Voir plus";
        $home_how = "Comment passer une commande ?";
        $home_how_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt.";
        $home_how1 = "Pick Meals";
        $home_how1_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_how2 = "Choisir un paiement";
        $home_how2_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_how3 = "Livraison Express";
        $home_how3_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_customers = "Ce que disent Nos clients ";
        $home_customers_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_help = "Avez-vous des questions ? Nous pourrons vous aider";
        $home_help_btn = "Envoyer";
        $home_links = "Liens" ;
        $home_unavailable = "Non Disponible";
                
        $login_username = "Votre nom d'utilisateur ou e-mail";
        $login_title = "Connexion";
        $login_password = "Votre mot de passe";
        $login_keep = "Rester connecté";
        $login_btn = "Se connecter";
        $login_footer = "Vous n'avez pas de compte?";
        $login_footer_l = "Inscription gratuite";
        $login_alert_required = "Vous avez laissé votre nom d'utilisateur ou votre mot de passe vide!";
        $login_alert_moderat = "L'adhésion a été interdite par l'administrateur, si vous pensez que c'est une erreur, n'hésitez pas à nous contacter.";
        $login_alert_activation = "L'adhésion doit être activée par e-mail.";
        $login_alert_approve = "L'adhésion doit être approuvée par l'administration.";
        $login_alert_success = "Vous êtes connecté avec succès, nous vous souhaitons de bons moments.";
        $login_alert_social = "Il y a un problème avec votre identifiant social, le nom d'utilisateur avec lequel vous souhaitez vous connecter n'est pas le vôtre ou existe déjà avec un identifiant social différent!";
        $login_alert_error = "Le nom d'utilisateur ou le mot de passe n'est pas disponible!";
                
        $signup_title = "Inscription";
        $signup_username = "Votre nom d'utilisateur";
        $signup_password = "Votre mot de passe";
        $signup_rpassword = "Confirmer mot de passe";
        $signup_email = "Votre email";
        $signup_btn = "S'inscrire";
        $signup_footer = "Avez-vous un compte?";
        $signup_footer_l = "se connecter";
        $signup_alert_required = "Tous les champs marqués d'un * sont obligatoires!";
        $signup_alert_char_username = "Le nom d'utilisateur ne doit contenir que des lettres!";
        $signup_alert_limited_username = "Le nom d'utilisateur doit être limité entre 3 et 15 caractères!";
        $signup_alert_exist_username = "Le nom d'utilisateur existe déjà!";
        $signup_alert_limited_pass = "Le mot de passe doit être limité entre 6 et 12 caractères!";
        $signup_alert_repass = "Le nouveau mot de passe doit correspondre au mot de passe!";
        $signup_alert_check_email = "Veuillez saisir un e-mail valide!";
        $signup_alert_exist_email = "L'adresse e-mail existe déjà!";
        $signup_alert_birth = "Votre date de naissance doit être comprise entre le 1-1-2005 et le 1-1-1942!";
        $signup_alert_success = "Le processus d'inscription s'est terminé avec succès.";
        $signup_alert_success1 = "Le processus d'inscription s'est terminé avec succès. Mais, encore besoin d'approbation par l'administration.";
        $signup_alert_success2 = "Le processus d'inscription s'est terminé avec succès. Mais, encore besoin d'activer par e-mail.";
        $signup_alert_error = "Le nom d'utilisateur ou le mot de passe n'est pas disponible!";
                
                
        $details_title = "Gérer les infos:";
        $details_firstname = "Ton prénom";
        $details_lastname = "Votre nom de famille";
        $details_username = "Modifier le nom d'utilisateur";
        $details_password = "Modifier le mot de passe";
        $details_email = "Modifier l'e-mail";
        $details_male = "Masculin";
        $details_female = "Femelle";
        $details_country = "Pays";
        $details_state = "État / Région";
        $details_city = "Ville";
        $details_address = "Adresse complète";
        $details_image_n = "Aucune image choisie ...";
        $details_image_c = "Choisissez l'image";
        $details_button = "Envoyer des informations";
        $details_alert_success = "Le processus de modification des informations s'est terminé avec succès.";
                
                
        $survey_close_h = "Cette enquête est actuellement clôturée.";
        $survey_close_p = "Vous souhaitez créer votre propre enquête?";
        $survey_button = "INSCRIPTION GRATUITE";
        $survey_back = "Arrière";
        $survey_next = "Prochain";
        $survey_alert_error = "requis pour répondre!";
                
                
        $alerts_no_data = "Aucune donnée disponible!";
        $alerts_permission = "Vous ne pouvez pas accéder à cette page car vous devez mettre à jour votre plan!";
        $alerts_wrong = "Quelque chose a mal tourné!";
        $alerts_required = "Tous les champs marqués d'un * sont obligatoires!";
        $alerts_danger = "Oh snap!";
        $alerts_success = "Bien joué!";
        $alerts_warning = "Attention!";
        $alerts_info = "La tête haute!";
                
        $responses_title = "Mes réponses au sondage";
        $responses_btn_1 = "Voir Rapport";
        $responses_btn_2 = "Modifier l'enquête";
                
        $rapports_title = "Titre:";
        $rapports_btn1 = "Créer une enquête";
        $rapports_btn2 = "Modifier l'enquête";
        $rapports_stats_d = "Statistiques des 7 derniers jours";
        $rapports_stats_m = "Statistiques pour cette année";
        $rapports_views = "Vues:";
        $rapports_responses = "Réponses:";
        $rapports_rate = "Taux complété:";
        $rapports_start = "Date de début:";
        $rapports_end = "Date de fin:";
        $rapports_last_r = "Dernière réponse:";
        $rapports_days = "Les 7 derniers jours";
        $rapports_months = "Mois";
        $rapports_results = "Tous les résultats";
        $rapports_export = "Exporter des données";
        $rapports_by = "Répondre par";
        $rapports_people = "gens";
        $rapports_alert_success = "Le processus de modification des informations s'est terminé avec succès.";
                
                
        $plans_title = "Tarification simple pour tout le monde!";
        $plans_desc = "Prix ​​construit pour les entreprises de toutes tailles. Sachez toujours ce que vous allez payer. Tous les plans sont livrés avec 100% de remboursement guarane.";
        $plans_month = "/par mois";
        $plans_btn = "Commencer";
        $plans_alert_success = "Vos paiements ont été calculés!";
                
                
        $new_title = "Créer une nouvelle enquête";
        $new_questions = "Des questions";
        $new_welcome = "Page d'accueil";
        $new_thanks = "Page de remerciements";
        $new_design = "Conception";
        $new_stitle = "Titre de l'enquête";
        $new_start = "Date de début de l'enquête";
        $new_end = "Date de fin de l'enquête";
        $new_url = "Rediriger l'URL";
        $new_private = "Ce surevey est privé (ne prend que par URL)";
        $new_unpub = "Non publié";
        $new_ip = "Restriction IP";
        $new_start_q = "Commencez à poser des questions!";
        $new_new_step = "Ajouter une nouvelle étape";
        $new_new_q = "Nouvelle question";
        $new_new_qpl = "Écrivez votre question";
        $new_new_qde = "Rédigez une brève description de votre question";
        $new_new_qre = "Question requise pour répondre";
        $new_new_qln = "Réponses sur la même ligne";
        $new_new_a = "Nouvelles réponses";
        $new_new_abtn = "Ajouter un nouveau";
        $new_new_as1 = "Texte sur une seule ligne";
        $new_new_as2 = "Texte du paragraphe";
        $new_new_as3 = "Choix multiple (case à cocher)";
        $new_new_as4 = "Multi choix (Radio)";
        $new_new_as5 = "Échelle de notation";
        $new_new_as6 = "Date heure";
        $new_new_as7 = "Numéro de téléphone";
        $new_new_as8 = "Pays";
        $new_new_as9 = "Adresse email";
        $new_new_asi = "Icône";
        $new_new_aspl = "espace réservé";
        $new_new_asck = "Écrivez un nom";
        $new_wp = "Page d'accueil";
        $new_wp_h = "Headling";
        $new_wp_btn = "Texte du bouton Démarrer";
        $new_wp_icon = "Icône du bouton Démarrer";
        $new_tx = "Page de remerciements";
        $new_tx_h = "Headling";
        $new_tx_btn = "Texte du bouton de fin";
        $new_tx_icon = "Icône du bouton de fin";
        $new_send = "Envoyer l'enquête";
        $new_design_bs = "Ombre du bouton:";
        $new_design_bb = "Bordure du bouton:";
        $new_design_si = "Taille:";
        $new_design_s = "Style:";
        $new_design_c = "Couleur";
        $new_design_btg = "Arrière-plan du bouton:";
        $new_design_g = "Pente";
        $new_design_n = "Ordinaire";
        $new_design_btc = "Couleur du texte Butoon:";
        $new_design_sbg = "Contexte de l'enquête:";
        $new_design_stbg = "Contexte de l'étape:";
        $new_design_ibg = "Contexte d'entrée:";
        $new_design_yes = "Oui";
        $new_design_no = "Non";
        $new_alert_error = "Erreur! Certains champs d'enquête sont obligatoires!";
        $new_alert_error1 = "Erreur! Veuillez vous assurer d'ajouter {var}!";
        $new_alert_error2 = "Erreur! Veuillez vous assurer d'ajouter des questions à l'étape";
        $new_alert_error3 = "Erreur! Veuillez vous assurer que la question {var} comporte plus de 8 lettres!";
        $new_alert_error4 = "Erreur! Veuillez vous assurer d'ajouter des réponses à la question";
        $new_alert_error5 = "Erreur! Veuillez vous assurer que toutes les réponses à la question {var} ont une valeur supérieure à 3 lettres";
        $new_alert_success = "Succès! terminé!!";
                
                
        $edit_title = "Modifier une nouvelle enquête";
        $edit_alert_success = "Vos paiements ont été calculés!";
                
                
        $mysurvys_title = "Mes sondages";
        $mysurvys_alltitle = "Tous les sondages";
        $mysurvys_create = "Créer une enquête";
        $mysurvys_status = "Statut";
        $mysurvys_name = "Nom de l'enquête";
        $mysurvys_views = "Vues";
        $mysurvys_responses = "Réponses";
        $mysurvys_rate = "Tarif complet";
        $mysurvys_created = "Créé";
        $mysurvys_last_r = "Dernière réponse";
        $mysurvys_op_view = "Afficher l'enquête";
        $mysurvys_op_stats = "Statistiques d'enquête";
        $mysurvys_op_resp = "Afficher les réponses";
        $mysurvys_op_edit = "Modifier l'enquête";
        $mysurvys_op_delete = "Supprimer l'enquête";
        $mysurvys_alert_success = "Vos paiements ont été calculés!";
                
                
        $dashboard_hello = "Bonjour,";
        $dashboard_welcome = "Bienvenue à nouveau dans votre tableau de bord.";
        $dashboard_stats_line_d = "Statistiques des 7 derniers jours";
        $dashboard_stats_line_m = "Statistiques pour cette année";
        $dashboard_stats_bar_d = "Statistiques des 7 derniers jours";
        $dashboard_stats_bar_m = "Statistiques pour cette année";
        $dashboard_surveys = "Enquêtes";
        $dashboard_users = "Utilisateurs";
        $dashboard_responses = "Réponses";
        $dashboard_questions = "Des questions";
        $dashboard_new_u = "Nouveaux utilisateurs (24h)";
        $dashboard_new_p = "Derniers paiements (24h)";
        $dashboard_new_s = "Dernières enquêtes (24h)";
        $dashboard_u_users = "Membres";
        $dashboard_u_status = "Statut";
        $dashboard_u_username = "Nom d'utilisateur";
        $dashboard_u_plan = "Plan";
        $dashboard_u_credits = "Crédits";
        $dashboard_u_last_p = "Dernier paiement";
        $dashboard_u_registred = "Enregistré à";
        $dashboard_u_updated = "Mis à jour à";
        $dashboard_u_delete = "Supprimer l'utilisateur";
        $dashboard_u_edit = "Modifier l'utilisateur";
        $dashboard_p_title = "Paiements";
        $dashboard_p_user = "Utilisateur";
        $dashboard_p_status = "Statut";
        $dashboard_p_plan = "Plan";
        $dashboard_p_amount = "Montant";
        $dashboard_p_date = "Date de paiement";
        $dashboard_p_txn = "TXN";
        $dashboard_set_title = "réglages généraux";
        $dashboard_set_stitle = "Titre du site:";
        $dashboard_set_keys = "Mots clés du site:";
        $dashboard_set_desc = "Description du site:";
        $dashboard_set_url = "URL du site:";
        $dashboard_set_btn = "Paramètres d'envoi";
        $dashboard_alert_success = "Le paramètre a été envoyé avec succès.";
        \Cart::clear();


        return view("layouts/restaurants",[
            'rtl' => $rtl,
            'lang' => $lang,
            'close' => $close,
            'loading' => $loading,
            'timedate_time_second' => $timedate_time_second,
            'timedate_time_minute' => $timedate_time_minute,
            'timedate_time_hour' => $timedate_time_hour,
            'timedate_time_day' => $timedate_time_day,
            'timedate_time_week' => $timedate_time_week,
            'timedate_time_month' => $timedate_time_month,
            'timedate_time_year' => $timedate_time_year,
            'timedate_time_decade' => $timedate_time_decade,
            'timedate_time_ago' => $timedate_time_ago,
            
            'header_home' => $header_home,
            'header_forms' => $header_forms,
            'header_about' => $header_about,
            'header_welcome' => $header_welcome,
            'header_new' => $header_new,
            'header_admin' => $header_admin,
            'header_info' => $header_info,
            'header_signin' => $header_signin,
            'header_explore' => $header_explore,
            'header_restaurants' => $header_restaurants,
            'header_about' => $header_about,
            'header_contact' => $header_contact,
            'header_plans' => $header_plans,
            'header_login' => $header_login,
            'header_dashboard' => $header_dashboard,
            'header_my_orders' => $header_my_orders,
            'header_your_restaurant' => $header_your_restaurant,
            'header_testimonial' => $header_testimonial,
            'header_testimonial_h' => $header_testimonial_h,
            'header_testimonial_i' => $header_testimonial_i,
            'header_testimonial_b' => $header_testimonial_b,
            'header_change_password' => $header_change_password,
            'header_change_pass_i1' => $header_change_pass_i1,
            'header_change_pass_i2' => $header_change_pass_i2,
            'header_change_pass_bt' => $header_change_pass_bt,
            'header_edit_details' => $header_edit_details,
            'header_logout' => $header_logout,
            'header_title' => $header_title,
            'header_subtitle' => $header_subtitle,
            'header_btn' => $header_btn,
            'header_working_hours' => $header_working_hours,
            'header_call' => $header_call,
            'header_search' => $header_search,
            'header_today' =>$header_today,
            'header_phone' => $header_phone,

            'home_nearby' => $home_nearby,
            'home_nearby_desc' => $home_nearby_desc,
            'home_best' => $home_best,
            'home_best_desc' => $home_best_desc,
            'home_addtocart' => $home_addtocart,
            'home_more' => $home_more,
            'home_how' => $home_how,
            'home_how_desc' => $home_how_desc,
            'home_how1' => $home_how1,
            'home_how1_desc' => $home_how1_desc,
            'home_how2' => $home_how2,
            'home_how2_desc' => $home_how2_desc,
            'home_how3' => $home_how3,
            'home_how3_desc' => $home_how3_desc,
            'home_customers' => $home_customers,
            'home_customers_desc' => $home_customers_desc,
            'home_help' => $home_help,
            'home_help_btn' => $home_help_btn,
            'home_links' => $home_links,
            'home_unavailable' => $home_unavailable,
            
            'login_username' => $login_username,
            'login_password' => $login_password,
            'login_title' =>  $login_title,
            'login_keep' => $login_keep,
            'login_btn' => $login_btn,
            'login_footer' => $login_footer,
            'login_footer_l' => $login_footer_l,
            'login_alert_required' => $login_alert_required,
            'login_alert_moderat' => $login_alert_moderat,
            'login_alert_activation' => $login_alert_activation,
            'login_alert_approve' => $login_alert_approve,
            'login_alert_success' => $login_alert_success,
            'login_alert_social' => $login_alert_social,
            'login_alert_error' => $login_alert_error,
            
            'signup_title' => $signup_title,
            'signup_username' => $signup_username,
            'signup_password' => $signup_password,
            'signup_rpassword' => $signup_rpassword,
            'signup_email' => $signup_email,
            'signup_btn' => $signup_btn,
            'signup_footer' => $signup_footer,
            'signup_footer_l' => $signup_footer_l,
            'signup_alert_required' => $signup_alert_required,
            'signup_alert_char_username' => $signup_alert_char_username,
            'signup_alert_limited_username' => $signup_alert_limited_username,
            'signup_alert_exist_username' => $signup_alert_exist_username,
            'signup_alert_limited_pass' => $signup_alert_limited_pass,
            'signup_alert_repass' => $signup_alert_repass,
            'signup_alert_check_email' => $signup_alert_check_email,
            'signup_alert_exist_email' => $signup_alert_exist_email,
            'signup_alert_birth' => $signup_alert_birth,
            'signup_alert_success' => $signup_alert_success,
            'signup_alert_success1' => $signup_alert_success1,
            'signup_alert_success2' => $signup_alert_success2,
            'signup_alert_error' => $signup_alert_error,
            
            
            'details_title' => $details_title,
            'details_firstname' => $details_firstname,
            'details_lastname' => $details_lastname,
            'details_username' => $details_username,
            'details_password' => $details_password,
            'details_email' => $details_email,
            'details_male' => $details_male,
            'details_female' => $details_female,
            'details_country' => $details_country,
            'details_state' => $details_state,
            'details_city' => $details_city,
            'details_address' => $details_address,
            'details_image_n' => $details_image_n,
            'details_image_c' => $details_image_c,
            'details_button' => $details_button,
            'details_alert_success' => $details_alert_success,
            
            
            'survey_close_h' => $survey_close_h,
            'survey_close_p' => $survey_close_p,
            'survey_button' => $survey_button,
            'survey_back' => $survey_back,
            'survey_next' => $survey_next,
            'survey_alert_error' => $survey_alert_error,
            
            
            'alerts_no_data' => $alerts_no_data,
            'alerts_permission' => $alerts_permission,
            'alerts_wrong' => $alerts_wrong,
            'alerts_required' => $alerts_required,
            'alerts_danger' => $alerts_danger,
            'alerts_success' => $alerts_success,
            'alerts_warning' => $alerts_warning,
            'alerts_info' =>$alerts_info,
            
            'responses_title' => $responses_title,
            'responses_btn_1' => $responses_btn_1,
            'responses_btn_2' => $responses_btn_2,
            
            'rapports_title' => $rapports_title,
            'rapports_btn1' => $rapports_btn1,
            'rapports_btn2' => $rapports_btn2,
            'rapports_stats_d' => $rapports_stats_d,
            'rapports_stats_m' => $rapports_stats_m,
            'rapports_views' => $rapports_views,
            'rapports_responses' => $rapports_responses,
            'rapports_rate' => $rapports_rate,
            'rapports_start' => $rapports_start,
            'rapports_end' => $rapports_end,
            'rapports_last_r' => $rapports_last_r,
            'rapports_days' => $rapports_days,
            'rapports_months' => $rapports_months,
            'rapports_results' => $rapports_results,
            'rapports_export' => $rapports_export,
            'rapports_by' => $rapports_by,
            'rapports_people' => $rapports_people,
            'rapports_alert_success' => $rapports_alert_success,
            
            
            'new_title' => $new_title,
            'new_questions' => $new_questions,
            'new_welcome' => $new_welcome,
            'new_thanks' => $new_thanks,
            'new_design' => $new_design,
            'new_stitle' => $new_stitle,
            'new_start' => $new_start,
            'new_end' => $new_end,
            'new_url' => $new_url,
            'new_private' => $new_private,
            'new_unpub' => $new_unpub,
            'new_ip' => $new_ip,
            'new_start_q' => $new_start_q,
            'new_new_step' => $new_new_step,
            'new_new_q' => $new_new_q,
            'new_new_qpl' => $new_new_qpl,
            'new_new_qde' => $new_new_qde,
            'new_new_qre' => $new_new_qre,
            'new_new_qln' => $new_new_qln,
            'new_new_a' => $new_new_a,
            'new_new_abtn' => $new_new_abtn,
            'new_new_as1' => $new_new_as1,
            'new_new_as2' => $new_new_as2,
            'new_new_as3' => $new_new_as3,
            'new_new_as4' => $new_new_as4,
            'new_new_as5' => $new_new_as5,
            'new_new_as6' => $new_new_as6,
            'new_new_as7' => $new_new_as7,
            'new_new_as8' => $new_new_as8,
            'new_new_as9' => $new_new_as9,
            'new_new_asi' => $new_new_asi,
            'new_new_aspl' => $new_new_aspl,
            'new_new_asck' => $new_new_asck,
            'new_wp' => $new_wp,
            'new_wp_h' => $new_wp_h,
            'new_wp_btn' => $new_wp_btn,
            'new_wp_icon' => $new_wp_icon,
            'new_tx' => $new_tx,
            'new_tx_h' => $new_tx_h,
            'new_tx_btn' => $new_tx_btn,
            'new_tx_icon' => $new_tx_icon,
            'new_send' => $new_send,
            'new_design_bs' => $new_design_bs,
            'new_design_bb' => $new_design_bb,
            'new_design_si' => $new_design_si,
            'new_design_s' => $new_design_s,
            'new_design_c' => $new_design_c,
            'new_design_btg' => $new_design_btg,
            'new_design_g' => $new_design_g,
            'new_design_n' => $new_design_n,
            'new_design_btc' => $new_design_btc,
            'new_design_sbg' => $new_design_sbg,
            'new_design_stbg' => $new_design_stbg,
            'new_design_ibg' => $new_design_ibg,
            'new_design_yes' => $new_design_yes,
            'new_design_no' => $new_design_no,
            'new_alert_error' => $new_alert_error,
            'new_alert_error1' => $new_alert_error1,
            'new_alert_error2' => $new_alert_error2,
            'new_alert_error3' => $new_alert_error3,
            'new_alert_error4' => $new_alert_error4,
            'new_alert_error5' => $new_alert_error5,
            'new_alert_success' => $new_alert_success,
            
            
            'edit_title' => $edit_title,
            'edit_alert_success' => $edit_alert_success,

            'mysurvys_title' => $mysurvys_title,
            'mysurvys_alltitle' => $mysurvys_alltitle,
            'mysurvys_create' => $mysurvys_create,
            'mysurvys_status' => $mysurvys_status,
            'mysurvys_name' => $mysurvys_name,
            'mysurvys_views' => $mysurvys_views,
            'mysurvys_responses' => $mysurvys_responses,
            'mysurvys_rate' => $mysurvys_rate,
            'mysurvys_created' => $mysurvys_created,
            'mysurvys_last_r' => $mysurvys_last_r,
            'mysurvys_op_view' => $mysurvys_op_view,
            'mysurvys_op_stats' => $mysurvys_op_stats,
            'mysurvys_op_resp' => $mysurvys_op_resp,
            'mysurvys_op_edit' => $mysurvys_op_edit,
            'mysurvys_op_delete' => $mysurvys_op_delete,
            'mysurvys_alert_success' => $mysurvys_alert_success,
            
            
            'dashboard_hello' => $dashboard_hello,
            'dashboard_welcome' => $dashboard_welcome,
            'dashboard_stats_line_d' =>$dashboard_stats_line_d,
            'dashboard_stats_line_m' => $dashboard_stats_line_m,
            'dashboard_stats_bar_d' => $dashboard_stats_bar_d,
            'dashboard_stats_bar_m' => $dashboard_stats_bar_m,
            'dashboard_surveys' => $dashboard_surveys,
            'dashboard_users' => $dashboard_users,
            'dashboard_responses' => $dashboard_responses,
            'dashboard_questions' => $dashboard_questions,
            'dashboard_new_u' => $dashboard_new_u,
            'dashboard_new_p' => $dashboard_new_p,
            'dashboard_new_s' => $dashboard_new_s,
            'dashboard_u_users' => $dashboard_u_users,
            'dashboard_u_status' => $dashboard_u_status,
            'dashboard_u_username' => $dashboard_u_username,
            'dashboard_u_plan' => $dashboard_u_plan,
            'dashboard_u_credits' => $dashboard_u_credits,
            'dashboard_u_last_p' => $dashboard_u_last_p,
            'dashboard_u_registred' => $dashboard_u_registred,
            'dashboard_u_updated' => $dashboard_u_updated,
            'dashboard_u_delete' => $dashboard_u_delete,
            'dashboard_u_edit' => $dashboard_u_edit,
            'dashboard_p_title' => $dashboard_p_title,
            'dashboard_p_user' => $dashboard_p_user,
            'dashboard_p_status' => $dashboard_p_status,
            'dashboard_p_plan' => $dashboard_p_plan,
            'dashboard_p_amount' => $dashboard_p_amount,
            'dashboard_p_date' => $dashboard_p_date,
            'dashboard_p_txn' => $dashboard_p_txn,
            'dashboard_set_title' => $dashboard_set_title,
            'dashboard_set_stitle' => $dashboard_set_stitle,
            'dashboard_set_keys' => $dashboard_set_keys,
            'dashboard_set_desc' => $dashboard_set_desc,
            'dashboard_alert_success' => $dashboard_alert_success,
            'Restaurants' => Restaurants::all(),
            'Nombre_Restos' => Restaurants::all()->count(),
            'currentUserInfo' => $currentUserInfo 
        ]); */
    }

    public function About()
    {
        return view("layouts.about");
    }

    public function restaurantDetail($id)
    {
        try {
            $ID = decrypt($id);
        } catch (DecryptException $e) {
            echo("AUCUN RESTAURANT CORRESPONDANT !");
        }
        
        $restaurant = Restaurants::findorFail($ID);
        $rtl = false;
        $lang = "fr";$close = "Fermer";
        $loading = "Chargement...";
        $timedate_time_second = "seconde";
        $timedate_time_minute = "minute";
        $timedate_time_hour = "heure";
        $timedate_time_day = "journée";
        $timedate_time_week = "la semaine";
        $timedate_time_month = "mois";
        $timedate_time_year = "année";
        $timedate_time_decade = "décennie";
        $timedate_time_ago = "depuis";
                
        $header_home = "Accueil";
        $header_forms = "Formes";
        $header_about = "À propos";
        $header_welcome = "Bienvenue";
        $header_new = "Nouvelle enquête";
        $header_admin = "Administration";
        $header_info = "Gérer les informations";
        $header_signin = "Connexion";
        $header_explore = "Découvrir";
        $header_restaurants = "Restaurants";
        $header_about = "A propos";
        $header_contact = "Nous-Contacter";
        $header_plans = "Plans";
        $header_login = "Connexion";
        $header_dashboard = "Dashboard";
        $header_my_orders = "Mes Commandes";
        $header_your_restaurant = "Restaurant dashboard";
        $header_testimonial = "Avis Clients";
        $header_testimonial_h = "Votre avis:";
        $header_testimonial_i = "Saisir votre avis";
        $header_testimonial_b = "Envoyer";
        $header_change_password = "Changer Mot de passe";
        $header_change_pass_i1 = "Mot de passe actuel";
        $header_change_pass_i2 = "Nouveau Mot de passe";
        $header_change_pass_bt = "Envoyer";
        $header_edit_details = "Modifier";
        $header_logout = "Déconnexion";
        $header_title = "DonExpress, Livraison Express partout à Lomé";
        $header_subtitle = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamm.";
        $header_btn = "Commander";
        $header_working_hours = "Horaires";
        $header_call = "Nous appeler";
        $header_search = "Rechercher...";
        $header_today = "Aujourdh'ui 09h:00 - 19h:00";
        $header_phone = "+228 70 30 55 66";

        $home_nearby = "Découvrez les restaurants proches de vous";
        $home_nearby_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt ut labore et dolore magna aliqua";
        $home_best = "Les meilleurs menus";
        $home_best_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." ;
        $home_addtocart = "Ajouter au panier";
        $home_more = "Voir plus";
        $home_how = "Comment passer une commande ?";
        $home_how_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt.";
        $home_how1 = "Pick Meals";
        $home_how1_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_how2 = "Choisir un paiement";
        $home_how2_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_how3 = "Livraison Express";
        $home_how3_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_customers = "Ce que disent Nos clients ";
        $home_customers_desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.";
        $home_help = "Avez-vous des questions ? Nous pourrons vous aider";
        $home_help_btn = "Envoyer";
        $home_links = "Liens" ;
        $home_unavailable = "Non Disponible";
                
        $login_username = "Votre nom d'utilisateur ou e-mail";
        $login_title = "Connexion";
        $login_password = "Votre mot de passe";
        $login_keep = "Rester connecté";
        $login_btn = "Se connecter";
        $login_footer = "Vous n'avez pas de compte?";
        $login_footer_l = "Inscription gratuite";
        $login_alert_required = "Vous avez laissé votre nom d'utilisateur ou votre mot de passe vide!";
        $login_alert_moderat = "L'adhésion a été interdite par l'administrateur, si vous pensez que c'est une erreur, n'hésitez pas à nous contacter.";
        $login_alert_activation = "L'adhésion doit être activée par e-mail.";
        $login_alert_approve = "L'adhésion doit être approuvée par l'administration.";
        $login_alert_success = "Vous êtes connecté avec succès, nous vous souhaitons de bons moments.";
        $login_alert_social = "Il y a un problème avec votre identifiant social, le nom d'utilisateur avec lequel vous souhaitez vous connecter n'est pas le vôtre ou existe déjà avec un identifiant social différent!";
        $login_alert_error = "Le nom d'utilisateur ou le mot de passe n'est pas disponible!";
                
        $signup_title = "Inscription";
        $signup_username = "Votre nom d'utilisateur";
        $signup_password = "Votre mot de passe";
        $signup_rpassword = "Confirmer mot de passe";
        $signup_email = "Votre email";
        $signup_btn = "S'inscrire";
        $signup_footer = "Avez-vous un compte?";
        $signup_footer_l = "se connecter";
        $signup_alert_required = "Tous les champs marqués d'un * sont obligatoires!";
        $signup_alert_char_username = "Le nom d'utilisateur ne doit contenir que des lettres!";
        $signup_alert_limited_username = "Le nom d'utilisateur doit être limité entre 3 et 15 caractères!";
        $signup_alert_exist_username = "Le nom d'utilisateur existe déjà!";
        $signup_alert_limited_pass = "Le mot de passe doit être limité entre 6 et 12 caractères!";
        $signup_alert_repass = "Le nouveau mot de passe doit correspondre au mot de passe!";
        $signup_alert_check_email = "Veuillez saisir un e-mail valide!";
        $signup_alert_exist_email = "L'adresse e-mail existe déjà!";
        $signup_alert_birth = "Votre date de naissance doit être comprise entre le 1-1-2005 et le 1-1-1942!";
        $signup_alert_success = "Le processus d'inscription s'est terminé avec succès.";
        $signup_alert_success1 = "Le processus d'inscription s'est terminé avec succès. Mais, encore besoin d'approbation par l'administration.";
        $signup_alert_success2 = "Le processus d'inscription s'est terminé avec succès. Mais, encore besoin d'activer par e-mail.";
        $signup_alert_error = "Le nom d'utilisateur ou le mot de passe n'est pas disponible!";
                
                
        $details_title = "Gérer les infos:";
        $details_firstname = "Ton prénom";
        $details_lastname = "Votre nom de famille";
        $details_username = "Modifier le nom d'utilisateur";
        $details_password = "Modifier le mot de passe";
        $details_email = "Modifier l'e-mail";
        $details_male = "Masculin";
        $details_female = "Femelle";
        $details_country = "Pays";
        $details_state = "État / Région";
        $details_city = "Ville";
        $details_address = "Adresse complète";
        $details_image_n = "Aucune image choisie ...";
        $details_image_c = "Choisissez l'image";
        $details_button = "Envoyer des informations";
        $details_alert_success = "Le processus de modification des informations s'est terminé avec succès.";
                
                
        $survey_close_h = "Cette enquête est actuellement clôturée.";
        $survey_close_p = "Vous souhaitez créer votre propre enquête?";
        $survey_button = "INSCRIPTION GRATUITE";
        $survey_back = "Arrière";
        $survey_next = "Prochain";
        $survey_alert_error = "requis pour répondre!";
                
                
        $alerts_no_data = "Aucune donnée disponible!";
        $alerts_permission = "Vous ne pouvez pas accéder à cette page car vous devez mettre à jour votre plan!";
        $alerts_wrong = "Quelque chose a mal tourné!";
        $alerts_required = "Tous les champs marqués d'un * sont obligatoires!";
        $alerts_danger = "Oh snap!";
        $alerts_success = "Bien joué!";
        $alerts_warning = "Attention!";
        $alerts_info = "La tête haute!";
                
        $responses_title = "Mes réponses au sondage";
        $responses_btn_1 = "Voir Rapport";
        $responses_btn_2 = "Modifier l'enquête";
                
        $rapports_title = "Titre:";
        $rapports_btn1 = "Créer une enquête";
        $rapports_btn2 = "Modifier l'enquête";
        $rapports_stats_d = "Statistiques des 7 derniers jours";
        $rapports_stats_m = "Statistiques pour cette année";
        $rapports_views = "Vues:";
        $rapports_responses = "Réponses:";
        $rapports_rate = "Taux complété:";
        $rapports_start = "Date de début:";
        $rapports_end = "Date de fin:";
        $rapports_last_r = "Dernière réponse:";
        $rapports_days = "Les 7 derniers jours";
        $rapports_months = "Mois";
        $rapports_results = "Tous les résultats";
        $rapports_export = "Exporter des données";
        $rapports_by = "Répondre par";
        $rapports_people = "gens";
        $rapports_alert_success = "Le processus de modification des informations s'est terminé avec succès.";
                
                
        $plans_title = "Tarification simple pour tout le monde!";
        $plans_desc = "Prix ​​construit pour les entreprises de toutes tailles. Sachez toujours ce que vous allez payer. Tous les plans sont livrés avec 100% de remboursement guarane.";
        $plans_month = "/par mois";
        $plans_btn = "Commencer";
        $plans_alert_success = "Vos paiements ont été calculés!";
                
                
        $new_title = "Créer une nouvelle enquête";
        $new_questions = "Des questions";
        $new_welcome = "Page d'accueil";
        $new_thanks = "Page de remerciements";
        $new_design = "Conception";
        $new_stitle = "Titre de l'enquête";
        $new_start = "Date de début de l'enquête";
        $new_end = "Date de fin de l'enquête";
        $new_url = "Rediriger l'URL";
        $new_private = "Ce surevey est privé (ne prend que par URL)";
        $new_unpub = "Non publié";
        $new_ip = "Restriction IP";
        $new_start_q = "Commencez à poser des questions!";
        $new_new_step = "Ajouter une nouvelle étape";
        $new_new_q = "Nouvelle question";
        $new_new_qpl = "Écrivez votre question";
        $new_new_qde = "Rédigez une brève description de votre question";
        $new_new_qre = "Question requise pour répondre";
        $new_new_qln = "Réponses sur la même ligne";
        $new_new_a = "Nouvelles réponses";
        $new_new_abtn = "Ajouter un nouveau";
        $new_new_as1 = "Texte sur une seule ligne";
        $new_new_as2 = "Texte du paragraphe";
        $new_new_as3 = "Choix multiple (case à cocher)";
        $new_new_as4 = "Multi choix (Radio)";
        $new_new_as5 = "Échelle de notation";
        $new_new_as6 = "Date heure";
        $new_new_as7 = "Numéro de téléphone";
        $new_new_as8 = "Pays";
        $new_new_as9 = "Adresse email";
        $new_new_asi = "Icône";
        $new_new_aspl = "espace réservé";
        $new_new_asck = "Écrivez un nom";
        $new_wp = "Page d'accueil";
        $new_wp_h = "Headling";
        $new_wp_btn = "Texte du bouton Démarrer";
        $new_wp_icon = "Icône du bouton Démarrer";
        $new_tx = "Page de remerciements";
        $new_tx_h = "Headling";
        $new_tx_btn = "Texte du bouton de fin";
        $new_tx_icon = "Icône du bouton de fin";
        $new_send = "Envoyer l'enquête";
        $new_design_bs = "Ombre du bouton:";
        $new_design_bb = "Bordure du bouton:";
        $new_design_si = "Taille:";
        $new_design_s = "Style:";
        $new_design_c = "Couleur";
        $new_design_btg = "Arrière-plan du bouton:";
        $new_design_g = "Pente";
        $new_design_n = "Ordinaire";
        $new_design_btc = "Couleur du texte Butoon:";
        $new_design_sbg = "Contexte de l'enquête:";
        $new_design_stbg = "Contexte de l'étape:";
        $new_design_ibg = "Contexte d'entrée:";
        $new_design_yes = "Oui";
        $new_design_no = "Non";
        $new_alert_error = "Erreur! Certains champs d'enquête sont obligatoires!";
        $new_alert_error1 = "Erreur! Veuillez vous assurer d'ajouter {var}!";
        $new_alert_error2 = "Erreur! Veuillez vous assurer d'ajouter des questions à l'étape";
        $new_alert_error3 = "Erreur! Veuillez vous assurer que la question {var} comporte plus de 8 lettres!";
        $new_alert_error4 = "Erreur! Veuillez vous assurer d'ajouter des réponses à la question";
        $new_alert_error5 = "Erreur! Veuillez vous assurer que toutes les réponses à la question {var} ont une valeur supérieure à 3 lettres";
        $new_alert_success = "Succès! terminé!!";
                
                
        $edit_title = "Modifier une nouvelle enquête";
        $edit_alert_success = "Vos paiements ont été calculés!";
                
                
        $mysurvys_title = "Mes sondages";
        $mysurvys_alltitle = "Tous les sondages";
        $mysurvys_create = "Créer une enquête";
        $mysurvys_status = "Statut";
        $mysurvys_name = "Nom de l'enquête";
        $mysurvys_views = "Vues";
        $mysurvys_responses = "Réponses";
        $mysurvys_rate = "Tarif complet";
        $mysurvys_created = "Créé";
        $mysurvys_last_r = "Dernière réponse";
        $mysurvys_op_view = "Afficher l'enquête";
        $mysurvys_op_stats = "Statistiques d'enquête";
        $mysurvys_op_resp = "Afficher les réponses";
        $mysurvys_op_edit = "Modifier l'enquête";
        $mysurvys_op_delete = "Supprimer l'enquête";
        $mysurvys_alert_success = "Vos paiements ont été calculés!";
                
                
        $dashboard_hello = "Bonjour,";
        $dashboard_welcome = "Bienvenue à nouveau dans votre tableau de bord.";
        $dashboard_stats_line_d = "Statistiques des 7 derniers jours";
        $dashboard_stats_line_m = "Statistiques pour cette année";
        $dashboard_stats_bar_d = "Statistiques des 7 derniers jours";
        $dashboard_stats_bar_m = "Statistiques pour cette année";
        $dashboard_surveys = "Enquêtes";
        $dashboard_users = "Utilisateurs";
        $dashboard_responses = "Réponses";
        $dashboard_questions = "Des questions";
        $dashboard_new_u = "Nouveaux utilisateurs (24h)";
        $dashboard_new_p = "Derniers paiements (24h)";
        $dashboard_new_s = "Dernières enquêtes (24h)";
        $dashboard_u_users = "Membres";
        $dashboard_u_status = "Statut";
        $dashboard_u_username = "Nom d'utilisateur";
        $dashboard_u_plan = "Plan";
        $dashboard_u_credits = "Crédits";
        $dashboard_u_last_p = "Dernier paiement";
        $dashboard_u_registred = "Enregistré à";
        $dashboard_u_updated = "Mis à jour à";
        $dashboard_u_delete = "Supprimer l'utilisateur";
        $dashboard_u_edit = "Modifier l'utilisateur";
        $dashboard_p_title = "Paiements";
        $dashboard_p_user = "Utilisateur";
        $dashboard_p_status = "Statut";
        $dashboard_p_plan = "Plan";
        $dashboard_p_amount = "Montant";
        $dashboard_p_date = "Date de paiement";
        $dashboard_p_txn = "TXN";
        $dashboard_set_title = "réglages généraux";
        $dashboard_set_stitle = "Titre du site:";
        $dashboard_set_keys = "Mots clés du site:";
        $dashboard_set_desc = "Description du site:";
        $dashboard_set_url = "URL du site:";
        $dashboard_set_btn = "Paramètres d'envoi";
        $dashboard_alert_success = "Le paramètre a été envoyé avec succès.";
        $item = Items::all();

        return view('layouts.restaurantDetail', [
            'restaurant' => $restaurant,
            'items' => $item,
            'rtl' => $rtl,
            'lang' => $lang,
            'close' => $close,
            'loading' => $loading,
            'timedate_time_second' => $timedate_time_second,
            'timedate_time_minute' => $timedate_time_minute,
            'timedate_time_hour' => $timedate_time_hour,
            'timedate_time_day' => $timedate_time_day,
            'timedate_time_week' => $timedate_time_week,
            'timedate_time_month' => $timedate_time_month,
            'timedate_time_year' => $timedate_time_year,
            'timedate_time_decade' => $timedate_time_decade,
            'timedate_time_ago' => $timedate_time_ago,
            
            'header_home' => $header_home,
            'header_forms' => $header_forms,
            'header_about' => $header_about,
            'header_welcome' => $header_welcome,
            'header_new' => $header_new,
            'header_admin' => $header_admin,
            'header_info' => $header_info,
            'header_signin' => $header_signin,
            'header_explore' => $header_explore,
            'header_restaurants' => $header_restaurants,
            'header_about' => $header_about,
            'header_contact' => $header_contact,
            'header_plans' => $header_plans,
            'header_login' => $header_login,
            'header_dashboard' => $header_dashboard,
            'header_my_orders' => $header_my_orders,
            'header_your_restaurant' => $header_your_restaurant,
            'header_testimonial' => $header_testimonial,
            'header_testimonial_h' => $header_testimonial_h,
            'header_testimonial_i' => $header_testimonial_i,
            'header_testimonial_b' => $header_testimonial_b,
            'header_change_password' => $header_change_password,
            'header_change_pass_i1' => $header_change_pass_i1,
            'header_change_pass_i2' => $header_change_pass_i2,
            'header_change_pass_bt' => $header_change_pass_bt,
            'header_edit_details' => $header_edit_details,
            'header_logout' => $header_logout,
            'header_title' => $header_title,
            'header_subtitle' => $header_subtitle,
            'header_btn' => $header_btn,
            'header_working_hours' => $header_working_hours,
            'header_call' => $header_call,
            'header_search' => $header_search,
            'header_today' =>$header_today,
            'header_phone' => $header_phone,

            'home_nearby' => $home_nearby,
            'home_nearby_desc' => $home_nearby_desc,
            'home_best' => $home_best,
            'home_best_desc' => $home_best_desc,
            'home_addtocart' => $home_addtocart,
            'home_more' => $home_more,
            'home_how' => $home_how,
            'home_how_desc' => $home_how_desc,
            'home_how1' => $home_how1,
            'home_how1_desc' => $home_how1_desc,
            'home_how2' => $home_how2,
            'home_how2_desc' => $home_how2_desc,
            'home_how3' => $home_how3,
            'home_how3_desc' => $home_how3_desc,
            'home_customers' => $home_customers,
            'home_customers_desc' => $home_customers_desc,
            'home_help' => $home_help,
            'home_help_btn' => $home_help_btn,
            'home_links' => $home_links,
            'home_unavailable' => $home_unavailable,
            
            'login_username' => $login_username,
            'login_password' => $login_password,
            'login_title' =>  $login_title,
            'login_keep' => $login_keep,
            'login_btn' => $login_btn,
            'login_footer' => $login_footer,
            'login_footer_l' => $login_footer_l,
            'login_alert_required' => $login_alert_required,
            'login_alert_moderat' => $login_alert_moderat,
            'login_alert_activation' => $login_alert_activation,
            'login_alert_approve' => $login_alert_approve,
            'login_alert_success' => $login_alert_success,
            'login_alert_social' => $login_alert_social,
            'login_alert_error' => $login_alert_error,
            
            'signup_title' => $signup_title,
            'signup_username' => $signup_username,
            'signup_password' => $signup_password,
            'signup_rpassword' => $signup_rpassword,
            'signup_email' => $signup_email,
            'signup_btn' => $signup_btn,
            'signup_footer' => $signup_footer,
            'signup_footer_l' => $signup_footer_l,
            'signup_alert_required' => $signup_alert_required,
            'signup_alert_char_username' => $signup_alert_char_username,
            'signup_alert_limited_username' => $signup_alert_limited_username,
            'signup_alert_exist_username' => $signup_alert_exist_username,
            'signup_alert_limited_pass' => $signup_alert_limited_pass,
            'signup_alert_repass' => $signup_alert_repass,
            'signup_alert_check_email' => $signup_alert_check_email,
            'signup_alert_exist_email' => $signup_alert_exist_email,
            'signup_alert_birth' => $signup_alert_birth,
            'signup_alert_success' => $signup_alert_success,
            'signup_alert_success1' => $signup_alert_success1,
            'signup_alert_success2' => $signup_alert_success2,
            'signup_alert_error' => $signup_alert_error,
            
            
            'details_title' => $details_title,
            'details_firstname' => $details_firstname,
            'details_lastname' => $details_lastname,
            'details_username' => $details_username,
            'details_password' => $details_password,
            'details_email' => $details_email,
            'details_male' => $details_male,
            'details_female' => $details_female,
            'details_country' => $details_country,
            'details_state' => $details_state,
            'details_city' => $details_city,
            'details_address' => $details_address,
            'details_image_n' => $details_image_n,
            'details_image_c' => $details_image_c,
            'details_button' => $details_button,
            'details_alert_success' => $details_alert_success,
            
            
            'survey_close_h' => $survey_close_h,
            'survey_close_p' => $survey_close_p,
            'survey_button' => $survey_button,
            'survey_back' => $survey_back,
            'survey_next' => $survey_next,
            'survey_alert_error' => $survey_alert_error,
            
            
            'alerts_no_data' => $alerts_no_data,
            'alerts_permission' => $alerts_permission,
            'alerts_wrong' => $alerts_wrong,
            'alerts_required' => $alerts_required,
            'alerts_danger' => $alerts_danger,
            'alerts_success' => $alerts_success,
            'alerts_warning' => $alerts_warning,
            'alerts_info' =>$alerts_info,
            
            'responses_title' => $responses_title,
            'responses_btn_1' => $responses_btn_1,
            'responses_btn_2' => $responses_btn_2,
            
            'rapports_title' => $rapports_title,
            'rapports_btn1' => $rapports_btn1,
            'rapports_btn2' => $rapports_btn2,
            'rapports_stats_d' => $rapports_stats_d,
            'rapports_stats_m' => $rapports_stats_m,
            'rapports_views' => $rapports_views,
            'rapports_responses' => $rapports_responses,
            'rapports_rate' => $rapports_rate,
            'rapports_start' => $rapports_start,
            'rapports_end' => $rapports_end,
            'rapports_last_r' => $rapports_last_r,
            'rapports_days' => $rapports_days,
            'rapports_months' => $rapports_months,
            'rapports_results' => $rapports_results,
            'rapports_export' => $rapports_export,
            'rapports_by' => $rapports_by,
            'rapports_people' => $rapports_people,
            'rapports_alert_success' => $rapports_alert_success,
            
            
            'new_title' => $new_title,
            'new_questions' => $new_questions,
            'new_welcome' => $new_welcome,
            'new_thanks' => $new_thanks,
            'new_design' => $new_design,
            'new_stitle' => $new_stitle,
            'new_start' => $new_start,
            'new_end' => $new_end,
            'new_url' => $new_url,
            'new_private' => $new_private,
            'new_unpub' => $new_unpub,
            'new_ip' => $new_ip,
            'new_start_q' => $new_start_q,
            'new_new_step' => $new_new_step,
            'new_new_q' => $new_new_q,
            'new_new_qpl' => $new_new_qpl,
            'new_new_qde' => $new_new_qde,
            'new_new_qre' => $new_new_qre,
            'new_new_qln' => $new_new_qln,
            'new_new_a' => $new_new_a,
            'new_new_abtn' => $new_new_abtn,
            'new_new_as1' => $new_new_as1,
            'new_new_as2' => $new_new_as2,
            'new_new_as3' => $new_new_as3,
            'new_new_as4' => $new_new_as4,
            'new_new_as5' => $new_new_as5,
            'new_new_as6' => $new_new_as6,
            'new_new_as7' => $new_new_as7,
            'new_new_as8' => $new_new_as8,
            'new_new_as9' => $new_new_as9,
            'new_new_asi' => $new_new_asi,
            'new_new_aspl' => $new_new_aspl,
            'new_new_asck' => $new_new_asck,
            'new_wp' => $new_wp,
            'new_wp_h' => $new_wp_h,
            'new_wp_btn' => $new_wp_btn,
            'new_wp_icon' => $new_wp_icon,
            'new_tx' => $new_tx,
            'new_tx_h' => $new_tx_h,
            'new_tx_btn' => $new_tx_btn,
            'new_tx_icon' => $new_tx_icon,
            'new_send' => $new_send,
            'new_design_bs' => $new_design_bs,
            'new_design_bb' => $new_design_bb,
            'new_design_si' => $new_design_si,
            'new_design_s' => $new_design_s,
            'new_design_c' => $new_design_c,
            'new_design_btg' => $new_design_btg,
            'new_design_g' => $new_design_g,
            'new_design_n' => $new_design_n,
            'new_design_btc' => $new_design_btc,
            'new_design_sbg' => $new_design_sbg,
            'new_design_stbg' => $new_design_stbg,
            'new_design_ibg' => $new_design_ibg,
            'new_design_yes' => $new_design_yes,
            'new_design_no' => $new_design_no,
            'new_alert_error' => $new_alert_error,
            'new_alert_error1' => $new_alert_error1,
            'new_alert_error2' => $new_alert_error2,
            'new_alert_error3' => $new_alert_error3,
            'new_alert_error4' => $new_alert_error4,
            'new_alert_error5' => $new_alert_error5,
            'new_alert_success' => $new_alert_success,
            
            
            'edit_title' => $edit_title,
            'edit_alert_success' => $edit_alert_success,

            'mysurvys_title' => $mysurvys_title,
            'mysurvys_alltitle' => $mysurvys_alltitle,
            'mysurvys_create' => $mysurvys_create,
            'mysurvys_status' => $mysurvys_status,
            'mysurvys_name' => $mysurvys_name,
            'mysurvys_views' => $mysurvys_views,
            'mysurvys_responses' => $mysurvys_responses,
            'mysurvys_rate' => $mysurvys_rate,
            'mysurvys_created' => $mysurvys_created,
            'mysurvys_last_r' => $mysurvys_last_r,
            'mysurvys_op_view' => $mysurvys_op_view,
            'mysurvys_op_stats' => $mysurvys_op_stats,
            'mysurvys_op_resp' => $mysurvys_op_resp,
            'mysurvys_op_edit' => $mysurvys_op_edit,
            'mysurvys_op_delete' => $mysurvys_op_delete,
            'mysurvys_alert_success' => $mysurvys_alert_success,
            
            
            'dashboard_hello' => $dashboard_hello,
            'dashboard_welcome' => $dashboard_welcome,
            'dashboard_stats_line_d' =>$dashboard_stats_line_d,
            'dashboard_stats_line_m' => $dashboard_stats_line_m,
            'dashboard_stats_bar_d' => $dashboard_stats_bar_d,
            'dashboard_stats_bar_m' => $dashboard_stats_bar_m,
            'dashboard_surveys' => $dashboard_surveys,
            'dashboard_users' => $dashboard_users,
            'dashboard_responses' => $dashboard_responses,
            'dashboard_questions' => $dashboard_questions,
            'dashboard_new_u' => $dashboard_new_u,
            'dashboard_new_p' => $dashboard_new_p,
            'dashboard_new_s' => $dashboard_new_s,
            'dashboard_u_users' => $dashboard_u_users,
            'dashboard_u_status' => $dashboard_u_status,
            'dashboard_u_username' => $dashboard_u_username,
            'dashboard_u_plan' => $dashboard_u_plan,
            'dashboard_u_credits' => $dashboard_u_credits,
            'dashboard_u_last_p' => $dashboard_u_last_p,
            'dashboard_u_registred' => $dashboard_u_registred,
            'dashboard_u_updated' => $dashboard_u_updated,
            'dashboard_u_delete' => $dashboard_u_delete,
            'dashboard_u_edit' => $dashboard_u_edit,
            'dashboard_p_title' => $dashboard_p_title,
            'dashboard_p_user' => $dashboard_p_user,
            'dashboard_p_status' => $dashboard_p_status,
            'dashboard_p_plan' => $dashboard_p_plan,
            'dashboard_p_amount' => $dashboard_p_amount,
            'dashboard_p_date' => $dashboard_p_date,
            'dashboard_p_txn' => $dashboard_p_txn,
            'dashboard_set_title' => $dashboard_set_title,
            'dashboard_set_stitle' => $dashboard_set_stitle,
            'dashboard_set_keys' => $dashboard_set_keys,
            'dashboard_set_desc' => $dashboard_set_desc,
            'dashboard_alert_success' => $dashboard_alert_success
        ]);
    }
}