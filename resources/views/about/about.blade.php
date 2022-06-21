 @extends('layouts.master')
 

 @section('title', 'Dog Privè | Chi siamo')
 
 @section('description', 'Far accoppiare il proprio cane è spesso complicato. Siamo la community che può fare al caso tuo')
 
 @section ('schema', '
 {"@context": "http://schema.org/", 
      "@type": "AboutPage", 
      "name": "Dog Privè | Come far accoppiare il mio cane?",
      "description": "Far accoppiare il proprio cane è spesso complicato. Siamo la community che può fare al caso tuo", 
      "url": "https://www.accoppiamentocani.it/about"} ' )
 
 
 @section('seo_img', '')
 @section('seo_alt', 'cane marrone disteso su sfondo blu')
 @section('seo_url', 'https://www.accoppiamentocani.it')
 @section('seo_type', 'page')


 @section('content')
 @section('style')
 
 :root {
   --main-font: 'Roboto', sans-serif;
   --second-font : 'Montserrat', sans-serif;
   --primary-color: #00a6f0;
   --secondary-color: #f1438b;
   --tertiary-color: rgb(204, 199, 199);
   --cta: rgb(46, 240, 46);
   --primary-background:rgba(9, 25, 77, 0.212);
   --box-shadow : 3px 2px 10px rgba(59, 59, 59, 0.541);
   counter-reset: p;
   --size-1 : 1rem;
   --size-5: 5rem
}

a {
    text-decoration: none;
}

h1, h2, h3, h4, h5 {
    font-family: var(--second-font);
    letter-spacing: 0.03rem;
}

.hero {
    display: flex;
    width: 100%;
    filter: hue-rotate(-15deg);
}

.hero_figure {
    display: flex;
    width: 100%;
    min-height: 70vh;
    justify-content: end;
    justify-items: end;
    background: url('./img/daddy_blu_1.jp');
    background-size: cover;
    background-repeat: no-repeat;
}


.hero_square {
    position: absolute;
    text-align: end;
    font-family: var(--main-font);
    color: rgb(24, 188, 139);
    padding: 1rem;
    text-shadow: 0.2px 0.2px 0.2px #16a8ae;
}


.hero_square h1 {
    -webkit-text-stroke-width: 5px;
    -webkit-text-stroke-color: var(--secondary-color);
}


.hero_square h1, .hero_square span {
    font-size: clamp (1rem, 5vw, 3rem);
    position: relative;
    margin-block: 1rem;
    margin-inline: auto;
}
.hero_square h2 {
    text-align: end;
    position: relative;
    margin-inline: auto;
}

.cta {
      background: var(--secondary-color);
      color: #fff;
      width: fit-content;
      height: fit-content;
      padding: 1rem 2rem 1rem 2rem;
      border-radius: 1rem 2rem 1rem 2rem;}


.cta:hover {cursor: pointer}

.hero_img {
    width: 100vw;
    max-height: 80vh
}

.breadcrumbs_item {
    display: inline-block;
}

.breadcrumbs_item a {
    color: #000
}

.breadcrumbs_item a:after {
    content: " - "
}



.breadcrumbs_item a:nth-last-child(){
    color: var(--primary-color)
}

.col, .col img {min-width: 300px}

.col img {
    box-shadow: var(--box-shadow);
}

.container-fluid {
                  position: relative;
                  width: 100%}


.youtube_presentation {
    width: 100%;
    justify-content: center;
    justify-items: center;
    text-align: center;
}

.youtube_presentation iframe {
    aspect-ratio: 16 / 9;
    margin: 5%;
}

.padding_row {
    position: relative;
    margin-block: 1rem;
    margin-inline: auto;
    gap: 1.5rem;
}

.row_first {justify-content: center;}
.row_third {margin-top: 25%;
            justify-content: center;}
.transazione {margin-bottom : var(--size-5)}
.row_transazione {margin-top: 5%}


.col {position: relative;
      padding: 1rem}

.col_first {
    z-index: -2;

}

.col_behind {
    position: absolute;
    margin-top: -10%;
    max-width: 50vw;
    z-index: -1;
    margin-inline: 50%;
    transform: translateX(-50%);
    padding: 5%
}

.col_bg {
    background: var(--tertiary-color);
    margin-left: 12%;
    margin-top: 30%;
}

.col_bg p {font-style: italic;}

.col_h2 {
    max-width: 30ch
}

.col_p {
    max-width: 60ch
}

.mila {
    max-width: 30ch
}

.col_inside_img {
    position: absolute;
    margin-top: 10%
}

.col_6_cose {position: relative;
             display: inline-flex;
             margin-inline: auto;
             padding: 1%;
            }


.divider {
    width: inherit;
    margin-top: 2%;
    max-width: 100%;
    background-color: var(--primary-color);
    height: 1rem;
}

 .convincere {
    background: url('./dog-prive/assets/img/puppy_blu_1.jpg');
    background-size: 100vw auto;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: bottom;
    padding-block: 1rem;
    justify-content: center;
    justify-self: center;
}

 .col_da_sapere {
     background-color: rgba(204, 199, 199, 0.658);
     min-width: 30%;
     padding-bottom: 1%
 }


 .col_da_sapere::before {
     counter-increment: p;
     content: "" counter(p);
     color: rgba(117, 117, 117, 0.658);
     font-size: 50px;
     z-index: -1;
 }

 .col_da_sapere .cta {
    justify-self: center;
    text-align: center;
 }

 .col_transazione_img , .col_transazione {
     display: grid;
     place-content: center;
     place-items: center;
 }

 input {cursor: pointer}



 .mb-3 .cta {background-color: var(--cta);
             margin-top: var(--size-1);
            }
            
.media-controller {
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: 100%;
    overflow-behaviour-inline: contain;
    overflow-x: auto;
    margin-bottom: var(--size-5);
    padding: var(--size-1);
    background-color: var(--tertiary-color);
    }

.media-group {
    display: grid;
    grid-auto-flow: column;
    }
                     
.media-scroll > img {
    inline-size: 100%;
    aspect-ratio: 16 / 9;
    object-fit: cover;
    scroll-snap-align: start;
    }
            
.snaps {
    scroll-snap-type: inline mandatory;
    scroll-padding-inline: 1rem;
    }

.svg_wrap {
    width: 4vw;
    float: right;
    min-width: 50px;
    margin-top: var(--size-1);
    opacity: 0;
}

svg {
    width: 100%;
    height: auto;
}

#circle, #tickle {stroke-dashoffset: 600;
         stroke-dasharray: 600;}
