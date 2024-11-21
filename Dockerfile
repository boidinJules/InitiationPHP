# Utiliser l'image officielle Nginx comme base
FROM nginx:latest

# Copier le contenu du dossier Serie3/activite1 dans le répertoire de Nginx
COPY ./Serie3/activite1 /usr/share/nginx/html

# Exposer le port 80 pour le serveur web
EXPOSE 80
