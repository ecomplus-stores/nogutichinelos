<?php 

$keywords	= 'Sandálias de palha masculinas';
$desc		= 'As Sandálias de palha masculinas fornecidas pela Noguti têm o melhor padrão de qualidade que você pode buscar no mercado.';
$keyfrases	= '';
$keyregiao	= 'Sandálias de palha masculinas';
$file		= 'sandalias-de-palha-masculinas';

$linkLoja	= 'https://nogutichinelos.com.br/todososprodutos';
$linkPinterest	= 'imagem_pinterest';

$title		= 'Sandálias de palha masculinas';
$text_title	= '<p>As <strong>Sandálias de palha masculinas</strong> são cada vez mais procuradas no mercado, mas, por quê? Elas são feitas de material natural, o que é uma ótima escolha. Elas são ideais para utilização em ambientes mais casuais, seja em momentos de descanso ou lazer, como em ambientes caseiros, praias, campos, etc. Quem opta por conforto e estilo em seus momentos de descanso e lazer tem nas <strong>Sandálias de palha masculinas</strong> a melhor opção.</p>

<p>Mas, com quem você pode adquirir <strong>Sandálias de palha masculinas</strong>? a <a class="tm-redirecionamento" href="https://nogutichinelos.com.br">Noguti Chinelos</a> é a resposta certa, quem escolhe nossos produtos está optando por poder contar com estilo e design inovador em seus pés, tendo qualidade e durabilidade que o cliente merece. Estes calçados podem ser mais delicados e muitos confortáveis e temos inúmeros modelos para qualquer idade, seja adulto, idoso ou criança, homem ou mulher. Contamos com uma variedade de cores ou elementos decorativos que podem compor ainda mais sua escolha de sapato.</p>';

$text_title02	= '<p><strong>Sandálias de palha masculinas</strong>: Por que comprar com a <a class="tm-redirecionamento" href="https://nogutichinelos.com.br">Noguti Chinelos</a>?</p>

<ul>
	<li>Porque prezamos pela qualidade de todos os nossos produtos</li>
	<li>Estamos sempre seguindo as tendências de moda do mercado</li>
	<li>Estamos mais de 30 anos no mercado</li>
</ul>

<p>O processo de fabricação das nossas <strong>Sandálias de palha masculinas</strong> exige menos energia e resultam em menos emissões de gases de efeito estufa. Comprar de uma empresa que tem esse comprometimento com meio ambiente e ainda entrega tudo da melhor maneira possível? É com a gente. Venha nos conhecer, estamos disponíveis tanto virtualmente, quanto presencial e os nossos canais de comunicação, redes sociais, estão prontos para conversar com você e entender a sua necessidade para te entregar um calçado maravilhoso e com a sua cara. Cor, tamanho e tudo mais, aqui pode escolher. Não perca essa oportunidade de adquirir por preço bom.</p>';

$subtitulo    = 'Sandálias de palha masculinas: Escolhendo a melhor empresa';
$text_subtitle	= '<p><strong>Sandálias de palha masculinas</strong> é sinônimo de conforto, qualidade e preço baixo é aqui no <a class="tm-redirecionamento" href="https://nogutichinelos.com.br">Noguti Chinelos</a>. Desde 1980, estamos no mercado para oferecer ao cliente o que ele merece. Nossa localização é Rua José Dias de Araújo, 93 Vila Ribeirópolis Registro SP, mas se ficar muito longe para você, temos a opção de compra online para maior comodidade e conforto. Slides, pantufas, chinelos calçados de cores lisas, animal print, neon, poás e entre tantos outros produtos lindos e que combinam com qualquer situação em que você calça-los. Aliando a tecnologia à tranquilidade de escolher onde quiser e com facilidade, temos o nosso Whatsapp que é o número <a class="tm-whats"href="https://api.whatsapp.com/send?phone=551338226391">13 3822-6391</a> para te ajudar na hora da compra. Tudo isto para ajudar o consumidor a escolher o que quiser por um preço justo. Venha conferir as novidades em nossas redes sociais, no Instagram, estamos no Instagram @nogutichinelos e no Facebook como Noguti.</p>

<p>Em nosso site, você pode encontrar ofertas e opções para diferentes gostos e públicos, encontre o modelo ideal para a ocasião certa. Estamos sempre antenados na moda e optando por produtos com alta qualidade e com padrão de moda para todas as faixas-etárias da família e com preços que cabem em todos os bolsos. Não perca tempo e venha nos conhecer, mesmo que seja online. Estamos te esperando e queremos fazer parte da sua rotina mais confortável. Venha conhecer as nossas <strong>Sandálias de palha masculinas</strong>.</p>';

$json =  json_encode(
	array(
		"file_name"			=> basename($_SERVER["REQUEST_URI"]),
		"keywords"			=> $keywords,
		"description"		=> $desc,
		"keyfrases"			=> $keyfrases,
		"keyregiao"			=> $keyregiao,
		"title"				=> $title,
		"text_title"		=> $text_title,
		"text_title02"		=> $text_title02,
		"subtitle"			=> $subtitulo,
		"text_subtitle"		=> $text_subtitle,
		"linkLoja"			=> $linkLoja,
		"linkPinterest"		=> $linkPinterest,
	));

	echo $json;
?>