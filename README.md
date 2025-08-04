# Dual Tone

A dual-tone + white block theme for WordPress, currently in early stages of development.

## Overview

Dual Tone is a custom WordPress block theme designed with a focus on clean, minimal design using a carefully curated dual-color palette with white. Built using the latest WordPress block editor (Gutenberg) capabilities, this theme leverages modern web standards and block-based development patterns.

## Development Status

🚧 **Early Development** - This theme is currently in active development and not ready for production use.

## Color System

The Dual Tone theme features a carefully crafted color system based on dual-color palettes with white. All color schemes have been generated using the [Tailwind Colour Generator](https://uicolors.app/) with color pairings selected from randomly generated palettes via [ColorSpace](https://mycolor.space/).

### Color Palette Structure

Each color variation follows a consistent naming convention with Tailwind generator references:

| Colour Palette Name | Tailwind Generator Reference |
|---------------------|------------------------------|
| Primary Faint       | 50                           |
| Primary Pale        | 100                          |
| Primary Light       | 200                          |
| Primary Regular     | 300                          |
| Primary Medium      | 500                          |
| Primary Headings    | 700                          |
| Primary Text        | 950                          |

### Available Style Variations

#### Default
- Primary: `#3b83bc` — [Steel Blue](https://uicolors.app/generate/3b83bc)
- Secondary: `#bb583b` — [Brown Rust](https://uicolors.app/generate/bb583b)

#### Scampi
- Primary: `#635aa2` — [Scampi](https://uicolors.app/generate/635aa2)

#### Avocado
- Primary: `#7e864b` — [Avocado](https://uicolors.app/generate/7e864b)

## Theme Structure

```
dual-tone/
├── README.md
├── style.css
├── theme.json          # Theme configuration and global styles
├── functions.php       # Theme functions
├── assets/
│   ├── fonts/          # Custom font files
│   │   ├── exo-2/
│   │   ├── inter/
│   │   └── lato/
│   └── styles/         # Additional CSS files
├── parts/              # Template parts
│   ├── footer.html
│   └── header.html
├── patterns/           # Block patterns
├── styles/             # Style variations
└── templates/          # Block templates
    ├── home.html
    ├── index.html
    ├── page.html
    └── single.html
```

## Requirements

- WordPress 6.0 or higher
- PHP 8.0 or higher
- Block editor (Gutenberg) enabled

## Author

**Troy Chaplin**
- Website: [troychaplin.ca](https://troychaplin.ca)
- GitHub: [@troychaplin](https://github.com/troychaplin)

## License

This theme is licensed under the GPL v2 or later.

---

*Last updated: August 2025*