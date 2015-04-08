<?php 
require APPPATH . '/third_party/PhpConsole/__autoload.php';
function d($title="",$content=""){
	switch (ENVIRONMENT){
		case 'development':	
			$handler = PhpConsole\Handler::getInstance();
			$handler->debug($title,$content);
		break;
	}
}