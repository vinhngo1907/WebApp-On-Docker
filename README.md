# WebApp-On-Docker
# Deploy a basic sample website on kubernetes through docker cloud
# command line

# Start minikube with virtual box or hyper-V
## In this demo, I started minikube with hyper-V on Window 
## Check minikube status 
## Check service: minikube service
## Check ip: minikube ip

# Get started demo
## Start webhtml
### Deploy pvc file: kubectl apply -f deployment/htmlwebpvc.yml
### Deploy file deployment: kubectl apply -f deployment/htmlwebdeployment.yml
### Go to borwser with your minikube ip

## Start phphtml
### Deploy pvc file: kubectl apply -f deployment/phpwebpvc.yml
### Deploy file deployment: kubectl apply -f deployment/phpwebdeployment.yml
### Go to borwser with your minikube ip