<?php
/**
 * Affiche le tableau entré en paramètre
 * avec une séparation entre chaque lettre.
 * 
 * @param   array $tab    Tableau contenant une lettre par case.
 * 
 * @return  void    Affichage du mot.
 */

function afficherTableau($tab)
{
    echo "\n";
    foreach ( $tab as $elt)  
    {
        echo $elt." ";
    }
    echo "\n";
}

/**
 * Choisis un mot au hasard parmi la liste suivante
 */

function creer_dico()
{
    //Cree le dictionnaire de mots
    $tabMots[] = "AEROPORT";
    $tabMots[] = "AFFAIRE";
    $tabMots[] = "ALBUM";
    $tabMots[] = "ALPHABET";
    $tabMots[] = "AMENER";
    $tabMots[] = "AMPOULE";
    $tabMots[] = "ANCIEN";
    $tabMots[] = "ANORAK";
    $tabMots[] = "ANTENNE";
    $tabMots[] = "APPAREIL";
    $tabMots[] = "APPORTER";
    $tabMots[] = "APPUYER";
    $tabMots[] = "APRES";
    $tabMots[] = "ARC";
    $tabMots[] = "ARMOIRE";
    $tabMots[] = "ARRET";
    $tabMots[] = "ARRIERE";
    $tabMots[] = "ARRIVER";
    $tabMots[] = "ARROSER";
    $tabMots[] = "ASSIETTE";
    $tabMots[] = "ASSIS";
    $tabMots[] = "ATTACHER";
    $tabMots[] = "ATTENDRE";
    $tabMots[] = "ATTENTION";
    $tabMots[] = "ATTERRIR";
    $tabMots[] = "ATTRAPER";
    $tabMots[] = "AU";
    $tabMots[] = "AUTANT";
    $tabMots[] = "AUTO";
    $tabMots[] = "AUTOMOBILISTE";
    $tabMots[] = "AUTORADIO";
    $tabMots[] = "AUTOUR";
    $tabMots[] = "AVANCER";
    $tabMots[] = "AVANT";
    $tabMots[] = "AVEC";
    $tabMots[] = "AVION";
    $tabMots[] = "BAGAGE";
    $tabMots[] = "BAGUETTE";
    $tabMots[] = "BAIGNER";
    $tabMots[] = "BÂILLER";
    $tabMots[] = "BALLE";
    $tabMots[] = "BANC";
    $tabMots[] = "BARBE";
    $tabMots[] = "BARBOTER";
    $tabMots[] = "BARQUE";
    $tabMots[] = "BARRE";
    $tabMots[] = "BARREAU";
    $tabMots[] = "BAS";
    $tabMots[] = "BATEAU";
    $tabMots[] = "BEAUCOUP";
    $tabMots[] = "BIBLIOTHEQUE";
    $tabMots[] = "BLANC";
    $tabMots[] = "BLEU";
    $tabMots[] = "BOIS";
    $tabMots[] = "BOITE";
    $tabMots[] = "BONDIR";
    $tabMots[] = "BONNET";
    $tabMots[] = "BORD";
    $tabMots[] = "BOSSER";
    $tabMots[] = "BOTTE";
    $tabMots[] = "BOUCHER";
    $tabMots[] = "BOUCHON";
    $tabMots[] = "BOUDER";
    $tabMots[] = "BOUGER";
    $tabMots[] = "BOUSCULER";
    $tabMots[] = "BOUT";
    $tabMots[] = "BOUTEILLE";
    $tabMots[] = "BOUTON";
    $tabMots[] = "BRAS";
    $tabMots[] = "BRETELLE";
    $tabMots[] = "BRICOLAGE";
    $tabMots[] = "BRUIT";
    $tabMots[] = "BRUN";
    $tabMots[] = "BULLES";
    $tabMots[] = "BUREAU";
    $tabMots[] = "CABANE";
    $tabMots[] = "CABINET";
    $tabMots[] = "CAGOULE";
    $tabMots[] = "CAHIER";
    $tabMots[] = "CAISSE";
    $tabMots[] = "CALME";
    $tabMots[] = "CAMARADE";
    $tabMots[] = "CAMESCOPE";
    $tabMots[] = "CAMION";
    $tabMots[] = "CANARD";
    $tabMots[] = "CARNET";
    $tabMots[] = "CARREAU";
    $tabMots[] = "CARTABLE";
    $tabMots[] = "CARTON";
    $tabMots[] = "CASIER";
    $tabMots[] = "CASQUE";
    $tabMots[] = "CASQUETTE";
    $tabMots[] = "CASSE";
    $tabMots[] = "CASSER";
    $tabMots[] = "CASSEROLE";
    $tabMots[] = "CASSETTE";
    $tabMots[] = "CATALOGUE";
    $tabMots[] = "CEDE";
    $tabMots[] = "CEDEROM";
    $tabMots[] = "CEINTURE";
    $tabMots[] = "CERCEAU";
    $tabMots[] = "CHAINE";
    $tabMots[] = "CHAISE";
    $tabMots[] = "CHAISES";
    $tabMots[] = "CHANSON";
    $tabMots[] = "CHAPEAU";
    $tabMots[] = "CHARGER";
    $tabMots[] = "CHAT";
    $tabMots[] = "CHAUD";
    $tabMots[] = "CHAUSSETTE";
    $tabMots[] = "CHAUSSON";
    $tabMots[] = "CHAUSSURE";
    $tabMots[] = "CHEMISE";
    $tabMots[] = "CHERCHER";
    $tabMots[] = "CHEVILLE";
    $tabMots[] = "CHIFFRE";
    $tabMots[] = "CHOISIR";
    $tabMots[] = "CHOSE";
    $tabMots[] = "CHUCHOTER";
    $tabMots[] = "CHUTE";
    $tabMots[] = "CIGARETTE";
    $tabMots[] = "CINQ";
    $tabMots[] = "CISEAUX";
    $tabMots[] = "CLASSE";
    $tabMots[] = "CLAVIER";
    $tabMots[] = "CLE";
    $tabMots[] = "CLOU";
    $tabMots[] = "COIN";
    $tabMots[] = "COL";
    $tabMots[] = "COLERE";
    $tabMots[] = "COLLANT";
    $tabMots[] = "COLLE";
    $tabMots[] = "COLLER";
    $tabMots[] = "COLORIAGE";
    $tabMots[] = "COLORIER";
    $tabMots[] = "COMMENCER";
    $tabMots[] = "COMPARER";
    $tabMots[] = "COMPTER";
    $tabMots[] = "CONDUIRE";
    $tabMots[] = "CONSTRUIRE";
    $tabMots[] = "CONTE";
    $tabMots[] = "CONTINUER";
    $tabMots[] = "CONTRAIRE";
    $tabMots[] = "CONTRE";
    $tabMots[] = "COPAIN";
    $tabMots[] = "COPIER";
    $tabMots[] = "COQUILLAGE";
    $tabMots[] = "COQUILLETTE";
    $tabMots[] = "COQUIN";
    $tabMots[] = "CORDE";
    $tabMots[] = "CORPS";
    $tabMots[] = "COTE";
    $tabMots[] = "COU";
    $tabMots[] = "COUCHE";
    $tabMots[] = "COUDE";
    $tabMots[] = "COUDRE";
    $tabMots[] = "COULEUR";
    $tabMots[] = "COULOIR";
    $tabMots[] = "COUPER";
    $tabMots[] = "COURIR";
    $tabMots[] = "COURONNE";
    $tabMots[] = "COURT";
    $tabMots[] = "CRAIE";
    $tabMots[] = "CRAVATE";
    $tabMots[] = "CROCHET";
    $tabMots[] = "CROISSANT";
    $tabMots[] = "CUBE";
    $tabMots[] = "CUILLERE";
    $tabMots[] = "CUISSE";
    $tabMots[] = "CULOTTE";
    $tabMots[] = "CURIEUX";
    $tabMots[] = "CUVETTE";
    $tabMots[] = "DAME";
    $tabMots[] = "DANGER";
    $tabMots[] = "DANS";
    $tabMots[] = "DANSER";
    $tabMots[] = "DE";
    $tabMots[] = "DEBORDER";
    $tabMots[] = "DEBOUT";
    $tabMots[] = "DECHIRER";
    $tabMots[] = "DECOLLER";
    $tabMots[] = "DECORER";
    $tabMots[] = "DECOUPAGE";
    $tabMots[] = "DECOUPER";
    $tabMots[] = "DEDANS";
    $tabMots[] = "DEFENDRE";
    $tabMots[] = "DEHORS";
    $tabMots[] = "DELTAPLANE";
    $tabMots[] = "DEMANDER";
    $tabMots[] = "DEMARRER";
    $tabMots[] = "DEMOLIR";
    $tabMots[] = "DEPASSER";
    $tabMots[] = "DERNIER";
    $tabMots[] = "DERRIERE";
    $tabMots[] = "DESCENDRE";
    $tabMots[] = "DESOBEIR";
    $tabMots[] = "DESSIN";
    $tabMots[] = "DESSINER";
    $tabMots[] = "DETRUIRE";
    $tabMots[] = "DEUX";
    $tabMots[] = "DEUXIEME";
    $tabMots[] = "DEVANT";
    $tabMots[] = "DICTIONNAIRE";
    $tabMots[] = "DIFFERENCE";
    $tabMots[] = "DIFFERENT";
    $tabMots[] = "DIFFICILE";
    $tabMots[] = "DIRE";
    $tabMots[] = "DIRECTEUR";
    $tabMots[] = "DIRECTRICE";
    $tabMots[] = "DISCUTER";
    $tabMots[] = "DISPARAITRE";
    $tabMots[] = "DISTRIBUER";
    $tabMots[] = "DIX";
    $tabMots[] = "DOIGT";
    $tabMots[] = "DOIGTS";
    $tabMots[] = "DOMINO";
    $tabMots[] = "DONNER";
    $tabMots[] = "DORMIR";
    $tabMots[] = "DOS";
    $tabMots[] = "DOSSIER";
    $tabMots[] = "DOUCHE";
    $tabMots[] = "DOUCHER";
    $tabMots[] = "DOUX";
    $tabMots[] = "DROIT";
    $tabMots[] = "DU";
    $tabMots[] = "DUR";
    $tabMots[] = "EAU";
    $tabMots[] = "ECARTER";
    $tabMots[] = "ECHANGER";
    $tabMots[] = "ECHARPE";
    $tabMots[] = "ECHASSES";
    $tabMots[] = "ECHELLE";
    $tabMots[] = "ECLABOUSSER";
    $tabMots[] = "ECLAIRER";
    $tabMots[] = "ECOLE";
    $tabMots[] = "ECOUTER";
    $tabMots[] = "ECRAN";
    $tabMots[] = "ECRASER";
    $tabMots[] = "ECRIRE";
    $tabMots[] = "ECRITURE";
    $tabMots[] = "EFFACER";
    $tabMots[] = "EFFORT";
    $tabMots[] = "ELASTIQUE";
    $tabMots[] = "ELECTRICITE";
    $tabMots[] = "ELEVE";
    $tabMots[] = "EMMENER";
    $tabMots[] = "EMPORTER";
    $tabMots[] = "ENCORE";
    $tabMots[] = "ENERVE";
    $tabMots[] = "ENFANT";
    $tabMots[] = "ENFILER";
    $tabMots[] = "ENFONCER";
    $tabMots[] = "ENGIN";
    $tabMots[] = "ENLEVER";
    $tabMots[] = "ENTENDRE";
    $tabMots[] = "ENTONNOIR";
    $tabMots[] = "ENTOURER";
    $tabMots[] = "ENTREE";
    $tabMots[] = "ENTRER";
    $tabMots[] = "ENVELOPPE";
    $tabMots[] = "ENVOYER";
    $tabMots[] = "EPAIS";
    $tabMots[] = "EPAULE";
    $tabMots[] = "EPEE";
    $tabMots[] = "EQUIPE";
    $tabMots[] = "ESCABEAU";
    $tabMots[] = "ESCALADER";
    $tabMots[] = "ESCALIER";
    $tabMots[] = "ESCARGOT";
    $tabMots[] = "ESCARPIN";
    $tabMots[] = "ESSUYER";
    $tabMots[] = "ETAGERE";
    $tabMots[] = "ETANG";
    $tabMots[] = "ETIQUETTE";
    $tabMots[] = "ETROIT";
    $tabMots[] = "ETUDE";
    $tabMots[] = "ETUDIER";
    $tabMots[] = "EXPLIQUER";
    $tabMots[] = "EXTERIEUR";
    $tabMots[] = "FABRIQUER";
    $tabMots[] = "FACILE";
    $tabMots[] = "FAIRE";
    $tabMots[] = "FATIGUE";
    $tabMots[] = "FAUTE";
    $tabMots[] = "FAUTEUIL";
    $tabMots[] = "FEE";
    $tabMots[] = "FENETRE";
    $tabMots[] = "FERMER";
    $tabMots[] = "FESSE";
    $tabMots[] = "FEU";
    $tabMots[] = "FEUILLE";
    $tabMots[] = "FEUTRE";
    $tabMots[] = "FICELLE";
    $tabMots[] = "FIL";
    $tabMots[] = "FILET";
    $tabMots[] = "FILLE";
    $tabMots[] = "FILM";
    $tabMots[] = "FINIR";
    $tabMots[] = "FLECHE";
    $tabMots[] = "FLEUR";
    $tabMots[] = "FLOTTER";
    $tabMots[] = "FOIS";
    $tabMots[] = "FONCE";
    $tabMots[] = "FOND";
    $tabMots[] = "FOOTBALL";
    $tabMots[] = "FORT";
    $tabMots[] = "FOUILLER";
    $tabMots[] = "FRAPPER";
    $tabMots[] = "FREIN";
    $tabMots[] = "FROID";
    $tabMots[] = "FUSEE";
    $tabMots[] = "FUSIL";
    $tabMots[] = "GAGNER";
    $tabMots[] = "GANT";
    $tabMots[] = "GARAGE";
    $tabMots[] = "GARÇON";
    $tabMots[] = "GARDER";
    $tabMots[] = "GARDIEN";
    $tabMots[] = "GARE";
    $tabMots[] = "GAUCHE";
    $tabMots[] = "GENER";
    $tabMots[] = "GENOU";
    $tabMots[] = "GENTIL";
    $tabMots[] = "GLISSER";
    $tabMots[] = "GOLF";
    $tabMots[] = "GOMME";
    $tabMots[] = "GONFLER";
    $tabMots[] = "GOUTER";
    $tabMots[] = "GOUTTES";
    $tabMots[] = "GRAND";
    $tabMots[] = "GRIMPER";
    $tabMots[] = "GRIS";
    $tabMots[] = "GRONDER";
    $tabMots[] = "GROS";
    $tabMots[] = "GROUPE";
    $tabMots[] = "GRUE";
    $tabMots[] = "GYMNASTIQUE";
    $tabMots[] = "HABIT";
    $tabMots[] = "HANCHE";
    $tabMots[] = "HANDICAPE";
    $tabMots[] = "HAUT";
    $tabMots[] = "HELICOPTERE";
    $tabMots[] = "HEXAGONE";
    $tabMots[] = "HISTOIRE";
    $tabMots[] = "HORLOGE";
    $tabMots[] = "HUIT";
    $tabMots[] = "HUMIDE";
    $tabMots[] = "IDEE";
    $tabMots[] = "ILE";
    $tabMots[] = "IMAGE";
    $tabMots[] = "IMITER";
    $tabMots[] = "IMMEUBLE";
    $tabMots[] = "IMMOBILE";
    $tabMots[] = "INONDER";
    $tabMots[] = "INSEPARABLE";
    $tabMots[] = "INSTRUMENT";
    $tabMots[] = "INTERESSANT";
    $tabMots[] = "INTERIEUR";
    $tabMots[] = "INTRUS";
    $tabMots[] = "JALOUX";
    $tabMots[] = "JAMBES";
    $tabMots[] = "JAUNE";
    $tabMots[] = "JEAN";
    $tabMots[] = "JEU";
    $tabMots[] = "JOLI";
    $tabMots[] = "JOUER";
    $tabMots[] = "JOUET";
    $tabMots[] = "JUPE";
    $tabMots[] = "LAC";
    $tabMots[] = "LACER";
    $tabMots[] = "LACET";
    $tabMots[] = "LAINE";
    $tabMots[] = "LAISSER";
    $tabMots[] = "LARGE";
    $tabMots[] = "LAVABO";
    $tabMots[] = "LAVER";
    $tabMots[] = "LECTURE";
    $tabMots[] = "LETTRE";
    $tabMots[] = "LIERRE";
    $tabMots[] = "LIGNE";
    $tabMots[] = "LINGE";
    $tabMots[] = "LIRE";
    $tabMots[] = "LISSE";
    $tabMots[] = "LISTE";
    $tabMots[] = "LIT";
    $tabMots[] = "LITRE";
    $tabMots[] = "LIVRE";
    $tabMots[] = "LOIN";
    $tabMots[] = "LONG";
    $tabMots[] = "LUMIERE";
    $tabMots[] = "LUNETTES";
    $tabMots[] = "MADAME";
    $tabMots[] = "MAGAZINE";
    $tabMots[] = "MAGICIEN";
    $tabMots[] = "MAGIE";
    $tabMots[] = "MAGNETOSCOPE";
    $tabMots[] = "MAILLOT";
    $tabMots[] = "MAIN";
    $tabMots[] = "MAINS";
    $tabMots[] = "MAISON";
    $tabMots[] = "MAITRE";
    $tabMots[] = "MAITRESSE";
    $tabMots[] = "MAL";
    $tabMots[] = "MALADROIT";
    $tabMots[] = "MANCHE";
    $tabMots[] = "MANQUER";
    $tabMots[] = "MANTEAU";
    $tabMots[] = "MARCHE";
    $tabMots[] = "MARIONNETTE";
    $tabMots[] = "MARTEAU";
    $tabMots[] = "MATELAS";
    $tabMots[] = "MATERNELLE";
    $tabMots[] = "MELANGER";
    $tabMots[] = "MEME";
    $tabMots[] = "MENSONGE";
    $tabMots[] = "MESURER";
    $tabMots[] = "METAL";
    $tabMots[] = "METRE";
    $tabMots[] = "METTRE";
    $tabMots[] = "MEUBLE";
    $tabMots[] = "MICRO";
    $tabMots[] = "MIEUX";
    $tabMots[] = "MILIEU";
    $tabMots[] = "MINE";
    $tabMots[] = "MODELE";
    $tabMots[] = "MOINS";
    $tabMots[] = "MONTAGNE";
    $tabMots[] = "MONTER";
    $tabMots[] = "MONTRER";
    $tabMots[] = "MORCEAU";
    $tabMots[] = "MOT";
    $tabMots[] = "MOTEUR";
    $tabMots[] = "MOTO";
    $tabMots[] = "MOUCHOIR";
    $tabMots[] = "MOUFLE";
    $tabMots[] = "MOUILLE";
    $tabMots[] = "MOUILLER";
    $tabMots[] = "MOULIN";
    $tabMots[] = "MOUSSE";
    $tabMots[] = "MOYEN";
    $tabMots[] = "MUET";
    $tabMots[] = "MULTICOLORE";
    $tabMots[] = "MUR";
    $tabMots[] = "MUSCLE";
    $tabMots[] = "MUSIQUE";
    $tabMots[] = "NAGER";
    $tabMots[] = "NENUPHAR";
    $tabMots[] = "NEUF";
    $tabMots[] = "NŒUD";
    $tabMots[] = "NOIR";
    $tabMots[] = "NOM";
    $tabMots[] = "NOMBRE";
    $tabMots[] = "NOUVEAU";
    $tabMots[] = "NU";
    $tabMots[] = "NUMERO";
    $tabMots[] = "OBEIR";
    $tabMots[] = "OBJET";
    $tabMots[] = "OBLIGER";
    $tabMots[] = "ONGLE";
    $tabMots[] = "ORCHESTRE";
    $tabMots[] = "ORDINATEUR";
    $tabMots[] = "ORDRE";
    $tabMots[] = "OURS";
    $tabMots[] = "OUTIL";
    $tabMots[] = "OUVRIR";
    $tabMots[] = "PAGE";
    $tabMots[] = "PAIRE";
    $tabMots[] = "PANNE";
    $tabMots[] = "PANTALON";
    $tabMots[] = "PAPIER";
    $tabMots[] = "PARACHUTE";
    $tabMots[] = "PARCOURS";
    $tabMots[] = "PAREIL";
    $tabMots[] = "PARKING";
    $tabMots[] = "PARLER";
    $tabMots[] = "PARTAGER";
    $tabMots[] = "PARTIR";
    $tabMots[] = "PAS";
    $tabMots[] = "PASSERELLE";
    $tabMots[] = "PATATE";
    $tabMots[] = "PATAUGER";
    $tabMots[] = "PEDALO";
    $tabMots[] = "PEINDRE";
    $tabMots[] = "PEINTURE";
    $tabMots[] = "PELUCHE";
    $tabMots[] = "PENTE";
    $tabMots[] = "PERCER";
    $tabMots[] = "PERDRE";
    $tabMots[] = "PERLE";
    $tabMots[] = "PERSONNE";
    $tabMots[] = "PETIT";
    $tabMots[] = "PEU";
    $tabMots[] = "PEUR";
    $tabMots[] = "PHOTO";
    $tabMots[] = "PIED";
    $tabMots[] = "PIEDS";
    $tabMots[] = "PILOTE";
    $tabMots[] = "PINCEAU";
    $tabMots[] = "PION";
    $tabMots[] = "PLACARD";
    $tabMots[] = "PLAFOND";
    $tabMots[] = "PLAGE";
    $tabMots[] = "PLANCHE";
    $tabMots[] = "PLÂTRE";
    $tabMots[] = "PLEUVOIR";
    $tabMots[] = "PLI";
    $tabMots[] = "PLIAGE";
    $tabMots[] = "PLIER";
    $tabMots[] = "PLONGEOIR";
    $tabMots[] = "PLONGER";
    $tabMots[] = "PLUIE";
    $tabMots[] = "PLUS";
    $tabMots[] = "PNEU";
    $tabMots[] = "POCHE";
    $tabMots[] = "POIGNET";
    $tabMots[] = "POING";
    $tabMots[] = "POINT";
    $tabMots[] = "POINTE";
    $tabMots[] = "POINTU";
    $tabMots[] = "POISSON";
    $tabMots[] = "POLI";
    $tabMots[] = "POMPIERS";
    $tabMots[] = "PONT";
    $tabMots[] = "PORTE";
    $tabMots[] = "PORTEMANTEAU";
    $tabMots[] = "PORTER";
    $tabMots[] = "POSER";
    $tabMots[] = "POSTER";
    $tabMots[] = "POT";
    $tabMots[] = "POUBELLE";
    $tabMots[] = "POUCE";
    $tabMots[] = "POUSSER";
    $tabMots[] = "POUVOIR";
    $tabMots[] = "PREMIER";
    $tabMots[] = "PRENDRE";
    $tabMots[] = "PRENOM";
    $tabMots[] = "PREPARER";
    $tabMots[] = "PRES";
    $tabMots[] = "PRESENT";
    $tabMots[] = "PRESQUE";
    $tabMots[] = "PRESSER";
    $tabMots[] = "PRETER";
    $tabMots[] = "PRINCE";
    $tabMots[] = "PRISES";
    $tabMots[] = "PRIVER";
    $tabMots[] = "PROMETTRE";
    $tabMots[] = "PROPRE";
    $tabMots[] = "PUNAISE";
    $tabMots[] = "PUNIR";
    $tabMots[] = "PUZZLE";
    $tabMots[] = "PYJAMA";
    $tabMots[] = "PYRAMIDE";
    $tabMots[] = "QUAI";
    $tabMots[] = "QUATRE";
    $tabMots[] = "QUESTION";
    $tabMots[] = "RACONTER";
    $tabMots[] = "RADIATEUR";
    $tabMots[] = "RADIO";
    $tabMots[] = "RAME";
    $tabMots[] = "RAMPE";
    $tabMots[] = "RAMPER";
    $tabMots[] = "RANGER";
    $tabMots[] = "RATER";
    $tabMots[] = "RAYURE";
    $tabMots[] = "RECEVOIR";
    $tabMots[] = "RECITER";
    $tabMots[] = "RECOMMENCER";
    $tabMots[] = "RECREATION";
    $tabMots[] = "RECULER";
    $tabMots[] = "REFUSER";
    $tabMots[] = "REGARDER";
    $tabMots[] = "REINE";
    $tabMots[] = "REMETTRE";
    $tabMots[] = "REMPLACER";
    $tabMots[] = "REMPLIR";
    $tabMots[] = "RENTREE";
    $tabMots[] = "RENTRER";
    $tabMots[] = "RENVERSER";
    $tabMots[] = "REPARER";
    $tabMots[] = "REPETER";
    $tabMots[] = "REPONDRE";
    $tabMots[] = "RESPIRER";
    $tabMots[] = "RESSEMBLER";
    $tabMots[] = "RESTER";
    $tabMots[] = "RETARD";
    $tabMots[] = "REUSSIR";
    $tabMots[] = "REVENIR";
    $tabMots[] = "RIDEAU";
    $tabMots[] = "ROBE";
    $tabMots[] = "ROBINET";
    $tabMots[] = "ROI";
    $tabMots[] = "ROND";
    $tabMots[] = "ROUE";
    $tabMots[] = "ROUGE";
    $tabMots[] = "ROULADE";
    $tabMots[] = "ROULER";
    $tabMots[] = "ROUX";
    $tabMots[] = "RUBAN";
    $tabMots[] = "RUGUEUX";
    $tabMots[] = "SAGE";
    $tabMots[] = "SALADIER";
    $tabMots[] = "SALE";
    $tabMots[] = "SALLE";
    $tabMots[] = "SAUT";
    $tabMots[] = "SAUTER";
    $tabMots[] = "SAVON";
    $tabMots[] = "SCIE";
    $tabMots[] = "SEAU";
    $tabMots[] = "SEC";
    $tabMots[] = "SECHER";
    $tabMots[] = "SEMELLE";
    $tabMots[] = "SENS";
    $tabMots[] = "SENTIR";
    $tabMots[] = "SEPARER";
    $tabMots[] = "SEPT";
    $tabMots[] = "SERIEUX";
    $tabMots[] = "SERPENT";
    $tabMots[] = "SERRE";
    $tabMots[] = "SERRER";
    $tabMots[] = "SERRURE";
    $tabMots[] = "SERVIETTE";
    $tabMots[] = "SERVIR";
    $tabMots[] = "SEUL";
    $tabMots[] = "SIEGE";
    $tabMots[] = "SIESTE";
    $tabMots[] = "SILENCE";
    $tabMots[] = "SIX";
    $tabMots[] = "SOL";
    $tabMots[] = "SOLDAT";
    $tabMots[] = "SOLIDE";
    $tabMots[] = "SOMMEIL";
    $tabMots[] = "SONNER";
    $tabMots[] = "SONNETTE";
    $tabMots[] = "SORCIERE";
    $tabMots[] = "SORTIE";
    $tabMots[] = "SORTIR";
    $tabMots[] = "SOUFFLER";
    $tabMots[] = "SOULEVER";
    $tabMots[] = "SOULIGNER";
    $tabMots[] = "SOUPLE";
    $tabMots[] = "SOURD";
    $tabMots[] = "SOURIRE";
    $tabMots[] = "SOUS";
    $tabMots[] = "SPAGHETTI";
    $tabMots[] = "SPORT";
    $tabMots[] = "STYLO";
    $tabMots[] = "SUIVANT";
    $tabMots[] = "SUIVRE";
    $tabMots[] = "SUR";
    $tabMots[] = "SURFEUR";
    $tabMots[] = "TABLE";
    $tabMots[] = "TABLEAU";
    $tabMots[] = "TABLIER";
    $tabMots[] = "TABOURET";
    $tabMots[] = "TACHE";
    $tabMots[] = "TAILLE";
    $tabMots[] = "TAILLER";
    $tabMots[] = "TALON";
    $tabMots[] = "TAMBOUR";
    $tabMots[] = "TAMPON";
    $tabMots[] = "TAPER";
    $tabMots[] = "TAPIS";
    $tabMots[] = "TARD";
    $tabMots[] = "TASSE";
    $tabMots[] = "TELECOMMANDE";
    $tabMots[] = "TELEPHONE";
    $tabMots[] = "TELEVISION";
    $tabMots[] = "TENDRE";
    $tabMots[] = "TENIR";
    $tabMots[] = "TENNIS";
    $tabMots[] = "TERMINER";
    $tabMots[] = "TETE";
    $tabMots[] = "TIRER";
    $tabMots[] = "TIROIR";
    $tabMots[] = "TISSU";
    $tabMots[] = "TITRE";
    $tabMots[] = "TOBOGGAN";
    $tabMots[] = "TOILETTE";
    $tabMots[] = "TOMBER";
    $tabMots[] = "TORDU";
    $tabMots[] = "TOT";
    $tabMots[] = "TOUCHER";
    $tabMots[] = "TOUR";
    $tabMots[] = "TOURNER";
    $tabMots[] = "TOURNEVIS";
    $tabMots[] = "TRAIN";
    $tabMots[] = "TRAIT";
    $tabMots[] = "TRAMPOLINE";
    $tabMots[] = "TRANQUILLE";
    $tabMots[] = "TRANSPARENT";
    $tabMots[] = "TRANSPIRER";
    $tabMots[] = "TRANSPORTER";
    $tabMots[] = "TRAVAIL";
    $tabMots[] = "TRAVAILLER";
    $tabMots[] = "TRAVERSER";
    $tabMots[] = "TREMPER";
    $tabMots[] = "TRICHER";
    $tabMots[] = "TRICOT";
    $tabMots[] = "TRIER";
    $tabMots[] = "TROIS";
    $tabMots[] = "TROISIEME";
    $tabMots[] = "TROMPETTE";
    $tabMots[] = "TROP";
    $tabMots[] = "TROUER";
    $tabMots[] = "TROUS";
    $tabMots[] = "TROUSSE";
    $tabMots[] = "TUNNEL";
    $tabMots[] = "UN";
    $tabMots[] = "UNIFORME";
    $tabMots[] = "USE";
    $tabMots[] = "VACHE";
    $tabMots[] = "VALISE";
    $tabMots[] = "VASE";
    $tabMots[] = "VEHICULE";
    $tabMots[] = "VENIR";
    $tabMots[] = "VENTRE";
    $tabMots[] = "VERRE";
    $tabMots[] = "VERS";
    $tabMots[] = "VERSER";
    $tabMots[] = "VERT";
    $tabMots[] = "VESTE";
    $tabMots[] = "VETEMENT";
    $tabMots[] = "VIDER";
    $tabMots[] = "VIRAGE";
    $tabMots[] = "VIS";
    $tabMots[] = "VITE";
    $tabMots[] = "VITESSE";
    $tabMots[] = "VITRE";
    $tabMots[] = "VOITURE";
    $tabMots[] = "VOIX";
    $tabMots[] = "VOLER";
    $tabMots[] = "VOULOIR";
    $tabMots[] = "VOYAGE";
    $tabMots[] = "WAGON";
    $tabMots[] = "XYLOPHONE";
    $tabMots[] = "ZERO";
    $tabMots[] = "ZIGZAG";

    return $tabMots;
}

