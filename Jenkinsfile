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
			sudo docker build --tag=phpedsi .
			}	
		}
		stage('Deploy Container'){
			steps{
			sudo docker run -p 80:80 --name phpedsi --rm -d php54
			}
		}
	}
}
