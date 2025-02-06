<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
    <link rel="stylesheet" href="bank.css">
    <link rel="icon" href="image/Lcl_logo.svg.png">
    <script src="style.js"></script>
    <style>
        .modal-header{
            color: #111111;
            text-align: center;
            font-size: 14px;
            font-weight: 500;
        }
        .compte-retrait input{
            background-color: #e9ecef;
        }

        .modal-content{
            height: auto;
            margin-bottom: 65px;

        }

    
        *{
    box-sizing: border-box;
}
html{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

 body{
    box-sizing: border-box;
    margin: 0;
    background-color: #f2f6ff;
    font-size: 20px;
    font-size: 1rem;
}

.contenue{
    /* padding-bottom: 50px; */
}
/* LA NAVEBAR */
.sidebar{
    display: flex;
    position: fixed;
    z-index: 1;
    background-color: #272e80;
    width: 100%;
    color: white;
    height: 70px;
    align-items: center;
    text-align: center;
    text-justify: auto;
}

.sidelog{
    display: flex;
    align-items: center;
    margin: 10px;
}

.sidelog a:nth-child(1){
    margin-right: 5px;
}

.sidebar h4{
    font-weight: 500;
}

.sec{
    display: flex;
    justify-content: center;
    padding-top: 30px;
}


.div-solde{
    display: flex;
    justify-content: space-between;
    background-color: white;
    width: 93%;
    margin-bottom: 40px;
    margin-top: 60px;
    color: #212529;
    padding: 0.7em;
    border-radius: 4px;
}

.monsolde{
    color: lightslategray;
}

.section-pay{
    display: flex;
    justify-content: space-around;
}

.section-pay a{
    text-decoration: none;
}

/* PARTIE DE DETAILS DU COMPTE (retrait etc..) */

.comptes{
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
    animation: identifier 2s;
}

/* Partie retrait carte et virement */

.retrait, .virement, .cartes{
    width: 106px;
    height: 71px;
    display: flex;
    justify-content: center;
    border-radius: 0 0 3px 3px;
}

.cartes a span:nth-child(2) .retrait a span:nth-child(2) .virement a span:nth-child(2){
    font-size: 12px;
}

.operation-label{
    /* font-size: 12px; */
    font-size: 3vw;
}

.retrait a, .virement a, .cartes a{
    color: #111111;
    font-size: 1rem;
    display: flex;
    flex-flow: column;
    justify-content: center;
    align-items: center;
    padding: 10px;
}

.retrait{
    background-color: #f0efff;
    box-shadow: 0 2px 0 0 #6e5fff;
    align-items: center;
    animation: identifier 2s;
    width: 106px;
}


.virement{
    background-color: #fff5e6;
    font-size: 20px;
    width: 106px;
    box-shadow: 0 2px 0 0 #ffcf84;
}

.cartes{
    background-color: rgba(0, 255, 255, 0.099);
    animation: identifier 2s;
    box-shadow: 0 2px 0 0 #2fa7ff;
}

/* partie economie compte et depenses */

.compte-economie, .compte-epargne {
    width: 167px;
    height: 103px;
    align-items: center;
}

.compte-economie article:nth-child(1), .compte-epargne article:nth-child(1){
    margin-left: 10px;
}

.compte-economie{
    border-radius: 4px;
    background-color: white;
    display: flex;
    align-items: center;
    box-shadow: 0 3px 0 0 #3646cd;
}

.compte-epargne{
    border-radius: 4px;
    background-color: white;
    display: flex;
    align-items: center;
    box-shadow: 0 3px 0 0 #3646cd;
}

.compte-depenses{
    margin-top: 20px;
    text-align: center;
    border-radius: 4px;
    background-color: white;
    height: 78px;
    width: 95%;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 3px 0 0 #3646cd;
}

.icone-epargne, .icone-depense, .icone-economie{
    display: flex;
    width: 40px;
    height: 40px;
    align-items: center;
    justify-content: center;
    margin-right: 10px;
    border-radius: 5px;
}

.icone-depense{
    background-color: #f0efff;
}

.icone-epargne{
    background-color: #dbedfb;
}

.icone-economie{
    background-color: #ffefef;
}

.info-compte .mots{
    color:  #707070;
    font-size: 14px;
    margin: 5px 0;
}

.chiffres{
    font-size: 4vw;
    font-weight: 500;
    color: #111111;
}

.info-compte{
    display: flex;
    flex-flow: column;
}

.info-compte nav{
    margin-bottom: 10px;
}

.section-depense{
    display: flex;
    justify-content: center;
}

/* Historique de transactions */

.titre-transac{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-left: 9px;
}

.titre-transac h2{
    font-size: 20px;
}

.titre-transac span{
    margin-right: 8px;
    font-size: 14px;
    color: rgba(100, 148, 237, 0.815);
}

.titre-transac span:hover{
    cursor: pointer;
    color: cornflowerblue;
    text-decoration: underline;
}

.transac{
    display: flex;
    flex-flow: column;
    justify-content: center;
    align-items: center;
}

.transac-div{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    width: 90%;
    height: 73px;
    margin-bottom: 15px;
    padding: 0 10px;
}
.sec-abonnement{
    display: flex;
    flex-flow: wrap;
}

.div-abonnement{
    display: flex;
    flex-flow: column;
    justify-content: space-around;
    background-color: white;
    align-items: center;
    height: 165px;
    width: 46%;
    margin-bottom: 15px;
    box-shadow: 0 2px 0 0 #3646cd;
    border-radius: 5px;
    margin: 0 7px;
    margin-bottom: 15px;
}

.transac-div-art1{
    display: flex;
    align-items: center;
}

.transac-div-art2{
    font-size: 14px;
}

.mot-vir{
    display: flex;
    flex-flow: column;
    font-size: 16px;
    margin-left: 10px;
    justify-content: space-around;
}
/* Partie abonnement */

.arr-logo{
    width: 60px;
    height: 60px;
    background-color: #f3f9e7;
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
}
.info-logo{
    padding-bottom: 10px;
}

.nom-logo{
    font-size: 16px;
    color: #111111;
    font-weight: bold;
}

.logo-descript{
    font-size: 9px;
    color: #707070;
}

.payer{
    color: white;
    width: 54px;
    height: 30px;
    background-color: #272e80;
    padding:  8px 15px;
    font-size: 10px;
    border-radius: 3px;
    margin-right: 3px;
}

.prix{
    font-size: 14px;
    color: #111111;
    font-weight: 400;
}

/* PARTIE CARTES ET AUTRES */

.mes-cartes{
    display: flex;
    flex-flow: column;
    align-items: center;
    width: 100%;
    margin-top: 20px;
}

.card-ul{
    position: absolute;
    top: 70px;
    right: 20px;
    display: flex;
    align-items: center;
    margin: 0;
    padding: 0;
}

.mes-cartes article{
    position: relative;
}

.mes-cartes img{
    max-width: 100%;
    height: auto;
    vertical-align: middle;
}

.mes-cartes li{
    display: flex;
    align-items: center;
    list-style: none;
    background-color: white;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    justify-content: center;
    margin-left: 10px;
}

.appart, .educ{
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-bottom: 20px;
}

.appart-art, .educ-art{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    background-color: white;
    padding: 15px;
    border-radius: 5px;
}

.appart-art h4, .educ-art h4{
    font-size: 16px;
    color: #111111;
    margin: 0 0 3px;
}

.appart-art span:nth-child() .petit, .educ-art .petit{
    font-size: 12px;
    color: #707070;
}

.appart-art span:nth-child(2), .educ-art span:nth-child(2){
    font-size: 14px;
}

.appart-art span:nth-child(2){
    color: #2fa7ff;
}

.educ-art span:nth-child(2){
    color: #89c111;
}

.droit{
    text-align: center;
    font-size: 12px;
    background-color: #272e80;
    color: white;
    padding: 14px;
    width: 100%;
    padding-bottom: 70px;
}

.foot-nav{
    display: flex;
    justify-content: space-between;
    margin: 0 40px;
}

.foot-nav   a{
    text-decoration: none;
    color: #111111;
    font-size: 10px;
}

.foot-nav   a::before{
    content: '';
    width: 18px;
    height: 18px;
    display: block;
    background: url(image/home2.svg) center center / contain no-repeat;
    margin-right: auto;
    margin-bottom: 5px;
    margin-left: auto;
}

.foot-nav .card::before{
    background: url(image/carte.svg) center center / contain no-repeat;
}

.foot-nav .profil::before{
    background: url(image/settings2.svg) center center / contain no-repeat;
}

footer{
    background-color: white;
    padding: 15px 0;
    position: fixed;
    right: 0;
    left: 0;
    bottom: 0;
    z-index: 2;
}

@media only screen and (min-width: 550px){
    .retrait, .virement, .cartes{
        width: 26%;
    }
    .compte-economie, .compte-epargne, .compte-depenses{
        width: 43%;
        height: 78px;
    }

    .div-abonnement{
        margin-left: 30px;
    }

    .sec-abonnement{
        flex-flow: nowrap;
    }
    .sidebar{
        justify-content: space-between;
    }
    .sidebar h4{
        margin-right: 30px;
    }
    .content{
        margin: 0 auto;
        width: 95%;
    }
    .section-pay{
        width: 100%;
    }

    .operation-label{
        font-size: 14px;
    }

    .chiffres{
        font-size: 18px;
    }
}

/* PARTIE DE LA SIDEBAR LATERAL */

.avatar{
    display: flex;
    align-items: center;
}

.identite{
    display: flex;
    flex-flow: column;
    line-height: 1.2;
}

.identite a:nth-child(1){
    font-size: 16px;
    color: #111111;
    font-weight: 500;
    padding: 0;
    margin: 0 0 5px 14px;
}

.identite a:nth-child(2){
    font-size: 14px;
    color: #313131;
    padding: 0;
    margin-left: 14px;
}
.img{
    margin-left: 10px;
}
.img img{
    border-radius: 50%;
}

.sidenav h2{
    background-color: #272e80;
    color: white;
    padding: 15px;
}

.sidenav span h3{
    font-size: 16px;
    margin-bottom: 5px;
    margin-left: 22px;
}

.latbar-nav a{
    font-size: 14px;
    color: #111111;
    padding: 18px 0;
    text-decoration: none;
    display: block;
    border-bottom: 1px solid rgba(54, 70, 205, 0.1);
    font-weight: 400;
}

.latbar-nav .active{
    color: #3646cd;
}

.latbar-nav a:hover{
    color: #3646cd;
}

.latbar-nav a::before{
    content: '';
    width: 17px;
    height: 17px;
    display: inline-block;
    vertical-align: middle;
    background: url(image/home2.svg) center center / contain no-repeat;
    margin-right: 10px;
    margin-top: -2px;
    margin-left: 20px;
}

.latbar-nav .card::before{
    background: url(image/carte.svg) center center / contain no-repeat;
}

.latbar-nav .profil::before{
    background: url(image/settings2.svg) center center / contain no-repeat;
}

.latbar-nav .logout::before{
    background: url(image/logout.svg) center center / contain no-repeat;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 7;
    top: 0;
    left: 0;
    background-color: #f2f6ff;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 25px;
  }
  
  .sidenav a{
    text-decoration: none;
  }
  
  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 50px;
    margin-left: 50px;
  }
  
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  

