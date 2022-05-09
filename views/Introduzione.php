<?php

    $array = [
        'privacy' => [
            
            ' 
            <div width: calc((100% / 2)-15px);>
                <h2 style="font-size: 1.6em;">Norme sulla privacy</h2>
                <p>
                    Qui spieghiamo quali informazioni raccogliamo e perché, come le utilizziamo, nonché come controllarle e aggiornarle.
                    Leggi le nostre Norme sulla privacy
                </p>
                
            </div>
            '
        ],
        'termini' => [
            '
            <div width: calc((100% / 2)-15px);>
                <h2 style="font-size: 1.6em;">Termini di servizio</h2>
                <p>
                    Qui descriviamo le regole che accetti di rispettare quando utilizzi i nostri servizi.
                
                    Leggi i nostri Termini di servizio
                </p>
                
            </div>
            
            '
        ],
        'centro' => [
            '
            <div width: calc((100% / 2)-15px);>
                <h2 style="font-size: 1.6em;">Centro Google per la sicurezza online</h2>
                <div style="display: flex;margin-top: 15px;">
                    <img style="height: 70%;margin-right: 10px" src="https://www.gstatic.com/policies/images/shields2.png" alt="">
                    <p>
                        Realizzare prodotti per tutti significa proteggere tutti coloro che li usano. Visita la pagina safety.google per avere ulteriori informazioni su sicurezza, controlli per la privacy e strumenti integrati che aiutano a stabilire le regole di base per la vita online della tua famiglia.
                    
                        Scopri cosa facciamo per garantire la tua sicurezza
                    </p>
                </div>
            </div>
            '
        ],
        'account' => [
            "
            <div width: calc((100% / 2)-15px);>
                <h2 style='font-size: 1.6em;'>Account Google</h2>
                <div style='display: flex;margin-top: 15px;'>
                    <img style='height: 70%;margin-right: 10px' src='https://www.gstatic.com/policies/images/my_account.png' alt=''>
                    <p>
                        Controlla e proteggi il tuo account da un'unica posizione. Il tuo account Google ti dà rapido accesso a impostazioni e strumenti che ti consentono di proteggere i tuoi dati e la tua privacy.
                    
                        Visita il tuo Account Google
                    </p>
                </div>
                
            </div>
            "
        ],
        'principi' => [
            '
            <div width: calc((100% / 2)-15px);>
                <h2 style="font-size: 1.6em;">I nostri principi sulla privacy e sulla sicurezza</h2>
                <div style="display: flex;margin-top: 15px;">
                    <img style="height: 70%;margin-right: 10px" src="https://www.gstatic.com/policies/images/privacy_security_answers.png" alt="">  
                    <p>
                        In Google, sviluppiamo soluzioni per la privacy adatte a tutti. È una responsabilità legata alla creazione di prodotti e servizi gratuiti e accessibili a tutti. Questi principi sono una guida per i nostri dipendenti, i nostri processi e i nostri prodotti e consentono di mantenere i dati di ogni singolo utente privati e protetti.
                    
                        Scopri i nostri principi sulla privacy e sulla sicurezza
                    </p> 
                </div>
                
            </div>
            '
        ],
        'guida' => [
            '
            <div width: calc((100% / 2)-15px);>
                <h2 style="font-size: 1.6em;">Guida alla privacy nei prodotti Google</h2>
                <div style="display: flex;margin-top: 15px;">
                    <img style="height: 70%;margin-right: 10px" src="https://www.gstatic.com/policies/images/product_privacy.png" alt="">   
                    <p>
                        Quando utilizzi Gmail, la Ricerca Google, YouTube e altri prodotti di Google, 
                        puoi controllare e proteggere le tue informazioni personali e la cronologia di utilizzo. 
                        La Guida alla privacy nei prodotti Google può essere utile per trovare informazioni su come 
                        gestire alcune funzioni sulla privacy incorporate nei prodotti Google.
                    </p>             
                </div>
                
                
            </div>
            '
           
        ],
        
    ]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Introduzione</title>
</head>
<body>

    <header class="flexBetween container-default-2">

        <div>
            <div class="d_flex align_center">
                <img href="../index.php" style="width: 70px; height: 40px; padding-right: 10px;cursor: pointer;" src="../assets/img//logo-google.png" alt="google">
                <span style="font-size: 1.3em;" class="c_gray">Privacy e termini</span>
            </div>
            <div class="m_t_20">
                <ul class="reset-list flexRow">
                    <li class="m_e_20">
                        <a class="reset-decoration text_black" href="#">Introduzione</a> 
                    </li>
                    <li class="m_e_20">
                        <a class="reset-decoration text_black" href="./normeSullaPrivacy.php">Norme sulla privacy</a>
                    </li>
                    <li class="m_e_20">
                        <a class="reset-decoration text_black" href="./termini-di-servizio.php">Termini di servizio</a> 
                    </li>
                    <li class="m_e_20">
                        <a class="reset-decoration text_black" href="./tecnologie.php">Tecnologie</a> 
                    </li>

                    <li class="m_e_20">
                        <a class="reset-decoration text_black" href="./domandeFrequenti.php">Domande frequenti</a> 
                    </li>
                </ul>
            </div>
        </div>
        <div class="d_flex align_center">
            <div class="m_e_20">
                <img class="c_gray cursor_point" src="../assets/img/Vector.png" alt="button pointer">
            </div>
            <button class="padding_btn bg_blue fs_1 cursor_point" style="border-radius: 5px;color: white;border: none;">Accedi</button>
        </div>

    </header>

    <div class="c_gray" id="divider"></div>

    <main class="container p_t_50">

        <div class="row"> 
                <?php foreach($array as $section) { ?>
                
                    <div class="col-6 m_t_10 d-flex flex-row"> 
                        <?php 
                            foreach($section as $value) { 
                                echo $value; } ?> 
                    </div>
                    
                <?php  } ?>
        
            <!-- <p class="m_20 text_center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio numquam asperiores omnis, 
                nihil mollitia, reprehenderit beatae non voluptatem itaque a vel, officia libero minus. 
                Et veniam eos ea impedit mollitia!
            </p>
            <img src="../assets/img/google-update.jpg" alt=""> -->
        </div>

    </main>

</body>
</html>