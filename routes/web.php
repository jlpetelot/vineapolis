<?php

/*
|--------------------------------------------------------------------------
| Les routes des cartes et le Front-End
|--------------------------------------------------------------------------
*/

/* FRANCE */
Route::get('/', 'IndexController@index')->name('accueil');
/* ../FRANCE */

/* BOURGOGNE */
Route::get('/france/bourgogne', 'Cartes\BourgogneController@index')->name('bourgogne');
Route::get('/france/bourgogne/chablis', 'Cartes\BourgogneController@chablis')->name('chablis');
Route::get('/france/bourgogne/cote-de-nuits', 'Cartes\BourgogneController@cotedenuits')->name('cotedenuits');
Route::get('/france/bourgogne/cote-chalonnaise-et-couchoise', 'Cartes\BourgogneController@cotechalonnaise')->name('cotechalonnaise');
Route::get('/france/bourgogne/macon', 'Cartes\BourgogneController@macon')->name('macon');
Route::get('/france/bourgogne/beaune-et-cotes-de-beaune', 'Cartes\BourgogneController@beauneetcotesdebeaune')->name('beauneetcotedebeaune');
Route::get('/france/bourgogne/chablis/grands-crus-de-chablis', 'Cartes\BourgogneController@grandscrusdechablis')->name('grandscrusdechablis');
Route::get('/france/bourgogne/cote-de-nuits/gevrey-chambertin', 'Cartes\BourgogneController@gevreychambertin')->name('gevreychambertin');
Route::get('/france/bourgogne/cote-de-nuits/chambolle-musigny', 'Cartes\BourgogneController@chambollemusigny')->name('chambollemusigny');
Route::get('/france/bourgogne/cote-de-nuits/vougeot', 'Cartes\BourgogneController@vougeot')->name('vougeot');
Route::get('/france/bourgogne/cote-de-nuits/vosne-romanee', 'Cartes\BourgogneController@vosne')->name('vosne');
Route::get('/france/bourgogne/cote-de-nuits/nuits-saint-georges', 'Cartes\BourgogneController@nuitssaintgeorges')->name('nuitssaintgeorges');
Route::get('/france/bourgogne/beaune-et-cotes-de-beaune/1ers-crus-et-grands-crus', 'Cartes\BourgogneController@beaune')->name('beaune');
Route::get('/france/bourgogne/beaune-et-cotes-de-beaune/aloxe-corton', 'Cartes\BourgogneController@aloxecorton')->name('aloxecorton');
Route::get('/france/bourgogne/beaune-et-cotes-de-beaune/chassagne-montrachet', 'Cartes\BourgogneController@chassagnemontrachet')->name('chassagnemontrachet');
Route::get('/france/bourgogne/beaune-et-cotes-de-beaune/pommard', 'Cartes\BourgogneController@pommard')->name('pommard');
Route::get('/france/bourgogne/beaune-et-cotes-de-beaune/puligny-montrachet', 'Cartes\BourgogneController@pulignymontrachet')->name('pulignymontrachet');
Route::get('/france/bourgogne/beaune-et-cotes-de-beaune/volnay', 'Cartes\BourgogneController@volnay')->name('volnay');
/* ../BOURGOGNE */

/* CHAMPAGNE */
Route::get('/france/champagne', 'Cartes\ChampagneController@index')->name('champagne');
Route::get('/france/champagne/montagne-de-reims-et-cote-des-blancs', 'Cartes\ChampagneController@montagnedereims')->name('montagnedereims');
Route::get('/france/champagne/vallee-de-la-marne', 'Cartes\ChampagneController@valleemarne')->name('valleedelamarne');
/* ../CHAMPAGNE */

/* ALSACE */
Route::get('/france/alsace', 'Cartes\AlsaceController@index')->name('alsace');
/* ../ALSACE */

/* LOIRE */
Route::get('/france/loire', 'Cartes\LoireController@index')->name('loireetcentre');
Route::get('/france/loire/pouilly', 'Cartes\LoireController@pouilly')->name('pouilly');
Route::get('/france/loire/quincy-reuilly', 'Cartes\LoireController@quincyreuilly')->name('quincyetreuilly');
Route::get('/france/loire/sancerre-menetou-salon', 'Cartes\LoireController@sancerremenetou')->name('sancerreetmenetousalon');
Route::get('/france/loire/saumur-champigny', 'Cartes\LoireController@saumurchampigny')->name('saumurchampigny');

/* ../LOIRE */

/* BORDEAUX */
Route::get('/france/bordeaux', 'Cartes\BordeauxController@index')->name('bordeaux');
Route::get('/france/bordeaux/medoc', 'Cartes\BordeauxController@medoc')->name('medoc');
Route::get('/france/bordeaux/medoc/margaux', 'Cartes\BordeauxController@margaux')->name('margaux');
Route::get('/france/bordeaux/medoc/moulis-listrac', 'Cartes\BordeauxController@moulislistrac')->name('moulislistrac');
Route::get('/france/bordeaux/medoc/pauillac', 'Cartes\BordeauxController@pauillac')->name('pauillac');
Route::get('/france/bordeaux/medoc/saint-estephe', 'Cartes\BordeauxController@saintestephe')->name('saintestephe');
Route::get('/france/bordeaux/medoc/saint-julien', 'Cartes\BordeauxController@saintjulien')->name('saintjulien');
Route::get('/france/bordeaux/pessac-leognan', 'Cartes\BordeauxController@pessacleognan')->name('pessacleognan');
Route::get('/france/bordeaux/pomerol', 'Cartes\BordeauxController@pomerol')->name('pomerol');
Route::get('/france/bordeaux/saint-emilion', 'Cartes\BordeauxController@saintemilion')->name('saintemilion');
Route::get('/france/bordeaux/sauternes-barsac', 'Cartes\BordeauxController@sauternes')->name('sauternes');
/* ../BORDEAUX */

/* JURA */
Route::get('/france/jura', 'Cartes\JuraController@index')->name('Jura');
/* ../JURA */

/* LANGUEDOC-ROUSSILLON */
Route::get('/france/languedoc-roussillon', 'Cartes\LanguedocController@index')->name('languedocroussillon');
/* ../languedoc-roussillon */

/* BEAUJOLAIS */
Route::get('/france/beaujolais', 'Cartes\BeaujolaisController@index')->name('beaujolais');
/* ../BEAUJOLAIS */

/* LORRAINE */
Route::get('/france/lorraine', 'Cartes\LorraineController@index')->name('lorraine');
/* ../LORRAINE */

/* COGNAC */
Route::get('/france/cognac', 'Cartes\CognacController@index')->name('cognac');
/* ../COGNAC */

/* ARMAGNAC */
Route::get('/france/armagnac', 'Cartes\ArmagnacController@index')->name('armagnac');
/* ../ARMAGNAC */

/* AUVERGNE */
Route::get('/france/auvergne', 'Cartes\AuvergneController@index')->name('auvergne');
/* ../AUVERGNE */

/* BUGEY */
Route::get('/france/bugey', 'Cartes\BugeyController@index')->name('bugey');
/* ../BUGEY */

/* SAVOIE */
Route::get('/france/savoie', 'Cartes\SavoieController@index')->name('savoie');
/* ../SAVOIE */

/* CORSE */
Route::get('/france/corse', 'Cartes\CorseController@index')->name('corse');
/* ../CORSE */

/* PROVENCE */
Route::get('/france/provence', 'Cartes\ProvenceController@index')->name('provence');
/* ../PROVENCE */

/* CÔTES DU RHÔNE SEPTENTRIONAL */
Route::get('/france/cotes-du-rhone-septentrional', 'Cartes\RhoneseptentrionalController@index')->name('septentrional');
Route::get('/france/cotes-du-rhone-septentrional/saint-peray-cornas', 'Cartes\RhoneseptentrionalController@saintperaycornas')->name('saintperaycornas');
/* ../CÔTES DU RHÔNE SEPTENTRIONAL */

/* CÔTES DU RHÔNE MÉRIDIONAL */
Route::get('/france/cotes-du-rhone-meridional', 'Cartes\RhonemeridionalController@index')->name('meridional');
/* ../CÔTES DU RHÔNE MÉRIDIONAL */

