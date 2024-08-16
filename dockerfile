# Use a imagem do PHP com Apache como base
FROM php:8.1-apache-buster

# Exponha a porta 80 do contêiner
EXPOSE 80

# Copie o conteúdo da pasta src para o diretório padrão do Apache no contêiner
#COPY src/ /var/www/html/