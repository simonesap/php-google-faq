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
                <p>
                    Realizzare prodotti per tutti significa proteggere tutti coloro che li usano. Visita la pagina safety.google per avere ulteriori informazioni su sicurezza, controlli per la privacy e strumenti integrati che aiutano a stabilire le regole di base per la vita online della tua famiglia.
                
                    Scopri cosa facciamo per garantire la tua sicurezza
                </p>
                
            </div>
            '
        ],
        'account' => [
            "
            <div width: calc((100% / 2)-15px);>
                <h2 style='font-size: 1.6em;'>Account Google</h2>
                <p>
                    Controlla e proteggi il tuo account da un'unica posizione. Il tuo account Google ti dà rapido accesso a impostazioni e strumenti che ti consentono di proteggere i tuoi dati e la tua privacy.
                
                    Visita il tuo Account Google
                </p>
                
            </div>
            "
        ],
        'principi' => [
            '
            <div width: calc((100% / 2)-15px);>
                <h2 style="font-size: 1.6em;">I nostri principi sulla privacy e sulla sicurezza</h2>
                <p>
                    In Google, sviluppiamo soluzioni per la privacy adatte a tutti. È una responsabilità legata alla creazione di prodotti e servizi gratuiti e accessibili a tutti. Questi principi sono una guida per i nostri dipendenti, i nostri processi e i nostri prodotti e consentono di mantenere i dati di ogni singolo utente privati e protetti.
                
                    Scopri i nostri principi sulla privacy e sulla sicurezza
                </p>
                
            </div>
            '
        ],
        'guida' => [
            '
            <div width: calc((100% / 2)-15px);>
                <h2 style="font-size: 1.6em;">Guida alla privacy nei prodotti Google</h2>
                <p>
                    Quando utilizzi Gmail, la Ricerca Google, YouTube e altri prodotti di Google, 
                    puoi controllare e proteggere le tue informazioni personali e la cronologia di utilizzo. 
                    La Guida alla privacy nei prodotti Google può essere utile per trovare informazioni su come 
                    gestire alcune funzioni sulla privacy incorporate nei prodotti Google.
                </p>
                
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
    <title>Tecnologie</title>
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
                        <a class="reset-decoration text_black" href="./Introduzione.php">Introduzione</a> 
                    </li>
                    <li class="m_e_20">
                        <a class="reset-decoration text_black" href="./normeSullaPrivacy.php">Norme sulla privacy</a>
                    </li>
                    <li class="m_e_20">
                        <a class="reset-decoration text_black" href="./termini-di-servizio.php">Termini di servizio</a> 
                    </li>
                    <li class="m_e_20">
                        <a class="reset-decoration text_black" href="#">Tecnologie</a> 
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

    <main class="h_100_vh">

        <div class="row d-flex flex-col" style="">
                <div class="col-2 m-3 mt-4">
                    <p class="m-2 overFlow">
                        <p class="m-4">Pubblicità</p>
                        <p class="m-4">In che modo Google utilizza i cookie</p>
                        <p class="m-4">In che modo Google utilizza il riconoscimento di pattern</p>
                        <p class="m-4"> Modalità di trattamento delle informazioni sulla posizione da parte di Google</p>
                        <p class="m-4">In che modo Google utilizza i numeri delle carte di credito per i pagamenti</p>
                        <p class="m-4">Come funziona Google Voice</p>
                        <p class="m-4">Guida alla privacy nei prodotti Google</p>
                        <p class="m-4">Modalità di conservazione dei dati raccolti da Google</p>
                    </p>
                </div>
                <div class="col-7 m_y_3 mt-5" >
                    <p class="m-2 overFlow">
                        TECNOLOGIE
                        Noi di Google perseguiamo idee e prodotti che spesso superano i limiti dell’attuale tecnologia. 
                        Siamo una società che agisce responsabilmente, pertanto lavoriamo con impegno per conciliare l’innovazione 
                        con un’adeguata tutela della privacy e della sicurezza dei nostri utenti. I princìpi sulla privacy guidano 
                        le nostre decisioni a ogni livello. In questo modo siamo in grado di proteggere gli utenti e dare loro gli 
                        strumenti di cui hanno bisogno, mentre perseguiamo la nostra mission di organizzare le informazioni mondiali.
                    </p>
                </div>
            </div>

    </main>

</body>
</html>