const  btnproductos  =  documento . getElementById ( 'btn-productos' ) ,
	  btnCerrarMenu  =  documento . getElementById ( 'btn-menu-cerrar' ) ,
	  cuadrícula  =  documento . getElementById ( 'cuadrícula' ) ,
	  contenedorEnlacesNav  =  documento . querySelector ( '#menu .contenedor-enlaces-nav' ) ,
	  contenedorSubCategorias  =  documento . querySelector ( '#grid .contenedor-subcategorias' ) ,
	  esDispositivoMovil  =  ( )  =>  ventana . innerWidth  <=  800 ;

btnproductos . addEventListener ( 'mouseover' ,  ( )  =>  {
	if ( ! esDispositivoMovil ( ) ) {
		cuadrícula . classList . agregar ( 'activo' ) ;
	}
} ) ;

cuadrícula . addEventListener ( 'mouseleave' ,  ( )  =>  {
	if ( ! esDispositivoMovil ( ) ) {
		cuadrícula . classList . eliminar ( 'activo' ) ;
	}
} ) ;

documento . querySelectorAll ( '#menu .categorias a' ) . forEach ( ( elemento )  =>  {
	elemento . addEventListener ( 'mouseenter' ,  ( e )  =>  {
		if ( ! esDispositivoMovil ( ) ) {
			documento . querySelectorAll ( '#menu .subcategoria' ) . forEach ( ( categoria )  =>  {
				categoria . classList . eliminar ( 'activo' ) ;
				if ( categoria . dataset . categoria  ==  e . target . dataset . categoria ) {
					categoria . classList . agregar ( 'activo' ) ;
				}
			} ) ;
		} ;
	} ) ;
} ) ;

// EventListeners para dispositivo móvil.
documento . querySelector ( '# btn-menu-barras' ) . addEventListener ( 'clic' ,  ( e )  =>  {
	e . preventDefault ( ) ;
	si ( contenedorEnlacesNav . classList . contiene ( 'activo' ) ) 
    {
		contenedorEnlacesNav . classList . eliminar ( 'activo' ) ;
		documento . querySelector ( 'cuerpo' ) . estilo . desbordamiento  =  'visible' ;
	}    {
		contenedorEnlacesNav . classList . agregar ( 'activo' ) ;
		documento . querySelector ( 'cuerpo' ) . estilo . desbordamiento  =  'oculto' ;
	}
} ) ;

// Click en boton de todos los departamentos (Para version movil).
btnproductos. addEventListener ( 'clic' ,  ( e )  =>  {
	e . preventDefault ( ) ;
	cuadrícula . classList . agregar ( 'activo' ) ;
	btnCerrarMenu . classList . agregar ( 'activo' ) ;
} ) ;

// Boton de regresar en el menu de categorias
documento . querySelector ( '#grid .categorias .btn-regresar' ) . addEventListener ( 'clic' ,  ( e )  =>  {
	e . preventDefault ( ) ;
	cuadrícula . classList . eliminar ( 'activo' ) ;
	btnCerrarMenu . classList . eliminar ( 'activo' ) ;
} ) ;

documento . querySelectorAll ( '#menu .categorias a' ) . forEach ( ( elemento )  =>  {
	elemento . addEventListener ( 'clic' ,  ( e )  =>  {
		if ( esDispositivoMovil ( ) ) {
			contenedorSubCategorias . classList . agregar ( 'activo' ) ;
			documento . querySelectorAll ( '#menu .subcategoria' ) . forEach ( ( categoria )  =>  {
				categoria . classList . eliminar ( 'activo' ) ;
				if ( categoria . dataset . categoria  ==  e . target . dataset . categoria ) {
					categoria . classList . agregar ( 'activo' ) ;
				}
			} ) ;
		}
	} ) ;
} ) ;

// Boton de regresar en el menu de categorias
documento . querySelectorAll ( '#grid .contenedor-subcategorias .btn-regresar' ) . forEach ( ( boton )  =>  {
	boton . addEventListener ( 'clic' ,  ( e )  =>  {
		e . preventDefault ( ) ;
		contenedorSubCategorias . classList . eliminar ( 'activo' ) ;
	} ) ;
} ) ;

btnCerrarMenu . addEventListener ( 'clic' ,  ( e ) =>  {
	e . preventDefault ( ) ;
	documento . querySelectorAll ( '#menu .activo' ) . forEach ( ( elemento )  =>  {
		elemento . classList . eliminar ( 'activo' ) ;
	} ) ;
	documento . querySelector ( 'cuerpo' ) . estilo . desbordamiento  =  'visible' ;
} ) ;
