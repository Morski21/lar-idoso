# 🏠 Lar dos Idosos - Prudentópolis/PR

Sistema web para o Lar dos Idosos de Prudentópolis, desenvolvido com Laravel e focado na experiência do usuário e responsividade.

## ✨ Características

- **Design Responsivo**: Funciona perfeitamente em desktop, tablet e mobile
- **Menu Hambúrguer**: Navegação intuitiva para dispositivos móveis
- **Carrossel de Imagens**: Galeria interativa na página inicial
- **Sistema de Doações**: Formulário completo para contribuições
- **Página de Prioridades**: Lista das necessidades da instituição
- **Dashboard**: Painel administrativo (em desenvolvimento)

## 🚀 Tecnologias Utilizadas

- **Backend**: Laravel 10
- **Frontend**: HTML5, CSS3, JavaScript
- **Design**: CSS Grid, Flexbox, Media Queries
- **Ícones**: Emojis e Font Awesome
- **Responsividade**: Mobile-first approach

## 📱 Páginas Disponíveis

- **Home** (`/`): Página inicial com carrossel e informações
- **Prioridades** (`/prioridades`): Lista de necessidades da instituição
- **Doação** (`/doar`): Formulário para contribuições
- **Dashboard** (`/dashboard`): Painel administrativo
- **Testes**:
  - `/responsive-test`: Teste de responsividade
  - `/hamburger-test`: Debug do menu hambúrguer

## 🎨 Design System

### Cores
- **Primária**: Laranja (#f97316)
- **Secundária**: Laranja escuro (#ea580c)
- **Accent**: Amarelo (#fbbf24)
- **Warm**: Laranja quente (#fb923c)

### Breakpoints
- **Desktop**: > 768px
- **Tablet**: 481px - 768px
- **Mobile**: ≤ 480px

## 🛠️ Instalação

1. **Clone o repositório**:
   ```bash
   git clone [URL_DO_REPOSITORIO]
   cd lar-idoso
   ```

2. **Instale as dependências**:
   ```bash
   composer install
   npm install
   ```

3. **Configure o ambiente**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure o banco de dados** no arquivo `.env`

5. **Execute as migrações**:
   ```bash
   php artisan migrate
   ```

6. **Inicie o servidor**:
   ```bash
   php artisan serve
   ```

## 📁 Estrutura do Projeto

```
lar-idoso/
├── app/                    # Lógica da aplicação
├── public/                 # Arquivos públicos
│   ├── css/               # Estilos CSS
│   └── images/            # Imagens do projeto
├── resources/
│   ├── views/             # Templates Blade
│   │   ├── layouts/       # Layouts base
│   │   └── partials/      # Componentes reutilizáveis
│   └── css/               # CSS source
├── routes/                # Rotas da aplicação
└── storage/               # Arquivos de armazenamento
```

## 🎯 Funcionalidades Implementadas

### ✅ Concluído
- [x] Design responsivo completo
- [x] Menu hambúrguer para mobile
- [x] Carrossel de imagens na home
- [x] Sistema de cores consistente
- [x] Páginas de prioridades e doação
- [x] Layouts reutilizáveis
- [x] CSS organizado por página

### 🚧 Em Desenvolvimento
- [ ] Sistema de autenticação
- [ ] Painel administrativo
- [ ] Upload de imagens
- [ ] Sistema de doações online
- [ ] Banco de dados

## 📱 Responsividade

O projeto foi desenvolvido com foco na experiência mobile, incluindo:

- **Menu hambúrguer** animado
- **Touch-friendly** buttons e links
- **Imagens responsivas**
- **Formulários otimizados** para mobile
- **Carrossel touch** funcional

## 🎨 Customização

### Cores
As cores podem ser facilmente alteradas no arquivo `public/css/app.css` através das variáveis CSS:

```css
:root {
    --primary: #f97316;
    --secondary: #ea580c;
    --accent: #fbbf24;
    --warm: #fb923c;
}
```

### Imagens do Carrossel
Para adicionar imagens ao carrossel, coloque os arquivos na pasta `public/images/carousel/` e atualize o arquivo `resources/views/home.blade.php`.

## 🤝 Contribuição

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## 📞 Contato

**Lar dos Idosos - Prudentópolis/PR**
- 📧 Email: [email@laridosos.com]
- 📱 Telefone: [telefone]
- 🏠 Endereço: [endereço]

---

Desenvolvido com ❤️ para o Lar dos Idosos de Prudentópolis