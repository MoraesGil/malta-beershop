-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 187.45.210.75
-- Tempo de Geração: 26/09/2014 às 10:09:11
-- Versão do Servidor: 5.0.95
-- Versão do PHP: 5.3.3-7+squeeze18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `espacopatas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aniversario`
--

CREATE TABLE IF NOT EXISTS `aniversario` (
  `ani_codigo` int(11) NOT NULL auto_increment,
  `ani_animal` text,
  `ani_cliente` text,
  `ani_dataAnimal` date default NULL,
  `ani_descricao` text,
  `ani_destaque` int(11) default NULL,
  `ani_src_thumb` text,
  `ani_src_large` text,
  PRIMARY KEY  (`ani_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `aniversario`
--

INSERT INTO `aniversario` (`ani_codigo`, `ani_animal`, `ani_cliente`, `ani_dataAnimal`, `ani_descricao`, `ani_destaque`, `ani_src_thumb`, `ani_src_large`) VALUES
(1, 'Bingo', 'Eunice', '2009-06-10', '', 1, '../img/content/aniversarios/thumbnail_1402550782.jpg', '../img/content/aniversarios/resize_1402550782.jpg'),
(2, 'Dylan', 'Marina Birolli', '2013-06-10', '', 1, '../img/content/aniversarios/thumbnail_1402551679.jpg', '../img/content/aniversarios/resize_1402551679.jpg'),
(3, 'Hashi', 'Marina Birolli', '2013-06-10', '<p>Spitz Alem&atilde;o</p>', 1, '../img/content/aniversarios/thumbnail_1402551797.jpg', '../img/content/aniversarios/resize_1402551797.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `ban_codigo` int(11) NOT NULL auto_increment,
  `ban_chamada` text,
  `ban_url` text,
  `ban_src` text,
  `ban_destaque` int(11) default NULL,
  `ban_target` int(11) default NULL,
  PRIMARY KEY  (`ban_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`ban_codigo`, `ban_chamada`, `ban_url`, `ban_src`, `ban_destaque`, `ban_target`) VALUES
(5, 'Banho & Tosa -  todo o tratamento necessário para o seu cão.', '', 'img/content/banners/arq_4431386154933.jpg', 1, 0),
(6, 'Taxi Dog - veículo especial e climatizado com conforto e segurança', '', 'img/content/banners/arq_921386155246.jpg', 1, 0),
(7, 'Hospedagem - ampla infraestrutura para o seu cão.', '', 'img/content/banners/arq_5331386155305.jpg', 1, 0),
(9, ' ', ' ', 'img/content/banners/arq_281400355003.jpg', 1, 0),
(10, ' ', ' ', 'img/content/banners/arq_8481400355024.jpg', 0, 0),
(11, ' ', ' ', 'img/content/banners/arq_1781400355037.jpg', 0, 0),
(12, ' ', ' ', 'img/content/banners/arq_4881400355071.jpg', 1, 0),
(13, ' ', ' ', 'img/content/banners/arq_6261400355102.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimento`
--

CREATE TABLE IF NOT EXISTS `depoimento` (
  `dep_codigo` int(11) NOT NULL auto_increment,
  `dep_nome` text,
  `dep_mensagem` text,
  `dep_src` text,
  `dep_destaque` int(11) default NULL,
  PRIMARY KEY  (`dep_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `depoimento`
--

INSERT INTO `depoimento` (`dep_codigo`, `dep_nome`, `dep_mensagem`, `dep_src`, `dep_destaque`) VALUES
(1, 'Edson Kenji Doi - Clínica Kenkovet', 'Uma ótima iniciativa, onde não encontramos na nossa região uma estrutura tão avançada com alta tecnologia para deixar o seu cão em situação de pessoas que viajam. Eu recomendo!', 'img/content/depoimentos/arq_1661385508195.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dica`
--

CREATE TABLE IF NOT EXISTS `dica` (
  `dic_codigo` int(11) NOT NULL auto_increment,
  `dic_titulo` text,
  `dic_chamada` text,
  `dic_descricao` text,
  `dic_data` date default NULL,
  `dic_fonte` text,
  `dic_src_thumb` text,
  `dic_src_large` text,
  PRIMARY KEY  (`dic_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `dica`
--

INSERT INTO `dica` (`dic_codigo`, `dic_titulo`, `dic_chamada`, `dic_descricao`, `dic_data`, `dic_fonte`, `dic_src_thumb`, `dic_src_large`) VALUES
(1, 'Na dieta! Como fazer seu cachorro emagrecer e ficar mais saudável', 'Os donos, porém, muitas vezes desconhecem os riscos que a obesidade pode trazer. Doenças articulares, problemas respiratórios, colesterol e triglicerídeos nas alturas e dermatites são alguns deles.', '<p>O mundo est&aacute; mais gordo. Considerada pelo Instituto Brasileiro de Geografia e Estat&iacute;stica (IBGE) como uma epidemia, a obesidade &eacute; uma das doen&ccedil;as nutricionais mais frequentes e preocupantes no Pa&iacute;s. E para confirmar o qu&atilde;o global ela &eacute;, o &iacute;ndice de bichos de estima&ccedil;&atilde;o que enfrentam essa condi&ccedil;&atilde;o &eacute; cada vez maior. De acordo com o &uacute;ltimo estudo da Associa&ccedil;&atilde;o para a Preven&ccedil;&atilde;o da Obesidade em Animais Dom&eacute;sticos (APOP, na sigla em ingl&ecirc;s), 55% dos pets s&atilde;o obesos nos Estados Unidos. No Brasil, a estimativa &eacute; de que de 30 a 40% dos animais estejam com excesso de peso.<br /><br />Os donos, por&eacute;m, muitas vezes desconhecem os riscos que a obesidade pode trazer. Doen&ccedil;as articulares, problemas respirat&oacute;rios, colesterol e triglicer&iacute;deos nas alturas e dermatites s&atilde;o alguns deles. A obesidade, nos c&atilde;es, est&aacute; banalizada, n&atilde;o raramente sendo considerada sin&ocirc;nimo de for&ccedil;a, beleza e eleg&acirc;ncia. N&atilde;o &eacute;. Pode tamb&eacute;m ocasionar diabetes e hipertens&atilde;o. Se nos humanos &eacute; senso comum o fato de que manter o peso ideal &eacute; uma quest&atilde;o de sa&uacute;de (e n&atilde;o s&oacute; de est&eacute;tica), por que nos animais isso &eacute; visto de forma diferente?<br /><br />&Eacute; preciso, primeiro, encarar o problema, descobrir os motivos que levaram seu c&atilde;o a engordar e, finalmente, pensar - junto ao m&eacute;dico veterin&aacute;rio - na melhor forma de reverter a situa&ccedil;&atilde;o. E j&aacute; que os animais n&atilde;o sabem abrir geladeira, voc&ecirc;, dono, tem total controle sobre a qualidade de vida do seu bichinho. Uma dieta caseira adequada para a perda de peso deve ser regra na sua casa. E levar seu c&atilde;o para fazer atividades f&iacute;sicas tamb&eacute;m &eacute; um exerc&iacute;cio para voc&ecirc;. Bom para os dois lados.<br /><br />Al&eacute;m disso, o peso ideal est&aacute; diretamente relacionado &agrave; longevidade. Se voc&ecirc; quer que seu c&atilde;o viva mais - e melhor - atente aos fatores que levam &agrave; obesidade. O primeiro, claro, &eacute; o excesso de calorias. A primeira dica &eacute; n&atilde;o encher completamente a vasilha de comida. Segundo o m&eacute;dico veterin&aacute;rio &Eacute;rico Ribeiro, residente em Nutri&ccedil;&atilde;o Cl&iacute;nica de C&atilde;es e Gatos pela Universidade Estadual Paulista (Unesp), animais que recebem ra&ccedil;&atilde;o &agrave; vontade envelhecem mais r&aacute;pido e vivem, em m&eacute;dia, menos tempo que c&atilde;es com alimenta&ccedil;&atilde;o controlada. O ideal &eacute; racionar a alimenta&ccedil;&atilde;o em duas refei&ccedil;&otilde;es di&aacute;rias, de acordo com a idade e o peso do animal.<br /><br /><strong>Petisco light</strong><br /><br />N&atilde;o exagerar nos petiscos, conforme Ribeiro, tamb&eacute;m &eacute; importante, pois al&eacute;m de refor&ccedil;ar o comportamento de pedir por comida fora de hora, desequilibra a dieta. Se for imposs&iacute;vel excluir os lanchinhos da dieta, opte por petiscos lights, como cenouras cruas ou pedacinhos de ma&ccedil;&atilde;. A veterin&aacute;ria e jornalista Sylvia Ang&eacute;lico afirma que existe uma dieta natural cl&aacute;ssica, &agrave; base de meaty bones e zero carboidrato, que d&aacute; conta de enxugar, sem esfor&ccedil;o, os quilos extras da maioria dos c&atilde;es.<br /><br /><strong>Ra&ccedil;as e pesos</strong><br /><br />Algumas ra&ccedil;as s&atilde;o geneticamente mais suscet&iacute;veis &agrave; obesidade que outras. Tenha aten&ccedil;&atilde;o redobrada se o seu c&atilde;o for um Labrador, um Golden Retriever, um Cocker Spaniel, um Beagle ou um Pug. Animais castrados ou idosos tamb&eacute;m t&ecirc;m mais chances de se tornarem obesos, pois apresentam uma redu&ccedil;&atilde;o no metabolismo e, por consequ&ecirc;ncia, ficam menos ativos. As f&ecirc;meas possuem maior percentual de gordura corporal e metabolismo mais lento em rela&ccedil;&atilde;o aos machos. Devido a isso, t&ecirc;m pr&eacute;-disposi&ccedil;&atilde;o ao ganho de peso.<br /><br /><strong>Atividade f&iacute;sica</strong><br /><br />Outro fator que contribui muito para a obesidade canina &eacute; a falta de atividades f&iacute;sicas. &ldquo;O exerc&iacute;cio &eacute; t&atilde;o importante que, muitas vezes, previne ou combate o ganho de peso sozinho, sem necessidade de dieta&rdquo;, diz Sylvia. C&atilde;es que se exercitam com regularidade evitam a perda &oacute;ssea, desenvolvem musculatura e, devido a isso, aceleram o metabolismo, consumindo mais energia. Se voc&ecirc; mora em apartamento ou em casa pequena, sem &aacute;rea externa, tente incluir na sua agenda um passeio de pelo menos 40 minutos, diariamente. N&atilde;o exija muito esfor&ccedil;o de seu c&atilde;o logo de primeira, pois como est&atilde;o fora de forma, o exerc&iacute;cio exagerado pode provocar danos &agrave;s articula&ccedil;&otilde;es. A evolu&ccedil;&atilde;o da intensidade do exerc&iacute;cio deve ser gradual. <br /><br />Se &eacute; f&aacute;cil identificar a obesidade nas pessoas, n&atilde;o &eacute; t&atilde;o simples assim quando falamos em c&atilde;es - al&eacute;m dos pelos, a pele pode ser grossa, a barriga n&atilde;o &eacute; t&atilde;o vis&iacute;vel, o rosto n&atilde;o apresenta muita diferen&ccedil;a e, dependendo da ra&ccedil;a, os &ldquo;pneuzinhos&rdquo; s&atilde;o naturais. Por isso, &eacute; preciso que voc&ecirc; conte com a ajuda de um veterin&aacute;rio para calcular o Escore de Condi&ccedil;&atilde;o Corporal (ECC) - o equivalente ao &Iacute;ndice de Massa Corporal (IMC) humano.<br /><br />O m&eacute;dico ir&aacute; determinar o grau de sobrepeso do c&atilde;o, discutir com voc&ecirc; o que pode ter causado a obesidade, descartar as poss&iacute;veis doen&ccedil;as endocrinol&oacute;gicas e tra&ccedil;ar um plano de redu&ccedil;&atilde;o de peso especial ao seu bichinho. Depois disso, deve-se monitorar os resultados uma vez por semana. Com a dieta institu&iacute;da e a rotina de exerc&iacute;cios f&iacute;sicos estabelecida, o seu c&atilde;o ir&aacute; perder peso com seguran&ccedil;a e sa&uacute;de.<br /><br /><strong>Confira malef&iacute;cios que a obesidade traz ao seu c&atilde;o</strong><br /><br />- Desenvolvimento de doen&ccedil;as osteoarticulares<br /><br />- Diminui&ccedil;&atilde;o na longevidade em, em m&eacute;dia, dois anos<br /><br />- Maior incid&ecirc;ncia a cardiopatias<br /><br />- Desenvolvimento de diabetes por resist&ecirc;ncia &agrave; insulina<br /><br />- Intoler&acirc;ncia ao exerc&iacute;cio f&iacute;sico<br /><br />- Dificuldades respirat&oacute;rias<br /><br />- Menor imunidade<br /><br />- Dificuldade em emprenhar, gestar e parir<br /><br />- Mais tend&ecirc;ncia ao desenvolvimento de tumores<br /><br />- Maior predisposi&ccedil;&atilde;o a doen&ccedil;as dermatol&oacute;gicas e urin&aacute;rias<br /><br />- Desenvolvimento de calos de apoio<br /><br /><strong>Confira as vantagens do peso ideal</strong><br /><br />- Mais disposi&ccedil;&atilde;o, agilidade e bom humor<br /><br />- Economia de dinheiro com comida em excesso, com tratamentos, medicamentos e cirurgias<br /><br />- Eleg&acirc;ncia, vigor e porte atl&eacute;tico<br /><br />- Maior &iacute;ndice de fecundidade<br /><br />- Melhoria na sa&uacute;de tamb&eacute;m do dono, que reflete sobre alimenta&ccedil;&atilde;o saud&aacute;vel e atividade f&iacute;sica<br /><br />- Menos fezes para limpar</p>', '2013-11-26', 'http://www.pataapata.com.br/', '../img/content/dicas/thumbnail_1386151572.jpg', '../img/content/dicas/resize_1386151572.jpg'),
(2, 'Conheça os cinco mandamentos para ser um bom dono de cachorro', 'Saiba os 5 mandamentos básicos que um dono de cachorro deve saber quando assumi um compromisso de ter esse animal.', '<p>Ser dono de um cachorro n&atilde;o &eacute; simples. Tampouco f&aacute;cil. Quando tomamos essa decis&atilde;o, assumimos um compromisso muito maior do que se imagina. E, muitas vezes, nem sabemos direito sobre nossos deveres enquanto propriet&aacute;rios. Pensando em orientar as pessoas a se relacionar com seus pets da melhor forma poss&iacute;vel, o Conselho Nacional de Pesquisa em C&atilde;es dos Estados Unidos listou as cinco responsabilidades b&aacute;sicas que um dono de cachorro deve ter. Apesar de ter sido desenvolvido em territ&oacute;rio americano, as dicas servem de exemplo para qualquer propriet&aacute;rio de qualquer c&atilde;o em qualquer pa&iacute;s.<br /><br clear="all" /><strong>1&ordm; mandamento: identifique o seu pet</strong><br /><br />Em prefeituras como a de S&atilde;o Paulo, isto &eacute; lei, tanto para c&atilde;es quanto para gatos. Registrar um animal &eacute; dar-lhe identidade: seu n&uacute;mero &eacute; impresso em uma plaqueta, que deve ser anexada permanentemente &agrave; coleira (o servi&ccedil;o &eacute; prestado pelo Centro de Controle de Zoonoses). Colocar o nome do bichinho e o telefone do propriet&aacute;rio &eacute; fundamental para casos de perda.<br /><br /><strong>2&ordm; mandamento: castre o seu c&atilde;o</strong><br /><br />A esteriliza&ccedil;&atilde;o n&atilde;o &eacute;, ao contr&aacute;rio do que muitos pensam, uma agress&atilde;o. A cirurgia previne doen&ccedil;as como o c&acirc;ncer e impede a reprodu&ccedil;&atilde;o - o que &eacute; muito importante em um mundo que j&aacute; n&atilde;o comporta tantos animais. Os c&atilde;es castrados ficam mais d&oacute;ceis e soci&aacute;veis, mas continuam sendo &oacute;timos para guarda e companhia. Para quem tem f&ecirc;meas, evita-se a gravidez indesejada. Para quem tem machos, livra-se das marca&ccedil;&otilde;es de territ&oacute;rio por meio do xixi.&nbsp;<br /><br /><strong>3&ordm; mandamento: cuide bem do seu bicho</strong><br /><br />Providenciar treinamento, socializa&ccedil;&atilde;o, dieta adequada e cuidados m&eacute;dicos para os pets vem em terceiro na lista de responsabilidades elaboradas pelo conselho americando. Essas orienta&ccedil;&otilde;es traduzem bem o quanto as rela&ccedil;&otilde;es humanas influenciam no bem-estar animal.<br /><br /><strong>4&ordm; mandamento: n&atilde;o torne o animal uma amea&ccedil;a</strong><br /><br />Em seguida na lista, est&aacute; n&atilde;o permitir que pets se transformem em amea&ccedil;a ou inc&ocirc;modo para a comunidade. &ldquo;A maioria dos bichos que preenche os abrigos ou acaba nas ruas chegou a essa situa&ccedil;&atilde;o porque uma pessoa falhou. Qualquer problema que um animal apresente &eacute; resultado de uma m&aacute; gest&atilde;o humana&rdquo;, diz o documento.&nbsp;<br /><br /><strong>5&ordm; mandamento: aten&ccedil;&atilde;o na hora de adotar</strong><br /><br />Por &uacute;ltimo, a responsabilidade de adquirir seu pet eticamente e de uma fonte confi&aacute;vel. Se for adotar, a indica&ccedil;&atilde;o &eacute; procurar centros especializados ou ONGs, que n&atilde;o s&oacute; apadrinham os bichinhos at&eacute; que encontrem um novo dono, mas tamb&eacute;m analisam as condi&ccedil;&otilde;es de infraestrutura do candidato a propriet&aacute;rio. Se for comprar, atente &agrave; credibilidade dos criadouros, que devem informar, em documento, a ra&ccedil;a, o sexo e a data de nascimento de cada c&atilde;o. Seu compromisso come&ccedil;a antes mesmo de levar seu animal para casa.</p>', '2014-01-02', 'Espaço Patas', '../img/content/dicas/thumbnail_1401257672.jpg', '../img/content/dicas/resize_1401257672.jpg'),
(3, 'Cuidados com seu pet no final do ano', 'Cuidados com seu pet no final do ano', '<p>Enfeites natalinos, viagens, encontros, festas. As festividades do final do ano s&atilde;o vividas geralmente por toda a fam&iacute;lia, o que inclui tamb&eacute;m os c&atilde;es e gatos, claro. Mas, como tudo o que envolve uma posse respons&aacute;vel, &eacute; preciso tomar alguns cuidados para que eles n&atilde;o sofram, seja com o barulho dos fotos de artif&iacute;cios do rev&eacute;illon, os excessos de restos da ceia do natal ou a fia&ccedil;&atilde;o da decora&ccedil;&atilde;o natalina. O Pernambuco.c&atilde;o ouviu o veterin&aacute;rio M&aacute;rcio Silva e reuniu algumas dicas.<br /><br /><strong>Fogos de artif&iacute;cio:</strong>&nbsp;o barulho das explos&otilde;es deixa os pets mais agitados e o risco de fuga aumenta nesta &eacute;poca. Para amenizar a situa&ccedil;&atilde;o, ele sugere que os donos coloquem pequenos tamp&otilde;es de algod&atilde;o no ouvido dos bichinhos, com todo cuidado para n&atilde;o exagerar. Outra sugest&atilde;o &eacute; mant&ecirc;-los em lugares calmos, como quartos fechados com ar-condicionado, por exemplo, durante a noite do dia 31. &ldquo;Geralmente, o animal corre para algum lugar para se esconder. Ent&atilde;o, se eles forem para um lugar seguro, com embaixo da cama, podem deix&aacute;-lo l&aacute;&rdquo;, explica. Caso o pet tiver algum tipo de fobia, &eacute; necess&aacute;rio que procure um especialista em comportamento animal para prescrever um calmante.<br /><br /><strong>Enfeites:</strong>&nbsp;Por curiosidade, muitos animais, principalmente os filhotes, adoram ''brincar'' com os enfeites natalinos, como bolinhas em cores vibrantes. Portanto, os donos devem preferir as cores neutras em seus enfeites, al&eacute;m de coloc&aacute;-los em lugares que n&atilde;o estejam no alcance do bichinho. Se por acaso, o pet ingerir um desses, &eacute; importante que se leve imediatamente a uma c&iacute;nica veterin&aacute;ria de emerg&ecirc;ncia.&ldquo;Estas situa&ccedil;&otilde;es geram obstru&ccedil;&atilde;o ou perfura&ccedil;&atilde;o no sistema digestivo. Por isso, o criador deve sempre ficar atento aos passos do seu c&atilde;o/gato&rdquo;, afirma Dr. Marcio.<br /><br /><strong>Pisca-pisca:</strong>&nbsp;Queimaduras ou choques el&eacute;tricos podem ser evitados com medidas simples como deixar os fios em lugares altos. O cuidado deve ser redobrado, principalmente, com filhotes de gatos, pois eles s&atilde;o muito brincalh&otilde;es e esses objetos sempre os atraem.<br /><br /><strong>Problemas gastrointestinais:</strong>&nbsp;Como as comidas dessa &eacute;poca s&atilde;o bastante gordurosas, n&atilde;o se deve oferecer nenhum tipo de alimento aos seu pet. O ideal &eacute; que seja reservado um local pr&oacute;prio para o seu bichinho fazer a pr&oacute;pria &ldquo;ceia de Natal&rdquo; dele, com a sua ra&ccedil;&atilde;o de todos os dias.&ldquo;Lembre-se de pedir &agrave;s suas visitas que n&atilde;o ofere&ccedil;am comida aos pets&rdquo;, lembra o veterin&aacute;rio.<br /><br /><strong>Viagens de carro:</strong>&nbsp;O dono que for passar o Natal ou o R&eacute;veillon fora da sua cidade e preferir levar o animal junto no carro, n&atilde;o tem problema. Se a viagem for longa, mais de 2h, &eacute; necess&aacute;rio que o animal esteja em jejum alimentar por pelo menos duas horas antes da viagem. &Eacute; importante, tamb&eacute;m, fazer paradas para que ele possa urinar e beber &aacute;gua.<br /><br /><strong>Hot&eacute;is para animais:</strong>&nbsp;S&atilde;o excelentes op&otilde;es para quem n&atilde;o quer ou n&atilde;o pode levar o pet para o passeio, mas o dono de conhecer bem o local onde for deixar seu animal. Al&eacute;m disso, &eacute; importante ficar atento, e deix&aacute;-lo vacinado, com a vermifuga&ccedil;&atilde;o em dia e com uma coleira anti-carrapatos, para evitar a contamina&ccedil;&atilde;o por parasitas. &ldquo;Em caso de animais que estejam em tratamento, o hotelzinho n&atilde;o &eacute; boa op&ccedil;&atilde;o. O melhor &eacute; deix&aacute;-lo com algum familiar ou internado&rdquo;, explica.<br /><br /><strong>Identifica&ccedil;&atilde;o:</strong>&nbsp;O barulho dos fogos de artif&iacute;cios e as agita&ccedil;&otilde;es das festas podem levar o seu pet a fugirem de casa. Portanto, a identifica&ccedil;&atilde;o &eacute; algo de extrema import&acirc;ncia para esses momentos. O uso de correntinhas presas com plaquinhas com o nome do pet e do tutor, e o telefone para contato, &eacute; uma medida simples, mas que &eacute; fundamental para o ter o seu animal de volta.</p>', '2012-12-23', 'Espaço Patas', '../img/content/dicas/thumbnail_1401258755.jpg', '../img/content/dicas/resize_1401258755.jpg'),
(4, 'Cinco dicas de Alexandre Rossi para cuidar do seu pet no Inverno.', 'Cinco dicas de Alexandre Rossi para cuidar do seu pet no Inverno.', '<p>Bruno Cesar Dias</p>\r\n<p>Enquanto n&oacute;s, humanos, tiramos o casaco do arm&aacute;rio s&oacute; de pensar na chegada do inverno, animais de estima&ccedil;&atilde;o aguardam a esta&ccedil;&atilde;o ansiosamente. Quem garante &eacute; Alexandre Rossi, 39 anos, zootecnista e especialista em comportamento animal, que ganhou fama com o quadro &ldquo;Dr. Pet&rdquo;, atra&ccedil;&atilde;o exibida na Record at&eacute; outubro do ano passado em que resolvia problemas entre donos e seus pets &ldquo;rebeldes&rdquo;.</p>\r\n<p>&ldquo;A maioria dos animais aguenta muito bem o frio, inclusive &eacute; a melhor &eacute;poca para eles para pr&aacute;ticas esportivas, ao contr&aacute;rio do ver&atilde;o, quando eles ficam extremamente cansados e sofrem com o calor.&rdquo;</p>\r\n<p>A chegada do inverno, portanto, vem bem a calhar para Rossi, &agrave;s voltas com a produ&ccedil;&atilde;o do novo &ldquo;Miss&atilde;o Pet&rdquo;, programa com estreia marcada para a pr&oacute;xima ter&ccedil;a (26), no canal fechado NatGeo. O formato segue a linha de &ldquo;Dr. Pet&rdquo;, mas com &ecirc;nfase no lado &ldquo;educativo&rdquo;: saem o cen&aacute;rio, o coletinho c&aacute;qui e a vira-lata Estopinha e entram cita&ccedil;&otilde;es bibliogr&aacute;ficas. &ldquo;Fiquei contente com o convite, pois o NatGeo &eacute; bem visto na &aacute;rea acad&ecirc;mica, e terei liberdade para ser mais espec&iacute;fico&rdquo;, festeja Rossi, que n&atilde;o se esquece de que estar&aacute; numa atra&ccedil;&atilde;o de televis&atilde;o. &ldquo;Tem coisas que eu poderia fazer parecer m&aacute;gica, mas s&atilde;o t&eacute;cnicas e procedimentos cient&iacute;ficos que eu poderei mostrar. &Eacute; uma linha que eu gosto, mas vai ter de dar resultado para continuar.&rdquo;</p>\r\n<p>Uma das armas para ganhar audi&ecirc;ncia j&aacute; podem ser percebidas nas chamadas promocionais do programa, com apelo ao inusitado. Al&eacute;m de c&atilde;es e gatos, o apresentador resolver&aacute; problemas comportamentais de animais como miniporco, ferret (o popular fur&atilde;o), elefante, tigre e at&eacute; macaco-prego. &ldquo;Kuta, a macaquinha do Emerson, jogador do Corinthians, por exemplo, n&atilde;o aceita trocar o quarto do atleta pelo dela, com &aacute;rvores e cordas constru&iacute;dos especialmente para o seu conforto.&rdquo;</p>\r\n<p>Com tantos pets &mdash; e t&atilde;o diferentes &mdash;, Rossi tem a preocupa&ccedil;&atilde;o de derrubar mitos na hora de ensinar cuidados com os mascotes.</p>\r\n<p>Pedimos, ent&atilde;o, cinco dicas para garantir o bem-estar dos c&atilde;es neste inverno. Veja abaixo:</p>\r\n<p><strong>1) Frio, amigo do pet</strong></p>\r\n<p>Os animais gostam de temperaturas baixas e pouco sofrem com a friagem. &ldquo;Em geral, c&atilde;es mais compridos, como o dachshund e o galgo, sentem mais frio do que os de forma mais esf&eacute;rica, como o bulldog e o poodle&rdquo;, explica Rossi. Cachorros de grande porte, como s&atilde;o bernardo e labrador, tamb&eacute;m passam muito bem pela esta&ccedil;&atilde;o. A preocupa&ccedil;&atilde;o deve ser com filhotes e idosos, que sentem mais o frio e ficam expostos &agrave;s doen&ccedil;as t&iacute;picas da &eacute;poca.</p>\r\n<p><strong>2) Tose, sem problemas</strong></p>\r\n<p>Pelagens mais densas e compridas ajudam na prote&ccedil;&atilde;o t&eacute;rmica dos c&atilde;es. Os que passam mais tempo em apartamentos e costumam fazer atividades f&iacute;sicas devem seguir a programa&ccedil;&atilde;o regular de tosas. Apenas os muito idosos e que ficam em &aacute;rea externas devem evitar ter os pelos cortados.</p>\r\n<p><strong>3) Proteger sem sufocar</strong></p>\r\n<p>Independentemente da pelagem, n&atilde;o precisa encher o pet de roupinhas. &ldquo;Quando eles est&atilde;o em movimento e fazendo exerc&iacute;cios, n&atilde;o h&aacute; necessidade, s&oacute; em casos muito espec&iacute;ficos&rdquo;, afirma Rossi. O importante &eacute; ajustar &agrave; esta&ccedil;&atilde;o os espa&ccedil;os de descanso: use revestimentos de borracha ou estrados para evitar que o ch&atilde;o do frio atravesse para a caminha e proteja o animal do vento, retirando-o das &aacute;reas com corrente de ar ou abertas.</p>\r\n<p><strong>4) Boca aberta nem sempre &eacute; sede</strong></p>\r\n<p>Preste aten&ccedil;&atilde;o na boca do cachorro, pois &eacute; por l&aacute; que se d&aacute; a troca de calor com o ambiente. Assim como no ver&atilde;o, &eacute; importante o animal trocar calor constantemente com o ambiente. &ldquo;A boca aberta pode at&eacute; significar sede, mas n&atilde;o &eacute; uma regra. Quietude e apatia, esses, sim, s&atilde;o os problemas.&rdquo; Fique atento se houver mudan&ccedil;as de comportamento.</p>\r\n<p><strong>5) De olho na balan&ccedil;a</strong></p>\r\n<p>Aproveite que os c&atilde;es t&ecirc;m mais disposi&ccedil;&atilde;o e os estimule a praticarem exerc&iacute;cios f&iacute;sicos. Isso deve ser feito tamb&eacute;m nas casas, com brinquedos interativos nos quais se colocam ra&ccedil;&atilde;o para for&ccedil;a-los a se mexerem. Devido aos exerc&iacute;cios, eles talvez possam at&eacute; comer um pouco mais, mas nada que exija refor&ccedil;o na quantidade de comida. Acompanhe o peso e a gordura corp&oacute;rea de cada animal em todas as esta&ccedil;&otilde;es.</p>', '2014-05-27', 'Veja', '../img/content/dicas/thumbnail_1401258852.jpg', '../img/content/dicas/resize_1401258852.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `duvida`
--

CREATE TABLE IF NOT EXISTS `duvida` (
  `duv_codigo` int(11) NOT NULL auto_increment,
  `duv_pergunta` text,
  `duv_resposta` text,
  `duv_data` date default NULL,
  PRIMARY KEY  (`duv_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `duvida`
--

INSERT INTO `duvida` (`duv_codigo`, `duv_pergunta`, `duv_resposta`, `duv_data`) VALUES
(1, 'Qual o horário de funcionamento do Espaço Patas?', 'Todos os dias das 7h às 18h (saída de hospedagem somente até as 18h).', '2013-11-26'),
(2, 'Quais são os valores para hospedar o meu cão?', 'Diárias de R$60,00 (dia de semana) e R$80,00 (final de semana e feriado).', '2013-12-02'),
(3, 'Quais os procedimentos iniciais para o meu cão se hospedar no Espaço Patas?', 'Para assegurar o bem estar, a saúde e a higiene de todos os animais, exigimos: Carteira de vacinação em dia contra raiva, aplicação de anti-parasitário, V8 ou V10; recomendável vacina giardia e tosse canina; Vermifugação a cada 3 meses; As fêmeas não podem estar no cio; Cães possessivos ou muito agressivos só serão aceitos após uma avaliação prévia.', '2013-12-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `emp_codigo` int(11) NOT NULL auto_increment,
  `emp_descricao` text,
  `emp_src_thumb` text,
  `emp_src_large` text,
  PRIMARY KEY  (`emp_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`emp_codigo`, `emp_descricao`, `emp_src_thumb`, `emp_src_large`) VALUES
(2, '<p>O Espa&ccedil;o Patas &eacute; um Resort e Spa Pet sendo uma solu&ccedil;&atilde;o em hospedagem e recrea&ccedil;&atilde;o animal. Com uma &aacute;rea de 12.000 m2, contamos com uma estrutura completa permitindo aos c&atilde;es praticarem e aproveitarem atividades das mais variadas, e dando aos donos uma melhor alternativa para o cuidado de seu c&atilde;o com mais tranquilidade, comodidade e seguran&ccedil;a.</p>\r\n<p>Contamos com instala&ccedil;&otilde;es modernas, dois tipos de baias (simples e vip), monitores treinados, acompanhamento veterin&aacute;rio, brinquedos interativos, piscina, grandes &aacute;reas livres al&eacute;m de uma loja completa com ra&ccedil;&otilde;es e acess&oacute;rios e o TaxiDog, um ve&iacute;culo especialmente preparado para buscar e levar o seu c&atilde;o &agrave; sua casa sempre que voc&ecirc; precisar. Trabalhamos com o conceito de hospedagem livre, onde o c&atilde;o fica a maior parte do dia fora das baias participando das atividades pr&eacute; programadas, aproveitando melhor a estadia sem causar nenhum tipo de stress ao animal.</p>\r\n<p>Para deixar os donos ainda mais tranquilos, o Espa&ccedil;o Patas possui um sistema de monitoramento online 24 horas e oferece . Assim, sempre que quiser, o dono pode conferir o que seu c&atilde;o est&aacute; fazendo atrav&eacute;s de c&acirc;meras instaladas em todos os nossos ambientes.</p>\r\n<h2>ROTINA DOS H&Oacute;SPEDES:</h2>\r\n<ul class="listRotinas">\r\n<li>Socializa&ccedil;&atilde;o com os companheiros;</li>\r\n<li>Brincadeiras com recreacionista;</li>\r\n<li>Hora do almo&ccedil;o;</li>\r\n<li>Descanso;</li>\r\n<li>Caminhadas;</li>\r\n<li>Pr&aacute;tica de Agility;</li>\r\n<li>Nata&ccedil;&atilde;o (opcional);</li>\r\n<li>Banho (opcional);</li>\r\n<li>Alimenta&ccedil;&atilde;o;</li>\r\n<li>Hora de dormir.</li>\r\n</ul>\r\n<h2>REGRAS PARA HOSPEDAGEM:</h2>\r\n<ul class="listRegras">\r\n<li>Para assegurar o bem estar, a sa&uacute;de e a higiene de todos os animais, exigimos:</li>\r\n<li>Carteira de vacina&ccedil;&atilde;o em dia contra raiva, giard&iacute;ase, tosse canina, V8 ou V10;</li>\r\n<li>Vermifuga&ccedil;&atilde;o a cada 3 meses;</li>\r\n<li>As f&ecirc;meas n&atilde;o podem estar no cio;</li>\r\n<li>C&atilde;es possessivos ou muito agressivos s&oacute; ser&atilde;o aceitos ap&oacute;s uma avalia&ccedil;&atilde;o pr&eacute;via.</li>\r\n</ul>', '../img/content/empresa/thumbnail_1385961016.jpg', '../img/content/empresa/resize_1385961016.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `eve_codigo` int(11) NOT NULL auto_increment,
  `eve_titulo` text,
  `eve_chamada` text,
  `eve_descricao` text,
  `eve_data` date default NULL,
  `eve_destaque` int(11) default NULL,
  `eve_src_thumb` text,
  `eve_src_large` text,
  PRIMARY KEY  (`eve_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`eve_codigo`, `eve_titulo`, `eve_chamada`, `eve_descricao`, `eve_data`, `eve_destaque`, `eve_src_thumb`, `eve_src_large`) VALUES
(2, '1ª Festa Cãonina Espaço Patas', 'Cães e proprietários trajados a carater para o grande casório. A cerimônia terá início às 17h regada de muitas brincadeiras, diversão, comidinhas típicas e petiscos para todos.', '<p>C&atilde;es e propriet&aacute;rios trajados a carater para o grande cas&oacute;rio. A cerim&ocirc;nia ter&aacute; in&iacute;cio &agrave;s 17h regada de muitas brincadeiras, divers&atilde;o, comidinhas t&iacute;picas e petiscos para todos.</p>\r\n<p><strong>Confira o que rolou nesse dia na galeria de fotos.</strong></p>', '2013-06-22', 1, '../img/content/eventos/thumbnail_1391574693.jpg', '../img/content/eventos/resize_1391574693.jpg'),
(3, 'Inauguração Espaço Patas', ' A festa de Inauguração do Espaço Patas foi demais!!! Obrigada a todos que compareceram!!!', '<p>A festa de Inaugura&ccedil;&atilde;o do Espa&ccedil;o Patas foi demais!!! Obrigada a todos que compareceram!!!</p>', '2013-01-19', 0, '../img/content/eventos/thumbnail_1391576544.jpg', '../img/content/eventos/resize_1391576544.jpg'),
(4, 'Campanha "Adotar é o Bicho!"', 'O Espaço Patas juntamente com a loja Meu Amigo Pet, realizou no dia 21/04/2013, no parque do povo de Presidente Prudente, uma feira de adoção para o incentivo de minimizar o grande número de animais abandonados na cidade.', '<p>O Espa&ccedil;o Patas juntamente com a loja Meu Amigo Pet, realizou no dia 21/04/2013, no parque do povo de Presidente Prudente, uma feira de ado&ccedil;&atilde;o para o incentivo de minimizar o grande n&uacute;mero de animais abandonados na cidade.</p>', '2013-04-21', 0, '../img/content/eventos/thumbnail_1391576990.jpg', '../img/content/eventos/resize_1391576990.jpg'),
(5, 'Campanha 2014 "Adotar é o Bicho!"', 'O Espaço Patas junto com o grupo Adotar é o Bicho, realizou no dia 21/04/2013, no parque do povo de Presidente Prudente, uma feira de adoção para o incentivo de minimizar o grande número de animais abandonados na cidade.', '<p>Com a realiza&ccedil;&atilde;o do Espa&ccedil;o Patas, a 2&ordf; Feira de Ado&ccedil;&atilde;o "Adotar &eacute; o Bicho!" foi um SUCESSO!!! Aconteceu neste s&aacute;bado no parque do povo de Presidente Prudente, das 9h &agrave;s 12h, foram adotados mais de 30 animais (entre c&atilde;es e gatos). Agradecemos todos os amigos e parceiros que ajudaram nesta causa. O objetivo foi alcan&ccedil;ado com muita alegria e satisfa&ccedil;&atilde;o. Confira algumas fotos da feira... =))</p>', '2014-02-23', 1, '../img/content/eventos/thumbnail_1400179898.jpg', '../img/content/eventos/resize_1400179898.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `fot_codigo` int(11) NOT NULL auto_increment,
  `fot_legenda` text,
  `fot_ext` varchar(4) default NULL,
  `fot_ordem` bigint(20) default NULL,
  `not_codigo` int(11) default NULL,
  `eve_codigo` int(11) default NULL,
  `ani_codigo` int(11) default NULL,
  `ser_codigo` int(11) default NULL,
  `emp_codigo` int(11) default NULL,
  `gal_codigo` int(11) default NULL,
  PRIMARY KEY  (`fot_codigo`),
  KEY `noticia_foto` (`not_codigo`),
  KEY `evento_foto` (`eve_codigo`),
  KEY `aniversario_foto` (`ani_codigo`),
  KEY `servico_foto` (`ser_codigo`),
  KEY `empresa_foto` (`emp_codigo`),
  KEY `galeria_foto` (`gal_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=340 ;

--
-- Extraindo dados da tabela `foto`
--

INSERT INTO `foto` (`fot_codigo`, `fot_legenda`, `fot_ext`, `fot_ordem`, `not_codigo`, `eve_codigo`, `ani_codigo`, `ser_codigo`, `emp_codigo`, `gal_codigo`) VALUES
(9, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, 2, NULL),
(16, NULL, 'JPG', 16, NULL, 2, NULL, NULL, NULL, NULL),
(17, NULL, 'JPG', 17, NULL, 2, NULL, NULL, NULL, NULL),
(18, NULL, 'JPG', 18, NULL, 2, NULL, NULL, NULL, NULL),
(19, NULL, 'JPG', 19, NULL, 2, NULL, NULL, NULL, NULL),
(20, NULL, 'JPG', 20, NULL, 2, NULL, NULL, NULL, NULL),
(21, NULL, 'JPG', 21, NULL, 2, NULL, NULL, NULL, NULL),
(22, NULL, 'JPG', 22, NULL, 2, NULL, NULL, NULL, NULL),
(23, NULL, 'JPG', 23, NULL, 2, NULL, NULL, NULL, NULL),
(24, NULL, 'JPG', 24, NULL, 2, NULL, NULL, NULL, NULL),
(25, NULL, 'JPG', 25, NULL, 2, NULL, NULL, NULL, NULL),
(26, NULL, 'JPG', 26, NULL, 2, NULL, NULL, NULL, NULL),
(27, NULL, 'JPG', 27, NULL, 2, NULL, NULL, NULL, NULL),
(28, NULL, 'JPG', 28, NULL, 2, NULL, NULL, NULL, NULL),
(29, NULL, 'JPG', 29, NULL, 2, NULL, NULL, NULL, NULL),
(30, NULL, 'jpg', 30, NULL, 2, NULL, NULL, NULL, NULL),
(31, NULL, 'JPG', 31, NULL, 2, NULL, NULL, NULL, NULL),
(32, NULL, 'JPG', 32, NULL, 2, NULL, NULL, NULL, NULL),
(33, NULL, 'jpg', 33, NULL, 2, NULL, NULL, NULL, NULL),
(34, NULL, 'jpg', 34, NULL, 2, NULL, NULL, NULL, NULL),
(35, NULL, 'jpg', 35, NULL, 2, NULL, NULL, NULL, NULL),
(36, NULL, 'jpg', 1, NULL, 2, NULL, NULL, NULL, NULL),
(37, NULL, 'jpg', 0, NULL, 2, NULL, NULL, NULL, NULL),
(38, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, 2, NULL),
(39, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, 2, NULL),
(40, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, 2, NULL),
(41, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, 2, NULL),
(43, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(97, NULL, 'jpg', 4, NULL, 3, NULL, NULL, NULL, NULL),
(98, NULL, 'jpg', 5, NULL, 3, NULL, NULL, NULL, NULL),
(99, NULL, 'jpg', 6, NULL, 3, NULL, NULL, NULL, NULL),
(100, NULL, 'jpg', 7, NULL, 3, NULL, NULL, NULL, NULL),
(101, NULL, 'jpg', 8, NULL, 3, NULL, NULL, NULL, NULL),
(102, NULL, 'jpg', 1, NULL, 3, NULL, NULL, NULL, NULL),
(103, NULL, 'jpg', 50, NULL, 3, NULL, NULL, NULL, NULL),
(104, NULL, 'jpg', 43, NULL, 3, NULL, NULL, NULL, NULL),
(105, NULL, 'jpg', 9, NULL, 3, NULL, NULL, NULL, NULL),
(106, NULL, 'jpg', 10, NULL, 3, NULL, NULL, NULL, NULL),
(107, NULL, 'jpg', 11, NULL, 3, NULL, NULL, NULL, NULL),
(108, NULL, 'jpg', 46, NULL, 3, NULL, NULL, NULL, NULL),
(109, NULL, 'jpg', 12, NULL, 3, NULL, NULL, NULL, NULL),
(110, NULL, 'jpg', 13, NULL, 3, NULL, NULL, NULL, NULL),
(111, NULL, 'jpg', 14, NULL, 3, NULL, NULL, NULL, NULL),
(112, NULL, 'jpg', 15, NULL, 3, NULL, NULL, NULL, NULL),
(113, NULL, 'jpg', 16, NULL, 3, NULL, NULL, NULL, NULL),
(114, NULL, 'jpg', 2, NULL, 3, NULL, NULL, NULL, NULL),
(115, NULL, 'jpg', 17, NULL, 3, NULL, NULL, NULL, NULL),
(116, NULL, 'jpg', 18, NULL, 3, NULL, NULL, NULL, NULL),
(117, NULL, 'jpg', 3, NULL, 3, NULL, NULL, NULL, NULL),
(118, NULL, 'jpg', 19, NULL, 3, NULL, NULL, NULL, NULL),
(119, NULL, 'jpg', 20, NULL, 3, NULL, NULL, NULL, NULL),
(120, NULL, 'jpg', 21, NULL, 3, NULL, NULL, NULL, NULL),
(121, NULL, 'jpg', 22, NULL, 3, NULL, NULL, NULL, NULL),
(122, NULL, 'jpg', 23, NULL, 3, NULL, NULL, NULL, NULL),
(123, NULL, 'jpg', 45, NULL, 3, NULL, NULL, NULL, NULL),
(124, NULL, 'jpg', 0, NULL, 3, NULL, NULL, NULL, NULL),
(125, NULL, 'jpg', 24, NULL, 3, NULL, NULL, NULL, NULL),
(126, NULL, 'jpg', 25, NULL, 3, NULL, NULL, NULL, NULL),
(127, NULL, 'jpg', 26, NULL, 3, NULL, NULL, NULL, NULL),
(128, NULL, 'jpg', 27, NULL, 3, NULL, NULL, NULL, NULL),
(129, NULL, 'jpg', 28, NULL, 3, NULL, NULL, NULL, NULL),
(130, NULL, 'jpg', 29, NULL, 3, NULL, NULL, NULL, NULL),
(131, NULL, 'jpg', 30, NULL, 3, NULL, NULL, NULL, NULL),
(132, NULL, 'jpg', 31, NULL, 3, NULL, NULL, NULL, NULL),
(133, NULL, 'jpg', 32, NULL, 3, NULL, NULL, NULL, NULL),
(134, NULL, 'jpg', 33, NULL, 3, NULL, NULL, NULL, NULL),
(135, NULL, 'jpg', 34, NULL, 3, NULL, NULL, NULL, NULL),
(136, NULL, 'jpg', 47, NULL, 3, NULL, NULL, NULL, NULL),
(137, NULL, 'jpg', 35, NULL, 3, NULL, NULL, NULL, NULL),
(138, NULL, 'jpg', 36, NULL, 3, NULL, NULL, NULL, NULL),
(139, NULL, 'jpg', 44, NULL, 3, NULL, NULL, NULL, NULL),
(140, NULL, 'jpg', 37, NULL, 3, NULL, NULL, NULL, NULL),
(141, NULL, 'jpg', 49, NULL, 3, NULL, NULL, NULL, NULL),
(142, NULL, 'jpg', 38, NULL, 3, NULL, NULL, NULL, NULL),
(143, NULL, 'jpg', 39, NULL, 3, NULL, NULL, NULL, NULL),
(144, NULL, 'jpg', 48, NULL, 3, NULL, NULL, NULL, NULL),
(145, NULL, 'jpg', 40, NULL, 3, NULL, NULL, NULL, NULL),
(146, NULL, 'jpg', 41, NULL, 3, NULL, NULL, NULL, NULL),
(147, NULL, 'jpg', 42, NULL, 3, NULL, NULL, NULL, NULL),
(148, NULL, 'jpg', 0, NULL, NULL, NULL, NULL, NULL, 4),
(149, NULL, 'jpg', 1, NULL, NULL, NULL, NULL, NULL, 4),
(150, NULL, 'jpg', 2, NULL, NULL, NULL, NULL, NULL, 4),
(151, NULL, 'jpg', 3, NULL, NULL, NULL, NULL, NULL, 4),
(152, NULL, 'jpg', 4, NULL, NULL, NULL, NULL, NULL, 4),
(153, NULL, 'jpg', 5, NULL, NULL, NULL, NULL, NULL, 4),
(154, NULL, 'jpg', 6, NULL, NULL, NULL, NULL, NULL, 4),
(155, NULL, 'jpg', 7, NULL, NULL, NULL, NULL, NULL, 4),
(156, NULL, 'jpg', 8, NULL, NULL, NULL, NULL, NULL, 4),
(157, NULL, 'jpg', 9, NULL, NULL, NULL, NULL, NULL, 4),
(158, NULL, 'jpg', 10, NULL, NULL, NULL, NULL, NULL, 4),
(159, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(160, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(161, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(162, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(163, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(168, NULL, 'jpg', 11, NULL, NULL, NULL, NULL, NULL, 4),
(169, NULL, 'jpg', 12, NULL, NULL, NULL, NULL, NULL, 4),
(170, NULL, 'jpg', 13, NULL, NULL, NULL, NULL, NULL, 4),
(171, NULL, 'jpg', 14, NULL, NULL, NULL, NULL, NULL, 4),
(172, NULL, 'jpg', 15, NULL, NULL, NULL, NULL, NULL, 4),
(173, NULL, 'jpg', 16, NULL, NULL, NULL, NULL, NULL, 4),
(174, NULL, 'jpg', 17, NULL, NULL, NULL, NULL, NULL, 4),
(175, NULL, 'jpg', 18, NULL, NULL, NULL, NULL, NULL, 4),
(176, NULL, 'jpg', 19, NULL, NULL, NULL, NULL, NULL, 4),
(177, NULL, 'jpg', 20, NULL, NULL, NULL, NULL, NULL, 4),
(178, NULL, 'jpg', 21, NULL, NULL, NULL, NULL, NULL, 4),
(179, NULL, 'jpg', 22, NULL, NULL, NULL, NULL, NULL, 4),
(180, NULL, 'jpg', 23, NULL, NULL, NULL, NULL, NULL, 4),
(181, NULL, 'jpg', 24, NULL, NULL, NULL, NULL, NULL, 4),
(182, NULL, 'jpg', 25, NULL, NULL, NULL, NULL, NULL, 4),
(183, NULL, 'jpg', 26, NULL, NULL, NULL, NULL, NULL, 4),
(184, NULL, 'jpg', 27, NULL, NULL, NULL, NULL, NULL, 4),
(185, NULL, 'jpg', 28, NULL, NULL, NULL, NULL, NULL, 4),
(186, NULL, 'jpg', 29, NULL, NULL, NULL, NULL, NULL, 4),
(187, NULL, 'jpg', 30, NULL, NULL, NULL, NULL, NULL, 4),
(188, NULL, 'jpg', 31, NULL, NULL, NULL, NULL, NULL, 4),
(189, NULL, 'jpg', 32, NULL, NULL, NULL, NULL, NULL, 4),
(190, NULL, 'jpg', 33, NULL, NULL, NULL, NULL, NULL, 4),
(191, NULL, 'jpg', 34, NULL, NULL, NULL, NULL, NULL, 4),
(192, NULL, 'jpg', 35, NULL, NULL, NULL, NULL, NULL, 4),
(193, NULL, 'jpg', 36, NULL, NULL, NULL, NULL, NULL, 4),
(194, NULL, 'jpg', 37, NULL, NULL, NULL, NULL, NULL, 4),
(195, NULL, 'jpg', 38, NULL, NULL, NULL, NULL, NULL, 4),
(196, NULL, 'jpg', 39, NULL, NULL, NULL, NULL, NULL, 4),
(197, NULL, 'jpg', 40, NULL, NULL, NULL, NULL, NULL, 4),
(198, NULL, 'jpg', 41, NULL, NULL, NULL, NULL, NULL, 4),
(199, NULL, 'jpg', 42, NULL, NULL, NULL, NULL, NULL, 4),
(200, NULL, 'jpg', 43, NULL, NULL, NULL, NULL, NULL, 4),
(201, NULL, 'jpg', 44, NULL, NULL, NULL, NULL, NULL, 4),
(202, NULL, 'jpg', 45, NULL, NULL, NULL, NULL, NULL, 4),
(203, NULL, 'jpg', 46, NULL, NULL, NULL, NULL, NULL, 4),
(204, NULL, 'jpg', 47, NULL, NULL, NULL, NULL, NULL, 4),
(205, NULL, 'jpg', 48, NULL, NULL, NULL, NULL, NULL, 4),
(206, NULL, 'jpg', 49, NULL, NULL, NULL, NULL, NULL, 4),
(207, NULL, 'jpg', 50, NULL, NULL, NULL, NULL, NULL, 4),
(208, NULL, 'jpg', 51, NULL, NULL, NULL, NULL, NULL, 4),
(209, NULL, 'jpg', 52, NULL, NULL, NULL, NULL, NULL, 4),
(210, NULL, 'jpg', 53, NULL, NULL, NULL, NULL, NULL, 4),
(211, NULL, 'jpg', 54, NULL, NULL, NULL, NULL, NULL, 4),
(212, NULL, 'jpg', 55, NULL, NULL, NULL, NULL, NULL, 4),
(213, NULL, 'jpg', 57, NULL, NULL, NULL, NULL, NULL, 4),
(214, NULL, 'jpg', 58, NULL, NULL, NULL, NULL, NULL, 4),
(215, NULL, 'jpg', 59, NULL, NULL, NULL, NULL, NULL, 4),
(216, NULL, 'jpg', 60, NULL, NULL, NULL, NULL, NULL, 4),
(217, NULL, 'jpg', 61, NULL, NULL, NULL, NULL, NULL, 4),
(218, NULL, 'jpg', 62, NULL, NULL, NULL, NULL, NULL, 4),
(219, NULL, 'jpg', 56, NULL, NULL, NULL, NULL, NULL, 4),
(220, NULL, 'jpg', 1, NULL, 4, NULL, NULL, NULL, NULL),
(221, NULL, 'jpg', 2, NULL, 4, NULL, NULL, NULL, NULL),
(222, NULL, 'jpg', 3, NULL, 4, NULL, NULL, NULL, NULL),
(223, NULL, 'jpg', 4, NULL, 4, NULL, NULL, NULL, NULL),
(224, NULL, 'jpg', 5, NULL, 4, NULL, NULL, NULL, NULL),
(225, NULL, 'jpg', 6, NULL, 4, NULL, NULL, NULL, NULL),
(226, NULL, 'jpg', 7, NULL, 4, NULL, NULL, NULL, NULL),
(227, NULL, 'jpg', 8, NULL, 4, NULL, NULL, NULL, NULL),
(228, NULL, 'jpg', 9, NULL, 4, NULL, NULL, NULL, NULL),
(229, NULL, 'jpg', 10, NULL, 4, NULL, NULL, NULL, NULL),
(230, NULL, 'jpg', 11, NULL, 4, NULL, NULL, NULL, NULL),
(231, NULL, 'jpg', 12, NULL, 4, NULL, NULL, NULL, NULL),
(232, NULL, 'jpg', 13, NULL, 4, NULL, NULL, NULL, NULL),
(233, NULL, 'jpg', 14, NULL, 4, NULL, NULL, NULL, NULL),
(234, NULL, 'jpg', 15, NULL, 4, NULL, NULL, NULL, NULL),
(235, NULL, 'jpg', 16, NULL, 4, NULL, NULL, NULL, NULL),
(236, NULL, 'jpg', 17, NULL, 4, NULL, NULL, NULL, NULL),
(237, NULL, 'jpg', 18, NULL, 4, NULL, NULL, NULL, NULL),
(238, NULL, 'jpg', 19, NULL, 4, NULL, NULL, NULL, NULL),
(239, NULL, 'jpg', 20, NULL, 4, NULL, NULL, NULL, NULL),
(240, NULL, 'jpg', 21, NULL, 4, NULL, NULL, NULL, NULL),
(241, NULL, 'jpg', 22, NULL, 4, NULL, NULL, NULL, NULL),
(242, NULL, 'jpg', 23, NULL, 4, NULL, NULL, NULL, NULL),
(243, NULL, 'jpg', 24, NULL, 4, NULL, NULL, NULL, NULL),
(244, NULL, 'jpg', 25, NULL, 4, NULL, NULL, NULL, NULL),
(245, NULL, 'jpg', 35, NULL, 4, NULL, NULL, NULL, NULL),
(246, NULL, 'jpg', 26, NULL, 4, NULL, NULL, NULL, NULL),
(247, NULL, 'jpg', 27, NULL, 4, NULL, NULL, NULL, NULL),
(248, NULL, 'jpg', 28, NULL, 4, NULL, NULL, NULL, NULL),
(249, NULL, 'jpg', 29, NULL, 4, NULL, NULL, NULL, NULL),
(250, NULL, 'jpg', 30, NULL, 4, NULL, NULL, NULL, NULL),
(251, NULL, 'jpg', 31, NULL, 4, NULL, NULL, NULL, NULL),
(252, NULL, 'jpg', 0, NULL, 4, NULL, NULL, NULL, NULL),
(253, NULL, 'jpg', 32, NULL, 4, NULL, NULL, NULL, NULL),
(254, NULL, 'jpg', 33, NULL, 4, NULL, NULL, NULL, NULL),
(255, NULL, 'jpg', 34, NULL, 4, NULL, NULL, NULL, NULL),
(256, NULL, 'jpg', 11, NULL, 5, NULL, NULL, NULL, NULL),
(257, NULL, 'jpg', 12, NULL, 5, NULL, NULL, NULL, NULL),
(258, NULL, 'jpg', 13, NULL, 5, NULL, NULL, NULL, NULL),
(259, NULL, 'jpg', 4, NULL, 5, NULL, NULL, NULL, NULL),
(260, NULL, 'jpg', 14, NULL, 5, NULL, NULL, NULL, NULL),
(261, NULL, 'jpg', 2, NULL, 5, NULL, NULL, NULL, NULL),
(262, NULL, 'jpg', 15, NULL, 5, NULL, NULL, NULL, NULL),
(263, NULL, 'jpg', 5, NULL, 5, NULL, NULL, NULL, NULL),
(264, NULL, 'jpg', 6, NULL, 5, NULL, NULL, NULL, NULL),
(265, NULL, 'jpg', 16, NULL, 5, NULL, NULL, NULL, NULL),
(266, NULL, 'jpg', 17, NULL, 5, NULL, NULL, NULL, NULL),
(267, NULL, 'jpg', 8, NULL, 5, NULL, NULL, NULL, NULL),
(268, NULL, 'jpg', 3, NULL, 5, NULL, NULL, NULL, NULL),
(269, NULL, 'jpg', 18, NULL, 5, NULL, NULL, NULL, NULL),
(270, NULL, 'jpg', 7, NULL, 5, NULL, NULL, NULL, NULL),
(271, NULL, 'jpg', 9, NULL, 5, NULL, NULL, NULL, NULL),
(272, NULL, 'jpg', 19, NULL, 5, NULL, NULL, NULL, NULL),
(273, NULL, 'jpg', 20, NULL, 5, NULL, NULL, NULL, NULL),
(274, NULL, 'jpg', 1, NULL, 5, NULL, NULL, NULL, NULL),
(275, NULL, 'jpg', 21, NULL, 5, NULL, NULL, NULL, NULL),
(276, NULL, 'jpg', 10, NULL, 5, NULL, NULL, NULL, NULL),
(277, NULL, 'jpg', 22, NULL, 5, NULL, NULL, NULL, NULL),
(278, NULL, 'jpg', 23, NULL, 5, NULL, NULL, NULL, NULL),
(279, NULL, 'jpg', 0, NULL, 5, NULL, NULL, NULL, NULL),
(280, NULL, 'jpg', 24, NULL, 5, NULL, NULL, NULL, NULL),
(281, NULL, 'jpg', NULL, NULL, NULL, NULL, 2, NULL, NULL),
(282, NULL, 'jpg', NULL, NULL, NULL, NULL, 2, NULL, NULL),
(283, NULL, 'jpg', NULL, NULL, NULL, NULL, 2, NULL, NULL),
(284, NULL, 'jpg', NULL, NULL, NULL, NULL, 2, NULL, NULL),
(285, NULL, 'jpg', NULL, NULL, NULL, NULL, 2, NULL, NULL),
(286, NULL, 'jpg', NULL, NULL, NULL, NULL, 2, NULL, NULL),
(287, NULL, 'jpg', NULL, NULL, NULL, NULL, 2, NULL, NULL),
(288, NULL, 'jpg', NULL, NULL, NULL, NULL, 2, NULL, NULL),
(289, NULL, 'JPG', NULL, NULL, NULL, NULL, 2, NULL, NULL),
(290, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(291, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(292, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(293, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(294, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(295, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(296, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(297, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(298, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(299, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(300, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(301, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(302, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(303, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(304, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(305, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(306, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(307, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(308, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(309, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(310, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(311, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(312, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(313, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(314, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(315, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(316, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(317, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(318, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(319, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(320, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(321, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(322, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(323, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(324, NULL, 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(326, NULL, 'jpg', 15, NULL, 2, NULL, NULL, NULL, NULL),
(327, NULL, 'jpg', 3, NULL, 2, NULL, NULL, NULL, NULL),
(328, NULL, 'jpg', 4, NULL, 2, NULL, NULL, NULL, NULL),
(329, NULL, 'jpg', 5, NULL, 2, NULL, NULL, NULL, NULL),
(330, NULL, 'jpg', 2, NULL, 2, NULL, NULL, NULL, NULL),
(331, NULL, 'jpg', 6, NULL, 2, NULL, NULL, NULL, NULL),
(332, NULL, 'jpg', 7, NULL, 2, NULL, NULL, NULL, NULL),
(333, NULL, 'jpg', 8, NULL, 2, NULL, NULL, NULL, NULL),
(334, NULL, 'jpg', 9, NULL, 2, NULL, NULL, NULL, NULL),
(335, NULL, 'jpg', 10, NULL, 2, NULL, NULL, NULL, NULL),
(336, NULL, 'jpg', 11, NULL, 2, NULL, NULL, NULL, NULL),
(337, NULL, 'jpg', 12, NULL, 2, NULL, NULL, NULL, NULL),
(338, NULL, 'jpg', 13, NULL, 2, NULL, NULL, NULL, NULL),
(339, NULL, 'jpg', 14, NULL, 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `gal_codigo` int(11) NOT NULL auto_increment,
  `gal_titulo` text,
  `gal_descricao` text,
  `gal_src_thumb` text,
  `gal_src_large` text,
  PRIMARY KEY  (`gal_codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`gal_codigo`, `gal_titulo`, `gal_descricao`, `gal_src_thumb`, `gal_src_large`) VALUES
(4, 'Hóspedes', '<p>Os c&atilde;es se divertem aqui no Espa&ccedil;o Patas!</p>', '../img/content/albuns/thumbnail_1391578999.jpg', '../img/content/albuns/resize_1391578999.jpg'),
(5, 'Roupinhas & Fantasias', '<p>A moda canina muito divertida!</p>', '../img/content/albuns/thumbnail_1391579355.jpg', '../img/content/albuns/resize_1391579355.jpg'),
(6, 'Recreação', '<p>Novas amizades surgem rapidamente no Espa&ccedil;o Patas!</p>', '../img/content/albuns/thumbnail_1400356752.jpg', '../img/content/albuns/resize_1400356752.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeriavideo`
--

CREATE TABLE IF NOT EXISTS `galeriavideo` (
  `gv_codigo` int(11) NOT NULL auto_increment,
  `gv_titulo` text,
  `gv_descricao` text,
  `gv_include` text,
  PRIMARY KEY  (`gv_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `new_codigo` int(11) NOT NULL auto_increment,
  `new_nome` text,
  `new_email` text,
  `new_data` date default NULL,
  PRIMARY KEY  (`new_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Extraindo dados da tabela `newsletter`
--

INSERT INTO `newsletter` (`new_codigo`, `new_nome`, `new_email`, `new_data`) VALUES
(1, 'Marcio', 'contato@agenciayama.com.br', '2013-11-28'),
(2, 'Teste', 'teste@teste.com.br', '2013-12-03'),
(3, 'Márcio Kazuo Yamazaki', 'marcioyamazaki@gmail.com', '2013-12-04'),
(4, 'Eder', 'ederhonorato22@yahoo.com.br', '2013-12-05'),
(5, 'amanda cestaro', 'amandacestarofr@gmail.com', '2013-12-05'),
(6, 'Vania Moreno', 'vaniamoreno89@gmail.com', '2013-12-06'),
(7, 'Lucia Helena Silva', 'crecheanita@terra.com.br', '2013-12-07'),
(8, 'debora witter rocha tiezzi', 'dwtiezzi@hotmail.com', '2013-12-09'),
(9, 'tauane', 'tauanebarbosa19@hotmail.com', '2013-12-09'),
(10, 'Mariana', 'mahungaroo@gmail.com', '2013-12-09'),
(11, 'Thaís Tinti', 'thaistinti@gmail.com', '2013-12-12'),
(12, 'Sauria Salomão', 'sauria.salomao@hotmail.com', '2013-12-14'),
(13, 'Aline Guidetti', 'alinneaguidetti@gmail.com', '2014-01-14'),
(14, 'thaily', 'thailyc@gmail.com', '2014-01-16'),
(15, 'Roberta Brandão Balanco', 'beta_panter@hotmail.com', '2014-01-21'),
(16, 'RJ', 'marketing@patrocinar.com.br', '2014-01-23'),
(17, 'SP', 'naoresponda@maladiretta.com', '2014-02-06'),
(18, 'Diego Costa', 'diego18_costa@hotmail.com', '2014-02-06'),
(19, 'SP', 'vendas@ecofour.com.br', '2014-02-13'),
(20, 'Roberto Contreras Sanches', 'beto.mamba@hotmail.com', '2014-02-14'),
(21, 'IARA', 'iara@fct.unesp.br', '2014-02-16'),
(22, 'Daisa Ribeiro', 'daisaribeiro@hotmail.com', '2014-02-26'),
(23, 'Eduardo', 'durusso@gmail.com', '2014-03-04'),
(24, 'Daiane Cristina', 'daycrferreira@gmail.com', '2014-03-08'),
(25, 'Ana Paula', 'anapaula.oshika@hotmail.com', '2014-03-22'),
(26, 'Daniele', 'daniendres@hotmail.com', '2014-04-04'),
(27, 'Gabriel', 'gabrieltadeums@hotmail.com', '2014-04-10'),
(28, 'Silvana Araujo', 'silvanacsaraujo@hotmail.com.br', '2014-04-15'),
(29, 'Lilian Cirineu de Oliveira', 'lilian_cirineu@hotmail.com', '2014-05-21'),
(30, 'Soraia', 'soraia.silva22@hotmail.com', '2014-05-27'),
(31, 'beatriz', 'bia_brambila@hotmail.com', '2014-06-11'),
(32, 'Nome:Ana Paula', 'anynha.186@hotmail.com', '2014-06-13'),
(33, 'Vinicius', 'vinicius831@icloud.com', '2014-06-13'),
(34, 'Marô Cazeiro Padilha', 'padilha4ms@uol.com.br', '2014-06-18'),
(35, 'rachel s. wrege', 'rachelsw72@terra.com.br', '2014-06-19'),
(36, 'Josefa  Casado Abreu', 'financeiro@sudesterevestimentos.com.br', '2014-06-23'),
(37, 'Cibele Mello', 'cypsic@yahoo.com.br', '2014-07-14'),
(38, 'CICERO DE OLIVEIRA SANTOS', 'cicero@hotelcampobelo.com.br', '2014-07-19'),
(39, 'MT', 'wagner__augusto2014@hotmail.com', '2014-07-25'),
(40, 'MT', 'cuiabaesporteclube@gmail.com', '2014-07-27'),
(41, 'MT', 'faleconosco@cabcuiaba.com.br', '2014-07-27'),
(42, 'MT', 'webmaster@abuse.net', '2014-07-28'),
(43, 'MT', 'webmaster@cuiabaarquidiocese.net', '2014-07-29'),
(44, 'MT', 'abuse+law@cloudflare.com', '2014-08-06'),
(45, 'MT', 'folhamax@gmail.com', '2014-08-12'),
(46, 'Alessandra Maria Bueno', 'am-bueno2012@bol.com.br', '2014-08-12'),
(47, 'Pr', 'curtidas_facebook@hotmail.com', '2014-08-14'),
(48, 'SP', 'contato@divulgamais.com.br', '2014-08-17'),
(49, 'MT', 'invasaohacking@gmail.com', '2014-08-18'),
(50, 'BAsdswssssBA', 'atendimento@oxentevirtual.com.br', '2014-08-27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `not_codigo` int(11) NOT NULL auto_increment,
  `not_titulo` text,
  `not_chamada` text,
  `not_descricao` text,
  `not_data` date default NULL,
  `not_fonte` text,
  `not_destaque` int(11) default NULL,
  `not_src_thumb` text,
  `not_src_large` text,
  PRIMARY KEY  (`not_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiro`
--

CREATE TABLE IF NOT EXISTS `parceiro` (
  `par_codigo` int(11) NOT NULL auto_increment,
  `par_nome` text,
  `par_url` text,
  `par_src` text,
  `par_destaque` int(11) default NULL,
  PRIMARY KEY  (`par_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `preco`
--

CREATE TABLE IF NOT EXISTS `preco` (
  `pre_codigo` int(11) NOT NULL auto_increment,
  `pre_descricao` text,
  `pre_peso` text,
  `pre_valor` text,
  `ser_codigo` int(11) default NULL,
  PRIMARY KEY  (`pre_codigo`),
  KEY `servico_preco` (`ser_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `res_codigo` int(11) NOT NULL auto_increment,
  `res_nome` text,
  `res_email` text,
  `res_de` date default NULL,
  `res_para` date default NULL,
  `res_telefone` varchar(40) default NULL,
  `res_celular` varchar(40) default NULL,
  `res_endereco` text,
  `res_cep` int(11) default NULL,
  `res_cidade` text,
  `res_estado` varchar(2) default NULL,
  `res_nomeAnimal` text,
  `res_sexoAnimal` text,
  `res_racaAnimal` text,
  `res_idadeAnimal` text,
  `res_mensagem` text,
  `res_dtcad` date NOT NULL,
  PRIMARY KEY  (`res_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`res_codigo`, `res_nome`, `res_email`, `res_de`, `res_para`, `res_telefone`, `res_celular`, `res_endereco`, `res_cep`, `res_cidade`, `res_estado`, `res_nomeAnimal`, `res_sexoAnimal`, `res_racaAnimal`, `res_idadeAnimal`, `res_mensagem`, `res_dtcad`) VALUES
(2, 'Márcio Yamazaki', 'contato@agenciayama.com.br', '2013-12-22', '2013-12-29', '(18) 3222-2064', '(18) 99143-2999', 'Prudente de Moraes, 473', 19020370, 'Presidente Prudente', 'SP', 'Bia', 'Fêmea', 'Poodle', '12 anos', '<p>F&eacute;rias!!!</p>', '2013-11-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE IF NOT EXISTS `servico` (
  `ser_codigo` int(11) NOT NULL auto_increment,
  `ser_nome` text,
  `ser_chamada` text,
  `ser_descricao` text,
  `ser_regra` text,
  `ser_src_thumb` text,
  `ser_src_large` text,
  PRIMARY KEY  (`ser_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`ser_codigo`, `ser_nome`, `ser_chamada`, `ser_descricao`, `ser_regra`, `ser_src_thumb`, `ser_src_large`) VALUES
(1, 'Hospedagem', '<p>Aqui, o seu c&atilde;o tem um servi&ccedil;o completo de hospedagem com total seguran&ccedil;a e qualidade.</p>', '<p>Aqui, o seu c&atilde;o tem um servi&ccedil;o completo de hospedagem com total seguran&ccedil;a e qualidade. Nossa estrutura conta com amplos passeadores e baias confort&aacute;veis que garantem f&eacute;rias inesquec&iacute;veis para o seu amigo e d&atilde;o tranquilidade para que voc&ecirc; possa desfrutar de seus compromissos sem nenhuma preocupa&ccedil;&atilde;o</p>', '<ul>\r\n<li>Para assegurar o bem estar, a sa&uacute;de e a higiene de todos os animais, exigimos:</li>\r\n<li>Carteira de vacina&ccedil;&atilde;o em dia contra raiva, giard&iacute;ase, tosse canina, V8 e V10;</li>\r\n<li>Vermifuga&ccedil;&atilde;o a cada 3 meses;</li>\r\n<li>As f&ecirc;meas n&atilde;o podem estar no cio;</li>\r\n<li>C&atilde;es possessivos ou muito agressivos s&oacute; ser&atilde;o aceitos ap&oacute;s uma avalia&ccedil;&atilde;o pr&eacute;via.</li>\r\n</ul>', '../img/content/servicos/thumbnail_1385961097.jpg', '../img/content/servicos/resize_1385961097.jpg'),
(2, 'Recreação', '<p>Atividades programadas com a supervis&atilde;o de uma recreacionista devidamente preparado o dia todo.</p>', '<p>Para voc&ecirc; que anda muito ocupado, a nossa creche &eacute; a solu&ccedil;&atilde;o ideal. Aqui o seu c&atilde;o tem atividades programadas para o dia todo, sempre com a supervis&atilde;o de um recreacionista devidamente preparado. Com o nosso servi&ccedil;o de creche, o seu amigo n&atilde;o precisa mais ficar sozinho enquanto voc&ecirc; trabalha ou se organiza com seus compromissos.</p>', '<ul>\r\n<li>Para assegurar o bem estar, a sa&uacute;de e a higiene de todos os animais, exigimos:</li>\r\n<li>Carteira de vacina&ccedil;&atilde;o em dia contra raiva, giard&iacute;ase, tosse canina, V8 e V10;</li>\r\n<li>Vermifuga&ccedil;&atilde;o a cada 3 meses;</li>\r\n<li>As f&ecirc;meas n&atilde;o podem estar no cio;</li>\r\n<li>C&atilde;es possessivos ou muito agressivos s&oacute; ser&atilde;o aceitos ap&oacute;s uma avalia&ccedil;&atilde;o pr&eacute;via.</li>\r\n</ul>', '../img/content/servicos/thumbnail_1400356726.jpg', '../img/content/servicos/resize_1400356726.jpg'),
(4, 'SPA & Reabilitação', '<p>Exerc&iacute;cios e atividades f&iacute;sicas monitoradas para recupera&ccedil;&atilde;o de traumas ou emagrecimento.</p>', '<p>Se o seu c&atilde;o necessita de exerc&iacute;cios e atividades f&iacute;sicas monitoradas para recupera&ccedil;&atilde;o de traumas ou emagrecimento, nosso servi&ccedil;o de reabilita&ccedil;&atilde;o coloca a sua disposi&ccedil;&atilde;o profissionais capacitados para atender &agrave;s suas necessidades, al&eacute;m de uma estrutura completa, incluindo piscina, para a pronta recupera&ccedil;&atilde;o do seu amigo.</p>', '<ul>\r\n<li>Para assegurar o bem estar, a sa&uacute;de e a higiene de todos os animais, exigimos:</li>\r\n<li>Carteira de vacina&ccedil;&atilde;o em dia contra raiva, giard&iacute;ase, tosse canina, V8 e V10;</li>\r\n<li>Vermifuga&ccedil;&atilde;o a cada 3 meses;</li>\r\n<li>As f&ecirc;meas n&atilde;o podem estar no cio;</li>\r\n<li>C&atilde;es possessivos ou muito agressivos s&oacute; ser&atilde;o aceitos ap&oacute;s uma avalia&ccedil;&atilde;o pr&eacute;via.</li>\r\n</ul>', '../img/content/servicos/thumbnail_1385965559.jpg', '../img/content/servicos/resize_1385965559.jpg'),
(6, 'Taxi Dog', '<p>Ve&iacute;culo especial e climatizado para levar e trazer seu cachorro com conforto e seguran&ccedil;a.</p>', '<p>Dispomos de um ve&iacute;culo especial e climatizado para levar e trazer seu cachorro com conforto e seguran&ccedil;a, na cidade de Presidente Prudente e regi&atilde;o.</p>', '', '../img/content/servicos/thumbnail_1385966287.jpg', '../img/content/servicos/resize_1385966287.jpg'),
(7, 'Banho e Tosa', '<p>Usamos produtos hipoalerg&ecirc;nicos de primeira linha que realmente tratam, hidratam os p&ecirc;los...</p>', '<p>Usamos produtos hipoalerg&ecirc;nicos de primeira linha que realmente tratam, hidratam os p&ecirc;los e d&atilde;o todo o embelezamento necess&aacute;rio para o seu cachorrinho.</p>\r\n<p>Nossos profissionais treinados tratam seu c&atilde;o com carinho e com muito cuidado, oferecendo um servi&ccedil;o de qualidade. Temos diferente tipos de banho e tosa para o seu pet:</p>\r\n<p><strong>Banho convencional, Banho com hidrata&ccedil;&atilde;o, Banho ofur&ocirc;, Banho tropical, Tosa na tesoura, Tosa com adaptador, Escova&ccedil;&atilde;o de dentes, Limpeza de ouvidos, Corte de unhas, Chapinha.</strong></p>', '', '../img/content/servicos/thumbnail_1385966489.jpg', '../img/content/servicos/resize_1385966489.jpg'),
(8, 'Asilo', '<p>Estrutura para o seu amigo idoso, com baias individuais internas com cama e cobertor...</p>', '<p>O Espa&ccedil;o Patas possui a estrutura ideal para o seu fiel amigo idoso. Nossas baias individuais internas possuem cama com cobertorzinho para manter os cachorros confort&aacute;veis e aquecidos e temos uma rotina di&aacute;ria equilibrada. Os cuidados s&atilde;o redobrados, pois c&atilde;es idoso t&ecirc;m necessidades e h&aacute;bitos diferente dos jovens: geralmente gostam de lugares mais tranquilos, tem um ritmo e um passo mais lento, sente mais frio e precisam de muito mais carinho e aten&ccedil;&atilde;o.</p>', '', '../img/content/servicos/thumbnail_1385966895.jpg', '../img/content/servicos/resize_1385966895.jpg'),
(14, 'Consulta Comportamental', '<p>Um profissional ir&aacute; at&eacute; a sua casa ensinar a melhorar o comportamento de seu animal.</p>', '<p>Um profissional ir&aacute; at&eacute; a sua casa ensinar a melhorar o comportamento de seu animal.</p>', '', '../img/content/servicos/thumbnail_1400182965.jpg', '../img/content/servicos/resize_1400182965.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usu_codigo` int(11) NOT NULL auto_increment,
  `usu_nome` varchar(40) default NULL,
  `usu_login` text,
  `usu_senha` text,
  PRIMARY KEY  (`usu_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usu_codigo`, `usu_nome`, `usu_login`, `usu_senha`) VALUES
(1, 'Administrador', 'espacopatas', 'ep2014');

-- --------------------------------------------------------

--
-- Estrutura da tabela `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `vid_codigo` int(11) NOT NULL auto_increment,
  `vid_titulo` text,
  `vid_data` date default NULL,
  `vid_descricao` text,
  `vid_include` text,
  `ser_codigo` int(11) default NULL,
  PRIMARY KEY  (`vid_codigo`),
  KEY `servico_video` (`ser_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `aniversario_foto` FOREIGN KEY (`ani_codigo`) REFERENCES `aniversario` (`ani_codigo`),
  ADD CONSTRAINT `empresa_foto` FOREIGN KEY (`emp_codigo`) REFERENCES `empresa` (`emp_codigo`),
  ADD CONSTRAINT `evento_foto` FOREIGN KEY (`eve_codigo`) REFERENCES `evento` (`eve_codigo`),
  ADD CONSTRAINT `noticia_foto` FOREIGN KEY (`not_codigo`) REFERENCES `noticia` (`not_codigo`),
  ADD CONSTRAINT `servico_foto` FOREIGN KEY (`ser_codigo`) REFERENCES `servico` (`ser_codigo`);

--
-- Restrições para a tabela `preco`
--
ALTER TABLE `preco`
  ADD CONSTRAINT `servico_preco` FOREIGN KEY (`ser_codigo`) REFERENCES `servico` (`ser_codigo`);

--
-- Restrições para a tabela `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `servico_video` FOREIGN KEY (`ser_codigo`) REFERENCES `servico` (`ser_codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
