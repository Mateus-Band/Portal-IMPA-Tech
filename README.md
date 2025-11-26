# Portal IMPA Tech — Versão PHP

Protótipo do Portal do Estudante IMPA Tech usando PHP 8+ e TailwindCSS.

## 📦 Tecnologias

- PHP 8.0+
- Nginx/Apache
- TailwindCSS 3.4
- JavaScript Vanilla

## 🚀 Como executar

### Opção 1: Apache/PHP local

1. Instalar dependências:
```bash
composer install
npm install
```

2. Compilar CSS:
```bash
npm run build:css
```

3. Configurar servidor Apache:
   - DocumentRoot: `/caminho/do/projeto/public`
   - Habilitar mod_rewrite

4. Acessar: `http://localhost`

### Opção 2: Docker
```bash
cd infra
docker-compose up -d
```

Acessar: `http://localhost:8080`

### Opção 3: PHP Built-in Server (desenvolvimento)
```bash
composer install
npm install
npm run build:css
php -S localhost:8000 -t public
```

Acessar: `http://localhost:8000`

## 📁 Estrutura

- `public/` - Arquivos públicos (DocumentRoot)
- `src/` - Código PHP (Controllers, Views, etc)
- `config/` - Configurações e rotas
- `infra/` - Docker e Nginx

## 🎨 Dark Mode

O tema escuro é gerenciado via JavaScript + LocalStorage.