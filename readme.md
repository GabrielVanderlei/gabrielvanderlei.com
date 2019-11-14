# Sobre o projeto
Esse repositório é referente ao site gabrielvanderlei.com com o objetivo de permitir a divulgação de serviços, permitir que as pessoas entrem em contato para tirar dúvidas dentro da própria plataforma disponibilizada pelo site e oferecer uma plataforma para gestão de projetos freelance. Podemos oferecer projetos prontos para venda no site também, se for interessante.

## Estrutura do repositório
O repositório vai utilizar o Git Flow como padrão de repositório:
- production (master) branch
- developer branch
- features

Se for necessário podemos criar mais branchs.
Como o projeto possui uma área front-end e outra back-end esse padrão vai ser dividido em branch de interface de usuário e em branch de servidor.

## Infraestrutura
Será utilizado o Angular como framework front-end e o AdonisJS como framework back-end.
O Angular de produção vai estar na branch master, para permitir o uso com o github pages.
O framework de servidor pode ter sua branch configurada pois será utilizado o Heroku como base do servidor, então ele vai ficar na branch server.

## Visualização da estrutura

- master (Github Pages prod)
- server/master (Heroku prod)

- app/developer (UI developer branch)
- app/feature/{feature name} (UI feature branch)

- server/developer (Server developer branch)
- server/feature/{feature name} (Server feature branch)