/* SUD-OUEST */
Route::get('/france/sud-ouest', 'Cartes\SudouestController@index')->name('Sudouest');
Route::get('/france/sud-ouest/aveyron', 'Cartes\SudouestController@aveyron')->name('Aveyron');
/* ../SUD-OUEST */

/* OENOLOGIE */
Route::get('/oenologie', 'OenologieController@index')->name('oenologie');
/* ../OENOLOGIE *

/* NEWSLETTER */
Route::get('/newsletter', 'NewsletterController@index')->name('newsletter');
Route::post('/newsletter/store', 'NewsletterController@store')->name('newsletter.store');

/* ../NEWSLETTER */

/* TOUS LES CONTACTS */
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@postcontact')->name('contact.post');

Route::get('/contact/vigneron/{vigneron?}', 'ContactController@contactvigneron')->name('contactvigneron');
Route::get('/contact/vignerons', 'ContactController@contactvignerons')->name('contactvignerons');
Route::post('/contact/vigneron', 'ContactController@postchaquevigneron')->name('contactvigneron.post');
Route::post('/contact/vignerons', 'ContactController@postchaquevignerons')->name('contactvignerons.post');

Route::get('/contact/annonceurs', 'ContactController@annonceurs')->name('annonceurs');
Route::post('/contact/annonceurs/post', 'ContactController@annonceurspost')->name('annonceurs.post');
/* ../TOUS LES CONTACTS */

/* TOUS LES VINS */
Route::get('/tous-les-vins', 'TouslesvinsController@recherche')->name('touslesvins');
Route::get('/tous-les-vins/recherche', 'TouslesvinsController@recherche')->name('touslesvins.recherche');
Route::get('/detail-du-vin/{vigneron}', 'DetailvinController@index')->name('detailvin');
/* La route en attente pour l'envoi des messages, on envoit en paramètre l'alias de la société du vigneron */
Route::post('/detail-du-vin/envoi-du-message/{aliassociete}', 'DetailvinController@envoimessage')->name('detailvin.body');
/* ../TOUS LES VINS */

/* L'AUTH */
Auth::routes();
/* ../L'AUTH */

/* LES AUTHS SUPPLÉMENTAIRES */
Route::get('/logininternaute', 'Auth\LoginInternauteController@showLoginForm')->name('logininternaute');
Route::post('/logoutinternaute', 'Auth\LoginInternauteController@logout')->name('logoutinternaute');
Route::get('/registerinternaute', 'Auth\RegisterinternauteController@showRegistrationForm')->name('registerinternaute');
Route::post('/registerinternaute', 'Auth\RegisterinternauteController@registerinternautepost')->name('registerinternautepost');

Route::get('/loginvigneron', 'Auth\LoginVigneronController@showLoginForm')->name('loginvigneron');
Route::post('/logoutvigneron', 'Auth\LoginVigneronController@logout')->name('logoutvigneron');
Route::get('/registervigneron', 'Auth\RegistervigneronController@showRegistrationForm')->name('registervigneron');
//Route::post('/registervigneron', 'Auth\RegistervigneronController@registervigneronpost')->name('registervigneronpost');

Route::get('/loginannonceur', 'Auth\LoginAnnonceurController@showLoginForm')->name('loginannonceur');
Route::post('/logoutannonceur', 'Auth\LoginAnnonceurController@logout')->name('logoutannonceur');
Route::get('/registerannonceur', 'Auth\RegisterannonceurController@showRegistrationForm')->name('registerannonceur');
// Route::post('/registerannonceur', 'Auth\RegisterannonceurController@registerannonceurpost')->name('registerannonceurpost');
/* ../LES AUTHS SUPPLÉMENTAIRES */

