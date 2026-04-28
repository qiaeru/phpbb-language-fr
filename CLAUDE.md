# Guide de traduction phpBB FR

Référence EN : `../british_english/`. Ne pas la modifier.

## Style cible

Vouvoiement. Naturel et direct (registre Microsoft / Google / Discourse FR). Phrases courtes, voix active, pas de tournures administratives.

**Bannir** : « Veuillez » (par défaut), « Une erreur est survenue lors de… », « que vous avez spécifié », « à présent », « prématurément », « afin de », « courriel », « Rapporter » (Report), « transférer » (upload), « ultérieurement », « dans le cas où ».

**Préférer** : impératif direct, « Échec de… » / « Impossible de… », « indiqué » (si nécessaire), « pour », « e-mail », « Signaler », « envoyer/importer », « plus tard », « si ».

**Pas de style télégraphique** (règle prioritaire — fait souvent défaut sur cette traduction). Tout ce qui est affiché à l’utilisateur comme un message doit être une **vraie phrase française** avec sujet et verbe conjugué, ponctuée. Cette règle prime sur la concision.

| Bannir (télégraphique)            | Préférer (phrase complète)               |
|-----------------------------------|------------------------------------------|
| Avatar trop volumineux.           | L’avatar est trop volumineux.            |
| Fichier introuvable.              | Le fichier est introuvable.              |
| Mot de passe trop court.          | Le mot de passe est trop court.          |
| Compte désactivé manuellement.    | Le compte a été désactivé manuellement.  |
| Type de groupe invalide.          | Le type de groupe est invalide.          |
| Aucun forum.                      | Aucun forum n’est disponible.            |
| Aucune notification.              | Vous n’avez aucune notification.         |
| Échec de la connexion au serveur. | La connexion au serveur a échoué.        |
| Réessayez. (en fin de phrase)     | veuillez réessayer / réessayez plus tard |
| Route « %s » introuvable.         | La route « %s » est introuvable.         |

**Préférer la forme active** « X a échoué » à la nominalisation « Échec de X » quand X est un nom d’action (« la connexion a échoué » > « Échec de la connexion »).

**Exceptions** où le style court reste légitime :

- Boutons et libellés de champ d’une ou deux mots : « Annuler », « Modifier », « Nom d’utilisateur ».
- En-têtes de section et labels d’icônes : « Erreur », « Avertissement ».
- Statuts d’une ligne de tableau : « Activé », « Hors ligne ».
- Phrases déjà longues de plus de 6 mots qui se lisent naturellement comme une phrase nominale française (« Aucun message non lu », « Au moins un message de ce sujet est en attente d’approbation »).

En cas de doute, écrire la phrase comme on la dirait à voix haute à quelqu’un. Si elle sonne robotique, ajouter le sujet et le verbe.

## Glossaire

Le **glossaire complet** des termes EN → FR est dans [GLOSSARY.md](GLOSSARY.md). Toujours s’y référer avant de traduire un terme métier (Post, Topic, Forum, Report, Upload, Email, Watch, etc.), une action utilisateur, un rôle, un état, ou un sigle.

Règles de glossaire qui priment :

- Un terme listé dans `GLOSSARY.md` se traduit **toujours pareil**.
- **Sigles** : franciser quand l’anglais n’est pas parlant pour un FR (ACP→PCA, MCP→PCM, UCP→PCU, PM→MP, BCC→Cci). Conserver les standards techniques universels (URL, IP, HTTP/S, OAuth, AJAX, FAQ, BBCode, etc.). Ne pas inventer un sigle FR inexistant.
- Un terme rencontré plusieurs fois mais absent du glossaire → l’**ajouter à `GLOSSARY.md`** après décision, avant de poursuivre la traduction.

## Typographie FR

- **Espace insécable U+00A0** avant `:` `;` `!` `?` `»` et après `«`. Le corpus utilise U+00A0 partout — préserver, ne jamais convertir en espace normal. Lors de la rédaction d’une nouvelle chaîne, **toujours** insérer un U+00A0 (et non un espace normal) avant ces signes : c’est la cause d’erreur n°1 du chantier.
- Guillemets français `« … »` pour citer un nom de fichier / contenu / option. Pas de `"…"`.
- Apostrophe typographique `’` (U+2019), pas `'`.
- Majuscules accentuées : « À É Ç È Ê ».
- Titres en style FR : seul le premier mot prend la majuscule, **y compris pour les formes longues d’acronymes**. Écrire « Panneau de contrôle d’administration » (et non « Panneau de Contrôle d’Administration »). Le sigle reste en capitales (PCA, PCM, PCU).
- **En milieu de phrase**, même les noms de modules redeviennent minuscules : « Consulte le panneau de contrôle utilisateur » et non « Consulte le Panneau de contrôle utilisateur ». Le sigle (PCU) conserve ses capitales en toutes positions.

