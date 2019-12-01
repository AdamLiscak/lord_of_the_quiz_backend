# Installation vom Server
Findet die virtual machine von Lukas Demetz in virtualbox:

konfiguriert sie nach dieser Anleitung:

https://www.howtogeek.com/122641/how-to-forward-ports-to-a-virtual-machine-and-use-it-as-a-server/

Gehts in Eure virtual machine vom Lukas Demetz wo ihr imunes habt

Schreibt folgendes in die Kommandozeile:

sudo apt install apache2

sudo systemctl enable apache2

sudo systemctl start apache2

sudo ufw allow 80

sudo ufw allow 443

sudo chmod -R 777 /var/www

# Lokation vom Server
Der Server befindet sich hier:

/var/www/html 

Also die Repository von der virtual machine aus in

/var/www/html clonen !:

cd /var/www/html

git clone https://github.com/DPRKunicorn/lord_of_the_quiz_backend.git

sudo chmod -R 777 .

# Zugriff von einem Anderen Device ( prinzipiell müsst ihr das nicht durchlesen )
Falls ihr vom Handy oder einem anderem PC zugreifen wollt:

die Addresse für euer Server ist: http://osboxes/lord_of_the_quiz_backend

demnach ist die Addresse:

http://osboxes/lord_of_the_quiz_backend 

Das funktioniert nur lokal, aber das passt so. Sonst müssten wir beim Router Port forwarding einstellen und das ist unnötig und ziemlich nervig... außerdem ginge das nicht im Netz unserer FH weil wir keine Rechte auf die Router haben.

# Server testen

von einem device auf eurem Netzwerk ( nicht der virtual machine):

öffnet die Kommandozeile:

schreibt 

ping osboxes

falls da kein error kommt seits gut dabei

oder

öffnet den Browser

schreibt

http://osboxes

Falls da so ne ubuntu server seite kommt seits gut dabei.

