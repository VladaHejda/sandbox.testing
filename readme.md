Bazar knih - ukázka
===================

Instalace:
----------

### 1.
Naklonujte si k sobě repozitář bazaru pomocí gitu:
```
git clone https://github.com/VladaHejda/bazar-knih-sample.git
```

### 2.
Nainstalujte závisloti pomocí composeru:
```
composer install
```

### 3.
Pokud nemáte, vytvořte si databázi.

### 4.
Vytvořte v `app/config` soubor `.config.local.neon` podle vzoru z `.config.local.template.neon`.

### 5.
Vytvořte si tabulky pomocí Doctrine:
```
vendor\bin\doctrine orm:schema-tool:create
```

### 6.
Naplňte databázi testovacími daty ze souboru `test-data.sql`.

### 7.
Spusťte bazar ve webovém prohlížeči.