/**
 * Prise d'un mot en paramètre d'entrée et qui
 * renvoi un tableau de caractères contenant autant de case
 * que de letttres dans le mot. Chacune de ces cases contenant un _ .
 * 
 * @param string $mot contenant le mot à coder
 */

function coderMot($mot)
{
  for ($i = 0 ; $i < strlen($mot) ; $i++)
  {
    $tab[]= "_";
  }
  return $tab;
}



/**
 * Recherche des occurences d'une lettre passée en paramètre dans un tableau
 * de caractères passé étant eux même paramétré .
 * Cette méthode retourne toutes les positions dans un tableau.
 *
 * @param char $lettre
 * @param array $tab
 * @param int $depart  represente le point de depart de la recherche
 * @return void
 */
function testerLettre($lettre, $tab, $depart)
{
    $tabRec = array_slice($tab, $depart);  // on détermine le tableau de recherche en fonction de la position depart. 
    //Array_slice, permet d'extraire le sous tableau en fonction de la position
    $res = (array_search($lettre, $tabRec));    //recherche la lettre dans le tableau
    if ($res === false)     //pour eviter la confusion entre 0 et false
    { 
        return [];
    }
    else
    {
        $reponse[] = $res + $depart;
        $tabPos = array_merge($reponse, testerLettre($lettre, $tab, $res + $depart + 1));  // array_merge permet de fusionner le tableau résultat avec le tableau de l'appel recursif
        // array_merge de [1,2] et [4] donne [1,2,4]
        return $tabPos;
    }
}

