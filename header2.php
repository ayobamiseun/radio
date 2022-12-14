<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<style>
/* ********************************* Variables ********************************** */
/* ********************************* Some Style Overrides on Bootstrap ********************************** */
.navbar-inverse {
	 background: rgba(62, 195, 246, 0);
	 border-bottom: none;
}
 .navbar-inverse .navbar-toggle {
	 border: 1px solid #333;
	 border-color: rgba(255, 255, 255, 0.7);
}
 .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
	 border-color: transparent;
}
 @media (max-width: 767px) {
	 .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
		 background: rgba(255, 255, 255, 0.75);
	}
}
 .navbar-inverse .navbar-nav > li > a {
	 color: black;
}
 .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
	 color: #22f;
}
/* ********************************* Toolbar Logo ********************************** */
 .small-logo-container {
	 padding-top: 50px;
	 height: 50px;
	 overflow: hidden;
	 position: absolute;
}
 .small-logo {
	 color: white;
	 font-size: 2.5em;
	 padding-bottom: 2px;
}
/* ********************************* Big Logo ********************************** */
 .big-logo-row {
	 background: gold;
}
 .big-logo-row .big-logo-container {
	 padding-top: 50px;
}
 .big-logo-row h1 {
	 font-size: 4em;
	 margin: 0;
	 padding: 0 0 15px 0;
}
 @media (min-width: 400px) {
	 .big-logo-row h1 {
		 font-size: 4.5em;
	}
}
 @media (min-width: 440px) {
	 .big-logo-row h1 {
		 font-size: 5.5em;
	}
}
 @media (min-width: 500px) {
	 .big-logo-row h1 {
		 font-size: 6.5em;
	}
}
 @media (min-width: 630px) {
	 .big-logo-row h1 {
		 font-size: 7.5em;
	}
}
 @media (min-width: 768px) {
	 .big-logo-row h1 {
		 font-size: 9em;
		 padding-bottom: 30px;
	}
}
 @media (min-width: 1200px) {
	 .big-logo-row h1 {
		 font-size: 12em;
	}
}
 
