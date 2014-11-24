<?php 

class TitleCase
{

	public function make_title_case($title)
	{
		$small_words = array("And", "Or", "The", "A", "An", "But");

		$capitalized_title = explode(" ", ucwords(strtolower($title)));
		foreach ($capitalized_title as $key => $word) {
			if($key == 0)
			{
				continue;
			}
			if(in_array($word, $small_words))
			{
				$capitalized_title[$key] = strtolower($word);
			}
		}
		return implode(" ", $capitalized_title);
	}
}
 ?>