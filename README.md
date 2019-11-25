
# Einstellung von Ports:
öffnet C:/Apache/Apache/conf/httpd.conf 
sucht nach "Listen"
es sollte Listen *:80 drinstehen
falls nicht, löscht alle anderen Einträge, die mit Listen anfangen und schreibts das ein.

Erlaubt port 80 im Firewall
# Lokation vom Server
das Verzeichnis WebQuiz muss in C:\xampp\htdocs liegen.
# Zugriff von einem Anderen Device
Falls ihr vom Handy oder einem anderem PC zugreifen wollt:
die Addresse für euer Server ist: http://\<ComputerName\>/WebQuiz

\<ComputerName\> bezeichnet den Namen eures Rechners... keine ahnung zum Beispiel Sandro_Hurensohn_PC

also mein Computer hab ich zum beispiel bacock genant. baCOCK ba.......COOOOOOOCK

demnach ist die Addresse:
http://bacock/WebQuiz 
für mich.

und bei Sandro Hurensohn:
http://Sandro_Hurensohn_PC/WebQuiz

Das funktioniert nur lokal, aber das passt so. Sonst müssten wir beim Router Port forwarding einstellen und das ist unnötig und ziemlich nervig... außerdem ginge das nicht im Netz unserer FH weil wir keine Rechte auf die Router haben.
