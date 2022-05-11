 <?php  
 $_SESSION['cususer'] = (int)2;  
 $connect = mysqli_connect("localhost", "root", "", "testig");  
 $query = "  
      SELECT articles.id, articles.status,  
      COUNT(article_likes.id) as likes,  
      GROUP_CONCAT(user.cususer separator '|') as liked  
      FROM  
      articles  
      LEFT JOIN article_likes  
      ON article_likes.article = articles.id  
      LEFT JOIN user  
      ON article_likes.user = user.id  
      GROUP BY articles.id  
 ";  
 $result = mysqli_query($connect, $query); 

 while($row = mysqli_fetch_array($result))  
 {  
      echo '<h3>'.$row["status"].'</h3>';  
      echo '<a href="likes.php?type=article&id='.$row["id"].'">Like</a>'." " .$row["likes"].' People like this';  

 }  
 
 if(isset($_GET["type"], $_GET["id"]))  
 {  
      $type = $_GET["type"];  
      $id = (int)$_GET["id"];  
      if($type == "article")  
      {  
           $query = "  
           INSERT INTO article_likes (user, article)  
           SELECT {$_SESSION['cususer']}, {$id} FROM articles   
                WHERE EXISTS(  
                     SELECT id FROM articles WHERE id = {$id}) AND  
                     NOT EXISTS(  
                          SELECT id FROM article_likes WHERE user = {$_SESSION['cususer']} AND article = {$id})  
                          LIMIT 1  
           ";  
           mysqli_query($connect, $query);  
           header("location:likes.php");  
      }  
 }  
 ?>  