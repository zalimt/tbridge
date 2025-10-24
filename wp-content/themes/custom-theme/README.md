# Custom Theme

A WordPress theme with organized SCSS structure and automatic compilation.

## 🎨 CSS Organization

All styles are now organized in SCSS format with a modular structure:

```
scss/
├── _variables.scss   # CSS variables and theme colors
├── _fonts.scss       # Font face declarations
├── _normalize.scss   # CSS reset/normalization
├── _base.scss        # Base styles and utilities
├── _header.scss      # Header and navigation
├── _sections.scss    # Main sections (hero, services, etc.)
├── _forms.scss       # Form and input styles
└── _responsive.scss  # All media queries
```

The main `style.scss` imports all partials and compiles into `style.css`.

## 🛠️ Development Workflow

### First Time Setup

```bash
npm install
```

### Development (Auto-compile on save)

Start the SCSS watcher to automatically compile your changes:

```bash
npm run watch
```

This will watch for any changes in your SCSS files and automatically compile them to `style.css`.

### Build for Production

To compile SCSS with compression:

```bash
npm run build
```

### Development with Expanded CSS (easier debugging)

```bash
npm run dev
```

## 📝 Making Style Changes

1. **Start the watcher**: Run `npm run watch` in your terminal
2. **Edit SCSS files**: Make changes to any `.scss` file in the `scss/` folder or `style.scss`
3. **Save**: The CSS will automatically compile to `style.css`
4. **Refresh browser**: See your changes immediately

## 🗂️ SCSS Structure Guide

### Where to add new styles:

- **Colors/Variables**: `scss/_variables.scss`
- **Typography/Fonts**: `scss/_fonts.scss`
- **Global Base Styles**: `scss/_base.scss`
- **Header/Menu**: `scss/_header.scss`
- **Page Sections**: `scss/_sections.scss`
- **Forms/Inputs**: `scss/_forms.scss`
- **Responsive/Media Queries**: `scss/_responsive.scss`

### Benefits of this structure:

- ✅ No more conflicting CSS files
- ✅ No need for `!important` overrides
- ✅ Easy to find and edit styles
- ✅ Automatic compilation
- ✅ Better organization and maintainability
- ✅ Can use SCSS features (nesting, variables, mixins)

## 🎯 SCSS Features You Can Use

### Nesting
```scss
.hero {
    padding: 20px;
    
    &_title {
        font-size: 24px;
    }
    
    &:hover {
        opacity: 0.8;
    }
}
```

### Variables
```scss
$primary-color: #0e2e40;

.button {
    background: $primary-color;
}
```

### Mixins (Add to style.scss if needed)
```scss
@mixin flex-center {
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    @include flex-center;
}
```

## 📦 What Was Changed?

1. ✅ Removed `assets/index-CIbRv2Gr.css` (generated Vite file)
2. ✅ Combined all styles into organized SCSS partials
3. ✅ Updated `index.php` to only load `style.css`
4. ✅ Set up automatic SCSS compilation
5. ✅ Eliminated CSS conflicts and `!important` overrides

## 🚫 .gitignore Recommendation

Add to your `.gitignore`:
```
/wp-content/themes/custom-theme/node_modules/
/wp-content/themes/custom-theme/package-lock.json
```

## 💡 Tips

- Always run `npm run watch` when developing
- Don't edit `style.css` directly - edit the SCSS files instead
- `style.css` is auto-generated and will be overwritten
- Use SCSS nesting to keep related styles together
- The watcher needs to stay running to auto-compile

## 🐛 Troubleshooting

**Q: Changes not showing up?**
- Make sure `npm run watch` is running
- Check that you saved the SCSS file
- Hard refresh your browser (Cmd+Shift+R on Mac, Ctrl+Shift+R on Windows)

**Q: Compilation errors?**
- Check your SCSS syntax
- Look at the terminal for error messages
- Make sure all colors are valid hex codes
- Check that all brackets are closed

**Q: Need to stop the watcher?**
- Press `Ctrl+C` in the terminal

