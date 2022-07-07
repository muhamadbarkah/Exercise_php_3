<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                $view = 3;

                if (isset($_GET['page']))
                {
                    $page_aktif = $_GET['page'];
                } else {
                    $page_aktif = 1;
                }
                   

                $awaldata = ($page_aktif-1)*$view;

                $sql = "SELECT * FROM product_tbl LIMIT $awaldata,$view";
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

                <?php
                
                $sqltotal = "SELECT * FROM product_tbl";
                $qtotal = $koneksi->query($sqltotal);
                $total_data = $qtotal->num_rows;

                $total_page = ceil($total_data/$view);
                ?>

                

                
         
            </div><!--- END CONTENT WRAPPER -->
            <div class="container">
                <div class="nomor">
                    <style>
                        .nomor{text-align: center; }

                        .pagelinkactive {background-color : green; color:white; text-align:center; height:20px; width:25px; display:block; float:left; border-radius:3px; margin-right:5px;  }

                        .pagelink{background-color : black; color:white; text-align:center; height:20px; width:25px; display:block; float:left; border-radius:3px; margin-right:5px;  text-decoration: none;}
                    </style>
                    <?php for ($i=1;$i<=$total_page;$i++) {?>

                        <?php if ($i == $page_aktif) {?>
                        <span class="pagelinkactive">
                        <?php echo $i;?>
                        </span>
                        <?php } else {?>
                        <a class="pagelink" href="?page=<?php echo $i;?>">
                        <?php echo $i;?>
                        </a>
                        <?php }?>

                    <?php }?>
                </div>
            </div>
            
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