/**
 * Méthode qui modifie le tableau passé en paramètre en affectant
 * la lettre à la position passée en paramètre.
 * 
 * @param array $tab tableau dans où se situe les lettres
 * @param
 */
function ajouterUneLettre($lettre, $tab, $position)
{
    $tab[$position] = $lettre;
    return $lettre;
}

/**
 * Méthode qui appelle la méthode ajouterUneLettre pour
 * toutes les valeurs contenues dans la liste en paramètre
 * 
 * @param array $tab le tableau où il faut saisir les valeurs
 * @param array $posLettre le tableau qui indique la position des lettres
 */
function ajouterLesLettres($let, $tab, $posLettre)
{
    for ($i = 0 ; $i < count($posLettre); $i++)
    {
        $tab = ajouterUneLettre($let, $tab, $posLettre[$i]);
    }
    return $tab;
}

/**
 * Méthode qui permet d'afficher les caractères contenus dans l liste passée en paramètre à l'écran
 * @param array $ListeLettres affiche la liste des mauvaises lettres
 */

function afficherMauvaisesLettres($listeLettres)
{
    echo "Les mauvaises lettres sont :";
    $taille = count($listeLettres);
    for ($i = 0; $i < $taille ; $i++)
    {
        if ($i == $taille = -1)
        {
            echo $listeLettres[$i] ."\n";
        }
        else
        {
            echo $listeLettres[$i] .",";
        }
    }
    
}


