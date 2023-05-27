<?php      
$status=unlink('../ImageUpload/uploads/.htaccess');    
if($status){  
echo "File Using Unlock Successfully";    
}else{  
echo "解除文件占用失败，文件没有被占用";    
}  
?>