#circle {
        animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
        animation-duration: 10s;
}
#tickle {animation-delay: 4.5s;
        animation-timing-function: ease-in;
        animation-duration: 6s;
        }

.svg_animation {
    animation-name: svganim;
    animation-fill-mode: forwards;
    animation-play-state: paused;
}

.svg_cta {
    opacity: 1;
    animation-play-state: running;
}

@keyframes svganim {
    to {stroke-dashoffset: 50;
        }
}

@media (min-width: 1200px){

}

@media (max-width: 400px) {
    .col_p {max-width: 30ch;}
              
    }

@media (max-width: 500px){
    .hero_figure {
        background: url('./dog-prive/assets/img/puppy_blu_3.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        min-height: calc(40vh + auto)
    }
    .youtube_presentation {
        margin: 0;
        margin-inline: auto;
    }

    .hero .span, h2 {display: none;}

}

@media (max-width: 1200px) {
    .col_behind {display: none; display: hidden;}
    .col_bg {margin-left: none}
    .mila {max-width: 60ch}
    .col_6_cose {display: block}
    .row_third {margin-top:40%}
    .last {margin-top:-5%; margin-inline: auto;}
    .col_h2 {margin-bottom: 3%}
    .col_h2, .col_p {margin-inline: auto;
            text-justify: distribute;
            justify-content: center;}
}

 
 @endsection
 
 
    <main id="main">

    <div class="hero container-fluid">

        <figure class="hero_figure">
            <div class="hero_square">
            <h1>DOG PRIV&Egrave; </h1><br> <span>(ACCOPPIAMENTO CANI)</span>
            <h2>Come far accoppiare il mio cane?</h2>
            <div class="cta">Iscriviti</div>
            </div>
        </figure>

    </div>

    <ul class="breadcrumbs">
      <li class="breadcrumbs_item">
        <a class="breadcrumbs_link" href="https://www.accoppiamentocani.it">Homepage</a>
      </li>
      <li class="breadcrumbs_item">
        <a class="breadcrumbs_link active">Chi siamo</a>
      </li>

    </ul>

    <div class="container_fluid youtube_presentation">
      <iframe width="60%" height="auto" src="https://www.youtube.com/embed/3mTqWlin7Ks" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <div class="container-fluid">

        <div class="row padding_row row_first">
            <div class="col col_first col-lg-5 col-md-12  col-sm-12">
                <img alt="cucciolo di cane bianco e nero su sfondo rosa" title="" src="./dog-prive/assets/img/puppy_pink_1.jpg"  loading ="lazy"  class="col-img">
            </div>
            <div class="col col-lg-5 col-md-12  col-sm-12">
                <h2 class="col_h2">Non un cane qualsiasi: il cucciolo del mio cane</h2>
                <p class="col_p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis commodi cumque blanditiis rem ullam illo, reprehenderit repudiandae ducimus odio laudantium exercitationem consequuntur, quod labore explicabo! Sed eaque repellendus consectetur! Vel?</p>
            </div>
        </div>


        <div class="row padding_row row_second">
            <div class="col col-lg-5 col-md-12 col-sm-12">
                <h2 class="col_h2">400 mila cuccioli <br> (2021) </h2>
                <p class="col_p mila">è il numero di cuccioli derivante da importazioni dal mercato illegale, cani e gatti </p>

            </div>
            <div class="col col_behind">
                <img src="./dog-prive/assets/img/puppy_blu_2.jpg" title="" alt="cucciolo di cane bianco e marrone su sfondo blu"  loading ="lazy" class="col-img">
            </div>
            <div class="col col_bg col-lg-5 col-md-12 col-sm-12 last">
                <h2 class="col_h2">Non un cane qualsiasi: il cucciolo del mio cane</h2>
                <p class="col_p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis commodi cumque blanditiis rem ullam illo, reprehenderit repudiandae ducimus odio laudantium exercitationem consequuntur, quod labore explicabo! Sed eaque repellendus consectetur! Vel?</p>
                <img class="col_inside_img" src="./dog-prive/assets/img/carousel_dog.jpg" title="" alt="cani di razza in fila su sfondi colorati diversi" loading ="lazy" >
            </div>
        </div>

        <div class="row padding_row row_third">
        <div class="col-lg-6 col-md-12 col-sm-12 col_6_cose">
            <h2 class="col_h2">6 cose che devi sapere sull'accoppiamento tra cani</h2>
          <div class="col-lg-6 col-md-12 col-sm-12 col_6_cose">
            <p class="col_p">Non dare per scontata la copula del tuo cane. Ci sono cose che devi assolutamente conoscere, dal pedigree alla genetica. Il mondo canino è più complesso di quello che possa sembrare</p>
          </div>
        </div>
    </div>
    <div class="divider"></div>
    </div>

    <div class="convincere container-fluid">
        <div class="row padding_row">
        <div class="col-md-3 col-sm-12 col_da_sapere" data-aos="flip-up" data-aos-delay="300"> 
             <p>Il pedigree non è un problema. Anche i privati possono, attraverso la specifica modulistica, far accoppiare i propri cani di razza e richiedere il pedigree. Il pedigree è un documento difficile da ottenere? Niente affatto! Ti aiutiamo noi</p>
            <div class="cta scopri">Scopri di più</div>
        </div>
        <div class="col-md-3 col-sm-12 col_da_sapere" data-aos="flip-up" data-aos-delay="600">
            <p>Non so a chi affidare tutti gli altri cuccioli che non terrei. <strong>Sul serio?</strong> Sempre più persone negli ultimi anni sognano di avere al proprio fianco un amico a 4 zampe. In più così sei sicuro che il cucciolo sia nato e accudito come desideri e che non provenga da allevamenti illegali  </p>
            <div class="cta scopri">Scopri di più</div>
        </div>
        <div class="col-md-3 col-sm-12 col_da_sapere" data-aos="flip-up" data-aos-delay="900"> 
            <p>Molti miei amici si sono iscritti ed io non ho un cane. Comunque voglio per forza un bulldog francese, o quello o niente. <strong>Attenzione!</strong> Le razze sono il frutto della selezione artificiale dell'uomo, alcune di esse hanno dei gravi problemi...se sei un vero amante dei cani leggi questo articolo</p>
            <div class="cta scopri">Scopri di più</div>
        </div>
        </div>
        <div class="row padding_row">
        <div class="col-md-3 col-sm-12 col_da_sapere" data-aos="flip-up" data-aos-delay="300"> 
            <p> <strong>Varianza genetica </strong>, cuccioli sani! Se fai accoppiare cani della stessa razza da luoghi diversi della penisola, confrontando i dati del pedigree puoi avere la certezza che tra i due non ci siano legami di sangue stretti. Questo si traduce in una maggiore salute del tuo amico a quattro zampe</p>
            <div class="cta">Scopri di più</div>
        </div>
        <div class="col-md-3 col-sm-12 col_da_sapere" data-aos="flip-up" data-aos-delay="600"> 
             <p>Ma il mio cane è troppo giovane, anzi no...è troppo anziano per accoppiarsi. <strong>Quanto ne sai?</strong> Rispondiamo noi alle tue domande: da che età e fino a che età può accoppiarsi un cane  </p>
             <div class="cta scopri">Scopri di più</div>
        </div>
        <div class="col-md-3 col-sm-12 col_da_sapere" data-aos="flip-up" data-aos-delay="900"> 
            <p>Questo sito è sicuro? Abbiamo inserito un sistema di recensione sul profilo di ogni utente e anche un tasto per poterlo segnalare. Siete voi stessi che ci aiutate a verificare il comportamento corretto dell'utente fino a creare la community perfetta. Il nostro sito diventa ogni giorno più sicuro. Gli utenti scorretti vengono cacciati a seguito delle vostre segnalazioni! <strong>Puoi stare tranquillo </strong></p>
            <div class="cta scopri">Scopri di più</div>
        </div>
        </div>
    
    </div>
    
     @include('layouts.affiliate')

    <div style="display: none" class="transazione container-fluid">
        <div class="row padding_row row_transazione">
        <div class="col-lg-6 com-md-12 col-sm-12 col_transazione_img">
            <img src="./dog-prive/assets/img/dog_newsletter.jpg" alt="" loading ="lazy" title="" class="transazione_img" >
        </div>
        <div class="col-lg-5 com-md-12 col-sm-12 col_transazione">
             <h2 class="transazione_h2">Solo notizie di qualità (quelle adatte a te) sul mondo canino</h2>
            <img src="./dog-prive/assets/img/email_icon.png" title="" loading ="lazy" alt="" class="transazione_icon"> <span>Iscriviti alla newsletter</span>
       

         
            <form id="custom_form" action="https://docs.google.com/forms/u/3/d/e/1FAIpQLScdZ-VTiINno5N8ETwfO7ID934nXY2doI-ZPsbenSYFku4XZw/formResponse" method="post">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="checkbox" aria-checked="false" name="entry.409355913" data-answer-value="amatore" value="amatore" aria-label="amatore" id="flexSwitchCheckChecked">
                <label class="form-check-label" for="flexSwitchCheckChecked">
                  amatore
                </label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="checkbox"  aria-checked="false" name="entry.409355913"  aria-label="allevatore" data-answer-value="allevatore" value="allevatore" id="flexSwitchCheckChecked">
                <label class="form-check-label" for="flexSwitchCheckChecked">
                  allevatore
                </label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="checkbox" aria-checked="false"  name="entry.409355913"  aria-label="addestratore" data-answer-value="addestratore" value="addestratore"  id="flexSwitchCheckChecked">
                <label class="form-check-label" for="flexSwitchCheckChecked">
                  addestratore
                </label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="checkbox" aria-checked="false" name="entry.409355913" aria-label="tolettatore" data-answer-value="tolettatore" value="tolettatore" id="flexSwitchCheckChecked">
                <label class="form-check-label" for="flexSwitchCheckChecked">
                  tolettatore
                </label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="checkbox"  aria-checked="false" name="entry.409355913" aria-label="veterinario" data-answer-value="veterinario" value="veterinario"   id="flexSwitchCheckChecked">
                <label class="form-check-label" for="flexSwitchCheckChecked">
                  veterinario
                </label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="checkbox" aria-checked="false"  name="entry.409355913" aria-label="commerciante" data-answer-value="commerciante" value="commerciante" id="flexSwitchCheckChecked">
                <label class="form-check-label" for="flexSwitchCheckChecked">
                  commerciante
                </label>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Indirizzo mail</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="emailAddress" placeholder="name@example.com" >
                <button  id="svg_cta" class="cta" data-action='submit' type="submit" role="button" name="submit" value="submit">Iscriviti</button>
                
                <!--Check svg-->
                <div class="svg_wrap">
                <svg width="130" height="130" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle id="circle" class="svg_animation" cx="65" cy="65" r="57.5" stroke="#00A6F0" stroke-width="10"/>
                  <line id="tickle" class="svg_animation" x1="6" y1="-6" x2="38.1534" y2="-6" transform="matrix(0.627053 0.778977 -0.683226 0.730207 30 55.5)" stroke="#F1438B" stroke-width="8" stroke-linecap="round"/>
                  <line id="tickle" class="svg_animation" x1="6" y1="-6" x2="58.2203" y2="-6" transform="matrix(-0.697809 0.716284 -0.611642 -0.791135 95.8135 35)" stroke="#F1438B" stroke-width="8" stroke-linecap="round"/>
                  </svg>
                </div>
                  
                
                 <!--Accettare policy--> 
                
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="flexCheckCheckedDisabled" checked disabled>
                  <label class="form-check-label" for="flexCheckCheckedDisabled">
                    Accetto la <a href="https://www.dogprive.it/policy"> privacy policy </a>
                  </label>
                </div>
              </div>
            
  
            </form>


        </div>
    </div>

    </div>



       <!--Svg animation-->
       <script>
        svg_cta = document.getElementById('svg_cta');
        svg_cta.addEventListener('click', function(){
          svg_cta.classList.add('svg_cta')
        })
      </script>

     <!--Form delay-->
     <script>
        function formSubmit(){
          document.getElementById("custom_form").submit();
        }

        window.onload=function(){ 
          window.setTimeout(formSubmit, 5000);
        };
      </script>
      </script>

 

 
 </main>