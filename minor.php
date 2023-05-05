<?php
<?php
@include 'login_form.php';
session_start();

?>


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Floral</title>
	<link rel="stylesheet" type="text/css" href="showeb.css">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
	<header class="heades">
		<span class="material-symbols-outlined">local_mall</span>
	    <span class="heading">
		     foryou
		
	     </span>
	     <span class="nav">
	     	<a href="#home">Home</a>
	     	<a href="#shop">Shop</a>
	     	<a href="#features">Features</a>
	     	<a href="#">Review</a>
	     </span>
	     <span class="icons">
	     	<span class="material-symbols-outlined">search</a></span>
	     	<span class="material-symbols-outlined">favorite</span>
	     	<span class="material-symbols-outlined">shopping_cart</span>
	     	<a href="login_form.php"><span class="material-symbols-outlined">person</span></a>

	     	
	     </span>
	    </header><br>
	
	<div id="home">
		
	    <table><tr>
	    	<td class="table1">
	    		<div class="car">
	    	    <h1 class="heads">Shop  foryou</h1>
	    	    <a href="#shop"><h4 class="side">Shop Now-></h4></a>
	    	</div>
	    	</td>
	    
	    <td class="table2">

	    <div class="vin">
	    	<img src="https://pluspng.com/img-png/girls-shopping-png-hd--1133.png" class="firstimg">
						
	    	
	    </div></td></tr>
	</table>

	    
	    
    </div>
    <div class = "wrapper">
        <div class = "category-filter">
            <div class = "container">
                <div class = "title">
                    <h1>Featured Products</h1>
                </div>

                <div class = "filter-btns">
                    <button type = "button" class = "filter-btn" id = "all">all</button>
                    <button type = "button" class = "filter-btn" id = "new">new</button>
                    <button type = "button" class = "filter-btn" id = "best-sellers">best seller</button>
                    <button type = "button" class = "filter-btn" id = "specials">specials</button>
                </div>

                <div class = "filter-items">
                    <div class = "filter-item all new">
                        <div class = "item-img">
                            <img src = "https://i5.walmartimages.com/asr/4b9b573f-73b1-442c-83b1-d5e473b1764b_1.13a361ab4d727430d22dfe1b6f609830.jpeg" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>pink knotted top</p>
                            <div>
                                <span class = "old-price">1000.50/-</span>
                                <span class = "new-price">550/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "filter-item all best-sellers">
                        <div class = "item-img">
                            <img src = "https://tse3.mm.bing.net/th?id=OIP.09RHHLgyTFsMbH_kZyb92AAAAA&pid=Api&P=0" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>party wear black</p>
                            <div>
                                <span class = "old-price">2500.50/-</span>
                                <span class = "new-price">600/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "filter-item all specials">
                        <div class = "item-img">
                            <img src = "https://ae01.alicdn.com/kf/HTB1aJ3scAKWBuNjy1zjq6AOypXa3/Women-Embroidery-Jeans-Shirts-Long-Sleeve-Turn-down-Collar-Denim-Blouse-Vetement-Femme-Jeans-Top.jpg" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>Jean Top</p>
                            <div>
                                <span class = "old-price">1600.50/-</span>
                                <span class = "new-price">450.70/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "filter-item all new">
                        <div class = "item-img">
                            <img src = "https://tse2.mm.bing.net/th?id=OIP.CVjLSxj3bQCPKUxBlLNH6gHaJb&pid=Api&P=0" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>white floral top</p>
                            <div>
                                <span class = "old-price">1200.50/-</span>
                                <span class = "new-price">550/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "filter-item all best-sellers">
                        <div class = "item-img">
                            <img src = "https://cdn03.nnnow.com/web-images/preview/styles/8F4N9UPPEPD/1618809740082/1.jpg" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>Check shirt</p>
                            <div>
                                <span class = "old-price">1300.50/-</span>
                                <span class = "new-price">750/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "filter-item all specials">
                        <div class = "item-img">
                            <img src = "https://tse3.mm.bing.net/th?id=OIP.NUACu5wKemVEZHspwmUCagHaJ4&pid=Api&P=0" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>Striped Shirt</p>
                            <div>
                                <span class = "old-price">900.50/-</span>
                                <span class = "new-price">700/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "filter-item all new">
                        <div class = "item-img">
                            <img src = "https://tse2.mm.bing.net/th?id=OIP.loOq24YSUKoEu5AI-2tYgwHaHa&pid=Api&P=0" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>Plain Black Shirt </p>
                            <div>
                                <span class = "old-price">1000.50/-</span>
                                <span class = "new-price">650.70/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "filter-item all best-sellers">
                        <div class = "item-img">
                            <img src = "https://i.pinimg.com/originals/14/cd/32/14cd328cd83a9d5bced58694c609972a.jpg" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>Faded Jean Shirt</p>
                            <div>
                                <span class = "old-price">700.50/-</span>
                                <span class = "new-price">460.70/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "filter-item all specials">
                        <div class = "item-img">
                            <img src = "https://tse4.mm.bing.net/th?id=OIP.KJpH9XOmZJRp-5OJ171_RwHaJ4&pid=Api&P=0" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>Tie dye Hoodie</p>
                            <div>
                                <span class = "old-price">2000.50/-</span>
                                <span class = "new-price">560.70/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "filter-item all new">
                        <div class = "item-img">
                            <img src = "https://tse1.mm.bing.net/th?id=OIP.vjiSLpwQbU3qIFDnAy49YgHaKO&pid=Api&P=0" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>Zip up hoodie</p>
                            <div>
                                <span class = "old-price">2800.50/-</span>
                                <span class = "new-price">1000.70/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "filter-item all best-sellers">
                        <div class = "item-img">
                            <img src = "https://gloimg.rglcdn.com/rosegal/pdm-product-pic/Clothing/2016/04/29/source-img/20160429170443_51346.jpg" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>Trendy Women Hoodie</p>
                            <div>
                                <span class = "old-price">1600.50/-</span>
                                <span class = "new-price">800/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "filter-item all specials">
                        <div class = "item-img">
                            <img src = "magesu">
                            <img src="https://tse3.mm.bing.net/th?id=OIP.yglkNydq2xTBUqFgM3B3qwHaJZ&pid=Api&P=0" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>V necked tshirt</p>
                            <div>
                                <span class = "old-price">1200.50/-</span>
                                <span class = "new-price">650.70/-</span>
                            </div>
                            <a href = "#" class ="add-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src = "main.js"></script>
    <div id="features">
    	<table>
    		<div class="card1">
    		<tr><td>

    			<div class="cards2">
    				<span class="material-symbols-outlined"><i>visibility</i></span><br><br><span class="que">  What you see is what you get  </span><br><br>
    				<span class="ans">Love the collection on your screen? That's exactly what you get handled carefully with no damage.If damaged we will replace it.</span>
    				
    			</div>
    		</td><td>
    			<div class="cards2">
    				<span class="material-symbols-outlined"><i>sentiment_satisfied</i></span><br><br><span class="que">  Always unique, never generic  </span><br><br>
    				<span class="ans">
    					we only work with the most talented and unique artisans, and we're passionate about supporting our family of local designers.
    				</span>
    				
    			</div>
    		</td><td>
    			<div class="cards2">
    				<span class="material-symbols-outlined"><i>volunteer_activism</i></span><br><br><span class="que">  Hand-delivered with care   </span><br><br>
    				<span class="ans">
    					EAach of our order's professionaly arranged wraped and safely delivered with a hand written card on the exact day you need it. 
    				</span>
    				
    			</div>
    		</td></tr>
    	</table>
        </div >
    	
    </div>
    <div class="cont" id="contact">
    	<table><td>
       <div class="row">
    	<form action="">
    		<input type="name" placeholder="Name" class="oo"><br>
    		<input type="email" placeholder="Email" class="oo"><br>
    		<input type="number" placeholder="Number" class="oo"><br>
    		<textarea name="" class="oo" placeholder="message.." id="" cols="30" rows="10"></textarea><br>
    		<a href="#home"><input type="submit" value="send message" class="btn"></a>

    	</form></td>
    	<td>
    	<div class="lastimg">
    		<img src="http://pluspng.com/img-png/girl-with-shopping-bags-png-happy-girl-with-shopping-bag-670.png">
    	</div>
        </td>
       </div>
    	
    </div>
    

	

</body>
</html>