## Anti-patterns → cibles (exemples vus en corpus)

| Avant                                                        | Après                              |
|--------------------------------------------------------------|------------------------------------|
| Une erreur est survenue lors du traitement de votre requête. | Échec du traitement de la requête. |
| Votre requête a expiré prématurément. Veuillez réessayer.    | La requête a expiré. Réessayez.    |
| Le fichier que vous avez spécifié est introuvable.           | Fichier introuvable.               |
| Vous êtes à présent abonné à ce sujet.                       | Vous suivez ce sujet.              |
| Veuillez saisir le titre du sujet.                           | Saisissez le titre du sujet.       |
| Cliquez ici afin de consulter X                              | Voir X / Cliquez pour consulter X  |
| n’a pas pu être X                                            | impossible de X / Échec de X       |
| dans le cas où                                               | si                                 |

## Variables, HTML, PHP

- **Placeholders** `%s` `%1$s` `%d` : conserver à l’identique. Chaque placeholder de l’EN doit apparaître exactement une fois dans la FR.
- **Balises HTML** (`<strong>` `<em>` `<a>` `<br>`) : conserver. Le corpus utilise `<br>` (HTML5), ne pas restaurer `<br />`.
- **Short array `[]`** : déjà adopté, conserver. Ne pas réintroduire `array()`.
- **Clés** (gauche du `=>`) et **structure du fichier** : ne jamais modifier.

## Cas particuliers

- `DATE_FORMAT` = `|d F Y|` (mois en lettres). Conserver.
- `COLON` = `' :'` (avec NBSP). Conserver.
- `BYTES_SHORT` = `'o'`, `KB` = `'Ko'`, `MB` = `'Mo'`, `GB` = `'Go'`.
- `AND` = `'et'` (minuscule).
- `DOWNLOAD_COUNTS[0]` / `VIEWED_COUNTS[0]` = forme « Pas encore … » (cohérent avec EN « Not downloaded yet »).

## Pluriels

Tableaux `[1 => …, 2 => …]` : `1` = singulier (couvre aussi 0 en FR), `2` = pluriel. Si EN définit une forme `0` distincte, la conserver.

## Notes techniques pour Claude (leçons du chantier)

### Méthode d’édition fiable

**Toujours utiliser le remplacement par clé (line-based)**, jamais par texte de valeur :

```python
# Pour chaque ligne, matcher la clé via regex :
m = re.match(r"^(\s*)'([^']+)'(\s*=>\s*)(.*?)(,?\s*(?://.*)?)$", line.rstrip('\n'))
# Si la clé est dans la table de remplacements, réécrire la valeur.
```

Avantages :

- Pas de dépendance au contenu exact de l’ancienne valeur.
- Pas de problème NBSP / apostrophe / guillemets dans la matching.
- Idempotent (relancer ne casse rien).

### Pièges de l’outil Edit

- L’outil `Edit` échoue silencieusement si l’`old_string` contient un espace normal là où le fichier a un U+00A0. Le message d’erreur « tried swapping \uXXXX escapes » signale ce cas.
- Avant tout chantier, vérifier la présence de NBSP avec un compteur de codepoints (le corpus phpBB FR utilise U+00A0, **pas** U+202F).
- Pour des Edits ciblés (≤ 5 lignes simples), Edit reste OK ; au-delà, passer au script Python.

### Multi-lignes (arrays imbriqués)

Les valeurs de type `[1 => '…', 2 => '…']` (ex. `NOTIFICATION_POST`, `NOTIFICATION_BOOKMARK`) ne matchent pas la regex line-based. Les traiter à part avec un `re.subn(...)` multi-ligne, ou via `old_string`/`new_string` Edit en lisant chaque sous-ligne après neutralisation des NBSP.

### Vérifications systématiques

Après chaque batch :

```bash
# 1. Parité du nombre de clés
python -c "import re;print(len(re.findall(r\"^\s*'[A-Z_][A-Z_0-9]*'\s*=>\", open(P).read(), re.M)))"
# 2. Aucun placeholder perdu
diff <(grep -oE '%[0-9]*\$?[sd]' EN.php) <(grep -oE '%[0-9]*\$?[sd]' FR.php)
# 3. Syntaxe PHP
php -l FR.php   # si php disponible
```

### Conventions du dépôt

- Encodage UTF-8 sans BOM.
- Apostrophes typographiques `’` partout (U+2019).
- `<br>` (HTML5) et non `<br />`.
- `[]` au lieu de `array()`.
- Préserver l’alignement des `=>` existant ; ne pas reformater globalement.

### Ordre de travail validé

`common.php` → `ucp.php` → `posting.php` → `viewtopic.php` / `viewforum.php` → `mcp.php` → `acp/*.php` → `email/*.txt` → `help/*.php` → `ext/*/language/fr/*.php`.

Validation utilisateur après `common.php` avant de poursuivre.
