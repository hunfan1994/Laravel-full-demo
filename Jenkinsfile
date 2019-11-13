pipeline {
    agent { docker 'docker201904171/jenkinsci-docker:latest' }
    stages {
        stage('build') {
            steps {
                sh 'php --version'
                sh 'composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/'
                sh 'composer install'
                sh 'cp .env.example .env'
                sh 'ls -lah'
                sh 'php artisan key:generate'
                sh '$WORKSPACE/vendor/bin/phpunit tests/Feature/OtherBasicTest.php'
            }
        }
    }
}