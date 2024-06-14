pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git url: 'https://github.com/CHAB-Sreylen/FinalExam_DevOps.git', branch: 'main'
            }
        }

        stage('Build') {
            steps {
                sh 'npm install'
                sh 'composer install'
            }
        }

        stage('Test') {
            steps {
                sh 'npm test'
                sh 'php vendor/bin/phpunit'
            }
        }

        stage('Backup') {
            steps {
                sh 'mysqldump -u root -pYOURPASSWORD dbname > /backup/db_backup_$(date +%F).sql'
            }
        }
    }

    triggers {
        pollSCM('H/5 * * * *')
    }
}
