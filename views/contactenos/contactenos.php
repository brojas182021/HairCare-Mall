<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
   <?php
     require_once 'views/shared/head.php';
   ?>

   <style>
      body{
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }
        .containerContact{
          margin:6.5rem auto 2rem;
          width: 65%;
          background: #fff;
          border-radius: 6px;
          padding: 20px 60px 30px 40px;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .containerContact .content{
          display: flex;
          align-items: center;
          justify-content: space-between;
        }
        .containerContact .content .left-side{
          width: 25%;
          height: 100%;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          margin-top: 15px;
          position: relative;
        }
        .content .left-side::before{
          content: '';
          position: absolute;
          height: 70%;
          width: 2px;
          right: -15px;
          top: 50%;
          transform: translateY(-50%);
          background: #afafb6;
        }
        .content .left-side .details{
          margin: 14px;
          text-align: center;
        }
        .content .left-side .details i{
          font-size: 30px;
          color: #FF9A76;
          margin-bottom: 10px;
        }
        .content .left-side .details .topic{
          font-size: 18px;
          font-weight: 500;
        }
        .content .left-side .details .text-one,
        .content .left-side .details .text-two{
          font-size: 14px;
          color: #afafb6;
        }
        .containerContact .content .right-side{
          width: 75%;
          margin-left: 75px;
        }
        .content .right-side .topic-text{
          font-size: 23px;
          font-weight: 600;
          color: #679B9B;
        }
        .right-side .input-box{
          height: 50px;
          width: 100%;
          margin: 12px 0;
        }
    .right-side .input-box input,
    .right-side .input-box textarea{
        height: 100%;
        width: 100%;
        border: none;
        outline: none;
        font-size: 16px;
        background: #F0F1F8;
        border-radius: 6px;
        padding: 0 15px;
        resize: none;
    }
    .right-side .message-box{
      min-height: 110px;
    }
    .right-side .input-box textarea{
      padding-top: 6px;
    }
    .right-side .button{
      display: inline-block;
      margin-top: 12px;
    }
    .right-side .button input[type="submit"]{
      color: #fff;
      font-size: 18px;
      outline: none;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      background: #679B9B;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .button input[type="button"]:hover{
      background: #637373;
    }

    @media (max-width: 950px) {
      .containerContact{
        width: 90%;
        padding: 30px 40px 40px 35px ;
      }
      .containerContact .content .right-side{
       width: 75%;
       margin-left: 55px;
        }
    }

    @media (max-width: 820px) {
      .containerContact{
        margin: 6rem auto 1rem;
        height: 100%;
      }
       .containerContact .content{
         flex-direction: column-reverse;
       }
      .containerContact .content .left-side{
        width: 100%;
        flex-direction: row;
        margin-top: 40px;
        justify-content: center;
        flex-wrap: wrap;
      }
      .containerContact .content .left-side::before{
        display: none;
      }
      .containerContact .content .right-side{
        width: 100%;
        margin-left: 0;
      }
    }
   </style>

  <body>
    <?php
     require_once 'views/shared/navbar.php';
    ?>

    <div class="containerContact">
      <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Dirección</div>
          <div class="text-one">Tv. 5 #5g - 95 </div>
          <div class="text-two">Soacha, Cundinamarca</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Telefono</div>
          <div class="text-one">+310 2859467</div>
          <div class="text-two">+315 8954596</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">HairCare-Mall@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Envianos un mensaje</div>
        <p>Escribenos y en breve nos pondremos en contacto</p>
      <form action="#">
        <div class="input-box">
          <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
        </div>
        <div class="input-box">
          <input type="email" id="email" name="email" placeholder="Ingresa tu email">
        </div>
        <div class="button">
          <input type="submit" id="envia" value="Enviar Mensaje">
        </div>
      </form>
      </div>
      </div>
    </div>

    <script src="<?php echo constant('URL')?>views/contactenos/js/contactenos.js"> </script>
</body>

</html>
