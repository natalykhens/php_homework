<?php  
function paging($pageCount,$currentPage)
{
    $onePage= '<a href= ./page?page=1> 1 </a>';
    if ($currentPage != 1) 
    $pervpage = '<a href= ./page?page=1>  </a>  
             <a href= ./page?page='. ($currentPage - 1) .'> </a> ';  
    if ($currentPage != $pageCount) $nextpage = ' <a href= ./page?page='. ($currentPage + 1) .'>  </a>  
                                   <a href= ./page?page=' .$pageCount. '>  </a>';  
    
    if($currentPage - 2 > 0) $page2left = ' <a href= ./page?page='. ($currentPage - 2) .'>'.       ($currentPage - 2) .'</a>  ';  
    if($currentPage - 1 > 0) $page1left = '<a href= ./page?page='. ($currentPage - 1) .'>'. ($pcurrentPage - 1) .'</a>  ';  
    if($currentPage + 2 <= $pageCount) $page2right = '  <a href= ./page?page='. ($pageCount + 2) .'>'. ($currentPage + 2) .'</a>';  
    if($currentPage + 1 <= $pageCount) $page1right = '  <a href= ./page?page='. ($pageCount + 1) .'>'. ($pcurrentPage + 1) .'</a>'; 

    if ($currentPage > 3) 
    echo "$onePage";

    echo "$pervpage $page2left $page1left '<b>' $currentPage '</b>' $page1right $page2right $nextpage";

    if ($currentPage < ($pageCount-3)) 
    echo "<a href= ./page?page=$pageCount> $pageCount </a>";
}
?>