/*
.sidebar{
    display: flex;
    position: fixed;
    z-index: 1;
    background-color: darkblue;
    width: 100%;
    color: white;
    height: 70px;
    align-items: center;
    justify-content: space-between;
    /* justify-content: space-around; 
}

.sidebar a{
    margin: 0 10px;
}
.sidebar img{
    /* background-color: whitesmoke; 
}
.sidebar h4{
    margin-top: 0;
    margin-bottom: 0;
}

.sec{
    display: flex;
    justify-content: center;
}

.div-solde{
    display: flex;
    justify-content: space-between;
    padding: 0.2em 0.5em;
    background-color: whitesmoke;
    border-radius: 10px;
    width: 90%;
    font-size: 20px;
    margin-bottom: 40px;
    margin-top: 60px;
}

.monsolde{
    color: lightslategray;
}

.section-pay{
    display: flex;
    justify-content: space-around;
}
.comptes{
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
    animation: identifier 2s;
}
.retrait{
    display: flex;
    flex-flow: column;
    justify-content: center;
    padding: 0.2em 1em;
    background-color: rgba(137, 43, 226, 0.072);
    border-radius: 10px;
    font-size: 20px;
    border: solid;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    border-bottom-color: blue;
    height: 70px;
    width: 20%;
    align-items: center;
    animation: identifier 2s;
}

.virement{
    display: flex;
    flex-flow: column;
    justify-content: center;
    padding: 0.2em 1em;
    background-color: rgba(229, 205, 173, 0.483);
    border-radius: 10px;
    font-size: 20px;
    border: solid;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    border-bottom-color:rgba(255, 160, 122, 0.858);
    /* height: 70px; 
    width: 20%;
    align-items: center;
    transition: all 0.5s;
    animation: identifier 2s;
    align-items: center;
    align-content: center;
    justify-items: center;
}
/* .virement:hover{
    transform: scale(1.1);
    transition: all 0.5s;
} 

@keyframes identifier {
    from{
        transform: translateY(-50px);
        opacity: 0;
    }
    to{
        transform:translateY() ;
        opacity: 1;
    }
    
}

.cartes{
    display: flex;
    flex-flow: column;
    justify-content: center;
    padding: 0.2em 1em;
    background-color: rgba(0, 255, 255, 0.099);
    border-radius: 10px;
    font-size: 20px;
    border: solid;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    border-bottom-color:dodgerblue;
    height: 70px;
    width: 20%;
    align-items: center;
    animation: identifier 2s;
    box-shadow: 0 2px 0 0 #2fa7ff;
}

.compte-economie{
    border-radius: 10px;
    font-size: 20px;
    border: solid;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    border-bottom-color: blue;
    background-color: whitesmoke;
    height: 120px;
    width: 35%;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.compte-epargne{
    border-radius: 10px;
    font-size: 20px;
    border: solid;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    border-bottom-color: blue;
    background-color: whitesmoke;
    height: 120px;
    width: 35%;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.compte-depenses{
    margin-top: 20px;
    text-align: center;
    border-radius: 10px;
    font-size: 20px;
    border: solid;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    border-bottom-color: blue;
    background-color: whitesmoke;
    height: 120px;
    width: 90%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.section-depense{
    display: flex;
    justify-content: center;
}

.mots{
    color: lightslategray;
    font-size: 15px;
}

.titre-transac{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 0 20px;
}

.titre-transac h2{
    float: left;
}

.titre-transac span{
    float: right;
    color: rgba(100, 148, 237, 0.815);
}

.titre-transac span:hover{
    cursor: pointer;
    color: cornflowerblue;
    text-decoration: underline;
}

.transac{
    display: flex;
    flex-flow: column;
    justify-content: center;
    align-items: center;
}

.transac-div{
    display: flex;
    justify-content: space-between;
    padding: 0.2em 0.5em;
    background-color: whitesmoke;
    border-radius: 10px;
    width: 90%;
    font-size: 20px;
    margin-bottom: 40px;
    align-items: center;
    border: solid;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    border-bottom-color: lightslategray;
}

.transac-div-art1{
    display: flex;
    align-items: center;
}
.mot-vir{
    display: flex;
    flex-flow: column;
    font-size: 16px;
    margin-left: 10px;
    justify-content: space-around;
} */

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    bottom: 0;
    width: 100%; /* Full width */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s;
  }
  
  /* Modal Content */
  .modal-content {
    position: fixed;
    bottom: 0;
    background-color: #f2f6ff;
    width: 100%;

    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s;
    border-radius: 5px 5px 0 0;
  }

  .modal-sms{
    display: none; 
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    bottom: 0;
    width: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    -webkit-animation-name: fadeIn;
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s;
  }

  .modal-sms-content{
    background-color: #f2f6ff;
    border-radius: 5px;
    margin: 0 auto;
    display: flex;
    flex-flow: column;
    align-items: center;
    max-width: 400px;
    justify-content: center;
    margin-top: 40px;
    padding: 20px 10px;
  }

  .modal-sms-content p{
    text-justify: auto;
    font-size: 30px;
    text-align: center;
  }
  
  /* The Close Button */
  .close {
    color: #000;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  
  .modal-header {
    padding: 2px 16px;
    color: white;
  }

  .modal-header h5{
    color: #111111;
    text-align: center;
    border-bottom: 1px solid rgba(54, 70, 205, 0.1);
    font-size: 14px;
    font-weight: 500;
  }

  .modal-header h5::before{
    content: '';
    display: block;
    background: url(image/arrow-down.png) center center / contain no-repeat;
    width: 25px;
    height: 25px;
    margin: 5px auto;
  }

  .modal-header .block-virement::before{
    background: url(image/right-arrow.png) center center / contain no-repeat;
    width: 17px;
    height: 17px;
  }
  
  .modal-body {padding: 2px 16px;}

  .modal-body form div{
    width: 100%;
  }
  .modal-body form{
    display: flex;
    flex-flow: column;
    justify-content: center;
    align-items: center;
    justify-content: space-around;
    height: 100%;
  }

  select, input{
    width: 100%;
    border: 1px solid #e1e1e1;
    line-height: 1.5;
    height: auto;
    display: block;
    padding: 12px 2px;
    margin-bottom: 20px;
    background-color: #fff;
    color: #111111;
    margin-top: 5px;
  }

.form-blocked button{
    font-size: 14px;
    background-color: #272e80;
    border: 0;
    padding: 12px 0.3em;
    width: calc(100% + 6px);
    color: white;
    margin-top: 10px;
    border-radius: 1px;
    cursor: pointer;
}

.form-blocked input[type="submit"]{
    font-size: 14px;
    background-color: #272e80;
    border: 0;
    padding: 12px 0.3em;
    width: calc(100% + 6px);
    color: white;
    margin-top: 10px;
    border-radius: 1px;
    cursor: pointer;
}

.form-blocked button:hover{
    background-color: #272e80e4;
}

 .modal-body .compte-retrait{
  }
select{
    width: calc(100% + 6px);
}

input{
    /* width: calc(90% - 2px); */
}

option{
    /* padding: 2px; */
}

  .modal-footer {
    padding: 2px 16px;
    color: white;
  }
  
  /* Add Animation */
  @-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
  }
  
  @keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
  }
  
  @-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }
  
  @keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }
  
  

  /* DEUXIEME PARTIE */

