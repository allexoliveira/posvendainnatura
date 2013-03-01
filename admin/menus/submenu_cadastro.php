<?php
return array(
	array(
		'disabled'  => ($multimarca != 't'),
		'link'		=> 'marca_cadastro.php',
		'descr'		=> 'Cadastro de Marcas',
		'titulo'	=> 'Marcas',
	),
	'Produto' => array(
		'itens' => array(
			array(
				'fabrica'	=> 87,
				'link'		=> '#',
				'descr'		=> 'Cadastro de linhas de produtos',
				'titulo'	=> 'Linhas',
			),
			array(
				'fabrica'   => 87,
				'link'		=> '#',
				'descr'		=> 'Cadastro de fam�lias de produtos',
				'titulo'	=> 'Fam�lias',
			),
			array(
				'fabrica_no'=> 87,
				'link'		=> 'linha_cadastro.php',
				'descr'		=> 'Cadastro de linhas de produtos',
				'titulo'	=> 'Linhas',
			),
			array(
				'fabrica_no'=> 87,
				'link'		=> 'familia_cadastro.php',
				'descr'		=> 'Cadastro de fam�lias de produtos',
				'titulo'	=> 'Fam�lias',
			),
			array(
				'fabrica'	=> 87,
				'link'		=> '#',
				'titulo'	=> 'Produtos',
				'descr'		=> 'Cadastro de produtos acabados',
			),
			array(
				'fabrica_no'=> 87,
				'link'		=> 'produto_cadastro.php',
				'descr'		=> 'Cadastro de produtos acabados',
				'titulo'	=> 'Produtos',
			),
			array(
				'fabrica'   => 87,
				'link'		=> '#',
				'descr'		=> 'Cadastro da lista b�sica (pe�as que comp�e o produto)',
				'titulo'	=> 'Lista B�sica',
			),
			array(
				'fabrica_no'=> 87,
				'link'		=> 'lbm_cadastro.php',
				'descr'		=> 'Cadastro da lista b�sica (pe�as que comp�e o produto)',
				'titulo'	=> 'Lista B�sica',
			),
		),
	),
	'Pe�as' => array(
		'itens' => array(
			array(
				'link'		=> 'peca_cadastro.php',
				'descr'		=> 'Cadastro de pe�as e componentes',
				'titulo'	=> 'Pe�as',
			),
			array(
				'link'		=> 'preco_cadastro.php',
				'descr'		=> 'Cadastro manual dos pre�os das pe�as',
				'titulo'	=> 'Pre�os',
			),
		),
	),
	array(
		'link'		=> 'posto_cadastro.php',
		'descr'		=> 'Cadastro de postos autorizados',
		'titulo'	=> 'Postos',
	),
);

