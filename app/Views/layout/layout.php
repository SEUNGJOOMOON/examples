<html>
     <head>
          <meta charset="utf-8">
          <title>Dev. Nick</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>
     <style>
          ul {
               list-style: none;
          }

          a {
               text-decoration: none;
               outline: none;
               text-decoration: none;
          }

          li > a:link {
               color: white;
               text-decoration: none;
          }
          
          li > a:visited {
               color: white;
               text-decoration: none;
          }
          
          li > a:hover {
               color: white;
               text-decoration: underline;
          }


          .page {
               width: 1440px;
               margin: 0 auto;
          }

          header {
               width: 100%;
               height: 80px;
               display: flex;
               align-items: center;
               justify-content: space-between;
               border-bottom: solid 1px black;
               background-color: #000000ab;
          }

          header > h2 {
               margin-left:20px;
          }

          header > nav {
               width:600px;
               height:100%;
          }

          header ul {
               width:100%;
               height: 100%;
               display: flex;
               justify-content: space-between;
          }

          header ul > li {
               font-size:20px;
               height: 100%;
               display: flex;
               align-items: center;
          }

          footer {
               width: 100%;
               height: 90px;
               bottom: 0px;
               position: absolute;
               border-top: 1px solid #c4c4c4;
               padding-top: 15px;
               color: black;
               font-size: 11px;
               text-align:center;
          }

          footer a {
               display: inline-block;
               margin: 0 20px 10px 20px;
          }

          footer a:visited {
               color: #808080;
          }

          footer p {
               margin-top: 0; margin-bottom: 0;   
          }

          footer p span {
               display: inline-block;
               margin-left: 20px;
          }

          section{
               padding-bottom: 90px;
          }
          .wrap {
               min-height: 100vh;
               position: relative;
               width: 100%; 
          }
          .content{
               text-align: center;
               width: 100%;
               background-color: #f5f5f5;
               padding: 30px 90pt;
          }
          .content-in{
               max-width: 75pc;
               margin: 0 auto;
               background: #fff;
               border-bottom: 1px solid #d1d7df;
               padding: 85px 5pc 90pt;
          }
     </style>
     <body>
          <div class="wrap">
               <header id="header" class="header">
                    <nav>
                         <ul>
                              <li><a href="/examples/public/index.php/">Home</a></li>
                              <li><a href="/examples/public/index.php/example/list">Examples</a></li>
                         </ul>
                    </nav>
               </header>
               <section>
                    <div class="content">
                         <div class="content-in">
                              <?php echo $content; ?>
                         </div>
                    </div>
               </section>
               <footer id="footer" class="footer">
                    <nav>
                         <a href='https://nick901106.tistory.com/' target='_blank'>Blog</a> |
                         <a href='https://github.com/SEUNGJOOMOON/SEUNGJOOMOON' target='_blank'><i class="fa fa-github" style="font-size:36px"></i></a>
                    </nav>
                    <p>
                         <span>?????? : nick</span><br/>
                         <span>????????? : nick901106@gmail.com</span><br/>
                         <span>Copyright 2022. All Rights Reserved.</span>
                    </p>
               </footer>
          </div>
     </body>
</html>