/**
 * Dessine le pendu en fonction du nombre d'erreur
 * 
 * @param   
 */

function dessinerPendu($nbErreur)
{
    switch ($nbErreur)
    {
        case 0:
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "                      " . "\n";
            break;
        case 1:
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "                      " . "\n";
            echo "     ________         " . "\n";
            break;
        case 2:
            echo "                      " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "     _|_______        " . "\n";
            break;
        case 3:
            echo "     ________         " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "     _|_______        " . "\n";
            break;
        case 4:
            echo "     ________         " . "\n";
            echo "      |     |         " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "     _|_______        " . "\n";
            break;
        case 5:
            echo "     ________         " . "\n";
            echo "      |     |         " . "\n";
            echo "      |     O         " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "     _|_______        " . "\n";
            break;
        case 6:
            echo "     ________         " . "\n";
            echo "      |     |         " . "\n";
            echo "      |     O         " . "\n";
            echo "      |     |         " . "\n";
            echo "      |     |         " . "\n";
            echo "      |               " . "\n";
            echo "      |               " . "\n";
            echo "     _|_______        " . "\n";
            break;
        case 7:
            echo "     ________          " . "\n";
            echo "      |     |          " . "\n";
            echo "      |     O          " . "\n";
            echo "      |    /|\\        " . "\n";
            echo "      |     |          " . "\n";
            echo "      |                " . "\n";
            echo "      |                " . "\n";
            echo "     _|_______         " . "\n";
            break;
        case 8:
            echo "     ________          " . "\n";
            echo "      |     |          " . "\n";
            echo "      |     O          " . "\n";
            echo "      |    /|\\        " . "\n";
            echo "      |     |          " . "\n";
            echo "      |    / \\        " . "\n";
            echo "      |                " . "\n";
            echo "     _|_______         " . "\n";
            break;
        default:
            break;
    }
}



