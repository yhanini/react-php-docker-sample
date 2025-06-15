FROM node:18-alpine

WORKDIR /app

# Copier les fichiers de configuration npm
COPY package*.json ./

# Installer les dépendances avec une installation propre
RUN npm cache clean --force && \
    npm install

# Copier tout le reste du code source
COPY public/ ./public/
COPY src/ ./src/

# Définir les variables d'environnement
ENV NODE_ENV=development
ENV PATH /app/node_modules/.bin:$PATH

EXPOSE 3000
CMD ["npm", "start"]




