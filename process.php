<?php

    $function = $_POST['function'];
    
    $log = array();
    
    switch($function) {
    
		case('getState'):
			if(file_exists('chat.txt')){
				$lines = file('chat.txt');
			}
			$log['state'] = count($lines); 
			break;	

		case('update'):
			$state = $_POST['state'];
			
			if(file_exists('chat.txt')){
				$file = fopen('chat.txt',"r") or die("failed to create file");
			
				$text= array();
				$log['state'] = count($file);
				for($i = 0; $i < 3; $i++){
					$line = fgets($file);
					array_push($text, $line);
				}
				$log['text'] = $text; 
			}
			else{
				$log['state'] = $state;
				$log['text'] = false;
			}
		  
			break;

		case('send'):
			$alpha = htmlentities(strip_tags($_POST['alpha']));
			$beta = htmlentities(strip_tags($_POST['beta']));
			$gamma = htmlentities(strip_tags($_POST['gamma']));
			$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

			$txt = "<span>Alpha</span>" . $alpha . "\n" ."<span>Beta</span>" . $beta . "\n" ."<span>Gamma</span>" . $gamma . "\n";
			fwrite(fopen('chat.txt', 'w'), $txt); 
			break;

    }
    
    echo json_encode($log);

?>