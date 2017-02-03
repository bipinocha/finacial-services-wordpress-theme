<html>
    <head>
        <?php wp_head(); ?>        
    </head>

    <body> 
        <div class="top-1">
            <div class="container">This is top container</div>
        </div>
        <div class="top-2 top-bg">
            <div class="container">
                
		<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php wp_nav_menu(array('theme_location'=>'header-menu')); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
                        
                

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                    <?php
                    if ( function_exists( 'loan_logo' ) ) {
                        loan_logo();
	}
                    ?></a>
                </div><!--
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>   -->             

            </div>
        </div>
        <div class="top-3">
            <div class="container">
                adsadasd
            </div>
            
        </div>
        <div class="top-4">
            
        </div>
