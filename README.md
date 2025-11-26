
# Portal IMPA Tech — Protótipo do Front-end

Este repositório contém o **protótipo visual** do Portal IMPA Tech, usando uma arquitetura **monorepo leve**, onde por enquanto existe apenas o app:

- `apps/web` → Front-end em Next.js + TailwindCSS

O backend (`apps/api`) será adicionado futuramente, sem necessidade de refazer a estrutura.

---

## 🚀 Tecnologias utilizadas

- **Next.js 14 (pages router)**
- **React 18**
- **TailwindCSS**
- **TypeScript**
- Estrutura monorepo simples

---

## 📦 Estrutura de pastas

```

Portal-IMPA-Tech/
├── apps/
│   └── web/                 # Front-end (Next.js)
│       ├── public/
│       ├── src/
│       │   ├── components/
│       │   ├── layouts/
│       │   ├── pages/
│       │   ├── styles/
│       │   └── utils/
│       ├── package.json
│       ├── tailwind.config.js
│       ├── postcss.config.js
│       └── next.config.js
├── docs/
├── infra/
├── sql/
└── README.md

````

> 📝 A pasta `apps/` foi criada para permitir adicionar outros apps futuramente (API, mobile, etc.).
> No estágio atual, **somente `web/` existe, e isso é correto**.

---

## 🔧 Como rodar o projeto

### 1️⃣ Ir para a pasta do front-end
```bash
cd apps/web
````

### 2️⃣ Instalar dependências

```bash
npm install
```

### 3️⃣ Rodar em modo desenvolvimento

```bash
npm run dev
```

O site ficará disponível em:

👉 **[http://localhost:3000](http://localhost:3000)**

---

## 📱 Suporte a celulares?

Sim.
Todo o layout foi escrito usando **Tailwind responsive classes**, e o site está pronto para mobile por padrão.

Para testar no navegador:

* **Chrome / Edge / Opera:**
  `Ctrl + Shift + I` (devtools) → Pressione o ícone de celular (Toggle Device Mode)

Caso seu navegador não tenha o atalho, usar:

* Menu → Desenvolvedor → Ferramentas de desenvolvedor.

---

## 📘 O que já está implementado

* Layout básico do portal
* Cabeçalho e rodapé
* Página inicial com cards de projetos
* Estilos responsivos (desktop/tablet/celular)
* Tailwind configurado
* Estrutura pronta para expansão

---

## 🛠 Próximos passos sugeridos

1. Criar a página de disciplinas (`/disciplines`)
2. Criar o admin visual básico
3. Adicionar o backend (quando for necessário):

   ```
   apps/api/
   ```
4. Migrar conteúdo real, autenticação e banco de dados

---

## 📄 Licença

Uso acadêmico e interno do projeto IMPA Tech.

---

## 🙋 Autor

Desenvolvido por **Mateus Bandeira** com apoio do ChatGPT para estruturação e prototipação.
