# AutoCore

Sistema de gerenciamento para oficinas mecânicas desenvolvido com **Laravel**.

## 🛠️ Tecnologias

- **Backend:** Laravel
- **Frontend:** Blade, Tailwind CSS
- **Build Tool:** Vite
- **Banco de Dados:** MySQL

## 🏗️ Arquitetura

O fluxo de dados da aplicação segue a seguinte ordem:

```text
Controller 
   ↓ 
Request (Validação) 
   ↓ 
Service (Regra de Negócio) 
   ↓ 
Model (Dados) 
   ↓ 
Database   