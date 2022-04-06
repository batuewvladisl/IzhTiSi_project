<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IzhTiSi</title>

<style>
* {
    max-width: 100%;
    margin: 0px;
}

::selection {
    background: #ffe6006b;
}

::-moz-selection {
    background: #ffe6006b;
}

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track {
  background: #cacaca6b;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  background: #fed932;
  border-radius: 10px;
}

@font-face {
	font-family: 'Nunito-Light'; 
	src: local('Nunito-Light'),
    url(../fonts/Nunito-Light.ttf); 
}

button {
    padding: 0;
    border: none;
    font: inherit;
    color: inherit;
    background-color: transparent;
    cursor: pointer;
}

p {
    font-family: 'Nunito-Light';
}

a:active,
a:hover,
a {
    text-decoration: none;
    color: rgb(0, 0, 0);
}

.div_header {
    max-width: 100%;
    padding: 1.2%;
    background: #fed932;
}

.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    
}

.b11, .b22, .b33, .b44 {
    color: white;
}

.b1, .b2, .b3, .b4 {
    width: 150px;
    padding: 0.5%;
    color: white;
    font-size: 25px;
    font-family: 'Nunito-Light';
    background: #e95358;
    transition-duration: 1s;
    border-radius: 6px;
}

.b1:hover {
    transition: 1s;
    background: #e95358ce;
    border-radius: 13px;
}

.b2:hover {
    transition: 1s;
    background: #e95358ce;
    border-radius: 13px;
}

.b3:hover {
    transition: 1s;
    background: #e95358ce;
    border-radius: 13px;
}

.b4:hover {
    transition: 1s;
    background: #e95358ce;
    border-radius: 13px;
}

.b5 {
    width: 150px;
    font-family: 'Nunito-Light';
    font-weight: bold;
    padding: 0.5%;
    font-size: 25px;
    background: #ffffffaf;
    box-shadow: 0px 0px 10px 1px rgb(0, 0, 0);
    border-radius: 6px;
    transition-duration: 1s;
}

