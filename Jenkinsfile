pipeline{
	agent any
	stages{
		stage('Initial Setup'){
			steps{
				sh 'echo Starting...'
			}
		}
		stage('Checking Docker'){
			steps{
				sh 'sudo docker ps'
			}
		}
		stage('Build Docker'){
			steps{
			sh 'sudo docker build --tag=phpedsi .'
			}	
		}
		stage('Deploy Container'){
			steps{
			sh 'sudo docker-componse up -d'
			}
		}
	}
}
