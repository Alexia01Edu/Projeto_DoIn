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
    display:inline-block;
    margin: 3em;
    font-size:50%;
}

@media only screen and (max-width: 992px){
  div.prop{
            display:none;
        }
    div#main{
        width:100vw;
    }
}


