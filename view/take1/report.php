<div class="centered">
    <h3 class="header">Rapportering av kursmoment</h3>
    <div class="divider divpadding"></div>
        <table class="centered" style="background-color:transparent;text-align:left;">

      <tr>
 <h3>kmom01</h3>
 <h4>Hur känns det att hoppa rakt in i klasser med PHP, gick det bra?</h4>
 <p>Det var väldigt mycket att göra i detta kursmoment, känner jag. Jag märkte att mina PHP-kunskaper var lite rostiga.
     Det tog ett tag att verkligen komma in i tänket igen innan jag kunde börja på uppgifterna.
     Själva skapandet av klasser gick ganska så bra. Det påminner mycket om det vi gjorde i python kursen.</p>
 <h4>Berätta om dina reflektioner kring ramverk, anax-lite och din me-sida.</h4>
 <p>Än så länge känns ramverket vi skapat som hanterbart. Men jag antar att det kommer bli en hel del mer avancerat framöver. Det är fortfarande lite förvirrande för mig hur man använder sig av vendor.
 När man väl gått igenom artikeln där själva skelettet för ramverket skapas så gick det ganska så bra att skapa en egen hemsida.
Jag lag nog ner mest tid på CSS och styling, något jag behöver bli bättre på.</p>
 <h4>Gick det bra att komma igång med MySQL, har du liknande erfarenheter sedan tidigare?</h4>
 <p>Det känns bra än så länge. Det tog ett litet tag att lära mig hur Workbench fungerar, men nu när jag börjat greppa programmet så känns det faktiskt smidigare än SQLite.
     En sak som jag tyckte var lite jobbigt var att man var tvungen att köra SELECT * FROM varje gång man ville se hur databasen såg ut.
     Jag antar att det finns något sätt att låsa fast den vyen, men jag lyckades inte riktigt få till det.
     Det var lite svårt att veta vad en tredjedel av uppgiften var. Men jag gjorde uppgifter fram tills att scrollbaren är i mitten i alla fall.</p>

      </tr>


      <tr>
 <h3>kmom02</h3>
 <h4>Hur känns det att skriva kod utanför och inuti ramverket, ser du fördelar och nackdelar med de olika sätten?</h4>
 <p>Jag känner att jag börjar bli mer van nu. Dock tycker jag det är svårt att riktigt bestämma hur man ska dela upp koden på ett korrekt sätt. Alltså mellan views and src t.ex.</p>
 <h4>Hur väljer du att organisera dina vyer?</h4>
 <p>För har jag take1 där själva grunden ligger. Det är 404, about, footer, main etc. Sedan har navbars, Session och Dice sina egna mappar för att det ska bli enkelt att navigera.
 Det ser snyggare ut i koden också.</p>
 <h4>Berätta om hur du löste integreringen av klassen Session.</h4>
 <p>Jag följde guiden som fanns ganska noga. Därav var själva grunden inte så svår att implementera.
     Det mesta egenarbetet utfördes nog i route-filen. Här fick sessions en egen route-fil.
     Här fastnade jag ett tag för att jag inte riktigt visste hur jag skulle lösa att .css filen behöver en annan länk till de olika session sidorna.
     Jag löste det genom att skicka med css-filens länk som en variabel i routen.</p>
     <h4>Berätta om hur du löste uppgiften med Tärningsspelet 100, hur du tänkte, planerade och utförde uppgiften samt hur du organiserade din kod?</h4>
     <p>Jag började med att skapa en dice klass där det mesta ligger.
         Här finns variablar för vilka slag som slagits, vilket score spelarna har och vilkens tur det är.
         Sedan lag jag in olika funktioner som skötte så att view-sidan snabbt kan komma åt rätt information och avgöra vad som ska ske.
         Ett problem jag hade var att jag glömde att ge dice-sessionen ett unikt namn vilket gjorde att den blev överskriven av Session-sessionen.
         När jag väl märkt det så flöt resterande på ganska så bra.
         Jag försökte dela upp koden på ett sådant sätt att det mesta av uträkningen skedde i klassen och inte i viewen, men det hade säkert gått att fila ner koden ännu mer om man hade velat.
      </p>
     <h4>Några tankar kring SQL så här långt?</h4>
     <p>Det känns bra. Vi har ju hållt på en del med SQL i tidigare kurser så det känns bra att få fördjupa sig lite.</p>

      </tr>
    </table>

</div>
