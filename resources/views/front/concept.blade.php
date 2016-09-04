@extends('layout.master')
@section('content')
    <div class="container">
        <div class="bgcwhite shadow m_bottom">
            <h2 class="title_cp">Comment ça marche ?</h2>
            <p class="text_cp">Crowdboostart est une plateforme de crowboosting spécialisée dans le soutien au spectacle vivant.</p>
        </div>
        <div class="w60 vtop">
            <div class="bgcwhite">
                <div class="bgblue">
                    <h3 class="title_concept">Ensemble on est plus fort</h3>
                    <p class="text_concept">Le crowboosting c'est le soutien par la foule.C'est donc un moyen,tous ensemble, de soutenir des porteurs de projet qui ont besoin d'un coup de pouce,qui ont besoin d'être "boosté".<br><br>La danse,le cirque,le théatre,un concert de musique, le mime, la magie, pour n'en citer que quelque-uns, tirent leur quintessence dans l'instant</p>
                </div>
                <div class="w90">
                    <div class="block_button">
                        <p class="cbooster"><a href="{{url('booster')}}">DEVENIR <br>BOOSTER</a></p>
                    </div><!--
                    --><div class="block_button">
                        <p class="ccreator"><a href="{{url('creator')}}">LANCER <br> UN PROJET</a></p>
                    </div>
                    <p class="concept">
                        <b>Cette plateforme proprose de vous permettre de créer des liens forts et bienveillants dès la création du projet pour cheminer ensemble </b><br><br>
                        Il y a divers manière de booster un projet ou un artiste que l'on aime :<br><br>
                        Tout d'abord en faisant partie de la comunauté du créateur de projet afin qu'il ne soit pas seul! En effet la création de spectacle est un parcourt semé d'embuche et il a besoin de se sentir soutenu.
                        <br><br>
                        Ensuite échanger avec le porteur de projet! Chaque porteur de projet va vous proposer sa manière de créer des liens ! Cela peut être en vous demandant votre avis sur un sujet précis, en faisant appel à vos compétences, ou en vous invitant sur un temps de rencontre.Et puis bien sûr, lorsque les porteurs de projet sont prêts, ils sont la possibilité de lancer une campagne de financement participatif afin d'obtenir un apport finacier complémentaire.
                        <br><br>
                        <b>Comment fonctionne crowdboostart ?</b><br>
                        Un porteur de projet créer une page dediée et vous invite à le rejoindre pour créer un comunauté de "boosteur"<br><br>
                        <b>Quels projets sont acceptés ?</b><br>
                        Tout les projets sont respectueux de notre chatre qui sont dédies au spectacle vivant (et qui vont donc, un fois créé, avoir lieux sur une scéne devant un public en direct)<br><br>
                        <b>Quelles sont les fonctionnalités de la page dédiée du porteur de projet :</b><br>
                        Une fois la page dédiée crée, le porteur va animer sa comunauté en lui donnant des nouvelles et en l'invitant à des moments d'échanges et de partages qui peuvent être virtuels ou réels. Lorsque son projet arrive à la phase de production il a la possibilité de démarrer une campagne  de financement participatif pour compléter son budget afin que les boosteurs qui le souhaitent puissent lui faire un don.
                        <br><br>
                        <b>Quel soutien peut apporter le boosteur ?</b><br>
                        Le boosteur peut interagir de plusieur smanières afin de soutenir le porteur de projet: il peut faire connître le projet à son entourage et pourquoi pas le mettre en relation avec des personnes clés.Il peut apporter ses compétences lors de la création du projet en donnant par exemple des conseils en réalisation de budget previsionnel, en création de scénographie, ou aussi l'aider à corriger son dossier de présentation ou le mettre en page (indispensable pour ensuite présenter le projet aux futurs partenaires).Le boosteur peut répondre aux besoins du porteur de projet sur des demandes précises, et il peut participer aux moments d'échanges.Il peut aussi faire un don lorsque le porteur de projet démarre une campaggne de financement participatif.
                    </p>
                </div>
            </div>
        </div><!--
        --><div class="w40 vtop">
            <div class="bgcwhite shadow">
                <div class="financement">
                    <h3 class="financement_title">LE FINANCEMENT</h3>
                    <ul class="list_aside border_none">
                        <li>
                            <p class="concept_financement">
                                <b>Quand le porteur de projet est-il prêt pour démarrer un campagne de financement participatif ?</b><br>
                                Un projet de spectacle se crée de manière très différente selon les porteurs de projet et selon leurs réalités.Afin que la demande de financement soit cohérente avec le développement du projet, nous demandons au porteur de projet d'avoir au moins une institution partenaire pour accéder à l'option "créer une campagne de financement participatif". En effet, le spectacle aujourd'hui se crée et se difuse en réseau (le réseau des scènes conventionnées, le réseau des xxx). Crowdboostart ne vient pas remplacer ces réseaux mais les compléter. Avoir au moins un institution partenaire c'est donc essentiel pour l'insertion professionelle du projet et pour la diffusion future de la création.
                            </p>
                        </li>
                        <li>
                            <p class="concept_financement">
                                <b>Quel est le rôle d'une institution partenaire ?</b><br>
                                Une institution partenaire peut-être un espace, une salle, un lieu dédié à la création ou pas, qui a une relation avec le porteur de projet. Cette relation peut se baser sur u naccueil en résidence, un apport fiancier, ou un soutien administratif. Chaque porteur de projet a une relation personelle avec son institution partenaire
                                <br><br>
                                L'institution partenaire s'engage aux côtés du porteur de projet à relayer la campagne de fiancement participatif et est pour le boosteur le garant que le projet est inscrit dans une relation institutionnelle
                            </p>
                        </li>
                        <li>
                            <p class="concept_financement">
                                <b>Et si le projet n'a pas d'institution partenaire ?</b><br>
                                Et bien les boosteurs sont aussi là pour ça ! Ils peuvent se mobiliser pour aider aider le porteur de projet à en trouver une! Cela peut être un petit salle de concert, une maison de quartier, une grande scène ... A chaque projet son institution.Le boosteur peut, si le porteur de projet en a besoin, devenir son abassadeur !
                            </p>
                        </li>
                        <li>
                            <p class="concept_financement">
                                <b>Quel soutien apporte Crowdboostart ?</b><br>
                                En plus de vous mettre en relation, Crowdboostart met des petites formations en ligne, accessibles à tous, afin d'aider les porteurs de projet à se developper. De plus une option payante de suivi personnalisé en ligne est à sa disposition. Des professionnels expérimentés cet formés peuvent l'aider à repondre à ses demandes
                            </p>
                        </li>
                        <li>
                            <p class="concept_financement">
                                <b>Quel est la différence avec une plateforme de crowfunding ?</b><br>
                                Le boosteur n'est pas seulement un mécène.Il interagit, soutient, échange avec le porteur de projet. De plus il n'existe pas l'obligation d'atteindre 100% de son objectif initial pour qu'un projet soit dit "fiancé". En effet dans le spectacle vivant, tout centime compte et cos dons sont donc versés dès lors que la campagne est terminée.
                            </p>
                        </li>
                        <li>
                            <p class="concept_financement">
                                <b>Comment se rémunère Crowdboostart</b><br>
                                Crowdboostart se rémunère sur la vente du suivi personalisé en ligne d'une part, et d'autre en prélèvant une commission sur les dons de 5% + 3% de frais de transaction bancaires (soit 8% TTC)
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection