<?php

if (php_sapi_name() == "cli") {
	
    $config = array(
        'mysql' => array(
			'h' => 'localhost'
			,'u' => 'root'
			,'B' => 'mysql'
		)
		,'test' => array(
			'h' => 'localhost'
			,'u' => 'root'
			,'B' => 'test'
		)
    );
	
	if(!file_exists('dump')){
		mkdir('dump');
	}	
	
    $file = 'dump' . DIRECTORY_SEPARATOR . date('Y.m.d.H.i.s').'.sql';
	
	if((!isset($config)) || sizeof($config)==0){
		die(PHP_EOL."Please edit \$config var");
	}
    echo "Choise your option, between 1 and ".sizeof($config);
	
	$i = 1;
	foreach($config as $key => $val){	
		echo PHP_EOL.($i)." -> ".($key);
		$i++;
	}
    echo PHP_EOL."Your choice: ";
    echo PHP_EOL;
    $handle = fopen ("php://stdin","r");
    $choice = fgets($handle);
	
	
	
	$i = 1;
	foreach($config as $item){	
		if($i == intval($choice)){
			$cmd = 'mysqldump ';
			foreach($item as $key => $val){
				if($key == 'p'){
					$cmd .= ' -'.$key.$val;
				}
				else {
					$cmd .= ' -'.$key.' '.$val;
				}				
			}
			PRINT $cmd.' > '.$file;
			
			exec($cmd.' > '.$file);			
			break;
		}	
		$i++;
	}
	
    if(file_exists($file)){
        echo PHP_EOL."Ok, file: ";
        echo PHP_EOL.$file;
    }
    echo PHP_EOL;
}