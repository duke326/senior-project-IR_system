<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap 实例</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Search result </h1>
</div>
    <script>
       
        $(function(){
             id1 = $("#btn1").text();
            $("#btn1").on("click",function(){
               jump1();
            });
             switch(id1){
              case ("0"):
               $("#btn2").attr('disabled',true);  
              $("#img1").attr("src","https://image.freepik.com/free-vector/404-error-web-template-with-funny-cat_23-2147763339.jpg");
              break;
              case ("1"):
              $("#img0").attr("src","https://images-na.ssl-images-amazon.com/images/I/91dSMhdIzTL.jpg");
              break;
              case ("2"):
              $("#img0").attr("src","https://patch.com/img/cdn20/users/22896478/20190507/103247/thumbnail-a-midsummer-nights-dream-20190507222853-78320700.jpg");
              break;
                  case ("3"):
              $("#img0").attr("src","https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/a-tale-of-two-cities-book-cover-movie-poster-art-1-nishanth-gopinathan.jpg");
              break;
                  case ("4"):
              $("#img0").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1546091617l/15823480._SX318_.jpg");
              break;
                  case ("5"):
              $("#img0").attr("src","https://i.harperapps.com/covers/9780060743291/x510.jpg");
              break;

                  case ("6"):
              $("#img0").attr("src","https://orbitermag.com/wp-content/uploads/2018/07/charlottes-web-book-cover.jpeg");
              break;
                  case ("7"):
              $("#img0").attr("src","https://i.pinimg.com/originals/6b/54/f1/6b54f19c6b0e4fc6a54bb9ece7df3ee5.jpg");
              break;
                  case ("8"):
              $("#img0").attr("src","https://images-na.ssl-images-amazon.com/images/I/512QkwweZcL._SY387_BO1,204,203,200_.jpg");
              break;
                  case ("9"):
              $("#img0").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1389768126l/59145.jpg");
              break;
                  case ("10"):
              $("#img0").attr("src","https://images-na.ssl-images-amazon.com/images/I/81Nnrb+OFOL._RI_.jpg");
              break;
                  case ("11"):
              $("#img0").attr("src","https://i.pinimg.com/236x/1a/25/5f/1a255fbf316c495a1bc06580ef9fb06f--great-expectations-reading-books.jpg");
              break;
                  case ("12"):
              $("#img0").attr("src","https://i.pinimg.com/originals/35/e6/89/35e6891ab791c4b3a0f08b491f9e05e1.jpg");
              break;
                  case ("13"):
              $("#img0").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/sorce_stone.jpg");
              break;
                  case ("14"):
              $("#img0").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/chamber_of_secrets.jpg");
              break;
                  case ("15"):
              $("#img0").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/prisoner_of_azkaban.jpg");
              break;
                  case ("16"):
              $("#img0").attr("src","https://media.entertainmentearth.com/assets/images/68fc4ffab4d24a71ac00d998aeff8c44lg.jpg");
              break;
                  case ("17"):
              $("#img0").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/order_of_the_phoenix.jpg");
              break;
                  case ("18"):
              $("#img0").attr("src","https://challengingthebookworm.files.wordpress.com/2011/08/half-blood-prince.jpg");
              break;
                  case ("19"):
              $("#img0").attr("src","https://i.pinimg.com/originals/c1/42/70/c14270041d91168a9f7e851df1aa7e01.jpg");
              break;
                  case ("20"):
              $("#img0").attr("src","https://pictures.abebooks.com/isbn/9781785996320-us.jpg");
              break;
                  case ("21"):
              $("#img0").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1331563731l/12938.jpg");
              break;
                  case ("22"):
              $("#img0").attr("src","https://i.pinimg.com/236x/c0/79/d1/c079d16ae2be38a69f4a4edddc27ff2c--victor-hugo-les-mis%C3%A9rables.jpg");
              break;
                  case ("23"):
              $("#img0").attr("src","https://www.scholastic.com/content5/media/products/75/9780590129275_mres.jpg");
              break;
                  case ("24"):
              $("#img0").attr("src","https://cdn2.mhpbooks.com/2011/11/lotf11-320x484.png");
              break;
                  case ("25"):
              $("#img0").attr("src","https://i.pinimg.com/originals/be/09/1d/be091ddab71d5e09b391598a290c9fc6.jpg");
              break;
                  case ("26"):
              $("#img0").attr("src","https://prodimage.images-bn.com/pimages/9781499806250_p0_v7_s550x406.jpg");
              break;
                  case ("27"):
              $("#img0").attr("src","http://english-e-reader.net/covers/Romeo_and_Juliet-William_Shakespeare.jpg");
              break;
                  case ("28"):
              $("#img0").attr("src","https://images2.penguinrandomhouse.com/cover/9780375756733");
              break;
                  case ("29"):
              $("#img0").attr("src","https://i.pinimg.com/564x/9e/97/d6/9e97d6bfc5f1f70c10bb1169564ff53a.jpg");
              break;
                case ("30"):
              $("#img0").attr("src","https://ih0.redbubble.net/image.349027711.3521/mp,840x830,matte,f8f8f8,t-pad,750x1000,f8f8f8.jpg");
              break;
                case ("31"):
              $("#img0").attr("src","https://www.penguin.co.uk/content/dam/prh/books/313/31366/9780141329390.jpg.transform/PRHDesktopWide_small/image.jpg");
              break;
                case ("32"):
              $("#img0").attr("src","https://youthtravelguide.com/wp-content/uploads/2018/11/The-Kite-Runner-1.jpg");
              break;
                case ("33"):
              $("#img0").attr("src","https://i.pinimg.com/originals/87/b1/35/87b1358218b2d6e2cbc649108040bb99.jpg");
              break;
                case ("34"):
              $("#img0").attr("src","https://images-na.ssl-images-amazon.com/images/I/51DARv5eT3L._SX331_BO1,204,203,200_.jpg");
              break;
                case ("35"):
              $("#img0").attr("src","https://www.sunrisemarian.com/mm5/graphics/00000001/merchant_venice.jpg");
              break;
                case ("36"):
              $("#img0").attr("src","https://i.pinimg.com/originals/5c/3a/5b/5c3a5b4f3cd5540e941fb55ae425f92a.jpg");
              break;
                case ("37"):
              $("#img0").attr("src","https://pictures.abebooks.com/LELIVRE/22827231055.jpg");
              break;
                case ("38"):
              $("#img0").attr("src","https://prodimage.images-bn.com/pimages/9781402794667_p0_v1_s550x406.jpg");
              break;
                case ("39"):
              $("#img0").attr("src","https://i.pinimg.com/originals/b1/af/e7/b1afe76145a24284c2210f8f545aa2dc.jpg");
              break;
                case ("40"):
              $("#img0").attr("src","https://www.picclickimg.com/d/l400/pict/382498966977_/SURPRISES-20-stories-by-O-Henry-1966-Dell.jpg");
              break;
              case ("41"):
              $("#img0").attr("src","https://images-na.ssl-images-amazon.com/images/I/51QXzamJ6VL._SX320_BO1,204,203,200_.jpg");
              break;
              case ("42"):
              $("#img0").attr("src","https://images-na.ssl-images-amazon.com/images/I/51wKydweG1L._SL300_.jpg");
              break;
              case ("43"):
              $("#img0").attr("src","https://kompconkplucra.tk/photo/765997.jpg");
              break;
              case ("44"):
              $("#img0").attr("src","https://www.signals.com/graphics/products/large/HR3292.jpg");
              break;
              case ("45"):
              $("#img0").attr("src","https://nicholassparks.com/wp-content/uploads/1996/07/201612-notebook.jpg");
              break;
              case ("46"):
              $("#img0").attr("src","https://i.pinimg.com/originals/c7/f3/be/c7f3be4d7eeb010eb4280854ec425942.jpg");
              break;
              case ("47"):
              $("#img0").attr("src","https://cdn.britannica.com/21/182021-050-666DB6B1/book-cover-To-Kill-a-Mockingbird-many-1961.jpg");
              break;
              case ("48"):
              $("#img0").attr("src","https://i.pinimg.com/originals/65/93/b8/6593b8516b12ec68e63d53274023215e.jpg");
              break;
              case ("49"):
              $("#img0").attr("src","https://i.pinimg.com/originals/95/e5/cf/95e5cf09f9dbfe3bd6a7cbdc516655f9.jpg");
              break;
              case ("50"):
              $("#img0").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1388639717l/4894.jpg");
              break;
            }
        });
        $(function(){
             id2 = $("#btn2").text();
            $("#btn2").on("click",function(){
               jump2();
            });
              switch(id2){
              case ("0"):
               $("#btn2").attr('disabled',true);  
              $("#img1").attr("src","https://image.freepik.com/free-vector/404-error-web-template-with-funny-cat_23-2147763339.jpg");
              break;
              case ("1"):
              $("#img1").attr("src","https://images-na.ssl-images-amazon.com/images/I/91dSMhdIzTL.jpg");
              break;
              case ("2"):
              $("#img1").attr("src","https://patch.com/img/cdn20/users/22896478/20190507/103247/thumbnail-a-midsummer-nights-dream-20190507222853-78320700.jpg");
              break;
                  case ("3"):
              $("#img1").attr("src","https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/a-tale-of-two-cities-book-cover-movie-poster-art-1-nishanth-gopinathan.jpg");
              break;
                  case ("4"):
              $("#img1").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1546091617l/15823480._SX318_.jpg");
              break;
                  case ("5"):
              $("#img1").attr("src","https://i.harperapps.com/covers/9780060743291/x510.jpg");
              break;

                  case ("6"):
              $("#img1").attr("src","https://orbitermag.com/wp-content/uploads/2018/07/charlottes-web-book-cover.jpeg");
              break;
                  case ("7"):
              $("#img1").attr("src","https://i.pinimg.com/originals/6b/54/f1/6b54f19c6b0e4fc6a54bb9ece7df3ee5.jpg");
              break;
                  case ("8"):
              $("#img1").attr("src","https://images-na.ssl-images-amazon.com/images/I/512QkwweZcL._SY387_BO1,204,203,200_.jpg");
              break;
                  case ("9"):
              $("#img1").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1389768126l/59145.jpg");
              break;
                  case ("10"):
              $("#img1").attr("src","https://images-na.ssl-images-amazon.com/images/I/81Nnrb+OFOL._RI_.jpg");
              break;
                  case ("11"):
              $("#img1").attr("src","https://i.pinimg.com/236x/1a/25/5f/1a255fbf316c495a1bc06580ef9fb06f--great-expectations-reading-books.jpg");
              break;
                  case ("12"):
              $("#img1").attr("src","https://i.pinimg.com/originals/35/e6/89/35e6891ab791c4b3a0f08b491f9e05e1.jpg");
              break;
                  case ("13"):
              $("#img1").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/sorce_stone.jpg");
              break;
                  case ("14"):
              $("#img1").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/chamber_of_secrets.jpg");
              break;
                  case ("15"):
              $("#img1").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/prisoner_of_azkaban.jpg");
              break;
                  case ("16"):
              $("#img1").attr("src","https://media.entertainmentearth.com/assets/images/68fc4ffab4d24a71ac00d998aeff8c44lg.jpg");
              break;
                  case ("17"):
              $("#img1").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/order_of_the_phoenix.jpg");
              break;
                  case ("18"):
              $("#img1").attr("src","https://challengingthebookworm.files.wordpress.com/2011/08/half-blood-prince.jpg");
              break;
                  case ("19"):
              $("#img1").attr("src","https://i.pinimg.com/originals/c1/42/70/c14270041d91168a9f7e851df1aa7e01.jpg");
              break;
                  case ("20"):
              $("#img1").attr("src","https://pictures.abebooks.com/isbn/9781785996320-us.jpg");
              break;
                  case ("21"):
              $("#img1").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1331563731l/12938.jpg");
              break;
                  case ("22"):
              $("#img1").attr("src","https://i.pinimg.com/236x/c0/79/d1/c079d16ae2be38a69f4a4edddc27ff2c--victor-hugo-les-mis%C3%A9rables.jpg");
              break;
                  case ("23"):
              $("#img1").attr("src","https://www.scholastic.com/content5/media/products/75/9780590129275_mres.jpg");
              break;
                  case ("24"):
              $("#img1").attr("src","https://cdn2.mhpbooks.com/2011/11/lotf11-320x484.png");
              break;
                  case ("25"):
              $("#img1").attr("src","https://i.pinimg.com/originals/be/09/1d/be091ddab71d5e09b391598a290c9fc6.jpg");
              break;
                  case ("26"):
              $("#img1").attr("src","https://prodimage.images-bn.com/pimages/9781499806250_p0_v7_s550x406.jpg");
              break;
                  case ("27"):
              $("#img1").attr("src","http://english-e-reader.net/covers/Romeo_and_Juliet-William_Shakespeare.jpg");
              break;
                  case ("28"):
              $("#img1").attr("src","https://images2.penguinrandomhouse.com/cover/9780375756733");
              break;
                  case ("29"):
              $("#img1").attr("src","https://i.pinimg.com/564x/9e/97/d6/9e97d6bfc5f1f70c10bb1169564ff53a.jpg");
              break;
                case ("30"):
              $("#img1").attr("src","https://ih0.redbubble.net/image.349027711.3521/mp,840x830,matte,f8f8f8,t-pad,750x1000,f8f8f8.jpg");
              break;
                case ("31"):
              $("#img1").attr("src","https://www.penguin.co.uk/content/dam/prh/books/313/31366/9780141329390.jpg.transform/PRHDesktopWide_small/image.jpg");
              break;
                case ("32"):
              $("#img1").attr("src","https://youthtravelguide.com/wp-content/uploads/2018/11/The-Kite-Runner-1.jpg");
              break;
                case ("33"):
              $("#img1").attr("src","https://i.pinimg.com/originals/87/b1/35/87b1358218b2d6e2cbc649108040bb99.jpg");
              break;
                case ("34"):
              $("#img1").attr("src","https://images-na.ssl-images-amazon.com/images/I/51DARv5eT3L._SX331_BO1,204,203,200_.jpg");
              break;
                case ("35"):
              $("#img1").attr("src","https://www.sunrisemarian.com/mm5/graphics/00000001/merchant_venice.jpg");
              break;
                case ("36"):
              $("#img1").attr("src","https://i.pinimg.com/originals/5c/3a/5b/5c3a5b4f3cd5540e941fb55ae425f92a.jpg");
              break;
                case ("37"):
              $("#img1").attr("src","https://pictures.abebooks.com/LELIVRE/22827231055.jpg");
              break;
                case ("38"):
              $("#img1").attr("src","https://prodimage.images-bn.com/pimages/9781402794667_p0_v1_s550x406.jpg");
              break;
                case ("39"):
              $("#img1").attr("src","https://i.pinimg.com/originals/b1/af/e7/b1afe76145a24284c2210f8f545aa2dc.jpg");
              break;
                case ("40"):
              $("#img1").attr("src","https://www.picclickimg.com/d/l400/pict/382498966977_/SURPRISES-20-stories-by-O-Henry-1966-Dell.jpg");
              break;
              case ("41"):
              $("#img1").attr("src","https://images-na.ssl-images-amazon.com/images/I/51QXzamJ6VL._SX320_BO1,204,203,200_.jpg");
              break;
              case ("42"):
              $("#img1").attr("src","https://images-na.ssl-images-amazon.com/images/I/51wKydweG1L._SL300_.jpg");
              break;
              case ("43"):
              $("#img1").attr("src","https://kompconkplucra.tk/photo/765997.jpg");
              break;
              case ("44"):
              $("#img1").attr("src","https://www.signals.com/graphics/products/large/HR3292.jpg");
              break;
              case ("45"):
              $("#img1").attr("src","https://nicholassparks.com/wp-content/uploads/1996/07/201612-notebook.jpg");
              break;
              case ("46"):
              $("#img1").attr("src","https://i.pinimg.com/originals/c7/f3/be/c7f3be4d7eeb010eb4280854ec425942.jpg");
              break;
              case ("47"):
              $("#img1").attr("src","https://cdn.britannica.com/21/182021-050-666DB6B1/book-cover-To-Kill-a-Mockingbird-many-1961.jpg");
              break;
              case ("48"):
              $("#img1").attr("src","https://i.pinimg.com/originals/65/93/b8/6593b8516b12ec68e63d53274023215e.jpg");
              break;
              case ("49"):
              $("#img1").attr("src","https://i.pinimg.com/originals/95/e5/cf/95e5cf09f9dbfe3bd6a7cbdc516655f9.jpg");
              break;
              case ("50"):
              $("#img1").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1388639717l/4894.jpg");
              break;
            }
        });
                $(function(){
             id3 = $("#btn3").text();
        switch(id3){
              case ("0"):
               $("#btn3").attr('disabled',true);  
              $("#img2").attr("src","https://image.freepik.com/free-vector/404-error-web-template-with-funny-cat_23-2147763339.jpg");
              break;
              case ("1"):
              $("#img2").attr("src","https://images-na.ssl-images-amazon.com/images/I/91dSMhdIzTL.jpg");
              break;
              case ("2"):
              $("#img2").attr("src","https://patch.com/img/cdn20/users/22896478/20190507/103247/thumbnail-a-midsummer-nights-dream-20190507222853-78320700.jpg");
              break;
                  case ("3"):
              $("#img2").attr("src","https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/a-tale-of-two-cities-book-cover-movie-poster-art-1-nishanth-gopinathan.jpg");
              break;
                  case ("4"):
              $("#img2").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1546091617l/15823480._SX318_.jpg");
              break;
                  case ("5"):
              $("#img2").attr("src","https://i.harperapps.com/covers/9780060743291/x510.jpg");
              break;

                  case ("6"):
              $("#img2").attr("src","https://orbitermag.com/wp-content/uploads/2018/07/charlottes-web-book-cover.jpeg");
              break;
                  case ("7"):
              $("#img2").attr("src","https://i.pinimg.com/originals/6b/54/f1/6b54f19c6b0e4fc6a54bb9ece7df3ee5.jpg");
              break;
                  case ("8"):
              $("#img2").attr("src","https://images-na.ssl-images-amazon.com/images/I/512QkwweZcL._SY387_BO1,204,203,200_.jpg");
              break;
                  case ("9"):
              $("#img2").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1389768126l/59145.jpg");
              break;
                  case ("10"):
              $("#img2").attr("src","https://images-na.ssl-images-amazon.com/images/I/81Nnrb+OFOL._RI_.jpg");
              break;
                  case ("11"):
              $("#img2").attr("src","https://i.pinimg.com/236x/1a/25/5f/1a255fbf316c495a1bc06580ef9fb06f--great-expectations-reading-books.jpg");
              break;
                  case ("12"):
              $("#img2").attr("src","https://i.pinimg.com/originals/35/e6/89/35e6891ab791c4b3a0f08b491f9e05e1.jpg");
              break;
                  case ("13"):
              $("#img2").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/sorce_stone.jpg");
              break;
                  case ("14"):
              $("#img2").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/chamber_of_secrets.jpg");
              break;
                  case ("15"):
              $("#img2").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/prisoner_of_azkaban.jpg");
              break;
                  case ("16"):
              $("#img2").attr("src","https://media.entertainmentearth.com/assets/images/68fc4ffab4d24a71ac00d998aeff8c44lg.jpg");
              break;
                  case ("17"):
              $("#img2").attr("src","http://img.timeinc.net/time/2007/harry_potter/hp_books/order_of_the_phoenix.jpg");
              break;
                  case ("18"):
              $("#img2").attr("src","https://challengingthebookworm.files.wordpress.com/2011/08/half-blood-prince.jpg");
              break;
                  case ("19"):
              $("#img2").attr("src","https://i.pinimg.com/originals/c1/42/70/c14270041d91168a9f7e851df1aa7e01.jpg");
              break;
                  case ("20"):
              $("#img2").attr("src","https://pictures.abebooks.com/isbn/9781785996320-us.jpg");
              break;
                  case ("21"):
              $("#img2").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1331563731l/12938.jpg");
              break;
                  case ("22"):
              $("#img2").attr("src","https://i.pinimg.com/236x/c0/79/d1/c079d16ae2be38a69f4a4edddc27ff2c--victor-hugo-les-mis%C3%A9rables.jpg");
              break;
                  case ("23"):
              $("#img2").attr("src","https://www.scholastic.com/content5/media/products/75/9780590129275_mres.jpg");
              break;
                  case ("24"):
              $("#img2").attr("src","https://cdn2.mhpbooks.com/2011/11/lotf11-320x484.png");
              break;
                  case ("25"):
              $("#img2").attr("src","https://i.pinimg.com/originals/be/09/1d/be091ddab71d5e09b391598a290c9fc6.jpg");
              break;
                  case ("26"):
              $("#img2").attr("src","https://prodimage.images-bn.com/pimages/9781499806250_p0_v7_s550x406.jpg");
              break;
                  case ("27"):
              $("#img2").attr("src","http://english-e-reader.net/covers/Romeo_and_Juliet-William_Shakespeare.jpg");
              break;
                  case ("28"):
              $("#img2").attr("src","https://images2.penguinrandomhouse.com/cover/9780375756733");
              break;
                  case ("29"):
              $("#img2").attr("src","https://i.pinimg.com/564x/9e/97/d6/9e97d6bfc5f1f70c10bb1169564ff53a.jpg");
              break;
                case ("30"):
              $("#img2").attr("src","https://ih0.redbubble.net/image.349027711.3521/mp,840x830,matte,f8f8f8,t-pad,750x1000,f8f8f8.jpg");
              break;
                case ("31"):
              $("#img2").attr("src","https://www.penguin.co.uk/content/dam/prh/books/313/31366/9780141329390.jpg.transform/PRHDesktopWide_small/image.jpg");
              break;
                case ("32"):
              $("#img2").attr("src","https://youthtravelguide.com/wp-content/uploads/2018/11/The-Kite-Runner-1.jpg");
              break;
                case ("33"):
              $("#img2").attr("src","https://i.pinimg.com/originals/87/b1/35/87b1358218b2d6e2cbc649108040bb99.jpg");
              break;
                case ("34"):
              $("#img2").attr("src","https://images-na.ssl-images-amazon.com/images/I/51DARv5eT3L._SX331_BO1,204,203,200_.jpg");
              break;
                case ("35"):
              $("#img2").attr("src","https://www.sunrisemarian.com/mm5/graphics/00000001/merchant_venice.jpg");
              break;
                case ("36"):
              $("#img2").attr("src","https://i.pinimg.com/originals/5c/3a/5b/5c3a5b4f3cd5540e941fb55ae425f92a.jpg");
              break;
                case ("37"):
              $("#img2").attr("src","https://pictures.abebooks.com/LELIVRE/22827231055.jpg");
              break;
                case ("38"):
              $("#img2").attr("src","https://prodimage.images-bn.com/pimages/9781402794667_p0_v1_s550x406.jpg");
              break;
                case ("39"):
              $("#img2").attr("src","https://i.pinimg.com/originals/b1/af/e7/b1afe76145a24284c2210f8f545aa2dc.jpg");
              break;
                case ("40"):
              $("#img2").attr("src","https://www.picclickimg.com/d/l400/pict/382498966977_/SURPRISES-20-stories-by-O-Henry-1966-Dell.jpg");
              break;
              case ("41"):
              $("#img2").attr("src","https://images-na.ssl-images-amazon.com/images/I/51QXzamJ6VL._SX320_BO1,204,203,200_.jpg");
              break;
              case ("42"):
              $("#img2").attr("src","https://images-na.ssl-images-amazon.com/images/I/51wKydweG1L._SL300_.jpg");
              break;
              case ("43"):
              $("#img2").attr("src","https://kompconkplucra.tk/photo/765997.jpg");
              break;
              case ("44"):
              $("#img2").attr("src","https://www.signals.com/graphics/products/large/HR3292.jpg");
              break;
              case ("45"):
              $("#img2").attr("src","https://nicholassparks.com/wp-content/uploads/1996/07/201612-notebook.jpg");
              break;
              case ("46"):
              $("#img2").attr("src","https://i.pinimg.com/originals/c7/f3/be/c7f3be4d7eeb010eb4280854ec425942.jpg");
              break;
              case ("47"):
              $("#img2").attr("src","https://cdn.britannica.com/21/182021-050-666DB6B1/book-cover-To-Kill-a-Mockingbird-many-1961.jpg");
              break;
              case ("48"):
              $("#img2").attr("src","https://i.pinimg.com/originals/65/93/b8/6593b8516b12ec68e63d53274023215e.jpg");
              break;
              case ("49"):
              $("#img2").attr("src","https://i.pinimg.com/originals/95/e5/cf/95e5cf09f9dbfe3bd6a7cbdc516655f9.jpg");
              break;
              case ("50"):
              $("#img2").attr("src","https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1388639717l/4894.jpg");
              break;
            }
        });
 

        function jump1(){
            url ="detail?id="+id1;
            window.location.href = url;
        }
                function jump2(){
            url ="detail?id="+id2;
            window.location.href = url;
        }
                function jump3(){
            url ="detail?id="+id3;
            window.location.href = url;
        }
    </script>
 