.b5:hover{
    transition: 1s;
    background: #ffffff94;
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.b6 {
    width: 75px;
    font-family: 'Nunito-Light';
    font-weight: bold;
    padding: 0.5%;
    font-size: 25px;
    background: #ffffffaf;
    box-shadow: 0px 0px 10px 1px rgb(0, 0, 0);
    border-radius: 6px;
    transition-duration: 1s;
}

.b7 {
    width: 170px;
    font-family: 'Nunito-Light';
    font-weight: bold;
    padding: 0.5%;
    font-size: 25px;
    background: #ffffffaf;
    box-shadow: 0px 0px 10px 1px rgb(0, 0, 0);
    border-radius: 6px;
    transition-duration: 1s;
}

.header_content {
    display: flex;
    align-items: center;
    height: 850px;
    justify-content: center;
}

.header_img {
    font-size: 40px;
    width: 700px;
    height: 500px;
    text-align: center;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
    position: relative;
}

.logo_avto {
    margin-top: 20px;
    width: 475px;
    height: 170px;
}

.head_img {
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center;
    position: absolute;
}

.o_nas {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.o_nas_zag {
    font-size: 50px;
    padding: 1.5%;
}

.o_nas_block {
    width: 85%;
    height: 435px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.o_nas_img {
    float: left;
    transition-duration: 1s;
    padding: 1% 1% 0 1%;
}

.o_nas_img:hover {
    transition: 1s;
    transform: scale(1.2);
}

.o_nas_text {
    padding: 1%;
    font-size: 32px;
}

li {
    list-style-type: none;
}

li:before {
    content: "> ";
}

.o_nas_ul {
    font-family: 'Nunito-Light';
    font-size: 30px;
}

.uslugi {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.uslugi_content {
    width: 85%;
    height: 100%;
}

.uslugi_zag {
    font-size: 50px;
    padding: 1.5%;
}

.uslugi_blocks1 {
    display: flex;
    justify-content: space-between;
    padding-bottom: 5%;
}

.block1 {
    font-size: 30px;
    text-align: center;
    transition-duration: 1s;
    width: 450px;
}

.block1:hover {
    transition: 1s;
    transform: scale(1.2); 
}

.block2 {
    font-size: 30px;
    text-align: center;
    width: 450px;
    transition-duration: 1s;
}

.block2:hover {
    transition: 1s;
    transform: scale(1.2); 
}

.block3 {
    font-size: 30px;
    text-align: center;
    width: 450px;
    transition-duration: 1s;
}

.block3:hover {
    transition: 1s;
    transform: scale(1.2); 
}

.uslugi_blocks2 {
    display: flex;
    justify-content: space-between;
}

.block4 {
    font-size: 30px;
    text-align: center;
    width: 450px;
    transition-duration: 1s;
}

.block4:hover {
    transition: 1s;
    transform: scale(1.2); 
}

.block5 {
    font-size: 30px;
    text-align: center;
    width: 450px;
    transition-duration: 1s;
}

.block5:hover {
    transition: 1s;
    transform: scale(1.2); 
}

.block6 {
    font-size: 30px;
    text-align: center;
    width: 450px;
    transition-duration: 1s;
}

.block6:hover {
    transition: 1s;
    transform: scale(1.2); 
}

.product {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.product_zag {
    font-size: 50px;
    padding: 1.5%;
}

.product_content {
    width: 85%;
    height: 100%;
}

.product_blocks1 {
    display: flex;
    justify-content: space-between;
}

.product_blocks2 {
    display: flex;
    justify-content: space-between;
    margin-top: 4%;
}

.block_img1 {
    padding: 1% 2% 0 1%;
    float: left;
    transition-duration: 1s;
}

.block_img1:hover {
    transition: 1s;
    transform: scale(1.1); 
}

.block_t1 {
    text-align: left;
    color: #e11a21;
    padding: 3% 1% 5% 1%;
    font-size: 32px;
}

.block_to1 {
    padding: 0 0 0 3%;
    font-size: 30px;
}

.product_block1 {
    width: 725px;
    height: 240px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
    float: left;
}

.block_img2 {
    padding: 1% 2% 0 1%;
    float: left;
    transition-duration: 1s;
}

.block_img2:hover {
    transition: 1s;
    transform: scale(1.1); 
}

.block_t2 {
    text-align: left;
    color: #e11a21;
    padding: 3% 1% 5% 1%;
    font-size: 32px;
}

.block_to2 {
    padding: 0 0 0 3%;
    font-size: 30px;
}

.product_block2 {
    width: 725px;
    height: 240px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
    float: left;
}

.block_img3 {
    padding: 1% 2% 0 1%;
    float: left;
    transition-duration: 1s;
}

.block_img3:hover {
    transition: 1s;
    transform: scale(1.1); 
}

.block_t3 {
    text-align: left;
    color: #e11a21;
    padding: 3% 1% 5% 1%;
    font-size: 32px;
}

.block_to3 {
    padding: 0 0 0 3%;
    font-size: 30px;
}

.product_block3 {
    width: 725px;
    height: 240px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
    float: left;
}

.block_img4 {
    padding: 1% 2% 0 1%;
    float: left;
    transition-duration: 1s;
}

.block_img4:hover {
    transition: 1s;
    transform: scale(1.1); 
}

.block_t4 {
    text-align: left;
    color: #e11a21;
    padding: 3% 1% 5% 1%;
    font-size: 32px;
}

.block_to4 {
    padding: 0 0 0 3%;
    font-size: 30px;
}

.product_block4 {
    width: 725px;
    height: 240px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
    float: left;
}

.price {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.price_zag {
    font-size: 50px;
    padding: 1.5%;
}

.price_content {
    width: 85%;
    height: 100%;
}

.price_blocks1 {
    display: flex;
    justify-content: space-between;
    margin-bottom: 4%;
}

.price_blocks2 {
    display: flex;
    justify-content: space-between;
    margin-bottom: 4%;
}

.price_block1 {
    width: 340px;
    height: 400px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.price_t1 {
    padding: 2% 0 14% 0;
    text-align: center;
    color: #df2a0a;
    font-size: 32px;
}

.price_ot1 {
    padding: 0 0 0 4%;
    text-align: left;
    font-size: 30px;
}

.price_block2 {
    width: 340px;
    height: 400px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.price_t2 {
    padding: 2% 0 39% 0;
    text-align: center;
    color: #df2a0a;
    font-size: 32px;
}

.price_ot2 {
    padding: 0 0 0 4%;
    text-align: center;
    font-size: 30px;
}

.price_block3 {
    width: 340px;
    height: 400px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.price_t3 {
    padding: 2% 0 14% 0;
    text-align: center;
    color: #df2a0a;
    font-size: 32px;
}

.price_ot3 {
    padding: 0 0 0 4%;
    text-align: center;
    font-size: 30px;
}

.price_block4 {
    width: 340px;
    height: 400px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.price_t4 {
    padding: 2% 0 1% 0;
    text-align: center;
    color: #df2a0a;
    font-size: 32px;
}

.price_ot4 {
    padding: 0 3% 0 4%;
    text-align: right;
    font-size: 30px;
}

.price_blocks2 {
    display: flex;
    justify-content: space-between;
}

.price_block5 {
    width: 340px;
    height: 400px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.price_t5 {
    padding: 2% 0 14% 0;
    text-align: center;
    color: #df2a0a;
    font-size: 32px;
}

.price_ot5 {
    padding: 0 3% 0 4%;
    text-align: left;
    font-size: 30px;
}

.price_block6 {
    width: 340px;
    height: 400px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.price_t6 {
    padding: 2% 0 39% 0;
    text-align: center;
    color: #df2a0a;
    font-size: 32px;
}

.price_ot6 {
    padding: 0 3% 0 4%;
    text-align: center;
    font-size: 30px;
}

.price_block7 {
    width: 340px;
    height: 400px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.price_t7 {
    padding: 2% 0 14% 0;
    text-align: center;
    color: #df2a0a;
    font-size: 32px;
}

.price_ot7 {
    padding: 0 3% 0 4%;
    text-align: center;
    font-size: 30px;
}

.price_block8 {
    width: 340px;
    height: 400px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.price_t8 {
    padding: 2% 0 1% 0;
    text-align: center;
    color: #df2a0a;
    font-size: 32px;
}

.price_ot8 {
    padding: 0 3% 0 4%;
    text-align: right;
    font-size: 30px;
}

.footer {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 100%;
    padding: 1%;
    background: #fed932;
    margin-top: 5%;
}

.footer_txt {
    font-size: 27px;
    text-align: center;
    transition-duration: 1s;
    width: 400px;
}

.footer_txt:hover {
    transition: 1s;
    transform: scale(0.9);
}

.footer_polit:hover {
    color: red;
}

@media only screen and (max-width: 1440px) {
    .header_content {
        height: 650px;
    }

    .o_nas_text {
        font-size: 30px;
    }
    
    .o_nas_ul {
        font-size: 28px;
    }

    .o_nas_block {
        height: 440px;
    }

    .block_img1, .block_img2, .block_img3, .block_img4 {
        width: 100px;
        height: 100px;
    }

    .product_block1, .product_block2, .product_block3, .product_block4 {
        margin: 0 0 0 3%;
    }

    .block_t1 {
        padding: 3% 1% 4% 1%;
        font-size: 28px;
    }
    
    .block_to1 {
        font-size: 26px;
    }

    .block_t2 {
        padding: 3% 1% 4% 1%;
        font-size: 28px;
    }
    
    .block_to2 {
        font-size: 26px;
    }

    .block_t3 {
        padding: 3% 1% 4% 1%;
        font-size: 28px;
    }
    
    .block_to3 {
        font-size: 26px;
    }

    .block_t4 {
        padding: 3% 1% 4% 1%;
        font-size: 28px;
    }
    
    .block_to4 {
        font-size: 26px;
    }

    .price_t1, .price_t2, .price_t3, .price_t4, .price_t5, .price_t6, .price_t7, .price_t8 {
        font-size: 30px;
    }
    
    .price_ot1, .price_ot2, .price_ot3, .price_ot4, .price_ot5, .price_ot6, .price_ot7, .price_ot8 {
        font-size: 28px;
    }

    .price_block2, .price_block3 {
        margin: 0 0 0 2%;
    }

    .price_block4 {
        margin: 0 0 0 2%;
    }

    .price_block6, .price_block7 {
        margin: 0 0 0 2%;
    }

    .price_block8 {
        margin: 0 0 0 2%;
    }

}
@media only screen and (max-width: 1280px) {
    .header_content {
        height: 560px;
    }

    .header_img {
        font-size: 34px;
        width: 600px;
        height: 400px;
    }
    
    .logo_avto {
        width: 400px;
        height: 120px;
    }

    .o_nas_text {
        font-size: 28px;
    }
    
    .o_nas_ul {
        font-size: 26px;
    }

    .block1, .block2, .block3, .block4, .block5, .block6 {
        font-size: 21px;
    }

    .uslugi_img1, .uslugi_img2, .uslugi_img3, .uslugi_img4, .uslugi_img5, .uslugi_img6 {
        width: 100px;
        height: 100px;
    }

    .block_img1, .block_img2, .block_img3, .block_img4 {
        width: 90px;
        height: 90px;
    }

    .product_block1, .product_block2, .product_block3, .product_block4 {
        height: 210px;
    }

    .block_t1, .block_t2, .block_t3, .block_t4 {
        font-size: 25px;
    }
    
    .block_to1, .block_to2, .block_to3, .block_to4 {
        font-size: 24px;
    }

    .price_t1, .price_t2, .price_t3, .price_t4, .price_t5, .price_t6, .price_t7, .price_t8 {
        font-size: 27px;
    }
    
    .price_ot1, .price_ot2, .price_ot3, .price_ot4, .price_ot5, .price_ot6, .price_ot7, .price_ot8 {
        font-size: 25px;
    }

    .footer_txt {
        font-size: 24px;
    }

}
@media only screen and (max-width: 1024px) {
    .b1, .b2, .b3, .b4 {
        width: 120px;
        padding: 0.4%;
        font-size: 20px;
    }

    .b5 {
        width: 120px;
        padding: 0.4%;
        font-size: 20px;
    }

    .logo_img {
        width: 200px;
        height: 25px;
    }

    .header_content {
        height: 450px;
    }

    .header_img {
        font-size: 30px;
        width: 550px;
        height: 350px;
    }
    
    .logo_avto {
        width: 350px;
        height: 130px;
    }

    .o_nas_img {
        width: 115px;
        height: 115px;
    }

    .o_nas_text {
        font-size: 24px;
    }
    
    .o_nas_ul {
        font-size: 24px;
    }

    .o_nas_block {
        height: 415px;
    }

    .block_img1, .block_img2, .block_img3, .block_img4 {
        width: 85px;
        height: 85px;
    }

    .product_block1, .product_block2, .product_block3, .product_block4 {
        height: 220px;
    }

    .block_t1, .block_t2, .block_t3, .block_t4 {
        font-size: 22px;
    }
    
    .block_to1, .block_to2, .block_to3, .block_to4 {
        font-size: 22px;
    }

    .price_t1, .price_t2, .price_t3, .price_t4, .price_t5, .price_t6, .price_t7, .price_t8 {
        font-size: 23px;
    }
    
    .price_ot1, .price_ot2, .price_ot3, .price_ot4, .price_ot5, .price_ot6, .price_ot7, .price_ot8 {
        font-size: 20px;
    }

    .price_block2, .price_block3 {
        padding: 1%;
        height: 320px;
        margin: 0 0 0 2%;
    }

    .price_block1, .price_block5 {
        padding: 1%;
        height: 320px;
    }

    .price_block4 {
        padding: 1%;
        height: 320px;
        margin: 0 0 0 2%;
    }

    .price_block6, .price_block7 {
        padding: 1%;
        height: 320px;
        margin: 0 0 0 2%;
    }

    .price_block8 {
        padding: 1%;
        height: 320px;
        margin: 0 0 0 2%;
    }

    .footer_txt {
        font-size: 22px;
    }

}
@media only screen and (max-width: 800px) {
    .b1, .b2, .b3, .b4 {
        width: 100px;
        padding: 0.3%;
        font-size: 17px;
    }

    .b5 {
        width: 100px;
        padding: 0.3%;
        font-size: 17px;
    }

    .logo_img {
        width: 170px;
        height: 22px;
    }

    .header_content {
        height: 350px;
    }

    .header_img {
        font-size: 25px;
        width: 450px;
        height: 300px;
    }
    
    .logo_avto {
        width: 300px;
        height: 115px;
    }

    .o_nas_zag {
        font-size: 40px;
    }

    .o_nas_img {
        width: 100px;
        height: 100px;
    }

    .o_nas_text {
        font-size: 20px;
    }
    
    .o_nas_ul {
        font-size: 20px;
    }

    .o_nas_block {
        height: 350px;
    }

    .uslugi_zag {
        font-size: 40px;
    }

    .product_zag {
        font-size: 40px;
    }

    .product_block1, .product_block2, .product_block3, .product_block4 {
        height: 190px;
    }

    .block_img1, .block_img2, .block_img3, .block_img4 {
        width: 75px;
        height: 75px;
    }

    .block_t1, .block_t2, .block_t3, .block_t4 {
        font-size: 19px;
    }
    
    .block_to1, .block_to2, .block_to3, .block_to4 {
        font-size: 19px;
    }

    .price_zag {
        font-size: 40px;
    }

    .price_t1, .price_t2, .price_t3, .price_t4, .price_t5, .price_t6, .price_t7, .price_t8 {
        font-size: 20px;
    }
    
    .price_ot1, .price_ot2, .price_ot3, .price_ot4, .price_ot5, .price_ot6, .price_ot7, .price_ot8 {
        font-size: 17px;
    }

    .price_block2, .price_block3 {
        width: 48%;
        height: 300px;
    }

    .price_block1, .price_block5 {
        width: 48%;
        height: 300px;
    }

    .price_block4 {
        width: 48%;
        height: 300px;
    }

    .price_block6, .price_block7 {
        width: 48%;
        height: 300px;
    }

    .price_block8 {
        width: 48%;
        height: 300px;
    }
}

@media only screen and (max-width: 480px) {

    .b1, .b2, .b3, .b4 {
        width: 70px;
        padding: 0.3%;
        font-size: 13px;
    }

    .b5 {
        width: 50px;
        padding: 0.3%;
        font-size: 13px;
    }

    .b6 {
        width: 40px;
        padding: 0.2%;
        font-size: 13px;
    }

    .b7 {
        width: 80px;
        padding: 0.5%;
        font-size: 12px;
    }

        .logo_img {
            display: none;
        }

        .header_content {
            height: 210px;
        }

        .header_img {
            font-size: 16px;
            width: 300px;
            height: 190px;
        }
        
        .logo_avto {
            margin-top: 3%;
            width: 220px;
            height: 80px;
        }

        .o_nas_zag {
            font-size: 30px;
        }

        .o_nas_img {
            padding: 3% 3% 1% 3%;
            width: 50px;
            height: 50px;
        }

        .o_nas_text {
            padding: 4%;
            font-size: 15px;
        }
        
        .o_nas_ul {
            font-size: 15px;
        }

        .o_nas_block {
            height: 365px;
        }

        ul {
        margin-block-start: 0.1em;
        margin-inline-end: 10px;
        padding-inline-start: 18px;
    }

        .uslugi_zag {
            font-size: 30px;
        }

        .uslugi_img1, .uslugi_img2, .uslugi_img3, .uslugi_img4, .uslugi_img5, .uslugi_img6  {
            width: 50px;
            height: 50px;
        }

    .uslugi_blocks1 {
        padding-bottom: 5%;
    }

    .block1, .block2, .block3, .block4, .block5, .block6 {
        font-size: 14px;
        width: 450px;
    }

    .product {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .product_zag {
        font-size: 30px;
        padding: 1.5%;
    }

    .product_content {
        width: 85%;
        height: 100%;
    }

    .product_blocks1 {
        display: flex;
        flex-direction: column;
    }

    .product_blocks2 {
        display: flex;
        flex-direction: column;
        margin-top: 5%;
    }


    .block_t1, .block_t2, .block_t3, .block_t4 {
        font-size: 16px;
    }

    .block_to1, .block_to2, .block_to3, .block_to4 {
        font-size: 15px;
    }

    .product_block2, .product_block4 {
        width: 390px;
        height: 125px;
    }

    .product_block1, .product_block3 {
        width: 390px;
        height: 125px;
        margin-bottom: 5%;
    }

    .block_img1, .block_img2, .block_img3, .block_img4 {
        width: 50px;
        height: 50px;
    }

    .block_t1, .block_t2, .block_t3, .block_t4, {
        font-size: 15px;
    }

    .price_content {
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .price_zag {
        font-size: 30px;
    }

    .price_blocks1 {
        display: flex;
        flex-direction: column;
        margin-bottom: 4%;
    }

    .price_blocks2 {
        display: flex;
        flex-direction: column;
        margin-bottom: 4%;
    }

    .price_t1, .price_t2, .price_t3, .price_t4, .price_t5, .price_t6, .price_t7, .price_t8 {
            font-size: 20px;
            text-align: center;
        }
        
        .price_ot1, .price_ot2, .price_ot3, .price_ot4, .price_ot5, .price_ot6, .price_ot7, .price_ot8 {
            font-size: 17px;
            text-align: center;
        }
        .price_block2, .price_block3 {
            width: 180px;
            height: 300px;
            margin: 8% 0% 8% 0%;
    }

        .price_block1, .price_block5 {
            
            width: 180px;
            height: 300px;
    }

        .price_block4 {
            
            width: 180px;
            height: 300px;
    }

        .price_block6, .price_block7 {
            width: 180px;
            height: 300px;
            margin: 8% 0% 8% 0%;
    }

        .price_block8 {
            width: 180px;
            height: 300px;
    }

        .footer_txt {
        font-size: 18px;
    }

}
@media only screen and (max-width: 370px) {

    .b1, .b2, .b3, .b4 {
        width: 55px;
        padding: 0.3%;
        font-size: 11px;
    }

    .b5 {
        width: 40px;
        padding: 0.2%;
        font-size: 11px;
    }

    .b6 {
        text-align: center;
        width: 40px;
        padding: 0.1%;
        font-size: 12px;
    }

    .b7 {
        width: 80px;
        padding: 0.2%;
        font-size: 11px;
    }

        .logo_img {
            display: none;
        }

        .header_img {
            font-size: 12.5px;
            width: 200px;
            height: 135px;
        }
        
        .header_content {
            height: 165px;
        }
        
        .logo_avto {
            margin-top: 1.5%;
            width: 120px;
            height: 40px;
        }

        .o_nas_zag {
            font-size: 25px;
        }

        .o_nas_img {
            width: 40px;
            height: 40px;
        }

        .o_nas_text {
            font-size: 13px;
        }
        
        .o_nas_ul {
            font-size: 13px;
        }

        .o_nas_block {
            height: 360px;
        }

        .uslugi_zag {
            font-size: 25px;
        }

    .uslugi_blocks1 {
        display: flex;
        flex-direction: column;
        padding-bottom: 0%;
    }

    .uslugi_blocks2 {
        display: flex;
        flex-direction: column;
        padding-bottom: 0%;
    }

    .block1, .block2, .block3, .block4, .block5, .block6 {
        font-size: 13px;
        margin-bottom: 5%;
    }

    .product {
        width: 96%;
    }

    .product_zag {
        font-size: 25px;
    }

    .block_t1, .block_t2, .block_t3, .block_t4 {
        font-size: 14px;
    }

    .block_to1, .block_to2, .block_to3, .block_to4 {
        font-size: 13px;
    }

    .product_block2, .product_block4 {
        height: 100px;
    }

    .product_block1, .product_block3 {
        height: 100px;
    }

    .block_img1, .block_img2, .block_img3, .block_img4 {
        width: 45px;
        height: 45px;
    }

    .price_zag {
        font-size: 25px;
    }

    .price_t1, .price_t2, .price_t3, .price_t4, .price_t5, .price_t6, .price_t7, .price_t8 {
            font-size: 15px;
            text-align: center;
        }
        
        .price_ot1, .price_ot2, .price_ot3, .price_ot4, .price_ot5, .price_ot6, .price_ot7, .price_ot8 {
            font-size: 15px;
            text-align: center;
        }
        .price_block2, .price_block3 {
            width: 140px;
            height: 210px;
    }

        .price_block1, .price_block5 {
            width: 140px;
            height: 210px;
    }

        .price_block4 {
            width: 140px;
            height: 210px;
    }

        .price_block6, .price_block7 {
            width: 140px;
            height: 210px;
    }

        .price_block8 {
            width: 140px;
            height: 210px;
    }

        .footer_txt {
        font-size: 14px;
    }

}
</style>

    <body>
        <div class="div_header">
            <header class="header">
                <img class="logo_img" src="img/logo.png" alt="">
    
                <button class="b1"><a class="b11" href="#uslugi">Услуги</a></button>
                <button class="b2"><a class="b22" href="#product">Продукты</a></button>
                <button class="b3"><a class="b33" href="#price">Цены</a></button>
                <button class="b4"><a class="b44" href="#o_nas">О нас</a></button>
                @auth
                <button class="b4"><a class="b44" href="{{ route('home') }}">Кабинет</a></button>
                @endauth

                @if (Route::has('login'))
                    @auth
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="b6">
                        @csrf
                        <button type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><a href="{{ route('logout') }}">Выйти</a></button>
                    </form>
                    @else

                        <button href="{{ route('login') }}" class="b5"><a  href="{{ route('login') }}">Войти</a></button>
                        @if (Route::has('register'))
                        <button class="b7"><a href="{{ route('register') }}">Регистрация</a></button>
                        @endif
                    @endauth
                @endif
            </header>
        </div>
                <img class="head_img" src="img/glavnaya4.jpg" alt="">
                <div class="header_content">
                    <div class="header_img">
                        <img class="logo_avto" src="img/logo_avto.png" alt="">
                        <p class="header_text">Нужна <b>Реальная автоматизация?</b> Мы поможем найти узкие места в бизнесе любого размера. Посоветуем. Автоматизируем. Обучим.</p>
                    </div>
                </div>
    
                <div class="o_nas">
                    <p id="o_nas" class="o_nas_zag">О нас</p>
                    <div class="o_nas_block">
                        <img class="o_nas_img" src="img/product_ao_home.png" alt="">
                        <p class="o_nas_text">«1С-ИжТиСи» — дочерняя компания фирмы «1С» с 2011 года. Нашими технологиями пользуются свыше 500 компаний-клиентов, включая 1С:Франчайзи, по всей России и СНГ — «Газпром бурение», «Черкизово», «1С-Рарус-СПб», «ЭР-Телеком Холдинг», «Башбетон» и многие другие.</p>
                        <ul class="o_nas_ul">
                            <li>Более 15 лет разрабатываем программные продукты</li>
                            <li>Более 11 лет специализируемся на автоматизации обновления</li>
                            <li>Обновляем любые нетиповые конфигурации 1С</li>
                            <li>Ежегодно делаем свыше 5 000 проектов обновлений</li>
                            <li>Удаленно решаем задачи для пользователей 1С, партнеров и разработчиков</li>
                            <li>В нашей компании более 90 сотрудников</li>
                        </ul>
                    </div>
                </div>
    
                <div class="uslugi">
                    <p id="uslugi" class="uslugi_zag">Услуги</p>
                    <div class="uslugi_content">
                        <div class="uslugi_blocks1">
                            <div class="block1">
                                <img class="uslugi_img1" src="img/product_ao_home.png" alt="">
                                <p class="uslugi_t1">Качественное решение для регулярного обновления вашей измененной конфигурации 1С</p>
                            </div>
                            <div class="block2">
                                <img class="uslugi_img2" src="img/service_ao_home.png" alt="">
                                <p class="uslugi_t2">Производим сложные обновления конфигураций с полной адаптацией доработок и сохранением данных</p>
                            </div>
                            <div class="block3">
                                <img class="uslugi_img3" src="img/product_it_control.png" alt="">
                                <p class="uslugi_t3">Весь комплекс работ по комплексному решению 1С для малых и средних бизнесов</p>
                            </div>
                        </div>
                        <div class="uslugi_blocks2">
                            <div class="block4">
                                <img class="uslugi_img4" src="img/product_it_control.png" alt="">
                                <p class="uslugi_t4">Качественное решение для регулярного обновления вашей измененной конфигурации 1С</p>
                            </div>
                            <div class="block5">
                                <img class="uslugi_img5" src="img/service_ao_home.png" alt="">
                                <p class="uslugi_t5">Производим сложные обновления конфигураций с полной адаптацией доработок и сохранением данных</p>
                            </div>
                            <div class="block6">
                                <img class="uslugi_img6" src="img/product_ao_home.png" alt="">
                                <p class="uslugi_t6">Весь комплекс работ по комплексному решению 1С для малых и средних бизнесов</p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="product">
                    <p id="product" class="product_zag">Продукты</p>
                    <div class="product_content">
                        <div class="product_blocks1">
                            <div class="product_block1">
                                <img class="block_img1" src="img/service_ao_home.png" alt="">
                                <p class="block_t1">Автоматизированное обновление измененных конфигураций 1С</p>
                                <p class="block_to1">Эффективный инструмент для максимального облегчения и ускорения процесса</p>
                            </div>
                            <div class="product_block2">
                                <img class="block_img2" src="img/service_ao_home.png" alt="">
                                <p class="block_t2">Автоматизированное обновление измененных конфигураций 1С</p>
                                <p class="block_to2">Эффективный инструмент для максимального облегчения и ускорения процесса</p>
                            </div>
                        </div>
                        <div class="product_blocks2">
                            <div class="product_block3">
                                <img class="block_img3" src="img/service_ao_home.png" alt="">
                                <p class="block_t3">Автоматизированное обновление измененных конфигураций 1С</p>
                                <p class="block_to3">Эффективный инструмент для максимального облегчения и ускорения процесса</p>
                            </div>
                            <div class="product_block4">
                                <img class="block_img4" src="img/service_ao_home.png" alt="">
                                <p class="block_t4">Автоматизированное обновление измененных конфигураций 1С</p>
                                <p class="block_to4">Эффективный инструмент для максимального облегчения и ускорения процесса</p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="price">
                    <p id="price" class="price_zag">Наши цены</p>
                    <div class="price_content">
                        <div class="price_blocks1">
                            <div class="price_block1">
                                <p class="price_t1">Обновлений одной нетиповой конфигурации</p>
                                <p class="price_ot1">12 месяцев - 48 000 руб <br>6 месяцев - 32 000 руб <br>3 месяца - 20 000 руб</p>
                            </div>
                            <div class="price_block2">
                                <p class="price_t2">Разовое обновление</p>
                                <p class="price_ot2">Определяется на основании оценки трудозатрат, в среднем 3 000 руб./релиз</p>
                            </div>
                                <div class="price_block3">
                                    <p class="price_t3">Разовое обновление нетиповой конфигурации</p>
                                    <p class="price_ot3">Определяется на основании оценки трудозатрат, в среднем 4 500 руб./релиз</p>
                                </div>
                                <div class="price_block4">
                                    <p class="price_t4">Обновлений одной нетиповой конфигурации ЗУП, УНФ</p>
                                    <p class="price_ot4">12 месяцев - 96 000 руб <br>6 месяцев - 64000  руб <br>3 месяца - 40 000 руб</p>
                                </div>
                        </div>
                        <div class="price_blocks2">
                            <div class="price_block5">
                                <p class="price_t5">Обновлений одной нетиповой конфигурации</p>
                                <p class="price_ot5">12 месяцев - 48 000 руб <br>6 месяцев - 32 000 руб <br>3 месяца - 20 000 руб</p>
                            </div>
                            <div class="price_block6">
                                <p class="price_t6">Разовое обновление</p>
                                <p class="price_ot6">Определяется на основании оценки трудозатрат, в среднем 3 000 руб./релиз</p>
                            </div>
                            <div class="price_block7">
                                <p class="price_t7">Разовое обновление нетиповой конфигурации</p>
                                <p class="price_ot7">Определяется на основании оценки трудозатрат, в среднем 4 500 руб./релиз</p>
                            </div>
                            <div class="price_block8">
                                <p class="price_t8">Обновлений одной нетиповой конфигурации ЗУП, УНФ</p>
                                <p class="price_ot8">12 месяцев - 96 000 руб <br>6 месяцев - 64000  руб <br>3 месяца - 40 000 руб</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <footer class="footer">
                        <p class="footer_txt">+7 (800) 77-51-256 <br>Skype: sale_1c-izhtc <br>sale@1c-izhtc.ru <br>2005-2022 © 1C-ИжТиСи</p>
                        <p class="footer_txt"><a class="footer_polit" href="{{ route('dashboard') }}">Политика конфиденциальности</a></p>
                    </footer>
                    
    </body>
</html>
