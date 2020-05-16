<?php


if (! function_exists('page_title'))
{
	function page_title($title)
	{
		$endtitle =config('app.name');

		if ($title ==='')
	    {
			return $endtitle;
		}
		else
		{
		return $title.'|'.$endtitle;
	    }
	}
}