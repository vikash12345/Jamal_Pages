<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$link = "https://www.jamals.com/Search/a/?page=";
                
  for($id = 1; $id <= 1 ;$id++)
	
	
	{
	 $profilelink		=	 $link.$id;
	 $url 	=	   file_get_html($profilelink);
	 
			echo "$url";
		
    
  	}
?>
