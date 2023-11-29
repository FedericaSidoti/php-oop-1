Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe Production
- all’interno della classe sono dichiarate delle variabili d’istanza (title, language e rating)
- all’interno della classe è definito un costruttore
- all’interno della classe è definito almeno un metodo (get / set ad esempio)
- vengono istanziati almeno due oggetti Production'e stampati a schermo i valori delle relative proprietà
Bonus
Creare un layout completo per stampare a schermo una lista di movies.

(seconda parte)
Oggi proseguiamo con OOP e creiamo 2 nuove classi:
Movie
Serie
La classe Movie estenderà la classe Production che avete gia fatto e aggiungerà 2 proprietà: $profit (incassi),  e $duration (con relativi metodi get / set)
La classe Serie estenderà anch’essa Production aggiungendo la proprietà $season  (con relativi metodi get / set) ovvero il numero della stagione


prima di tutto organizziamo bene il nostro progetto:
create una cartella Models che conterrà tutti i file delle classi php (ogni classe avrà il suo file)
Nel file index a questo punto vi create 5 istanze di movie 5 istanze di serie.
Inserite questi 10 elementi in un unico array.
Quindi stampate l’elenco di movie e serie nel template che avete fatto ieri, mostrando solo le proprietà in comune.
Bonus
Durante la stampa del vostro array, gestite dei controlli:
se l’elemento corrente è una serie, allora stampare anche il numero della stagione
se invece è un movie allora stampate la durata del film