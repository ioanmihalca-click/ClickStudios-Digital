Pasul 3: Prompt pentru Schema.org Avansat (Cheia pentru AI Search)
Acesta este cel mai important pas. Schema actuală este OK, dar prea simplă. AI-ul are nevoie să înțeleagă relația dintre servicii.
Dă-i agentului acest prompt:
"Rescrie secțiunea <script type="application/ld+json"> pentru a fi mult mai detaliată, optimizată pentru Knowledge Graph și AI Search.
Te rog să faci următoarele modificări în JSON-LD:
Schimbă @type din ProfessionalService în Organization sau WebDesignCompany (mai specific).
Adaugă proprietatea knowsAbout: ["Laravel Development", "Artificial Intelligence", "Web Development", "Software Architecture"]. Aceasta ajută AI-ul să asocieze brandul cu aceste topicuri.
Definește serviciile folosind hasOfferCatalog, nu doar un simplu array de string-uri. Fiecare serviciu trebuie să fie un obiect de tip Offer cu name și description.
Adaugă proprietatea foundingDate și founders dacă sunt disponibile, pentru autoritate.
La sameAs, adaugă toate profilurile (GitHub, TikTok, YouTube)."
