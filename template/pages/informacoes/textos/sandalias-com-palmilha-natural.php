<?php 

$keywords	= 'Sandálias com palmilha natural';
$desc		= 'Na hora de escolher um fornecedor de Sandálias com palmilha natural busque pela melhor opção, Noguti, a resposta ideal.';
$keyfrases	= '';
$keyregiao	= 'Sandálias com palmilha natural';
$file		= 'sandalias-com-palmilha-natural';

$linkLoja	= 'https://nogutichinelos.com.br/todososprodutos';
$linkPinterest	= 'imagem_pinterest';

$title		= 'Sandálias com palmilha natural';
$text_title	= '<p>Por que <strong>Sandálias com palmilha natural</strong> devem ser usadas por você? Pois além de prezar pelo conforto, o meio-ambiente agradece, pois durante sua produção é emitido menos gases para atmosfera, além de ser um material renovável, biodegradável e geralmente colhido de forma sustentável. Nossa empresa quer que o cliente tenha qualidade e estilo ao calçar.</p>

<p>As <strong>Sandálias com palmilha natural</strong> são um item indispensável de moda para quem quer estar na moda, mas não deseja abandonar a comodidade de calçar algo que não incomode, tenha seus pés protegidos em ambientes descontraídos ou até mesmo em casa. Pense bem na hora de escolher e venha para nossa loja conhecer os modelos que temos.</p>

<p><strong>Sandálias com palmilha natural</strong>: Quais as vantagens de comprar este produto com a gente?</p>';

$text_title02	= '<ul>
	<li>Prezamos pelo meio-ambiente. Desde a fase da produção até o resultado final.</li>
	<li>Somos uma empresa que tem com pensamento agir transparente com os nossos clientes</li>
	<li>Temos produtos que seguem estilo e a moda do mercado</li>
</ul>

<p><strong>Sandálias com palmilha natural</strong>: Escolha a empresa que pense no melhor para você</p>

<p>Cada vez mais a demanda por pantufas confeccionadas de palha aumenta. Desde os anos 1960 a moda vem se transformando, onde o estilo hippie é valorizado e o conforto passa a ser um ponto chave para a forma como as pessoas se vestem. Os calçados de palha combinam o conforto, casualidade e estilo para se tornar uma opção excelente para estar em seu pé em diversos momentos.</p>

<p>As <strong>Sandálias com palmilha natural</strong> são itens de conforto e bem-estar para quem calça, podendo ser confeccionados em diferentes modelos para abranger uma enorme gama de momentos e pessoas. Conte com a <a class="tm-redirecionamento" href="https://nogutichinelos.com.br">Noguti Chinelos</a>, somos uma empresa que surgiu em 1980 com um objetivo, criar soluções personalizadas e com designs incríveis para o conforto e estética de calçados. Fornecendo chinelos com diferentes modelos e estéticas, a nossa empresa sempre busca inovação através da moda e criando estilos que combinam com você.</p>

<p><strong>Sandálias com palmilha natural</strong>: pés confortáveis</p>

<p>As <strong>Sandálias com palmilha natural</strong> são sinônimo de conforto, qualidade e preço baixo aqui na <a class="tm-redirecionamento" href="https://nogutichinelos.com.br">Noguti Chinelos</a>. Desde 1980, estamos no mercado para oferecer ao cliente o que ele merece. Nossa localização é Rua José Dias de Araújo, 93 Vila Ribeirópolis Registro SP, mas se ficar muito longe para você, temos a opção de compra online para maior comodidade e conforto. Slides, pantufas, chinelos calçados de cores lisas, animal print, neon, poás e entre tantos outros produtos lindos e que combinam com qualquer situação em que você os calçar. Aliando a tecnologia à tranquilidade de escolher onde quiser e com facilidade, temos o nosso Whatsapp que é o número <a class="tm-whats"href="https://api.whatsapp.com/send?phone=551338226391">13 3822-6391</a> para te ajudar na hora da compra. Tudo isto para ajudar o consumidor a escolher o que quiser por um preço justo. Venha conferir as novidades em nossas redes sociais, no Instagram, estamos no Instagram @nogutichinelos e no Facebook como Noguti.</p>

<p>Em nosso site você pode encontrar ofertas e opções para diferentes gostos e públicos, encontre o modelo ideal para a ocasião certa. Estamos sempre antenados na moda e optando por produtos com alta qualidade e com padrão de moda para todas as faixas-etárias da família e com preços que cabem em todos os bolsos. Não perca tempo e venha nos conhecer, mesmo que seja online. Estamos te esperando e queremos fazer parte da sua rotina mais confortável e conhecer nossas <strong>Sandálias com palmilha natural</strong>.</p>';

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