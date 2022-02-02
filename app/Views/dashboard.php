
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>SHOP HAVEN WEBSITE</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/index.css">
		   
              <link rel="stylesheet" href="/css/all.min.css">
			  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
			  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
	.profile-details{
		float:right;
  display: flex;
  align-items: center;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
.profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
.profile-details .admin_name{
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
.profile-details i{
  font-size: 25px;
  color: #333;
}
	.footer{
    background-color: black;
	color:white;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 1700px;

}

.TrustIndicators1{
	background-color:transparent;
}
.Partnerships{
    background-color: black;
    margin-top: 50;
    color:white;
    margin-top: 50px;
}
.Partnerships h1{
    text-align: center;
	background-color:white;
	color:black;
}
	</style>
	</head>
	<body background="/assets/images/background.jpg">
	<div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
        <i class='bx bx-chevron-down' ></i>
		<a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
	

		<header>

       

				<div class="main">
				<div class="logo">
					<img src="/assets/Images/logo.png">
				</div>
				<ul>
					
					<li class="one"><a href="#">Home</a></li>
					<li><a href="products_view">Products</a></li>
					<li><a href="contactus">Contact Us</a></li>

					
					</ul>

			
			
			</div>


			<div class="title">
			      <h1>SHOP HAVEN </h1>
			      <h2><i>Founded on Fit, Built on Service, and Focused on Style. However You Fit, Shop Haven Fits You.</i></h2>
		    </div>
<div class="buttons" style="text-align:center;">
    <a href="Users/index">
    	<button class="btn1">LOGIN </button>
    </a>
    <a href="Users/register"><button class="btn2">REGISTER</button>
    </a>
</div>
<div class="benefitslist">
	<h1 class="b1">Why choose us?</h1>
	<p class="b2">We offer the best choice of clothing, designed by the best of designers from all around the world.</p>

</div>
<div class="FeaturesHighlights">
	<h2> Features Highlights </h2>
	
	<table border="3" width="100%">
		<tr>
			<td width="25%" align="center" class="zoom"><img src="/assets/Images/cat1.jfif" width="85%">
				<td width="25%" align="center" class="zoom"><img src="/assets//Images/cat2.jfif" width="85%">
					<td width="25%" align="center" class="zoom"><img src="/assets/Images/cat3.jfif" width="85%">
						<td width="25%" align="center" class="zoom"><img src="/assets/Images/cat4.jfif" width="85%">
							</td>
						
		</tr>
		<tr>
			<td align="center"><b><font size="4">Menswear</font></b></td>
			<td align="center"><b><font size="4">Womenswear</font></b></td>
			<td align="center"><b><font size="4">Children wear</font></b></td>
			<td align="center"><b><font size="4">Pets</font></b></td>

		</tr>

</table>
						
</div>

<div class="TrustIndicators1">
	<h1><b>Customer Testimonials</b></h1>
    <div class="wrapper">
    <div class="box">
	<i class="fas fa-quote-left quote"></i>
      <p>They are really amazing, i have been buying things from them and the deliver on time, they are reliable and trustworthy, they are the best online store ever.</p>
      
      
    </div>

    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>I placed an order that they got right, I didn't need to follow up on it. Deliveries were on time and the delivery guy was very cute!</p>
      
        
    </div>
    <div class="box">
      <i class="fas fa-quote-left  quote"></i>
      <p>A company that uses bot to talk to customers is already good. But these cons only care about your money; they will call when they want you to place an order but will never let you lodge a complaint. They refused to refund me after selling fake and faulty earphones because I did not have original packaging. Now I am wondering am I supposed to keep trash in my house because I cannot trust what they are selling me. Stupid excuse! Been a customer since 2017!</p>
      
        </div>
        
      
    
  </div>
</div>


<div class="Partnerships">
	<h1>Partnerships</h1>
	
	
	<table border="3" width="100%">
		<tr>
			<td width="16%" align="center" ><img src="/assets/Images/p1.jpg" width="25%">
				<td width="16%" align="center"><img src="/assets/Images/p2.jfif" width="25%">
					<td width="16%" align="center"><img src="/assets/Images/p3.jpg" width="25%">
						<td width="16%" align="center"><img src="/assets/Images/p4.jpg" width="25%">
							<td width="16%" align="center"><img src="/assets/Images/p5.jfif" width="25%">
								<td width="16%" align="center"><img src="/assets/Images/p6.jfif" width="25%">
							

							</td>
							
						
		</tr>
	</table>
</div>
</header>
</br></br></br></br></br></br>
<footer class="footer">

			
				<h3>About <span>Shop Haven</span></h3>

				<p class="fl">
					<a href="#">Blog Articles</a>
					|
					<a href="#">Recommendations</a>
					|
					<a href="#">Tools&Tips</a>
					|
					<a href="#">Announcements</a>
					|
					<a href="#">Coupons</a>
					|
					<a href="#">Free stuff</a>
					
				</p>

				<p class="name">© 2021 Shop Haven</p>
			</div>

			<div class="f2">
				<div>
					<i class="address"></i>
					  <p><span>12483-20200 - Jogoo Road,
						 Kencom Building</span>
						Nairobi, Kenya</p>
				</div>

				<div>
					<i class="phone"></i>
					<p>+254 222 778 218</p>
				</div>
				
				<div>
					<i class="email"></i>
					<p><a href="ShopHaven@gmail.com">ShopHaven@gmail.com</a></p>
				</div>
				
			</div>
			<div class="f3">
				<p class="fa">
					<span>© All rights preserved</span>
					Shop Haven</p>
			
				
			</div>
			
	
		<a href=""> <i class="fab fa-instagram-square"></i>
				<a href=""><i class="fab fa-facebook-square"></i>
					<a href=""><i class="fab fa-twitter-square"></i>
						<a href=""><i class="fab fa-pinterest-square"></i>
						<a href=""><i class="fab fa-youtube-square"></i>
									<a href=""><i class="fab fa-linkedin"></i>

							
						
		
		</footer>
	</body>
</html>
