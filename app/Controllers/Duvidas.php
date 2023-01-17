<?php

namespace App\Controllers;

class Duvidas extends BaseController
{
    public function index()
    {
        $dadosHeader['title'] = "Dúvidas - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>false, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>true, 'blog'=>false, 'loja'=>false];
        $dataContato['title'] = "DÚVIDAS";
        $dados['dados_todos'] = $this->perguntasTodos();
        $dados['dados_branding'] = $this->perguntasBranding();
        $dados['dados_uiux'] = $this->perguntasUiUx();
        $dados['dados_socialmedia'] = $this->perguntasSocialMedia();
        echo view('templates/header', $dadosHeader);
        echo view('templates/banner-subpages', $dataContato);
        echo view('duvidas', $dados);
        echo view('templates/footer');
    }

    public function perguntasTodos() {
        $array_todos = [
            [
                "pergunta" => "O que a Linkando Design faz?",
                "resposta" => "Linkando Design é um estúdio de design especializado em design de marcas, 
                identidade visual, interface de usuário, experiência do usuário e social media."
            ],
            [
                "pergunta" => "O que precisa para começar um projeto com a Linkando Design?",
                "resposta" => "Para começarmos a trabalhar em seu projeto, precisamos passar por estas etapas antes: 
                    <strong>contato - pré-briefing - seleção - proposta - contrato - entrada.</strong>"
            ],
            [
                "pergunta" => "Como é o processo durante o desenvolvimento do projeto?",
                "resposta" => "Como temos serviços de design específicos, cada serviço possui um processo. Em geral se faz com: 
                    <strong>coleta e imersão - desenvolvimento - apresentação - entrega.</strong>"
            ]
        ];
        $array_branding = $this->perguntasBranding();
        $array_uiux = $this->perguntasUiUx();
        $array_socialmedia = $this->perguntasSocialMedia();
        return array_merge($array_todos, $array_branding, $array_uiux, $array_socialmedia);
    }

    public function perguntasBranding() {
        $perguntas_respostas = [
            [
                "pergunta" => "Por que contratar a Linkando Design para sua marca?",
                "resposta" => "Ter uma marca forte e coesa é importante para qualquer empresa, pois ajuda a construir confiança e a estabelecer uma presença sólida no mercado. A Linkando Design pode ajudar a criar uma identidade visual consistente e atraente para sua marca, o que pode ajudar a atrair e reter clientes."
            ],
            [
                "pergunta" => "Quanto tempo leva o processo de design de uma marca?",
                "resposta" => "O tempo necessário para o processo de design de uma marca varia dependendo do tamanho e da complexidade do projeto. Em geral, o processo pode levar no mínimo 15 dias a alguns meses. Para projetos básicos e que precise em menos de 15 dias é cobrado uma taxa adicional."
            ],
            [
                "pergunta" => "Quanto custa um projeto de design de marca?",
                "resposta" => "O custo de um projeto de design de marca pode variar amplamente, dependendo do tamanho e da complexidade do projeto conforme o briefing. Não trabalhamos com valores fixos, de acordo com o as informações fornecidas, algumas variáveis como prazo, complexidade e itens de entrega específicos podem influenciar. Só então poderemos definir uma proposta justa para ambos."
            ],
            [
                "pergunta" => "O que é branding?",
                "resposta" => "Branding é o conjunto de técnicas e estratégias utilizadas para criar uma marca forte e distinta."
            ],
            [
                "pergunta" => "Qual a importância do branding para uma empresa?",
                "resposta" => "O branding é importante para uma empresa porque ajuda a diferenciá-la das demais no mercado, fortalecer a sua identidade, criar lealdade entre os clientes, valorizar o preço, facilitar a expansão e proteger legalmente os elementos da marca. Investir em branding é uma forma de criar uma presença sólida e positiva no mercado, e ajuda a estabelecer uma conexão emocional com os clientes, o que pode levar a maiores lucros e crescimento a longo prazo."
            ],
            [
                "pergunta" => "Como posso manter a consistência da minha marca em todas as plataformas de mídia social?",
                "resposta" => "É importante manter a consistência da marca em todas as plataformas de mídia social utilizando os mesmos elementos visuais, como o logotipo, a paleta de cores e a tipografia, e mantendo uma voz consistente e mensagens coerentes em todos os canais."
            ],
            [
                "pergunta" => "Você entrega os materiais impressos?",
                "resposta" => "Não. Entregamos apenas os projetos fechados para serem enviados para a gráfica de sua preferência."
            ]
        ];
        return $perguntas_respostas;
    }
   
    public function perguntasUiUx() {
        $perguntas_respostas = [
            [
                "pergunta" => "Fazem site?",
                "resposta" => "Sim, realizamos o design de site, aplicativo e sistemas. Porém, o serviço de desenvolvimento é realizado à parte pelos nossos parceiros."
            ],
            [
                "pergunta" => "O que é UI Design?",
                "resposta" => "UI Design é o processo de projetar a interação do usuário com a interface de um produto, como a disposição dos elementos na tela, as cores, tipografia, botões, etc."
            ],
            [
                "pergunta" => "O que é UX Design?",
                "resposta" => "UX Design é o processo de projetar a experiência do usuário com um produto, incluindo a facilidade de uso, acessibilidade, satisfação e eficácia."
            ],
            [
                "pergunta" => "Como UI e UX design são diferentes?",
                "resposta" => "UI Design se concentra principalmente na aparência e na interação do usuário com a interface, enquanto o UX Design se concentra na experiência geral do usuário com o produto."
            ],
            [
                "pergunta" => "Por que é importante o UI e o UX design em um projeto?",
                "resposta" => "UI e UX design são importantes porque eles ajudam a garantir que o produto seja fácil e agradável de usar, além de aumentar a satisfação e a eficácia do usuário."
            ]
        ];
        return $perguntas_respostas;
    }

