<?php
// Contrôle et sécurités du formulaire
$formErrors = array();
$formIsValid = array();
if (isset($_POST['formSubmit'])){
    if (isset($_POST['name'])){
        if (!empty($_POST['name'])){
            if (preg_match('/^[a-zA-ZÀ-ÿ\'\- ]+$/', $_POST['name'])){
                $name = htmlspecialchars($_POST['name']);
                $formErrors['name'] = 'Nom & Prénom';
                $formIsValid['name'] = true;
            }
            else{
                $formErrors['name'] = 'Votre nom et votre prénom ne sont pas valides';
                $formIsValid['name'] = false;
            }
        }
        else{
            $formErrors['name'] = 'Veuillez renseigner votre nom et prénom (obligatoire)';
            $formIsValid['name'] = false;
        }
    }
    else{
        $formErrors['name'] = 'Nom & Prénom';
        $formErrors['name'] = 'Nom & Prénom';
        $formIsValid['name'] = true;
    }
    if (isset($_POST['email'])){
        if (!empty($_POST['email'])){
            if (preg_match('/^([a-z0-9\-_.]{1,64})@([a-z0-9\-_.]{1,255})\.([a-z]{1,3})$/', $_POST['email'])){
                $email = htmlspecialchars($_POST['email']);
                $formErrors['email'] = 'Adresse Mail';
                $formIsValid['email'] = true;
            }
            else{
                $formErrors['email'] = 'Votre adresse mail n\'est pas valide';
                $formIsValid['email'] = false;
            }
        }
        else{
            $formErrors['email'] = 'Veuillez renseigner votre adresse mail (obligatoire)';
            $formIsValid['email'] = false;
        }
    }
    else{
        $formErrors['email'] = 'Adresse Mail';
        $formIsValid['email'] = true;
    }
    if (isset($_POST['subject'])){
        if (!empty($_POST['subject'])){
            $subject = htmlspecialchars($_POST['subject']);
            $formErrors['subject'] = 'Sujet';
            $formIsValid['subject'] = true;
        }
        else{
            $formErrors['subject'] = 'Veuillez renseigner le sujet de votre message (obligatoire)';
            $formIsValid['subject'] = false;
        }
    }
    else{
        $formErrors['subject'] = 'Sujet';
        $formIsValid['subject'] = true;
    }
    if (isset($_POST['message'])){
        if (!empty($_POST['message'])){
            $message = htmlspecialchars($_POST['message']);
            $formErrors['message'] = 'Votre message';
            $formIsValid['message'] = true;
        }
        else{
            $formErrors['message'] = 'Veuillez renseigner un message (obligatoire)';
            $formIsValid['message'] = false;
        }
    }
    else{
        $formErrors['message'] = 'Votre message';
        $formIsValid['message'] = true;
    }
}
// Envoi du formulaire
if (isset($_POST['formSubmit']) && count($formErrors) == 0){
    $to = 'max_p@live.fr';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = array(
        'From' => $_POST['name'],
        'Reply-To' => 'webmaster@example.com',
        'X-Mailer' => 'PHP/' . phpversion()
    );
    mail($to, $subject, $message, $headers);  
}