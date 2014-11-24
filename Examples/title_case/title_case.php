<?php 

class TitleCase
{

	public function make_title_case($title)
	{
		$small_words = array("And", "Or", "The", "A", "An", "But");

		$title = strtolower($title);
		$capitalized_title = explode(" ", ucwords($title));
		foreach ($capitalized_title as $key => $word) {
			if(in_array($word, $small_words)){
				$capitalized_title[$key] = strtolower($word);
			}
		}
		return implode(" ", $capitalized_title);
	}
}
 ?>