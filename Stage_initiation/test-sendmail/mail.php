<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Envoi d'email sous PHP</title>
  </head>
  <body>
    <h3>Formulaire de contact</h3>
    <form action='' method='post'>
      <input type='text' name='pseudo_exp'/>pseudo expéditeur<br>
      <input type='email' name='email_exp'/>Email expéditeur<br>
      <input type='text' name='objet'/>Objet <br>
      Message :<br>
      <textarea name='message' cols='50' rows='4'></textarea><br>
      <input type='submit' value='Envoyer'>
    </form>

    <?php
      (isset($_POST)&& !empty($_POST['pseudo_exp']) && !empty($_POST['objet']) && !empty($_POST['message'])){

        extract($_POST);
        $destinataire='marouaneelbaroudi@gmail.com';
        $expediteur =$pseudo_exp.' <'.$email_exp. '>';
        $mail=mail($destinataire,$objet,$message,$expediteur.' : Marouane.com : Mail de test ');;
        if($mail)echo'Email envoyé avec succés !!'; else echo'Echec envoi d email !!';

      }else echo"Formulaire non soumis ou des champs sont vides !!";



     ?>



  </body>
</html>
