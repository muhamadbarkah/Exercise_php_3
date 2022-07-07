<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Services</title>
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
                <!--------------------------------------------------------------------------------->
                <!-- AGAR RAPI NANTI DI PHP BUAT PRODUCT DESC DENGAN MAKSIMAL KARAKTER 110 CHAR --->
                <!--------------------------------------------------------------------------------->
                <div class="top_news">
                    <style>
                    .top_news {height: 25px;padding: 10px;} 
                    .top_news form {float: left; width: 250px;}
                    </style>
                    <form action="search_product.php" methode="get">
                        <input type="text" name="searchone" placeholder="Search Product">
                        <input type="submit" value="search">
                    </form>
                </div>
                <?php
                $koneksi = new mysqli ("localhost","root","","progres_bisnis_db_barkah");
                $sql = "SELECT * FROM product_tbl";
                $query = $koneksi->query($sql);
                $rowproduct = $query->fetch_assoc();

                do {
                ?>
                <div class="product_item">
                	<div class="number_icon"><?php echo $rowproduct['id_product']?></div>
                    <h2 class="product_title"><?php echo $rowproduct['name_product']?></h2>
                    <div class="img_box" style="width:221px; height:182px; ">
                    <img src="product_images/<?php echo $rowproduct['gambar_product']?>" class="product_image">
                    </div>
                    <p class="product_desc">
                    <?php echo substr ($rowproduct['description_product'],0,250);?>
                    </p>
                    <h3></h3>
                    <h3>Harga = Rp. <?php echo $rowproduct['price']?></h3>
                    <a href="product_detail.php?id_product=<?php echo $rowproduct ['id_product'];?>" class="link_detail">Read More</a>
                </div>
                
                <?php }while ($rowproduct = $query->fetch_assoc());?>

                
         
            </div><!--- END CONTENT WRAPPER -->
            
       </div> 
<!--------------------------------------- END CONTENT CONTENT--------------------------->
	   <div id="footer">
        
        	<div class="container">
            	<p> Copyright &copy; Your Company All Right Reserved</p>
            </div>
        
       </div>
<!---------------------------------------- END FOOTER --------------------------------->
</div>
	<script src="lightbox/js/jquery-1.11.0.min.js"></script>
	<script src="lightbox/js/lightbox.js"></script>
</body>
</html>