.contenair{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #272e80;
    color: white;
}

.setting-contenair{
    display: flex;
    margin-top: 60px;
    flex-flow: column;
    align-items: center;
}

.setting-liste{
    width: 90%;
    box-shadow: 0px 2px 4px 0px rgb(74 74 74 / 5%);
    background-color: white;
    padding: 0 15px;
    border-radius: 5px;
}

.setting-user{
    position: relative;
    border-radius: 5px;
    margin-bottom: 10px;
}

.setting-user label{
    position: absolute;
    background-color: #272e80;
    width: 20px;
    height: 20px;
    font-size: 11px;
    display: flex;
    align-items: center;
    border-radius: 50%;
    justify-content: center;
    right: 0;
    top: 50%;
    transform: translate(9px, -50%);
    cursor: pointer;
}

.setting-user img{
    border-radius: 50%;
}

.setting-liste ul{
    width: 100%;
    padding: 0 5px;
    margin: 0;
}

.setting-liste li{
    font-size: 14px;
    padding: 14px 0;
    width: 100%;
    list-style: none;
    border-bottom: 1px solid rgba(54, 70, 205, 0.1);
    color: #111111;
    position: relative;
    cursor: pointer;
}

.setting-liste li::after{
    content: '';
    width: 15px;
    height: 20px;
    display: inline-block;
    vertical-align: middle;
    background: url(image/right-chevron.png) center center / contain no-repeat;
    right: 0;
    position: absolute;
}


    </style>

    <script>

