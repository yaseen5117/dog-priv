@extends('layouts.master')
 

 @section('title', 'Dog Privè | Chi siamo')
 
 @section('description', 'Far accoppiare il proprio cane è spesso complicato. Siamo la community che può fare al caso tuo')
 
 @section ('schema', '{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Pago qualcosa per l'iscrizione e per i servizi offerti?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Assolutamente no, i nostri servizi di ricerca del partner ideale e accoppiamento per il vostro amico a 4 zampe così come l'iscrizioni sono e saranno per sempre gratis"
    }
  },{
    "@type": "Question",
    "name": "Che controlli effettuate su chi si iscrive?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Potete segnalarci in ogni momento il comportamento scorretto di un utente in relazione alla mancanza di volontà reale nell'incontro, vendite non autorizzate, spam e ogni altro comportamento che non ritenete idoneo. Potete contattarci in ogni momento cliccando qui oppure scrivendoci via mail all'indirizzo info@dogprive.it"
    }
  },{
    "@type": "Question",
    "name": "A cosa servono le stelle per la recensione nel profilo utente?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Servono per valutare la genuinità dei comportamenti degli utenti. Un determinato atteggiamento potrebbe non essere soggetto a segnalazione perché non contrario alla nostra policy ma comunque essere ritenuto non idoneo. Cerchiamo di creare un ambiente in cui non ci siano solo regole ma anche gentilezza e buon senso"
    }
  },{
    "@type": "Question",
    "name": "Qual è il vostro scopo se è tutto gratis?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Il nostro obiettivo è garantire il servizio che non esisteva quando ne avevamo bisogno di persona. Crediamo che il nostro servizio sia davvero utile ed anche etico, scopri di più su di noi e sulla nostra missione qui"
    }
  }]
}')
 
 
 @section('seo_img', '')
 @section('seo_alt', 'cane marrone disteso su sfondo blu')
 @section('seo_url', 'https://www.accoppiamentocani.it')
 @section('seo_type', 'page')


 @section('content')
 @section('style')
 @endsection



  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>Le vostre domande più frequenti</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Pago qualcosa per l'iscrizione e per i servizi offerti? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Assolutamente no, i nostri servizi di ricerca del partner ideale e accoppiamento per il vostro amico a 4 zampe così come l'iscrizioni sono e saranno per sempre gratis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Che controlli effettuate su chi si iscrive? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Potete segnalarci in ogni momento il comportamento scorretto di un utente in relazione alla mancanza di volontà reale nell'incontro, vendite non autorizzate, spam e ogni altro comportamento che non ritenete idoneo. Potete contattarci in ogni momento cliccando qui oppure scrivendoci via mail all'indirizzo info@dogprive.it
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">A cosa servono le stelle per la recensione nel profilo utente?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Servono per valutare la genuinità dei comportamenti degli utenti. Un determinato atteggiamento potrebbe non essere soggetto a segnalazione poichè non contrario alla nostra policy ma comunque essere ritenuto non idoneo. Cerchiamo di creare un ambiente in cui non ci siano solo regole ma anche gentilezza e buon senso
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Qual è il vostro scopo se è tutto gratis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Il nostro obiettivo è garantire il servizio che non esisteva quando ne avevamo bisogno di persona. Crediamo che il nostro servizio sia davvero utile ed anche etico, scopri di più su di noi e sulla nostra missione qui
              </p>
            </div>
          </li>

      </div>
    </section>
    
    
    <!-- End F.A.Q Section -->