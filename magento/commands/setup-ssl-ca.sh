#!/bin/bash
docker-compose exec -T --user root app mkcert -install
docker cp $(docker-compose ps -q app|awk '{print $1}'):/root/.local/share/mkcert/rootCA.pem .
echo "System password requested to install certificate authority on host..."
sudo security add-trusted-cert -d -r trustRoot -k /Library/Keychains/System.keychain rootCA.pem
rm rootCA.pem
