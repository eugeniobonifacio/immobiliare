<?php
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @return void
 */
function your_prefix_register_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	$prefix = 'immobili_';

	$meta_boxes[] = array(
		'id' => 'immobile',
		'title' => __( 'Immobile', 'meta-box' ),
		'pages' => array( 'immobili' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			// TEXT
			array(
				'type' => 'heading',
				'name' => __( 'Dati dell\'immobile', 'meta-box' ),
				'id'   => 'datiheading', // Not used but needed for plugin
			),
			array(
				'name' => __( 'In vetrina', 'meta-box' ),
				'id'   => "{$prefix}vetrina",
				'type' => 'checkbox',
				'std'  => 0,
			),
			array(
				'name' => __( 'Vista mare/Vicinanza mare', 'meta-box' ),
				'id'   => "{$prefix}vistamare",
				'type' => 'checkbox',
				'std'  => 0,
			),
			array(
				'name' => __( 'No condominio', 'meta-box' ),
				'id'   => "{$prefix}nocondominio",
				'type' => 'checkbox',
				'std'  => 0,
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Rif', 'meta-box' ),
				'id'    => "{$prefix}rif",
				'type'  => 'text',
				'std'   => __( '0', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
			),
				array(
				// Field name - Will be used as label
				'name'  => __( 'Tipo immobile', 'meta-box' ),
				'id'    => "{$prefix}tipo",
				'type'  => 'text',
				'std'   => __( '0', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
			),
			array(
				'type' => 'heading',
				'name' => __( 'Stanze', 'meta-box' ),
				'desc' => __( 'Scegli di quali stanze è composto l\'immobile, se arredato e i metri quadrati', '{$prefix}' ),
				'id'   => 'stanzeheading', // Not used but needed for plugin
			),
			array(
				'name'     => __( 'Arredato', 'meta-box' ),
				'id'       => "{$prefix}arredato",
				'type'     => 'select',
				'options'  => array(
					'si' => __( 'si', 'meta-box' ),
					'non arredato' => __( 'non arredato', 'meta-box' ),
					'parzialmente arredato' => __( 'parzialmente arredato', 'meta-box' ),
				),
				'multiple'    => false,
				'std'         => '-',
				'placeholder' => __( 'Arredato?', 'meta-box' ),
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'mq', 'meta-box' ),
				'id'    => "{$prefix}mq",
				'type'  => 'number',
				'std'   => __( '0', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Locali', 'meta-box' ),
				'id'    => "{$prefix}locali",
				'type'  => 'number',
				'std'   => __( '2', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Ingresso', 'meta-box' ),
				'id'    => "{$prefix}ingresso",
				'type'  => 'text',
				'std'   => __( '0', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
			),
			array(
				'name'     => __( 'Soggiorno', 'meta-box' ),
				'id'       => "{$prefix}soggiorno",
				'type'     => 'select',
				'options'  => array(
					'si' => __( 'si', 'meta-box' ),
					'no' => __( 'no', 'meta-box' ),
					'doppio' => __( 'doppio', 'meta-box' ),
				),
				'multiple'    => false,
				'std'         => 'abitabile',
				'placeholder' => __( 'Seleziona il soggiorno/salone', 'meta-box' ),
			),
			array(
				'name'     => __( 'Cucina', 'meta-box' ),
				'id'       => "{$prefix}cucina",
				'type'     => 'select',
				'options'  => array(
					'abitabile' => __( 'abitabile', 'meta-box' ),
					'a vista' => __( 'a vista', 'meta-box' ),
					'angolo cottura' => __( 'angolo cottura', 'meta-box' ),
					'cucinotto' => __( 'cucinotto', 'meta-box' ),
					'semiabitabile' => __( 'semiabitabile', 'meta-box' ),
				),
				'multiple'    => false,
				'std'         => 'abitabile',
				'placeholder' => __( 'Seleziona la cucina', 'meta-box' ),
			),
			array(
				'name'     => __( 'Balcone', 'meta-box' ),
				'id'       => "{$prefix}balcone",
				'type'     => 'select',
				'options'  => array(
					'-' => __( '-', 'meta-box' ),
					'1' => __( '1', 'meta-box' ),
					'2' => __( '2', 'meta-box' ),
					'3' => __( '3', 'meta-box' ),
					'4' => __( '4', 'meta-box' ),
					'5' => __( '5', 'meta-box' ),
				),
				'multiple'    => false,
				'std'         => '-',
				'placeholder' => __( 'Seleziona il balcone', 'meta-box' ),
			),
			array(
				'name'     => __( 'Terrazzo', 'meta-box' ),
				'id'       => "{$prefix}terrazzo",
				'type'     => 'select',
				'options'  => array(
					'-' => __( '-', 'meta-box' ),
					'1' => __( '1', 'meta-box' ),
					'2' => __( '2', 'meta-box' ),
					'3' => __( '3', 'meta-box' ),
					'4' => __( '4', 'meta-box' ),
					'5' => __( '5', 'meta-box' ),
				),
				'multiple'    => false,
				'std'         => '-',
				'placeholder' => __( 'Seleziona il terrazzo', 'meta-box' ),
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Bagni', 'meta-box' ),
				'id'    => "{$prefix}bagni",
				'type'  => 'number',
				'std'   => __( '1', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Camere da letto', 'meta-box' ),
				'id'    => "{$prefix}cameredaletto",
				'type'  => 'number',
				'std'   => __( '0', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
			),
			array(
				'name' => __( 'Cantina', 'meta-box' ),
				'id'   => "{$prefix}cantina",
				'type' => 'checkbox',
				'std'  => 0,
			),
			array(
				'name' => __( 'Solaio', 'meta-box' ),
				'id'   => "{$prefix}solaio",
				'type' => 'checkbox',
				'std'  => 0,
			),
			array(
				'name' => __( 'Portico', 'meta-box' ),
				'id'   => "{$prefix}portico",
				'type' => 'checkbox',
				'std'  => 0,
			),

			array(
				'type' => 'heading',
				'name' => __( 'Confort / caratteristiche', 'meta-box' ),
				'desc' => __( 'Scegli le caratteristiche peculiari e di pregio dell\'immobile', '{$prefix}' ),
				'id'   => 'stanzeheading', // Not used but needed for plugin
			),
			array(
				'name' => __( 'Piscina', 'meta-box' ),
				'id'   => "{$prefix}piscina",
				'type' => 'checkbox',
				'std'  => 0,
			),
			array(
				'name' => __( 'Idromassaggio', 'meta-box' ),
				'id'   => "{$prefix}idromassaggio",
				'type' => 'checkbox',
				'std'  => 0,
			),
			array(
				'name' => __( 'Ascensore', 'meta-box' ),
				'id'   => "{$prefix}ascensore",
				'type' => 'checkbox',
				'std'  => 0,
			),
			array(
				'name' => __( 'Condizionatore', 'meta-box' ),
				'id'   => "{$prefix}condizionatore",
				'type' => 'checkbox',
				'std'  => 0,
			),
			array(
				'name' => __( 'Satellite', 'meta-box' ),
				'id'   => "{$prefix}satellite",
				'type' => 'checkbox',
				'std'  => 0,
			),
			array(
				'name'     => __( 'Giardino', 'meta-box' ),
				'id'       => "{$prefix}giardino",
				'type'     => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
					'di proprietà' => __( 'di proprietà', 'meta-box' ),
					'uso esclusivo' => __( 'uso esclusivo', 'meta-box' ),
					'condominiale' => __( 'condominiale', 'meta-box' ),
					'cortile privato' => __( 'cortile privato', 'meta-box' ),
					'cortile comune' => __( 'cortile comune', 'meta-box' ),
					'-' => __( '-', 'meta-box' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => '-',
				'placeholder' => __( 'Seleziona il giardino', 'meta-box' ),
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'mq giardino', 'meta-box' ),
				'id'    => "{$prefix}mqgiardino",
				'type'  => 'number',
				'std'   => __( '', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
			),



			array(
				'type' => 'heading',
				'name' => __( 'Valore', 'meta-box' ),
				'desc' => __( 'Prezzo dell\'immobile, il prezzo precedente se ha subito un ribasso, le spese condominiali', '{$prefix}' ),
				'id'   => 'valoreheading', // Not used but needed for plugin
			),
			
				array(
				// Field name - Will be used as label
				'name'  => __( 'Didascalia prezzo', 'meta-box' ),
				'id'    => "{$prefix}didascalia_prezzo",
				'type'  => 'text',
				'std'   => __( '0', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Prezzo precedente', 'meta-box' ),
				'id'    => "{$prefix}prezzo-precedente",
				'type'  => 'number',
				'std'   => __( '0', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
				'std' => 1,
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Prezzo', 'meta-box' ),
				'id'    => "{$prefix}prezzo",
				'type'  => 'number',
				'std'   => __( '0', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
				'std' => 1,
			),
 			array(
				// Field name - Will be used as label
				'name'  => __( 'Spese condominiali', 'meta-box' ),
				'id'    => "{$prefix}spese",
				'type'  => 'number',
				'std'   => __('0', 'meta-box' ),
				'clone' => false,
			),
			array(
				'name'     => __( 'Tipo spese', 'meta-box' ),
				'id'       => "{$prefix}spesetipo",
				'type'     => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
					'mensili' => __( 'mensili', 'meta-box' ),
					'annuali' => __( 'annuali', 'meta-box' ),
					'nessuna' => __( 'nessuna', 'meta-box' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => 'mensili',
				'placeholder' => __( 'Seleziona il tipo di spese', 'meta-box' ),
			),


			array(
				'type' => 'heading',
				'name' => __( 'Parcheggi', 'meta-box' ),
				'desc' => __( 'Posti auto, moto e bici, se interni, esterni o privati', '{$prefix}' ),
				'id'   => 'parcheggiheading', // Not used but needed for plugin
			),
			array(
				'name'     => __( 'Posto cicli,motocicli', 'meta-box' ),
				'id'       => "{$prefix}postomotocicli",
				'type'     => 'select',
				'options'  => array(
					'-' => __( '-', 'meta-box' ),
					'interno' => __( 'interno', 'meta-box' ),
					'esterno' => __( 'esterno', 'meta-box' ),
					'privato' => __( 'privato', 'meta-box' ),
					
					
				),
				'multiple'    => false,
				'std'         => 'esterno',
				'placeholder' => __( 'Seleziona il posto cicli motocicli', 'meta-box' ),
			),
			array(
				'name'     => __( 'Posto auto', 'meta-box' ),
				'id'       => "{$prefix}postoauto",
				'type'     => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
					'-' => __( '-', 'meta-box' ),
					'privato' => __( 'privato', 'meta-box' ),
					'box singolo' => __( 'box singolo', 'meta-box' ),
					'box doppio' => __( 'box doppio', 'meta-box' ),
					'box triplo' => __( 'box triplo', 'meta-box' ),
					'box quadruplo' => __( 'box quadruplo', 'meta-box' ),
					'posto auto coperto' => __( 'posto auto coperto', 'meta-box' ),
					'posto auto scoperto' => __( 'posto auto scoperto', 'meta-box' ),
					'posto auto condominiale' => __( 'posto auto condominiale', 'meta-box' ),
					'facilità di parcheggio' => __( 'facilità di parcheggio', 'meta-box' ),
					'posto interno' => __( 'posto interno', 'meta-box' ),
					'posto assegnato' => __( 'posto assegnato', 'meta-box' ),
					'garage' => __( 'garage', 'meta-box' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => 'piano terra',
				'placeholder' => __( 'Seleziona il posto auto', 'meta-box' ),
			),
      
			array(
				'type' => 'heading',
				'name' => __( 'Struttura dell\'immobile', 'meta-box' ),
				'desc' => __( 'Composizione e stato del palazzo o dell\'immobile', '{$prefix}' ),
				'id'   => 'palazzoheading', // Not used but needed for plugin
			),
			array(
				'name'     => __( 'Piano', 'meta-box' ),
				'id'       => "{$prefix}piano",
				'type'     => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
					'su due livelli' => __( 'su due livelli', 'meta-box' ),
					'su più livelli' => __( 'su più livelli', 'meta-box' ),
					'interrato' => __( 'interrato', 'meta-box' ),
					'semi interrato' => __( 'semi interrato', 'meta-box' ),
					'piano terra' => __( 'piano terra', 'meta-box' ),
					'piano rialzato' => __( 'piano rialzato', 'meta-box' ),
					'1' => __( '1', 'meta-box' ),
					'2' => __( '2', 'meta-box' ),
					'3' => __( '3', 'meta-box' ),
					'4' => __( '4', 'meta-box' ),
					'5' => __( '5', 'meta-box' ),
					'6' => __( '6', 'meta-box' ),
					'7' => __( '7', 'meta-box' ),
					'8' => __( '8', 'meta-box' ),
					'9' => __( '9', 'meta-box' ),
					'10' => __( '10', 'meta-box' ),
					'piano alto' => __( 'piano alto', 'meta-box' ),
					'ultimo' => __( 'ultimo', 'meta-box' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => 'piano terra',
				'placeholder' => __( 'Seleziona il piano', 'meta-box' ),
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Numero piani', 'meta-box' ),
				'id'    => "{$prefix}numeropiani",
				'type'  => 'number',
				'std'   => __( '1', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
			),
			array(
				'name'     => __( 'Stato', 'meta-box' ),
				'id'       => "{$prefix}stato",
				'type'     => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
					'nuovo' => __( 'nuovo', 'meta-box' ),
					'in costruzione' => __( 'in costruzione', 'meta-box' ),
					'ristrutturato' => __( 'ristrutturato', 'meta-box' ),
					'ottimo' => __( 'ottimo', 'meta-box' ),
					'buono' => __( 'buono', 'meta-box' ),
					'discreto' => __( 'discreto', 'meta-box' ),
					'sufficiente' => __( 'sufficiente', 'meta-box' ),
					'da sistemare' => __( 'da sistemare', 'meta-box' ),
					'da ristrutturare' => __( 'da ristrutturare', 'meta-box' ),
					'abitabile' => __( 'abitabile', 'meta-box' ),
					'occupato' => __( 'occupato', 'meta-box' ),
					'edificabile' => __( 'edificabile', 'meta-box' ),
					'al grezzo' => __( 'al grezzo', 'meta-box' ),
					'in ristrutturazione' => __( 'in ristrutturazione', 'meta-box' ),
					'da completare' => __( 'da completare', 'meta-box' ),
					'rifiniture di lusso' => __( 'rifiniture di lusso', 'meta-box' ),
					'affittato' => __( 'affittato', 'meta-box' ),
					'altro' => __( 'altro', 'meta-box' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => 'usato',
				'placeholder' => __( 'Seleziona lo stato', 'meta-box' ),
			),
			array(
				'name'     => __( 'Riscaldamento', 'meta-box' ),
				'id'       => "{$prefix}riscaldamento",
				'type'     => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
					'autonomo' => __( 'autonomo', 'meta-box' ),
					'autonomo a pavimento' => __( 'autonomo a pavimento', 'meta-box' ),
					'centralizzato' => __( 'centralizzato', 'meta-box' ),
					'centralizzato con contacalorie' => __( 'centralizzato con contacalorie', 'meta-box' ),
					'assente' => __( 'assente', 'meta-box' ),
					'pompa di calore' => __( 'pompa di calore', 'meta-box' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => 'autonomo',
				'placeholder' => __( 'Seleziona il riscaldamento', 'meta-box' ),
			),
			array(
				'name'     => __( 'Tipo di riscaldamento', 'meta-box' ),
				'id'       => "{$prefix}tiporiscaldamento",
				'type'     => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
					'metano' => __( 'metano', 'meta-box' ),
					'gasolio' => __( 'gasolio', 'meta-box' ),
					'gpl' => __( 'gpl', 'meta-box' ),
					'legna' => __( 'legna', 'meta-box' ),
					'misto' => __( 'misto', 'meta-box' ),
					'elettrico' => __( 'elettrico', 'meta-box' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => 'metano',
				'placeholder' => __( 'Seleziona il tipo di riscaldamento', 'meta-box' ),
			),
			
			array(
				// Field name - Will be used as label
				'name'  => __( 'APE', 'meta-box' ),
				'id'    => "{$prefix}ape",
				'type'  => 'text',
				'std'   => __( '', 'meta-box' ),
				'clone' => false,
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Anno di costruzione', 'meta-box' ),
				'id'    => "{$prefix}anno",
				'type'  => 'number',
				'std'   => __( '', 'meta-box' ),
				'clone' => false,
				'step' => 1,
			),
			array(
				'type' => 'heading',
				'name' => __( 'Gallery', 'meta-box' ),
				'desc' => __( 'Selezione multipla della galleria delle foto dell\'immobile', '{$prefix}' ),
				'id'   => 'galleryheading', // Not used but needed for plugin
			),
			array(
				'name'             => __( 'Galleria immagini', 'meta-box' ),
				'id'               => "{$prefix}galleria",
				'type'             => 'image',
			),
			array(
				'type' => 'heading',
				'name' => __( 'Allegati (solo PDF)', 'meta-box' ),
				'desc' => __( 'Allegati quali planimetrie, capitolati,  progetti, certificazioni e altro', '{$prefix}' ),
				'id'   => 'allegatiheading', // Not used but needed for plugin
			),
			array(
				'name'             => __( 'File PDF da allegare', 'meta-box' ),
				'id'               => "{$prefix}allegati",
				'type'             => 'file_advanced',
				'max_file_uploads' => 5,
			),
			array(
				'type' => 'heading',
				'name' => __( 'Planimetria', 'meta-box' ),
				'desc' => __( 'Allega le foto delle planimetrie', '{$prefix}' ),
				'id'   => 'planimetriaheading', // Not used but needed for plugin
			),
			array(
				'name' => __( 'Planimetria', 'meta-box' ),
				'id'   => "{$prefix}planimetria",
				'type' => 'image',
			),
			array(
				'type' => 'heading',
				'name' => __( 'Video e Virtual Tour', 'meta-box' ),
				'desc' => __( 'Seleziona il video dopo averlo caricato su YouTube e specifica il Virtual Tour completo di link', '{$prefix}' ),
				'id'   => 'videoheading', // Not used but needed for plugin
			),
			array(
				'name'  => __( 'Video YouTube', 'meta-box' ),
				'id'    => "{$prefix}video",
				'type'  => 'oembed',
			),
			array(
				'name'  => __( 'Link Virtual Tour', 'meta-box' ),
				'id'    => "{$prefix}virtualtour",
				'type' => 'text',
				'std' => __( '', 'meta-box' ),
			),
			array(
				'type' => 'heading',
				'name' => __( 'Mappa', 'meta-box' ),
				'desc' => __( 'Mappa ed ubicazione dell\'immobile', '{$prefix}' ),
				'id'   => 'mappaheading', // Not used but needed for plugin
			),
			array(
				'id' => "{$prefix}address",
				'name' => __( 'Indirizzo', 'meta-box' ),
				'type' => 'text',
				'std' => __( '', 'meta-box' ),
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Zona', 'meta-box' ),
				'id'    => "{$prefix}zona",
				'type'  => 'text',
				'std'   => __( '0', 'meta-box' ),
				'clone' => false,
				'min'  => 0,
				'step' => 1,
			),
			array(
				'name' => __( 'Geolocalizzazione', 'meta-box' ),
				'id'    => "{$prefix}loc",
				'std' => '45.8197170,8.8284430',
				'style' => 'width: 500px; height: 500px',
				'type'  => 'map',
				'address_field' => "{$prefix}address", 
			),
		)
	);
	return $meta_boxes;
}