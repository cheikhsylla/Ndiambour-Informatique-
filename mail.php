<?php
    $destinataire = 'niplg@yahoo.fr';
    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $expediteur = 'nip@ndiambourinformatiqueplus.com';
     
    $objet = 'Réservation billet ';
     
    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
    $headers .= 'From: "Nip Voyage"<'.$expediteur.'>'."\n"; // Expediteur
     
    $message =  '<div style="width: 100%; text-align: center; font-weight: bold"> Voici les coordonnées de Réservation pour : '.$_POST['a1'].'-'.$_POST['a2'].'!<br>
                   Prenom:'.$_POST['a1'].' <br> 
                   Nom:'.$_POST['a2'].' <br> 
                   Date de naissance:'.$_POST['a3'].' <br> 
                   Ville de départ:'.$_POST['a4'].' <br> 
                   Ville d arrivé:'.$_POST['a5'].' <br> 
                   Date de départ / arrivé:'.$_POST['a6'].' <br> 
                   Numéro de passeport:'.$_POST['a7'].' <br> 
                   Pays de délivrance:'.$_POST['a8'].' <br> 

                   Date de validité:'.$_POST['a9'].' <br> 

                   
                   
                   </div>';
     
    if(mail($destinataire, $objet, $message, $headers))
    {
        echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
    }
    else // Non envoyé
    {
        echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
    }
    header('Location: http://www.ndiambourinformatiqueplus.com/');
?>