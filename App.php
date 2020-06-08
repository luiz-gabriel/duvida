<?php
	
	class App
	{
		
		public function execute(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';

			$url = ucfirst($url);
			$url.="Controller";
			if(file_exists('Controllers/'.$url.'.php')){
				$className = 'Controllers\\'.$url;
				$controler = new $className;
				$controler->execute();
			}else{
				die("Não existe esse controlador!");
			}
		}
	}
	
?>