/**
 *  Méthode qui renvoi un mot en le choisissant
 *  au hasard parmi une liste de mots
 * 
 * @return string  $mot  est le mot choisi dans le dictionnaire
 */
function choisirMot()
{
    $dico = creer_dico();
    $num = rand(0, count ($dico) - 1);
    return $dico[array_rand($dico)]; // ou return $dico[$num]
}


/**
 * Méthode qui demande une lettre à l'utilisateur,
 * elle vérifie que le caractère saisi est une lettre
 * et le renvoi en majuscule
 */
function demanderLettre()
{
    do{
        echo "\n";
        $lettre = strtoupper(readline("entrer une lettre : "));
    }while ((ctype_alpha($lettre)) || (strlen($lettre) > 1)); // ou utilisation de  while (!IntlChar::isalpha($lettre))
    return $lettre;
}


/**
 * Méthode qui renvoi 1 si la partie est gagné, -1 si la partie est perdu et 0 si partie continue.
 * Elle reçoit en paramètre le nombre d'erreurs et le tableau contenant le mot composé.
 * @param array $tab
 * @param void 0 si la partie est toujours en cours, 1 si c'est gagné et -1 s'il a perdu
 * @param int $nbErreur
 */
function testerGagner($nbErreur, $tab)
{
    if($nbErreur == 9) // s'il y a 9 erreurs, la partie est perdue
    {
        return -1;
    }
    else if (in_array("_", $tab) === false) // s'il y a un "_" c'est quer la partie est en cours
    {
        return 1;
    }
    else 
    {
        return 0;
    }
}




