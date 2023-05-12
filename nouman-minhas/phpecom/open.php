    <header class="header">
    <a href="#"  class="logo">
        <img src="images/13.jpg"  alt="">
</a>
 <nav class="navbar">
         <ul>
             
                  <li>
                    <a href="#">Login page</a>
                    <ul>
                        <li><a href="#">Admin page</a></li>
                        <li><a href="#">Registration page</a></li>
                    <li><a href="#">Message send</a></li>
                        <li><a href="#">Admin login</a></li></ul></li>

                
         </ul>
     </nav>

<style type="text/css">
  .header .navbar ul{
    list-style: none;

}
.header .navbar ul li{
    position: relative;
    float: left;
}
.header .navbar ul li a{
    font-size: .9rem;
    padding: 50px;
    color: blue;
    display: block;
    margin: 0 20px;
    font-family: sans-serif;
    text-align: left;

    margin-left: 33rem;

}
.header .navbar ul li a:hover{
    color: hotpink;

   
}
.header .navbar ul li ul{
    position: absolute;
    left: 0;
    line-height: 15px;
     
    width: 180px;
    box-shadow: 0 5px 25px rgb(0 0 0 / 70%) ;
    background: #E00071;
    display: none;
    pointer-events: none;
   margin-left: 22rem;
    transition: 0.5s;
    opacity: 0;
    transition-property: transform,opcity;
}
.header .navbar ul li ul li{
    width: 88%;
    border-top: 1px solid rgba(0, 0, 0, 1);
    margin-left: -1rem;
}.header .navbar ul li ul li > a{
  margin-left: 1rem;
}

.header .navbar ul li:hover > ul{
    display: initial;
    opacity: 1;
        pointer-events: all;
    transform: translateY(0);
}
</style>