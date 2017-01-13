; Pi-hole Block Page: Configuration

; Remote classifications file, used to categorise websites from their blocklists
; This will also update when new versions of PHBP are released
; You may mirror this (EG: for privacy reasons), if you do not wish to use the default server
;classFile = "https://raw.githubusercontent.com/WaLLy3K/wally3k.github.io/master/classification.ini"

; How often (in seconds) should the remote classifications file be updated? Default: 172800 (48 hrs)
;classUpdateTime = "172800"

; If user browses to Raspberry Pi's IP manually, where should they be directed?
; Assumes default folder of /var/www/html/, leave blank for none
;landpage = "landing.php"

; Who should whitelist emails go to?
;adminEmail = "admin@domain.com"

; What is the name of your domain, if any?
;selfDomain = "rpi.domain.com"

; What is the URL for your preferred Style Sheet?
;customCss = "http://pi.hole/pihole/blockingpage.css"

; What is the URL for your preferred Favicon?
;customIcon = "http://pi.hole/admin/img/favicon.png"

; What is the URL for your preferred Logo?
;customLogo = "https://wally3k.github.io/style/phv.svg"

; What is the URL for your preferred "Blocked by Pi-hole" image?
;blockImage = "https://wally3k.github.io/style/blocked.svg"

; Should we show a 1x1 blank GIF for iframes from blocked domains?
;blankGif = "false"

; Should we allow users to whitelist from the block page, with the correct password?
;allowWhitelisting = "false"

; Do not show that an update is available
;ignoreUpdate = "true"

; Show "Time Generated" value
;exeTime = "true"


; Please add any domains here that may have been manually placed in adlists.list
; Including HTTP/HTTPS/WWW or a trailing slash is unnecessary
[blocklists]
suspicious[] = "v.firebog.net/hosts/BillStearns.txt"
suspicious[] = "v.firebog.net/hosts/Cameleon.txt"
suspicious[] = "v.firebog.net/hosts/Dshield-Sus.txt"
suspicious[] = "v.firebog.net/hosts/EladKarako.txt"
suspicious[] = "v.firebog.net/hosts/JoeWein.txt"
suspicious[] = "v.firebog.net/hosts/Mahakala.txt"
suspicious[] = "v.firebog.net/hosts/Minenu.txt"
suspicious[] = "v.firebog.net/hosts/JoeyLane.txt"
suspicious[] = "v.firebog.net/hosts/PeterLowe.txt"
suspicious[] = "v.firebog.net/hosts/PiwikSpam.txt"
suspicious[] = "v.firebog.net/hosts/ReddestDream.txt"
suspicious[] = "v.firebog.net/hosts/SBDead.txt"
suspicious[] = "v.firebog.net/hosts/SBKAD.txt"
suspicious[] = "v.firebog.net/hosts/SBSpam.txt"
suspicious[] = "v.firebog.net/hosts/Securemecca.txt"
suspicious[] = "v.firebog.net/hosts/SomeoneWC.txt"
suspicious[] = "v.firebog.net/hosts/Spam404.txt"
suspicious[] = "v.firebog.net/hosts/Volkins.txt"
suspicious[] = "v.firebog.net/hosts/Winhelp2002.txt"

advertising[] = "v.firebog.net/hosts/AdAway.txt"
advertising[] = "v.firebog.net/hosts/Disconnect-ads.txt"
advertising[] = "v.firebog.net/hosts/HPHosts-ads.txt"
advertising[] = "v.firebog.net/hosts/SBSpotify.txt"
advertising[] = "v.firebog.net/hosts/SBUnchecky.txt"

tracking[] = "v.firebog.net/hosts/Airelle-trc.txt"
tracking[] = "v.firebog.net/hosts/Disconnect-trc.txt"
tracking[] = "v.firebog.net/hosts/Disconnect-mal.txt"
tracking[] = "v.firebog.net/hosts/Easylist.txt"
tracking[] = "v.firebog.net/hosts/Easyprivacy.txt"
tracking[] = "v.firebog.net/hosts/Quidsup-trc.txt"
tracking[] = "v.firebog.net/hosts/SB2o7Net.txt"
tracking[] = "v.firebog.net/hosts/SBTelemetry10.txt"
tracking[] = "v.firebog.net/hosts/SBTelemetry8.txt"
tracking[] = "v.firebog.net/hosts/SBTyzbit.txt"

malicious[] = "v.firebog.net/hosts/APT1Rep.txt";
malicious[] = "v.firebog.net/hosts/Airelle-hrsk.txt";
malicious[] = "v.firebog.net/hosts/Cybercrime.txt";
malicious[] = "v.firebog.net/hosts/DNS-BH-mal.txt"
malicious[] = "v.firebog.net/hosts/HPHosts-emd.txt"
malicious[] = "v.firebog.net/hosts/HPHosts-exp.txt"
malicious[] = "v.firebog.net/hosts/HPHosts-psh.txt"
malicious[] = "v.firebog.net/hosts/MalImmortal.txt"
malicious[] = "v.firebog.net/hosts/MalwareDL.txt"
malicious[] = "v.firebog.net/hosts/MalwarePatrol.txt"
malicious[] = "v.firebog.net/hosts/Openphish.txt"
malicious[] = "v.firebog.net/hosts/Quidsup-mal.txt"
malicious[] = "v.firebog.net/hosts/RansomTrack.txt"
malicious[] = "v.firebog.net/hosts/SBRisk.txt"
malicious[] = "v.firebog.net/hosts/Shalla-mal.txt"
malicious[] = "v.firebog.net/hosts/ZeusTrack.txt"