</style>
<body>
     <!-- Fixed navbar -->
     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="small-logo-container">
            <a class="small-logo" href="#">???Small Logo</a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Active</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container-fluid big-logo-row">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 big-logo-container">
            <h1 class="big-logo">???Big Logo</h1>
          </div><!--/.col-xs-12 -->
        </div><!--/.row -->
      </div><!--/.container -->
    </div><!--/.container-fluid -->

    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-8">
          <h2>Lorem ipsum</h2>
          <p>Dolor sit amet, consectetur adipisicing elit. Id maxime repellat repellendus porro voluptas laudantium similique eveniet quis perferendis beatae commodi sunt ullam provident dolorum doloribus esse accusamus dolores. Corrupti.</p>
          <p>Consectetur incidunt voluptatibus ipsa nisi esse eos deleniti repudiandae at quo sit praesentium nemo optio perspiciatis sequi quaerat voluptates minus reprehenderit doloremque accusamus et quisquam nesciunt sunt consequatur explicabo excepturi!</p>
          <p>Sequi facilis ea dolor asperiores quibusdam eveniet optio corporis et accusantium voluptatem architecto quis iste recusandae molestias dolorem soluta ex blanditiis illo impedit laborum iusto? Iure sapiente eos molestiae est?</p>
          <p>Numquam delectus recusandae nesciunt rem itaque harum corporis maxime hic iste molestias adipisci excepturi ullam libero necessitatibus cum eum modi minus obcaecati est nemo quia velit earum perferendis consectetur porro?</p>
          <p>Accusamus dicta consequatur quos ipsum rerum tempora assumenda ex excepturi itaque soluta magnam debitis voluptatibus neque eos porro. Neque tempora ea beatae delectus facere quas voluptas accusamus maxime enim consequuntur.</p>
          <p>Saepe obcaecati facilis dolore numquam nam quod laudantium. Rerum esse voluptas eum aut porro beatae adipisci exercitationem ab voluptatum corporis quas placeat sapiente nisi ut officia eaque debitis. Corrupti eveniet!</p>
          <p>Eius natus numquam tempore alias ipsam commodi aut similique corporis beatae velit maxime obcaecati voluptatibus cum repudiandae minus inventore doloremque optio saepe nihil eum reprehenderit quas consequuntur perspiciatis quo quam.</p>
          <p>Ea perspiciatis incidunt unde ipsam cupiditate necessitatibus magnam quod odit. Beatae adipisci non praesentium tenetur dolores fugit repellat consequuntur unde aperiam eligendi ipsa doloribus corporis officiis ipsam quod numquam assumenda!</p>
          <p>Ullam ut ex cum corporis numquam quia hic aut nisi itaque laboriosam eaque earum commodi nulla magni voluptate reiciendis laborum esse odit blanditiis aperiam veniam eos velit similique eveniet ad.</p>
          <p>Esse veritatis inventore explicabo hic consequuntur ex autem praesentium quaerat blanditiis illo deleniti dolorum porro tenetur. Repellat sed repellendus natus cum molestias numquam vitae vel eum voluptatem praesentium tempora quae.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nostrum consequatur odit eius blanditiis sit mollitia ut porro cumque nam repudiandae accusantium nisi excepturi corporis incidunt inventore ipsam? Officiis eum!</p>
          <p>Nostrum minus dicta quod totam autem ipsum illo velit labore obcaecati est ducimus ullam sit iusto ea pariatur sint nulla perferendis modi dolorum cumque non laboriosam ratione maiores possimus numquam!</p>
          <p>Deserunt ex dolor atque sapiente suscipit aspernatur et iste necessitatibus enim magni blanditiis quaerat rerum perspiciatis expedita magnam nihil neque natus quos quidem veritatis eligendi dolorem itaque laboriosam beatae dolores!</p>
          <p>Nostrum tenetur rem cum tempora sapiente at possimus assumenda ex quos illum facilis quibusdam facere voluptatum. Necessitatibus tempore animi earum inventore quaerat sit velit totam rem nulla consequuntur dolorem architecto!</p>
          <p>Illum doloremque ipsa magni fugiat explicabo nam officiis expedita architecto voluptatem beatae deserunt optio iusto nostrum facere voluptatum. Tempora dolore quasi vero aut voluptatem eaque nobis iusto enim dignissimos molestias!</p>
        </div><!--/.col-xs-12 -->
      </div><!--/.row -->
    </div><!--/.container -->
</body>
<script>
var navbarHeight = $('.navbar').height(); 

$(window).scroll(function() {
  var navbarColor = "62,195,246";//color attr for rgba
  var smallLogoHeight = $('.small-logo').height();
  var bigLogoHeight = $('.big-logo').height();
  
  
  var smallLogoEndPos = 0;
  var smallSpeed = (smallLogoHeight / bigLogoHeight);
  
  var ySmall = ($(window).scrollTop() * smallSpeed); 
  
  var smallPadding = navbarHeight - ySmall;
  if (smallPadding > navbarHeight) { smallPadding = navbarHeight; }
  if (smallPadding < smallLogoEndPos) { smallPadding = smallLogoEndPos; }
  if (smallPadding < 0) { smallPadding = 0; }
  
  $('.small-logo-container ').css({ "padding-top": smallPadding});
  
  var navOpacity = ySmall / smallLogoHeight; 
  if  (navOpacity > 1) { navOpacity = 1; }
  if (navOpacity < 0 ) { navOpacity = 0; }
  var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
  $('.navbar').css({"background-color": navBackColor});
  
  var shadowOpacity = navOpacity * 0.4;
  if ( ySmall > 1) {
    $('.navbar').css({"box-shadow": "0 2px 3px rgba(0,0,0," + shadowOpacity + ")"});
  } else {
    $('.navbar').css({"box-shadow": "none"});
  }
  
  
  
});
</script>
</html>