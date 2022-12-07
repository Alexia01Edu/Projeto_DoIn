<?php header("Content-type: text/css");?>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Tahoma, Geneva, sans-serif;
}

body{
    padding: 0%;
    margin: 0%;
}
#prop{
    float: left;
    width:25vw;
    height100vh;
    display: inline-block;
}
#main{
    margin-top:110px;
    float:right;
    display: inline-block;
    background-color: Lavender;
    width: 75vw;
    height: auto;
    padding-left: 10px;
    padding-top: 10px;
    font-size:30px;
}


@media only screen and (max-width: 992px){
  div.prop{
            display:none;
        }
    div#main{
        width:100vw;
    }
}
@media (max-width: 575.98px) { 
    div.card{
        width: 45%;
        height: 55%;
    }
 }

@media (min-width: 576px) and (max-width: 767.98px) {
    div.card{
        width: 200px;
        height: 50%;
        margin: 6px;
    }
 }

@media (min-width: 768px) and (max-width: 991.98px) { 
    
 }

@media (min-width: 992px) and (max-width: 1199.98px) { 
    
 }

@media (min-width: 1200px) { 
    
 }





