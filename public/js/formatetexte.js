/* =============================================================
FONCTION JS AVEC EXPRESSION RÉGULIÈRE QUI SUPPRIME LES ACCENTS 
ET PLACE UN UNDERSCORE ENTRE CHAQUE MOT
================================================================ */

// ANCIEN JS
/*enleveraccentsetmettreunderscores = function(lettres)
{
   	var str = lettres.toLowerCase();
    str = str.replace(new RegExp(/\s/g),"_");
    str = str.replace(new RegExp(/[-]/g),"_");
    str = str.replace(new RegExp(/[àáâãäå]/g),"a");
    str = str.replace(new RegExp(/æ/g),"ae");
    str = str.replace(new RegExp(/ç/g),"c");
    str = str.replace(new RegExp(/[èéêë]/g),"e");
    str = str.replace(new RegExp(/[ìíîï]/g),"i");
    str = str.replace(new RegExp(/ñ/g),"n");                
    str = str.replace(new RegExp(/[òóôõö]/g),"o");
    str = str.replace(new RegExp(/œ/g),"oe");
    str = str.replace(new RegExp(/[ùúûü]/g),"u");
    str = str.replace(new RegExp(/[ýÿ]/g),"y");
    str = str.replace(new RegExp(/\W/g),"");
    return str;
};
*/

// NOUVEAU JS
enleveraccentsetmettreunderscores = function(lettres)
{
    var str = lettres.toLowerCase();
    str = str.replace(new RegExp(/\s/g),"-");
    // str = str.replace(new RegExp(/[-]/g),"_");
    str = str.replace(new RegExp(/[àáâãäå]/g),"a");
    str = str.replace(new RegExp(/æ/g),"ae");
    str = str.replace(new RegExp(/ç/g),"c");
    str = str.replace(new RegExp(/[èéêë]/g),"e");
    str = str.replace(new RegExp(/[ìíîï]/g),"i");
    str = str.replace(new RegExp(/ñ/g),"n");                
    str = str.replace(new RegExp(/[òóôõö]/g),"o");
    str = str.replace(new RegExp(/œ/g),"oe");
    str = str.replace(new RegExp(/[ùúûü]/g),"u");
    str = str.replace(new RegExp(/[ýÿ]/g),"y");
    str = str.replace(new RegExp(/\W/g),"-");
    return str;
};