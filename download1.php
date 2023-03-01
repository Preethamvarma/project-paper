<?php require_once("db.php");
if(isset($_REQUEST['createzip']) and $_REQUEST['createzip']!=""){
    extract($_REQUEST);
    
    $filename   =   "Download" .time().".zip";
   
    $fileQry    =   mysqli_query($conn,'SELECT image FROM image WHERE id IN ('.implode(",", $fileId).')');
     
    $zip = new ZipArchive();
    
    if ($zip->open($filename,  ZipArchive::CREATE)){
        while($row  =   $fileQry->fetch_assoc()){
            $zip->addFile(getcwd().'/'.'upload/'.$row['image'], $row['image']);
        }
        $zip->close();
         
        header("Content-type: application/zip"); 
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-length: " . filesize($filename));
        header("Pragma: no-cache"); 
        header("Expires: 0"); 
        readfile("$filename");
        unlink($filename);
    }else{
       echo 'Failed!';
    }
}
?>
