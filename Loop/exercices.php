<?php  
	function list_of_numbers(int $n1, int $n2){
		$list = "<ul>";

		while($n1 < $n2){
			$sqrt = sqrt($n1);

			if($n1 % 2 == 0 && fmod($sqrt, 1) == 0){
				$list .= "<li class=\"pair square\">$n1</li>";
			}
			elseif($n1 % 2 > 0 && fmod($sqrt, 1) == 0){
				$list .= "<li class=\"impair square\">$n1</li>";
			}
			elseif($n1 % 2 == 0){
				$list .= "<li class=\"pair\">$n1</li>";
			}
			else{				
				$list .= "<li class=\"impair\">$n1</li>";
			}
			$n1++;
		}

		$list .= "</ul>";
		return $list;
	}

	function numbers_gap(array $tab){
		$result = 0;

		for ($i=0; $i < count($tab) - 1 ; $i++) { 

			if($tab[$i] > $tab[$i + 1]){
				$gap = ($tab[$i] - $tab[$i + 1]);

				if($result < $gap){
					$result = $gap;
				}				
			}
			else{
				$gap = ($tab[$i +1] - $tab[$i]);

				if($result < $gap){
					$result = $gap;
				}
			}
		}

		return "le plus grand écart est de $result";
	}

	function fork_game(int $num){
		
	}
?>