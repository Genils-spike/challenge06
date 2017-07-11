<?php  
	function caesar(string $message, int $k){
		$result = "";
		$maj_limit = 90 - $k;
		$min_limit = 122 - $k;

		for ($i=0; $i <strlen($message) ; $i++) { 
			$ascii = ord($message[$i]);

			if($ascii > 64 && $ascii < 91){

				if($ascii > $maj_limit){
					$result .= chr(65 + (90 - $ascii));
				}
				else{
					$result .= chr($ascii + $k);
				}
			}
			elseif($ascii > 96 && $ascii < 123){

				if($ascii > $min_limit){
					$result .= chr(97 + (122 - $ascii));
				}
				else{
					$result .= chr($ascii + $k);
				}
			}
			else{
				$result .= $message[$i];
			}
		}

		return $result;
	}
?>