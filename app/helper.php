<?php


if (! function_exists('page_title'))
{
	fucntion page_title($title)
	{
		$endtitle = 'UPB-developer';

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