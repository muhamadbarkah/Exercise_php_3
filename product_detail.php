<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <?php
                $id_product = $_GET ['id_product'];
                $koneksi = new mysqli ("localhost","root","","progres_bisnis_db_barkah");
                $sql = "SELECT * FROM product_tbl WHERE id_product = $id_product";
                $query = $koneksi->query($sql);
                $rowproduct = $query->fetch_assoc();
                ?>

                <div class="contentproduct">
                    <h2 class="product_title"><?php echo $rowproduct['name_product']?></h2>
                    <div class="img_box" style="width:221px; height:182px; ">
                    <img src="product_images/<?php echo $rowproduct['gambar_product']?>" class="product_image">
                    </div>
                    <p class="product_desc">
                    <?php echo substr ($rowproduct['description_product'],0,1000);?>
                    </p>
                    <h3></h3>
                    <h3>Harga = Rp. <?php echo $rowproduct['price']?></h3>
                </div>
            

                
         
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