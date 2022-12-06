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
    font-size:30px;
}
#prop{
    float: left;
    width:25vw;
    height100vh;
    display: inline-block;
}
#main{
    float:right;
    display: inline-block;
    background-color: blue;
    width: 75vw;
    height: 100vh;
    padding-left: 10px;
    padding-top: 10px;
}
.p1{
    margin-bottom: 10px;
    margin-top: 10px;
    margin-left: 6px;
    width: 255px;
    height: 340px;
    display:inline-block;
    position: relative;
}
.card{
    border: 0px solid #FFFFFF;
    border-radius: 12px;
    background-color: rgb(255, 255, 255);
    object-fit: contain;
    padding-right: 4px;
    width: 97%;
    height: 100%;
    font-size:50%;
    -webkit-box-shadow: 0px 4px 14px -2px rgba(0,0,0,0.71); 
    box-shadow: 0px 4px 14px -2px rgba(0,0,0,0.71);
}

.postit{
    display: flex;
    border-radius: 6px;
    padding: 6px;
    width: 90px;
    height: 90px;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    cursor: pointer;
    position: absolute;
    z-index: 1;
    right: 0%;
    -webkit-box-shadow: 2px -2px 15px 6px rgba(0,0,0,0.16); 
    box-shadow: 2px -2px 15px 6px rgba(0,0,0,0.16);
}

#img{
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

h2{
    position: absolute;
    font-size:14px;
}
.link{
    position: relative;
    padding: 4px;
    grid-template-rows: auto auto 1fr;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.efeitos{
    text-decoration: none;
    cursor: pointer;
    overflow: hidden;
}
.envoltorio{
    background-color: Lavender;
    display: flex;
    border-width: 1px;
    border-color:rgb(0, 134, 255);
    border-style: solid;
    border-radius: 6px;
    padding: 2px;
    width: 240px;
    height: 200px;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    cursor: pointer;
    position: relative;
}

img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.info{
    padding: 3px;
    line-height: 2.0;
}

h3{
    font-size: 14px;
    letter-spacing: 0.4px;
    word-spacing: 0.6px;
    color: #252525;
    font-weight: 500;
    text-transform: capitalize;
}

span{
    font-size: 13px;
    letter-spacing: 0.6px;
    word-spacing: 0.6px;
    color: #A0A0A0;
    font-weight: 400;
}
p{
    font-size: 13px;
    letter-spacing: 0.2px;
    word-spacing: 3px;
    color: #666666;
    font-weight: 400;
    text-decoration: none solid rgb(68, 68, 68);
    text-transform: capitalize;
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





