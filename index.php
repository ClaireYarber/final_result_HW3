<?php
$pageTitle = "Home";
include "view/header.php"; // This can include opening HTML tags, and the head section
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <style>
    /* Add your CSS here */
    .carousel-container {
      max-width: 100%;
      overflow: hidden;
    }

    .carousel {
      display: flex;
      transition: transform 0.5s ease;
    }

    .carousel img {
      width: 100%; /* This ensures that all images are the same size */
      height: auto; /* Maintain aspect ratio */
      object-fit: cover; /* Ensures the image fills the space without distorting */
    }
  </style>
</head>
<body>

<h1>Home</h1>

<!-- Carousel Section -->
<div class="carousel-container">
  <div class="carousel">
    <div><img class="carousel-image" src="https://media-cldnry.s-nbcnews.com/image/upload/rockcms/2024-02/240102-lewis-hamilton-mb-1209-65adb6.jpg" alt="F1 Driver 1"></div>
    <div><img class="carousel-image" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSERISEhMSFhIXGBYYEhYVGBUWGxgXGBgWFxUaFxgaHSggGRomGxcXITEhJSkrLi4vFx8zODMtNyguLisBCgoKDg0OGxAQGzclICUtLS0vLystLS0tLS0tLS0tLS0rLS0tKy0tLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABgMEBQcIAQL/xABBEAACAQIEAwYDBQYDCAMAAAABAgADEQQFEiEGMUEHEyJRYXEygZEUQnKhwSNSYoKx8DNjkggVQ3Oi0eHxFiR0/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAEDBAIF/8QAJREBAAICAgMAAQQDAAAAAAAAAAECAxEhMQQSQVEiMmGxFCPw/9oADAMBAAIRAxEAPwDeMREBERAREQEREBERAREQERNTdonaoKNVsJg7F1OmtWv4VYHxKvmRyJ2tvvsZEzpMRts7HZlRoi9WrTQfxMB/WYatx3gF1D7QrFRchQx+QNrX9JzJjs3xFaoWrVXLXN9/7/OZXKMQfhQX/vr/AHeV2vMdLqY4meW58b2t4WmR+xrlTyY6Fv56QTvJbw5xHh8dTNTDvqANnUizKfJl/XkehnN2YZQ9Zyx7x25eBQAD0FzsvsbS1DYnA6+5rVKZZSrWbS1tja6n0kVyb7TfFrqHUGcZ5h8KAa9VUvcqDckgc7KoJP06zF5Xx7l2IYLTxKBibBagekSfId4Bf5TmFs4quwatUeoQLDvGZrC9+p85eJnSsNJRbf35mdTaY+OK0rP11vE584K7RqmDZUctUw/I02NyvrTY/D+G9vbnN8ZXmNPEUkrUmDU2F1P9QR0IOxE6raJc2pNV3EROnBERAREQEREBERAREQEREBERAREQEREBERAREQERECN9ofEf2DAVq4/xD+zoD/Me4U+w3Y+imcqNfmTz8/Pzk47XeJHxWY1qYdjRoHu6ag+HUu1RrctWokX8haQY263nEytrGoeLMjg8WafIE3+6Li/4rdPSWWEGtrLy85JspwYLDw7/AN2lWS0R2uxUm08LR0x2IAtqVBsqJ4AB5ADp6cpQXhbFk/4Te82vkeB2F5IKOGHQTN/kW+Q1T41fsy0RiuEcUo1Gkbelj+UjtRSrEEWIO4nTmIwIIItNU8ecIsrmsgup3Npbj8id6spyeNGt0QOkT6zafZBxmcLVGHrv/wDVqmyseVOp90/wg2sflNbYWirMFuFPW+3/ALn1iGakxUkEHqORHQ+8umeeFERxz07FBiQ7slzVsTldB3N2TXTJ9EYhb+unTJjLoUTGp0REQgiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgJj+IcxGGwuIxB5UqVR/mqkj87TITX/bljjTyl0Fx31WlTNvK5qH6imR84lMObqtS5LMdTm5Y+ZO5P1lCoxJtK7+koqJxDuWRytfEqzY2UYEDS01zl1UK2puV5OMv4rora6OQLcrE+t/SZM9bWnhu8a9axy2Bl1AgXmXw6SK5NxnhXITUwPTUpElmHxCsbAi9pRFJjtfa++lUCWuPwwdSGAIl4xtueUtq+PpD4nQH1IETXbmJ003x/wj3WqvSHgHxDyHnIQHJFj7TfebV6NanUpBla6kEAg9JoerR03HVSQfdTY/0mrx7zMes/GbyaRE+0fXTXY3g+6yfC+b66h/mdiPytJrI52cpbKsB/+ekfqoP6yRzXDFPZERCCIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAmu+3ekTlJIW+mtRYn90XK3+rAfObEkd7RMVTpZXjWqqGTuXUqTa5fwKL9PEwkT0mvbk1eZ8jv8APrFMXl1Vw9xqW1+bAdL8rSrlOH1AkziZ42tis70r5dgtRFxtJvlowFMXr6SRsxJFvUbmxPpuZhMPl7Fbqbe0qYfhc1FZD131G5Pt+fpM1rVnuWulLVjiNpZRyfLa41UfD5FW2/InTvtLzI64p1TT1XN7De8uUy2+GRGADIDesSde/PkF22HhNxtveRfheg/2vvHPh1kL0BttcDewlV9fJX44n7DZGZUyUAvY85DcbwzTr1P2mKIA5qLc+tyT7fSS7iqi7UiKZINuY529JrHFZBiKjoUL2VWDguy+IhgGGi2wJU266d73iv7u9In9m9bSfE8EUxTulZ2sPD8P1Fus1FiqbGvWp83ZyAB1ZrC3zJm7svpVUrlQHbD6RZnJ1A7XBvuy9RfcXI36RXgjhB8RndepYdxhq4qVCerfHTUDruLn0Evxc2mGfPxWJb6wWHFOnTpgABFVQBsAFAGw8tpXiJrYCIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgJEe1fCmrlWJUf5RPstamzfkCflJdLbMsGtajVot8NRGQ+zAj9ZE8w6rOpiXItVyapCiwsbj2mSyugAp9TcS/wA/yQ0KrJWXTXRiW09d9iL/AHSLH5y2wh22mbfDZ66naX8OEEWNpKsFgV5j8pr7KcVpaT7J8TqEyXrqW2k7qr5qp7trnYAyLZTh3Z6baSEvcE7A+0zXGzVBQtTF9wXtz0g+ID3kOxXFVYVFULqprazqeXK91tt9ekRSZ6T7xWOW3qo8KnnsLyj9kXyExdPOGFFCKbOTb4dPz3YjaZehXubHYyeNq9TEPGo7S54BwHd/bH61cRq+QpUkH5q0p1XmS4VYlXuLbj9Zdg4uz543jlnYiJueeREQEREBERAREQEREBERAREQEREBERAREQEREBERAj3GnDdPG4aopVe+C3o1LDUpHiA1c9JtYj1nOGBNmdfPcfr+k6wnKmMAGIcqLKWcD2ubfpKckNGGVzSezCTPIMXsJBw28kvDDgvYzJljhuw250lONzBdG/XaYvK6dBKmptF/Uj5XvLXi/ANU0d2zrYWIU2mIyvIRzfvT52Y3+krjWu18czrTY2Cq3UKdI3OgXB26WtMiSNj1kLweTowIR6wPqbWkoy7DMigPUaoR95rX/ISOEZKxHS+UFmVQCSTyH1kpyzCmmvitc7m3T0mB4dTVXv0VSfrYD+pkqm3x6Rr2eb5N536kRE0spERAREQEREBERAREQEREBERAREQEREBERAREQEREBOV8/olK1ZeqVag/0uR+k6K434lTLsHVxTgErtSS9tdRvgX26n0BnOlXHHEk13066pZ30iw1OSzWHQXJlWX5K/B9hZriQd5lsrzIIwMwmJwhU7T4W4lMxFoXxaay2dh8zRwDzvtMnhaYqWsSB5DaapoYtlIkxybiOmoFyb8jM9sWmmmfaeYfBBdxLl6oCyM0eKKZ2DE/ImZ/hvCHFVQXBFIeIr1a1rX8hcyK49zqC9+NylfDOFK0y5G77j8I+H9T85mJ4BPZ6Va+sah5V7e07IiJ05IiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAieEzXvad2j0sFh9GGenVxVUsiBGDd3YeJ2CnmLiw6n2ga37fOKvtOLXB02BpYb47cmrMPF/pWy+5aQHIsfoYIx8JOx8j/ANjMnjOC8QtBqpJaqNRq0gNRXSQHDOCf2w1BihF7XNzY2i4Mi0RaNOq2ms7hs5MCH+c+a3D9xsDMPwhxSlK1PEX0clexOn0Yc/nNpZa1Ksoak6OvmpB/pPOvW9JepS+PJDW9DKzqKMPa8z+U8LKxF/pJLmWUrcOBae4Ju7KnpOZvLqKVfeFyCjSBIXfoTJrwlSH7QjoFUfmT+kjuKqaioHK4vKHC/Fypm75e5AWpSQ0/+cutmX5oQf5fWW4I/Wo8if8AW2ZERN7ziIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiJCOLu0/BYIMiuMRiBypUmBAP+ZUFwn5n0gTZmABJIAHMnpIBxL2uYDDEpSLYmoNrUbaAfWqdj/LqmneLeN8bmJIqvoo9KFO4S38XWoffbyAlhlnDeIxC60Q6NvEdrjUqsUHNwuq503sAYTpmOMe0zG5gjUTooYdtmp07ksL8nqHcj0Fget5EaWQV3oVK60nNFObAdOrAdVG1z0v72ltHGZbhKbMEbE1iSaTG1kAPgLGogVSRuVCMRaxJvMHmme4nHOKYUldytKkCEHK5PmBYbnl9TBwuuGeNGp4ikcYXdUBVHXZ0upGu62Z3ICprJ1BbgGX3FvA7NrxmCJrU3Z6rINJIViXvS0se8QAkfvDTcixEin2FA4FVtubmnZz+EH4bnzuQPylfJs/xGCY90x7s38DeIAnkRtswIVrjYsiEg2AhG2IxNFqTlWVlOxKsCpFxcXB3GxB+cr4HGNTOqmzq3mjFT9RNnrWwOcUa4LUcNX1l6YZQ9QCwAJqGxqFiFBVbhVRABckyC8QcFY3CFi9Fyi6rugLKAGcaj1UEIW35Blva8JZDBcf42mNJqCqvlVUE/6hY/UmZbDdpQ/wCJh7256Gt+RB/rNe03v6y6xuaPUWmlU3WmoWmNKAqo5LqABI9CTK5xUnuFlc169SneL7UrAd1h9xfeo+30A3kDxecV3xP2vWVr61dWXazLbTp8rWFvaUe79APfeeGw9TJrjrXqEXyWv3LrbgHPzj8vw+KZdLuCKgHLWjFHI9CVJ+ckM514L7Xv930kwjYXVRTa61TqBuTUYXWxuTfTcDnvvtunhjjTB4/ahU/aAAmk40uARe4H3h6qSPWdq0hiIgIiICIiAiIgIiICIiAiIgIiICIiAkX4146wuWKO+JeswvTo07FyPM32Vb9T8rzFdqfaCuWUhTpaWxlQfs1O4ReXeOPLoB1I8gZzVjMdVr1Xq1WapVc3d3NyT/fTpAmPFfaJjcwLK1Q0aB5UaRKi38bfFU+e3oJGqNLdQBuSAOQ3Ow9pZLq56R9ZVWv0II99xCWwMNkWFwdLvsXVpvW2alRUd4jDY2I2FVTcjUCEuCNRINsNnfFVfGN3dNdKnZaNLU/QqBfmTpJXwgXFgQQBbH/7qawNdhQp2uFO9VwfF4KWxsb820jfnDY/QpSgvdIRZje9Rx/HUsNj+6th7xpHtvp9nLKVHfEktUHKgjC4/wCYwuKY/hF2/DLXFY5mBQaUpn/h0xpU+Wrq59XJMohRPlzaTsiPyokGfBUy9weEerUSnTGqo7KiDzZiAB7XPOTjCtgMPiaeBFGhXJPd18VWUOO+YWXu1a4WmHK362vfflDprQ07G4Nje49/OS3h/tExeGutUmvSIVStQkkKGYtpbzYO1ywbofuiVMyTBLWehisHVw9QEq1TD1WdQb2LCjUB8IIN1DdCBvI5mWXtRqNSexItZhurqRdHQ9VZSGB8jCHxnWYnEV3r6aaFiSVpKqLa56KBc+ZO55mY7EXsJWNGUcRS2uL2gVWBPtApgb9YFU2FvrPApO5gXXeXJuqsDfZhcC/QH4h8iJmMkzVaJA0hlFyi1CwNNiblqOIpkVKRvY8iPO9yZgxJ/wAM8ArjsvFam7pidVT4rGmVU6QCANS8j4hfrt5S5mYjtP8AgftYw9Q9xjajUKo+Fq1rc9g1UADlbdlF7czebRRwQCCCDuCNwR0IM5AzDCtRqVKFVE7ymxV9gxuNtnG9rWsR0tJ12Rcatg6/2eqx+x1LBQST3Lk/Et/uH7w6c+hkJdDxEQEREBERAREQEREBERAREQExPFWepgcJWxVTcU1uF5amOyKPdiBMtOff9oHiR6mLTAqbUqKq9QD71VxcX/CpFvxGBrbO84q4vEVMRXbVUc3Y9B0CqOigbAeQkyyXgFGRTXbFGqyqxo4amGNMMLqKjtezEb2A2ka4My1a+LXvBejSBq1h+8qEaU/ncon8xm8adNsC1PEVLkVQwxVulQ3dSB/0/L1ndK7Z/IyzTrj8z+I6/wC/iJQ//wCG5dRFRq6Y5Ep0zUql6qKQo+EaRT+JjYAdSRNYNVBYkLpW5KqTq0gnYauth16ycdp+eMSMLfxuRXxdujEXoUvZEOojzYeUgAaRfW+HXj+803ed7/r4uDfUeZJ358/n5z1Kl9jPD0PkDKFNrgH+wf8AzOV68Dc58KLm8+Va4/v85WUWgZXhXMEoY3DVam1Nag1n91WBUt/Lq1fKVs1yKt9vfCqL1atU91pNwwqMWR1YfdsbkjlpPlMGwA3ky4R4jBpnDu1KniFRqeCxNUEqivbXSYjdQQLBumoi3Qks/wAYZbgcZWZBiHTFAACqVDUqjKqI50KTU0Mw+MAqGVz53i2eZBWp4DVXUa8NVWnTqqQ6VMPW1FVWoNm0VA23NRU3AlDGcFZizkth3qFjfWrU3VugIcNYC1hvawHSXWeocFl/2KpUD4mrUSpVRX1rRSn/AIaA3tqve9tt9r6ZAhk+SsqTwiShaJsxXp0l0Ja4rYgy5ED0Cb07JsSiZVTuSLvUXUN9Ld5VN29NLD5GaMHOTns0zPEU2rUaeHfEYc2esiMivTJ8IqJqIBJsAR6Dl16rMb5V5a2mv6e2L7SMOyZnitQtqKMvqDTQX+oI9wZG1bebG7WsKKrUcQi1w4VaVVHo1VNvGyuW06Oesc9+l7G2uqZnMu6fth052W8QtjcvR6jaq1MmlVPUlbFWPqUKk+pMl801/s+YvxY2j0tSqL7+NG/ok3LAREQEREBERAREQEREBERATj3jLGNWzLHVGNya9UD8KsVUfJQB8oiBM+zTBLTod+42Z3qvbmaWFA0r86r8v4RJtlnEZxzNhayIq1QRTK3urAFlvc78ue0RNGOsesy8nystozVpHUzET/McQ1n2mYb9th8R96vS/a+tSixpFvmoT5g+ch09iU3jVpej49ptirM/iP6VEbYj3lPBnmp5GInK5cIbHf2Pv5/MSozW5coiB8XJPpKoERArJjKijStSoq/uq7AfQG0tWP5xECphcO1RgiC7HkNhf5nafDLYkHmOc8iQn4t8Ut1M9wb3UfSIkoVjLrCY6pRbXScoxVlJFjdWFmUggggg9RPIgSjAdp2PpczRqDxfHT38TamA0kCxPpy26CYLiXOExdZayUVo3QK6JaxcM5LAgAm4K7nfbytEQJJ2Q5oaOa4cC+mrqovz5Mupdvxqv5zpSIhBERAREQEREBERAREQP//Z" alt="F1 Driver 2"></div>
    <div><img class="carousel-image" src="https://d3cm515ijfiu6w.cloudfront.net/wp-content/uploads/2024/07/10143221/yuki-tsunoda1.jpg" alt="F1 Driver 3"></div>
    <div><img class="carousel-image" src="https://cdn.sportmonks.com/images/f1/drivers/maxverstappen.png" alt="F1 Driver 4"></div>
  </div>
</div>

<?php
include "view/footer.php";
?>

</body>
</html>

<!-- Include Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<!-- Include jQuery and Slick Carousel JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Slick Carousel Initialization -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.carousel').slick({
      dots: true,  // Add navigation dots
      infinite: true,  // Infinite scrolling
      speed: 500,  // Transition speed
      fade: true,  // Fade effect between slides
      cssEase: 'linear'  // Smooth transition effect
    });
  });
</script>


