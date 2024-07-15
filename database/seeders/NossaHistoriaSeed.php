<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NossaHistoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nossaHistoria = [
            [
                'title' => 'Idealizadora',
                'subtitle' => 'Fernanda Nadal',
                'content' => '<p style="font-size: 13px" align="justify">Fernanda Nadal, a mente por trás do inspirador projeto A Arte de Bordar pelo Brasil, é designer de bordados em pedrarias, e atua como professora, empresária, mentora e escritora na área da moda.<br><br>Sua paixão pelo bordado começou aos 12 anos, quando aprendeu o ponto cruz com sua tia, o que marcou o início de uma jornada notável. Possui uma sólida formação, que inclui pós-graduação em Moda e Cultura pela UEL, MBA em Negócios de Moda pela USP, e treinamentos internacionais na École Lesage, em Paris sob a tutela de renomados mestres como Marie Rucki do Studio Berçot Paris.<br><br>Teve seu próprio ateliê durante 20 anos (2002-2022), onde pode criar bordados e executar projetos exclusivos a clientes e empresas.<br><br>Em 2021, Fernanda foi destaque na Exposição “A Arte da Moda” ao lado de ícones como Dior e Chanel no Farol Santander, em São Paulo, reconhecimento merecido por sua expertise.<br><br>Em 2023, lançou seu livro inaugural, "A Arte de Bordar", com apoio da Lei Federal de Incentivo à Cultura, consolidando sua influência no cenário artístico.<br><br>Em 2024, criou o Clube Criativo com bordados em pedrarias, onde tem ajudado mulheres a desbloquear sua criatividade no bordado, através de conteúdos exclusivos disponibilizados ao longo do ano. A criação do Clube Criativo com bordados em pedrarias evidencia sua inovação, sendo o primeiro clube de assinatura do tipo na América Latina.<br><br>Através de cursos presenciais e online, ela já impactou mais de 3.500 alunas em 9 países, desbloqueando a criatividade de mulheres ao redor do mundo.<br><br>Além de tudo isso, Fernanda desempenha um papel crucial como mentora para empresas que buscam agregar valor artesanal às suas marcas, conectando indústrias e pessoas com os talentos das bordadeiras.<br></p>',
                'thumbnail' => '/img/q_Fernanda-Nadal-bordadeiras-do-Brasil-22-04-24-105458-1468.jpg',
                'facebook' => 'https://www.facebook.com/fernanda.nadal',
                'instagram' => 'https://www.instagram.com/fernandanadal/',
                'youtube' => 'https://www.youtube.com/channel/UC9',
                'portifolio' => 'https://www.bordadeirasdobrasil.com.br/',
                'email' => 'teste@gmail.com',
                'linkedin' => '',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'O Projeto A Arte de Bordar pelo Brasil',
                'subtitle' => '',
                'content' => ' <p style="font-size: 13px" align="justify">Em 2019, Fernanda Nadal deu início a um sonho, que hoje é o seu principal propósito de vida: ensinar mulheres de baixa renda ou desempregadas a arte de bordar em pedrarias, com foco na inserção no mercado de trabalho e oportunidade de geração de renda. A artista decidiu transmitir seu conhecimento para empoderar essas mulheres, fortalecendo-as através de um encontro com técnicas ancestrais de artes e bordado em pedrarias. Assim nasceu o projeto <strong>A Arte de Bordar pelo Brasil.</strong> </p> <br>  <p style="font-size: 13px" align="justify"> <strong>A primeira turma formada pelo projeto foi em 2019 em Ponta Grossa/PR</strong>, cidade natal da Fernanda, com investimento financeiro dela e apoio de colegas e amigos. O curso, que foi gratuito, oportunizou a formação de mais de 30 mulheres de baixa renda da cidade, sendo que muitas delas foram inseridas no mercado de trabalho em menos de 2 meses. Isso motivou mais ainda a Fernanda, que no final de 2020, decidiu submeter o projeto <strong>A Arte de Bordar pelo Brasil</strong> através da Lei Federal de Incentivo à Cultura (Lei 8.313/91), a conhecida Lei Rouanet, como forma de conseguir manter o curso gratuito e beneficiar ainda mais mulheres pelo Brasil. O projeto foi aprovado a captar recursos pela Lei e começou a ser apresentado para empresas investidoras. </p><br><p style="font-size: 13px" align="justify"> Em 2022, primeira edição na Lei de Incentivo à Cultura, o projeto conseguiu iniciar através de patrocínio incentivado, e desde então vem sendo sucesso, recebendo apoio, ano a ano, de empresas patrocinadoras de todo o Brasil. Nesta primeira edição o projeto formou 130 mulheres, através do patrocínio da Braskem, na cidade de Montenegro/RS. </p><br> <p style="font-size: 13px" align="justify"> Em 2023, na segunda edição, o projeto capacitou 93 mulheres em João Monlevade/MG, com patrocínio, via Lei Rouanet, da Fundação ArcelorMittal, que viabilizou também a escrita do primeiro livro do projeto e da Fernanda, “A Arte de Bordar”, distribuído gratuitamente para 1.500 pessoas, entre elas as participantes do projeto. </p><br> <p style="font-size: 13px" align="justify"> Ainda em 2023, mas já na terceira edição, o projeto recebeu patrocínio da empresa John Deere e foi realizado nas cidades de Campinas e Indaiatuba/SP, formando 54 mulheres. Nessa mesma edição, com o intuito de contribuir com a oportunidade de geração de renda, divulgando o trabalho de quem recebe o curso, o projeto contemplou a criação desta Plataforma online <strong>Bordadeiras do Brasil</strong>. </p> <br> <p style="font-size: 13px" align="justify"> Em julho de 2024, ainda na terceira edição, o projeto chegou na cidade de Mogi Guaçu/SP, através do patrocínio da empresa Mahle, formando mais 87 mulheres. </p> <br> <p style="font-size: 13px" align="justify"> Além desta Plataforma, a terceira edição do projeto também contempla 2 documentários de 50min cada que abordarão a história do bordado no Brasil, apresentando sua técnica e sua poética sob a ótica da tradição e de suas relações com o que se entende por feminino, contando com imagens e entrevistas das mulheres beneficiadas pelos cursos da terceira edição. </p><br><p style="font-size: 13px" align="justify"> A quarta edição do projeto já conta com duas empresas patrocinadoras, John Deere e Grupo AEGEA, que garantirão a oportunidade de capacitar até 400 mulheres ainda em 2024. </p><br> <p style="font-size: 13px" align="justify"> Espera-se rodar mais vezes ainda este projeto pelo máximo de estados e cidades do Brasil, por isso se tornou um projeto anual aprovado na Lei Rouanet. </p><br><p style="font-size: 13px" align="justify"> A várias mãos, vamos juntos, bordar novas propostas de destinos! </p> <br> <br> <p style="font-size: 13px" align="justify"> <strong>Sobre o curso do Projeto:</strong> </p> <br> <p style="font-size: 13px" align="justify"> A Fernanda ensina pontos de bordado com pedrarias durante uma semana na cidade escolhida pela empresa patrocinadora, totalizando 50 horas de formação profissionalizante para mulheres de baixa renda e desempregadas. O projeto fornece todo o material necessário para a realização das atividades (kit com pedrarias, fios, agulhas, tecido, etc.), além de oferecer palestras sobre entrada e aos desafios no mercado de trabalho com o bordado em pedrarias, bem como sobre a sustentabilidade na área e como ela pode ser utilizada para geração de renda e redução no impacto ambiental. No final da formação, as alunas realizam uma mostra de encerramento onde recebem certificados e exibem ao público as obras criadas. </p> <br> <br> <p style="font-size: 13px" align="justify"> <strong>Sobre o mercado de trabalho: </strong></p> <br> <p style="font-size: 13px" align="justify"> A moda é o segundo setor que mais emprega no mundo, além de ser o segmento que mais vende no e-commerce mundial. O mercado do artesanato na moda segue tomando força, uma vez que mais pessoas valorizam produtos únicos e feitos à mão. Contudo, há uma dificuldade significativa no encontro de mão de obra qualificada, uma vez que o trabalho exige maior habilidade, técnica, cuidado e tempo. O bordado em pedrarias, além de exigir precisão e delicadeza, sofre com a falta de oferta de treinamentos especializados e acessíveis ao pequeno artesão, o que dificulta a formação e entrada de novos profissionais qualificados no mercado. Este projeto nasceu também para atender esta demanda e formar profissionais qualificados!</p>',
                'thumbnail' => '/img/q_-bordadeiras-do-Brasil-22-04-24-110317-1974.jpg',
                'facebook' => '',
                'instagram' => 'https://www.instagram.com/aartedebordarpelobrasil/',
                'youtube' => '',
                'portifolio' => '',
                'email' => '',
                'linkedin' => '',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'A Plataforma Bordadeiras do Brasil',
                'subtitle' => '',
                'content' => '<p style="font-size: 13px" align="justify">A <strong>Plataforma Bordadeiras do Brasil</strong>, que faz parte do projeto <strong>Arte de Bordar pelo Brasil</strong>, foi criada com o objetivo de dar oportunidade de visibilidade e geração de renda às mulheres participantes do curso do projeto, ministrado pela Fernanda Nadal e que desejam dar continuidade ao trabalho com bordado em pedrarias, vendendo a sua arte.</p><br><p style="font-size: 13px" align="justify"> Na Plataforma, encontram-se cadastradas as alunas/artesãs formadas pelo curso de bordado em pedrarias do projeto A <strong>Arte de Bordar pelo Brasil</strong> que mais se destacaram em qualidade pelos seus bordados em pedrarias ao longo da capacitação. A seleção foi feita pela própria Fernanda Nadal, que inclui além da qualidade do bordado, o interesse da aluna em trabalhar na área e vender o seu bordado para pessoas e empresas interessadas.</p><br><p style="font-size: 13px" align="justify"> Vale destacar que a <strong>Plataforma Bordadeiras do Brasil</strong> atualmente é sustentada junto com o projeto <strong>A Arte de Bordar pelo Brasil</strong>, pela Lei de Incentivo à Cultura e empresas patrocinadoras.</p><br><br><p style="font-size: 13px" align="justify"> <strong>COMO FUNCIONA:</strong></p><br><p style="font-size: 13px" align="justify"> <strong>COMO FUNCIONA:</strong></p><br><p style="font-size: 13px" align="justify"> A intenção da Plataforma é selecionar as melhores alunas e/ou artesãs que fizeram o curso como atualização/aperfeiçoamento.</p><br><p style="font-size: 13px" align="justify"> Na aba da Plataforma <strong>“Encontre uma bordadeira”</strong> a pessoa ou empresa interessada em contratar serviço de bordado em pedrarias poderá acessar as bordadeiras cadastradas através dos seus contatos e redes sociais, além de conhecer um pouco da história de cada uma.</p><br><p style="font-size: 13px" align="justify"> Importante salientar que a artista Fernanda Nadal não se responsabiliza por quaisquer tratativas feitas a partir dessa Plataforma. No entanto, caso haja interesse em obter mais informações sobre alguma aluna/artesã ou trabalho de interesse, basta contatar a Fernanda através do seu e-mail, disponível nesta Plataforma.</p><br><p style="font-size: 13px" align="justify"> A Plataforma encontra-se ainda em elaboração/aperfeiçoamento e desejamos que aqui seja um lugar de geração de muitos negócios lindos, oportunizando trabalho e renda de forma inclusiva.</p><br><p style="font-size: 13px" align="justify"> Poderá aqui vir a ser um ponto de referência nacional e por que não, internacional, de mão de obra em bordado em pedrarias, será mais um sonho concretizado pelo projeto, pela Fernanda e pela equipe que desenvolve este projeto encantador e promissor!</p>',
                'thumbnail' => '/img/q_-bordadeiras-do-Brasil-22-04-24-105938-1470.jpg',
                'facebook' => '',
                'instagram' => '',
                'youtube' => '',
                'portifolio' => '',
                'email' => '',
                'linkedin' => '',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Como contatar as Bordadeiras',
                'subtitle' => '',
                'content' => '<p style="font-size: 13px" align="justify">Na aba “Encontre uma Bordadeira”, você terá acesso aos bordados realizados pelas alunas bem avaliadas pela Fernanda durante os cursos. Ao clicar na imagem que mais lhe interessa, você terá acesso ao contato e uma breve descrição sobre a bordadeira que realizou o bordado escolhido. Basta acessar suas redes e/ou contatá-la para maiores informações sobre o seu trabalho.</p>',
                'thumbnail' => '',
                'facebook' => '',
                'instagram' => '',
                'youtube' => '',
                'portifolio' => '',
                'email' => '',
                'linkedin' => '',
                'user_id' => 1,
                'created_at' => now(),
            ]
        ];


        if (DB::table('nossa_historia')->count() > 0) {
            DB::table('nossa_historia')->truncate();
        }

        DB::table('nossa_historia')->insert($nossaHistoria);
    }
}