// MODAL NOM ET PRENOMS
  
function NomprenomsO() {
    document.getElementById("Nomprenoms").style.display="block";
  }
  
  function NomprenomsC() {
    document.getElementById("Nomprenoms").style.display = "none";
  }
  
  window.onclick = function(event4) {
    if (event4.target == document.getElementById("Nomprenoms")) {
      document.getElementById("Nomprenoms").style.display = "none";
    }
  }
  
  // MODAL EMAIL
  
  function emailEditO() {
    document.getElementById("edit-email").style.display="block";
  }
  
  function emailEditC() {
    document.getElementById("edit-email").style.display = "none";
  }
  
  window.onclick = function(event5) {
    if (event5.target == document.getElementById("edit-email")) {
      document.getElementById("edit-email").style.display = "none";
    }
  }
  
  // MODAL ADRESSE
  
  function adresseEditO() {
    document.getElementById("edit-adresse").style.display="block";
  }
  
  function adresseEditC() {
    document.getElementById("edit-adresse").style.display = "none";
  }
  
  
  // MODAL OLD
  
  function naissanceEditO() {
    document.getElementById("edit-naissance").style.display="block";
  }
  
  function naissanceEditC() {
    document.getElementById("edit-naissance").style.display = "none";
  }

  // MODAL OLD
  
  function mdpEditO() {
    document.getElementById("edit-mdp").style.display="block";
  }
  
  function mdpEditC() {
    document.getElementById("edit-mdp").style.display = "none";
  }

    </script>
