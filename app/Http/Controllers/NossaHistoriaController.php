<?php

namespace App\Http\Controllers;

class NossaHistoriaController extends Controller
{
    public function index()
    {
        $posts = [];

        $title = 'Nossa História';

        $posts[] = (object)[
            'title' => 'Idealizadora',
            'subtitle' => 'Fernanda Nadal',
            'content' => '<p style="font-size: 13px" align="justify">Fernanda Nadal, a mente por trás do inspirador projeto A Arte de Bordar, é designer de bordados em pedraria, e atua como professora, empresária, mentora e escritora na área da moda.<br><br>Sua paixão pelo bordado começou aos 12 anos, quando aprendeu o ponto cruz com sua tia, o que marcou o início de uma jornada notável. Possui uma sólida formação, que inclui pós-graduação em Moda e Cultura pela UEL, MBA em Negócios de Moda pela USP, e treinamentos internacionais na École Lesage, em Paris sob a tutela de renomados mestres como Marie Rucki do Studio Berçot Paris.<br><br>Teve seu próprio ateliê durante 20 anos (2002-2022), onde pode criar bordados e executar projetos exclusivos a clientes e empresas.<br><br>Em 2021, Fernanda foi destaque na Exposição “A Arte da Moda” ao lado de ícones como Dior e Chanel no Farol Santander, em São Paulo, reconhecimento merecido por sua expertise.<br><br>Em 2023, lançou seu livro inaugural, "A Arte de Bordar", com apoio da Lei Federal de Incentivo à Cultura, consolidando sua influência no cenário artístico.<br><br>Em 2024, criou o Clube Criativo com bordados em pedrarias, onde tem ajudado mulheres a desbloquear sua criatividade no bordado, através de conteúdos exclusivos disponibilizados ao longo do ano. A criação do Clube Criativo com bordados em pedrarias evidencia sua inovação, sendo o primeiro clube de assinatura do tipo na América Latina.<br><br>Através de cursos presenciais e online, ela já impactou mais de 3.500 alunas em 9 países, desbloqueando a criatividade de mulheres ao redor do mundo.<br><br>Além de tudo isso, Fernanda desempenha um papel crucial como mentora para empresas que buscam agregar valor artesanal às suas marcas, conectando indústrias e pessoas com os talentos das bordadeiras.<br></p>',
            'img_url' => '/img/q_Fernanda-Nadal-bordadeiras-do-Brasil-22-04-24-105458-1468.jpg',
            'social_medias' => (object)[
                'facebook_url' => 'https://www.facebook.com/fernanda.nadal',
                'instagram_url' => 'https://www.instagram.com/fernandanadal/',
                'youtube_url' => 'https://www.youtube.com/channel/UC9',
                'portifolio_url' => 'https://www.bordadeirasdobrasil.com.br/',
                'email_url' => 'teste@gmail.com'
            ],
        ];

        $posts[] = (object)[
            'title' => 'O Projeto A Arte de Bordar pelo Brasil',
            'subtitle' => '',
            'content' => '<p align="justify" style="font-size: 13px">A moda é o segundo setor que mais emprega no mundo, além de ser o segmento que mais vende no e-commerce mundial. O mercado do artesanato na moda segue tomando força, uma vez que cada vez mais as pessoas valorizam produtos únicos e feitos à mão. Contudo, há uma dificuldade significativa no encontro de mão de obra qualificada, uma vez que o trabalho exige maior habilidade, técnica, cuidado e tempo. O artesanato, que também é uma manifestação cultural, se une às artes visuais no trabalho desenvolvido pela Fernanda, não apenas através do seu conhecimento, mas nos modos de fazer e criar.<br><br>Em 2019, Fernanda Nadal começou o que hoje é o seu principal propósito na profissão: ensinar mulheres a arte de bordar, objetivando que elas possam ser inseridas no mercado de trabalho, e com isso, possibilitando a elas, a oportunidade de geração de renda. A artista decidiu transmitir seu conhecimento com o propósito de ajudar a empoderar mulheres, fortalecendo-as através de um reencontro com técnicas ancestrais de artes e bordado.<br><br>A primeira turma formada pelo projeto (2019), em Ponta Grossa/PR, sua cidade natal, aconteceu com investimento financeiro da própria Fernanda, somado a apoios de colegas e amigos, quando formou mais de 30 mulheres. No final do ano seguinte, Fernanda decidiu, então, submeter projetos através da Lei Federal de Incentivo à Cultura (Lei 8.313/91), como forma de beneficiar ainda mais mulheres.<br><br>Através dos cursos de bordado em pedrarias para mulheres do projeto A Arte de Bordar, Fernanda ensina pontos de bordado com pedrarias durante uma semana. Além do projeto fornecer todo o material necessário para a realização das atividades (kit com pedrarias, fios, agulhas, tecido, etc), ela engloba palestras pertinentes à entrada e aos desafios no mercado de trabalho com o bordado, bem como sobre a sustentabilidade na área e como ela pode ser utilizada para geração de renda e redução no impacto ambiental. No final da formação, as alunas realizam uma mostra de encerramento onde recebem certificados e exibem ao público as obras criadas.<br><br>Em 2022, o projeto recebeu o primeiro patrocínio, e desde então vem ano a ano recebendo apoio de empresas patrocinadoras. A primeira edição patrocinada, o projeto de nome Oficina de Artes e Bordado, formou 130 mulheres, através do patrocínio da Braskem, na cidade de Montenegro/RS. Em 2023, o projeto A Arte de Bordar capacitou outras 93 mulheres, em João Monlevade/MG, com patrocínio da Fundação ArcelorMittal, que viabilizou também a escrita do primeiro livro da Fernanda, “A Arte de Bordar”.<br><br>Ainda em 2023, o projeto, nomeado A Arte de Bordar pelo Brasil - edição 01, recebeu patrocínio da empresa John Deere, e foi realizado nas cidades de Campinas e Indaiatuba/SP, formando 54 mulheres. Nessa mesma edição, com o intuito de contribuir com a continuidade nos trabalhos de quem recebe o curso, Fernanda iniciou o desenvolvimento desta plataforma online, que deseja ser uma conexão entre as mulheres beneficiadas pelas suas formações, com pessoas e instituições que demandam pelo trabalho com bordado em pedrarias. Uma plataforma digital que tem como intuito reunir em um único lugar bordadeiras que já passaram pelo curso e que têm interesse em estar disponíveis para que quem busca um perfil de mão de obra correspondente, possa acessar um resumo da sua história, conhecer um pouco do seu trabalho e contatá-la diretamente. A intenção de Fernanda é poder manter, neste e em futuros projetos incentivados, a possibilidade de que suas alunas usufruam desta plataforma para encontrar formas de gerar renda a partir das suas criações.<br><br>Em julho de 2024, o projeto chegará à cidade de Mogi Guaçu/SP, onde prevê alcançar diretamente até 100 mulheres com a formação e possibilidade de inclusão na plataforma, com patrocínio da empresa MAHLE. Ainda durante o ano, devem acontecer outras edições do projeto, com cidade ainda a definir.<br><br>A várias mãos, vamos juntas, bordar novas propostas de destinos.<br></p>',
            'img_url' => '/img/q_-bordadeiras-do-Brasil-22-04-24-110317-1974.jpg',
            'social_medias' => (object)[
                'facebook_url' => '',
                'instagram_url' => 'https://www.instagram.com/aartedebordarpelobrasil/',
                'youtube_url' => '',
                'portifolio_url' => '',
                'email_url' => ''
            ],
        ];

        $posts[] = (object)[
            'title' => 'A Plataforma Bordadeiras do Brasil',
            'subtitle' => '',
            'content' => '<p style="font-size: 13px" align="justify">A plataforma Bordadeiras do Brasil foi criada com o objetivo de dar oportunidade de geração de renda às mulheres que acessam os cursos da Fernanda e desejam dar continuidade ao trabalho com bordado em pedrarias.<br><br>Nesta plataforma, estão inseridas as criações das alunas que foram bem avaliadas pela Fernanda durante os cursos proporcionados pelo projeto, no que diz respeito ao cuidado com o trabalho desenvolvido, de acordo com o conhecimento e entendimento da própria Fernanda. Importante salientar que em nenhum dos casos a artista Fernanda Nadal se responsabiliza por quaisquer tratativas feitas a partir dessa plataforma. No entanto, caso haja interesse em obter mais informações sobre alguma aluna ou trabalho de interesse, basta contatar a Fernanda através do seu email, disponível nesta plataforma.<br><br><strong>COMO FUNCIONA:</strong><br><br>As mulheres participantes dos cursos realizados através do projeto da Fernanda, recebem um kit com material para realizarem suas primeiras peças. No kit doado pelo projeto, cada mulher recebe também um tecido com um traço pré-estabelecido pela artista Fernanda Nadal. Os bordados realizados a partir desse traço, caso seja de interesse da mulher participante, passam por uma filtragem através do olhar da artista, podendo ou não ser inseridos nesta plataforma online de conexão. O intuito é possibilitar que as alunas que dão continuidade ao trabalho aprendido, tenham uma visibilidade maior, a partir do interesse de pessoas e empresas que buscam a mão de obra com bordado em pedraria.<br><br>Mulheres que passaram por edições anteriores do projeto, poderão enviar o material à Fernanda pelos Correios. A artista fará a análise e o registro fotográfico do material recebido, bem como disponibilizar o trabalho e mais informações sobre a aluna na plataforma, caso bem avaliado. Caso seja o caso, a bordadeira deve contatar a Fernanda por email solicitando maiores informações.<br><br>Ainda, conforme houver atualização das informações de cada aluna, é possível que esta faça contato com a equipe do projeto, através do email, para atualização também nesta plataforma, de forma que o material possa estar atualizado, conforme informações das próprias participantes.</p>',
            'img_url' => '/img/q_-bordadeiras-do-Brasil-22-04-24-105938-1470.jpg',
            'social_medias' => (object)[
                'facebook_url' => '',
                'instagram_url' => '',
                'youtube_url' => '',
                'portifolio_url' => '',
                'email_url' => ''
            ],
        ];

        $posts[] = (object)[
            'title' => 'Como contatar as Bordadeiras',
            'subtitle' => '',
            'content' => '<p style="font-size: 13px" align="justify">Na aba “Encontre uma Bordadeira”, você terá acesso aos bordados realizados pelas alunas bem avaliadas pela Fernanda durante os cursos. Ao clicar na imagem que mais lhe interessa, você terá acesso ao contato e uma breve descrição sobre a bordadeira que realizou o bordado escolhido. Basta acessar suas redes e/ou contatá-la para maiores informações sobre o seu trabalho.</p>',
            'img_url' => '',
            'social_medias' => (object)[
                'facebook_url' => '',
                'instagram_url' => '',
                'youtube_url' => '',
                'portifolio_url' => '',
                'email_url' => ''
            ],
        ];


        return view('pages.nossa-historia.nossa-historia', compact('posts', 'title'));
    }
}
