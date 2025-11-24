# Documento Técnico — Portal do Estudante IMPA Tech

## Visão Geral
Portal híbrido (público + área restrita) para centralizar conteúdo do curso, materiais, projetos e serviços. Nome: Portal do Estudante IMPA Tech. Domínio inicial: portal.impatech.edu.br

## Stack (recomendado)
- PHP (esqueleto fornecido) em Apache/PHP-FPM
- Banco: PostgreSQL
- Search: Meilisearch (recomendado) ou Postgres full-text
- Autenticação: Google Workspace OAuth (domínio restrito @impatech.edu.br)
- Armazenamento estático: S3 / MinIO / Storage institucional
- Deploy: Docker Compose (dev) e containers no servidor institucional (prod)

## Autenticação
- Usar OAuth2 Google: restringir por domínio. Fluxo:
  1. Usuário clica "Entrar com Google"
  2. Google retorna id_token com email e email_verified
  3. Verificar domínio (endswith('@impatech.edu.br')) e criar/atualizar usuário no banco
- Roles: student, teacher, coord, admin
- Sessões: cookies HttpOnly ou JWT em cookie

## Banco de Dados
Esquema inicial em sql/init_schema.sql. Entradas iniciais de disciplinas em sql/init_disciplines.sql (substituir pelos nomes reais do PDF).

## Busca
- Instalar Meilisearch, indexar disciplinas, materiais e projetos
- Barra de pesquisa com autocomplete (frontend) e filtros por tipo/ano/periodo

## Painel admin
- CRUD de disciplinas, materiais, projetos e usuários
- Workflow de publicação: draft -> review -> published
- Uploads válidos: PDF, ZIP, imagens (limite por arquivo configurável)

## Infra & Deploy
- DNS: criar registro A para portal.impatech.edu.br apontando para servidor
- Nginx como reverse proxy + Let's Encrypt (certbot) para TLS
- Docker Compose no servidor para serviços (web + db + meilisearch + minio)
- Backups: scripts automatizados (pg_dump), armazenar em S3/Storage institucional

## Segurança
- Forçar HTTPS
- Validação e escaneamento de uploads
- Proteção contra CSRF/SQLi/XSS (prepared statements, escaping)
- MFA para contas admin

## Observações finais
- O manual de marca (pdf fornecido) deve ser seguido estritamente para logos e paleta de cores.
- Integrar disciplinas reais do PDF: substitua os placeholders em sql/init_disciplines.sql.