</head>
<body>
    <!-- MENU LATERAL -->
    <section id="mySidenav" class="sidenav">
        <div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                <img src="image/Close.svg" width="30px" height="30px" alt="">
            </a>
        </div>
        <div class="avatar">
            <span class="img">
                <img src="image/avatar.jpg" width="40px" height="40px" alt="">
            </span>
            <span class="identite">
            @if(auth()->check())
    <p>{{ auth()->user()->name }}</p>
@endif
                <a href="#">N°15458880</a>
            </span>
        </div>
             @if(auth()->check())
    <h2>{{ auth()->user()->solde }}€</h2>
@endif
        <span>
            <h3>Menu</h3>
        </span>
        <nav class="latbar-nav">
            <a class="acceuil"  href="{{ route('index') }}">Acceuil</a>
            <a class="card" href="{{ route('my-cards') }}">Cartes et Comptes</a>
            <a class="profil" href="{{ route('settings') }}">Profil
            <a class="logout" href="deco.php">Déconnexion</a>
        </nav>
    </section>

    <header>
        <div class="contenair">
            <div>
                <a href="#">
                    <img src="image/menu.svg"  width="30px" height="30px"  alt="" onclick="openNav()">
                </a>
            </div>
            <div>
                <h3>Mon profil</h3>
            </div>
            <div class="div-none"></div>
        </div>
    </header>
    <section class="setting-contenair">
        <div class="setting-user">
            <img src="image/avatar.jpg" width="64px" height="64px" alt="">
            <label for="user">
                <img src="image/camera.svg" width="17px" height="18px" alt="">
            </label>
            <input style="display: none;" id="user" type="file">
        </div>
        <div class="setting-liste">
            <ul>
                <li onclick="NomprenomsO()">Nom et prénoms</li>
                <li onclick="emailEditO()">E-mail</li>
                <li onclick="adresseEditO()">Adresse</li>
                <li onclick="naissanceEditO()">Date de naissance</li>
                <li onclick="languageEditO()">Language</li>
                <li onclick="mdpEditO()">Mot de passe</li>
                <li>Son Notifications</li>
               
            </ul>
        </div>
    </section>
    <!-- modal name secondname -->

