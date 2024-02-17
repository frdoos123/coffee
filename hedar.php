<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sweets.css">
    <title>Cars</title>
</head>
<body>
    <!--start header-->
     <header class="header">
      <div class="contener">
        <a href="#" class="sweet">Coffee</a>
        
                <a class="link" href="add.php">ADD</a>
                <a class="link" href="view.php">Show</a>
                <a class="link" href="#contact">Home</a>
                <a class="link" href="#contact">contact</a>
                <a class="link" href="#setting">setting</a> 
      </div>
    <section class="home" id="home">
       <div class="text">
                <span>For Making a Coffee </span><br>
                <a href="shop.php" class="btn">shop now</a>
       </div>
       </section>
<style>
  html{
    scroll-behavior: smooth;
    transition: 0.3s;
}

.header{
    padding-left: 15px;
    padding-right: 15px;
    margin-left: auto;
    margin-right: auto;
    background-color: white;
    box-shadow: 0 0 10px #ddd;
    position: relative;
    height: 72px;
}
a{
    text-decoration: none;
  
}
/*start header*/
.header .contener{
 display: flex;

 align-items: center;
 flex-wrap: wrap;
 position: relative;
 font-style: italic;
}
.header .sweet{
 color: #333;
 margin-right: 250px;
 margin-left: 20px;
 font-size: 30px;
 font-style: italic;
 color:#b65218;
 font-weight: bold;
 height: 72px;
 display:flex;
 justify-content: center;
 align-items: center;
}
.link{
padding: 0 30px;
 color: #333;
 color:#b65218;
 font-size: 20px;
 overflow: hidden;
}
.link::before{
    content:"";
    position: absolute;
    width: 100%;
    background-color: #333;
    top: 0;
    left: -100%;
}
.link:hover{
    color: black;
    background-color: #FAFAFA;
}
/*end header*/

/*start home*/
.home{
    display: flex;
    align-items: center;
    min-height: 85vh;
    background-image: url(2.jpg);
    background-size: cover;
    background-position: center;
}
.home .text{
    max-width: 40rem;
}
 h3{
    font-size: 4rem;
    margin-bottom: 20px;
    margin-left: 20px;
    color: #333;
    font-style: italic;
}
 span{
    font-size: 2rem;
    margin-left: 20px;
    color:white;
    padding:1rem 0;
    line-height: 1.5;
    font-style: italic
}
.btn{
    display: inline-block;
    margin-top: 1rem;
    margin-left: 30px;
    border-radius: 5rem;
    background: #b65218;
    color: white;
    padding: .9rem 3rem;
    cursor: pointer;
    font-size: 1rem;
}
.btn:hover{
    cursor: pointer;
    background:white;
    color:black;
 ;
}
/*end home*/
/*strt about*/
.title{
 margin: 100px auto;
 border: 2px solid #333;
 padding: 10px 20px;
 font-size: 30px;
 font-style: italic;
 width: fit-content;
}
.title:hover{
    border: none;
    color: pink;
    background-color: #FAFAFA;
}
.img{
    width: 30%; 
    
}
.content{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: rem;
    padding-top: 6rem;
}

/*end about*/


</style>

</body>
</html>