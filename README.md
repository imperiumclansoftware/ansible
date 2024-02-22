# Ansible playbooks collection for Imperium Clan

A collection of ansible playbooks for clan plateform

## Python Lib to install :

- ```pSysCoPg2``` : Installation de postgresql

```bash
pip install psycopg2-binary
```

## Extension ansible to install :

- ```community.postgresql```

```bash
ansible-galaxy collection install community.postgresql
```
- ```community.docker```

```bash
ansible-galaxy collection install community.docker
```

## Pour les serveurs Kubernetes

### Pour le master

```ini
[kubernetes-master]
<ip-matser> hostname=master-node master=<ip-matser> 

```
### Pour les workers

```ini
[kubernetes-worker]
<ip-worker1> hostname=worker1 master=<ip-matser> 
<ip-worker2> hostname=worker2 master=<ip-matser> 
```