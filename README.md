# r2p2
Repository for project regarding the business Café Frederiksberg.

GITHUB: Webbaseret hosting
Opret en bruger på https://github.com/
Send mig dit brugernavn så giver jeg dig adgang til at redigere i filen

GIT: Version control system
Installer git: https://git-scm.com/downloads
Husk at tryk “run git from command line”
Naviger til mappen “htdocs” med  Command prompt (CMD) typisk “cd C:\xampp\htdocs”
“git clone https://github.com/simoneliasen/r2p2.git” for at få filerne fra github
“git config user.name "Jens Jensen" Sæt dit brugernavn
“git config user.name” Tjek  om ændringerne til brugernavn blev registreret

GIT BRANCHES: Forskellige grene for ikke at ødelægge “hovedkoden”
master: 100% færdig materiale klar til deployment (upload ikke selv hertil)
dev: den branch du uploader færdig kode til (dobbelttjek at den virker før du commiter)

HENT FILER FRA GITHUB m. GIT (gør det hver gang du vil påbegynde kodning)
Navigere til din lokale folder med projektet via CMD
“git pull origin dev” for at få de seneste opdateringer på projektet

SEND FILER TIL GITHUB m. GIT (gør det hver gang du har færdiggjort kode)
Navigere til din lokale folder med projektet via CMD
“git add .” for at registrere dine ændringer lokalt
“git commit -m “indsæt kommentar her”“ (opdatere m. kommentar lokalt)
“git push origin dev” - sender lortet til github

MERGE ERRORS
Hvis der står merge error så skriv til en som kan løse det (eksperimenter ikke selv)

DE UBRYDELIGE REGLER
Rør ikke merge errors selv
Arbejd på konkrete ting på siden
Trippel-check din kode før du pusher til github (også med  slettet cache (CTRL-F5))
Push altid din kode efter du er færdig med at arbejde på noget
Du burde arbejde på noget koncentreret i korte tidsperiode (timer) i stedet for dage, da der vil opstå ændringer i koden af andre der pusher og vi så vil få merge errors
Arbejd på konkrete områder af koden, dette gør troubleshooting lettere

Andre git kommandoer
“git log” - viser alle commits
“git status” - viser ændringer du ikke har committet (evt. tjek hver gang du er færdig)
“git checkout dev” - ændre din nuværende branch til at være “dev” (frarådes at pille ved)

(please ikke eksperimenter med yderligere kommandoer på projektet)
