<?php header("Content-type: text/css");?>
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
}

.card{

    width: 13vw;
    height: 25vh;
    font-family: Tahoma, Geneva, sans-serif;
    display:inline-block;
    margin: 1em;
    font-size:50%;
    -webkit-box-shadow: 0px 4px 14px -2px rgba(0,0,0,0.71); 
    box-shadow: 0px 4px 14px -2px rgba(0,0,0,0.71);
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



