<?php

namespace App\DataFixtures;

use App\Entity\Card;
use App\Entity\Choice;
use App\Entity\Consequence;
use App\Entity\Game;
use App\Entity\StepCard;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // cards
        $data = [
            'Bienvenue' => [
                [
                        'context' => 'Vous incarnez le programme spatial américain. Votre mission est de dépasser l’URSS et faire le premier pas sur la Lune. Bonne chance !"',
                        'choices' => [
                            [
                                'label' => 'Allez c\'est parti',
                                'money' => 0,
                                'opinion' => 0,
                                'search' => 0,
                            ],
                            [
                                'label' => 'Génial, écrasons les communistes',
                                'money' => 0,
                                'opinion' => 0,
                                'search' => 0,
                            ]
                        ],
                ]
            ],
            'Économie' => [
                [
                    'context' => 'La NASA vient d’être créée, l’État investit des milions dans la course à la conquête spatiale.',
                    'choices' => [
                        [
                            'label' => 'Vive la mère patrie',
                            'money' => 20,
                            'opinion' => 0,
                            'search' => 0,
                        ],
                        [
                            'label' => 'Direction la Lune',
                            'money' => 20,
                            'opinion' => 0,
                            'search' => 0,
                        ]
                    ]
                ],
                [
                    'context' => 'Le bilan est tombé, votre programme dispose d\'un bonus économique ce trimestre.',
                    'choices' => [
                        [
                            'label' => 'Soutenir vos scientifiques',
                            'money' => 30,
                            'opinion' => -20,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Profiter de cette occasion pour passer à la radio',
                            'money' => 30,
                            'opinion' => 20,
                            'search' => -20,
                        ]
                    ]
                ],
                [
                    'context' => 'Suite aux bons résultats des mois précédents, une avance vous est faite.',
                    'choices' => [
                        [
                            'label' => 'Donner un petit coup de pouce à vos chercheurs, ils l\'ont bien mérités',
                            'money' => 30,
                            'opinion' => -20,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Profiter de cette occasion et contacter des journalistes pour écrire un article dans la presse',
                            'money' => 30,
                            'opinion' => 20,
                            'search' => -20,
                        ]
                    ]
                ],
                [
                    'context' => 'Un chercheur au fort accent d\'europe de l\'est vous propose d\'améliorer votre carburant. Prenez-vous le risque ?',
                    'choices' => [
                        [
                            'label' => 'Lui faire confiance et investir',
                            'money' => -30,
                            'opinion' => 0,
                            'search' => 0,
                            'consequence' => [
                                'context' => 'Vous le payez',
                                'success' => [
                                    'context' => 'C\'est un honnête chercheur, votre investissement est remboursé et la recherche avance',
                                    'money' => 30,
                                    'opinion' => 10,
                                    'search' => 30,
                                ],
                                'failure' => [
                                    'context' => 'C\'est un espion de l\'URSS qui vous a arnaqué',
                                    'money' => 0,
                                    'opinion' => -10,
                                    'search' => 0,
                                ]
                            ]
                        ],
                        [
                            'label' => 'A bas les communistes',
                            'money' => 0,
                            'opinion' => 0,
                            'search' => 0,
                        ]
                    ]
                ],
            ],
            'Communication' => [
                [
                    'context' => 'Des doutes dans l\'opinion public quant à vos compétences commencent à émerger. Vos recherches sont de plus en plus questionnées et contestées.',
                    'choices' => [
                        [
                            'label' => 'Lancer une campagne de communication de grande ampleur',
                            'money' => -20,
                            'opinion' => 20,
                            'search' => -10,
                        ],
                        [
                            'label' => 'Pas d\'argent à perdre dans la communication, investir dans la recherche',
                            'money' => -10,
                            'opinion' => -20,
                            'search' => +20,
                        ]
                    ]
                ],
                [
                    'context' => 'Intrigués par vos recherches et découvertes, plusieurs journalistes vous contactent pour écrire un article sur la conquête spatiale.',
                    'choices' => [
                        [
                            'label' => 'C\'est avec plaisir que vous répondez à leurs questions',
                            'money' => -20,
                            'opinion' => 20,
                            'search' => -10,
                        ],
                        [
                            'label' => 'Ils sont fatiguants, vous n\'avez ni confiance ni de temps à perdre',
                            'money' => -10,
                            'opinion' => -20,
                            'search' => +20,
                        ]
                    ]
                ],
                [
                    'context' => 'Un réalisateur veut utiliser vos locaux pour filmer quelques scènes de sa sitcom. Cela risque de déranger vos scientifiques mais il vous assure que ce serait bon pour votre image.',
                    'choices' => [
                        [
                            'label' => 'Privilégier le confort de vos chercheurs, une sitcom ça marcherait jamais de toute façon',
                            'money' => 30,
                            'opinion' => -20,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Vous tentez le coup, vous signez de suite pour 3 saisons',
                            'money' => 30,
                            'opinion' => 20,
                            'search' => -20,
                        ]
                    ]
                ],
                [
                    'context' => 'Le département de communication vous propose d\'organiser une visite publique des locaux pour créer l\'évènement.',
                    'choices' => [
                        [
                            'label' => 'Quelle idée de merde, ça perturberait énormémént le rythme des employés',
                            'money' => 30,
                            'opinion' => -20,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Vous félicitez la personne qui a eu cette merveilleuse idée et vous organisez ça au plus vite',
                            'money' => 30,
                            'opinion' => 20,
                            'search' => -20,
                        ]
                    ]
                ],
                [
                    'context' => 'Le département de communication trouve que vous délaissez ce secteur et vous informe sur l\'importance de votre image.',
                    'choices' => [
                        [
                            'label' => 'Ils ont raison, les écouter',
                            'money' => -20,
                            'opinion' => 20,
                            'search' => 10,
                        ],
                        [
                            'label' => 'Ils ne font pas avancer la recherche, continuer de les ignorer',
                            'money' => 20,
                            'opinion' => -10,
                            'search' => 10,
                        ]
                    ]
                ],
                [
                    'context' => 'Le département des finances vous alerte sur vos dépenses. Cependant, le département de communication vous suggère de tenir informer le peuple des avancées.',
                    'choices' => [
                        [
                            'label' => 'Ecouter le département de communication',
                            'money' => -20,
                            'opinion' => 20,
                            'search' => 10,
                        ],
                        [
                            'label' => 'Ecouter le département des finances',
                            'money' => 20,
                            'opinion' => -10,
                            'search' => 10,
                        ]
                    ]
                ],
                [
                    'context' => 'Une enveloppe de l\'Etat est arrivée, un de vos directeurs vous suggère de faire une tombola géante dans toute la région.',
                    'choices' => [
                        [
                            'label' => 'Allons-y ! En espérant gagner un lave-linge',
                            'money' => -20,
                            'opinion' => 20,
                            'search' => 10,
                        ],
                        [
                            'label' => 'Garder cet argent pour plus tard',
                            'money' => 20,
                            'opinion' => -10,
                            'search' => 10,
                        ]
                    ]
                ],
                [
                    'context' => 'Un dirigeant d\'une grande chaine vous contacte pour pour interviewer un de vos astronautes dans un talk-show.',
                    'choices' => [
                        [
                            'label' => 'Ces émissions sont ridicules',
                            'money' => -10,
                            'opinion' => -20,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Envoyer votre meilleur astronaute faire le show ',
                            'money' => 0,
                            'opinion' => 20,
                            'search' => 0,
                        ]
                    ]
                ],
                [
                    'context' => 'Une grande radio vous promet d\'améliorer l\'image de la recherche spatiale auprès de la population en invitant un astronaute à faire le show.',
                    'choices' => [
                        [
                            'label' => 'Hors de question, la recherche spatiale est un secteur sérieux, pas besoin de ces pitreries',
                            'money' => -10,
                            'opinion' => -20,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Bien sûr ! Cela permettra de démystifier nos recherches',
                            'money' => 0,
                            'opinion' => 20,
                            'search' => 0,
                        ]
                    ]
                ],
                [
                    'context' => 'Le design des nouvelles combinaisons spatiales est bien avancé.',
                    'choices' => [
                        [
                            'label' => 'Ce n\'est pas important, le design va probablement encore évoluer',
                            'money' => -10,
                            'opinion' => -20,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Faire monter les attentes et dévoiler la combinaison',
                            'money' => 0,
                            'opinion' => 20,
                            'search' => 0,
                        ]
                    ]
                ],
                [
                    'context' => 'Un designer vous soumet l\'idée qu\'il a concernant un nouveau logo pour la NASA',
                    'choices' => [
                        [
                            'label' => 'C\'est vrai qu\'il mériterait un petit coup de neuf',
                            'money' => 20,
                            'opinion' => 20,
                            'search' => -30,
                        ],
                        [
                            'label' => 'Ce n\'est pas le moment de changer notre identité visuelle',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => 20,
                        ]
                    ]
                ],
                [
                    'context' => 'Des chercheurs ont réussi à recréer l\'odeur de l\'espace (un mélange de steak grillé, de framboise et de rhum). Il serait possible d\'en créer un parfum et de le commercialiser.',
                    'choices' => [
                        [
                            'label' => 'Mobiliser une équipe pour produire ce parfum à grande échelle',
                            'money' => 20,
                            'opinion' => 20,
                            'search' => -30,
                        ],
                        [
                            'label' => 'Ne pas dépenser inutilement de l\'argent ',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => 20,
                        ]
                    ]
                ],
                [
                    'context' => 'Un producteur vous approche pour vous proposer de documenter la conquête spatiale et de diffuser le rendu dans les écoles.',
                    'choices' => [
                        [
                            'label' => 'Pourquoi pas, rendons les jeunes américains fiers, faudra changer deux trois trucs au passage...',
                            'money' => 20,
                            'opinion' => 20,
                            'search' => -30,
                        ],
                        [
                            'label' => 'C\'est du temps perdu les scientifiques n\'ont pas que ça à faire',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => 20,
                        ]
                    ]
                ],
            ],
            'Interne' => [
                [
                    'context' => 'Un curieux vaisseau a atterri dans le désert du Nevada, proche d\'une base secrète (quel hasard). L\'étudier pourrait être utile.',
                    'choices' => [
                        [
                            'label' => 'Etre transparent, parler de cette découverte au public et ne pas y toucher',
                            'money' => -20,
                            'opinion' => 20,
                            'search' => -10,
                        ],
                        [
                            'label' => 'Etudier le vaisseau en essayant d\'être discret',
                            'money' => -10,
                            'opinion' => -20,
                            'search' => +20,
                        ]
                    ]
                ],
                [
                    'context' => 'De nouveaux départements ouvrent et doivent être meublés. Il vous est remis le choix de comment meubler ces nouveaux environnements.',
                    'choices' => [
                        [
                            'label' => 'Votre conjoint(e) parle de faire des meubles à partir d\'objets recyclés, vous trouvez l\'idée amusante et proposez d\'appliquer ça pour les bureaux',
                            'money' => -20,
                            'opinion' => 20,
                            'search' => -10,
                        ],
                        [
                            'label' => 'Le plastique c\'est l\'avenir, tout acheter en plastique !',
                            'money' => -10,
                            'opinion' => -20,
                            'search' => +20,
                        ]
                    ]
                ],
                [
                    'context' => 'Vous ouvrez le nouvel amphithéatre mais vous ne savez pas qui faire venir pour l\'inauguration publique...',
                    'choices' => [
                        [
                            'label' => 'Chuck Berry pourrait enflammer l\'amphi\' !',
                            'money' => 20,
                            'opinion' => 20,
                            'search' => -30,
                        ],
                        [
                            'label' => 'Proposer à des chercheurs de faire des conférences',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => 20,
                        ]
                    ]
                ],
                [
                    'context' => 'Une centrifugeuse tombe en panne.',
                    'choices' => [
                        [
                            'label' => 'Mettre rapidement en oeuvre les moyens pour la réparer',
                            'money' => -30,
                            'opinion' => 20,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Les réparations sont excessivement chères, s\'en occuper plus tard',
                            'money' => +30,
                            'opinion' => -30,
                            'search' => -30,
                        ]
                    ]
                ],
                [
                    'context' => 'Une rumeur circule disant que la Chine effectue des lancements de fusées dans l\'Océan Pacifique.',
                    'choices' => [
                        [
                            'label' => 'Il ne faut pas se faire distancer, lancer des tests à tire-larigot',
                            'money' => -30,
                            'opinion' => 20,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Ne pas réagir à ces rumeurs, ce ne sont que des rumeurs... pas vrai ?',
                            'money' => +30,
                            'opinion' => -30,
                            'search' => -30,
                        ]
                    ]
                ],
                [
                    'context' => 'Un des astronaute tombe malade avant un lancement.',
                    'choices' => [
                        [
                            'label' => 'Tenter de le soigner dans la panique',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => 10,
                        ],
                        [
                            'label' => 'Chercher à vite le remplacer',
                            'money' => 10,
                            'opinion' => -20,
                            'search' => -20,
                        ]
                    ]
                ],
                [
                    'context' => 'Vos astronautes semblent ne pas être totalement sereins quant à leurs capacités.',
                    'choices' => [
                        [
                            'label' => 'Leur proposer de nouveaux entraînements',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => 10,
                        ],
                        [
                            'label' => 'Les rassurer avec une tape sur l\'épaule',
                            'money' => 10,
                            'opinion' => -20,
                            'search' => -20,
                        ]
                    ]
                ],
                [
                    'context' => 'Un individu a réussi à s\'introduire dans vos bureaux et a volé l\'ordinateur d\'un chercheur. Il vous demande une rançon.',
                    'choices' => [
                        [
                            'label' => 'Le payer et récupérer les informations',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => 10,
                        ],
                        [
                            'label' => 'Le laisser avec l\'ordinateur, tant pis pour les informations',
                            'money' => 10,
                            'opinion' => -20,
                            'search' => -20,
                        ]
                    ]
                ],
                [
                    'context' => 'Vos chercheurs proposent de mettre en place une fête chaque fin de semaine pour encourager le travail de chacun au sein de la base. #weekend #party #afterhour',
                    'choices' => [
                        [
                            'label' => 'Accepter, cela consoliderait l\'esprit d\'équipe de chacun',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => 10,
                        ],
                        [
                            'label' => 'Bof, il n\'y a pas de petites économies',
                            'money' => 10,
                            'opinion' => -20,
                            'search' => -20,
                        ]
                    ]
                ],
            ],
            'Recherche' => [
                [
                    'context' => 'Les recherches concernant la découverte d\'une nouvelle technologie avancent bien, vos chercheurs vous parlent d\'une piste prometteuse.',
                    'choices' => [
                        [
                            'label' => 'Prometteuse ? Sans aucune garantie, décider de les ignorer',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => -20,
                        ],
                        [
                            'label' => 'Vous connaissez vos chercheurs, ils sont compétents et vous leur faites confiance',
                            'money' => -30,
                            'opinion' => -20,
                            'search' => 20,
                        ]
                    ]
                ],
                [
                    'context' => 'Vous apprenez que la France mène également des recherches sur l\'espace. Un travail commun avec eux pourrait vous êtes bénéfique.',
                    'choices' => [
                        [
                            'label' => 'Ne pas fricoter avec les mangeurs de grenouilles',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => -20,
                        ],
                        [
                            'label' => 'Envoyer une équipe collaborer avec les Français',
                            'money' => -30,
                            'opinion' => -20,
                            'search' => 20,
                        ]
                    ]
                ],
                [
                    'context' => 'Vos chercheurs stagnent et ont besoin de beaucoup plus de fonds pour avancer.',
                    'choices' => [
                        [
                            'label' => 'Sans garantie de résultats, choisir de les ignorer',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => -20,
                        ],
                        [
                            'label' => 'Avoir une confiance aveugle quelque soit le résultat',
                            'money' => -30,
                            'opinion' => -20,
                            'search' => 20,
                        ]
                    ]
                ],
                [
                    'context' => 'Un chercheur vient vous partager ses inquiétudes quant au manque d\'effectif dans ce secteur.',
                    'choices' => [
                        [
                            'label' => 'Recruter et former un nouveau groupe de rechercheurs sur de l\'ingénérie',
                            'money' => -10,
                            'opinion' => 0,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Ils s\'en sortent déjà très bien',
                            'money' => 10,
                            'opinion' => -20,
                            'search' => -10,
                        ]
                    ]
                ],
                [
                    'context' => 'Un enfant au discours sibyllin vient dans vos bureaux à la recherche d\'un travail. Il prétend être grandement diplomé et désire vivre le "American Dream".',
                    'choices' => [
                        [
                            'label' => 'Recruter ce p\'tit gars, il peut pas être méchant',
                            'money' => -10,
                            'opinion' => 0,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Prudence est mère de surêté,  lui donner un coloriage et le faire partir',
                            'money' => 10,
                            'opinion' => -20,
                            'search' => -10,
                        ]
                    ]
                ],
                [
                    'context' => 'Vos ingénieurs sont sur le point de découvrir un nouveau moyen de quitter l\'atmosphère.',
                    'choices' => [
                        [
                            'label' => 'Financer la recherche',
                            'money' => -20,
                            'opinion' => 0,
                            'search' => 0,
                            'consequence' => [
                                'context' => 'Vous donnez des moyens à vos chercheurs et encouragez leurs recherches. Que se passe-t-il ?',
                                'success' => [
                                    'context' => 'Recherche fructueuse',
                                    'money' => 0,
                                    'opinion' => 10,
                                    'search' => 30,
                                ],
                                'failure' => [
                                    'context' => 'Rien de probant',
                                    'money' => 10,
                                    'opinion' => 0,
                                    'search' => 10,
                                ]
                            ]
                        ],
                        [
                            'label' => 'Ignorer',
                            'money' => 0,
                            'opinion' => 0,
                            'search' => 0,
                        ]
                    ]
                ],
            ],
            'Politique' => [
                [
                    'context' => 'Avec la guerre du Vietnam, les Etats-Unis ont pu dérober différents matériaux et ressources très rares en Occident.',
                    'choices' => [
                        [
                            'label' => 'Pas question d\'y toucher ! Faire un discours pronant la liberté de tous les pays, égalités, blabla...',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => -20,
                        ],
                        [
                            'label' => 'Quelle aubaine ! Tirer profit de ces pillages tout en connaissant les répercussions sur votre image',
                            'money' => -30,
                            'opinion' => -20,
                            'search' => 20,
                        ]
                    ]
                ],
                [
                    'context' => 'Suite à la découverte d\'un nouveau carburant moins cher mais beaucoup plus polluant, vous hésitez.',
                    'choices' => [
                        [
                            'label' => 'Soigner sa conscience écologique',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => -20,
                        ],
                        [
                            'label' => 'Au diable les écologistes du 20eme siècle',
                            'money' => 20,
                            'opinion' => -30,
                            'search' => 20,
                        ]
                    ]
                ],
                [
                    'context' => 'Vos chercheurs découvrent une nouvelle méthode de production de pièces bien plus rapide mais à fort impact écologique.',
                    'choices' => [
                        [
                            'label' => 'Refuser catégoriquement d\'utiliser cette méthode',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => -20,
                        ],
                        [
                            'label' => 'Quelle merveilleuse découverte',
                            'money' => 20,
                            'opinion' => -30,
                            'search' => 20,
                        ]
                    ]
                ],
                [
                    'context' => 'Pour faire des économies, la délocalisation de certains moyens de production est envisagée.',
                    'choices' => [
                        [
                            'label' => 'Bof, ne pas être très enthousiaste, Ce n\'est pas une bonne décision à long terme',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => -20,
                        ],
                        [
                            'label' => 'Evidemment, pourquoi n\'y avons nous pas pensé avant !',
                            'money' => 20,
                            'opinion' => -30,
                            'search' => 20,
                        ]
                    ]
                ],
                [
                    'context' => 'L\'armée vous demande de lui fournir des scientifiques pour l\'aider lors de ses tests nucléaires.',
                    'choices' => [
                        [
                            'label' => 'Les recherches restent strictement spatiales, ce serait insensé de se lier à l\'armée',
                            'money' => -10,
                            'opinion' => 10,
                            'search' => -20,
                        ],
                        [
                            'label' => 'Bien évidemment, la patrie est une grande famille, c\'est normal de les aider',
                            'money' => 20,
                            'opinion' => -30,
                            'search' => 20,
                        ]
                    ]
                ],
                [
                    'context' => 'Un groupe de chercheurs pouvant s\'apparenter à un syndicat vous transmet leur mécontentement face à leur "trop faible salaire".',
                    'choices' => [
                        [
                            'label' => 'Céder et augmenter la part dédié à la recherche',
                            'money' => -10,
                            'opinion' => 0,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Et alors, que vont-ils faire ?',
                            'money' => 10,
                            'opinion' => -20,
                            'search' => -10,
                        ]
                    ]
                ],
                [
                    'context' => 'Vos employés demandent de meilleures conditions de travail : un meilleur salaire et de meilleurs horaires.',
                    'choices' => [
                        [
                            'label' => 'Accepter leurs demandes et en profiter pour améliorer la communication interne',
                            'money' => -10,
                            'opinion' => 0,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Ca commence à faire beaucoup, ça va coûter trop cher, les ignorer',
                            'money' => 10,
                            'opinion' => -20,
                            'search' => -10,
                        ]
                    ]
                ],
                [
                    'context' => 'Un des dirigeants du pôle recherche est accusé d\'harcelement sexuel. Les bruits commencent à se propager.',
                    'choices' => [
                        [
                            'label' => 'C\'est inadmissible, gérer cette situation au plus vite',
                            'money' => -30,
                            'opinion' => 20,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Le couvrir et laisser couler cette histoire, pas besoin de dépenser là dedans',
                            'money' => +30,
                            'opinion' => -30,
                            'search' => -30,
                        ]
                    ]
                ],
                [
                    'context' => 'Un article extrêmement virulent contre la conquête spatiale vient d\'être publié. Tout le monde en parle.',
                    'choices' => [
                        [
                            'label' => 'Mettre tous les moyens en oeuvre pour contrebalancer l\'opinion',
                            'money' => -30,
                            'opinion' => 20,
                            'search' => 20,
                        ],
                        [
                            'label' => 'Subir les conséquences, cela coûterai trop cher',
                            'money' => +30,
                            'opinion' => -30,
                            'search' => -30,
                        ]
                    ]
                ],
            ],
            'Espionnage' => [
                [
                    'context' => 'Se lancer dans un projet d\'espionnage industriel pour voler des technologies à l\'URSS ?',
                    'choices' => [
                        [
                            'label' => 'Prendre le risque de lancer le projet d’espionnage',
                            'money' => -20,
                            'opinion' => 0,
                            'search' => 0,
                            'consequence' => [
                                'context' => 'Vous envoyez un de vos ingénieurs en URSS pour se faire recruter. Que se passe-t-il ?',
                                'success' => [
                                    'context' => 'Pas répéré',
                                    'money' => 20,
                                    'opinion' => 0,
                                    'search' => 30,
                                ],
                                'failure' => [
                                    'context' => 'Répéré par l\'URSS',
                                    'money' => 0,
                                    'opinion' => -30,
                                    'search' => 0,
                                ]
                            ]
                        ],
                        [
                            'label' => 'Se concentrer sur les recherches internes',
                            'money' => 0,
                            'opinion' => 0,
                            'search' => 0,
                        ]
                    ]
                ],
                [
                    'context' => 'Vous recrutez un ancien chercheur ayant fuit l\'URSS en tant que réfugié politique.',
                    'choices' => [
                        [
                            'label' => 'En profiter pour communiquer et vanter les mérites des Etats-Unis',
                            'money' => -20,
                            'opinion' => 20,
                            'search' => 10,
                        ],
                        [
                            'label' => 'Lui demander des informations quant à son travail en URSS',
                            'money' => 20,
                            'opinion' => -10,
                            'search' => 10,
                        ]
                    ]
                ],
            ],
        ];
        foreach($data as $key => $value) {
            $categorie = new Category();
            $categorie->setName($key);
            foreach($value as $cardData) {
                $card = new Card();
                $choice1 = new Choice();
                $choice2 = new Choice();
                $consequence = new Consequence();

                $card->setCategory($categorie);
                $card->setContext($cardData['context']);

                $choice1->setLabel($cardData['choices'][0]['label']);
                $choice1->setMoney($cardData['choices'][0]['money']);
                $choice1->setOpinion($cardData['choices'][0]['opinion']);
                $choice1->setSearch($cardData['choices'][0]['search']);
                if (isset($cardData['choices'][0]['consequence'])) {
                    $cons = $cardData['choices'][0]['consequence'];

                    $consequence->setLabel('iojhfeiroghreiogjreiogjreogjreiozgjretopzgret');
                    $consequence->setButtonTextFail('oui');
                    $consequence->setButtonTextSuccess('rrr');
                    $consequence->setImageFail('oi');
                    $consequence->setImageSuccess('fg');

                    $consequence->setContext($cons['context']);
                    $consequence->setContextFail($cons['failure']['context']);
                    $consequence->setMoneyFail($cons['failure']['money']);
                    $consequence->setOpinionFail($cons['failure']['opinion']);
                    $consequence->setSearchFail($cons['failure']['search']);
                    $consequence->setContextSuccess($cons['success']['context']);
                    $consequence->setMoneySuccess($cons['success']['money']);
                    $consequence->setOpinionSuccess($cons['success']['opinion']);
                    $consequence->setSearchSuccess($cons['success']['search']);
                    $choice1->setConsequence($consequence);
                    $manager->persist($consequence);
                }
                $choice1->setCard($card);

                $choice2->setLabel($cardData['choices'][1]['label']);
                $choice2->setMoney($cardData['choices'][1]['money']);
                $choice2->setOpinion($cardData['choices'][1]['opinion']);
                $choice2->setSearch($cardData['choices'][1]['search']);
                if (isset($cardData['choices'][1]['consequence'])) {
                    $cons = $cardData['choices'][1]['consequence'];

                    $consequence->setLabel('iojhfeiroghreiogjreiogjreogjreiozgjretopzgret');
                    $consequence->setButtonTextFail('oui');
                    $consequence->setButtonTextSuccess('rrr');
                    $consequence->setImageFail('oi');
                    $consequence->setImageSuccess('fg');

                    $consequence->setContext($cons['context']);
                    $consequence->setContextFail($cons['failure']['context']);
                    $consequence->setMoneyFail($cons['failure']['money']);
                    $consequence->setOpinionFail($cons['failure']['opinion']);
                    $consequence->setSearchFail($cons['failure']['search']);
                    $consequence->setContextSuccess($cons['success']['context']);
                    $consequence->setMoneySuccess($cons['success']['money']);
                    $consequence->setOpinionSuccess($cons['success']['opinion']);
                    $consequence->setSearchSuccess($cons['success']['search']);
                    $choice2->setConsequence($consequence);
                    $manager->persist($consequence);
                }
                $choice2->setCard($card);

                $manager->persist($choice1);
                $manager->persist($choice2);
                $manager->persist($card);
            }
            $manager->persist($categorie);
        }

        $manager->flush();

        // step cards
        $data = [
            [
                'stepSeason' => 'Printemps 1961',
                'label' => 'C\'est un grand jour !',
                'name' => 'Vous êtes sur le point d\'envoyer le premier homme dans l\'espace.',
                'win' => [
                    'label' => 'La mission est un succès !',
                    'message' => 'Vous avez triomphé ! Les États-Unis sont les premiers à envoyer un humain dans l’espace. Vous affirmez votre supériorité face à l’URSS.',
                    'picture' => 'newspaper_usa.png',
                    'money' => 5,
                    'opinion' => 5,
                    'search' => 5,
                ],
                'loose' => [
                    'label' => 'Vous échouez et l’URSS vous devance',
                    'message' => 'L’URSS vous domine, Youri Gargarine devient le premier homme envoyé dans l’espace lors de la mission Vostok 1.',
                    'picture' => 'newspaper_urss.png',
                    'money' => -5,
                    'opinion' => -5,
                    'search' => -5,
                ],
                'game' => [
                    'title' => 'Le premier vol habité par un être humain',
                    'information' => 'Guidez votre vaisseau à travers les astéroïdes, quittez l’atmosphère et soyez le premier à envoyer un homme dans l’espace.',
                    'rules' => 'Glissez votre doigt de gauche à droite pour contrôler votre vaisseau.',
                ]
            ],
            [
                'stepSeason' => 'Printemps 1965',
                'label' => 'C\'est un grand jour !',
                'name' => 'Evenement 2',
                'win' => [
                    'label' => 'La mission est un succès !',
                    'message' => 'Félicitations événement 2 réussi !',
                    'picture' => 'newspaper_usa.png',
                    'money' => 10,
                    'opinion' => 10,
                    'search' => 10,
                ],
                'loose' => [
                    'label' => 'Vous échouez et l’URSS vous devance',
                    'message' => 'Aie, événement 2 raté',
                    'picture' => 'newspaper_urss.png',
                    'money' => -10,
                    'opinion' => -10,
                    'search' => -10,
                ]
            ],
            [
                'stepSeason' => 'Été 1969',
                'label' => 'C\'est un grand jour !',
                'name' => 'Premier pas sur la lune',
                'win' => [
                    'label' => 'La mission est un succès !',
                    'message' => 'Gagné ! Premier pas posé avant la l\'URSS, belle performance !',
                    'picture' => 'newspaper_usa.png',
                    'money' => 0,
                    'opinion' => 0,
                    'search' => 0,
                ],
                'loose' => [
                    'label' => 'Vous échouez et l’URSS vous devance',
                    'message' => 'Perdu ! L\'URSS est parvenu à faire le premier pas sur la lune avant vous.',
                    'picture' => 'newspaper_urss.png',
                    'money' => 0,
                    'opinion' => 0,
                    'search' => 0,
                ]
            ],
        ];

        foreach ($data as $stepCard) {
            $sCard = new StepCard();

            $sCard->setStepSeason($stepCard['stepSeason']);
            $sCard->setLabel($stepCard['label']);
            $sCard->setName($stepCard['name']);

            $sCard->setLabelWin($stepCard['win']['label']);
            $sCard->setMessageWin($stepCard['win']['message']);
            $sCard->setPictureWin($stepCard['win']['picture']);
            $sCard->setMoneyWin($stepCard['win']['money']);
            $sCard->setOpinionWin($stepCard['win']['opinion']);
            $sCard->setSearchWin($stepCard['win']['search']);

            $sCard->setLabelLoose($stepCard['loose']['label']);
            $sCard->setMessageLoose($stepCard['loose']['message']);
            $sCard->setPictureLoose($stepCard['loose']['picture']);
            $sCard->setMoneyLoose($stepCard['loose']['money']);
            $sCard->setOpinionLoose($stepCard['loose']['opinion']);
            $sCard->setSearchLoose($stepCard['loose']['search']);

            if (isset($stepCard['game'])) {
                $game = new Game();

                $game->setTitle($stepCard['game']['title']);
                $game->setInformation($stepCard['game']['information']);
                $game->setRules($stepCard['game']['rules']);

                $manager->persist($game);
                $sCard->setGame($game);
            }

            $manager->persist($sCard);
        }

        $manager->flush();
    }
}