    public function perguntasSocialMedia() {
        $perguntas_respostas = [
            [
                "pergunta" => "O que é social media?",
                "resposta" => "Social media é o conjunto de atividades que nós realizamos para gerenciar e promover uma empresa ou marca através das redes sociais. Isso pode incluir a criação e programação de postagens nas redes sociais, a criação e gerenciamento de conteúdos, a interação com os seguidores e a análise do desempenho das atividades de mídia social. O objetivo do profissional de social media é ajudar a empresa a alcançar e se conectar com o público-alvo, aumentar o envolvimento e a conscientização da marca e, em última análise, gerar vendas e outras ações desejadas."
            ],
            [
                "pergunta" => "Qual é a importância do social media para empresas?",
                "resposta" => "É muito importante ter um profissional de social media responsável por gerenciar as contas de mídia social de uma empresa e para promover seus produtos e serviços através dessas plataformas. Ele também é responsável por criar e gerenciar conteúdos nas redes sociais, monitorar, responder a comentários e mensagens dos clientes e analisar o desempenho das atividades de mídia social da empresa. O profissional de social media é importante para as empresas porque ele pode ajudá-las a alcançar e se conectar com o público-alvo, aumentar o envolvimento e a conscientização da marca e, em última análise, gerar vendas e outras ações desejadas."
            ],
            [
                "pergunta" => "Quais são os serviços de social media oferecidos?",
                "resposta" => "<p><strong>Gerenciamento de redes sociais:</strong></p>
                <p class='mb-3'>Nesse serviço cuidaremos das suas redes sociais. Organizando e criando conteúdos de forma estratégica de acordo com seus objetivos e suas necessidades.</p>
                <strong><p>Análise de perfil:</strong></p>
                <p>A análise de perfil é uma avaliação completa do seu perfil no Instagram, onde identificamos os pontos que precisam melhorar para alavancar seus resultados.
                Você será direcionado ao caminho certo para transformar o seu instagram em um perfil profissional e de referência em seu nicho.</p>"
            ],
            [
                "pergunta" => "Quais os pontos analisados na análise de perfil?",
                "resposta" => "<p>Os pontos analisados são:</p>
                <ol><li><p>Identidade visual;</p></li>
                <li><p>Foto de perfil;</p></li>
                <li><p>Nome de usuário: @;</p></li>
                <li><p>Nome de perfil;</p></li>
                <li><p>Biografia;</p></li>
                <li><p>Destaques;</p></li>
                <li><p>Conteúdo do feed;</p></li>
                <li><p>Conteúdo dos stories;</p></li>
                <li><p>Reels/vídeos;</p></li>
                <li><p>Estratégia visual e Posicionamento;</p></li>
                <li><p>Hashtags;</p></li>
                <li><p>Narrativa de conteúdo.</p></li></ol>"
            ],
            [
                "pergunta" => "O que inclui a gestão de redes sociais?",
                "resposta" => "Uma gestão de mídias sociais envolve diversas etapas, que incluem desde a definição da estratégia e do posicionamento, o planejamento de publicações e a execução até o monitoramento e o levantamento dos resultados."
            ],
            [
                "pergunta" => "Quanto custa o serviço de social media?",
                "resposta" => "O preço é baseado em uma avaliação das necessidades do cliente e em um orçamento personalizado, que pode incluir uma variedade de serviços, como gerenciamento de contas de mídias sociais, criação de conteúdo, análise de perfil, estratégias para mídias sociais e muito mais."
            ],
            [
                "pergunta" => "Sobre contrato de social media?",
                "resposta" => "Nossos contratos são elaborados com duração de 3 meses, 6 meses e 1 ano, e é possível renová-los no final do período de vigência. Tudo depende das necessidades de cada cliente."
            ],
            [
                "pergunta" => "Como contratar os serviços de social media?",
                "resposta" => "Para contratar nossos serviços, basta entrar em contato com a nossa equipe. Você será encaminhado ao setor responsável, onde identificamos suas necessidades e elaboramos uma proposta personalizada para o seu negócio. Após a aprovação da proposta, iniciaremos os projetos."
            ],
            [
                "pergunta" => "Quais os processos nos serviços de social media?",
                "resposta" => "<p><strong>Análise de perfil:</p></strong> 
                <p class='mb-3'>Primeiro contato - Briefing - Criação da estratégia - Reunião de apresentação - Entrega - 15 dias de suporte via WhatsApp</p>
                <p><strong>Gestão de redes sociais:</p></strong>
                <p>Primeiro contato - Briefing - Contrato - Criação da estratégia - Reunião de apresentação - Início do gerenciamento</p>"
            ],
            [
                "pergunta" => "Quais redes sociais você atende?",
                "resposta" => "Nós atendemos Instagram, Facebook, TikTok, Pinterest, LinkedIn"
            ],
            [
                "pergunta" => "Quais redes sociais você não atende?",
                "resposta" => "Nós ainda não atendemos Youtube, Twitter"
            ]
        ];
        return $perguntas_respostas;
    }
}