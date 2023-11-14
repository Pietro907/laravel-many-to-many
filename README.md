<!-- creiamo con Laravel un sistema customizzato di gestione del nostro Portfolio di progetti. Questo progetto lo porteremo avanti fino alla fine di Novembre, usando varie repo, é quindi di massima importanza che ci lavoriate con cura e in modo dettagliato.

Oggi iniziamo un nuovo progetto che si arricchirà nel corso delle prossime lezioni: man mano aggiungeremo funzionalità e vedremo la nostra applicazione crescere ed evolvere.

Nel pomeriggio, rifate ciò che abbiamo visto insieme stamattina stilando tutto a vostro piacere utilizzando Bootstra/SASS.

Descrizione:
Ripercorriamo gli steps fatti a lezione ed iniziamo un nuovo progetto usando laravel breeze ed il pacchetto Laravel 9 Preset con autenticazione.

Iniziamo con il definire il layout, modello, migrazione, controller e rotte necessarie per il sistema portfolio:
Autenticazione: si parte con l'autenticazione e la creazione di un layout per back-office

Creazione del modello Project con relativa migrazione, seeder, controller e rotte

Per la parte di back-office creiamo un resource controller Admin\\ProjectController per gestire tutte le operazioni CRUD dei progetti

Bonus
Implementiamo la validazione dei dati dei Progetti nelle operazioni CRUD che lo richiedono usando due form requests. -->





- collegare page soft delete

- stile tutte pagine



<!-- 

continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità Type.

Questa entità rappresenta la tipologia di progetto ed è in relazione one to many con i progetti.

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:

creare la migration per la tabella types

creare il model Type

creare la migration di modifica per la tabella projects per aggiungere la chiave esterna

aggiungere ai model Type e Projecti metodi per definire la relazione one to many

visualizzare nella pagina di dettaglio di un progetto la tipologia associata, se presente

permettere all’utente di associare una tipologia nella pagina di creazione e modifica di un progetto

gestire il salvataggio dell’associazione progetto-tipologia con opportune regole di validazione



Bonus 1 (non opzionale):

creare il seeder per il model Type.

Bonus 2 (opzionale):

aggiungere le operazioni CRUD per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.

 -->