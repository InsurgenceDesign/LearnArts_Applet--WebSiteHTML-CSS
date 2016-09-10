

function deplimentmenuconnexion(){
inscription = document.getElementById('divacacher1');
if (inscription.style.display == 'none'){
}
else{
inscription.style.display = 'none';
}
connexion= document.getElementById('divacacher');
if (connexion.style.display == 'none')
connexion.style.display = 'block';
else
connexion.style.display = 'none';
}

function deplimentmenuinscription(){
connexion= document.getElementById('divacacher');
if (connexion.style.display == 'none'){
}
else{
connexion.style.display = 'none';
}

if (inscription.style.display == 'none')
inscription.style.display = 'block';
else
inscription.style.display = 'none';

}