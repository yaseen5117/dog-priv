   @extends('layouts.master')

    @section ('robots', 'noindex') 
    @section('title', ' Dog Privè | User Policy')
    
    @section('content')
    

   
    
    
    <style>
    


.privacy {
    margin-bottom : 5rem
}


.hero {
    display: flex;
    height: fit-content;
    filter: hue-rotate(5deg);
}

.hero_figure {
    display: flex;
    width: 100%;
    min-height: 70vh;
    justify-content: start;
    justify-items: start;
    background: url('./dog-prive/assets/img/1.jpg');
    background-size: cover;
    background-position: -50%;
}


.hero_square {
    position: absolute;
    text-align: end;
    font-family: 'Roboto', sans-serif;
    color: white;
    padding: 1rem;
}


.hero_square h1 {
    -webkit-text-stroke-width: 5px;
    -webkit-text-stroke-color: #f1438b;
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
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: #00a6f0;
}

.cta {
      background: #f1438b;
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

.col, .col img {min-width: 300px}

.col img {
    box-shadow: var(--box-shadow);
}

.hero {
        position: relative;
        width: 100% }

.col {position: relative;
      padding: 1rem}


.col_h2 {
    color: #000;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 2%;
}

.col_p {
    max-width: 80%;
    text-indent: 1%;
    color: #000;
    line-height: 2rem;
    margin-bottom: 2%;

}



@media (max-width: 400px) {
                .col_p {max-width: 30ch;}
              
            }

@media (max-width: 500px){
    .hero_figure {
        background-size: cover;
        background-repeat: no-repeat;
        min-height: calc(40vh + auto);
        background-position: 50% 0%;
    }



}

@media (max-width: 1200px) {
 
    .col_h2 {margin-bottom: 3%}
    .col_h2, .col_p {margin-inline: auto;
            text-justify: distribute;
            justify-content: center;}
  
}
    
</style> 
    
    <main id="main">
        
        
    <!--Start Privacy and Policy Section-->    
    <section>

    <div class="hero container-fluid">

        <figure class="hero_figure">
            <div class="hero_square">
            <h1>DOG PRIV&Egrave; </h1><br> <span>(ACCOPPIAMENTO CANI)</span>
            <h2>Privacy and User Policy</h2>
            <div class="cta">Scrivici</div>
            </div>
        </figure>

    </div>

    <div class="container-fluid privacy">

      <div class="col">

          <div class="col_h2">
            1. Responsabilità e modalità di utilizzo
          </div>
          <div class="col_p">
            L’utente che si registra per gli scopi illustrati sul sito esime il proprietario e lo staff di DogPrive da responsabilità inserenti un diverso uso del sito.
          </div>
          <div class="col_h2">
            1.1  Veridicità delle informazioni rese durante la registrazione
          </div>
          <div class="col_p">
            L’utente non può:
            <br> - vantare titoli quali pedigree e vaccinazioni che non siano nel reale possesso dell'utente.
            <br> - certificare dati errati del cane, diversi da quelli risultanti da attestazioni, con mala fede dell'utente.
            <br> - utilizzare dati anagrafici, mail e dati non appartenenti al reale fruitore del sito
             </div>
          <div class="col_h2">
            1.2  Comportamenti ritenuti inidonei al corretto uso del sito
          </div>
          <div class="col_p">
            L’utente non può:
            <br> - pubblicizzare prodotti o servizi propri o di terzi, che siano essi a pagamento o gratuiti 
            <br> - perpetrare comportamenti contrari a norme imperative dello stato, ordine pubblico, buon costume o che possano ledere l’altrui diritto di privacy e d’autore.
            <br> - utilizzare un linguaggio che leda la dignità altrui, uso di linguaggio blasfemo o violento
            <br> - segnalare senza evidente ragione, per inimicizia, comportamenti legittimi che non violino i punti evidenziati sopra
          </div>
          <div class="col_h2">
            2.  Utilizzo sistemi di auto controllo dell'utente
          </div>
          <div class="col_p">
            L'utente potrà scrivere una mail su info@dogprive.it, mandare un messaggio nella chat presente in homepage o segnalare il singolo contenuto attraverso l'apposito tasto situato sotto ogni post per segnalare comportamenti illegittimi di altri utenti
          </div>
          <div class="col_h2">
            2.1  Utilizzo del sistema di rating dell'utente
          </div>
          <div class="col_p">
            Ogni utente potrà assegnare un voto ad altro utente con un sistema di recensione basato graficamente su delle stelle che attribuiscono un punteggio da 0 a 5. La votazione deve essere fatta sulla base di una valutazione complessiva sui punti elencati di seguito:
            <br> - effettiva volontà dell'utente di voler far accoppiare il suo cane nell'immediato o nel prossimo futuro
            <br> - valutazione complessiva della correttezza nella comunicazione, veridicità delle informazioni rese e disponibilità alla comunicazione
            <br> - valutazione della qualità complessiva dei contenuti pubblicati e scambiati, in termini di qualità immagine/video e dei contenuti
          </div>
          <div class="col_h2">
            3.  Sanzioni derivanti da violazioni del punto 1 
          </div>
          <div class="col_p">
           Lo staff a seguito di segnalazioni o autonomamente ha la facoltà di chiedere spiegazioni all’utente in merito a suoi comportamenti o procedere, previo preavviso, alla cancellazione dell’account per palesi violazioni del presente regolamento.
           Dog Privè, nelle mani dei suoi amministratori pro tempore, se ricorrono casi di violazioni attinenti l'ordine pubblico ed il buon costume, potrà portare il caso all'attenzione delle autorità competenti.
           Dog Privè si riserva di intentare autonoma causa di risarcimento del danno legato all'immagine del brand qualora ve ne siano i presupposti.
          </div>
          <div class="col_h2">
            4.  Trattamento dei dati personali 
          </div>
          <div class="col_p">
            Tutti i dati inseriti dall'utente o derivanti da strumenti di tracciamento e profilazione rimangono ad uso interno ed esclusivo della piattaforma. Ogni attività di tipo statistico, di immagazzinamento dati o di utilizzo degli stessi per attività di marketing sarà soggetta ad approvazione dell'utente della presente policy.
            L'utente potrà in qualsiasi momento richiedere la cancellazione totale o parziale dei propri dati tramite specifica richiesta su info@dogprive.it o tramite la chat presente in homepage. In quest'ultima ipotesi l'utente dovrà dare prova di essere il titolare dei dati per i quali chiede la cancellazione.
          </div>




      </div>
    </div>

    </section>
    
     <!--End Privacy and Policy Section-->   
    </main><!-- End #main -->


    @endsection