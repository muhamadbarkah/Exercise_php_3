<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>News Detail</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
  <div id="header">
        
            <div class="container">
              <img id="logo" src="images/logo.png">
                <div id="menu">
                  <ul>
                    <li class="nav1"><a href="index.php">HOME</a></li>
                      <li class="nav2"><a href="news.php">NEWS</a></li>
                      <li class="nav3"><a href="product_pagging.php">PRODUCTS</a></li>
                      <li class="nav4"><a href="contact.php">CONTACT</a></li> 
                      <li class="nav5"><a href="gallery.php">GALLERY</a></li>
                    </ul>
                  </div>
            </div>
            
     </div>
   <!---------------------------------------- END HEADER -------------------------------->
   <div id="greenLine"></div>
   		<div id="content">
        	
            <div class="container">
              <?php
              $id_news = $_GET['id_news'];

              $koneksi = new mysqli ("localhost","root","","progres_bisnis_db_barkah");
              $sql = "SELECT * FROM news_tbl WHERE id_news = $id_news";
              $query = $koneksi->query($sql);
              $rownews = $query->fetch_assoc();
              ?>
 
                <div class="newsitemd">
					
                    <h2 class="news_title"><?php echo $rownews['title'];?></h2>
                    <p class="crt_date"><?php echo $rownews['createdate'];?></p>
                    <div class="clear"></div>
                    
                    <p class="news_desc">
                    <img src="news_images/<?php echo $rownews ['images']?>" align="left">
                    <?php echo $rownews ['description'];?>
                    </p>
                </div>
                
   <!------------- Form Comment ---------------------------------------------->
                 <form class="comment_form" action="process/adding_comment.php" method="post">				<h4>Leave A Comment</h4>
                    <input type="hidden" name="id_news" value="#"><br>
                    <input type="email" placeholder="Email" name="email" required><br>
                    <input type="text" placeholder="Username" name="username" required><br>
                    <textarea name="comment" placeholder="Your Comment" required></textarea><br>
                	<input type="submit" value="Comment">
                 </form>
   <!-------------------------------------------------------------------------->
   
   <!------------- List Comment ----------------------------------------------->             
                 <div class="comment_wrap">
                 	<h1>Comments (4)</h1>
                   
                 	<div class="comment_list">
                    	<div class="user_photo">
                         <img src="photo_member/profile-5.png" />
                        </div>
                        <div class="box_desc">
                          <h2>Gladis</h2>
                          <p> Mauris tincidunt, nulla quis rhoncus malesuada, nibh ante pulvinar dolor, ut lacinia libero risus nec orci.tiam auctor tincidunt augue at pharetra. Morbi velit eros, sagittis in facilisis non, rhoncus </p>
                          <span>2014-03-28 11:41:11</span>
                        </div>
    
                    </div>
                    
                    <div class="comment_list">
                    	<div class="user_photo">
                         <img src="photo_member/profile-2.jpg" />
                        </div>
                        <div class="box_desc">
                          <h2>Supriadi</h2>
                          <p> Mauris tincidunt, nulla quis rhoncus malesuada, nibh ante pulvinar dolor, ut lacinia libero risus nec orci.tiam auctor tincidunt augue at pharetra. Morbi velit eros, sagittis in facilisis non, rhoncus </p>
                          <span>2014-03-28 11:41:11</span>
                        </div>
    
                    </div>
                    
                    <div class="comment_list">
                    	<div class="user_photo">
                         <img src="photo_member/profile-1.jpg" />
                        </div>
                        <div class="box_desc">
                          <h2>Kodir</h2>
                          <p> Mauris tincidunt, nulla quis rhoncus malesuada, nibh ante pulvinar dolor, ut lacinia libero risus nec orci.tiam auctor tincidunt augue at pharetra. Morbi velit eros, sagittis in facilisis non, rhoncus </p>
                          <span>2014-03-28 11:41:11</span>
                        </div>
    
                    </div>
                    
                    <div class="comment_list">
                    	<div class="user_photo">
                         <img src="photo_member/profile-3.jpg" />
                        </div>
                        <div class="box_desc">
                          <h2>Parno</h2>
                          <p> Mauris tincidunt, nulla quis rhoncus malesuada, nibh ante pulvinar dolor, ut lacinia libero risus nec orci.tiam auctor tincidunt augue at pharetra. Morbi velit eros, sagittis in facilisis non, rhoncus </p>
                          <span>2014-03-28 11:41:11</span>
                        </div>
    
                    </div>
                 
                 </div>
                 
                 
   <!-------------------------------------------------------------------------->      
         		
            </div><!--- END CONTENT Container -->
            
        </div>
<!---------------------------------------- END CONTENT ------------------------------->
		<div id="footer">
        
        	<div class="container">
            	<p> Copyright &copy; Your Company All Right Reserved</p>
            </div>
        
        </div>
<!---------------------------------------- END FOOTER -------------------------------->  
</div>
</body>
</html>
