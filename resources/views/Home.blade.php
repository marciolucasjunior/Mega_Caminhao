@extends('layouts.main')
@section('title','Home')
@section('content')
<link rel="stylesheet" href="CSS/home.css">
<div class="container_img">
                <section>
                <nav>
                    <div class="so_caminhao"><img style="width:100%;" src="img/SoCaminhoesComBr.png" alt=""></div>
                  <div class="links">
                        <a href="">COMPRAR</a>
                        <a href="pages/nossosprecos.html">NOSSOS PREÇOS</a>
                        <a href="">NOVIDADES</a>
                    </div>
                    <div class="icones"><img src="img/velocimetro.png" alt=""><img src="img/utilazdor.png" alt=""></div>
                    <button class="btn_v"><img style="width:48px;"  src="img/caminhao.png" alt=""><p>VENDER MEU CAMINHÃO</p></button>
                </nav>
                <h1>Muitos</h1>
                <p style="font-weight: bolder; font-size: 22px;">Caminhões Vendidos</p>
            </div>
        </section>
    
    <div class="container_suspense">
        <div class="suspense">
          <div class="suspense_link">
              <a href="#">Escolha seu caminhão</a>
              <a style="margin-left: 30px;" href="#">Caminhões zero km</a>
              <a style="margin-left: 50px;" href="#">Caminhões usados</a>
          </div>
        </div>
        <div class="container_form">
            <form action="">
                <select name="" id="">
                    <option value="">Escolha a condição</option>
                </select>
                <select name="" id="">
                    <option value="">Escolha Marca</option>
                </select>
                <select name="" id="">
                    <option value="">Escolha Modelo</option>
                </select>
                    <button class="btn_form" type="submit">
                     <div class="div_btn">
                        <img style="width: 28px; margin-right:10px;" src="img/procurar.png">
                        <p> 131 Caminhões</p></div>
                    </button>
            </form>
        </div>
        <div class="anuncie">
            <img src="https://socaminhoes.com.br/wp-content/uploads/2021/08/icon-venda.png" alt=""><p style="font-weight: bolder;margin-left: 20px;">Anuncie aqui <br> E venda rápido</p>
        </div>
    </div>
    <div class="titulo_2">
        <h2>Escolha a <span>Marca</span></h2>
        <a style="text-decoration: none;" href="">Ver todas as marcas</a>
    </div>
    <div class="container_cards">
       <div class="cards"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/10/ford.png"" alt=""><br><a href="">Ford</a></div>
       <div class="cards"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/10/hyundai.png"" alt=""><br><a href="">Hyundai</a></div>
       <div class="cards"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/10/iveco.png" alt=""><br><a href="">Hecco</a></div>
       <div class="cards"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/10/mercedes.png" alt=""><br><a href="">Mercedes</a></div>
    </div>
    <div class="container_cards">
        <div class="cards"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/10/renault.png" alt=""><br><a href="">Ford</a></div>
        <div class="cards"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/10/scania.png" alt=""><br><a href="">Hyundai</a></div>
        <div class="cards"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/10/vw.png" alt=""><br><a href="">Hecco</a></div>
        <div class="cards"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/10/volvo.png" alt=""><br><a href="">Mercedes</a></div>
     </div>
     <div class="titulo_2">
        <h2>Escolha o <span>Modelo</span></h2>
        <a style="color:
        blue;" href="">Ver todos os modelos</a>
    </div>
    <div class="container_cards2">
        <div class="cards2"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/09/Baú.png" alt=""><br><a href="">Ford</a></div>
        <div class="cards2"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/09/Bitrem.png"><br><a href="">Hyundai</a></div>
        <div class="cards2"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/09/Caçamba.png" alt=""><br><a href="">Hecco</a></div>
        <div class="cards2"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/09/Carroceria.png" alt=""><br><a href="">Mercedes</a></div>
     </div>
     <div class="container_cards2">
        <div class="cards2"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/09/Cavalinho.png" alt=""><br><a href="">Ford</a></div>
        <div class="cards2"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/09/Frigorifico.png"><br><a href="">Hyundai</a></div>
        <div class="cards2"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/09/Graneleiro.png" alt=""><br><a href="">Hecco</a></div>
        <div class="cards2"><img src="https://socaminhoes.com.br/wp-content/uploads/2019/09/Tanque.png" alt=""><br><a href="">Mercedes</a></div>
     </div>

     <div class="propaganda">
        <img src="https://socaminhoes.com.br/wp-content/uploads/2022/09/banner-auto-peças-modelo-scaled.jpeg" alt="">
     </div>
     <br>
     
    <hr>

    <div style="margin-top: 50px;" class="titulo_2">
        <h2>Escolha seu <span> Caminhão </span>
        </h2>
        <div><a style="font-size: 16px; margin-right: 40px; text-decoration: none;"  href="#">Os mais populares</a>
         <button style="width: 180px; padding: 20px;"><p>Recém cadastrados</p></button>
        </div>
    </div>

    <div class="container_3">
        <div class="cards3">
            <div class="cards3_foto">
                <img src="img/339023324_174201238420073_404196041649640542_n-798x466.jpg" alt="">
            </div>
            <div class="texto_cards3">
                <div><p class="p_cards3">MB 2219</p><p class="p_cards3">(PRANCHA)</p></div>
                <div class="btnn"><button style="width: 100PX;">R$ 140 00</button></div>
            </div> 
           <div class="texto_cards3_2">
            <div style="display: flex;"><p>2044</p><img style="margin-left: 8px;width:16px; " src="img/calendario.png" alt=""></div><div style=" display:flex; margin-left: 15px;" ><p>Manual</p><img style="margin-left: 8px;width:16px;" src="img/cambio-de-marchas.png" alt=""></div>
           </div>
        </div>
      



        <div class="cards3">
            <div class="cards3_foto">
                <img src="img/339023324_174201238420073_404196041649640542_n-798x466.jpg" alt="">
            </div>
            <div class="texto_cards3">
                <div><p class="p_cards3">MB 2219</p><p class="p_cards3">(PRANCHA)</p></div>
                <div class="btnn"><button style="width: 100PX;">R$ 140 00</button></div>
               </div> 
               <div class="texto_cards3_2">
                <div style="display: flex;"><p>2044</p><img style="margin-left: 8px;width:16px; " src="img/calendario.png" alt=""></div><div style=" display:flex; margin-left: 15px;" ><p>Manual</p><img style="margin-left: 8px;width:16px;" src="img/cambio-de-marchas.png" alt=""></div>
               </div>
            </div>
           
        <div class="cards3">
            <div class="cards3_foto">
            <img src="img/grade3.jpg" alt="">
        </div>
        <div class="texto_cards3">
            <div><p class="p_cards3">MB 2219</p><p class="p_cards3">(PRANCHA)</p></div>
            <div class="btnn"><button style="width: 100PX;">R$ 140 00</button></div>
           </div> 
           <div class="texto_cards3_2">
            <div style="display: flex;"><p>2044</p><img style="margin-left: 8px;width:16px; " src="img/calendario.png" alt=""></div><div style=" display:flex; margin-left: 15px;" ><p>Manual</p><img style="margin-left: 8px;width:16px;" src="img/cambio-de-marchas.png" alt=""></div>
           </div>
        </div>

               
        <div class="cards3">
            <div class="cards3_foto">
            <img src="img/grade3.jpg" alt="">
        </div>
        <div class="texto_cards3">
            <div><p class="p_cards3">MB 2219</p><p class="p_cards3">(PRANCHA)</p></div>
            <div class="btnn"><button style="width: 100PX;">R$ 140 00</button></div>
           </div> 
           <div class="texto_cards3_2">
            <div style="display: flex;"><p>2044</p><img style="margin-left: 8px;width:16px; " src="img/calendario.png" alt=""></div><div style=" display:flex; margin-left: 15px;" ><p>Manual</p><img style="margin-left: 8px;width:16px;" src="img/cambio-de-marchas.png" alt=""></div>
           </div>
        </div>

      
    </div>
    <div class="container_3">
        <div class="cards3">
            <div class="cards3_foto">
                <img src="img/339023324_174201238420073_404196041649640542_n-798x466.jpg" alt="">
            </div>
            <div class="texto_cards3">
                <div><p class="p_cards3">MB 2219</p><p class="p_cards3">(PRANCHA)</p></div>
                <div class="btnn"><button style="width: 100PX;">R$ 140 00</button></div>
            </div> 
           <div class="texto_cards3_2">
            <div style="display: flex;"><p>2044</p><img style="margin-left: 8px;width:16px; " src="img/calendario.png" alt=""></div><div style=" display:flex; margin-left: 15px;" ><p>Manual</p><img style="margin-left: 8px;width:16px;" src="img/cambio-de-marchas.png" alt=""></div>
           </div>
        </div>
      



        <div class="cards3">
            <div class="cards3_foto">
                <img src="img/339023324_174201238420073_404196041649640542_n-798x466.jpg" alt="">
            </div>
            <div class="texto_cards3">
                <div><p class="p_cards3">MB 2219</p><p class="p_cards3">(PRANCHA)</p></div>
                <div class="btnn"><button style="width: 100PX;">R$ 140 00</button></div>
               </div> 
               <div class="texto_cards3_2">
                <div style="display: flex;"><p>2044</p><img style="margin-left: 8px;width:16px; " src="img/calendario.png" alt=""></div><div style=" display:flex; margin-left: 15px;" ><p>Manual</p><img style="margin-left: 8px;width:16px;" src="img/cambio-de-marchas.png" alt=""></div>
               </div>
            </div>
           
        <div class="cards3">
            <div class="cards3_foto">
            <img src="img/grade3.jpg" alt="">
        </div>
        <div class="texto_cards3">
            <div><p class="p_cards3">MB 2219</p><p class="p_cards3">(PRANCHA)</p></div>
            <div class="btnn"><button style="width: 100PX;">R$ 140 00</button></div>
           </div> 
           <div class="texto_cards3_2">
            <div style="display: flex;"><p>2044</p><img style="margin-left: 8px;width:16px; " src="img/calendario.png" alt=""></div><div style=" display:flex; margin-left: 15px;" ><p>Manual</p><img style="margin-left: 8px;width:16px;" src="img/cambio-de-marchas.png" alt=""></div>
           </div>
        </div>

               
        <div class="cards3">
            <div class="cards3_foto">
            <img src="img/grade3.jpg" alt="">
        </div>
        <div class="texto_cards3">
            <div><p class="p_cards3">MB 2219</p><p class="p_cards3">(PRANCHA)</p></div>
            <div class="btnn"><button style="width: 100PX;">R$ 140 00</button></div>
           </div> 
           <div class="texto_cards3_2">
            <div style="display: flex;"><p>2044</p><img style="margin-left: 8px;width:16px; " src="img/calendario.png" alt=""></div><div style=" display:flex; margin-left: 15px;" ><p>Manual</p><img style="margin-left: 8px;width:16px;" src="img/cambio-de-marchas.png" alt=""></div>
           </div>
        </div>

      
    </div>

     <div class="img_fundo">

        <div class="mega">

         <div style="margin:auto;margin-left:20px;margin-right: 0px;" class="container_numeros">
                    <div class="numeros">
                        <div><img class="img_numeros" src="img/seguro.png" alt=""></div>
                        <div>
                            <p id="bold_numeros">12500+</p>
                            <p>CAMINHÕES NEGOCIADOS</p>
                        </div>
                    </div>
                    <div class="numeros">
                        <div>
                            <img class="img_numeros" src="img/balao-de-pensamento.png">
                        </div>
                        <div>
                            <p id="bold_numeros">9500+</p><p>CLIENTES SATISFEITO</p>
                        </div>
                    </div>
            </div>
            <div style="margin: auto;" class="container_numeros">
                <div class="numeros">
                    <div>
                        <img class="img_numeros" src="img/comercial.png">
                    </div>
                    <div>
                        <p id="bold_numeros">1750+</p><p>VISITANTES AO DIA</p>
                    </div>
                </div>
                <div class="numeros">
                    <div>
                        <img class="img_numeros" src="img/distintivo.png">
                    </div>
                    <div>
                        <p id="bold_numeros">250+</p><p>LOJISTA CERTIFICADO</p>
                    </div>
                </div>
            </div>
        </div>
        
     </div>


@endsection