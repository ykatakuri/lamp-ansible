# Configuration de la Stack LAMP via ANSIBLE

1. Configurer la VM ou la machine host du projet
2. Installer Ansible
3. Créer un fichier inventaire(hosts) pour séparer le serveur de la base de données avec le serveur web
4. Surcharger le fichier ansible.cfg pour qu'il prenne en compte le fichier inventaire
5. Créer notre fichier playbook
    5.1. Section serveur Web
        - Définir le host
        - Ajouter les privilèges d'éxécution des tâches
        - Définir le chemin vers les fichiers des variables de configuration du playbook
        - Lister les tâches à effectuer(installation des paquets, autorisations, déploiement de l'application, démarrage des services, etc)
    5.2. Section serveur de base de données
        - Définir le host
        - Ajouter les privilèges d'éxécution des tâches
        - Définir le chemin vers les fichiers des variables de configuration
        - Lister les tâches à effectuer(installation des paquets, autorisations, démarrage des services, etc)
    5.3. Définir la liste des tâches handlers
6. S'assurer que nos tâches sont indempotentes
7. Lancer le playbook
8. Tester notre application