/*
|--------------------------------------------------------------------------
| ../Les routes des cartes et le Front-End
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Le Backend
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function ()
{
    /* L'ACCUEIL ET AJOUT DES TÂCHES */
    // On a mis l'id en option pour les vignerons qui doivent obligatoirement avoir un id
    Route::get('/', 'Backend\AccueilController@index')->name('admin');
    Route::get('/ajout-tache', 'Backend\AccueilController@ajouttache')->name('ajouttache');
    Route::put('/ajout-tache/store', 'Backend\AccueilController@store')->name('ajouttache.store');
    Route::delete('/ajout-tache/destroy/{id}', 'Backend\AccueilController@destroy')->name('ajouttache.destroy');
    /* ../L'ACCUEIL ET AJOUT DES TÂCHES */

    /* MESSAGES */
    Route::get('/messages', 'Backend\MessagesController@index')->name('admin.messages');
    Route::get('/message/{id}', 'Backend\MessagesController@detail')->name('admin.message.detail');
    Route::get('/renvoi/identifiant/{id}', 'Backend\MessagesController@renvoiidentifiant')->name('admin.renvoi.identifiant');
    Route::delete('/destroymessage/{id}', 'Backend\MessagesController@destroymessage')->name('destroy.message');
    Route::get('/message/email/{id}', 'Backend\MessagesController@messageemail')->name('admin.message.email');
    Route::post('/message/email/{id}', 'Backend\MessagesController@messageenvoi')->name('admin.message.envoi');
    /* MESSAGES */

    /* GESTION IMAGES */
    Route::get('/gestionimages', 'Backend\GestionimagesController@gestionimages')->name('admin.gestionimages');
    /* ../GESTION IMAGES */

    /* FACTUREs */
    // Route::get('/creerfacture', 'Backend\CreerFactureController@index')->name('admin.creerfacture');
    // Route::post('/creerfacture/creerPDF', 'Backend\CreerFactureController@creerPDF')->name('admin.creerfacture.creerPDF');
    // Route::get('/touteslesfactures', 'Backend\CreerFactureController@touteslesfactures')->name('admin.touteslesfactures');

    Route::resource('factures', 'Backend\FacturesController');
    /* ../FACTUREs */

    /* UTILISATEURS */
    Route::get('/utilisateurs', 'Backend\UsersController@utilisateurs')->name('admin.utilisateurs');
    Route::get('/utilisateur/create', 'Backend\UsersController@create')->name('admin.utilisateur.create');
    Route::get('/utilisateur/motdepasse', 'Backend\UsersController@motdepasse')->name('admin.utilisateur.motdepasse');
    Route::get('/utilisateur/edit/{id}', 'Backend\UsersController@edit')->name('admin.utilisateur.edit');
    Route::put('/utilisateur/update/{id}', 'Backend\UsersController@update')->name('admin.utilisateur.update');
    Route::post('/utilisateur/store', 'Backend\UsersController@store')->name('admin.utilisateur.store');
    Route::delete('/utilisateur/destroy/{id}', 'Backend\UsersController@destroy')->name('admin.utilisateur.destroy');

    Route::get('/utilisateurs/touslespedefs/{id}', 'Backend\UsersController@touslespedefs')->name('admin.touslespedefs');
    /* UTILISATEURS */

    /* ADMIN (METTRE À JOUR LES PROFILS) */
    Route::get('/profil/{id}', 'Backend\UsersController@profil')->name('admin.profil');
    Route::put('/updateprofil/{id}', 'Backend\UsersController@updateprofil')->name('admin.updateprofil');
    Route::put('/updateprofilimage/{id}', 'Backend\UsersController@updateprofilimage')->name('admin.updateprofilimage');
    Route::get('/statistiques/{id}', 'Backend\UsersController@statistiques')->name('admin.statistiques');
    Route::get('/achats/{id}', 'Backend\UsersController@achats')->name('admin.achats');

    // Achats pour l'annonceur
    Route::get('/achatsannonceur/{id}', 'Backend\UsersController@achatsannonceur')->name('admin.achatsannonceur');
    // Détails des achats pour l'administrateur qui gère les vigneerons
    Route::get('/detailachat/{id}', 'Backend\UsersController@detailachat')->name('admin.detailachat');
    // Détails des achats pour l'administrateur qui gère les annonceurs
    Route::get('/detailachatanonceur/{id}', 'Backend\UsersController@detailachatanonceur')->name('admin.detailachatanonceur');
    // Détails des achats pour les vignerons
    Route::get('/detailsachat/{id}', 'Backend\UsersController@detailsachat')->name('admin.detailsachat');
    // Tous les achats d'un annonceurs
    Route::get('/detailsachatannonceur/{id}', 'Backend\UsersController@detailsachatannonceur')->name('admin.detailsachatannonceur');
    // Affiche le détail d'un des achats de l'annonceur
    Route::post('/editdetailachatanonceur/{id}', 'Backend\UsersController@editdetailachatanonceur')->name('admin.editdetailachatanonceur');
    // Détails des achats pour les annonceurs
    Route::post('/updateachatannonceur/{id}', 'Backend\UsersController@updateachatannonceur')->name('admin.updateachatannonceur');
    
    Route::post('/telechargerPDF/{id}', 'Backend\UsersController@telechargerPDF')->name('admin.telechargerPDF');
    /* ../ADMIN (METTRE À JOUR LES PROFILS) */

    // Achats pour les vignerons
    Route::get('/detailsachatvigneron/{id}', 'Backend\UsersController@detailsachatvigneron')->name('admin.detailsachatvigneron');
    // Détails des achats pour les vignerons
    Route::post('/updateachatvigneron/{id}', 'Backend\UsersController@updateachatvigneron')->name('admin.updateachatvigneron');
    // Affiche le détail d'un des achats du vigneron
    Route::post('/editdetailachatvigneron/{id}', 'Backend\UsersController@editdetailachatvigneron')->name('admin.editdetailachatvigneron');

    /* VIGNERONS ADMIN */
    Route::get('/all', 'Backend\VigneronsController@all')->name('admin.all');
    Route::get('/create', 'Backend\VigneronsController@create')->name('admin.create');
    Route::post('/store', 'Backend\VigneronsController@store')->name('admin.store');
    Route::get('/create/identifiant/{id?}', 'Backend\VigneronsController@createidentifiant')->name('admin.create.identifiant');
    Route::post('/store/identifiant/{id?}', 'Backend\VigneronsController@storeidentifiant')->name('admin.store.identifiant');
    Route::get('/resultat/identifiant/{id}', 'Backend\VigneronsController@resultatidentifiant')->name('admin.create.resultat');
    Route::get('/edit/{id}', 'Backend\VigneronsController@edit')->name('admin.edit');
    Route::get('/creerachat/{id}', 'Backend\VigneronsController@creerachat')->name('admin.creerachat');
    Route::put('/updateachat/{id}', 'Backend\VigneronsController@updateachat')->name('admin.updateachat');
    Route::get('/miseajourchat/{id}', 'Backend\VigneronsController@miseajourchat')->name('admin.miseajourchat');
    Route::get('/vigneronactif/{id}', 'Backend\VigneronsController@vigneronactif')->name('admin.vigneronactif');
    Route::get('/vigneroninactif/{id}', 'Backend\VigneronsController@vigneroninactif')->name('admin.vigneroninactif');
    Route::put('/updatemiseajourachat/{id}', 'Backend\VigneronsController@updatemiseajourachat')->name('admin.updatemiseajourachat');
    Route::put('/update/{id}', 'Backend\VigneronsController@update')->name('admin.update');
    Route::get('/editimage/{id}', 'Backend\VigneronsController@editimage')->name('admin.editimage');
    Route::put('/updateimage/{id}', 'Backend\VigneronsController@updateimage')->name('admin.updateimage');
    Route::delete('/destroy/{id}', 'Backend\VigneronsController@destroy')->name('admin.destroy');
    Route::get('/envoyeremail/{id}', 'Backend\VigneronsController@envoyeremail')->name('admin.vignerons.envoyeremail');
    Route::put('/envoimail/{id}', 'Backend\VigneronsController@envoimail')->name('admin.vignerons.envoimail');

    Route::get('/activervideo/vigneron/{id}', 'Backend\VigneronsController@activervideo')->name('admin.vignerons.activervideo');
    Route::post('/storevideo/vigneron/{id}', 'Backend\VigneronsController@storevideo')->name('admin.vignerons.storevideo');

    Route::get('/activerpaiement/vigneron/{id}', 'Backend\VigneronsController@activerpaiement')->name('admin.vignerons.activerpaiement');

    Route::get('/achatsvigneron/{id}', 'Backend\VigneronsController@achatsvigneron')->name('admin.achatsvigneron');

    Route::get('/comments', 'Backend\VigneronsController@comments')->name('admin.comments');
    Route::delete('/destroycomment/{id}', 'Backend\VigneronsController@destroycomment')->name('admin.destroycomment');
    Route::get('/comment/edit/{id}', 'Backend\VigneronsController@editreponsecomment')->name('admin.editreponsecomment');
    Route::delete('/comment/destroy/{id}', 'Backend\VigneronsController@destroyreponsecomment')->name('admin.destroyreponsecomment');
    /* ../VIGNERONS ADMIN */

    /* VIGNERONS VIGNERONS */
    Route::get('/vigneron/fiche/{id}', 'Backend\VigneronVigneronsController@fiche')->name('admin.vignerons.fiche');
    Route::put('/vigneron/update/{user_id}', 'Backend\VigneronVigneronsController@update')->name('admin.vignerons.update');
    Route::get('/vigneron/option/{user_id}', 'Backend\VigneronVigneronsController@option')->name('admin.vignerons.option');
    Route::put('/vigneron/annulation/{user_id}', 'Backend\VigneronVigneronsController@annulation')->name('admin.vignerons.annulation');
    Route::get('/vigneron/annule/{id}', 'Backend\VigneronVigneronsController@annule')->name('admin.vignerons.annule');
    Route::get('/vigneron/recapitulatif/{id}', 'Backend\VigneronVigneronsController@recapitulatif')->name('admin.vignerons.recapitulatif');

    Route::put('/vigneron/panier/ajouter/{id}', 'Backend\VigneronVigneronsController@panierajouter')->name('admin.vignerons.panier.ajouter');
    Route::get('/vigneron/panier/confirme/{id}', 'Backend\VigneronVigneronsController@panierconfirme')->name('admin.vignerons.panier.confirme');
    Route::post('/vigneron/panier/miseajour/{id}', 'Backend\VigneronVigneronsController@paniermiseajour')->name('admin.vignerons.panier.paniermiseajour');
    Route::post('/vigneron/panier/paiement/{id}', 'Backend\VigneronVigneronsController@panierpaiement')->name('admin.vignerons.panier.panierpaiement');

    Route::post('/vigneron/paiement/stripe/{id}', 'Backend\VigneronPaiementController@paiementstripe')->name('admin.vignerons.paiement.stripe');
    Route::get('/vigneron/email/{id}', 'Backend\VigneronsController@email')->name('admin.vignerons.email');

    Route::get('/vigneron/paiement/paypal/{id}', 'Backend\VigneronPaiementController@paiementpaypal')->name('admin.vignerons.paiement.paypal');
    Route::get('/vigneron/paiement/paypal/execute/{id}', 'Backend\VigneronPaiementController@paiementpaypalexecute')->name('admin.vignerons.paiement.paypal.execute');
    Route::get('/vigneron/paiement/paypal/cancel/{id}', 'Backend\VigneronPaiementController@paiementpaypalcancel')->name('admin.vignerons.paiement.paypal.cancel');

    Route::get('/vigneron/paiements/reussis', 'Backend\VigneronPaiementController@paiementsreussis')->name('admin.vignerons.paiementsreussis');
    Route::get('/vigneron/paiement/reussi/paypal/{id}', 'Backend\VigneronPaiementController@paiementreussipaypal')->name('admin.vignerons.paiementreussi.paypal');

    Route::get('/message/vigneron/{id}', 'Backend\VigneronVigneronsController@messagevigneron')->name('admin.vignerons.message');
    Route::post('/message/vigneron/{id}', 'Backend\VigneronVigneronsController@postmessagevigneron')->name('admin.vignerons.postmessage');

    Route::get('/vigneron/devisreportage/{id}', 'Backend\VigneronVigneronsController@devisreportage')->name('admin.vignerons.devisreportage');
    Route::get('/vigneron/succesenvoidevis/{id}', 'Backend\VigneronVigneronsController@succesenvoidevis')->name('admin.vignerons.succesenvoidevis');

    Route::get('vigneron/commentaires/{id}', 'Backend\VigneronVigneronsController@commentairesvigneron')->name('admin.vignerons.commentaires');
    Route::get('vigneron/commentaire/repondre/{id}', 'Backend\VigneronVigneronsController@repondrecommentairevigneron')->name('admin.vignerons.commentaire.repondre');
    Route::put('vigneron/commentaire/update/{id}', 'Backend\VigneronVigneronsController@updatecommentairevigneron')->name('admin.vignerons.commentaire.update');
    /* ../VIGNERONS VIGNERONS */

    /* INTERNAUTES */
    Route::get('/newsletter', 'Backend\InternauteController@index')->name('admin.internaute.newsletter');
    Route::post('/newsletter/{id}', 'Backend\InternauteController@store')->name('admin.internaute.newsletter.store');
    /* ../INTERNAUTES */

    /* IMPORTVIGNERONS */
    Route::get('/importvignerons', 'Backend\ImportVigneronsController@index')->name('admin.importvignerons.index');
    Route::get('/importvignerons/edit/{id}', 'Backend\ImportVigneronsController@edit')->name('admin.importvignerons.edit');
    Route::put('/importvignerons/update/{id}', 'Backend\ImportVigneronsController@update')->name('admin.importvignerons.update');
    /* ../IMPORTVIGNERONS */

    /* ANNONCEURS */
    Route::get('/annonceurs', 'Backend\AnnonceursController@index')->name('admin.annonceurs');
    Route::get('/annonceurs/create', 'Backend\AnnonceursController@create')->name('admin.annonceurs.create');
    Route::post('/annonceurs/store', 'Backend\AnnonceursController@store')->name('admin.annonceurs.store');
    Route::get('/annonceurs/edit/{id}', 'Backend\AnnonceursController@edit')->name('admin.annonceurs.edit');
    Route::put('/annonceurs/update/{id}', 'Backend\AnnonceursController@update')->name('admin.annonceurs.update');
    Route::get('/annonceurs/editannonce/{id}', 'Backend\AnnonceursController@editannonce')->name('admin.annonceurs.editannonce');
    Route::get('/annonceurs/createannonce/{id}', 'Backend\AnnonceursController@createannonce')->name('admin.annonceurs.createannonce');
    Route::post('/annonceurs/storeannonceannonceur/{id}', 'Backend\AnnonceursController@storeannonceannonceur')->name('admin.annonceurs.storeannonceannonceur');
    Route::put('/annonceurs/updateannonce/{id}', 'Backend\AnnonceursController@updateannonce')->name('admin.annonceurs.updateannonce');
    Route::delete('/annonceurs/destroy/{id}', 'Backend\AnnonceursController@destroy')->name('admin.annonceurs.destroy');
    Route::delete('/annonceurs/destroyannonce/{id}', 'Backend\AnnonceursController@destroyannonce')->name('admin.annonceurs.destroyannonce');

    Route::get('/create/annonceur/identifiant/{id?}', 'Backend\AnnonceursController@createidentifiant')->name('admin.annonceurs.create.identifiant');
    Route::post('/store/annonceur/identifiant/{id?}', 'Backend\AnnonceursController@storeidentifiant')->name('admin.annonceurs.store.identifiant');
    Route::get('/resultat/annonceur/identifiant/{id}', 'Backend\AnnonceursController@resultatidentifiant')->name('admin.annonceurs.create.resultat');
    /* ../ANNONCEURS */

    /* ANNONCEURS ADMIN */
    /* ANNONCEUR ANNONCEURS */
    Route::put('/annonceurs/choixannonce/{id}', 'Backend\AnnonceurAnnonceursController@choixannonce')->name('admin.annonceurs.choixannonce');
    Route::get('/annonceurs/choixannonce/regional/{id}', 'Backend\AnnonceurAnnonceursController@regional')->name('admin.annonceurs.choixannonce.regional');
    Route::post('/annonceurs/choixannonce/regionalchoix/{id}', 'Backend\AnnonceurAnnonceursController@regionalchoix')->name('admin.annonceurs.choixannonce.regionalchoix');
    Route::get('/annonceurs/choixannonce/local/{id}', 'Backend\AnnonceurAnnonceursController@local')->name('admin.annonceurs.choixannonce.local');
    Route::post('/annonceurs/choixannonce/localchoix/{id}', 'Backend\AnnonceurAnnonceursController@localchoix')->name('admin.annonceurs.choixannonce.localchoix');
    Route::get('/annonceurs/choixannonce/communal/{id}', 'Backend\AnnonceurAnnonceursController@communal')->name('admin.annonceurs.choixannonce.communal');
    Route::post('/annonceurs/choixannonce/communalchoix/{id}', 'Backend\AnnonceurAnnonceursController@communalchoix')->name('admin.annonceurs.choixannonce.communalchoix');
    Route::post('/annonceurs/choixannonce/storeannonce/{id}', 'Backend\AnnonceurAnnonceursController@storeannonce')->name('admin.annonceurs.storeannonce');
    Route::get('/annonceurs/choixannonce/annoncetelechargee/{id}', 'Backend\AnnonceurAnnonceursController@annoncetelechargee')->name('admin.annonceurs.annoncetelechargee');
    Route::post('/annonceurs/panier/ajouter/{id}', 'Backend\AnnonceurAnnonceursController@panierajouter')->name('admin.annonceurs.panier.ajouter');
    Route::get('/annonceurs/panier/confirme/{id}', 'Backend\AnnonceurAnnonceursController@panierconfirme')->name('admin.annonceurs.panier.confirme');
    Route::post('/annonceurs/panier/miseajour/{id}', 'Backend\AnnonceurAnnonceursController@paniermiseajour')->name('admin.annonceurs.panier.paniermiseajour');
    Route::post('/annonceurs/panier/paiement/{id}', 'Backend\AnnonceurAnnonceursController@panierpaiement')->name('admin.annonceurs.panier.panierpaiement');
    Route::post('/annonceurs/annulation/{id}', 'Backend\AnnonceurAnnonceursController@annulation')->name('admin.annonceurs.annulation');
    Route::get('/annonceurs/annule/{id}', 'Backend\AnnonceurAnnonceursController@annule')->name('admin.annonceurs.annule');

    // Tous les achats d'un annonceur par l'annonceur
    Route::get('/annonceurs/detailsachatannonceur/{id}', 'Backend\AnnonceurAnnonceursController@detailsachatannonceur')->name('admin.annonceurs.detailsachatannonceur');
    Route::get('/envoimail/{id}', 'Backend\AnnonceurAnnonceursController@envoimail')->name('admin.annonceurs.envoimail');
    Route::post('/envoimessage/{id}', 'Backend\AnnonceurAnnonceursController@envoimessage')->name('admin.message.envoimessage');
    /* ../ANNONCEUR ANNONCEURS */

    /* ANNONCEUR ANNONCEURS PAIEMENT */
    Route::post('/annonceurs/deja/paye/{id}', 'Backend\AnnonceurPaiementController@dejapaye')->name('admin.annonceurs.dejapaye');
    Route::post('/annonceurs/paiement/stripe/{id}', 'Backend\AnnonceurPaiementController@paiementstripe')->name('admin.annonceurs.paiement.stripe');
    Route::get('/annonceurs/paiement/paypal/{id}', 'Backend\AnnonceurPaiementController@paiementpaypal')->name('admin.annonceurs.paiement.paypal');
    Route::get('/annonceurs/paiements/reussis', 'Backend\AnnonceurPaiementController@paiementsreussis')->name('admin.annonceurs.paiementsreussis');

    Route::get('/annonceur/paiement/paypal/{id}', 'Backend\AnnonceurPaiementController@paiementpaypal')->name('admin.annonceurs.paiement.paypal');
    Route::get('/annonceur/paiement/paypal/execute/{id}', 'Backend\AnnonceurPaiementController@paiementpaypalexecute')->name('admin.annonceurs.paiement.paypal.execute');
    Route::get('/annonceur/paiement/paypal/cancel/{id}', 'Backend\AnnonceurPaiementController@paiementpaypalcancel')->name('admin.annonceurs.paiement.paypal.cancel');
    Route::get('/annonceur/paiement/reussi/paypal/{id}', 'Backend\AnnonceurPaiementController@paiementreussipaypal')->name('admin.annonceurs.paiementreussi.paypal');
    /* ANNONCEUR ANNONCEURS PAIEMENT */

    /* ANNONCEUR ANNONCEURS FRANCE */
    Route::get('/annonceurs/choixannonce/national/{id}', 'Backend\France\AnnonceurAnnonceursFranceController@national')->name('admin.annonceurs.choixannonce.national');
    Route::post('/annonceurs/choixannonce/national/validation/{id}', 'Backend\France\AnnonceurAnnonceursFranceController@validation')->name('admin.annonceurs.choixannonce.national.validation');
    /* ../ANNONCEUR ANNONCEURS FRANCE */

    /* ANNONCEUR ANNONCEURS ALSACE */
    Route::get('/annonceurs/choixannonce/alsace/{id}', 'Backend\Alsace\AnnonceurAnnonceursAlsaceController@alsace')->name('admin.annonceurs.choixannonce.alsace');
    Route::post('/annonceurs/choixannonce/alsace/validation/{id}', 'Backend\Alsace\AnnonceurAnnonceursAlsaceController@validationalsace')->name('admin.annonceurs.choixannonce.alsace.validation');
    /* ../ANNONCEUR ANNONCEURS ALSACE */

    /* ANNONCEUR ANNONCEURS ARMAGNAC */
    Route::get('/annonceurs/choixannonce/armagnac/{id}', 'Backend\Armagnac\AnnonceurAnnonceursArmagnacController@armagnac')->name('admin.annonceurs.choixannonce.armagnac');
    Route::post('/annonceurs/choixannonce/armagnac/validation/{id}', 'Backend\Armagnac\AnnonceurAnnonceursArmagnacController@validationarmagnac')->name('admin.annonceurs.choixannonce.armagnac.validation');
    /* ../ANNONCEUR ANNONCEURS ARMAGNAC */

    /* ANNONCEUR ANNONCEURS AUVERGNE */
    Route::get('/annonceurs/choixannonce/auvergne/{id}', 'Backend\Auvergne\AnnonceurAnnonceursAuvergneController@auvergne')->name('admin.annonceurs.choixannonce.auvergne');
    Route::post('/annonceurs/choixannonce/auvergne/validation/{id}', 'Backend\Auvergne\AnnonceurAnnonceursAuvergneController@validationauvergne')->name('admin.annonceurs.choixannonce.auvergne.validation');
    /* ../ANNONCEUR ANNONCEURS AUVERGNE */

    /* ANNONCEUR ANNONCEURS BEAUJOLAIS */
    Route::get('/annonceurs/choixannonce/beaujolais/{id}', 'Backend\Beaujolais\AnnonceurAnnonceursBeaujolaisController@beaujolais')->name('admin.annonceurs.choixannonce.beaujolais');
    Route::post('/annonceurs/choixannonce/beaujolais/validation/{id}', 'Backend\Beaujolais\AnnonceurAnnonceursBeaujolaisController@validationbeaujolais')->name('admin.annonceurs.choixannonce.beaujolais.validation');
    /* ../ANNONCEUR ANNONCEURS BEAUJOLAIS */

    /* ANNONCEUR ANNONCEURS BORDEAUX */
    Route::get('/annonceurs/choixannonce/bordeaux/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@bordeaux')->name('admin.annonceurs.choixannonce.bordeaux');
    Route::post('/annonceurs/choixannonce/bordeaux/validation/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@validationbordeaux')->name('admin.annonceurs.choixannonce.bordeaux.validation');
    /* ../ANNONCEUR ANNONCEURS BORDEAUX */

    /* ANNONCEUR ANNONCEURS MÉDOC */
    Route::get('/annonceurs/choixannonce/medoc/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@medoc')->name('admin.annonceurs.choixannonce.medoc');
    Route::post('/annonceurs/choixannonce/medoc/validation/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@validationmedoc')->name('admin.annonceurs.choixannonce.medoc.validation');
    /* ../ANNONCEUR ANNONCEURS MÉDOC */

    /* ANNONCEUR ANNONCEURS MARGAUX */
    Route::get('/annonceurs/choixannonce/margaux/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@margaux')->name('admin.annonceurs.choixannonce.margaux');
    Route::post('/annonceurs/choixannonce/margaux/validation/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@validationmargaux')->name('admin.annonceurs.choixannonce.margaux.validation');
    /* ../ANNONCEUR ANNONCEURS MARGAUX */

    /* ANNONCEUR ANNONCEURS MOULIS ET LISTRAC */
    Route::get('/annonceurs/choixannonce/moulis-listrac/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@moulislistrac')->name('admin.annonceurs.choixannonce.moulislistrac');
    Route::post('/annonceurs/choixannonce/moulis-listrac/validation/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@validationmoulislistrac')->name('admin.annonceurs.choixannonce.moulislistrac.validation');
    /* ../ANNONCEUR ANNONCEURS MOULIS ET LISTRAC */

    /* ANNONCEUR ANNONCEURS PAUILLAC */
    Route::get('/annonceurs/choixannonce/pauillac/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@pauillac')->name('admin.annonceurs.choixannonce.pauillac');
    Route::post('/annonceurs/choixannonce/pauillac/validation/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@validationpauillac')->name('admin.annonceurs.choixannonce.pauillac.validation');
    /* ../ANNONCEUR ANNONCEURS PAUILLAC */

    /* ANNONCEUR ANNONCEURS SAINT-ESTÈPHE */
    Route::get('/annonceurs/choixannonce/saint-estephe/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@saintestephe')->name('admin.annonceurs.choixannonce.saintestephe');
    Route::post('/annonceurs/choixannonce/saint-estephe/validation/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@validationsaintestephe')->name('admin.annonceurs.choixannonce.saintestephe.validation');
    /* ../ANNONCEUR ANNONCEURS SAINT-ESTÈPHE */

    /* ANNONCEUR ANNONCEURS SAINT-JULIEN */
    Route::get('/annonceurs/choixannonce/saint-julien/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@saintjulien')->name('admin.annonceurs.choixannonce.saintjulien');
    Route::post('/annonceurs/choixannonce/saint-julien/validation/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@validationsaintjulien')->name('admin.annonceurs.choixannonce.saintjulien.validation');
    /* ../ANNONCEUR ANNONCEURS SAINT-JULIEN */

    /* ANNONCEUR ANNONCEURS PESSAC-LÉOGNAN */
    Route::get('/annonceurs/choixannonce/pessac-leognan/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@pessacleognan')->name('admin.annonceurs.choixannonce.pessacleognan');
    Route::post('/annonceurs/choixannonce/pessac-leognan/validation/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@validationpessacleognan')->name('admin.annonceurs.choixannonce.pessacleognan.validation');
    /* ../ANNONCEUR ANNONCEURS PESSAC-LÉOGNAN */

    /* ANNONCEUR ANNONCEURS POMEROL */
    Route::get('/annonceurs/choixannonce/pomerol/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@pomerol')->name('admin.annonceurs.choixannonce.pomerol');
    Route::post('/annonceurs/choixannonce/pomerol/validation/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@validationpomerol')->name('admin.annonceurs.choixannonce.pomerol.validation');
    /* ../ANNONCEUR ANNONCEURS POMEROL */

    /* ANNONCEUR ANNONCEURS SAINT-ÉMILION */
    Route::get('/annonceurs/choixannonce/saint-emilion/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@saintemilion')->name('admin.annonceurs.choixannonce.saintemilion');
    Route::post('/annonceurs/choixannonce/saint-emilion/validation/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@validationsaintemilion')->name('admin.annonceurs.choixannonce.saintemilion.validation');
    /* ../ANNONCEUR ANNONCEURS SAINT-ÉMILION */

    /* ANNONCEUR ANNONCEURS SAUTERNES-BARSAC */
    Route::get('/annonceurs/choixannonce/sauternes-et-barsac/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@sauternesbarsac')->name('admin.annonceurs.choixannonce.sauternesbarsac');
    Route::post('/annonceurs/choixannonce/sauternes-et-barsac/validation/{id}', 'Backend\Bordeaux\AnnonceurAnnonceursBordeauxController@validationsauternesbarsac')->name('admin.annonceurs.choixannonce.sauternesbarsac.validation');
    /* ../ANNONCEUR ANNONCEURS SAUTERNES-BARSAC */

    /* ANNONCEUR ANNONCEURS BOURGOGNE */
    Route::get('/annonceurs/choixannonce/bourgogne/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@bourgogne')->name('admin.annonceurs.choixannonce.bourgogne');
    Route::post('/annonceurs/choixannonce/bourgogne/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationbourgogne')->name('admin.annonceurs.choixannonce.bourgogne.validation');
    /* ../ANNONCEUR ANNONCEURS BOURGOGNE */

    /* ANNONCEUR ANNONCEURS BEAUNE ET CÔTES DE BEAUNE */
    Route::get('/annonceurs/choixannonce/beauneetcotesdebeaune/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@beauneetcotesdebeaune')->name('admin.annonceurs.choixannonce.beauneetcotesdebeaune');
    Route::post('/annonceurs/choixannonce/beauneetcotesdebeaune/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationbeauneetcotesdebeaune')->name('admin.annonceurs.choixannonce.beauneetcotesdebeaune.validation');
    /* ../ANNONCEUR ANNONCEURS BEAUNE ET CÔTES DE BEAUNE */

    /* ANNONCEUR ANNONCEURS CHABLIS */
    Route::get('/annonceurs/choixannonce/chablis/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@chablis')->name('admin.annonceurs.choixannonce.chablis');
    Route::post('/annonceurs/choixannonce/chablis/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationchablis')->name('admin.annonceurs.choixannonce.chablis.validation');
    /* ../ANNONCEUR ANNONCEURS CHABLIS */

    /* ANNONCEUR ANNONCEURS CÔTES DE NUITS */
    Route::get('/annonceurs/choixannonce/cotesdenuits/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@cotesdenuits')->name('admin.annonceurs.choixannonce.cotesdenuits');
    Route::post('/annonceurs/choixannonce/cotesdenuits/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationcotesdenuits')->name('admin.annonceurs.choixannonce.cotesdenuits.validation');
    /* ../ANNONCEUR ANNONCEURS CÔTES DE NUITS */

    /* ANNONCEUR ANNONCEURS GRANDS CRUS DE CHABLIS */
    Route::get('/annonceurs/choixannonce/grands-crus-de-chablis/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@grandscrusdechablis')->name('admin.annonceurs.choixannonce.grandscrusdechablis');
    Route::post('/annonceurs/choixannonce/grands-crus-de-chablis/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationgrandscrusdechablis')->name('admin.annonceurs.choixannonce.grandscrusdechablis.validation');
    /* ../ANNONCEUR ANNONCEURS GRANDS CRUS DE CHABLIS */

    /* ANNONCEUR ANNONCEURS CHAMBOLLE-MUSIGNY ET MOREY-SAINT-DENIS */
    Route::get('/annonceurs/choixannonce/chambolle-musigny-morey-saint-denis/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@chambollemusignymoreysaintdenis')->name('admin.annonceurs.choixannonce.chambollemusignymoreysaintdenis');
    Route::post('/annonceurs/choixannonce/chambolle-musigny-morey-saint-denis/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationchambollemusignymoreysaintdenis')->name('admin.annonceurs.choixannonce.chambollemusignymoreysaintdenis.validation');
    /* ../ANNONCEUR ANNONCEURS CHAMBOLLE-MUSIGNY ET MOREY-SAINT-DENIS */

    /* ANNONCEUR ANNONCEURS GEVREY-CHAMBERTIN */
    Route::get('/annonceurs/choixannonce/gevrey-chambertin/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@gevreychambertin')->name('admin.annonceurs.choixannonce.gevreychambertin');
    Route::post('/annonceurs/choixannonce/gevrey-chambertin/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationgevreychambertin')->name('admin.annonceurs.choixannonce.gevreychambertin.validation');
    /* ../ANNONCEUR ANNONCEURS GEVREY-CHAMBERTIN */

    /* ANNONCEUR ANNONCEURS NUITS-SAINT-GEORGES */
    Route::get('/annonceurs/choixannonce/nuits-saint-georges/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@nuitssaintgeorges')->name('admin.annonceurs.choixannonce.nuitssaintgeorges');
    Route::post('/annonceurs/choixannonce/nuits-saint-georges/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationnuitssaintgeorges')->name('admin.annonceurs.choixannonce.nuitssaintgeorges.validation');
    /* ../ANNONCEUR ANNONCEURS NUITS-SAINT-GEORGES */

    /* ANNONCEUR ANNONCEURS VOSNE-ROMANÉE */
    Route::get('/annonceurs/choixannonce/vosne-romanee/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@vosneromanee')->name('admin.annonceurs.choixannonce.vosneromanee');
    Route::post('/annonceurs/choixannonce/vosne-romanee/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationvosneromanee')->name('admin.annonceurs.choixannonce.vosneromanee.validation');
    /* ../ANNONCEUR ANNONCEURS VOSNE-ROMANÉE */

    /* ANNONCEUR ANNONCEURS VOUGEOT */
    Route::get('/annonceurs/choixannonce/vougeot/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@vougeot')->name('admin.annonceurs.choixannonce.vougeot');
    Route::post('/annonceurs/choixannonce/vougeot/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationvougeot')->name('admin.annonceurs.choixannonce.vougeot.validation');
    /* ../ANNONCEUR ANNONCEURS VOUGEOT */

    /* ANNONCEUR ANNONCEURS 1ERS CRUS ET GRANDS CRUS DE BEAUNE */
    Route::get('/annonceurs/choixannonce/1ers-crus-et-grands-crus-de-beaune/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@premierscrusetgrandscrusdebeaune')->name('admin.annonceurs.choixannonce.1erscrusetgrandscrusdebeaune');
    Route::post('/annonceurs/choixannonce/1ers-crus-et-grands-crus-de-beaune/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validation1erscrusetgrandscrusdebeaune')->name('admin.annonceurs.choixannonce.1erscrusetgrandscrusdebeaune.validation');
    /* ../ANNONCEUR ANNONCEURS 1ERS CRUS ET GRANDS CRUS DE BEAUNE */

    /* ANNONCEUR ANNONCEURS ALOXE-CORTON */
    Route::get('/annonceurs/choixannonce/aloxe-corton/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@aloxecorton')->name('admin.annonceurs.choixannonce.aloxecorton');
    Route::post('/annonceurs/choixannonce/aloxe-corton/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationaloxecorton')->name('admin.annonceurs.choixannonce.aloxecorton.validation');
    /* ../ANNONCEUR ANNONCEURS ALOXE-CORTON */

    /* ANNONCEUR ANNONCEURS CHASSAGNE-MONTRACHET */
    Route::get('/annonceurs/choixannonce/chassagne-montrachet/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@chassagnemontrachet')->name('admin.annonceurs.choixannonce.chassagnemontrachet');
    Route::post('/annonceurs/choixannonce/chassagne-montrachet/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationchassagnemontrachet')->name('admin.annonceurs.choixannonce.chassagnemontrachet.validation');
    /* ../ANNONCEUR ANNONCEURS CHASSAGNE-MONTRACHET */
    
    /* ANNONCEUR ANNONCEURS POMMARD */
    Route::get('/annonceurs/choixannonce/pommard/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@pommard')->name('admin.annonceurs.choixannonce.pommard');
    Route::post('/annonceurs/choixannonce/pommard/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationpommard')->name('admin.annonceurs.choixannonce.pommard.validation');
    /* ../ANNONCEUR ANNONCEURS POMMARD */

    /* ANNONCEUR ANNONCEURS PULIGNY-MONTRACHET */
    Route::get('/annonceurs/choixannonce/puligny-montrachet/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@pulignymontrachet')->name('admin.annonceurs.choixannonce.pulignymontrachet');
    Route::post('/annonceurs/choixannonce/puligny-montrachet/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationpulignymontrachet')->name('admin.annonceurs.choixannonce.pulignymontrachet.validation');
    /* ../ANNONCEUR ANNONCEURS PULIGNY-MONTRACHET */

    /* ANNONCEUR ANNONCEURS VOLNAY */
    Route::get('/annonceurs/choixannonce/volnay/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@volnay')->name('admin.annonceurs.choixannonce.volnay');
    Route::post('/annonceurs/choixannonce/volnay/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationvolnay')->name('admin.annonceurs.choixannonce.volnay.validation');
    /* ../ANNONCEUR ANNONCEURS VOLNAY */

    /* ANNONCEUR ANNONCEURS CÔTE CHALONNAISE ET COUCHOISE */
    Route::get('/annonceurs/choixannonce/cote-chalonnaise-et-couchoise/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@cotechalonnaiseetcouchoise')->name('admin.annonceurs.choixannonce.cotechalonnaiseetcouchoise');
    Route::post('/annonceurs/choixannonce/cote-chalonnaise-et-couchoise/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationcotechalonnaiseetcouchoise')->name('admin.annonceurs.choixannonce.cotechalonnaiseetcouchoise.validation');
    /* ../ANNONCEUR ANNONCEURS CÔTE CHALONNAISE ET COUCHOISE */

    /* ANNONCEUR ANNONCEURS MÂCON */
    Route::get('/annonceurs/choixannonce/macon/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@macon')->name('admin.annonceurs.choixannonce.macon');
    Route::post('/annonceurs/choixannonce/macon/validation/{id}', 'Backend\Bourgogne\AnnonceurAnnonceursBourgogneController@validationmacon')->name('admin.annonceurs.choixannonce.macon.validation');
    /* ../ANNONCEUR ANNONCEURS MÂCON */

    /* ANNONCEUR ANNONCEURS BUGEY */
    Route::get('/annonceurs/choixannonce/bugey/{id}', 'Backend\Bugey\AnnonceurAnnonceursBugeyController@bugey')->name('admin.annonceurs.choixannonce.bugey');
    Route::post('/annonceurs/choixannonce/bugey/validation/{id}', 'Backend\Bugey\AnnonceurAnnonceursBugeyController@validationbugey')->name('admin.annonceurs.choixannonce.bugey.validation');
    /* ../ANNONCEUR ANNONCEURS BUGEY */

    /* ANNONCEUR ANNONCEURS CHAMPAGNE */
    Route::get('/annonceurs/choixannonce/champagne/{id}', 'Backend\Champagne\AnnonceurAnnonceursChampagneController@champagne')->name('admin.annonceurs.choixannonce.champagne');
    Route::post('/annonceurs/choixannonce/champagne/validation/{id}', 'Backend\Champagne\AnnonceurAnnonceursChampagneController@validationchampagne')->name('admin.annonceurs.choixannonce.champagne.validation');
    /* ../ANNONCEUR ANNONCEURS CHAMPAGNE */

    /* ANNONCEUR ANNONCEURS VALLÉE DE LA MARNE */
    Route::get('/annonceurs/choixannonce/vallee-de-la-marne/{id}', 'Backend\Champagne\AnnonceurAnnonceursChampagneController@valleedelamarne')->name('admin.annonceurs.choixannonce.valleedelamarne');
    Route::post('/annonceurs/choixannonce/vallee-de-la-marne/validation/{id}', 'Backend\Champagne\AnnonceurAnnonceursChampagneController@validationvalleedelamarne')->name('admin.annonceurs.choixannonce.valleedelamarne.validation');
    /* ../ANNONCEUR ANNONCEURS VALLÉE DE LA MARNE */

    /* ANNONCEUR ANNONCEURS MONTAGNE DE REIMS ET DE LA CÔTE DES BLANCS */
    Route::get('/annonceurs/choixannonce/montagne-de-reims-et-cote-des-blancs/{id}', 'Backend\Champagne\AnnonceurAnnonceursChampagneController@montagnedereimsetcotedesblancs')->name('admin.annonceurs.choixannonce.montagnedereimsetcotedesblancs');
    Route::post('/annonceurs/choixannonce/montagne-de-reims-et-cote-des-blancs/validation/{id}', 'Backend\Champagne\AnnonceurAnnonceursChampagneController@validationmontagnedereimsetcotedesblancs')->name('admin.annonceurs.choixannonce.montagnedereimsetcotedesblancs.validation');
    /* ../ANNONCEUR ANNONCEURS MONTAGNE DE REIMS ET DE LA CÔTE DES BLANCS */

    /* ANNONCEUR ANNONCEURS COGNAC */
    Route::get('/annonceurs/choixannonce/cognac/{id}', 'Backend\Cognac\AnnonceurAnnonceursCognacController@cognac')->name('admin.annonceurs.choixannonce.cognac');
    Route::post('/annonceurs/choixannonce/cognac/validation/{id}', 'Backend\Cognac\AnnonceurAnnonceursCognacController@validationcognac')->name('admin.annonceurs.choixannonce.cognac.validation');
    /* ../ANNONCEUR ANNONCEURS COGNAC */

    /* ANNONCEUR ANNONCEURS CORSE */
    Route::get('/annonceurs/choixannonce/corse/{id}', 'Backend\Corse\AnnonceurAnnonceursCorseController@corse')->name('admin.annonceurs.choixannonce.corse');
    Route::post('/annonceurs/choixannonce/corse/validation/{id}', 'Backend\Corse\AnnonceurAnnonceursCorseController@validationcorse')->name('admin.annonceurs.choixannonce.corse.validation');
    /* ../ANNONCEUR ANNONCEURS CORSE */

    /* ANNONCEUR ANNONCEURS CÔTES DU RHÔNE MÉRIDIONAL */
    Route::get('/annonceurs/choixannonce/cotes-du-rhone-meridional/{id}', 'Backend\Cotesdurhonemeridional\AnnonceurAnnonceursCotesdurhonemeridionalController@cotesdurhonemeridional')->name('admin.annonceurs.choixannonce.cotesdurhonemeridional');
    Route::post('/annonceurs/choixannonce/cotes-du-rhone-meridional/validation/{id}', 'Backend\Cotesdurhonemeridional\AnnonceurAnnonceursCotesdurhonemeridionalController@validationcotesdurhonemeridional')->name('admin.annonceurs.choixannonce.cotesdurhonemeridional.validation');
    /* ../ANNONCEUR ANNONCEURS CÔTES DU RHÔNE MÉRIDIONAL */

    /* ANNONCEUR ANNONCEURS CÔTES DU RHÔNE SEPTENTRIONAL */
    Route::get('/annonceurs/choixannonce/cotesdurhoneseptentrional/{id}', 'Backend\Cotesdurhoneseptentrional\AnnonceurAnnonceursCotesdurhoneseptentrionalController@cotesdurhoneseptentrional')->name('admin.annonceurs.choixannonce.cotesdurhoneseptentrional');
    Route::post('/annonceurs/choixannonce/cotesdurhoneseptentrional/validation/{id}', 'Backend\Cotesdurhoneseptentrional\AnnonceurAnnonceursCotesdurhoneseptentrionalController@validationcotesdurhoneseptentrional')->name('admin.annonceurs.choixannonce.cotesdurhoneseptentrional.validation');
    /* ../ANNONCEUR ANNONCEURS CÔTES DU RHÔNE SEPTENTRIONAL */

    /* ANNONCEUR ANNONCEURS SAINT-PERAY ET CORNAS */
    Route::get('/annonceurs/choixannonce/saintperayetcornas/{id}', 'Backend\Cotesdurhoneseptentrional\AnnonceurAnnonceursCotesdurhoneseptentrionalController@saintperayetcornas')->name('admin.annonceurs.choixannonce.saintperayetcornas');
    Route::post('/annonceurs/choixannonce/saintperayetcornas/validation/{id}', 'Backend\Cotesdurhoneseptentrional\AnnonceurAnnonceursCotesdurhoneseptentrionalController@validationsaintperayetcornas')->name('admin.annonceurs.choixannonce.saintperayetcornas.validation');
    /* ../ANNONCEUR ANNONCEURS SAINT-PERAY ET CORNAS */

    /* ANNONCEUR ANNONCEURS JURA */
    Route::get('/annonceurs/choixannonce/jura/{id}', 'Backend\Jura\AnnonceurAnnonceursJuraController@jura')->name('admin.annonceurs.choixannonce.jura');
    Route::post('/annonceurs/choixannonce/jura/validation/{id}', 'Backend\Jura\AnnonceurAnnonceursJuraController@validationjura')->name('admin.annonceurs.choixannonce.jura.validation');
    /* ../ANNONCEUR ANNONCEURS JURA */

    /* ANNONCEUR ANNONCEURS LANGUEDOC-ROUSSILLON */
    Route::get('/annonceurs/choixannonce/languedoc-roussillon/{id}', 'Backend\Languedocroussillon\AnnonceurAnnonceursLanguedocroussillonController@languedocroussillon')->name('admin.annonceurs.choixannonce.languedocroussillon');
    Route::post('/annonceurs/choixannonce/languedoc-roussillon/validation/{id}', 'Backend\Languedocroussillon\AnnonceurAnnonceursLanguedocroussillonController@validationlanguedocroussillon')->name('admin.annonceurs.choixannonce.languedocroussillon.validation');
    /* ../ANNONCEUR ANNONCEURS LANGUEDOC-ROUSSILLON */

    /* ANNONCEUR ANNONCEURS LOIRE */
    Route::get('/annonceurs/choixannonce/loire/{id}', 'Backend\Loire\AnnonceurAnnonceursLoireController@loire')->name('admin.annonceurs.choixannonce.loire');
    Route::post('/annonceurs/choixannonce/loire/validation/{id}', 'Backend\Loire\AnnonceurAnnonceursLoireController@validationloire')->name('admin.annonceurs.choixannonce.loire.validation');
    /* ../ANNONCEUR ANNONCEURS LOIRE */

    /* ANNONCEUR ANNONCEURS POUILLY */
    Route::get('/annonceurs/choixannonce/pouilly/{id}', 'Backend\Loire\AnnonceurAnnonceursLoireController@pouilly')->name('admin.annonceurs.choixannonce.pouilly');
    Route::post('/annonceurs/choixannonce/pouilly/validation/{id}', 'Backend\Loire\AnnonceurAnnonceursLoireController@validationpouilly')->name('admin.annonceurs.choixannonce.pouilly.validation');
    /* ../ANNONCEUR ANNONCEURS POUILLY */

    /* ANNONCEUR ANNONCEURS QUINCY ET REUILLY */
    Route::get('/annonceurs/choixannonce/quincy-et-reuilly/{id}', 'Backend\Loire\AnnonceurAnnonceursLoireController@quincyetreuilly')->name('admin.annonceurs.choixannonce.quincyetreuilly');
    Route::post('/annonceurs/choixannonce/quincy-et-reuilly/validation/{id}', 'Backend\Loire\AnnonceurAnnonceursLoireController@validationquincyetreuilly')->name('admin.annonceurs.choixannonce.quincyetreuilly.validation');
    /* ../ANNONCEUR ANNONCEURS QUINCY ET REUILLY */

    /* ANNONCEUR ANNONCEURS SANCERRE ET MENETOU-SALON */
    Route::get('/annonceurs/choixannonce/sancerre-et-menetou-salon/{id}', 'Backend\Loire\AnnonceurAnnonceursLoireController@sancerreetmenetousalon')->name('admin.annonceurs.choixannonce.sancerreetmenetousalon');
    Route::post('/annonceurs/choixannonce/sancerre-et-menetou-salon/validation/{id}', 'Backend\Loire\AnnonceurAnnonceursLoireController@validationsancerreetmenetousalon')->name('admin.annonceurs.choixannonce.sancerreetmenetousalon.validation');
    /* ../ANNONCEUR ANNONCEURS SANCERRE ET MENETOU-SALON */

    /* ANNONCEUR ANNONCEURS SAUMUR-CHAMPIGNY */
    Route::get('/annonceurs/choixannonce/saumur-champigny/{id}', 'Backend\Loire\AnnonceurAnnonceursLoireController@saumurchampigny')->name('admin.annonceurs.choixannonce.saumurchampigny');
    Route::post('/annonceurs/choixannonce/saumur-champigny/validation/{id}', 'Backend\Loire\AnnonceurAnnonceursLoireController@validationsaumurchampigny')->name('admin.annonceurs.choixannonce.saumurchampigny.validation');
    /* ../ANNONCEUR ANNONCEURS SAUMUR-CHAMPIGNY */

    /* ANNONCEUR ANNONCEURS LORRAINE */
    Route::get('/annonceurs/choixannonce/lorraine/{id}', 'Backend\Lorraine\AnnonceurAnnonceursLorraineController@lorraine')->name('admin.annonceurs.choixannonce.lorraine');
    Route::post('/annonceurs/choixannonce/lorraine/validation/{id}', 'Backend\Lorraine\AnnonceurAnnonceursLorraineController@validationlorraine')->name('admin.annonceurs.choixannonce.lorraine.validation');
    /* ../ANNONCEUR ANNONCEURS LORRAINE */

    /* ANNONCEUR ANNONCEURS PROVENCE */
    Route::get('/annonceurs/choixannonce/provence/{id}', 'Backend\Provence\AnnonceurAnnonceursProvenceController@provence')->name('admin.annonceurs.choixannonce.provence');
    Route::post('/annonceurs/choixannonce/provence/validation/{id}', 'Backend\Provence\AnnonceurAnnonceursProvenceController@validationprovence')->name('admin.annonceurs.choixannonce.provence.validation');
    /* ../ANNONCEUR ANNONCEURS PROVENCE */

    /* ANNONCEUR ANNONCEURS SAVOIE */
    Route::get('/annonceurs/choixannonce/savoie/{id}', 'Backend\Savoie\AnnonceurAnnonceursSavoieController@savoie')->name('admin.annonceurs.choixannonce.savoie');
    Route::post('/annonceurs/choixannonce/savoie/validation/{id}', 'Backend\Savoie\AnnonceurAnnonceursSavoieController@validationsavoie')->name('admin.annonceurs.choixannonce.savoie.validation');
    /* ../ANNONCEUR ANNONCEURS SAVOIE */

    /* ANNONCEUR ANNONCEURS SUD-OUEST */
    Route::get('/annonceurs/choixannonce/sudouest/{id}', 'Backend\Sudouest\AnnonceurAnnonceursSudouestController@sudouest')->name('admin.annonceurs.choixannonce.sudouest');
    Route::post('/annonceurs/choixannonce/sudouest/validation/{id}', 'Backend\Sudouest\AnnonceurAnnonceursSudouestController@validationsudouest')->name('admin.annonceurs.choixannonce.sudouest.validation');
    /* ../ANNONCEUR ANNONCEURS SUD-OUEST */

    /* ANNONCEUR ANNONCEURS AVEYRON */
    Route::get('/annonceurs/choixannonce/aveyron/{id}', 'Backend\Sudouest\AnnonceurAnnonceursSudouestController@aveyron')->name('admin.annonceurs.choixannonce.aveyron');
    Route::post('/annonceurs/choixannonce/aveyron/validation/{id}', 'Backend\Sudouest\AnnonceurAnnonceursSudouestController@validationaveyron')->name('admin.annonceurs.choixannonce.aveyron.validation');
    /* ../ANNONCEUR ANNONCEURS AVEYRON */

    /* ANNONCEUR ANNONCEURS TOUS LES VINS */
    Route::get('/annonceurs/choixannonce/touslesvins/{id}', 'Backend\Touslesvins\AnnonceurAnnonceursTouslesvinsController@touslesvins')->name('admin.annonceurs.choixannonce.touslesvins');
    Route::post('/annonceurs/choixannonce/touslesvins/validation/{id}', 'Backend\Touslesvins\AnnonceurAnnonceursTouslesvinsController@validationtouslesvins')->name('admin.annonceurs.choixannonce.touslesvins.validation');
    /* ../ANNONCEUR ANNONCEURS AVEYRON */

    /* ENVOI MESSAGES ANNONCEUR ANNONCEURS */
    Route::get('/message/annonceur/{id}', 'Backend\AnnonceurAnnonceursController@messageannonceur')->name('admin.annonceurs.message');
    Route::post('/message/annonceur/{id}', 'Backend\AnnonceurAnnonceursController@postmessageannonceur')->name('admin.annonceurs.postmessage');
    /* ../ENVOI MESSAGES ANNONCEUR ANNONCEURS */

});

/*
|--------------------------------------------------------------------------
| ../Le Backend
|--------------------------------------------------------------------------
*/