<div id="Nomprenoms" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span onclick="NomprenomsC()" class="close">&times;</span>
        <h4 class="">Nom et prénoms</h4>
      </div>
      <div class="modal-body">
        <form class="form-blocked" action="">
            
            <!-- compte pour le retrait -->
            <div class="compte-retrait">
                <input placeholder="Thomas Savoye" value="            @if(auth()->check())
    {{ auth()->user()->name }}
@endif" type="text">
            </div>
        </form>
      </div>
    </div>
</div>

    <!-- modal name email -->

    <div id="edit-email" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span onclick="emailEditC()" class="close">&times;</span>
            <h4 class="">E-mail</h4>
          </div>
          <div class="modal-body">
            <form class="form-blocked" action="">
                
                <!-- compte pour le retrait -->
                <div class="compte-retrait">
                    <input type="email">
                </div>
                <button>Comfirmer</button>
            </form>
          </div>
        </div>
    </div>

    <!-- modal adresse -->

    <div id="edit-adresse" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span onclick="adresseEditC()" class="close">&times;</span>
            <h4 class="">Adresse et pays</h4>
          </div>
          <div class="modal-body">
            <form class="form-blocked" action="">
                
                <!-- compte pour le retrait -->
                <div class="compte-retrait">
                    <input value="Paris, FRANCE" type="text">
                </div>
                <button>Comfirmer</button>
            </form>
          </div>
        </div>
    </div>

    <!-- modal naissnace -->

    <div id="edit-naissance" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span onclick="naissanceEditC()" class="close">&times;</span>
            <h4 class="">Date de naissance</h4>
          </div>
          <div class="modal-body">
            <form class="form-blocked" action="">

                <!-- compte pour le retrait -->
                <div class="compte-retrait">
                    <input type="date">
                </div>
                <button>Comfirmer</button>
            </form>
          </div>
        </div>
    </div>
    
    <!-- modal language -->

    <div id="edit-mdp" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div style="border-bottom: 1px solid rgba(54, 70, 205, 0.1);" class="modal-header">
            <span onclick="mdpEditC()" class="close">&times;</span>
            <h4 class="">Changer le mot de passe</h4>
          </div>
          <div class="modal-body">
            <form class="form-blocked" action="">

                <!-- compte pour le retrait -->
                <div class="compte-retrait">
                    <div>
                        <label for="mdp-pass">Ancien mot de passse</label>
                        <input style="background-color: white;" id="mdp-pass" type="password">
                    </div>
                    <div>
                        <label for="mdp-new">Nouveau mot de passe</label>
                        <input style="background-color: white;" id="mdp-new" type="password">
                    </div>
                    <div>
                        <label for="mdp-confirm">Confirmer mot de passe</label>
                        <input style="background-color: white;" id="mdp-confirm" type="password">
                    </div>
                </div>
                <button>Changer mot de passe</button>
            </form>
          </div>
        </div>
    </div>

    <footer>
        <nav class="foot-nav">
        <a class="acceuil"  href="{{ route('index') }}">Acceuil</a>
            <a class="card" href="{{ route('my-cards') }}">Cartes et Comptes</a>
            <a class="profil" href="{{ route('settings') }}">Profil
        </nav>
    </footer>
</body>
</html>