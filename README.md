Installer git
Installer git: https://git-scm.com/downloads
Husk at tryk “run git from command line”

Opret en bruger på github
Opret en bruger på https://github.com/
Send mig dit brugernavn så giver jeg dig adgang til at redigere i filen

Opret forbindelse til github med git (kun første gang)
Navigere til din lokale folder hvor du vil have projektet m. cmd (htdocs mappen anbefales) “cd C:\xampp\htdocs”
“git clone https://github.com/simoneliasen/r2p2.git” for at få filerne fra github
“git config user.name "Jens Jensen"” Sæt dit brugernavn
“git config user.name” Tjek  om ændringerne til brugernavn blev registreret


Få de seneste opdateringer fra github mappen (gør det hver gang)
Navigere til din lokale folder med projektet via CMD
“git pull origin dev” (du har nu den seneste version af filerne)

Send ny kode til github mappen
Navigere til din lokale folder med projektet via CMD
“git add .” for at registrere dine ændringer lokalt
“git commit -m “indsæt kommentar her”“ (opdatere m. kommentar lokalt)
“git push origin dev” - sender lortet til github

Regler ved brug
Arbejd på konkrete ting (lav ikke små-ændringer over det hele)
Triple check din kode før du sender den på github (husk at clear cache)
Push altid din kode når du er færdig (vent ikke)
Arbejd inden for en rimelig tidsramme (ikke over flere dage)
Rør ikke merge errors 


GIT BRANCHES: Forskellige grene for ikke at ødelægge “hovedkoden”
master: 100% færdig materiale klar til deployment (upload ikke selv hertil)
dev: den branch du uploader færdig kode til (dobbelttjek at den virker før du sender dertil)

MERGE ERRORS
Hvis der står merge error så skriv til en som kan løse det (eksperimenter ikke selv)


