<?php 

class TitleCase
{
	public function make_title_case($title)
	{
		$title_in_array = explode(" ", $title);
		$i = 0;
		foreach ($title_in_array as $word) {
			$word[0] = strtoupper($word[0]);
			$title_in_array[$i] = $word;
		}
		return implode(" ", $title_in_array);

	}
}
 ?>