/**
 * Méthode qui lance et gère une partie
 * 
 * @return void
 */
function lancerPartie()
{
    $motATrouver = choisirMot(); // determine la mot à trouver
    echo $motATrouver."\n";
    $tabMotATrouver = str_split($motATrouver);  // toutes les functions travaillent avec des tableaux, on transforme la haine en tableau
    $motCode=coderMot($motATrouver);
    $nbErreur=0;        // compte le nombre d'erreur
    $gagne=false;
    $mauvaisesLettres=[];   // tableau contenant les mauvaises lettres
    do{
        afficherTableau($motCode);      // on affiche le mot contenant les _
        dessinerPendu($nbErreur);
        if (!empty($mauvaisesLettres)){ //s'il y a des mauvaises lettres, on les affiche
        afficherMauvaisesLettres($mauvaisesLettres);
        }
        $lettre = demanderLettre();
        $lesPositions = testerLettre($lettre,$tabMotATrouver,0);    //on recupere toutes les positions de cette lettre dans le mot
        if (empty($lesPositions))
        {                       //la lettre n'est pas dans le mot
            $nbErreur++;
            $mauvaisesLettres[]=$lettre;
        }
        else{
            $motCode=ajouterLesLettres($lettre,$motCode,$lesPositions); //motCode = pour récuperer le tableau mis à jour
        }
        
        $gagne = testerGagner($nbErreur,$motCode);  // on teste l'état de la partie
        echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
    }
    while ($gagne==0);
    if ($gagne==1)  
    {
        echo "Bravo!! vous avez gagné. Le mot été $motATrouver\n";
    }
    else
    {
        echo "Vous avez perdu. Le mot été $motATrouver\n";
    }
}


lancerPartie();