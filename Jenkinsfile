pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                echo "Mengambil source code dari GitHub..."
                checkout scm
            }
        }

        stage('Install Dependencies') {
            steps {
                echo "Menjalankan composer install (jika composer.json ada)..."
                script {
                    if (fileExists('composer.json')) {
                        bat 'composer install'
                    } else {
                        echo "composer.json tidak ditemukan, skip composer"
                    }
                }
            }
        }

        stage('Run PHPUnit Tests') {
            steps {
                script {
                    if (fileExists('vendor\\bin\\phpunit.bat')) {
                        echo "Menjalankan PHPUnit..."
                        bat 'vendor\\bin\\phpunit.bat --testdox'
                    } else if (fileExists('vendor\\bin\\phpunit')) {
                        echo "Menjalankan PHPUnit..."
                        bat 'vendor\\bin\\phpunit --testdox'
                    } else {
                        echo "PHPUnit tidak ditemukan, skip test"
                    }
                }
            }
        }

        stage('Build Completed') {
            steps {
                echo "Build selesai!"
            }
        }

    }

    post {
        success {
            echo "Build sukses!"
        }
        failure {
            echo "Build gagal!"
        }
    }
}
