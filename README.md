# Stack LAMP via Ansible

1. Installer Ansible
2. Créer un fichier inventaire(hosts) pour séparer le serveur de la base de données avec le serveur web
3. Surcharger le fichier ansible.cfg pour qu'il prenne en compte le fichier inventaire
4. Exécuter le playbook avec la commande ```ansible-playbook playbook.yml -kK
5. Lancer l'application http://163.172.241.105/index.php
