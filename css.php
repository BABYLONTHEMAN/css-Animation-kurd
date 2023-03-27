<?php ?>
<style> 


body{
    background-color: rgb(126, 160, 165);
}
    div {
        background-color: #715af3;
        width: 151px;
        height: 100px;
        animation-name: example;
        animation-duration: 1s;
        animation-direction: alternate ;
        animation-iteration-count: infinite;
        border-radius:  30px;
        box-shadow: 0 0 4px #999;
        padding: 16px 32px 32px 32px;
    }
    
    @keyframes example {
        from {color: #715af3; padding: 16px 32px 32px 32px;}
        to   { color: #999;   padding: 32px 32px 32px 32px;}
    }
    


    .a,div {
        padding: 22px 10px;
        width: 151px;
        height: 100px;
        filter: grayscale(5%);
        animation-name: example ;
        animation-duration: 2.5s;
        animation-iteration-count: infinite;
        border-radius:  30px;
        padding: 16px 32px 32px 32px;
        
        font-family:'Source Sans Pro',sans-serif;
  border-radius:5px;
  color:#b01a1a;
  padding-top:25px;
  margin-left:auto;
  margin-right:auto;
  max-width:230px;
  background-color:#282A35
  border-radius:  30px;
    }
    
    @keyframes example {
        
        from {color: #715af3; padding: 16px 32px 32px 32px;}
        to   { color: #999;   padding: 32px 32px 32px 32px;}
        0% {transform: rotate(0deg);left:0px;}
25% {transform: rotate(20deg);left:0px;}
50% {transform: rotate(0deg);left:500px;}
55% {transform: rotate(0deg);left:500px;}
70% {transform: rotate(0deg);left:500px;background:#1ec7e6;}
100% {transform: rotate(-360deg);left:0px;}
    }
    

    .b {

        width: 151px;
        height: 100px;
        animation: b 8s infinite;
        padding:0px;
        border-radius:50px;
        
        font-family:'Source Sans Pro',sans-serif;
  border-radius:5px;
  color:#b01a1a;
  margin-left:auto;
  margin-right:auto;
  max-width:230px;
  background-color:yellowgreen;
  position: relative;
text-align: center;
    }
    
    @keyframes b {
    
        0% {transform: rotate(0deg);left:0px;}
25% {transform: rotate(20deg);left:0px;}
50% {transform: rotate(0deg);left:500px;}
55% {transform: rotate(0deg);left:500px;}
70% {transform: rotate(0deg);left:500px;background:#1ec7e6;}
100% {transform: rotate(-360deg);left:0px;}

from {
        left: -300px;
        border-radius:20px;
        text-align: center;

    }
    to {
        border-radius:20px;
        text-align: center;

        left: -300px;
    }
    
    }
    
  

    </style>
    
    <div>
        this div for simulation
        
        </div>
        <br>
        
        <div>
            other div
            
         </div> 
         
         <br>
        
         <form class="a">
         @keyframes example             
</form>
<p class="b"> 
<br>
<br>

position: relative;

</p>
        <?php ?>