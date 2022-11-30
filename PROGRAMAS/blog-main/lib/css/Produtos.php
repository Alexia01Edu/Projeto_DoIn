<?php header("Content-type: text/css");?>

body{
    padding: 0%;
    margin: 0%;
    font-size:30px;
    font-family: Tahoma, Geneva, sans-serif;
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
}
.p1{
    margin: 10px;
    width: 250px;
    height: 340px;
    display:inline-block;
    position: relative;
}
.card{
    object-fit: contain;
    width: 97%;
    height: 100%;
    font-size:50%;
    -webkit-box-shadow: 0px 4px 14px -2px rgba(0,0,0,0.71); 
    box-shadow: 0px 4px 14px -2px rgba(0,0,0,0.71);
}

.postit{
    display: flex;
    border-radius: 6px;
    padding: 8px;
    width: 80px;
    height: 80px;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    cursor: pointer;
    position: absolute;
    z-index: 1;
    right: 0%;
    -webkit-box-shadow: -3px 4px 5px 3px rgba(0,0,0,0.29);
-moz-box-shadow: -3px 4px 5px 3px rgba(0,0,0,0.29);
box-shadow: -3px 4px 5px 3px rgba(0,0,0,0.29);
}
#img{
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: contain;
}
h2{
    position: absolute;
    font-size:16px;
}
.link{
    border: 0px solid #FFFFFF;
    border-radius: 12px;
    position: relative;
    padding: 6px;
    padding-bottom:1px ; 
    background-color: rgb(255, 255, 255);
    grid-template-rows: auto auto 1fr;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.efeitos{
    transition: box-shadow 0.4s ease 0s;
    text-decoration: none;
    cursor: pointer;
    overflow: hidden;
    grid-template-areas:
        "image"
        "body";
}
.envoltorio{
    margin-left: auto;
    margin-right: auto;
    display: flex;
    border-width: 1px;
    border-color:rgb(0, 134, 255);
    border-style: solid;
    border-radius: 6px;
    padding: 8px;
    width: 210px;
    height: 180px;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    cursor: pointer;
    position: relative;
}
h3{
    font-size: 18px;
    letter-spacing: 0.4px;
    word-spacing: 0.6px;
    color: #252525;
    font-weight: 400;
    text-decoration: none;
    font-style: normal;
    font-variant: normal;
    text-transform: capitalize;
}
.info{
    
}
span{
    font-size: 13px;
    letter-spacing: 0.6px;
    word-spacing: 0.6px;
    color: #A0A0A0;
    font-weight: 400;
    text-decoration: none;
    font-style: normal;
    font-variant: normal;
    text-transform: none;
}
p{
    font-size: 14px;
    letter-spacing: 0.2px;
    word-spacing: 3px;
    color: #666666;
    font-weight: 400;
    text-decoration: none solid rgb(68, 68, 68);
    font-style: normal;
    font-variant: normal;
    text-transform: uppercase;
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





