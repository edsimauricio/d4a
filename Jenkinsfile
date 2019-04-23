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
			sudo docker build --tag=phpEDSIv1 /home/backup/php54
			}	
		}
		stage('Deploy Container'){
			steps{
			sudo docker run -p 80:80 --name phpEDSIv1 --rm -d php54
			}
		}
	}
}