<div class="container">
  <div class="row">
    <div class="col-sm-4"  style="text-align:center">

      <button id="btn1"class="btn btn-light" ><i class="fa fa-book"></i>{{$id[0]}}</button>
        <img id="img0" src="http://images.fanpop.com/images/image_uploads/Deathly-Hallows-book-cover-harry-potter-95901_500_378.jpg" class="img-fluid">
          <h3 class="text-capitalize"><span class="badge badge-secondary">@foreach($title0 as $t)
      {{$t->book_name}}
    @endforeach </span></h3>
      <!-- <p>@foreach($Des0 as $c)
      {{$c->book_text}}
    @endforeach</p> -->

    </div>
    <div class="col-sm-4"  style="text-align:center">
      <button id="btn2" class="btn btn-light"><i class="fa fa-book"></i>{{$id[1]}}</button>
      <img id="img1"src="https://www.w3cschool.cn/attachments/image/20180524/1527144620597215.png" class="img-fluid">
          <h3 class="text-capitalize" font-size: 16px;><span class="badge badge-secondary">@foreach($title1 as $t)
      {{$t->book_name}}
    @endforeach </span></h3>
 <!--      <p>@foreach($Des1 as $c)
      {{$c->book_text}}
    @endforeach</p> -->
    </div>
    <div class="col-sm-4"  style="text-align:center">
      <button id="btn3" class="btn btn-light" ><i class="fa fa-book"></i>{{$id[2]}}</button>
      <img id="img2"src="https://www.w3cschool.cn/attachments/image/20180524/1527144620597215.png" class="img-fluid">
          <h3 class="text-capitalize"><span class="badge badge-secondary">@foreach($title2 as $t)
      {{$t->book_name}}
    @endforeach </span></h3>
  <!--     <p>@foreach($Des2 as $c)
      {{$c->book_text}}
    @endforeach</p> -->
    </div>
  </div>
</div>

</body>
</html>